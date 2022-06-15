<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();

        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

   
    }

    public function daerah()
    {   
            $this->db->order_by("opd_id","DESC");
         $data['daerah'] = $this->db->get('opd')->result();
         $data['title'] = "Help Desk";
         $data['main'] = "admin/master/daerah";
    	 $this->load->view('admin/template/index',$data);
    }

    public function create_daerah()
    {
        $data = array(
            "action"=>base_url()."admin/Master/insert_daerah",
            "nama_opd"=>set_value("nama_opd"),
            "alias"=>set_value("alias"),
            "page"=>'CREATE Perangkat Daerah'
        );

        $data['title'] = "Starstudents";
        $data['main'] = "admin/master/daerah_form";
        $this->load->view('admin/template/index',$data);
    }

    public function insert_daerah()
    {
        $data = array(
            "nama_opd"=>$this->input->post("nama_opd"),
            "alias"=>$this->input->post("alias"),
        );

        $this->db->insert("opd",$data);
        redirect(base_url('admin/Master/daerah'));
    }

    public function edit_daerah($id)
    {
        $row = $this->db->get_where("opd",array("opd_id"=>$id))->row();
        $data = array(
            "action"=>base_url()."admin/Master/update_daerah/".$id,
            "nama_opd"=>set_value("nama_opd",$row->nama_opd),
            "alias"=>set_value("alias",$row->alias),
            "page"=>'Edit Perangkat Daerah'
        );

        $data['title'] = "Starstudents";
        $data['main'] = "admin/master/daerah_form";
        $this->load->view('admin/template/index',$data);
    }

    public function update_daerah($id)
    {
        $data = array(
            "nama_opd"=>$this->input->post("nama_opd"),
            "alias"=>$this->input->post("alias"),
        );
        $this->db->where("opd_id",$id);
        $this->db->update("opd",$data);
        redirect(base_url('admin/Master/daerah'));
    }
    
    public function delete_daerah($id)
    {
        $this->db->where("opd_id",$id);
        $this->db->delete("opd");
        redirect(base_url('admin/Master/daerah'));
    }

    public function level()
    {   
        $this->db->order_by("level_id","DESC");
         $data['level'] = $this->db->get('level')->result();
         $data['title'] = "Help Desk";
         $data['main'] = "admin/master/level";
    	 $this->load->view('admin/template/index',$data);
    }

    public function create_level()
    {
        $data = array(
            "action"=>base_url()."admin/Master/insert_level",
            "level"=>set_value("level"),
            "keterangan"=>set_value("keterangan"),
            "page"=>'CREATE Level'
        );

        $data['title'] = "Starstudents";
        $data['main'] = "admin/master/level_form";
        $this->load->view('admin/template/index',$data);
    }

    public function insert_level()
    {
        $data = array(
            "level"=>$this->input->post("level"),
            "keterangan"=>$this->input->post("keterangan"),
        );

        $this->db->insert("level",$data);
        redirect(base_url('admin/Master/level'));
    }

    public function edit_level($id)
    {
        $row = $this->db->get_where("level",array("level_id"=>$id))->row();
        $data = array(
            "action"=>base_url()."admin/Master/update_level/".$id,
            "level"=>set_value("level",$row->level),
            "keterangan"=>set_value("keterangan",$row->keterangan),
            "page"=>'Edit Level'
        );

        $data['title'] = "Starstudents";
        $data['main'] = "admin/master/level_form";
        $this->load->view('admin/template/index',$data);
    }

    public function update_level($id)
    {
        $data = array(
            "level"=>$this->input->post("level"),
            "keterangan"=>$this->input->post("keterangan"),
        );
        $this->db->where("level_id",$id);
        $this->db->update("level",$data);
        redirect(base_url('admin/Master/level'));
    }
    
    public function delete_level($id)
    {
        $this->db->where("level_id",$id);
        $this->db->delete("level");
        redirect(base_url('admin/Master/level'));
    }

    public function kategori()
    {   
        $this->db->order_by("kategori_id","DESC");
         $data['kategori'] = $this->db->get('kategori')->result();
         $data['title'] = "Help Desk";
         $data['main'] = "admin/master/kategori";
    	 $this->load->view('admin/template/index',$data);
    }

    public function create_kategori()
    {
        $data = array(
            "action"=>base_url()."admin/Master/insert_kategori",
            "kategori"=>set_value("kategori"),
            "page"=>'CREATE Level'
        );

        $data['title'] = "Starstudents";
        $data['main'] = "admin/master/kategori_form";
        $this->load->view('admin/template/index',$data);
    }

    public function insert_kategori()
    {
        $data = array(
            "kategori"=>$this->input->post("kategori"),
        );

        $this->db->insert("kategori",$data);
        redirect(base_url('admin/Master/kategori'));
    }

    public function edit_kategori($id)
    {
        $row = $this->db->get_where("kategori",array("kategori_id"=>$id))->row();
        $data = array(
            "action"=>base_url()."admin/Master/update_kategori/".$id,
            "kategori"=>set_value("kategori",$row->kategori),
            "page"=>'Edit kategori'
        );

        $data['title'] = "Starstudents";
        $data['main'] = "admin/master/kategori_form";
        $this->load->view('admin/template/index',$data);
    }

    public function update_kategori($id)
    {
        $data = array(
            "kategori"=>$this->input->post("kategori"),
        );
        $this->db->where("kategori_id",$id);
        $this->db->update("kategori",$data);
        redirect(base_url('admin/Master/kategori'));
    }
    
    public function delete_kategori($id)
    {
        $this->db->where("kategori_id",$id);
        $this->db->delete("kategori");
        redirect(base_url('admin/Master/level'));
    }

    public function status()
    {   
        $this->db->order_by("status_id","DESC");
         $data['status'] = $this->db->get('status')->result();
         $data['title'] = "Help Desk";
         $data['main'] = "admin/master/status";
    	 $this->load->view('admin/template/index',$data);
    }

    public function create_status()
    {
        $data = array(
            "action"=>base_url()."admin/Master/insert_status",
            "status"=>set_value("status"),
            "page"=>'CREATE Level'
        );

        $data['title'] = "Starstudents";
        $data['main'] = "admin/master/status_form";
        $this->load->view('admin/template/index',$data);
    }

    public function insert_status()
    {
        $data = array(
            "status"=>$this->input->post("status"),
        );

        $this->db->insert("status",$data);
        redirect(base_url('admin/Master/status'));
    }

    public function edit_status($id)
    {
        $row = $this->db->get_where("status",array("status_id"=>$id))->row();
        $data = array(
            "action"=>base_url()."admin/Master/update_status/".$id,
            "status"=>set_value("status",$row->kategori),
            "page"=>'Edit status'
        );

        $data['title'] = "Starstudents";
        $data['main'] = "admin/master/status_form";
        $this->load->view('admin/template/index',$data);
    }

    public function update_status($id)
    {
        $data = array(
            "status"=>$this->input->post("status"),
        );
        $this->db->where("status_id",$id);
        $this->db->update("status",$data);
        redirect(base_url('admin/Master/status'));
    }
    
    public function delete_status($id)
    {
        $this->db->where("status_id",$id);
        $this->db->delete("status");
        redirect(base_url('admin/Master/status'));
    }
}