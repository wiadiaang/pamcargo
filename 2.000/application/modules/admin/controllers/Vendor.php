<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendor extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('Vendor_model');
        if($this->session->userdata('type') != 'superadmin'){
             redirect(base_url('admin/dashboard'));
        }
   
    }

    public function index()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/vendor/index";
        $this->load->view('admin/template/index',$data);
    }

    public function ajax_list()
    {
        $list = $this->Vendor_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $key) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $key->name;
            $row[] = $key->gender;
            $row[] = $key->contact; 
            $row[] = '<a href="javascript:void(0)" onclick="edit_data('.$key->vendor_id.')" class="btn btn-xs btn-success">Edit</a>
            <a onclick="hapus('.$key->vendor_id.')" class="btn btn-xs btn-danger">Delete</a>'; 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Vendor_model->count_all(),
                        "recordsFiltered" => $this->Vendor_model->count_filtered(),
                        "data" => $data,
                );
        echo json_encode($output);
    }    
    

    public function save_data() 
    {
        $id = $this->input->post('vendor_id');
        $user_id = $this->session->userdata('user_id');
        if($id == ""){
            
                $data['name'] = $this->input->post('name');
                $data['gender'] = $this->input->post('gender');
                $data['contact'] = $this->input->post('contact');
                $data['created_date'] = date('Y-m-d H:i:s');
                $data['create_by'] = $user_id;
                $this->db->insert('f_vendor',$data);
                echo "success";

        }else{
                $data['name'] = $this->input->post('name');
                $data['gender'] = $this->input->post('gender');
                $data['contact'] = $this->input->post('contact');
                $this->db->where('vendor_id',$id);
                $this->db->update('f_vendor',$data);
                echo "success";

        }
       
    }

    public function get_data($id){
        $a = $this->db->query("SELECT * FROM f_vendor where vendor_id = '$id' ")->row();
        echo json_encode($a);
    }
 
    public function delete() 
    {
        $id = $this->input->post('id');
        $this->Vendor_model->delete($id);
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