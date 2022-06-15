<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();

        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

   
    }

    public function index()
    {   
         $this->db->order_by("user_id","DESC");
         $data['user'] = $this->db->get('user')->result();
         $data['title'] = "Help Desk";
         $data['main'] = "admin/user/index";
    	 $this->load->view('admin/template/index',$data);
    }

    public function create()
    {
        $level = $this->db->get('level')->result();
        $opd = $this->db->get('opd')->result();
        $status = $this->db->get('status')->result();
        $kategori = $this->db->get('kategori')->result();

        $data = array(
            "action"=>base_url()."admin/User/insert",
            "username"=>set_value("username"),
            "password"=>set_value("password"),
            "nama"=>set_value("nama"),
            "level_id"=>set_value("level_id","0"),
            "opd_id"=>set_value("opd_id","0"),
            "status_id"=>set_value("status_id","0"),
            "kategori_id"=>set_value("kategori_id","0"),
            "kategori"=>$kategori,
            "level"=>$level,
            "opd"=>$opd,
            "status"=>$status,
            "page"=>'CREATE User'
        );

        $data['title'] = "Starstudents";
        $data['main'] = "admin/user/form";
        $this->load->view('admin/template/index',$data);
    }

    public function insert()
    {
        $level_id = $this->input->post('level_id');
        if($level_id == "2")
        {
            $kategori_id = $this->input->post("kategori_id");
            $str = "";
            $var=explode(',',$kategori_id);
            $i = 1;
            foreach($var as $rows)
            {
                if($i == 1){
                    $str .= $rows;
                }else{
                    $str .= ",".$rows;
                }
                $i++;
            }
            $data = array(
                "username"=>$this->input->post("username"),
                "password"=>md5($this->input->post("password")),
                "nama"=>$this->input->post("nama"),
                "level_id"=>$this->input->post("level_id"),
                "opd_id"=>$this->input->post("opd_id"),
                "status_id"=>$this->input->post("status_id"),
                "kategori_id"=>$str,
            );
        }else{

            $data = array(
                "username"=>$this->input->post("username"),
                "password"=>md5($this->input->post("password")),
                "nama"=>$this->input->post("nama"),
                "level_id"=>$this->input->post("level_id"),
                "opd_id"=>$this->input->post("opd_id"),
                "status_id"=>$this->input->post("status_id"),
            );
        }
        

        $this->db->insert("user",$data);
       
        redirect(base_url('admin/User'));
    }

    public function edit($id)
    {
        $row = $this->db->get_where("user",array("user_id"=>$id))->row();
        $level = $this->db->get('level')->result();
        $opd = $this->db->get('opd')->result();
        $status = $this->db->get('status')->result();
        $kategori = $this->db->get('kategori')->result();
        
        $data = array(
            "action"=>base_url()."admin/User/update/".$id,
            "username"=>set_value("username",$row->username),
            "password"=>set_value("password"),
            "nama"=>set_value("nama",$row->nama),
            "level_id"=>set_value("level_id",$row->level_id),
            "opd_id"=>set_value("opd_id",$row->opd_id),
            "status_id"=>set_value("status_id",$row->status_id),
            "kategori_id"=>set_value("kategori_id",$row->kategori_id),
            "kategori"=>$kategori,
            "level"=>$level,
            "opd"=>$opd,
            "status"=>$status,
            "page"=>'Edit User'
        );

        $data['title'] = "Help Desk";
        $data['main'] = "admin/user/form";
        $this->load->view('admin/template/index',$data);
    }

    public function update($id)
    {

        $level_id = $this->input->post('level_id');
        if($level_id == "2")
        {
            $kategori_id = $this->input->post("kategori_id");
            $str = "";
            $var=explode(',',$nomor);
            $i = 1;
            foreach($var as $rows)
            {
                if($i == 1){
                    $str .= $rows;
                }else{
                    $str .= ",".$rows;
                }
                $i++;
            }
            if($this->input->post("password") == ""){
                $data = array(
                    "username"=>$this->input->post("username"),
                    "nama"=>$this->input->post("nama"),
                    "level_id"=>$this->input->post("level_id"),
                    "opd_id"=>$this->input->post("opd_id"),
                    "status_id"=>$this->input->post("status_id"),
                    "kategori_id"=>$str,
                );
            }else{
                $data = array(
                    "username"=>$this->input->post("username"),
                    "password"=>md5($this->input->post("password")),
                    "nama"=>$this->input->post("nama"),
                    "level_id"=>$this->input->post("level_id"),
                    "opd_id"=>$this->input->post("opd_id"),
                    "status_id"=>$this->input->post("status_id"),
                    "kategori_id"=>$str,
                );
            }
        }else{
            if($this->input->post("password") == ""){
                $data = array(
                    "username"=>$this->input->post("username"),
                    "nama"=>$this->input->post("nama"),
                    "level_id"=>$this->input->post("level_id"),
                    "opd_id"=>$this->input->post("opd_id"),
                    "status_id"=>$this->input->post("status_id"),
                );
            }else{
                $data = array(
                    "username"=>$this->input->post("username"),
                    "password"=>md5($this->input->post("password")),
                    "nama"=>$this->input->post("nama"),
                    "level_id"=>$this->input->post("level_id"),
                    "opd_id"=>$this->input->post("opd_id"),
                    "status_id"=>$this->input->post("status_id"),
                );
            }
        }
        
        $this->db->where("user_id",$id);
        $this->db->update("user",$data);
        redirect(base_url('admin/User'));
    }
    
    public function delete($id)
    {
        $this->db->where("user_id",$id);
        $this->db->delete("user");
        redirect(base_url('admin/User'));
    }


}