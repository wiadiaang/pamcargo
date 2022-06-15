<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Superadmin extends MX_Controller{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('type') != 'superadmin'){
            
             redirect(base_url('auth'));
        }
    }

    public function index()
    {
        $data['title'] = "PAM CARGO";
        $data['main'] = "superadmin/dashboard/index";
        $this->load->view('superadmin/template/index',$data);
    }

}