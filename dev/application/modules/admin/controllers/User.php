<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {

    public function __construct() 
		{
			parent::__construct();
			 $this->load->library('session');
			 $this->load->model('m_user');
			 $id = $this->session->userdata('user_id');
			 if( $id == ''){
				redirect(base_url('auth'));
			 }
		}

	public function index()
	{
		$this->load->view('user/user');
	}

	public function ajax_list(){
		$list = $this->m_user->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $key) {
			$button = "<a href='javascript:void(0)'  onClick='update(".$key->user_id.")' title='Edit' class='btn btn-xs btn-primary'> Update</a>
			<a href='javascript:void(0)' onClick='deletes(".$key->user_id.")' title='Delete' class='btn btn-xs btn-danger'>Delete</a>";
			$no++;
			$row = array(); 
            $row[] = $no;
            $row[] = $key->name;            
            $row[] = $key->email;
            $row[] = 'User '.$key->type;
			$row[] = $button;
			$data[] = $row;
		}
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_user->count_all(),
						"recordsFiltered" => $this->m_user->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	} 
	
	public function form($id = ''){
		$data['data'] = $this->db->query("SELECT * FROM pam_user where user_id = '$id' ")->row();
		$this->load->view('admin/user/form',$data);
    }
    
	public function save_data(){
		$a['name'] = $_POST['name'];
		$a['email'] = $_POST['email'];
		$a['type'] = $_POST['type'];
		$a['address'] = $_POST['address'];
		$password = $_POST['password'];
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
		$user_id = $_POST['user_id'];
		if($user_id != ''){
			if($password == ""){
				$a['password']  = $_POST['password2'];
			}else{
				$a['password'] = md5($password);
			}
			$this->db->where('user_id',$user_id);
			$this->db->update('pam_user',$a);
		}else{
			$a['password'] = md5($password);
			$this->db->insert('pam_user',$a);
		}

	}

	function delete_data(){
		$id = $_POST['id'];
		$que = $this->db->query("SELECT * FROM pam_user where user_id = '$id' ")->row();
		$path ="./assets/dash/files/news/".$que->image_thumbnail;
		unlink($path);

		$this->db->where('user_id',$id);
		$this->db->delete('pam_user');
	}
		
	

    
}