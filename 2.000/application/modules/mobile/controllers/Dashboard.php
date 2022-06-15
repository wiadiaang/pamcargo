<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();

        if($this->session->userdata('type') != 'opd'){
            
             redirect(base_url());
        }

   
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');
         $data['baru'] = $this->db->get_where("pengaduan",array("status_id"=>"1","user_id"=>$user_id))->num_rows();
         $data['proses'] = $this->db->get_where("pengaduan",array("status_id"=>"2","user_id"=>$user_id))->num_rows();
         $data['selesai'] = $this->db->get_where("pengaduan",array("status_id"=>"3","user_id"=>$user_id))->num_rows();
         
        $data['title'] = "Starstudents";
         $data['main'] = "opd/dashboard/index";
    	 $this->load->view('opd/template/index',$data);
    }
    
}