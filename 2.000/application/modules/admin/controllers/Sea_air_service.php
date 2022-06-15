<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sea_air_service extends MX_Controller {
    
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('type') != 'shiper' && $this->session->userdata('type') != 'admin' && $this->session->userdata('type') != 'superadmin'  ){
             redirect(base_url('admin'));
        }
    }

    public function index()
    {
        $data['title'] = "PAM CARGO";
        $data['main'] = "admin/sea_air/index";
        $this->load->view('admin/template/index',$data);
    }

    public function form_sea_air($id= ''){
        $data['master_id'] = $id;
        $data['page'] = "Form Sea Air Service";
        $data['title'] = "PAM CARGO";
        $data['main'] = "admin/sea_air/form_seaair";
        $this->load->view('admin/template/index',$data);
    }

    

  }