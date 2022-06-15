<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vessel_name extends MX_Controller {

    public function __construct() 
		{
			parent::__construct();
			 $this->load->library('session');
			 $this->load->model('m_vessel');
			 $id = $this->session->userdata('user_id');
			 if( $id == ''){
				redirect(base_url('auth'));
			 }
		}

	public function index()
	{
		$this->load->view('data/vessel_name/vessel_name');
	}

	public function ajax_list(){
		$list = $this->m_vessel->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $key) {
			$button = "<a href='javascript:void(0)'  onClick='update(".$key->vessel_id.")' title='Edit' class='btn btn-xs btn-primary'> Update</a>
			<a href='javascript:void(0)' onClick='deletes(".$key->vessel_id.")' title='Delete' class='btn btn-xs btn-danger'>Delete</a>";
			$no++;
			$row = array(); 
            $row[] = $no;
            $row[] = $key->vessel_name;            
			$row[] = $button;
			$data[] = $row;
		}
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_vessel->count_all(),
						"recordsFiltered" => $this->m_vessel->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function form($id = ''){
		$data['data'] = $this->db->query("SELECT * FROM vessel where vessel_id = '$id' ")->row();
		$this->load->view('admin/data/vessel_name/form',$data);
    }
    
	public function save_vessel_name(){
        $a['vessel_name'] = $_POST['vessel_name'];
        
		$vessel_id = $_POST['vessel_id'];
		if($vessel_id != ''){
			$this->db->where('vessel_id',$vessel_id);
			$this->db->update('vessel',$a);
		}else{
			$this->db->insert('vessel',$a);
		}

	}

	function delete_data(){
		$id = $_POST['id'];
		// $que = $this->db->query("SELECT * FROM vessel where vessel_id = '$id' ")->row();
		// $path ="./assets/dash/files/vessel/".$que->image_thumbnail;
		// unlink($path);

		$this->db->where('vessel_id',$id);
		$this->db->delete('vessel');
	}
		
	

    
}