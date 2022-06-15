<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agents extends MX_Controller {

    public function __construct() 
		{
			parent::__construct();
			 $this->load->library('session');
			 $this->load->model('m_agents');
			 $id = $this->session->userdata('user_id');
			 if( $id == ''){
				redirect(base_url('auth'));
			 }
		}

	public function index()
	{
		$this->load->view('agents/agents');
	}

	public function ajax_list(){
		$list = $this->m_agents->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $key) {
			$button = "<a href='javascript:void(0)'  onClick='update(".$key->agents_id.")' title='Edit' class='btn btn-xs btn-primary'> Update</a>
			<a href='javascript:void(0)' onClick='deletes(".$key->agents_id.")' title='Delete' class='btn btn-xs btn-danger'>Delete</a>";
			$no++;
			$row = array(); 
            $row[] = $no;
            $row[] = $key->title;            
            $row[] = $key->content;
			$row[] = $button;
			$data[] = $row;
		}
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_agents->count_all(),
						"recordsFiltered" => $this->m_agents->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function form($id = ''){
		$data['data'] = $this->db->query("SELECT * FROM pam_agents where agents_id = '$id' ")->row();
		$this->load->view('admin/agents/form',$data);
    }
    
	public function save_agents(){
		$a['title'] = $_POST['title'];
		$a['content'] = $_POST['content'];
        // $a['create_date'] = date('Y-m-d H:i:s');
        
		// $config['upload_path'] = './assets/dash/files/news/';
        // $config['allowed_types'] = '*';
        // $this->upload->initialize($config);
        // $this->load->library('upload');
        // if (!$this->upload->do_upload('image'))
        // {
           
        // }
        // else
        // {
        //     $file = $this->upload->file_name;
        //     $a['image_thumbnail'] =  $file;
		// }
		$agents_id = $_POST['agents_id'];

		if($agents_id != ''){
			$this->db->where('agents_id',$agents_id);
			$this->db->update('pam_agents',$a);
		}else{
			$this->db->insert('pam_agents',$a);
		}

	}

	function delete_data(){
		$id = $_POST['id'];
		$que = $this->db->query("SELECT * FROM pam_agents where agents_id = '$id' ")->row();
		$path ="./assets/dash/files/news/".$que->image_thumbnail;
		unlink($path);

		$this->db->where('agents_id',$id);
		$this->db->delete('pam_agents');
	}
		
	

    
}