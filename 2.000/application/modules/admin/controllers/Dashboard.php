<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();

        if($this->session->userdata('type') != 'admin' && $this->session->userdata('type') != 'superadmin'  && $this->session->userdata('type') != 'shiper' ){
            
             redirect(base_url());
        }

   
    }

    public function index()
    {
        // var_dump($this->db->query("SELECT * FROM courier")->result());die();
        $data['unpaid'] = $this->db->query("SELECT * FROM stt where date_paid = NULL")->num_rows();
        $data['paid'] = $this->db->query("SELECT * FROM stt where date_paid != NULL")->num_rows();
        $data['on_process'] = $this->db->query("SELECT * FROM stt where status = '0'")->num_rows();
        $data['total_client'] = $this->db->query("SELECT * FROM user where level != 'admin'")->num_rows();
        $data['all_shipment'] = $this->db->query("SELECT * FROM stt")->result();

        $data['title'] = "Rembon Express";
        $data['main'] = "admin/dashboard/index";
        $this->load->view('admin/template/index',$data);
    }
    
}