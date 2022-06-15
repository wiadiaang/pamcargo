<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Signup_model');
   
    }

    public function index()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "home/auth/login";
    	$this->load->view('home/template/index',$data);
    }

    public function signup()
    {
        $data['provinsi'] = $this->Signup_model->provinsi();
        $data['admin'] = $this->db->query("SELECT * FROM user where level = 'admin'")->result();
        $data['country'] = $this->db->query("SELECT country_name,id FROM apps_countries")->result();
        $data['title'] = "Rembon Express";
        $data['main'] = "home/auth/signup";
    	$this->load->view('home/template/index',$data);
    }

    public function proses()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $check = $this->Login_model->login($email,$password);
        if($check->num_rows() > 0)
        {
            $row = $check->row();
            $row_data = array(
                'user_id' => $row->user_id,
                'email' => $row->email,
                'name' => $row->firstname." ".$row->lastname,
                'phone' => $row->phone,
                'address'=> $row->address,
                'province_id'=> $row->province_id,
                'city_id'=> $row->city_id,
                'district_id'=> $row->district_id, 
                'lat'=> $row->lat,
                'lng'=> $row->lng,
                'postal_code'=> $row->postal_code,
                'signup_date'=> $row->signup_date,    
                'type'=>'user'
            );
            $this->session->set_userdata($row_data);
            redirect(base_url().'customer');
        }else{
            $this->session->set_flashdata('error',"Email atau password Salah");
            // redirect(base_url()."login");
        }
    }


    public function create()
    {
           
           $country = $this->input->post('country');
           $user_admin = $this->db->query("SELECT admin_id,email,firstname,name_pt FROM user where country = '$country' and level = 'admin' and status_user = 'active' ")->row();
            $data = array(
                "name_pt"=>$this->input->post('name_pt'),
                "address"=>$this->input->post('address'),
                "country"=>$this->input->post('country'),
                "email"=>$this->input->post('email'),
                "phone_office"=>$this->input->post('phone_office'),
                "name_pic"=>$this->input->post('name_pic'),
                "phone_pic"=>$this->input->post('phone_pic'),
                "created_dated"=> date('Y-m-d'),
                "level"=> 'shiper',
                "status_user"=>"nonactive",
            );
            $this->db->insert('user',$data);

            $html .= "<img src='https://express.rembon.co.id/static/logo.png' height='50' width='200' style='float:left;' >
            <h1 style='float:left;'></h1>
            <br> <br> <br> <br> 
            <hr>
            <h4><b>Hi, ".$user_admin->name_pt."</b></h4>
            <h4>You got new user shipper from ".$this->input->post('email').", Approve and give password user now </h4>
            <table border='1px'>
            <tr>
                <td>Name</td>
                <td>".$this->input->post('name_pt')."</td>
            </tr>
            <tr>
                <td>Telephone</td>
                <td>".$this->input->post('phone_pic')."</td>
            </tr>
                <tr>
                <td>Address</td>
                <td>".$this->input->post('address')."</td>
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
            $this->email->from('aulhakim998@gmail.com','Rembon Express');
            $this->email->to($user_admin->email);
            $this->email->subject("You got new shipper");
            $this->email->message($html);
            $this->email->send();
            echo $this->email->print_debugger();

            redirect(base_url('admin'));
        }

    // public function create()
    // {
    //     // $p1 = $this->input->post('password');
    //     // $p2 = $this->input->post('rpassword');
    //     // if($p1 == $p2){
    //         $data = array(
    //             "firstname"=>$this->input->post('fname'),
    //             "lastname"=>$this->input->post('lname'),
    //             "email"=>$this->input->post('email'),
    //             // "password"=>md5($this->input->post('password')),
    //             "phone"=>$this->input->post('phone'),
    //             "address"=>$this->input->post('address'),
    //             // "province_id"=>$this->input->post('prop'),
    //             // "city_id"=>$this->input->post('kota'),
    //             // "district_id"=>$this->input->post('kec'),
    //             // "village_id"=>$this->input->post('kel'),
    //             "country"=>$this->input->post('country'),
    //             // "lat"=>$this->input->post('lat'),
    //             // "lng"=>$this->input->post('lng'),
    //             "postal_code"=>$this->input->post('postal_code'),
    //             "level"=> "shiper",
    //             "admin_id"=> $this->input->post('admin_id'),
    //             "created_date"=> date('Y-m-d'),
    //             "token"=>"",
    //             "status_user"=>"nonactive",
    //         );
    //         // var_dump($data);
           
    //         // $this->Signup_model->signup($data);
    //         $this->db->insert('shiper',$data);
            
    //         redirect(base_url('login'));
    //     // }else{
    //     //     redirect(base_url('signup'));
    //     // }
    // }

    public function postal_code($id)
    {
        $row = $this->Signup_model->kelurahan($id);
        echo $row->postal_code;
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');  
    	$this->session->unset_userdata('name');
		$this->session->unset_userdata('email');
        $this->session->unset_userdata('phone');
        $this->session->unset_userdata('address');
        $this->session->unset_userdata('province_id');
        $this->session->unset_userdata('city_id');
        $this->session->unset_userdata('district_id');
        $this->session->unset_userdata('lat');
        $this->session->unset_userdata('lng');
        $this->session->unset_userdata('postal_code');
        $this->session->unset_userdata('signup_date');
		$this->session->unset_userdata('type');      

        redirect(base_url());  
    }

    public function get_country()
    {
        $negara = $this->db->query("SELECT name_pt,country FROM user where level ='admin' ")->result();
        $data .= "<option value=''>Country</option>";
			foreach ($negara as $kk) {
			    $data .= "<option value='$kk->country'>$kk->name_pt</option>";
			}
		echo $data;

    }


}