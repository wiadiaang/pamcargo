<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Consignees extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('consignees_model');
        if($this->session->userdata('type') != 'superadmin'){
             redirect(base_url('admin/dashboard'));
        }
   
    }

    public function index()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/consignees/index";
        $this->load->view('admin/template/index',$data);
    }

    public function ajax_list()
    {
        $list = $this->consignees_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $key) {
            $no++;
            $row = array();
            $row[] = '<a href="javascript:void(0)" onclick="edit_data('.$key->user_id.')" class="btn btn-xs btn-success">Edit</a>
            <a onclick="hapus('.$key->user_id.')" class="btn btn-xs btn-danger">Delete</a>'; 
            $row[] = $no;
            $row[] = $key->name_pt;
            $row[] = $key->address;
            $row[] = $key->city; 
            $row[] = $key->postal_code; 
            $row[] = $key->country; 
            $row[] = $key->email; 
            $row[] = $key->contact1; 
            $row[] = $key->contact2; 
            $row[] = $key->phone_office; 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->consignees_model->count_all(),
                        "recordsFiltered" => $this->consignees_model->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }    
    

    public function save_data() 
    {
        $id = $this->input->post('user_id');
        $user_id = $this->session->userdata('user_id');
        if($id == ""){

                $data['created_dated'] = date('Y-m-d H:i:s');
                $data['name_pt'] = $this->input->post('name_pt');
                $data['address'] = $this->input->post('address');
                $data['city'] = $this->input->post('city');
                $data['postal_code'] = $this->input->post('postal_code');
                $data['country'] = $this->input->post('country');
                $data['email'] = $this->input->post('email');
                $data['contact1'] = $this->input->post('contact1');
                $data['contact2'] = $this->input->post('contact2');
                $data['phone_office'] = $this->input->post('phone');
                $data['password'] = md5($this->input->post('password'));
                $data['level'] = "consignee";
                $data['status_user'] = "active";
                $this->db->insert('user',$data);
                echo "success";

        }else{
                $data['name_pt'] = $this->input->post('name_pt');
                $data['address'] = $this->input->post('address');
                $data['city'] = $this->input->post('city');
                $data['postal_code'] = $this->input->post('postal_code');
                $data['country'] = $this->input->post('country');
                $data['email'] = $this->input->post('email');
                $data['contact1'] = $this->input->post('contact1');
                $data['contact2'] = $this->input->post('contact2');
                $data['phone_office'] = $this->input->post('phone');
                if($this->input->post('password') != ''){
                    $data['password'] = md5($this->input->post('password'));
                }
                

                $this->db->where('user_id',$id);
                $this->db->update('user',$data);
                echo "success";

        }
       
    }

    public function get_data($id){
        $a = $this->db->query("SELECT * FROM user where user_id = '$id' ")->row();
        echo json_encode($a);
    }
 
    public function delete() 
    {
        $id = $this->input->post('id');
        $this->consignees_model->delete($id);
    }
    public function get_country()
    {
        $negara = $this->db->query("SELECT country_code,country_name FROM apps_countries")->result();
        $data .= "<option value=''>Country</option>";
			foreach ($negara as $kk) {
			    $data .= "<option value='$kk->country_code'>$kk->country_name</option>";
			}
		echo $data;
    }
 

}