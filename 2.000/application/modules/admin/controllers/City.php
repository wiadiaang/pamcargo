<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class City extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('city_model');
        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

    }

    public function index()
    {
        $data['get_city'] = $this->city_model->get_all();;
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/city/index";
        $this->load->view('admin/template/index',$data);
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'form' => 'create',
            'button_back' => base_url('admin/city'),
            'action' => base_url('admin/city/create_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city_id' => set_value('city_id'),
    	    'province_id' => set_value('province_id'),
    	    'name' => set_value('name'),
    	    'k_bsni' => set_value('k_bsni'),
            'page' => "Create city",
            'title' => "Rembon Express",
            'main' => "admin/city/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function create_action() 
    {

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $check_code = $this->db->query("select k_bsni from city where k_bsni='" . $this->input->post('k_bsni',TRUE) . "'")->num_rows();
            if($check_code < 1){
                $data = array(
                    'province_id' => $this->input->post('prop',TRUE),
                    'name' => $this->input->post('name',TRUE),
                    'k_bsni' => $this->input->post('k_bsni',TRUE),
                );
                $save = $this->city_model->insert($data);
                // var_dump($save);die();
                if($save){
                    $this->session->set_flashdata('success', $this->lang->line('insert_success'));
                    redirect(base_url('admin/city'));    
                }else{
                    $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                    redirect(base_url('admin/city/create'));    
                }    
            }else{
                $this->session->set_flashdata('error', 'K BSNI '. $this->input->post('k_bsni',TRUE) .' Has Been Registered by Another city');
                redirect(base_url('admin/city/create'));        
            }
        }
    }

    public function update($id) 
    {
        $get_city = $this->city_model->get_by_id($id);
        $data = array(
            'button' => 'Create',
            'form' => 'update',
            'button_back' => base_url('admin/city'),
            'action' => base_url('admin/city/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'province_id' => set_value('province_id', $get_city->province_id),
    	    'city_id' => set_value('city_id', $get_city->city_id),
    	    'name' => set_value('name', $get_city->name),
    	    'k_bsni' => set_value('k_bsni', $get_city->k_bsni),
            'page' => "Update city",
            'title' => "Rembon Express",
            'main' => "admin/city/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function update_action() 
    {
        $id = $this->input->post('city_id',TRUE);
        $k_bsniold = $this->input->post('k_bsni_old',TRUE);
        $k_bsni = $this->input->post('k_bsni',TRUE);
        if($k_bsniold == $k_bsni){
            $data = array(
                'province_id' => $this->input->post('prop',TRUE),
                'name' => $this->input->post('name',TRUE),
                'k_bsni' => $this->input->post('k_bsni',TRUE),
            );
            // var_dump($data);die();
            $update = $this->city_model->update($id, $data);
            if($update){
                $this->session->set_flashdata('success', $this->lang->line('update_success'));
                redirect(base_url('admin/city'));    
            }else{
                $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                redirect(base_url('admin/city/update/'.$id.''));    
            }               
        }else{
            $check_code = $this->db->query("select k_bsni from city where k_bsni='" . $this->input->post('k_bsni',TRUE) . "'")->num_rows();
            if($check_code < 1){
                $data = array(
                    'province_id' => $this->input->post('prop',TRUE),
                    'name' => $this->input->post('name',TRUE),
                    'k_bsni' => $this->input->post('k_bsni',TRUE),
                );
                // var_dump($data);die();
                $update = $this->city_model->update($id, $data);
                if($update){
                    $this->session->set_flashdata('success', $this->lang->line('update_success'));
                    redirect(base_url('admin/city'));    
                }else{
                    $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                    redirect(base_url('admin/city/update/'.$id.''));    
                }    
            }else{
                $this->session->set_flashdata('error', 'P BSNI Has Been Registered by Another city');
                redirect(base_url('admin/city/update/'.$id.''));    
            }    
        }
    }

    public function read($id) 
    {
        $get_city = $this->city_model->get_by_id($id);
        $data = array(
            // 'button' => 'Create',
            'button_back' => base_url('admin/city'),
            'form' => 'read',
            'action' => base_url('admin/city/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'province_id' => set_value('province_id', $get_city->province_id),
    	    'city_id' => set_value('city_id', $get_city->city_id),
    	    'name' => set_value('name', $get_city->name),
    	    'k_bsni' => set_value('k_bsni', $get_city->k_bsni),
            'page' => "Detail city",
            'title' => "Rembon Express",
            'main' => "admin/city/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }

    public function delete() 
    {
        $id =$this->input->post('id',TRUE);
        $row = $this->city_model->get_by_id($id);

        if ($row) {
            $this->city_model->delete($id);
            $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            redirect(base_url('admin/city'));
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            redirect(base_url('admin/city'));
        }
    }

    public function _rules() 
    {	
        $this->form_validation->set_rules('prop', 'Province', 'trim|required');
        $this->form_validation->set_rules('k_bsni', 'k bsni', 'trim|required');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
	    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function ajax_list()
    {
        $list = $this->city_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $city) {
            $province = $this->db->query("select name from province where province_id = '" . $city->province_id . "'")->row();
            if($province != NULL){
                $provincename = $province->name;
            }else{
                $provincename = '-';
            }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $city->name;
            $row[] = $city->k_bsni; 
            $row[] = $provincename; 
            $row[] = '<a href="'.base_url().'admin/city/read/'. $city->city_id.'"  class="btn btn-info">Read</a>
            <a href="'. base_url().'admin/city/update/'.$city->city_id.'" class="btn btn-success">Edit</a>
            <a onclick="hapus('.$city->city_id.')" class="btn btn-danger">Delete</a>'; 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->city_model->count_all(),
                        "recordsFiltered" => $this->city_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    


}