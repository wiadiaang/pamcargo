<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MX_Controller {

    public function __construct() 
		{
			parent::__construct();
			 $this->load->library('session');
			 $this->load->model('m_news');
			 $id = $this->session->userdata('user_id');
			 if( $id == ''){
				redirect(base_url('auth'));
			 }
		}

	public function index()
	{
		$this->load->view('news/news');
	}

	public function ajax_list(){
		$list = $this->m_news->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $key) {
			$button = "<a href='javascript:void(0)'  onClick='update(".$key->news_id.")' title='Edit' class='btn btn-xs btn-primary'> Update</a>
			<a href='javascript:void(0)' onClick='deletes(".$key->news_id.")' title='Delete' class='btn btn-xs btn-danger'>Delete</a>";
			$no++;
			$row = array(); 
            $row[] = $no;
            $row[] = $key->title;            
            // $row[] = $key->description;
			$row[] = "<img width='50px' src='".base_url('assets/dash/files/news/'.$key->image_thumbnail)."'>"; 
			$row[] = $button;
			$data[] = $row;
		}
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_news->count_all(),
						"recordsFiltered" => $this->m_news->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function form($id = ''){
		$data['data'] = $this->db->query("SELECT * FROM pam_news where news_id = '$id' ")->row();
		$this->load->view('admin/news/form',$data);
    }
    
	public function save_news(){
		$a['title'] = $_POST['title'];
		// $a['desc_front'] = $_POST['desc_front'];
		$a['description'] = $_POST['description'];
		$a['category'] = $_POST['category'];
		$a['caption_thumbnail'] = $_POST['caption_thumbnail'];
		$a['create_date'] = date('Y-m-d H:i:s');

		$jud = preg_replace('~[\\\\/:*?"<>|,&+$()]~','', $_POST['title']);
        $jud1 = str_replace( ' ', '-', $jud);
		$a['url'] = strtolower($jud1);
		
		$config['upload_path'] = './assets/dash/files/news/';
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
        $this->load->library('upload');
        if (!$this->upload->do_upload('image'))
        {
           
        }else {
            $file = $this->upload->file_name;
            $a['image_thumbnail'] =  $file;
		}
		$news_id = $_POST['news_id'];

		if($news_id != ''){
			$this->db->where('news_id',$news_id);
			$this->db->update('pam_news',$a);
		}else{
			$this->db->insert('pam_news',$a);
		}

	}

	function delete_data(){
		$id = $_POST['id'];
		$que = $this->db->query("SELECT * FROM pam_news where news_id = '$id' ")->row();
		$path ="./assets/dash/files/news/".$que->image_thumbnail;
		unlink($path);

		$this->db->where('news_id',$id);
		$this->db->delete('pam_news');
	}
		
	

    
}