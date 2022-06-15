<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('Admin_model');
        if($this->session->userdata('type') != 'superadmin'){
             redirect(base_url('admin/dashboard'));
        }

   
    }

    public function index()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/admin/index";
        $this->load->view('admin/template/index',$data);
    }

    public function ajax_list()
    {
        $list = $this->Admin_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $admin) {

            // $prov = $this->db->query("select name from province where province_id = '" . $admin->province_id . "'")->row();
            // if($prov != NULL){
            //     $provname = $prov->name;
            // }else{
            //     $provname = '-';
            // }
             
            // $city = $this->db->query("select name from city where city_id = '" . $admin->city_id . "'")->row();
            // if($city != NULL){
            //     $cityname = $city->name;
            // }else{
            //     $cityname = '-';
            // }

            // $district = $this->db->query("select name from district where district_id = '" . $admin->district_id . "'")->row();
            // if($district != NULL){
            //     $districtname = $district->name;
            // }else{
            //     $districtname = '-';
            // }

            // $village = $this->db->query("select name from village where village_id = '" . $admin->village_id . "'")->row();
            // if($village != NULL){
            //     $villagename = $village->name;
            // }else{
            //     $villagename = '-';
            // }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $admin->name_pt;
            $row[] = $admin->email;
            $row[] = $admin->phone_office; 
            $row[] = $admin->country; 
            $row[] = $admin->status_user; 
            $row[] = '<a href="javascript:void(0)" onclick="edit_admin('.$admin->user_id.')" class="btn btn-xs btn-success">Edit</a>
            <a onclick="hapus('.$admin->user_id.')" class="btn btn-xs btn-danger">Delete</a>'; 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Admin_model->count_all(),
                        "recordsFiltered" => $this->Admin_model->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }    
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'form' => 'create',
            'button_back' => base_url('admin/admin'),
            'action' => base_url('admin/admin/create_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
            'page' => "Create admin",
            'title' => "Rembon Express",
            'main' => "admin/admin/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }

    public function save_admin() 
    {
        $user_id = $this->input->post('user_id');
        if($user_id == ""){
            $country = $this->input->post('country');
            $cek = $this->db->query("SELECT user_id,country,level FROM user where country = '$country' and level = 'admin'")->row();
            if(count($cek) > 0){
                echo "registered";
            }else{
                $data['name_pt'] = $this->input->post('name_pt');
                $data['email'] = $this->input->post('email');
                $data['phone_office'] = $this->input->post('phone_office');
                $data['address'] = $this->input->post('address');
                $data['country'] = $this->input->post('country');
                $data['password'] = md5($this->input->post('password'));
                $data['status_user'] = $this->input->post('status');
                $data['level'] = 'admin';
                $data['created_dated'] = date('Y-m-d H:i:s');
                $this->db->insert('user',$data);
                $html = "<img src='https://express.rembon.co.id/static/logo.png' height='50' width='200' style='float:left;' >
                        <h1 style='float:left;'></h1>
                        <br> <br> <br> <br> 
                        <hr>
                        <h4><b>Hi, ".$this->input->post('name_pt')."</b></h4>
                        <h4>You have already registered at Pamcargo , Please sign in with your account at <a href='https://express.rembon.co.id/admin'>https://express.rembon.co.id/admin</a> </h4>
                        <table border=''>
                        <tr>
                            <td>Email</td>
                            <td>".$this->input->post('email')."</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>".$this->input->post('password')."</td>
                        </tr>
                        </table>";
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
                        $this->email->from('aulhakim998@gmail.com','Pamcargo');
                        $this->email->to($this->input->post('email'));
                        $this->email->subject("You account has registered");
                        $this->email->message($html);
                        $this->email->send();
                        $this->email->print_debugger();
                        echo"success";
                
            }
        }else{
                $country = $this->input->post('country');
                $data['name_pt'] = $this->input->post('name_pt');
                $data['email'] = $this->input->post('email');
                $data['phone_office'] = $this->input->post('phone_office');
                $data['address'] = $this->input->post('address');
                $data['status_user'] = $this->input->post('status');
                $this->db->where('user_id',$user_id);
                $this->db->update('user',$data);
                echo "success";

        }
       
    }

    public function get_user($id){
        $a = $this->db->query("SELECT * FROM user where user_id = '$id' ")->row();
        echo json_encode($a);
    }
 
    // public function create_action() 
    // {
    //     $pas = $this->input->post('pass');
    //     $pas2 = $this->input->post('pass2');
    //     if($pas != $pas2){
    //         $this->session->set_flashdata('error', 'password tidak sama');
    //         redirect(base_url('admin/admin/create'));    
    //     }else{
            
    //         $data = array(
    //             'firstname' => $this->input->post('firstname',TRUE),
    //             'lastname' => $this->input->post('lastname',TRUE),
    //             'email' => $this->input->post('email',TRUE),
    //             'phone' => $this->input->post('phone',TRUE),
    //             'address' => $this->input->post('address',TRUE),
    //             'province_id' => $this->input->post('prop',TRUE),
    //             'city_id' => $this->input->post('kab',TRUE),
    //             'district_id' => $this->input->post('kec',TRUE),
    //             'village_id' => $this->input->post('desa',TRUE),
    //             'postal_code' => $this->input->post('postal_code',TRUE),
    //             'lat' => $this->input->post('lat',TRUE),
    //             'lng' => $this->input->post('lng',TRUE),
    //             'level' => 'admin',
    //             'password' => md5($pas)
    //         );
            
    //         $save = $this->Admin_model->insert($data);
    //         if($save){
    //             $this->session->set_flashdata('success', $this->lang->line('insert_success'));
    //             redirect(base_url('admin/admin'));    
    //         }else{
    //             $this->session->set_flashdata('error', $this->lang->line('error_alert'));
    //             redirect(base_url('admin/admin/create'));    
    //         }

    //     }
          
    // }

    // public function update($id) 
    // {
    //     $get_shipper = $this->Admin_model->get_by_id($id);
    //     $data = array(
    //         'button' => 'Create',
    //         'form' => 'update',
    //         'button_back' => base_url('admin/shipper'),
    //         'action' => base_url('admin/shipper/update_action'),
    // 	    'province' => $this->db->query("select province_id, name from province")->result(),
    // 	    'city' => $this->db->query("select city_id, name from city")->result(),
    // 	    'district' => $this->db->query("select district_id, name from district")->result(),
    // 	    'village' => $this->db->query("select village_id, name from village")->result(),
    // 	    'shipper_id' => set_value('shipper_id', $get_shipper->shipper_id),
    // 	    'shipper_name' => set_value('shipper_name', $get_shipper->shipper_name),
    // 	    'shipper_phone' => set_value('shipper_phone', $get_shipper->shipper_phone),
    // 	    'shipper_address' => set_value('shipper_address', $get_shipper->shipper_address),
    // 	    'shipper_name_building_housing' => set_value('shipper_name_building_housing', $get_shipper->shipper_name_building_housing),
    // 	    'shipper_detail_building_housing' => set_value('shipper_detail_building_housing', $get_shipper->shipper_detail_building_housing),
    // 	    'shipper_postal_code' => set_value('shipper_postal_code', $get_shipper->shipper_postal_code),
    // 	    'shipper_province_id' => set_value('shipper_province_id', $get_shipper->shipper_province_id),
    // 	    'shipper_city_id' => set_value('shipper_city_id', $get_shipper->shipper_city_id),
    // 	    'shipper_district_id' => set_value('shipper_district_id', $get_shipper->shipper_district_id),
    // 	    'shipper_village_id' => set_value('shipper_village_id', $get_shipper->shipper_village_id),
    // 	    'shipper_lat' => set_value('shipper_lat', $get_shipper->shipper_lat),
    // 	    'shipper_lng' => set_value('shipper_lng', $get_shipper->shipper_lng),
    //         'page' => "Update Shipper",
    //         'title' => "Rembon Express",
    //         'main' => "admin/shipper/form",
    //     );
        
    //     $this->load->view('admin/template/index',$data);
    // }
 
    // public function update_action() 
    // {
    //     $id = $this->input->post('shipper_id',TRUE);
    //     $data = array(
    //         'shipper_name' => $this->input->post('shipper_name',TRUE),
    //         'shipper_phone' => $this->input->post('shipper_phone',TRUE),
    //         'shipper_address' => $this->input->post('shipper_address',TRUE),
    //         'shipper_name_building_housing' => $this->input->post('shipper_name_building_housing',TRUE),
    //         'shipper_detail_building_housing' => $this->input->post('shipper_detail_building_housing',TRUE),
    //         'shipper_postal_code' => $this->input->post('shipper_postal_code',TRUE),
    //         'shipper_province_id' => $this->input->post('prop',TRUE),
    //         'shipper_city_id' => $this->input->post('kota',TRUE),
    //         'shipper_district_id' => $this->input->post('kec',TRUE),
    //         'shipper_village_id' => $this->input->post('kel',TRUE),
    //         'shipper_lat' => $this->input->post('shipper_lat',TRUE),
    //         'shipper_lng' => $this->input->post('shipper_lng',TRUE),
    //     );
    //     // var_dump($data);die();
    //     $update = $this->Admin_model->update($id, $data);
    //     if($update){
    //         $this->session->set_flashdata('success', $this->lang->line('update_success'));
    //         redirect(base_url('admin/shipper'));    
    //     }else{
    //         $this->session->set_flashdata('error', $this->lang->line('error_alert'));
    //         redirect(base_url('admin/shipper/update/'.$id.''));    
    //     }
    // }

    // public function read($id) 
    // {
    //     $get_shipper = $this->Admin_model->get_by_id($id);
    //     $data = array(
    //         // 'button' => 'Create',
    //         'button_back' => base_url('admin/shipper'),
    //         'form' => 'read',
    //         'action' => base_url('admin/shipper/update_action'),
    // 	    'province' => $this->db->query("select province_id, name from province")->result(),
    // 	    'city' => $this->db->query("select city_id, name from city")->result(),
    // 	    'district' => $this->db->query("select district_id, name from district")->result(),
    // 	    'village' => $this->db->query("select village_id, name from village")->result(),
    // 	    'shipper_id' => set_value('shipper_id', $get_shipper->shipper_id),
    // 	    'shipper_name' => set_value('shipper_name', $get_shipper->shipper_name),
    // 	    'shipper_phone' => set_value('shipper_phone', $get_shipper->shipper_phone),
    // 	    'shipper_address' => set_value('shipper_address', $get_shipper->shipper_address),
    // 	    'shipper_name_building_housing' => set_value('shipper_name_building_housing', $get_shipper->shipper_name_building_housing),
    // 	    'shipper_detail_building_housing' => set_value('shipper_detail_building_housing', $get_shipper->shipper_detail_building_housing),
    // 	    'shipper_postal_code' => set_value('shipper_postal_code', $get_shipper->shipper_postal_code),
    // 	    'shipper_province_id' => set_value('shipper_province_id', $get_shipper->shipper_province_id),
    // 	    'shipper_city_id' => set_value('shipper_city_id', $get_shipper->shipper_city_id),
    // 	    'shipper_district_id' => set_value('shipper_district_id', $get_shipper->shipper_district_id),
    // 	    'shipper_village_id' => set_value('shipper_village_id', $get_shipper->shipper_village_id),
    // 	    'shipper_lat' => set_value('shipper_lat', $get_shipper->shipper_lat),
    // 	    'shipper_lng' => set_value('shipper_lng', $get_shipper->shipper_lng),
    //         'page' => "Update Shipper",
    //         'title' => "Rembon Express",
    //         'main' => "admin/shipper/form",
    //     );
        
    //     $this->load->view('admin/template/index',$data);
    // }

    public function delete($id) 
    {
        $id = $this->input->post('id',TRUE);
        $row = $this->Admin_model->get_by_id($id);

        if ($row) {
            $this->Admin_model->delete($id);
            $this->session->set_flashdata('success', 'delete_success');
            redirect(base_url('admin/admin'));
        } else {
            $this->session->set_flashdata('error', 'delete_error');
            redirect(base_url('admin/admin'));
        }
    }
    public function get_country()
    {
        $negara = $this->db->query("SELECT country_code,country_name FROM apps_countries")->result();
        $data .= "<option value=''>Country</option>";
			foreach ($negara as $kk) {
			    $data .= "<option value='$kk->country_code'>$kk->country_name</option>";
			}
		echo $data;

    }
 

    

    // public function _rules() 
    // {	
    //     $this->form_validation->set_rules('shipper_name', 'Name', 'trim|required');
    //     $this->form_validation->set_rules('shipper_phone', 'Phone', 'trim|required');
    //     $this->form_validation->set_rules('shipper_address', 'Address', 'trim|required');
    //     $this->form_validation->set_rules('shipper_name_building_housing', 'Building Housing Name', 'trim|required');
    //     $this->form_validation->set_rules('shipper_detail_building_housing', 'Building Housing Detail', 'trim|required');
    //     $this->form_validation->set_rules('shipper_postal_code', 'Postal Code', 'trim|required');
	//     $this->form_validation->set_rules('prop', 'Province', 'trim|required');
	//     $this->form_validation->set_rules('kota', 'City', 'trim|required');
	//     $this->form_validation->set_rules('kec', 'District', 'trim|required');
	//     $this->form_validation->set_rules('kel', 'Village', 'trim|required');
	//     $this->form_validation->set_rules('shipper_lat', 'Lattitude', 'trim|required');
	//     $this->form_validation->set_rules('shipper_lng', 'Longitude', 'trim|required');
	//     $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    // }

    

}