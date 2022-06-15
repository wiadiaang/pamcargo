<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

    public function __construct() 
		{
			parent::__construct();
			 $this->load->library('session');
			 $this->load->model('m_home');
			 $id = $this->session->userdata('user_id');
			 if( $id == ''){
				redirect(base_url('auth'));
			 }
		}

	public function index()
	{
		$this->load->view('home/home');
	}

	public function ajax_list(){
		$list = $this->m_home->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $key) {
			$button = "<a href='javascript:void(0)'  onClick='update(".$key->slider_id.")' title='Edit' class='btn btn-xs btn-primary'> Update</a>
			<a href='javascript:void(0)' onClick='deletes(".$key->slider_id.")' title='Delete' class='btn btn-xs btn-danger'>Delete</a>";
			$no++;
			$row = array(); 
            $row[] = $no;
            $row[] = $key->title;            
            $row[] = $key->description;
			$row[] = "<img width='50px' src='".base_url('assets/dash/files/'.$key->image)."'>"; 
			$row[] = $button;
			$data[] = $row;
		}
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_home->count_all(),
						"recordsFiltered" => $this->m_home->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function form($id = ''){
		$data['data'] = $this->db->query("SELECT * FROM pam_slider where slider_id = '$id' ")->row();

		$this->load->view('admin/home/form',$data);
		

	}
	public function save_slider(){
		$a['title'] = $_POST['title'];
		$a['description'] = $_POST['description'];
		$a['color_text'] = $_POST['text_color'];
		$a['type'] = $_POST['type'];
		$a['title2'] = $_POST['title2'];
		$a['description2'] = $_POST['description2'];
		$a['title3'] = $_POST['title3'];
		$a['description3'] = $_POST['description3'];
		$a['create_date'] = date('Y-m-d H:i:s');
		$config['upload_path']  = './assets/dash/files';
		$config['allowed_types']   = '*';
		// $config['min_width']     = '1920';
		// $config['min_height']    = '854';
        $this->upload->initialize($config);
        $this->load->library('upload');
        if (!$this->upload->do_upload('image'))
        {
           
        }
        else
        {
            $file = $this->upload->file_name;
            $a['image'] =  $file;
		}
		$slider_id = $_POST['slider_id'];

		if($slider_id != ''){
			$this->db->where('slider_id',$slider_id);
			$this->db->update('pam_slider',$a);
		}else{
			$this->db->insert('pam_slider',$a);
		}

	}

	function delete_data(){
		$id = $_POST['id'];
		$this->db->where('slider_id',$id);
		$this->db->delete('pam_slider');
	}
		
	

    
}