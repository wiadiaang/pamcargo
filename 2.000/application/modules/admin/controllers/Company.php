<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('company_model');
        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

    }

    public function index()
    {
        $data['get_company'] = $this->company_model->get_all();;
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/company/index";
        $this->load->view('admin/template/index',$data);
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'form' => 'create',
            'button_back' => base_url('admin/company'),
            'action' => base_url('admin/company/create_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'company_id' => set_value('company_id'),
    	    'name' => set_value('name'),
    	    'phone' => set_value('phone'),
    	    'address' => set_value('address'),
    	    'email' => set_value('email'),
    	    'password' => set_value('password'),
    	    'postal_code' => set_value('postal_code'),
    	    'company_province_id' => set_value('province_id'),
    	    'company_city_id' => set_value('city_id'),
    	    'company_district_id' => set_value('district_id'),
    	    'company_village_id' => set_value('village_id'),
    	    'lat' => set_value('lat'),
    	    'lng' => set_value('lng'),
            'page' => "Create company",
            'title' => "Rembon Express",
            'main' => "admin/company/form",
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
                'name' => $this->input->post('name',TRUE),
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
            $save = $this->company_model->insert($data);
            // var_dump($save);die();
            if($save){
                $this->session->set_flashdata('success', $this->lang->line('insert_success'));
                redirect(base_url('admin/company'));    
            }else{
                $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                redirect(base_url('admin/company/create'));    
            }
        }
    }

    public function update($id) 
    {
        $get_company = $this->company_model->get_by_id($id);
        $data = array(
            'button' => 'Create',
            'form' => 'update',
            'button_back' => base_url('admin/company'),
            'action' => base_url('admin/company/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'company_id' => set_value('company_id', $get_company->company_id),
    	    'name' => set_value('name', $get_company->name),
    	    'phone' => set_value('phone', $get_company->phone),
    	    'address' => set_value('address', $get_company->address),
    	    'email' => set_value('email', $get_company->email),
    	    'password' => set_value('password', $get_company->password),
    	    'postal_code' => set_value('postal_code', $get_company->postal_code),
    	    'company_province_id' => set_value('province_id', $get_company->province_id),
    	    'company_city_id' => set_value('city_id', $get_company->city_id),
    	    'company_district_id' => set_value('district_id', $get_company->district_id),
    	    'company_village_id' => set_value('village_id', $get_company->village_id),
    	    'lat' => set_value('lat', $get_company->lat),
    	    'lng' => set_value('lng', $get_company->lng),
            'page' => "Update company",
            'title' => "Rembon Express",
            'main' => "admin/company/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function update_action() 
    {
        $id = $this->input->post('company_id',TRUE);
        $data = array(
            'name' => $this->input->post('name',TRUE),
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
        $update = $this->company_model->update($id, $data);
        if($update){
            $this->session->set_flashdata('success', $this->lang->line('update_success'));
            redirect(base_url('admin/company'));    
        }else{
            $this->session->set_flashdata('error', $this->lang->line('error_alert'));
            redirect(base_url('admin/company/update/'.$id.''));    
        }
    }

    public function read($id) 
    {
        $get_company = $this->company_model->get_by_id($id);
        $data = array(
            // 'button' => 'Create',
            'button_back' => base_url('admin/company'),
            'form' => 'read',
            'action' => base_url('admin/company/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'company_id' => set_value('company_id', $get_company->company_id),
    	    'name' => set_value('name', $get_company->name),
    	    'phone' => set_value('phone', $get_company->phone),
    	    'address' => set_value('address', $get_company->address),
    	    'email' => set_value('email', $get_company->email),
    	    'password' => set_value('password', ''),
    	    'postal_code' => set_value('postal_code', $get_company->postal_code),
    	    'company_province_id' => set_value('company_province_id', $get_company->province_id),
    	    'company_city_id' => set_value('company_city_id', $get_company->city_id),
    	    'company_district_id' => set_value('company_district_id', $get_company->district_id),
    	    'company_village_id' => set_value('company_village_id', $get_company->village_id),
    	    'lat' => set_value('lat', $get_company->lat),
    	    'lng' => set_value('lng', $get_company->lng),
            'page' => "Update company",
            'title' => "Rembon Express",
            'main' => "admin/company/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }

    public function delete() 
    {
        $id = $this->input->post('id',TRUE);

        $row = $this->company_model->get_by_id($id);

        if ($row) {
            $this->company_model->delete($id);
            $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            redirect(base_url('admin/company'));
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            redirect(base_url('admin/company'));
        }
    }

    public function _rules() 
    {	
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        // $this->form_validation->set_rules('company_detail_building_housing', 'Building Housing Detail', 'trim|required');
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
        $list = $this->company_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $company) {
            $district = $this->db->query("select name from district where district_id = '" . $company->district_id . "'")->row();
            if($district != NULL){
                $districtname = $district->name;
            }else{
                $districtname = '-';
            }

            $prov = $this->db->query("select name from province where province_id = '" . $company->province_id . "'")->row();
            if($prov != NULL){
                $provname = $prov->name;
            }else{
                $provname = '-';
            }

            $city = $this->db->query("select name from city where city_id = '" . $company->city_id . "'")->row();
            if($city != NULL){
                $cityname = $city->name;
            }else{
                $cityname = '-';
            }

            $village = $this->db->query("select name from village where village_id = '" . $company->village_id . "'")->row();
            if($village != NULL){
                $villagename = $village->name;
            }else{
                $villagename = '-';
            }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $company->name;
            $row[] = $company->phone;
            $row[] = $company->email; 
            $row[] = $company->postal_code; 
            $row[] = $provname; 
            $row[] = $cityname; 
            $row[] = $districtname; 
            $row[] = $villagename; 
            $row[] = '<a href="'.base_url().'admin/company/read/'. $company->company_id.'"  class="btn btn-info">Read</a>
            <a href="'. base_url().'admin/company/update/'.$company->company_id.'" class="btn btn-success">Edit</a>
            <a onclick="hapus('.$company->company_id.')" class="btn btn-danger">Delete</a>'; 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->company_model->count_all(),
                        "recordsFiltered" => $this->company_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    


}