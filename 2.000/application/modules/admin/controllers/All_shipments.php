<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class All_shipments extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();

        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

   
    }

    public function index()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/all_shipments/index";
        $this->load->view('admin/template/index',$data);
    }
    
}