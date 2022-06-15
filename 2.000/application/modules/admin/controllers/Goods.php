<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Goods extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('goods_model');
        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

    }

    public function index()
    {
        $data['get_goods'] = $this->goods_model->get_all();;
        $data['title'] = "Rembon Express";
        $data['main'] = "admin/goods/index";
        $this->load->view('admin/template/index',$data);
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'form' => 'create',
            'button_back' => base_url('admin/goods'),
            'action' => base_url('admin/goods/create_action'),
    	    'code_goods' => set_value('code_goods'),
    	    'name_goods1' => set_value('name_goods1'),
    	    'name_goods2' => set_value('name_goods2'),
            'page' => "Create main city",
            'title' => "Rembon Express",
            'main' => "admin/goods/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function create_action() 
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $check_code_goods = $this->db->query("select code_goods from goods where code_goods='" . $this->input->post('code_goods',TRUE) . "'")->num_rows();
            if($check_code_goods < 1){
                $data = array(
                    'code_goods' => $this->input->post('code_goods',TRUE),
                    'name_goods1' => $this->input->post('name_goods1',TRUE),
                    'name_goods2' => $this->input->post('name_goods2',TRUE),
                );
                $save = $this->goods_model->insert($data);
                // var_dump($save);die();
                if($save){
                    $this->session->set_flashdata('success', $this->lang->line('insert_success'));
                    redirect(base_url('admin/goods'));
                }else{
                    $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                    redirect(base_url('admin/goods/create'));
                }
            }else{
                $this->session->set_flashdata('error', 'Code Goods '. $this->input->post('code_goods',TRUE) .' Has Been Registered by Another data');
                redirect(base_url('admin/goods/create'));
            }
        }
    }

    public function update($id) 
    {
        $get_goods = $this->goods_model->get_by_id($id);
        $data = array(
            'button' => 'Create',
            'form' => 'update',
            'button_back' => base_url('admin/goods'),
            'action' => base_url('admin/goods/update_action'),
    	    'code_goods' => set_value('code_goods', $get_goods->code_goods),
    	    'name_goods1' => set_value('name_goods1', $get_goods->name_goods1),
    	    'name_goods2' => set_value('name_goods2', $get_goods->name_goods2),
            'page' => "Update main city",
            'title' => "Rembon Express",
            'main' => "admin/goods/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function update_action() 
    {
        $id = $this->input->post('code_goods_old',TRUE);
        $code_goodsold = $this->input->post('code_goods_old',TRUE);
        $code_goods = $this->input->post('code_goods',TRUE);
        if($code_goodsold == $code_goods){
            $data = array(
                'code_goods' => $this->input->post('code_goods',TRUE),
                'name_goods1' => $this->input->post('name_goods1',TRUE),
                'name_goods2' => $this->input->post('name_goods2',TRUE),
            );
            // var_dump($data);die();
            $update = $this->goods_model->update($id, $data);
            if($update){
                $this->session->set_flashdata('success', $this->lang->line('update_success'));
                redirect(base_url('admin/goods'));
            }else{
                $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                redirect(base_url('admin/goods/update/'.$id.''));
            }
        }else{
            $check_code_goods = $this->db->query("select code_goods from goods where code_goods='" . $this->input->post('code_goods',TRUE) . "'")->num_rows();
            if($check_code_goods < 1){
                $data = array(
                    'code_goods' => $this->input->post('code_goods',TRUE),
                    'name_goods1' => $this->input->post('name_goods1',TRUE),
                    'name_goods2' => $this->input->post('name_goods2',TRUE),
                );
                // var_dump($data);die();
                $update = $this->goods_model->update($id, $data);
                if($update){
                    $this->session->set_flashdata('success', $this->lang->line('update_success'));
                    redirect(base_url('admin/goods'));
                }else{
                    $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                    redirect(base_url('admin/goods/update/'.$id.''));
                }    
            }else{
                $this->session->set_flashdata('error', 'Code Goods '. $this->input->post('code_goods',TRUE) .' Has Been Registered by Another data');
                redirect(base_url('admin/goods/update/'.$id.''));
            }
        }
    }

    public function read($id) 
    {
        $get_goods = $this->goods_model->get_by_id($id);
        $data = array(
            // 'button' => 'Create',
            'button_back' => base_url('admin/goods'),
            'form' => 'read',
            'action' => base_url('admin/goods/update_action'),
    	    'code_goods' => set_value('code_goods', $get_goods->code_goods),
    	    'name_goods1' => set_value('name_goods1', $get_goods->name_goods1),
    	    'name_goods2' => set_value('name_goods2', $get_goods->name_goods2),
            'page' => "Detail main city",
            'title' => "Rembon Express",
            'main' => "admin/goods/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }

    public function delete() 
    {
        $id =$this->input->post('id',TRUE);
        $row = $this->goods_model->get_by_id($id);

        if ($row) {
            $this->goods_model->delete($id);
            $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            redirect(base_url('admin/goods'));
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            redirect(base_url('admin/goods'));
        }
    }

    public function _rules() 
    {	
        $this->form_validation->set_rules('code_goods', 'Code Goods', 'trim|required');
        $this->form_validation->set_rules('name_goods1', 'Name Goods 1', 'trim|required');
	    $this->form_validation->set_rules('name_goods2', 'Name Goods 2', 'trim|required');
	    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function ajax_list()
    {
        $list = $this->goods_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $goods) {

            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $goods->code_goods;
            $row[] = $goods->name_goods1; 
            $row[] = $goods->name_goods2; 
            $row[] = '<a href="'.base_url().'admin/goods/read/'. $goods->code_goods.'"  class="btn btn-info">Read</a>
            <a href="'. base_url().'admin/goods/update/'.$goods->code_goods.'" class="btn btn-success">Edit</a>
            <a onclick="hapus('.$goods->code_goods.')" class="btn btn-danger">Delete</a>'; 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->goods_model->count_all(),
                        "recordsFiltered" => $this->goods_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    


}