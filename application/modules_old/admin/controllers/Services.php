<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MX_Controller {

    public function __construct() 
		{
			parent::__construct();
             $this->load->library('session');
             $id = $this->session->userdata('user_id');
			 if( $id == ''){
				redirect(base_url('auth'));
			 }
		}

	public function index()
	{
		// $a['about'] = $this->db->query("SELECT * FROM pam_about where about_id = '1' ")->row();
		// $this->load->view('about/about',$a);
	}
    
    public function sea_air_services(){
        $a['table'] = 'pam_sea_air';
        $a['data'] = $this->db->query("SELECT * FROM pam_sea_air where sas_id = '1' ")->row();
        $this->load->view('admin/services/sea_air_services',$a);
    }
    public function air_freight_services(){
        $a['table'] = 'pam_air_freight';
        $a['data'] = $this->db->query("SELECT * FROM pam_air_freight where sas_id = '1' ")->row();
        $this->load->view('admin/services/air_freight_services',$a);
    }
    public function sea_freight_services(){
        $a['table'] = 'pam_sea_freight';
        $a['data'] = $this->db->query("SELECT * FROM pam_sea_freight where sas_id = '1' ")->row();
        $this->load->view('admin/services/sea_freight_services',$a);
    }
    public function ad_hoc_services(){
        $a['table'] = 'pam_ad_hoc_charter';
        $a['data'] = $this->db->query("SELECT * FROM pam_ad_hoc_charter where sas_id = '1' ")->row();
        $this->load->view('admin/services/ad_hoc_services',$a);
    }
    public function road_transport(){
        $a['table'] = 'pam_road_transport';
        $a['data'] = $this->db->query("SELECT * FROM pam_road_transport where sas_id = '1' ")->row();
        $this->load->view('admin/services/road_transport',$a);
    }
    public function custom_clearance(){
        $a['table'] = 'pam_custom_clearance';
        $a['data'] = $this->db->query("SELECT * FROM pam_custom_clearance where sas_id = '1' ")->row();
        $this->load->view('admin/services/custom_clearance',$a);
    }
    public function warehousing(){
        $a['table'] = 'pam_warehouse';
        $a['data'] = $this->db->query("SELECT * FROM pam_warehouse where sas_id = '1' ")->row();
        $this->load->view('admin/services/warehousing',$a);
    }

    public function save_data(){
        $a['content'] = $_POST['content'];
        $a['title'] = $_POST['title'];
        $table = $_POST['table'];
        $id = $_POST['id'];
        $this->db->where('sas_id',$id);
        $this->db->update($table,$a);
    }
    
   
	
    
}