<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipper extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('Shipper_model');
        if($this->session->userdata('type') != 'superadmin' && $this->session->userdata('type') != 'admin'  && $this->session->userdata('type') != 'shiper'  ){
            
             redirect(base_url());
        }

   
    }

    public function index()
    {
        $data['get_shipper'] = $this->Shipper_model->get_all();;
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/shipper/index";
        $this->load->view('admin/template/index',$data);
    }


    public function form_shipper(){
        // $data['get_shipper'] = $this->Shipper_model->get_all();;
        $data['page'] = "Form Shipper";
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/shipper/form_shipper";
        $this->load->view('admin/template/index',$data);
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'form' => 'create',
            'button_back' => base_url('admin/shipper'),
            'action' => base_url('admin/shipper/create_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'shipper_id' => set_value('shipper_id'),
    	    'shipper_name' => set_value('shipper_name'),
    	    'shipper_phone' => set_value('shipper_phone'),
    	    'shipper_address' => set_value('shipper_address'),
    	    'shipper_email' => set_value('shipper_email'),
    	    'shipper_country' => set_value('shipper_country'),
    	    'shipper_password' => set_value('shipper_password'),
    	    'shipper_status' => set_value('shipper_status'),
    	    'shipper_name_building_housing' => set_value('shipper_name_building_housing'),
    	    'shipper_detail_building_housing' => set_value('shipper_detail_building_housing'),
    	    'shipper_postal_code' => set_value('shipper_postal_code'),
    	    'shipper_province_id' => set_value('shipper_province_id'),
    	    'shipper_city_id' => set_value('shipper_city_id'),
    	    'shipper_district_id' => set_value('shipper_district_id'),
    	    'shipper_village_id' => set_value('shipper_village_id'),
    	    'shipper_lat' => set_value('shipper_lat'),
    	    'shipper_lng' => set_value('shipper_lng'),
            'page' => "Create Shipper",
            'title' => "Rembon Express",
            'main' => "admin/shipper/form",
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
                'shipper_name' => $this->input->post('shipper_name',TRUE),
                'shipper_phone' => $this->input->post('shipper_phone',TRUE),
                'shipper_address' => $this->input->post('shipper_address',TRUE),
                'shipper_name_building_housing' => $this->input->post('shipper_name_building_housing',TRUE),
                'shipper_detail_building_housing' => $this->input->post('shipper_detail_building_housing',TRUE),
                'shipper_postal_code' => $this->input->post('shipper_postal_code',TRUE),
                'shipper_province_id' => $this->input->post('prop',TRUE),
                'shipper_city_id' => $this->input->post('kota',TRUE),
                'shipper_district_id' => $this->input->post('kec',TRUE),
                'shipper_village_id' => $this->input->post('kel',TRUE),
                'shipper_lat' => $this->input->post('shipper_lat',TRUE),
                'shipper_lng' => $this->input->post('shipper_lng',TRUE),
    	    );

            $save = $this->Shipper_model->insert($data);
            if($save){
                $this->session->set_flashdata('success', $this->lang->line('insert_success'));
                redirect(base_url('admin/shipper'));    
            }else{
                $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                redirect(base_url('admin/shipper/create'));    
            }
        }
    }

    public function update($id) 
    {
        $get_shipper = $this->Shipper_model->get_by_id($id);
        $data = array(
            'button' => 'Create',
            'form' => 'update',
            'button_back' => base_url('admin/shipper'),
            'action' => base_url('admin/shipper/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'shipper_id' => set_value('shipper_id', $get_shipper->shipper_id),
    	    'shipper_name' => set_value('shipper_name', $get_shipper->shipper_name),
    	    'shipper_phone' => set_value('shipper_phone', $get_shipper->shipper_phone),
    	    'shipper_email' => set_value('shipper_email', $get_shipper->shipper_email),
    	    'shipper_country' => set_value('shipper_country', $get_shipper->shipper_country),
    	    'shipper_password' => set_value('shipper_password', $get_shipper->shipper_password),
    	    'shipper_status' => set_value('shipper_status', $get_shipper->shipper_status),
    	    'shipper_address' => set_value('shipper_address', $get_shipper->shipper_address),
    	    'shipper_name_building_housing' => set_value('shipper_name_building_housing', $get_shipper->shipper_name_building_housing),
    	    'shipper_detail_building_housing' => set_value('shipper_detail_building_housing', $get_shipper->shipper_detail_building_housing),
    	    'shipper_postal_code' => set_value('shipper_postal_code', $get_shipper->shipper_postal_code),
    	    'shipper_province_id' => set_value('shipper_province_id', $get_shipper->shipper_province_id),
    	    'shipper_city_id' => set_value('shipper_city_id', $get_shipper->shipper_city_id),
    	    'shipper_district_id' => set_value('shipper_district_id', $get_shipper->shipper_district_id),
    	    'shipper_village_id' => set_value('shipper_village_id', $get_shipper->shipper_village_id),
    	    'shipper_lat' => set_value('shipper_lat', $get_shipper->shipper_lat),
    	    'shipper_lng' => set_value('shipper_lng', $get_shipper->shipper_lng),
            'page' => "Update Shipper",
            'title' => "Rembon Express",
            'main' => "admin/shipper/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function update_action() 
    {
        $id = $this->input->post('shipper_id',TRUE);
        $password = $this->input->post('shipper_password',TRUE);
        $email = $this->input->post('shipper_email',TRUE);
        $name = $this->input->post('shipper_name',TRUE);

        $data = array(
            'shipper_name' => $this->input->post('shipper_name',TRUE),
            'shipper_phone' => $this->input->post('shipper_phone',TRUE),
            'shipper_address' => $this->input->post('shipper_address',TRUE),
            // 'shipper_name_building_housing' => $this->input->post('shipper_name_building_housing',TRUE),
            // 'shipper_detail_building_housing' => $this->input->post('shipper_detail_building_housing',TRUE),
            'shipper_postal_code' => $this->input->post('shipper_postal_code',TRUE),
            'shipper_email' => $this->input->post('shipper_email',TRUE),
            'shipper_country' => $this->input->post('shipper_country',TRUE),
            'shipper_password' => md5($this->input->post('shipper_password',TRUE)),
            'shipper_status' => $this->input->post('shipper_status',TRUE),
            // 'shipper_province_id' => $this->input->post('prop',TRUE),
            // 'shipper_city_id' => $this->input->post('kota',TRUE),
            // 'shipper_district_id' => $this->input->post('kec',TRUE),
            // 'shipper_village_id' => $this->input->post('kel',TRUE),
            // 'shipper_lat' => $this->input->post('shipper_lat',TRUE),
            // 'shipper_lng' => $this->input->post('shipper_lng',TRUE),
        );
        // var_dump($data);die();
        $update = $this->Shipper_model->update($id, $data);
        if($update){

            $html .= "<img src='' height='50' width='50' style='float:left;' >
            <h1 style='float:left;' >Rembon Express </h1>
            <br> <br> <br> <br> 
            <hr>
            <h4><b>Hi, ".$name."</b></h4>
            <h4>Your account has been approved </h4>
            <table class='table table-bordered' >
            <tr>
                <td>Password: ".$password."</td>
            </tr>
            </table>
            ";
            $config['mailtype'] = 'html';
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_timeout'] = '7';
            $config['smtp_user'] = 'aulhakim998@gmail.com';
            $config['smtp_pass'] = 'aulgmail99delapan';
            $config['charset'] = 'utf-8';
            $config['newline'] = "\r\n"; 
            $config['validation'] = TRUE;
            $this->load->library('email',$config);  
            $this->email->initialize($config);
            $this->email->from('aulhakim998@gmail.com','Rembon Express');
            $this->email->to($email);
            $this->email->subject("Your account approved");
            $this->email->message($html);
            $this->email->send();
            echo $this->email->print_debugger();




            $this->session->set_flashdata('success', $this->lang->line('update_success'));
            redirect(base_url('admin/shipper'));  

        }else{
            $this->session->set_flashdata('error', $this->lang->line('error_alert'));
            redirect(base_url('admin/shipper/update/'.$id.''));    
        }






    }

    public function read($id) 
    {
        $get_shipper = $this->Shipper_model->get_by_id($id);
        $data = array(
            // 'button' => 'Create',
            'button_back' => base_url('admin/shipper'),
            'form' => 'read',
            'action' => base_url('admin/shipper/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'shipper_id' => set_value('shipper_id', $get_shipper->shipper_id),
    	    'shipper_name' => set_value('shipper_name', $get_shipper->shipper_name),
            'shipper_phone' => set_value('shipper_phone', $get_shipper->shipper_phone),
            'shipper_email' => set_value('shipper_email', $get_shipper->shipper_email),
    	    'shipper_country' => set_value('shipper_country', $get_shipper->shipper_country),
    	    'shipper_password' => set_value('shipper_password', $get_shipper->shipper_password),
    	    'shipper_status' => set_value('shipper_status', $get_shipper->shipper_status),
    	    'shipper_address' => set_value('shipper_address', $get_shipper->shipper_address),
    	    'shipper_name_building_housing' => set_value('shipper_name_building_housing', $get_shipper->shipper_name_building_housing),
    	    'shipper_detail_building_housing' => set_value('shipper_detail_building_housing', $get_shipper->shipper_detail_building_housing),
    	    'shipper_postal_code' => set_value('shipper_postal_code', $get_shipper->shipper_postal_code),
    	    'shipper_province_id' => set_value('shipper_province_id', $get_shipper->shipper_province_id),
    	    'shipper_city_id' => set_value('shipper_city_id', $get_shipper->shipper_city_id),
    	    'shipper_district_id' => set_value('shipper_district_id', $get_shipper->shipper_district_id),
    	    'shipper_village_id' => set_value('shipper_village_id', $get_shipper->shipper_village_id),
    	    'shipper_lat' => set_value('shipper_lat', $get_shipper->shipper_lat),
    	    'shipper_lng' => set_value('shipper_lng', $get_shipper->shipper_lng),
            'page' => "Update Shipper",
            'title' => "Rembon Express",
            'main' => "admin/shipper/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }

    public function delete($id) 
    {
        $id = $this->input->post('id',TRUE);
        $row = $this->Shipper_model->get_by_id($id);

        if ($row) {
            $this->Shipper_model->delete($id);
            $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            redirect(base_url('admin/shipper'));
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            redirect(base_url('admin/shipper'));
        }
    }

    public function _rules() 
    {	
        $this->form_validation->set_rules('shipper_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('shipper_phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('shipper_address', 'Address', 'trim|required');
        $this->form_validation->set_rules('shipper_name_building_housing', 'Building Housing Name', 'trim|required');
        $this->form_validation->set_rules('shipper_detail_building_housing', 'Building Housing Detail', 'trim|required');
        $this->form_validation->set_rules('shipper_postal_code', 'Postal Code', 'trim|required');
	    $this->form_validation->set_rules('prop', 'Province', 'trim|required');
	    $this->form_validation->set_rules('kota', 'City', 'trim|required');
	    $this->form_validation->set_rules('kec', 'District', 'trim|required');
	    $this->form_validation->set_rules('kel', 'Village', 'trim|required');
	    $this->form_validation->set_rules('shipper_lat', 'Lattitude', 'trim|required');
	    $this->form_validation->set_rules('shipper_lng', 'Longitude', 'trim|required');
	    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function ajax_list()
    {
        $list = $this->Shipper_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $shipper) {
            // $district = $this->db->query("select name from district where district_id = '" . $shipper->shipper_district_id . "'")->row();
            // if($district != NULL){
            //     $districtname = $district->name;
            // }else{
            //     $districtname = '-';
            // }

            // $prov = $this->db->query("select name from province where province_id = '" . $shipper->shipper_province_id . "'")->row();
            // if($prov != NULL){
            //     $provname = $prov->name;
            // }else{
            //     $provname = '-';
            // }

            // $city = $this->db->query("select name from city where city_id = '" . $shipper->shipper_city_id . "'")->row();
            // if($city != NULL){
            //     $cityname = $city->name;
            // }else{
            //     $cityname = '-';
            // }

            // $village = $this->db->query("select name from village where village_id = '" . $shipper->shipper_village_id . "'")->row();
            // if($village != NULL){
            //     $villagename = $village->name;
            // }else{
            //     $villagename = '-';
            // }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $shipper->shipper_name;
            $row[] = $shipper->shipper_phone;
            $row[] = $shipper->shipper_email; 
            $row[] = $shipper->shipper_country; 
            $row[] = $shipper->shipper_postal_code; 
            $row[] = $shipper->shipper_status; 
            // $row[] = $provname; 
            // $row[] = $cityname; 
            // $row[] = $districtname; 
            // $row[] = $villagename; 
            $row[] = '<a href="'.base_url().'admin/shipper/read/'. $shipper->shipper_id.'"  class="btn btn-xs btn-info">Read</a>
            <a href="'. base_url().'admin/shipper/update/'.$shipper->shipper_id.'" class="btn btn-xs btn-success">Edit</a>
            <a onclick="hapus('.$shipper->shipper_id.')" class="btn btn-xs btn-danger">Delete</a>'; 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Shipper_model->count_all(),
                        "recordsFiltered" => $this->Shipper_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    

}