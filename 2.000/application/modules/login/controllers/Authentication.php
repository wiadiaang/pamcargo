<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication extends MX_Controller {
	
	
	function __construct()
    {

        parent::__construct();
      
        $this->load->model('login/Login_model'); //load model
        $this->load->library('form_validation'); // load library form validation!
    }

    public function index($param1 = '')
    { 
        $data['title'] = "Rembon SMS";
        $this->load->view('login/view_login',$data);
    }

    public function forgot_password()
	{
		$data['title'] = "Rembon SMS";
		$this->load->view('login/forgot_password', $data);
    }
    
    public function login()
    {
        // get from input pos

    	$username  = $this->input->post('username');
		$password  = md5($this->input->post('password'));

		// echo $username;
		// echo $this->input->post('password');
		// echo $password;
		// die();

		$cek_login = $this->Login_model->get_Login($username,$password);
		if($cek_login->num_rows() == 1)
		{
			$row = $cek_login->row();
			if($row->level_id == "1"){
				$pass_auth = $row->password;

				/*var_dump($pass_auth);*/

				if($password == $pass_auth)
				{
					$row_data = array(
						'user_id' => $row->user_id,
						'username' => $row->username,
						'nama' => $row->nama,
						'opd_id' => $row->opd_id,
						'status_id'=> $row->status_id,
						'type'=>'admin'
					);
					$this->session->set_userdata($row_data);
					redirect('admin/Dashboard');
				}
				else
				{

    				$this->load->view('login/view_login',$data);
				}
			}else if($row->level_id == "2"){
				$pass_auth = $row->password;

				/*var_dump($pass_auth);*/

				if($password == $pass_auth)
				{
					$row_data = array(
						'user_id' => $row->user_id,
						'username' => $row->username,
						'nama' => $row->nama,
						'opd_id' => $row->opd_id,
						'status_id'=> $row->status_id,
						'kategori_id'=> $row->kategori_id,
						'type'=>'operator'
					);
					$this->session->set_userdata($row_data);
					redirect('operator/Dashboard');
				}
				else
				{

    				$this->load->view('login/view_login',$data);
				}
			}else if($row->level_id == "3"){
				$pass_auth = $row->password;

				/*var_dump($pass_auth);*/

				if($password == $pass_auth)
				{
					$row_data = array(
						'user_id' => $row->user_id,
						'username' => $row->username,
						'nama' => $row->nama,
						'opd_id' => $row->opd_id,
						'status_id'=> $row->status_id,
						'type'=>'opd'
					);
					$this->session->set_userdata($row_data);
					redirect('opd/Dashboard');
				}
				else
				{

    				$this->load->view('login/view_login',$data);
				}
			}
			
		}
		else
		{
			$this->session->set_flashdata('message', 'Your email or password is incorrect!');
    		redirect(base_url());  
		}
    }

    public function logout()
    {
    	$this->session->unset_userdata('user_id');  
    	$this->session->unset_userdata('name');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('type');      

        redirect(base_url());  
    }


}