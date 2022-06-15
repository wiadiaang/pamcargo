<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengaduan extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();

        if($this->session->userdata('type') != 'opd'){
            
             redirect(base_url());
        }

   
    }

    public function index()
    {   
         $user_id = $this->session->userdata('user_id');
         $this->db->where("user_id",$user_id);
         $this->db->order_by("pengaduan_id","DESC");
         $data['pengaduan'] = $this->db->get('pengaduan')->result();
         $data['title'] = "Help Desk";
         $data['main'] = "opd/pengaduan/index";
    	 $this->load->view('opd/template/index',$data);
    }

    public function create()
    {
        $kategori = $this->db->get('kategori')->result();
        $data = array(
            "action"=>base_url()."opd/Pengaduan/insert",
            "kategori_id"=>set_value("kategori_id","0"),
            "pengaduan"=>set_value("pengaduan"),
            "kategori"=>$kategori,
            "page"=>'CREATE Pengaduan'
        );
         $data['title'] = "Help Desk";
         $data['main'] = "opd/pengaduan/form";
    	 $this->load->view('opd/template/index',$data);
    }

    public function insert()
    {
        $user_id = $this->session->userdata('user_id');
        $opd_id = $this->session->userdata('opd_id');
        $this->load->library('upload');
        $rand = substr(hash('sha512', rand()), 0, 20);
        $nmfile = $rand;
        $files = $_FILES['photo']['name'];
        $ada = explode(".", $files);
        $ext = end($ada);
        $config['upload_path'] = './upload/pengaduan/'; 
        $config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
        $config['max_size'] = '2048'; 
        $config['max_width']  = '2047'; 
        $config['max_height']  = '1366'; 
        $config['file_name'] = $nmfile; 
        $this->upload->initialize($config);

        if(empty($_FILES['photo']['name']))
        {
            $data = array(
                "opd_id"=>$opd_id,
                "user_id"=>$user_id,
                "kategori_id"=>$this->input->post('kategori_id'),
                "pengaduan"=>$this->input->post('pengaduan'),
                "status_id"=>1,
                "operator_id"=>0,
            );
        }else{
            $this->upload->do_upload('photo');
            $data = array(
                "opd_id"=>$opd_id,
                "user_id"=>$user_id,
                "kategori_id"=>$this->input->post('kategori_id'),
                "pengaduan"=>$this->input->post('pengaduan'),
                "status_id"=>1,
                "operator_id"=>0,
                "foto"=>$rand.'.'.$ext ,
            );
        }
        // $r = $this->db->get("limit_sms")->row();
        // $sisa = $r->limit - $this->input->post('sms_limit');
        // $id_limit = $r->id_limit;
        // $datax = array("sms_limit"=>$sisa);
        // $this->db->where("id",$id_limit);
        // $this->db->update("limit_sms",$datax);

        $this->db->insert("pengaduan",$data);
        redirect(base_url('opd/Pengaduan'));
    }

    public function edit($id)
    {
        $kategori = $this->db->get('kategori')->result();
        $row = $this->db->get_where("pengaduan",array("pengaduan_id"=>$id))->row();
        $data = array(
            "action"=>base_url()."opd/Pengaduan/update/".$id,
            "kategori_id"=>set_value("kategori_id",$row->kategori_id),
            "pengaduan"=>set_value("pengaduan",$row->pengaduan),
            "kategori"=>$kategori,
            "page"=>'EDIT Pengaduan'
        );
         $data['title'] = "Help Desk";
         $data['main'] = "opd/pengaduan/form";
    	 $this->load->view('opd/template/index',$data);
    }

    public function update($id)
    {
        $user_id = $this->session->userdata('user_id');
        $opd_id = $this->session->userdata('opd_id');
        $this->load->library('upload');
        $rand = substr(hash('sha512', rand()), 0, 20);
        $nmfile = $rand;
        $files = $_FILES['photo']['name'];
        $ada = explode(".", $files);
        $ext = end($ada);
        $config['upload_path'] = './upload/pengaduan/'; 
        $config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
        $config['max_size'] = '2048'; 
        $config['max_width']  = '2047'; 
        $config['max_height']  = '1366'; 
        $config['file_name'] = $nmfile; 
        $this->upload->initialize($config);

        if(empty($_FILES['photo']['name']))
        {
            $data = array(
                "kategori_id"=>$this->input->post('kategori_id'),
                "pengaduan"=>$this->input->post('pengaduan'),
            );
        }else{
            $this->upload->do_upload('photo');
            $data = array(
                "kategori_id"=>$this->input->post('kategori_id'),
                "pengaduan"=>$this->input->post('pengaduan'),
                "foto"=>$rand.'.'.$ext ,
            );
        }
        $this->db->where("pengaduan_id",$id);
        $this->db->update("pengaduan",$data);
        redirect(base_url('opd/Pengaduan'));
    }

    public function delete($id)
    {
        $this->db->where("pengaduan_id",$id);
        $this->db->delete("pengaduan");
        redirect(base_url('opd/Pengaduan'));
    }

    public function proses()
    {
         $user_id = $this->session->userdata('user_id');
         $this->db->where("user_id",$user_id);
         $this->db->where("status_id","2");
         $this->db->order_by("pengaduan_id","DESC");
         $data['pengaduan'] = $this->db->get('pengaduan')->result();
         
         $data['title'] = "Help Desk";
         $data['main'] = "opd/pengaduan/proses";
    	 $this->load->view('opd/template/index',$data);
    }

    public function selesai()
    {
         $user_id = $this->session->userdata('user_id');
         $this->db->where("user_id",$user_id);
         $this->db->where("status_id","3");
         $this->db->order_by("pengaduan_id","DESC");
         $data['pengaduan'] = $this->db->get('pengaduan')->result();
         
         $data['title'] = "Help Desk";
         $data['main'] = "opd/pengaduan/selesai";
    	 $this->load->view('opd/template/index',$data);
    }

    public function detail($id)
    {
        
        $row = $this->db->get_where("pengaduan",array("pengaduan_id"=>$id))->row();
        $user = $this->db->get_where("user",array("user_id"=>$row->operator_id))->row();
        $rows = $this->db->get_where("jawaban",array("pengaduan_id"=>$id))->row();
        $data = array(
            "page"=>"Detail Pertanyaan",
            "row"=>$row,
            "rows"=>$rows,
            "user"=>$user,
            "id"=>$id,
        );
        
        $data['title'] = "Help Desk";
        $data['main'] = "opd/pengaduan/detail";
        $this->load->view('opd/template/index',$data);
    }

    public function update_selesai($id)
    {
        $data = array("status_id"=>"3");
        $this->db->where("pengaduan_id",$id);
        $this->db->update("pengaduan",$data);
        redirect(base_url('opd/Pengaduan/selesai'));
    }


}