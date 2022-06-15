<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Province extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('province_model');
        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

    }

    public function index()
    {
        $data['get_province'] = $this->province_model->get_all();;
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/province/index";
        $this->load->view('admin/template/index',$data);
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'form' => 'create',
            'button_back' => base_url('admin/province'),
            'action' => base_url('admin/province/create_action'),
    	    'province_id' => set_value('province_id'),
    	    'name' => set_value('name'),
    	    'p_bsni' => set_value('p_bsni'),
            'page' => "Create Province",
            'title' => "Rembon Express",
            'main' => "admin/province/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function create_action() 
    {

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $check_code = $this->db->query("select p_bsni from province where p_bsni='" . $this->input->post('p_bsni',TRUE) . "'")->num_rows();
            if($check_code < 1){
                $data = array(
                    'name' => $this->input->post('name',TRUE),
                    'p_bsni' => $this->input->post('p_bsni',TRUE),
                );
                $save = $this->province_model->insert($data);
                // var_dump($save);die();
                if($save){
                    $this->session->set_flashdata('success', $this->lang->line('insert_success'));
                    redirect(base_url('admin/province'));    
                }else{
                    $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                    redirect(base_url('admin/province/create'));    
                }    
            }else{
                $this->session->set_flashdata('error', 'P BSNI '. $this->input->post('p_bsni',TRUE) .' Has Been Registered by Another city');
                redirect(base_url('admin/province/create'));        
            }
        }
    }

    public function update($id) 
    {
        $get_province = $this->province_model->get_by_id($id);
        $data = array(
            'button' => 'Create',
            'form' => 'update',
            'button_back' => base_url('admin/province'),
            'action' => base_url('admin/province/update_action'),
    	    'province_id' => set_value('province_id', $get_province->province_id),
    	    'name' => set_value('name', $get_province->name),
    	    'p_bsni' => set_value('p_bsni', $get_province->p_bsni),
            'page' => "Update Province",
            'title' => "Rembon Express",
            'main' => "admin/province/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function update_action() 
    {
        $id = $this->input->post('province_id',TRUE);
        $p_bsniold = $this->input->post('p_bsni_old',TRUE);
        $p_bsni = $this->input->post('p_bsni',TRUE);
        if($p_bsniold == $p_bsni){
            $data = array(
                'name' => $this->input->post('name',TRUE),
                'p_bsni' => $this->input->post('p_bsni',TRUE),
            );
            // var_dump($data);die();
            $update = $this->province_model->update($id, $data);
            if($update){
                $this->session->set_flashdata('success', $this->lang->line('update_success'));
                redirect(base_url('admin/province'));    
            }else{
                $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                redirect(base_url('admin/province/update/'.$id.''));    
            }               
        }else{
            $check_code = $this->db->query("select p_bsni from province where p_bsni='" . $this->input->post('p_bsni',TRUE) . "'")->num_rows();
            if($check_code < 1){
                $data = array(
                    'name' => $this->input->post('name',TRUE),
                    'p_bsni' => $this->input->post('p_bsni',TRUE),
                );
                // var_dump($data);die();
                $update = $this->province_model->update($id, $data);
                if($update){
                    $this->session->set_flashdata('success', $this->lang->line('update_success'));
                    redirect(base_url('admin/province'));    
                }else{
                    $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                    redirect(base_url('admin/province/update/'.$id.''));    
                }    
            }else{
                $this->session->set_flashdata('error', 'P BSNI Has Been Registered by Another city');
                redirect(base_url('admin/province/update/'.$id.''));    
            }    
        }
    }

    public function read($id) 
    {
        $get_province = $this->province_model->get_by_id($id);
        $data = array(
            // 'button' => 'Create',
            'button_back' => base_url('admin/province'),
            'form' => 'read',
            'action' => base_url('admin/province/update_action'),
    	    'province_id' => set_value('province_id', $get_province->province_id),
    	    'name' => set_value('name', $get_province->name),
    	    'p_bsni' => set_value('p_bsni', $get_province->p_bsni),
            'page' => "Detail Province",
            'title' => "Rembon Express",
            'main' => "admin/province/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }

    public function delete() 
    {
        $id =$this->input->post('id',TRUE);
        $row = $this->province_model->get_by_id($id);

        if ($row) {
            $this->province_model->delete($id);
            $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            redirect(base_url('admin/province'));
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            redirect(base_url('admin/province'));
        }
    }

    public function _rules() 
    {	
        $this->form_validation->set_rules('p_bsni', 'p bsni', 'trim|required');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
	    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function ajax_list()
    {
        $list = $this->province_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $province) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $province->name;
            $row[] = $province->p_bsni; 
            $row[] = '<a href="'.base_url().'admin/province/read/'. $province->province_id.'"  class="btn btn-info">Read</a>
            <a href="'. base_url().'admin/province/update/'.$province->province_id.'" class="btn btn-success">Edit</a>
            <a onclick="hapus('.$province->province_id.')" class="btn btn-danger">Delete</a>'; 

            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->province_model->count_all(),
                        "recordsFiltered" => $this->province_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    


}