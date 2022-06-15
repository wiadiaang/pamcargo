<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Flight extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('flight_model');
        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

    }

    public function index()
    {
        $data['get_flight'] = $this->flight_model->get_all();;
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/flight/index";
        $this->load->view('admin/template/index',$data);
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'form' => 'create',
            'button_back' => base_url('admin/flight'),
            'action' => base_url('admin/flight/create_action'),
    	    'code_flight' => set_value('code_flight'),
    	    'name' => set_value('name'),
    	    'etd' => set_value('etd'),
    	    'eta' => set_value('eta'),
    	    'time' => set_value('time'),
    	    'time2' => set_value('time2'),
    	    'from' => $this->db->query("select code_main_city, name from main_city")->result(),
    	    'from_code_main_city' => set_value('from_code_main_city'),
    	    'to_code_main_city' => set_value('to_code_main_city'),
            'page' => "Create main city",
            'title' => "Rembon Express",
            'main' => "admin/flight/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function create_action() 
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $check_code_flight = $this->db->query("select code_flight from flight where code_flight='" . $this->input->post('code_flight',TRUE) . "'")->num_rows();
            if($check_code_flight < 1){
                $data = array(
                    'code_flight' => $this->input->post('code_flight',TRUE),
                    'name' => $this->input->post('name',TRUE),
                    'etd' => $this->input->post('etd',TRUE).' '.$this->input->post('time',TRUE).':00',
                    'eta' => $this->input->post('eta',TRUE).' '.$this->input->post('time2',TRUE).':00',
                    'from_code_main_city' => $this->input->post('from_code_main_city',TRUE),
                    'to_code_main_city' => $this->input->post('to_code_main_city',TRUE),
                );
                $save = $this->flight_model->insert($data);
                // var_dump($save);die();
                if($save){
                    $this->session->set_flashdata('success', $this->lang->line('insert_success'));
                    redirect(base_url('admin/flight'));
                }else{
                    $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                    redirect(base_url('admin/flight/create'));
                }
            }else{
                $this->session->set_flashdata('error', 'Code flight '. $this->input->post('code_flight',TRUE) .' Has Been Registered by Another data');
                redirect(base_url('admin/flight/create'));
            }
        }
    }

    public function update($id) 
    {
        $get_flight = $this->flight_model->get_by_id($id);
        $datetimed = $get_flight->etd;
        $dtd = strtotime($datetimed);

        $datetimea = $get_flight->eta;
        $dta = strtotime($datetimea);
        $data = array(
            'button' => 'Create',
            'form' => 'update',
            'button_back' => base_url('admin/flight'),
            'action' => base_url('admin/flight/update_action'),
    	    'code_flight' => set_value('code_flight', $get_flight->code_flight),
    	    'name' => set_value('name', $get_flight->name),
    	    'etd' => set_value('etd', date("Y-m-d", $dtd)),
    	    'time' => set_value('etd', date("H:i:s", $dtd)),
    	    'eta' => set_value('eta', date("Y-m-d", $dta)),
    	    'time2' => set_value('etd', date("H:i:s", $dta)),
    	    'from' => $this->db->query("select code_main_city, name from main_city")->result(),
    	    'from_code_main_city' => set_value('from_code_main_city', $get_flight->from_code_main_city),
    	    'to_code_main_city' => set_value('to_code_main_city', $get_flight->to_code_main_city),
            'page' => "Update main city",
            'title' => "Rembon Express",
            'main' => "admin/flight/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function update_action() 
    {
        $id = $this->input->post('code_flight_old',TRUE);
        $code_flightold = $this->input->post('code_flight_old',TRUE);
        $code_flight = $this->input->post('code_flight',TRUE);
        if($code_flightold == $code_flight){
            $data = array(
                'code_flight' => $this->input->post('code_flight',TRUE),
                'name' => $this->input->post('name',TRUE),
                'etd' => $this->input->post('etd',TRUE).' '.$this->input->post('time',TRUE).':00',
                'eta' => $this->input->post('eta',TRUE).' '.$this->input->post('time2',TRUE).':00',
                'from_code_main_city' => $this->input->post('from_code_main_city',TRUE),
                'to_code_main_city' => $this->input->post('to_code_main_city',TRUE),
            );
            // var_dump($data);die();
            $update = $this->flight_model->update($id, $data);
            if($update){
                $this->session->set_flashdata('success', $this->lang->line('update_success'));
                redirect(base_url('admin/flight'));
            }else{
                $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                redirect(base_url('admin/flight/update/'.$id.''));
            }
        }else{
            $check_code_flight = $this->db->query("select code_flight from flight where code_flight='" . $this->input->post('code_flight',TRUE) . "'")->num_rows();
            if($check_code_flight < 1){
                $data = array(
                    'code_flight' => $this->input->post('code_flight',TRUE),
                    'name' => $this->input->post('name',TRUE),
                    'etd' => $this->input->post('etd',TRUE).' '.$this->input->post('time',TRUE).':00',
                    'eta' => $this->input->post('eta',TRUE).' '.$this->input->post('time2',TRUE).':00',
                    'from_code_main_city' => $this->input->post('from_code_main_city',TRUE),
                    'to_code_main_city' => $this->input->post('to_code_main_city',TRUE),
                );
                // var_dump($data);die();
                $update = $this->flight_model->update($id, $data);
                if($update){
                    $this->session->set_flashdata('success', $this->lang->line('update_success'));
                    redirect(base_url('admin/flight'));
                }else{
                    $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                    redirect(base_url('admin/flight/update/'.$id.''));
                }    
            }else{
                $this->session->set_flashdata('error', 'Code flight '. $this->input->post('code_flight',TRUE) .' Has Been Registered by Another data');
                redirect(base_url('admin/flight/update/'.$id.''));
            }
        }
    }

    public function read($id) 
    {
        $get_flight = $this->flight_model->get_by_id($id);
        $datetimed = $get_flight->etd;
        $dtd = strtotime($datetimed);

        $datetimea = $get_flight->eta;
        $dta = strtotime($datetimea);

        $data = array(
            // 'button' => 'Create',
            'button_back' => base_url('admin/flight'),
            'form' => 'read',
            'action' => base_url('admin/flight/update_action'),
    	    'code_flight' => set_value('code_flight', $get_flight->code_flight),
    	    'name' => set_value('name', $get_flight->name),
    	    'etd' => set_value('etd', date("Y-m-d", $dtd)),
    	    'time' => set_value('etd', date("H:i:s", $dtd)),
    	    'eta' => set_value('eta', date("Y-m-d", $dta)),
    	    'time2' => set_value('etd', date("H:i:s", $dta)),
    	    'from' => $this->db->query("select code_main_city, name from main_city")->result(),
    	    'from_code_main_city' => set_value('from_code_main_city', $get_flight->from_code_main_city),
    	    'to_code_main_city' => set_value('to_code_main_city', $get_flight->to_code_main_city),
            'page' => "Detail main city",
            'title' => "Rembon Express",
            'main' => "admin/flight/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }

    public function delete() 
    {
        $id =$this->input->post('id',TRUE);
        $row = $this->flight_model->get_by_id($id);

        if ($row) {
            $this->flight_model->delete($id);
            $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            redirect(base_url('admin/flight'));
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            redirect(base_url('admin/flight'));
        }
    }

    public function _rules() 
    {	
        $this->form_validation->set_rules('code_flight', 'Code flight', 'trim|required');
        $this->form_validation->set_rules('name', 'Name flight 1', 'trim|required');
	    $this->form_validation->set_rules('etd', 'ETD', 'trim|required');
	    $this->form_validation->set_rules('eta', 'ETA', 'trim|required');
	    $this->form_validation->set_rules('from_code_main_city', 'From', 'trim|required');
	    $this->form_validation->set_rules('to_code_main_city', 'To', 'trim|required');
	    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function ajax_list()
    {
        $list = $this->flight_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $flight) {

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $flight->code_flight;
            $row[] = $flight->name; 
            $row[] = $flight->etd; 
            $row[] = $flight->eta; 
            $row[] = $flight->from_code_main_city; 
            $row[] = $flight->to_code_main_city; 
            $row[] = '<a href="'.base_url().'admin/flight/read/'. $flight->code_flight.'"  class="btn btn-info">Read</a>
            <a href="'. base_url().'admin/flight/update/'.$flight->code_flight.'" class="btn btn-success">Edit</a>
            <a id="'.$flight->code_flight.'" onclick="hapus(this.id)" class="btn btn-danger">Delete</a>';
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->flight_model->count_all(),
                        "recordsFiltered" => $this->flight_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    

}