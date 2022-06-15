<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notify_party extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('notify_party_model');
        if($this->session->userdata('type') != 'superadmin'){
             redirect(base_url('admin/dashboard'));
        }
   
    }

    public function index()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/notify_party/index";
        $this->load->view('admin/template/index',$data);
    }

    public function ajax_list()
    {
        $list = $this->notify_party_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $key) {
            $no++;
            $row = array();
            $row[] = '<a href="javascript:void(0)" onclick="edit_data('.$key->notify_party_id.')" class="btn btn-xs btn-success">Edit</a>
            <a onclick="hapus('.$key->notify_party_id.')" class="btn btn-xs btn-danger">Delete</a>'; 
            $row[] = $no;
            $row[] = $key->name;
            $row[] = $key->street;
            $row[] = $key->city; 
            $row[] = $key->zip_code; 
            $row[] = $key->country; 
            $row[] = $key->email; 
            $row[] = $key->contact1; 
            $row[] = $key->contact2; 
            $row[] = $key->phone; 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->notify_party_model->count_all(),
                        "recordsFiltered" => $this->notify_party_model->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }    
    

    public function save_data() 
    {
        $id = $this->input->post('notify_party_id');
        $user_id = $this->session->userdata('user_id');
        if($id == ""){

                $data['created_dated'] = date('Y-m-d H:i:s');
                $data['name'] = $this->input->post('name');
                $data['street'] = $this->input->post('street');
                $data['city'] = $this->input->post('city');
                $data['zip_code'] = $this->input->post('zip_code');
                $data['country'] = $this->input->post('country');
                $data['email'] = $this->input->post('email');
                $data['contact1'] = $this->input->post('contact1');
                $data['contact2'] = $this->input->post('contact2');
                $data['phone'] = $this->input->post('phone');
                $data['create_by'] = $user_id;
                $this->db->insert('f_notify_party',$data);
                echo "success";

        }else{
                $data['name'] = $this->input->post('name');
                $data['street'] = $this->input->post('street');
                $data['city'] = $this->input->post('city');
                $data['zip_code'] = $this->input->post('zip_code');
                $data['country'] = $this->input->post('country');
                $data['email'] = $this->input->post('email');
                $data['contact1'] = $this->input->post('contact1');
                $data['contact2'] = $this->input->post('contact2');
                $data['phone'] = $this->input->post('phone');

                $this->db->where('notify_party_id',$id);
                $this->db->update('f_notify_party',$data);
                echo "success";

        }
       
    }

    public function get_data($id){
        $a = $this->db->query("SELECT * FROM f_notify_party where notify_party_id = '$id' ")->row();
        echo json_encode($a);
    }
 
    public function delete() 
    {
        $id = $this->input->post('id');
        $this->notify_party_model->delete($id);
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