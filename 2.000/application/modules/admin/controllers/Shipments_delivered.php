<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipments_delivered extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('shipments_delivered_model');
        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

    }

    public function index()
    {
        $data['get_shipments'] = $this->shipments_delivered_model->get_all();;
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/shipments/index";
        $this->load->view('admin/template/index',$data);
    }
    
    public function ajax_list()
    {
        $list = $this->shipments_delivered_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $shipments) {

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $shipments->ref_stt;
            $row[] = $shipments->date_stt; 
            $row[] = $shipments->type_stt; 
            $row[] = $shipments->from_code_main_city; 
            $row[] = $shipments->to_code_main_city; 
            $row[] = $shipments->shipper_name; 
            $row[] = $shipments->shipper_phone; 
            $row[] = $shipments->status; 
            $row[] = '<a href="'.base_url().'admin/shipments/read/'. $shipments->ref_stt.'"  class="btn btn-info">Read</a>
            <a href="'. base_url().'admin/shipments/update/'.$shipments->ref_stt.'" class="btn btn-success">Edit</a>
            <a id="'.$shipments->ref_stt.'" onclick="hapus(this.id)" class="btn btn-danger">Delete</a>';
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->shipments_delivered_model->count_all(),
                        "recordsFiltered" => $this->shipments_delivered_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    

}