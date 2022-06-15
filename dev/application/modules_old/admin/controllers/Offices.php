<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offices extends MX_Controller {

    public function __construct() 
		{
			parent::__construct();
			 $this->load->library('session');
			 $this->load->model('m_offices');
			 $id = $this->session->userdata('user_id');
			 if( $id == ''){
				redirect(base_url('auth'));
			 }
		}

	public function index()
	{
		$this->load->view('offices/offices');
	}

	public function ajax_list(){
		$list = $this->m_offices->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $key) {
			$button = "<a href='javascript:void(0)'  onClick='update(".$key->offices_id.")' title='Edit' class='btn btn-xs btn-primary'> Update</a>
			<a href='javascript:void(0)' onClick='deletes(".$key->offices_id.")' title='Delete' class='btn btn-xs btn-danger'>Delete</a>";
			$no++;
			$row = array(); 
            $row[] = $no;
            $row[] = $key->name_country;            
            $row[] = $key->name_office;
			$row[] = "<img width='50px' src='".base_url('assets/dash/files/offices/'.$key->image_thumbnail)."'>"; 
			$row[] = $button;
			$data[] = $row;
		}
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_offices->count_all(),
						"recordsFiltered" => $this->m_offices->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function form($id = ''){
		$data['data'] = $this->db->query("SELECT * FROM pam_offices where offices_id = '$id' ")->row();
		$this->load->view('admin/offices/form',$data);
    }
    
	public function save_offices(){
		$a['name_country'] = $_POST['name_country'];
		$a['name_office'] = $_POST['name_office'];
		$a['address'] = $_POST['address'];
		$a['contact_name'] = $_POST['contact_name'];
		$a['telp'] = $_POST['telp'];
		$a['fax'] = $_POST['fax'];
		$a['mob'] = $_POST['mob'];
		$a['email'] = $_POST['email'];
		$a['website'] = $_POST['website'];
        
        
		$config['upload_path'] = './assets/dash/files/offices/';
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
        $this->load->library('upload');
        if (!$this->upload->do_upload('image'))
        {
           
        }
        else
        {
            $file = $this->upload->file_name;
            $a['image_thumbnail'] =  $file;
		}
		$offices_id = $_POST['offices_id'];

		if($offices_id != ''){
			$this->db->where('offices_id',$offices_id);
			$this->db->update('pam_offices',$a);
		}else{
			$this->db->insert('pam_offices',$a);
		}

	}

	function delete_data(){
		$id = $_POST['id'];
		$que = $this->db->query("SELECT * FROM pam_offices where offices_id = '$id' ")->row();
		$path ="./assets/dash/files/offices/".$que->image_thumbnail;
		unlink($path);

		$this->db->where('offices_id',$id);
		$this->db->delete('pam_offices');
	}
		
	

    
}