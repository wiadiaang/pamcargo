<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MX_Controller {

    public function __construct() 
		{
			parent::__construct();
			 $this->load->library('session');
			 $this->load->model('m_contact');
			 $id = $this->session->userdata('user_id');
			 if( $id == ''){
				redirect(base_url('auth'));
			 }
		}

	public function index()
	{
		$this->load->view('contact/contact');
	}

	public function ajax_list(){
		$list = $this->m_contact->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $key) {
			$button = "<a href='javascript:void(0)'  onClick='update(".$key->contact_id.")' title='Edit' class='btn btn-xs btn-primary'> Update</a>
			<a href='javascript:void(0)' onClick='deletes(".$key->contact_id.")' title='Delete' class='btn btn-xs btn-danger'>Delete</a>";
			$no++;
			$row = array(); 
            $row[] = $no;
            $row[] = $key->first_name.' '.$key->last_name;            
            $row[] = $key->phone.' | '.$key->email;
            $row[] = $key->message;
			// $row[] = $button;
			$data[] = $row;
		}
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_contact->count_all(),
						"recordsFiltered" => $this->m_contact->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function form($id = ''){
		$data['data'] = $this->db->query("SELECT * FROM pam_news where contact = '$id' ")->row();
		$this->load->view('admin/news/form',$data);
    }
  

	

    
}