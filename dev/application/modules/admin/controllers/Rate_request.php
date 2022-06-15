<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rate_request extends MX_Controller {

    public function __construct() 
		{
			parent::__construct();
			 $this->load->library('session');
			 $this->load->model('m_rate_request');
			 $id = $this->session->userdata('user_id');
			 if( $id == ''){
				redirect(base_url('auth'));
			 }
		}

	public function index()
	{
		$this->load->view('data/rate_request/rate_request');
	}

	public function ajax_list(){
		$list = $this->m_rate_request->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $key) {
			$button = "<a href='javascript:void(0)' onClick='update(".$key->request_id.")' title='Look' class='btn btn-xs btn-primary'> Detail</a>";
			$no++;
			$row = array(); 
            $row[] = $no;
            $row[] = $key->contact_name;            
            $row[] = $key->contact_phone;            
            $row[] = $key->contact_email;            
            $row[] = $key->contact_company;            
            $row[] = $key->origin;            
            $row[] = $key->via;            
            $row[] = $key->destination;            
			$row[] = $button;
			$data[] = $row;
		}
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_rate_request->count_all(),
						"recordsFiltered" => $this->m_rate_request->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function form($id = ''){
		$data['data'] = $this->db->query("SELECT * FROM rate_request where request_id = '$id' ")->row();
		$this->load->view('admin/data/rate_request/form',$data);
    }
  
	

    
}