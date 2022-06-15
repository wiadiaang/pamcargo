<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MX_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('auth/M_auth');
    }

    public function index()
    {
        $data['title'] = "PAM Cargo";
        $data['main'] = "";
    	$this->load->view('login',$data);
    }
    public function register()
    {
        $data['title'] = "PAM Cargo";
        $data['main'] = "";
    	$this->load->view('register',$data);
    }
    public function signup(){
        $country = $this->input->post('country');
        $user_admin = $this->db->query("SELECT user_id,admin_id,email,firstname,name_pt FROM user where country = '$country' and level = 'admin' and status_user = 'active' ")->row();
       
        $data['name_pt'] = $this->input->post('name_pt');
        $data['country'] = $this->input->post('country');
        $data['email'] = $this->input->post('email');
        $data['address'] = $this->input->post('address');
        $data['phone_office'] = $this->input->post('phone_office');
        $data['phone_pic'] = $this->input->post('phone_pic');
        $data['name_pic'] = $this->input->post('name_pic');
        $data['created_dated'] = date('Y-m-d H:i:s');
        $data['level'] = 'shiper';
        $data['status_user'] = 'nonactive';
        $this->db->insert('user',$data);
       
        $html = "<img src='https://express.rembon.co.id/static/logo.png' height='50' width='200' style='float:left;' >
        <h1 style='float:left;'></h1>
        <br> <br> <br> <br> 
        <hr>
        <h4><b>Hi, ".$user_admin->name_pt."</b></h4>
        <h4>You got new user shipper from ".$this->input->post('email').", Approve and give password user now </h4>
        <table border='1px'>
        <tr>
            <td>Name</td>
            <td>".$this->input->post('name_pt')."</td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td>".$this->input->post('phone_pic')."</td>
        </tr>
            <tr>
            <td>Address</td>
            <td>".$this->input->post('address')."</td>
        </tr>
        </table>";
        $config['mailtype'] = 'html';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user'] = 'aulhakim998@gmail.com';
        $config['smtp_pass'] = 'aulgmail99delapan';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n"; 
        $config['validation'] = TRUE;
        $this->load->library('email',$config);  
        $this->email->initialize($config);
        $this->email->from('aulhakim998@gmail.com','Rembon Express');
        $this->email->to($user_admin->email);
        $this->email->subject("You got new shipper");
        $this->email->message($html);
        $this->email->send();
        $this->email->print_debugger();
 
        $notif = array(
            'title' => 'New user shipper', 
            'text' => "You got new user shipper from ".$this->input->post('name_pt'), 
            'user_id' => $user_admin->user_id, 
            'url' => 'https://express.rembon.co.id/admin/User_shipper',
            'status' => '0', 
            'created_dated' => date('Y-m-d H:i:s')
        );
        $this->db->insert('f_notif',$notif);
        echo"success";
    }

    public function signin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $check = $this->M_auth->login($email,$password);
        if($check->num_rows() > 0)
        {
            $row = $check->row();
            if($row->status_user == 'nonactive'){
                echo "active";
            }else{

                $row_data = array(
                    'user_id' => $row->user_id,
                    'email' => $row->email,
                    'name' => $row->firstname." ".$row->lastname,
                    'phone' => $row->phone,
                    'phone_office' => $row->phone_office,
                    'name_pt' => $row->name_pt,
                    'address'=> $row->address,
                    'postal_code'=> $row->postal_code,
                    'signup_date'=> $row->signup_date,    
                    'admin_id'=> $row->admin_id,    
                    'country'=> $row->country,    
                    'contact1'=> $row->contact1,    
                    'contact2'=> $row->contact2,    
                    'city'=> $row->city,    
                    'type'=> $row->level
                );
                $this->session->set_userdata($row_data);
                echo $row->level;

            }
        }else{
           echo'wrong';
        }
    }

    public function logout()
    {
    	$this->session->sess_destroy();
    	
        redirect(base_url('auth'));  
    }

}