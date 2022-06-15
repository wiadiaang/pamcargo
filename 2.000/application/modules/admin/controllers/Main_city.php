<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_city extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('main_city_model');
        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

    }

    public function index()
    {
        $data['get_main_city'] = $this->main_city_model->get_all();;
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/main_city/index";
        $this->load->view('admin/template/index',$data);
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'form' => 'create',
            'button_back' => base_url('admin/main_city'),
            'action' => base_url('admin/main_city/create_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'code_main_city' => set_value('code_main_city'),
    	    'name' => set_value('name'),
    	    'main_city_province_id' => set_value('province_id'),
            'page' => "Create main city",
            'title' => "Rembon Express",
            'main' => "admin/main_city/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function create_action() 
    {

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $check_code = $this->db->query("select code_main_city from main_city where code_main_city='" . $this->input->post('code_main_city',TRUE) . "'")->num_rows();
            if($check_code < 1){
                $data = array(
                    'code_main_city' => $this->input->post('code_main_city',TRUE),
                    'name' => $this->input->post('name',TRUE),
                    'province_id' => $this->input->post('prop',TRUE),
                );
                $save = $this->main_city_model->insert($data);
                // var_dump($save);die();
                if($save){
                    $this->session->set_flashdata('success', $this->lang->line('insert_success'));
                    redirect(base_url('admin/main_city'));    
                }else{
                    $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                    redirect(base_url('admin/main_city/create'));    
                }    
            }else{
                $this->session->set_flashdata('error', 'Code '. $this->input->post('code_main_city',TRUE) .' Has Been Registered by Another city');
                redirect(base_url('admin/main_city/create'));        
            }
        }
    }

    public function update($id) 
    {
        $get_main_city = $this->main_city_model->get_by_id($id);
        $data = array(
            'button' => 'Create',
            'form' => 'update',
            'button_back' => base_url('admin/main_city'),
            'action' => base_url('admin/main_city/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'code_main_city' => set_value('code_main_city', $get_main_city->code_main_city),
    	    'name' => set_value('name', $get_main_city->name),
    	    'main_city_province_id' => set_value('province_id', $get_main_city->province_id),
            'page' => "Update main city",
            'title' => "Rembon Express",
            'main' => "admin/main_city/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function update_action() 
    {
        $id = $this->input->post('code_main_city_old',TRUE);
        $idn = $this->input->post('code_main_city',TRUE);
        if($id == $idn){
            $data = array(
                'code_main_city' => $this->input->post('code_main_city',TRUE),
                'name' => $this->input->post('name',TRUE),
                'province_id' => $this->input->post('prop',TRUE),
            );
            // var_dump($data);die();
            $update = $this->main_city_model->update($id, $data);
            if($update){
                $this->session->set_flashdata('success', $this->lang->line('update_success'));
                redirect(base_url('admin/main_city'));    
            }else{
                $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                redirect(base_url('admin/main_city/update/'.$id.''));    
            }               
        }else{
            $check_code = $this->db->query("select code_main_city from main_city where code_main_city='" . $this->input->post('code_main_city',TRUE) . "'")->num_rows();
            if($check_code < 1){
                $data = array(
                    'code_main_city' => $this->input->post('code_main_city',TRUE),
                    'name' => $this->input->post('name',TRUE),
                    'province_id' => $this->input->post('prop',TRUE),
                );
                // var_dump($data);die();
                $update = $this->main_city_model->update($id, $data);
                if($update){
                    $this->session->set_flashdata('success', $this->lang->line('update_success'));
                    redirect(base_url('admin/main_city'));    
                }else{
                    $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                    redirect(base_url('admin/main_city/update/'.$id.''));    
                }    
            }else{
                $this->session->set_flashdata('error', 'Code Has Been Registered by Another city');
                redirect(base_url('admin/main_city/update/'.$id.''));    
            }    
        }
    }

    public function read($id) 
    {
        $get_main_city = $this->main_city_model->get_by_id($id);
        $data = array(
            // 'button' => 'Create',
            'button_back' => base_url('admin/main_city'),
            'form' => 'read',
            'action' => base_url('admin/main_city/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'code_main_city' => set_value('code_main_city', $get_main_city->code_main_city),
    	    'name' => set_value('name', $get_main_city->name),
    	    'main_city_province_id' => set_value('main_city_province_id', $get_main_city->province_id),
            'page' => "Detail main city",
            'title' => "Rembon Express",
            'main' => "admin/main_city/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }

    public function delete() 
    {
        $id =$this->input->post('id',TRUE);
        $row = $this->main_city_model->get_by_id($id);

        if ($row) {
            $this->main_city_model->delete($id);
            $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            redirect(base_url('admin/main_city'));
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            redirect(base_url('admin/main_city'));
        }
    }

    public function _rules() 
    {	
        $this->form_validation->set_rules('code_main_city', 'Code', 'trim|required');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
	    $this->form_validation->set_rules('prop', 'Province', 'trim|required');
	    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function ajax_list()
    {
        $list = $this->main_city_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $main_city) {
            $province = $this->db->query("select name from province where province_id = '" . $main_city->province_id . "'")->row();
            if($province != NULL){
                $provincename = $province->name;
            }else{
                $provincename = '-';
            }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $main_city->code_main_city;
            $row[] = $main_city->name;
            $row[] = $provincename; 
            $row[] = '<a href="'.base_url().'admin/main_city/read/'. $main_city->code_main_city.'"  class="btn btn-info">Read</a>
            <a href="'. base_url().'admin/main_city/update/'.$main_city->code_main_city.'" class="btn btn-success">Edit</a>
            <a id="'.$main_city->code_main_city.'" onclick="hapus(this.id)" class="btn btn-danger">Delete</a>';
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->main_city_model->count_all(),
                        "recordsFiltered" => $this->main_city_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    


}