<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courier extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('Courier_model');
        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

    }

    public function index()
    {
        $data['get_courier'] = $this->Courier_model->get_all();;
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/courier/index";
        $this->load->view('admin/template/index',$data);
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'form' => 'create',
            'button_back' => base_url('admin/courier'),
            'action' => base_url('admin/courier/create_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'courier_id' => set_value('courier_id'),
    	    'firstname' => set_value('firstname'),
    	    'lastname' => set_value('lastname'),
    	    'phone' => set_value('phone'),
    	    'address' => set_value('address'),
    	    'email' => set_value('email'),
    	    'password' => set_value('password'),
    	    'postal_code' => set_value('postal_code'),
    	    'courier_province_id' => set_value('province_id'),
    	    'courier_city_id' => set_value('city_id'),
    	    'courier_district_id' => set_value('district_id'),
    	    'courier_village_id' => set_value('village_id'),
    	    'lat' => set_value('lat'),
    	    'lng' => set_value('lng'),
            'page' => "Create courier",
            'title' => "Rembon Express",
            'main' => "admin/courier/form",
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

            $save = $this->Courier_model->insert($data);
            if($save){
                $this->session->set_flashdata('success', $this->lang->line('insert_success'));
                redirect(base_url('admin/courier'));    
            }else{
                $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                redirect(base_url('admin/courier/create'));    
            }
        }
    }

    public function update($id) 
    {
        $get_courier = $this->Courier_model->get_by_id($id);
        $data = array(
            'button' => 'Create',
            'form' => 'update',
            'button_back' => base_url('admin/courier'),
            'action' => base_url('admin/courier/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'courier_id' => set_value('courier_id', $get_courier->courier_id),
    	    'firstname' => set_value('firstname', $get_courier->firstname),
    	    'lastname' => set_value('lastname', $get_courier->lastname),
    	    'phone' => set_value('phone', $get_courier->phone),
    	    'address' => set_value('address', $get_courier->address),
    	    'email' => set_value('email', $get_courier->email),
    	    'password' => set_value('password', $get_courier->password),
    	    'postal_code' => set_value('postal_code', $get_courier->postal_code),
    	    'courier_province_id' => set_value('province_id', $get_courier->province_id),
    	    'courier_city_id' => set_value('city_id', $get_courier->city_id),
    	    'courier_district_id' => set_value('district_id', $get_courier->district_id),
    	    'courier_village_id' => set_value('village_id', $get_courier->village_id),
    	    'lat' => set_value('lat', $get_courier->lat),
    	    'lng' => set_value('lng', $get_courier->lng),
            'page' => "Update courier",
            'title' => "Rembon Express",
            'main' => "admin/courier/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function update_action() 
    {
        $id = $this->input->post('courier_id',TRUE);
        $data = array(
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
        $update = $this->Courier_model->update($id, $data);
        if($update){
            $this->session->set_flashdata('success', $this->lang->line('update_success'));
            redirect(base_url('admin/courier'));    
        }else{
            $this->session->set_flashdata('error', $this->lang->line('error_alert'));
            redirect(base_url('admin/courier/update/'.$id.''));    
        }
    }

    public function read($id) 
    {
        $get_courier = $this->Courier_model->get_by_id($id);
        $data = array(
            // 'button' => 'Create',
            'button_back' => base_url('admin/courier'),
            'form' => 'read',
            'action' => base_url('admin/courier/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'courier_id' => set_value('courier_id', $get_courier->courier_id),
    	    'firstname' => set_value('firstname', $get_courier->firstname),
    	    'lastname' => set_value('lastname', $get_courier->lastname),
    	    'phone' => set_value('phone', $get_courier->phone),
    	    'address' => set_value('address', $get_courier->address),
    	    'email' => set_value('email', $get_courier->email),
    	    'password' => set_value('password', ''),
    	    'postal_code' => set_value('postal_code', $get_courier->postal_code),
    	    'courier_province_id' => set_value('courier_province_id', $get_courier->province_id),
    	    'courier_city_id' => set_value('courier_city_id', $get_courier->city_id),
    	    'courier_district_id' => set_value('courier_district_id', $get_courier->district_id),
    	    'courier_village_id' => set_value('courier_village_id', $get_courier->village_id),
    	    'lat' => set_value('lat', $get_courier->lat),
    	    'lng' => set_value('lng', $get_courier->lng),
            'page' => "Update courier",
            'title' => "Rembon Express",
            'main' => "admin/courier/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }

    public function delete() 
    {
        $id = $this->input->post('id',TRUE);
        $row = $this->Courier_model->get_by_id($id);

        if ($row) {
            $this->Courier_model->delete($id);
            $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            redirect(base_url('admin/courier'));
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            redirect(base_url('admin/courier'));
        }
    }

    public function _rules() 
    {	
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        // $this->form_validation->set_rules('courier_detail_building_housing', 'Building Housing Detail', 'trim|required');
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
        $list = $this->Courier_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $courier) {
            $district = $this->db->query("select name from district where district_id = '" . $courier->district_id . "'")->row();
            if($district != NULL){
                $districtname = $district->name;
            }else{
                $districtname = '-';
            }

            $prov = $this->db->query("select name from province where province_id = '" . $courier->province_id . "'")->row();
            if($prov != NULL){
                $provname = $prov->name;
            }else{
                $provname = '-';
            }

            $city = $this->db->query("select name from city where city_id = '" . $courier->city_id . "'")->row();
            if($city != NULL){
                $cityname = $city->name;
            }else{
                $cityname = '-';
            }

            $village = $this->db->query("select name from village where village_id = '" . $courier->village_id . "'")->row();
            if($village != NULL){
                $villagename = $village->name;
            }else{
                $villagename = '-';
            }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $courier->firstname;
            $row[] = $courier->lastname;
            $row[] = $courier->phone;
            $row[] = $courier->email; 
            $row[] = $courier->postal_code; 
            $row[] = $provname; 
            $row[] = $cityname; 
            $row[] = $districtname; 
            $row[] = $villagename; 
            $row[] = '<a href="'.base_url().'admin/courier/read/'. $courier->courier_id.'"  class="btn btn-info">Read</a>
            <a href="'. base_url().'admin/courier/update/'.$courier->courier_id.'" class="btn btn-success">Edit</a>
            <a onclick="hapus('.$courier->courier_id.')" class="btn btn-danger">Delete</a>'; 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Courier_model->count_all(),
                        "recordsFiltered" => $this->Courier_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    


}