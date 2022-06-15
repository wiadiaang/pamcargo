<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departure_origin extends MX_Controller {

    public function __construct() 
		{
			parent::__construct();
			 $this->load->library('session');
			 $this->load->model('m_departure');
			 $id = $this->session->userdata('user_id');
			 if( $id == ''){
				redirect(base_url('auth'));
			 }
		}

	public function index()
	{
		$this->load->view('data/departure_origin/departure_origin');
	}

	public function ajax_list(){
		$list = $this->m_departure->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $key) {
			$button = "<a href='javascript:void(0)'  onClick='update(".$key->departure_id.")' title='Edit' class='btn btn-xs btn-primary'> Update</a>
			<a href='javascript:void(0)' onClick='deletes(".$key->departure_id.")' title='Delete' class='btn btn-xs btn-danger'>Delete</a>";
			$no++;
			$row = array(); 
            $row[] = $no;
            $row[] = $key->departure_name;            
			$row[] = $button;
			$data[] = $row;
		}
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_departure->count_all(),
						"recordsFiltered" => $this->m_departure->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function form($id = ''){
		$data['data'] = $this->db->query("SELECT * FROM departure where departure_id = '$id' ")->row();
		$this->load->view('admin/data/departure_origin/form',$data);
    }
    
	public function save_departure_origin(){
        $a['departure_name'] = $_POST['departure_name'];
        
		$departure_id = $_POST['departure_id'];
		if($departure_id != ''){
			$this->db->where('departure_id',$departure_id);
			$this->db->update('departure',$a);
		}else{
			$this->db->insert('departure',$a);
		}

	}

	function delete_data(){
		$id = $_POST['id'];
		// $que = $this->db->query("SELECT * FROM departure where departure_id = '$id' ")->row();
		// $path ="./assets/dash/files/departure/".$que->image_thumbnail;
		// unlink($path);

		$this->db->where('departure_id',$id);
		$this->db->delete('departure');
	}
		
	

    
}