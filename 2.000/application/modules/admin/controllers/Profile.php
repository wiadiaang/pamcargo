<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MX_Controller {
    
    function __construct()
    {
        parent::__construct();
        // if($this->session->userdata('type') == ''){
        //      redirect(base_url());
        // }
    }

    public function index(){
        $user_id = $this->session->userdata('user_id');
        $data['user'] = $this->db->query("SELECT * FROM user where user_id = $user_id ")->row();
        $data['title'] = "Profile";
        $data['main'] = "admin/profil/index";
        $this->load->view('admin/template/index',$data);
    }

    public function updateProfile(){
            $user_id = $this->session->userdata('user_id');
            $data['name_pt'] = $this->input->post('name_pt');
            $data['email'] = $this->input->post('email');
            $data['phone_office'] = $this->input->post('phone_office');
            $this->db->where('user_id',$user_id);
            $this->db->update('user',$data);
        
     }

    public function update_password(){
       $user_id = $this->session->userdata('user_id');
       $p = $_POST['password'];
       $p1 = md5($p);
       $p2 = $_POST['newPassword'];
       $p3 = $_POST['retypePassword'];
       $u = $this->db->query("SELECT password FROM user where user_id = $user_id ")->row();
       if($u->password != $p1){
        echo "1";
       }else if($p2 != $p3){
        echo "2";
       }else{
           $data['password'] = md5($p3);
           $this->db->where('user_id',$user_id);
           $this->db->update('user',$data);
       }
    }

    public function update_image(){
        $config['upload_path']          = './assets/image/users';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->upload->initialize($config);
        $this->load->library('upload');
        if (!$this->upload->do_upload())
        {
            $image = 'default.png';
            echo "1";
        }
        else
        {
            $image = $this->upload->file_name;
            echo $image;
        }
        $user_id = $_POST['user_id'];
        $data['user_image'] = $image;
        $this->db->where('user_id',$user_id);
        $this->db->update('user',$data);
    }

}