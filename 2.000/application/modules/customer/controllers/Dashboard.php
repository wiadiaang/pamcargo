<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();

        if($this->session->userdata('type') != 'user'){
            
             redirect(base_url());
        }

        $this->load->model('home/Signup_model');

   
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        
        $data['title'] = "Starstudents";
        $data['main'] = "customer/dashboard/index";
    	$this->load->view('customer/template/index',$data);
    }
    

}