<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_shipper extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('User_shipper_model');
        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url('admin/dashboard'));
        }

   
    }

    public function index()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/user_shipper/index";
        $this->load->view('admin/template/index',$data);
    }

    public function ajax_list()
    {
        $list = $this->User_shipper_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $admin) {
            $no++;
            $row = array();
            $row[] = $no;
            if($admin->status_user == 'active'){
                // $row[] = '<a onclick="hapus('.$admin->user_id.')" class="btn btn-xs btn-danger">Delete</a>'; 
                $row[] = 'Approved'; 
            }else{
                $row[] = '
                <a  onclick="approve('.$admin->user_id.')" class="btn btn-xs btn-info">Approve</a>'; 
            }
            $row[] = $admin->name_pt;
            $row[] = $admin->email;
            $row[] = $admin->phone_office; 
            $row[] = $admin->address; 
            $row[] = $admin->country; 
            $row[] = $admin->status_user; 
            
          
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->User_shipper_model->count_all(),
                        "recordsFiltered" => $this->User_shipper_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    
    public function get_user($id){
        $a = $this->db->query("SELECT * FROM user where user_id = $id ")->row();
        echo json_encode($a);
    }

    public function approve_user(){
        $user_id = $this->input->post('user_id');
        $email = $this->input->post('email');
        $a['password'] = md5($this->input->post('password'));
        $a['status_user'] = 'active';

        $this->db->where('user_id',$user_id);
        $this->db->update('user',$a);

        $html = "<img src='https://express.rembon.co.id/static/logo.png' height='50' width='200' style='float:left;' >
        <h1 style='float:left;'></h1>
        <br> <br> <br> <br> 
        <hr>
        <h4><b>Hi, ".$this->input->post('name')."</b></h4>
        <h4>Your signup as shipper has approved,  Please sign in with your account at <a href='https://express.rembon.co.id/admin'>https://express.rembon.co.id/admin</a> </h4>
        <table >
        <tr>
            <td>Email</td>
            <td>".$this->input->post('email')."</td>
        </tr>
        <tr>
        <td>Password</td>
            <td>".$this->input->post('password')."</td>
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
        $this->email->from('aulhakim998@gmail.com','PAM CARGO');
        $this->email->to($email);
        $this->email->subject("You accout has approved");
        $this->email->message($html);
        $this->email->send();
        $this->email->print_debugger();

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
 
    public function create_action() 
    {
        $pas = $this->input->post('pass');
        $pas2 = $this->input->post('pass2');
        if($pas != $pas2){
            $this->session->set_flashdata('error', 'password tidak sama');
            redirect(base_url('admin/admin/create'));    
        }else{
            
            $data = array(
                'firstname' => $this->input->post('firstname',TRUE),
                'lastname' => $this->input->post('lastname',TRUE),
                'email' => $this->input->post('email',TRUE),
                'phone' => $this->input->post('phone',TRUE),
                'address' => $this->input->post('address',TRUE),
                'province_id' => $this->input->post('prop',TRUE),
                'city_id' => $this->input->post('kab',TRUE),
                'district_id' => $this->input->post('kec',TRUE),
                'village_id' => $this->input->post('desa',TRUE),
                'postal_code' => $this->input->post('postal_code',TRUE),
                'lat' => $this->input->post('lat',TRUE),
                'lng' => $this->input->post('lng',TRUE),
                'level' => 'admin',
                'password' => md5($pas)
            );
            
            $save = $this->User_shipper_model->insert($data);
            if($save){
                $this->session->set_flashdata('success', $this->lang->line('insert_success'));
                redirect(base_url('admin/admin'));    
            }else{
                $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                redirect(base_url('admin/admin/create'));    
            }
        


        }
          
    }

    // public function update($id) 
    // {
    //     $get_shipper = $this->User_shipper_model->get_by_id($id);
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
    //     $update = $this->User_shipper_model->update($id, $data);
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
    //     $get_shipper = $this->User_shipper_model->get_by_id($id);
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
        $row = $this->User_shipper_model->get_by_id($id);

        if ($row) {
            $this->User_shipper_model->delete($id);
            $this->session->set_flashdata('success', 'delete_success');
            redirect(base_url('admin/admin'));
        } else {
            $this->session->set_flashdata('error', 'delete_error');
            redirect(base_url('admin/admin'));
        }
    }


    

}