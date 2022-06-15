<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MX_Controller {

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
		$a['about'] = $this->db->query("SELECT * FROM pam_about where about_id = '1' ")->row();
		$this->load->view('about/about',$a);
	}
	
	public function save_overview(){
		$a['overview'] = $_POST['overview'];
		$id = $_POST['id'];
		$this->db->where('about_id',$id);
		$this->db->update('pam_about',$a);
	}
	public function save_objective(){
		$a['objective'] = $_POST['objective'];
		$id = $_POST['id'];
		$this->db->where('about_id',$id);
		$this->db->update('pam_about',$a);
	}
	public function save_vision(){
		$a['vision'] = $_POST['vision'];
		$id = $_POST['id'];
		$this->db->where('about_id',$id);
		$this->db->update('pam_about',$a);
	}
	public function save_mision(){
		$a['mision'] = $_POST['mision'];
		$id = $_POST['id'];
		$this->db->where('about_id',$id);
		$this->db->update('pam_about',$a);
	}
	public function save_team(){
		$a['team'] = $_POST['team'];
		$id = $_POST['id'];
		$this->db->where('about_id',$id);
		$this->db->update('pam_about',$a);
	}

		
	

    
}