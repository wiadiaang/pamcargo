<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('admin/Login_model');
        // $this->load->model('Signup_model');
   
    }

    public function index()
    {
        // $data['title'] = "Rembon Express";
        // $data['main'] = "admin/auth/login";
        // $this->load->view('admin/auth/login',NULL);
        
        redirect(site_url('auth'));
    }

    public function signup()
    {
        $data['provinsi'] = $this->Signup_model->provinsi();
        $data['title'] = "Rembon Express";
        $data['main'] = "home/auth/signup";
    	$this->load->view('home/template/index',$data);
    }

    public function proses()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        $check = $this->Login_model->get_login($email,$password);
        // var_dump($check->num_rows());die();
        if($check->num_rows() > 0)
        {
            $row = $check->row();
            $row_data = array(
                'user_id' => $row->user_id,
                'email' => $row->email,
                'name' => $row->firstname." ".$row->lastname,
                'phone' => $row->phone,
                'name_pt' => $row->name_pt,
                'address'=> $row->address,
                'province_id'=> $row->province_id,
                'city_id'=> $row->city_id,
                'district_id'=> $row->district_id, 
                'lat'=> $row->lat,
                'lng'=> $row->lng,
                'postal_code'=> $row->postal_code,
                'signup_date'=> $row->signup_date,    
                'admin_id'=> $row->admin_id,    
                'country'=> $row->country,    
                'type'=> $row->level
            );
            // if($row->level == 'admin' || $row->level == 'superadmin' ){
                $this->session->set_userdata($row_data);
                // redirect(base_url().'admin/Dashboard');
                redirect(base_url().'admin/booking');
            // }else{
            //     redirect(base_url().'admin/Dashboard');
            // }
           
        }else{

            $check_shiper = $this->Login_model->get_login_shipper($email,$password);
            if($check_shiper->num_rows() > 0){
                $row_shiper = array(
                    'shipper_id' => $check_shiper->shipper_id,
                    'email' => $check_shiper->shipper_email,
                    'type'=> 'shipper'
                );
                $this->session->set_userdata($row_shiper);
                redirect(base_url().'admin/Dashboard');
            }else{
                $this->session->set_flashdata('error',"Email atau password Salah");
                 redirect(base_url()."admin");
                 
            }

            
           
        }
    }

    public function logout()
    {
    	$this->session->unset_userdata('user_id');  
    	$this->session->unset_userdata('email');
        $this->session->unset_userdata('name');  
        $this->session->unset_userdata('email');  
        $this->session->unset_userdata('phone');  
        $this->session->unset_userdata('address');  
        $this->session->unset_userdata('province_id');  
        $this->session->unset_userdata('city_id');  
        $this->session->unset_userdata('lat');  
        $this->session->unset_userdata('lng');  
        $this->session->unset_userdata('postal_code');  
        $this->session->unset_userdata('signup_date');  
        $this->session->unset_userdata('type');  

        redirect(base_url('admin'));  
    }

    public function create()
    {
        
    }



}