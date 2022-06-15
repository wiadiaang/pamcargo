<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Officer extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('officer_model');
        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

    }

    public function index()
    {
        $data['get_officer'] = $this->officer_model->get_all();;
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/officer/index";
        $this->load->view('admin/template/index',$data);
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'form' => 'create',
            'button_back' => base_url('admin/officer'),
            'action' => base_url('admin/officer/create_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'officer_id' => set_value('officer_id'),
    	    'warehouse_id' => set_value('warehouse_id'),
    	    'firstname' => set_value('firstname'),
    	    'lastname' => set_value('lastname'),
    	    'phone' => set_value('phone'),
    	    'address' => set_value('address'),
    	    'email' => set_value('email'),
    	    'password' => set_value('password'),
    	    'postal_code' => set_value('postal_code'),
    	    'officer_province_id' => set_value('province_id'),
    	    'officer_city_id' => set_value('city_id'),
    	    'officer_district_id' => set_value('district_id'),
    	    'officer_village_id' => set_value('village_id'),
    	    'lat' => set_value('lat'),
    	    'lng' => set_value('lng'),
            'page' => "Create officer",
            'title' => "Rembon Express",
            'main' => "admin/officer/form",
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
                'warehouse_id' => $this->input->post('warehouse_id',TRUE),
                'firstname' => $this->input->post('firstname',TRUE),
                'lastname' => $this->input->post('lastname',TRUE),
                'email' => $this->input->post('email',TRUE),
                'password' => md5($this->input->post('password',TRUE)),
                'phone' => $this->input->post('phone',TRUE),
                'address' => $this->input->post('address',TRUE),
                'province_id' => $this->input->post('prop',TRUE),
                'city_id' => $this->input->post('kota',TRUE),
                'district_id' => $this->input->post('kec',TRUE),
                'village_id' => $this->input->post('kel',TRUE),
                'lat' => $this->input->post('lat',TRUE),
                'lng' => $this->input->post('lng',TRUE),
                'postal_code' => $this->input->post('postal_code',TRUE),
    	    );
            $save = $this->officer_model->insert($data);
            // var_dump($save);die();
            if($save){
                $this->session->set_flashdata('success', $this->lang->line('insert_success'));
                redirect(base_url('admin/officer'));    
            }else{
                $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                redirect(base_url('admin/officer/create'));    
            }
        }
    }

    public function update($id) 
    {
        $get_officer = $this->officer_model->get_by_id($id);
        $data = array(
            'button' => 'Create',
            'form' => 'update',
            'button_back' => base_url('admin/officer'),
            'action' => base_url('admin/officer/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
            'warehouse_id' => set_value('warehouse_id', $get_officer->warehouse_id),
    	    'officer_id' => set_value('officer_id', $get_officer->officer_id),
            'firstname' => set_value('firstname', $get_officer->firstname),
            'lastname' => set_value('lastname', $get_officer->lastname),
            'phone' => set_value('phone', $get_officer->phone),
    	    'address' => set_value('address', $get_officer->address),
    	    'email' => set_value('email', $get_officer->email),
    	    'password' => set_value('password', $get_officer->password),
    	    'postal_code' => set_value('postal_code', $get_officer->postal_code),
    	    'officer_province_id' => set_value('province_id', $get_officer->province_id),
    	    'officer_city_id' => set_value('city_id', $get_officer->city_id),
    	    'officer_district_id' => set_value('district_id', $get_officer->district_id),
    	    'officer_village_id' => set_value('village_id', $get_officer->village_id),
    	    'lat' => set_value('lat', $get_officer->lat),
    	    'lng' => set_value('lng', $get_officer->lng),
            'page' => "Update officer",
            'title' => "Rembon Express",
            'main' => "admin/officer/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function update_action() 
    {
        $id = $this->input->post('officer_id',TRUE);
        $data = array(
            'warehouse_id' => $this->input->post('warehouse_id',TRUE),
            'firstname' => $this->input->post('firstname',TRUE),
            'lastname' => $this->input->post('lastname',TRUE),
            'email' => $this->input->post('email',TRUE),
            'phone' => $this->input->post('phone',TRUE),
            'address' => $this->input->post('address',TRUE),
            'province_id' => $this->input->post('prop',TRUE),
            'city_id' => $this->input->post('kota',TRUE),
            'district_id' => $this->input->post('kec',TRUE),
            'village_id' => $this->input->post('kel',TRUE),
            'lat' => $this->input->post('lat',TRUE),
            'lng' => $this->input->post('lng',TRUE),
            'postal_code' => $this->input->post('postal_code',TRUE),
        );
        // var_dump($data);die();
        $update = $this->officer_model->update($id, $data);
        if($update){
            $this->session->set_flashdata('success', $this->lang->line('update_success'));
            redirect(base_url('admin/officer'));    
        }else{
            $this->session->set_flashdata('error', $this->lang->line('error_alert'));
            redirect(base_url('admin/officer/update/'.$id.''));    
        }
    }

    public function read($id) 
    {
        $get_officer = $this->officer_model->get_by_id($id);
        $data = array(
            // 'button' => 'Create',
            'button_back' => base_url('admin/officer'),
            'form' => 'read',
            'action' => base_url('admin/officer/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'officer_id' => set_value('officer_id', $get_officer->officer_id),
    	    'warehouse_id' => set_value('warehouse_id', $get_officer->warehouse_id),
    	    'firstname' => set_value('firstname', $get_officer->firstname),
    	    'lastname' => set_value('lastname', $get_officer->lastname),
    	    'phone' => set_value('phone', $get_officer->phone),
    	    'address' => set_value('address', $get_officer->address),
    	    'email' => set_value('email', $get_officer->email),
    	    'password' => set_value('password', ''),
    	    'postal_code' => set_value('postal_code', $get_officer->postal_code),
    	    'officer_province_id' => set_value('officer_province_id', $get_officer->province_id),
    	    'officer_city_id' => set_value('officer_city_id', $get_officer->city_id),
    	    'officer_district_id' => set_value('officer_district_id', $get_officer->district_id),
    	    'officer_village_id' => set_value('officer_village_id', $get_officer->village_id),
    	    'lat' => set_value('lat', $get_officer->lat),
    	    'lng' => set_value('lng', $get_officer->lng),
            'page' => "Detail officer",
            'title' => "Rembon Express",
            'main' => "admin/officer/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }

    public function delete() 
    {
        $id = $this->input->post('id',TRUE);
        $row = $this->officer_model->get_by_id($id);

        if ($row) {
            $this->officer_model->delete($id);
            $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            redirect(base_url('admin/officer'));
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            redirect(base_url('admin/officer'));
        }
    }

    public function _rules() 
    {	
        $this->form_validation->set_rules('warehouse_id', 'Warehouse', 'trim|required');
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        // $this->form_validation->set_rules('officer_detail_building_housing', 'Building Housing Detail', 'trim|required');
        $this->form_validation->set_rules('postal_code', 'Postal Code', 'trim|required');
	    $this->form_validation->set_rules('prop', 'Province', 'trim|required');
	    $this->form_validation->set_rules('kota', 'City', 'trim|required');
	    $this->form_validation->set_rules('kec', 'District', 'trim|required');
	    $this->form_validation->set_rules('kel', 'Village', 'trim|required');
	    $this->form_validation->set_rules('lat', 'Lattitude', 'trim|required');
	    $this->form_validation->set_rules('lng', 'Longitude', 'trim|required');
	    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function ajax_list()
    {
        $list = $this->officer_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $officer) {
            $district = $this->db->query("select name from district where district_id = '" . $officer->district_id . "'")->row();
            if($district != NULL){
                $districtname = $district->name;
            }else{
                $districtname = '-';
            }

            $prov = $this->db->query("select name from province where province_id = '" . $officer->province_id . "'")->row();
            if($prov != NULL){
                $provname = $prov->name;
            }else{
                $provname = '-';
            }

            $city = $this->db->query("select name from city where city_id = '" . $officer->city_id . "'")->row();
            if($city != NULL){
                $cityname = $city->name;
            }else{
                $cityname = '-';
            }

            $village = $this->db->query("select name from village where village_id = '" . $officer->village_id . "'")->row();
            if($village != NULL){
                $villagename = $village->name;
            }else{
                $villagename = '-';
            }

            $warehouse = $this->db->query("select name from warehouse where warehouse_id = '" . $officer->warehouse_id . "'")->row();
            if($warehouse != NULL){
                $warehousename = $warehouse->name;
            }else{
                $warehousename = '-';
            }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $warehousename;
            $row[] = $officer->firstname.' '.$officer->lastname;
            $row[] = $officer->phone;
            $row[] = $officer->email; 
            $row[] = $officer->postal_code; 
            $row[] = $provname; 
            $row[] = $cityname; 
            $row[] = $districtname; 
            $row[] = $villagename; 
            $row[] = '<a href="'.base_url().'admin/officer/read/'. $officer->officer_id.'"  class="btn btn-info">Read</a>
            <a href="'. base_url().'admin/officer/update/'.$officer->officer_id.'" class="btn btn-success">Edit</a>
            <a onclick="hapus('.$officer->officer_id.')" class="btn btn-danger">Delete</a>'; 
            $data[] = $row;
        }
 
        $output = array(
                    "draw" => $_POST['draw'],
                    "recordsTotal" => $this->officer_model->count_all(),
                    "recordsFiltered" => $this->officer_model->count_filtered(),
                    "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    

}