<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daily_report extends MX_Controller {
    
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
        $data['main'] = "admin/daily_report/index";
        $this->load->view('admin/template/index',$data);
    }

    public function form_daily_report($id= ''){
        $data['master_id'] = $id;
        $data['page'] = "Form Daily Report";
        $data['title'] = "PAM CARGO";
        $data['main'] = "admin/daily_report/form_daily_report";
        $this->load->view('admin/template/index',$data);
    }

    

  }