<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();

        if($this->session->userdata('type') != 'user'){
            
             redirect(base_url());
        }

        $this->load->model('home/Signup_model');
        $this->load->model('Order_model');
    }

    public function index()
    {   
         $user_id = $this->session->userdata('user_id');
         $data['provinsi'] = $this->Signup_model->provinsi();
         $data['barang'] = $this->Order_model->barang();
         $data['title'] = "Rembon Express";
         $data['main'] = "customer/order/index";
    	 $this->load->view('customer/template/index',$data);
    }

    public function proses()
    {
        $data = array();
    }

    public function maps()
    {
        $user_id = $this->session->userdata('user_id');
        $data['provinsi'] = $this->Signup_model->provinsi();
        $data['title'] = "Rembon Express";
        $data['main'] = "customer/order/maps";
    	$this->load->view('customer/template/index',$data);
    }

   

}