<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Village extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('village_model');
        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

    }

    public function index()
    {
        $data['get_village'] = $this->village_model->get_all();;
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/village/index";
        $this->load->view('admin/template/index',$data);
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'form' => 'create',
            'button_back' => base_url('admin/village'),
            'action' => base_url('admin/village/create_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'village_id' => set_value('village_id'),
    	    'province_id' => set_value('province_id'),
    	    'city_id' => set_value('city_id'),
    	    'name' => set_value('name'),
    	    'postal_code' => set_value('postal_code'),
            'page' => "Create village",
            'title' => "Rembon Express",
            'main' => "admin/village/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function create_action() 
    {

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $check_postal_code = $this->db->query("select postal_code from village where postal_code='" . $this->input->post('postal_code',TRUE) . "'")->num_rows();
            if($check_postal_code < 1){
                $data = array(
                    'district_id' => $this->input->post('kec',TRUE),
                    'name' => $this->input->post('name',TRUE),
                    'postal_code' => $this->input->post('postal_code',TRUE),
                );
                $save = $this->village_model->insert($data);
                // var_dump($save);die();
                if($save){
                    $this->session->set_flashdata('success', $this->lang->line('insert_success'));
                    redirect(base_url('admin/village'));    
                }else{
                    $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                    redirect(base_url('admin/village/create'));    
                }        
            }else{
                $this->session->set_flashdata('error', 'Postal Code '. $this->input->post('postal_code',TRUE) .' Has Been Registered by Another data');
                redirect(base_url('admin/village/create'));        
            }
        }
    }

    public function update($id) 
    {
        $get_village = $this->village_model->get_by_id($id);
        $get_province_id = $this->db->query("select province_id from city where city_id = '" . $get_village->district_id . "'")->row();
        $get_city_id = $this->db->query("select city_id from district where district_id = '" . $get_village->district_id . "'")->row();
        // var_dump($get_province_id->province_id);die();
        $data = array(
            'button' => 'Create',
            'form' => 'update',
            'button_back' => base_url('admin/village'),
            'action' => base_url('admin/village/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city where province_id = '" . $get_province_id->province_id . "'")->result(),
    	    'province_id' => set_value('province_id', $get_province_id->province_id),
    	    'city_id' => set_value('city_id', $get_city_id->city_id),
    	    'district_id' => set_value('city_id', $get_village->district_id),
    	    'village_id' => set_value('village_id', $get_village->village_id),
    	    'name' => set_value('name', $get_village->name),
    	    'postal_code' => set_value('postal_code', $get_village->postal_code),
            'page' => "Update village",
            'title' => "Rembon Express",
            'main' => "admin/village/form",
        ); 
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function update_action() 
    {
        $id = $this->input->post('village_id',TRUE);
        $postal_codeold = $this->input->post('postal_code_old',TRUE);
        $postal_code = $this->input->post('postal_code',TRUE);
        if($postal_codeold == $postal_code){
            $data = array(
                'district_id' => $this->input->post('kec',TRUE),
                'name' => $this->input->post('name',TRUE),
                'postal_code' => $this->input->post('postal_code',TRUE),
            );
            // var_dump($data);die();
            $update = $this->village_model->update($id, $data);
            if($update){
                $this->session->set_flashdata('success', $this->lang->line('update_success'));
                redirect(base_url('admin/village'));    
            }else{
                $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                redirect(base_url('admin/village/update/'.$id.''));    
            }                   
        }else{
            $check_postal_code = $this->db->query("select postal_code from village where postal_code='" . $this->input->post('postal_code',TRUE) . "'")->num_rows();
            if($check_postal_code < 1){
                $data = array(
                    'district_id' => $this->input->post('kec',TRUE),
                    'name' => $this->input->post('name',TRUE),
                    'postal_code' => $this->input->post('postal_code',TRUE),
                );
                // var_dump($data);die();
                $update = $this->village_model->update($id, $data);
                if($update){
                    $this->session->set_flashdata('success', $this->lang->line('update_success'));
                    redirect(base_url('admin/village'));    
                }else{
                    $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                    redirect(base_url('admin/village/update/'.$id.''));    
                }                       
            }else{
                $this->session->set_flashdata('error', 'Postal Code '. $this->input->post('postal_code',TRUE) .' Has Been Registered by Another data');
                redirect(base_url('admin/village/update/'.$id.''));    
            }
        }

    }

    public function read($id) 
    {
        $get_village = $this->village_model->get_by_id($id);
        $data = array(
            // 'button' => 'Create',
            'button_back' => base_url('admin/village'),
            'form' => 'read',
            'action' => base_url('admin/village/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district_id' => set_value('district_id', $get_village->district_id),
    	    'village_id' => set_value('village_id', $get_village->village_id),
    	    'name' => set_value('name', $get_village->name),
    	    'postal_code' => set_value('postal_code', $get_village->postal_code),
            'page' => "Detail village",
            'title' => "Rembon Express",
            'main' => "admin/village/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }

    public function delete() 
    {
        $id =$this->input->post('id',TRUE);
        $row = $this->village_model->get_by_id($id);

        if ($row) {
            $this->village_model->delete($id);
            $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            redirect(base_url('admin/village'));
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            redirect(base_url('admin/village'));
        }
    }
    
    public function _rules() 
    {	
        $this->form_validation->set_rules('kec', 'District', 'trim|required');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('postal_code', 'Postal Code', 'trim|required');
	    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function ajax_list()
    {
        $list = $this->village_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $village) {
            $district = $this->db->query("select name from district where district_id = '" . $village->district_id . "'")->row();
            if($district != NULL){
                $districtname = $district->name;
            }else{
                $districtname = '-';
            }

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $village->name;
            $row[] = $districtname; 
            $row[] = $village->postal_code; 
            $row[] = '<a href="'.base_url().'admin/village/read/'. $village->village_id.'"  class="btn btn-info">Read</a>
            <a href="'. base_url().'admin/village/update/'.$village->village_id.'" class="btn btn-success">Edit</a>
            <a onclick="hapus('.$village->village_id.')" class="btn btn-danger">Delete</a>'; 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->village_model->count_all(),
                        "recordsFiltered" => $this->village_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    

}