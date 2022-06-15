<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consignee extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('consignee_model');
        if($this->session->userdata('type') != 'superadmin'){
            
             redirect(base_url());
        }

   
    }

    public function index()
    {
        $data['get_consignee'] = $this->consignee_model->get_all();;
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/consignee/index";
        $this->load->view('admin/template/index',$data);
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'form' => 'create',
            'button_back' => base_url('admin/consignee'),
            'action' => base_url('admin/consignee/create_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'consignee_id' => set_value('consignee_id'),
    	    'consignee_name' => set_value('consignee_name'),
    	    'consignee_phone' => set_value('consignee_phone'),
    	    'consignee_address' => set_value('consignee_address'),
    	    'consignee_name_building_housing' => set_value('consignee_name_building_housing'),
    	    'consignee_detail_building_housing' => set_value('consignee_detail_building_housing'),
    	    'consignee_postal_code' => set_value('consignee_postal_code'),
    	    // 'consignee_province_id' => set_value('consignee_province_id'),
    	    // 'consignee_city_id' => set_value('consignee_city_id'),
    	    // 'consignee_district_id' => set_value('consignee_district_id'),
    	    // 'consignee_village_id' => set_value('consignee_village_id'),
    	    // 'consignee_lat' => set_value('consignee_lat'),
    	    // 'consignee_lng' => set_value('consignee_lng'),
            'page' => "Create consignee",
            'title' => "Rembon Express",
            'main' => "admin/consignee/form",
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
                'consignee_name' => $this->input->post('consignee_name',TRUE),
                'consignee_phone' => $this->input->post('consignee_phone',TRUE),
                'consignee_address' => $this->input->post('consignee_address',TRUE),
                'consignee_name_building_housing' => $this->input->post('consignee_name_building_housing',TRUE),
                'consignee_detail_building_housing' => $this->input->post('consignee_detail_building_housing',TRUE),
                'consignee_postal_code' => $this->input->post('consignee_postal_code',TRUE)
                // 'consignee_province_id' => $this->input->post('prop',TRUE),
                // 'consignee_city_id' => $this->input->post('kota',TRUE),
                // 'consignee_district_id' => $this->input->post('kec',TRUE),
                // 'consignee_village_id' => $this->input->post('kel',TRUE),
                // 'consignee_lat' => $this->input->post('consignee_lat',TRUE),
                // 'consignee_lng' => $this->input->post('consignee_lng',TRUE),
    	    );

            $save = $this->consignee_model->insert($data);
            if($save){
                $this->session->set_flashdata('success', $this->lang->line('insert_success'));
                redirect(base_url('admin/consignee'));    
            }else{
                $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                redirect(base_url('admin/consignee/create'));    
            }
        }
    }

    public function update($id) 
    {
        $get_consignee = $this->consignee_model->get_by_id($id);
        $data = array(
            'button' => 'Create',
            'form' => 'update',
            'button_back' => base_url('admin/consignee'),
            'action' => base_url('admin/consignee/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'consignee_id' => set_value('consignee_id', $get_consignee->consignee_id),
    	    'consignee_name' => set_value('consignee_name', $get_consignee->consignee_name),
    	    'consignee_phone' => set_value('consignee_phone', $get_consignee->consignee_phone),
    	    'consignee_address' => set_value('consignee_address', $get_consignee->consignee_address),
    	    'consignee_name_building_housing' => set_value('consignee_name_building_housing', $get_consignee->consignee_name_building_housing),
    	    'consignee_detail_building_housing' => set_value('consignee_detail_building_housing', $get_consignee->consignee_detail_building_housing),
    	    'consignee_postal_code' => set_value('consignee_postal_code', $get_consignee->consignee_postal_code),
    	    // 'consignee_province_id' => set_value('consignee_province_id', $get_consignee->consignee_province_id),
    	    // 'consignee_city_id' => set_value('consignee_city_id', $get_consignee->consignee_city_id),
    	    // 'consignee_district_id' => set_value('consignee_district_id', $get_consignee->consignee_district_id),
    	    // 'consignee_village_id' => set_value('consignee_village_id', $get_consignee->consignee_village_id),
    	    // 'consignee_lat' => set_value('consignee_lat', $get_consignee->consignee_lat),
    	    // 'consignee_lng' => set_value('consignee_lng', $get_consignee->consignee_lng),
            'page' => "Update consignee",
            'title' => "Rembon Express",
            'main' => "admin/consignee/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function update_action() 
    {
        $id = $this->input->post('consignee_id',TRUE);
        $data = array(
            'consignee_name' => $this->input->post('consignee_name',TRUE),
            'consignee_phone' => $this->input->post('consignee_phone',TRUE),
            'consignee_address' => $this->input->post('consignee_address',TRUE),
            'consignee_name_building_housing' => $this->input->post('consignee_name_building_housing',TRUE),
            'consignee_detail_building_housing' => $this->input->post('consignee_detail_building_housing',TRUE),
            'consignee_postal_code' => $this->input->post('consignee_postal_code',TRUE),
            // 'consignee_province_id' => $this->input->post('prop',TRUE),
            // 'consignee_city_id' => $this->input->post('kota',TRUE),
            // 'consignee_district_id' => $this->input->post('kec',TRUE),
            // 'consignee_village_id' => $this->input->post('kel',TRUE),
            // 'consignee_lat' => $this->input->post('consignee_lat',TRUE),
            // 'consignee_lng' => $this->input->post('consignee_lng',TRUE),
        );
        // var_dump($data);die();
        $update = $this->consignee_model->update($id, $data);
        if($update){
            $this->session->set_flashdata('success', $this->lang->line('update_success'));
            redirect(base_url('admin/consignee'));    
        }else{
            $this->session->set_flashdata('error', $this->lang->line('error_alert'));
            redirect(base_url('admin/consignee/update/'.$id.''));    
        }
    }

    public function read($id) 
    {
        $get_consignee = $this->consignee_model->get_by_id($id);
        $data = array(
            // 'button' => 'Create',
            'button_back' => base_url('admin/consignee'),
            'form' => 'read',
            'action' => base_url('admin/consignee/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'consignee_id' => set_value('consignee_id', $get_consignee->consignee_id),
    	    'consignee_name' => set_value('consignee_name', $get_consignee->consignee_name),
    	    'consignee_phone' => set_value('consignee_phone', $get_consignee->consignee_phone),
    	    'consignee_address' => set_value('consignee_address', $get_consignee->consignee_address),
    	    'consignee_name_building_housing' => set_value('consignee_name_building_housing', $get_consignee->consignee_name_building_housing),
    	    'consignee_detail_building_housing' => set_value('consignee_detail_building_housing', $get_consignee->consignee_detail_building_housing),
    	    'consignee_postal_code' => set_value('consignee_postal_code', $get_consignee->consignee_postal_code),
    	    'consignee_province_id' => set_value('consignee_province_id', $get_consignee->consignee_province_id),
    	    'consignee_city_id' => set_value('consignee_city_id', $get_consignee->consignee_city_id),
    	    'consignee_district_id' => set_value('consignee_district_id', $get_consignee->consignee_district_id),
    	    'consignee_village_id' => set_value('consignee_village_id', $get_consignee->consignee_village_id),
    	    'consignee_lat' => set_value('consignee_lat', $get_consignee->consignee_lat),
    	    'consignee_lng' => set_value('consignee_lng', $get_consignee->consignee_lng),
            'page' => "Update consignee",
            'title' => "Rembon Express",
            'main' => "admin/consignee/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }

    public function delete() 
    {
        $id = $this->input->post('id',TRUE);
        $row = $this->consignee_model->get_by_id($id);

        if ($row) {
            $this->consignee_model->delete($id);
            $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            redirect(base_url('admin/consignee'));
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            redirect(base_url('admin/consignee'));
        }
    }

    public function _rules() 
    {	
        $this->form_validation->set_rules('consignee_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('consignee_phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('consignee_address', 'Address', 'trim|required');
        $this->form_validation->set_rules('consignee_name_building_housing', 'Building Housing Name', 'trim|required');
        $this->form_validation->set_rules('consignee_detail_building_housing', 'Building Housing Detail', 'trim|required');
        $this->form_validation->set_rules('consignee_postal_code', 'Postal Code', 'trim|required');
	    // $this->form_validation->set_rules('prop', 'Province', 'trim|required');
	    // $this->form_validation->set_rules('kota', 'City', 'trim|required');
	    // $this->form_validation->set_rules('kec', 'District', 'trim|required');
	    // $this->form_validation->set_rules('kel', 'Village', 'trim|required');
	    // $this->form_validation->set_rules('consignee_lat', 'Lattitude', 'trim|required');
	    // $this->form_validation->set_rules('consignee_lng', 'Longitude', 'trim|required');
	    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function ajax_list()
    {
        $list = $this->consignee_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $consignee) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $consignee->name_pt;
            $row[] = $consignee->address;
            $row[] = $consignee->email; 
            $row[] = $consignee->postal_code; 
            $row[] = '<a href="'.base_url().'admin/consignee/read/'. $consignee->user_id.'"  class="btn btn-xs btn-info">Read</a>
            <a href="'. base_url().'admin/consignee/update/'.$consignee->user_id.'" class="btn btn-xs btn-success">Edit</a>
            <a onclick="hapus('.$consignee->user_id.')" class="btn btn-xs btn-danger">Delete</a>'; 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->consignee_model->count_all(),
                        "recordsFiltered" => $this->consignee_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    


}