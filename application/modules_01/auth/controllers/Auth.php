<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

    public function __construct() 
		{
			parent::__construct();
             $this->load->model('m_login');
             $this->load->library('session');
		}

	public function index()
	{
		$this->load->view('auth');
    }

    public function login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data = $this->m_login->login($email, md5($password));
                if (!$data) {
                    $this->session->set_flashdata('salah2',
                        '
                            <script>
                            alert("email atau Password salah, silahkan login kembali !");
                            </script>
                        ');
                    redirect(site_url('auth'));
                }
                else {
                    $a = $this->m_login->select_user_email($email)->row();
                    $id = $a->user_id;
                    $email = $a->email;
                    $origin = $a->origin;
                    $type = $a->type;
                        $this->session->set_userdata('logged_in', "yes");
                        $this->session->set_userdata('user_id', $id);
                        $this->session->set_userdata('email', $email);
                        $this->session->set_userdata('origin', $origin);
                        $this->session->set_userdata('type', $type);
                        if($type == 'admin'){
                            redirect(site_url('admin/home'));
                        }else if($type == 'uploader'){
                            redirect(site_url('admin/vessel_name'));
                        }else if($type == 'origin'){
                            redirect(site_url('admin/delivery_package'));
                        }
                        else if($type == 'transit'){
                            redirect(site_url('admin/delivery_package'));
                        }
                        else if($type == 'consignee'){
                            redirect(site_url('admin/delivery_package'));
                        }
                        else if($type == 'superadmin'){
                            redirect(site_url('admin/delivery_package'));
                        }
                    
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('auth','refresh');
    }
	

    
}