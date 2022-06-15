<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class District extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('district_model');
        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

    }

    public function index()
    {
        $data['get_district'] = $this->district_model->get_all();;
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/district/index";
        $this->load->view('admin/template/index',$data);
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'form' => 'create',
            'button_back' => base_url('admin/district'),
            'action' => base_url('admin/district/create_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district_id' => set_value('district_id'),
    	    'province_id' => set_value('province_id'),
    	    'city_id' => set_value('city_id'),
    	    'name' => set_value('name'),
    	    'k_bsni' => set_value('k_bsni'),
            'page' => "Create district",
            'title' => "Rembon Express",
            'main' => "admin/district/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function create_action() 
    {

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'city_id' => $this->input->post('kota',TRUE),
                'name' => $this->input->post('name',TRUE),
            );
            $save = $this->district_model->insert($data);
            // var_dump($save);die();
            if($save){
                $this->session->set_flashdata('success', $this->lang->line('insert_success'));
                redirect(base_url('admin/district'));    
            }else{
                $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                redirect(base_url('admin/district/create'));    
            }    
        }
    }

    public function update($id) 
    {
        $get_district = $this->district_model->get_by_id($id);
        $get_province_id = $this->db->query("select province_id from city where city_id = '" . $get_district->city_id . "'")->row();
        // var_dump($get_province_id->province_id);die();
        $data = array(
            'button' => 'Create',
            'form' => 'update',
            'button_back' => base_url('admin/district'),
            'action' => base_url('admin/district/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city where province_id = '" . $get_province_id->province_id . "'")->result(),
    	    'province_id' => set_value('province_id', $get_province_id->province_id),
    	    'city_id' => set_value('city_id', $get_district->city_id),
    	    'district_id' => set_value('district_id', $get_district->district_id),
    	    'name' => set_value('name', $get_district->name),
            'page' => "Update district",
            'title' => "Rembon Express",
            'main' => "admin/district/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function update_action() 
    {
        $id = $this->input->post('district_id',TRUE);
        $data = array(
            'city_id' => $this->input->post('kota',TRUE),
            'name' => $this->input->post('name',TRUE),
        );
        // var_dump($data);die();
        $update = $this->district_model->update($id, $data);
        if($update){
            $this->session->set_flashdata('success', $this->lang->line('update_success'));
            redirect(base_url('admin/district'));    
        }else{
            $this->session->set_flashdata('error', $this->lang->line('error_alert'));
            redirect(base_url('admin/district/update/'.$id.''));    
        }               
    }

    public function read($id) 
    {
        $get_district = $this->district_model->get_by_id($id);
        $data = array(
            // 'button' => 'Create',
            'button_back' => base_url('admin/district'),
            'form' => 'read',
            'action' => base_url('admin/district/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'city_id' => set_value('city_id', $get_district->city_id),
    	    'district_id' => set_value('district_id', $get_district->district_id),
    	    'name' => set_value('name', $get_district->name),
            'page' => "Detail district",
            'title' => "Rembon Express",
            'main' => "admin/district/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }

    public function delete($id) 
    {
        $row = $this->district_model->get_by_id($id);

        if ($row) {
            $this->district_model->delete($id);
            $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            redirect(base_url('admin/district'));
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            redirect(base_url('admin/district'));
        }
    }
    
    public function _rules() 
    {	
        $this->form_validation->set_rules('kota', 'City', 'trim|required');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
	    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function ajax_list()
    {
        $list = $this->district_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $district) {
            $city = $this->db->query("select name from city where city_id = '" . $district->city_id . "'")->row();
            if($city != NULL){
                $cityname = $city->name;
            }else{
                $cityname = '-';
            }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $district->name;
            $row[] = $cityname; 
            $row[] = '<a href="'.base_url().'admin/district/read/'. $district->district_id.'"  class="btn btn-info">Read</a>
            <a href="'. base_url().'admin/district/update/'.$district->district_id.'" class="btn btn-success">Edit</a>
            <a href="'.base_url().'admin/district/delete/'.$district->district_id.'" onclick="return confirm("Are you sure?")" class="btn btn-danger">Delete</a>'; 

            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->district_model->count_all(),
                        "recordsFiltered" => $this->district_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    

}