<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();
        $this->load->model('list_shipper_model');
        $this->load->model('all_model');
        if($this->session->userdata('type') != 'shiper' && $this->session->userdata('type') != 'admin' && $this->session->userdata('type') != 'superadmin'  && $this->session->userdata('type') != 'consignee'  ){
             redirect(base_url());
        }
        date_default_timezone_set('Asia/Jakarta');

   
    }

    public function index()
    {
        $data['title'] = "PAM CARGO";
        $data['main'] = "admin/booking/index";
        $this->load->view('admin/template/index',$data);
    }

    public function print_booking(){
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('admin/booking/test',[],true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
    }

    public function form_booking($id=''){
        // $this->uri->segment('4'); 
        $data['master_id'] = $id;
        $data['page'] = "Form Booking";
        $data['title'] = "PAM CARGO";
        $data['user_link'] = $this->list_shipper_model->user_link($id)->result();
        $data['master_key']= $this->db->query("select * from f_master where master_id = '$id' ")->row();
        $data['main'] = "admin/booking/form_booking";
        $this->load->view('admin/template/index',$data);
    }

    

    public function ajax_list()
	{
		$type = $this->session->userdata('type');
		$list = $this->list_shipper_model->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $master) {
			$no++;
			$row = array(); 
            $row[] = $no;
            if($type == 'shiper'){
                if($master->status == '1'){
                    $button = "<a href='".base_url('admin/booking/form_booking/').$master->master_id."' title='Edit' class='btn btn-xs btn-primary'><i class='fa fa-pencil'></i></a>
                    <a href='javascript:void(0)' onClick='hapus_master(".$master->master_id.")' title='Delete' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></a> ";
                }else{
                    $button = "<a href='".base_url('admin/booking/form_booking/').$master->master_id."' title='Detail' class='btn btn-xs btn-primary'> Detail</a>";
                }
            }else if($type == 'admin'){
                if($master->status == '1'){
                    $button = "<a href='".base_url('admin/booking/form_booking/').$master->master_id."' title='Detail' class='btn btn-xs btn-primary'> Detail</a> 
                    <a href='javascript:void(0)' onClick='process_booking(".$master->master_id.",".$master->user_id.")' title='Process' class='btn btn-xs btn-success'><i class='fa fa-list'></i> Process ?</a> ";
                }else if($master->status == '2'){
                    $button = "
                    <a href='".base_url('admin/booking/form_booking/').$master->master_id."' title='Detail' class='btn btn-xs btn-primary'> <i class='fa fa-eye'></i></a>
                    <a href='javascript:void(0)' onClick='linkto(".$master->master_id.",".$master->f_consignee_id.")' title='Send to superadmin' class='btn btn-xs btn-danger'><i class='fa fa-paper-plane'></i></a>
                    <a href='javascript:void(0)' onClick='' title='Print' class='btn btn-xs btn-success'><i class='fa fa-print'></i></a>
                    ";
                }else if($master->status == '3'){
                    $button = "
                    <a href='".base_url('admin/booking/form_booking/').$master->master_id."' title='Detail' class='btn btn-xs btn-primary'> <i class='fa fa-eye'></i></a>
                    
                    <a href='javascript:void(0)' onClick='' title='Print' class='btn btn-xs btn-success'><i class='fa fa-print'></i></a>
                    ";
                }
            }else if($type == 'superadmin'){
                if($master->status == '1' || $master->status == '2'){
                    $button = "<a href='".base_url('admin/booking/form_booking/').$master->master_id."' title='Detail' class='btn btn-xs btn-primary'> Detail</a>
                   ";
                }else if($master->status == '3' ){

                    $button = "<a href='".base_url('admin/booking/form_booking/').$master->master_id."' title='Detail' class='btn btn-xs btn-primary'> Detail</a>
                    <a href='javascript:void(0)' onClick='process_booking(".$master->master_id.",".$master->user_id.")' title='Process' class='btn btn-xs btn-success'><i class='fa fa-list'></i> Process ?</a>";
                    
                }else if($master->status == '4' ){
                    $button = "<a href='".base_url('admin/booking/form_booking/').$master->master_id."' title='Detail' class='btn btn-xs btn-primary'> Detail</a>
                    <a href='javascript:void(0)' onClick='linkto(".$master->master_id.",".$master->f_consignee_id.")' title='Send' class='btn btn-xs btn-danger'><i class='fa fa-paper-plane'></i>Send To Consignee</a>";
               
                }else if($master->status == '5' ){
                    $button = "<a href='".base_url('admin/booking/form_booking/').$master->master_id."' title='Detail' class='btn btn-xs btn-primary'> Detail</a>
                  
                    ";
                }
          }else if($type == 'consignee'){
           
                $button = "<a href='".base_url('admin/booking/form_booking/').$master->master_id."' title='Detail' class='btn btn-xs btn-primary'> Detail</a>";
           
        }
          
          

            if($master->status == '1'){
                $stat = "Waiting process origin";
            }else if($master->status == '2'){
                $stat = "Processed by origin";
            }else if($master->status == '3'){
                $stat = "Delivered to superadmin";
            }else if($master->status == '4'){
                $stat = "Processed by superadmin";
            }else if($master->status == '5'){
                $stat = "Delivered to consignee";
            }else if($master->status == '6'){
                $stat = "Accepted by consignee";
            }
            if($master->name_transport == 'air'){
                $trans = "<img src=".base_url('assets/image/icon/airplane.png')." width='20px' > ";
            }else if($master->name_transport == 'sea'){
                $trans = "<img src=".base_url('assets/image/icon/ship.png')." width='20px' > ";
            }else if($master->name_transport == 'seaair'){
                $trans = "<img src=".base_url('assets/image/icon/airplane.png')." width='20px'><img src=".base_url('assets/image/icon/ship.png')." width='20px' >  ";
            }
            $row[] = $button;
            $row[] = $stat;            
            $row[] = $master->invoice_number;            
			$row[] = $master->name_user." - ".$master->country;            
            $row[] = $master->name_vendor;
			$row[] = $master->name_shipper;
			$row[] = $trans;
			$row[] = $master->name_ordering;
			$row[] = $master->name_consignee;
			$row[] = $master->name_notify;
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->list_shipper_model->count_all(),
						"recordsFiltered" => $this->list_shipper_model->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
    
    public function prosess_booking(){
      $master_id = $_POST['master_id'];
        if($master_id == ""){
            $id = $this->list_shipper_model->create_master();
            $this->list_shipper_model->create_vendor($id);
            // $this->list_shipper_model->create_shipper($id);
            $this->list_shipper_model->create_pickup_address($id);
            // $this->list_shipper_model->create_consignee($id);
            $this->list_shipper_model->create_delivery_address($id);
            $this->list_shipper_model->create_notify_party($id);
      
            $this->list_shipper_model->create_transport($id); 
            $this->list_shipper_model->create_shipper_vendor($id);
            $this->list_shipper_model->create_ordering_customer($id);
            $this->list_shipper_model->create_shipping_terms($id);
            $this->list_shipper_model->create_transport_details($id);
            $this->list_shipper_model->create_shipping_document($id);

            $name = $this->session->userdata('name_pt');
            $country = $this->session->userdata('country');
            $admin = $this->db->query("SELECT * FROM user where country = '$country' and level = 'admin' ")->row();

            $html = "<img src='' height='50' width='50' style='float:left;' >
            <h1 style='float:left;' >PAM CARGO </h1>
            <br> <br> <br> <br> 
            <hr>
            <h4><b>Hi, ".$admin->name_pt."</b></h4>
            <h4>You got new booking from shipper ".$name." </h4>
           
            ";
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
            $this->email->from('aulhakim998@gmail.com','PAM CARGO');
            $this->email->to($admin->email);
            $this->email->subject("You got new booking");
            $this->email->message($html);
            $this->email->send();
            echo $this->email->print_debugger();
        }else{
            $this->list_shipper_model->update_master($master_id );
            $this->list_shipper_model->update_vendor($master_id );
            $this->list_shipper_model->update_shipper($master_id );
            $this->list_shipper_model->update_pickup_address($master_id );
            $this->list_shipper_model->update_consignee($master_id );
            $this->list_shipper_model->update_delivery_address($master_id );
            $this->list_shipper_model->update_notify_party($master_id );

            $this->list_shipper_model->update_transport($master_id ); 
            $this->list_shipper_model->update_shipper_vendor($master_id );
            $this->list_shipper_model->update_ordering_customer($master_id );
            $this->list_shipper_model->update_shipping_terms($master_id );
            $this->list_shipper_model->update_transport_details($master_id );
            $this->list_shipper_model->update_shipping_document($master_id );
        }
      echo"1";
    }
    public function delete_booking($id){
        $this->list_shipper_model->delete_booking($id);
    }
    
    public function sendTo(){
        $type = $this->session->userdata('type');
        $consignee_id = $_POST['consignee_id'];
        $master_id = $_POST['id'];
        if($type == 'admin'){
            $query = $this->db->query("SELECT t.name_pt,t.country,t.level,t.user_id, tr.user_id as user_link,tr.subject,tr.content
            FROM user AS t 
            LEFT JOIN f_linkto AS tr 
            ON t.user_id = tr.user_id AND tr.master_id = $master_id
            where t.level = 'superadmin' and t.country = 'AE' ")->result();
        }else if($type == 'superadmin'){
            
            $query = $this->db->query("SELECT t.name_pt,t.country,t.level,t.user_id, tr.user_id as user_link,tr.subject,tr.content
            FROM user AS t 
            LEFT JOIN f_linkto AS tr 
            ON t.user_id = tr.user_id AND tr.master_id = $master_id
            where t.level = 'consignee' and t.user_id = '$consignee_id' ")->result();
        }

       
        $a['consignee_id'] = $consignee_id ;
        $a['master_id'] = $_POST['id'];
        $a['users'] = $query;
        $this->load->view('admin/booking/tbl_user', $a);
    }

    public function sendBooking(){
        $name = $this->session->userdata('name_pt');
        $type = $this->session->userdata('type');
        $master_id = $_POST['master_id'];
        $user_id = $_POST['user_id'];

        if($type == 'admin'){

            $a['master_id'] = $master_id;
            $a['user_id'] = $user_id;
            $a['from_user_id'] = $this->session->userdata('user_id');;
            $a['f_chat_id'] = md5($user_id.$master_id.date('Y-m-d H:i:s'));
            $a['created_dated'] = date('Y-m-d H:i:s');
            $a['linkFromTo'] = 'adminToSadmin';
            $a['subject'] = $_POST['subject'];
            $a['content'] = $_POST['content'];
            $insert = $this->db->insert('f_linkto',$a);
            $data = array('user_id' => $user_id,
                                'url' => base_url().'admin/booking/form_booking/'.$master_id,
                                'title' => 'Booking (SI)',
                                'text' => 'New booking from ORIGIN '.$name,
                                'status' => '0',
                                'created_dated' => date('Y-m-d H:i:s')
                            );
            $this->list_shipper_model->sendNotif($data);
            $update['status']='3';
            $this->db->where("master_id",$master_id);
            $this->db->update("f_master",$update);

        }else if($type == 'superadmin'){

            $a['master_id'] = $master_id;
            $a['user_id'] = $user_id;
            $a['from_user_id'] = $this->session->userdata('user_id');;
            $a['f_chat_id'] = md5($user_id.$master_id.date('Y-m-d H:i:s'));
            $a['created_dated'] = date('Y-m-d H:i:s');
            $a['linkFromTo'] = 'adminToConsignee';
            $a['subject'] = $_POST['subject'];
            $a['content'] = $_POST['content'];
            $insert = $this->db->insert('f_linkto',$a);
            $data = array('user_id' => $user_id,
                                'url' => base_url().'admin/booking/form_booking/'.$master_id,
                                'title' => 'Booking (SI)',
                                'text' => 'New booking from Superadmin '.$name,
                                'status' => '0',
                                'created_dated' => date('Y-m-d H:i:s')
                            );
            $this->list_shipper_model->sendNotif($data);
            $update['status']='5';
            $this->db->where("master_id",$master_id);
            $this->db->update("f_master",$update);

        }


        if($insert){
            $html = "<img src='' height='50' width='50' style='float:left;' >
            <h1 style='float:left;' >PAM CARGO </h1>
            <br> <br> <br> <br> 
            <hr>
            <h4><b>Hi,</b></h4>
            <h4>You got one booking from ORIGIN ".$name." </h4>
            <table class='table table-bordered'>
            <button>Detail Booking</button>
            </table>
            ";
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
            $this->email->from('aulhakim998@gmail.com','PAM CARGO');
            $this->email->to($email);
            $this->email->subject("New Booking (SI) ");
            $this->email->message($html);
            $this->email->send();
            $this->email->print_debugger();
        }

    }
   

    function send_to_consignee(){
        $master_id = $_POST['master_id'];
        $data['status'] = 3;
        $this->db->where('master_id',$master_id);
        $this->db->update('f_master',$data);
    }
    public function get_vendor(){
        $master_id = $this->input->post('master_id');
        $data = $this->db->query("SELECT * FROM f_vendor where master_id = '$master_id' ")->row();
        echo json_encode($data);
    }
    public function get_shipper(){
        $shipper_id = $this->input->post('shipper_id');
        $data = $this->db->query("SELECT * FROM user where user_id = '$shipper_id' ")->row();
        echo json_encode($data);
    }
    public function get_pickup(){
        $master_id = $this->input->post('master_id');
        $data = $this->db->query("SELECT * FROM f_pickup_address where master_id = '$master_id' ")->row();
        echo json_encode($data);
    }

    public function get_consignee(){
        $consignee_id = $this->input->post('consignee_id');
        $data = $this->db->query("SELECT * FROM user where user_id = '$consignee_id' ")->row();
        echo json_encode($data);
    }

    public function get_delivery(){
        $master_id = $this->input->post('master_id');
        $data = $this->db->query("SELECT * FROM f_delivery_address where master_id = '$master_id' ")->row();
        echo json_encode($data);
    }

    public function get_notify(){
        $master_id = $this->input->post('master_id');
        $data = $this->db->query("SELECT * FROM f_notify_party where master_id = '$master_id' ")->row();
        echo json_encode($data);
    }
    public function get_transport(){
        $master_id = $this->input->post('master_id');
        $data = $this->db->query("SELECT * FROM f_transport where master_id = '$master_id' ")->row();
        echo json_encode($data);
    }

    public function get_shipper_vendor(){
        $master_id = $this->input->post('master_id');
        $data = $this->db->query("SELECT * FROM f_shipper_vendor where master_id = '$master_id' ")->row();
        echo json_encode($data);
    }

    public function get_ordering_customer(){
        $master_id = $this->input->post('master_id');
        $data = $this->db->query("SELECT * FROM f_ordering_customer where master_id = '$master_id' ")->row();
        echo json_encode($data);
    }

    public function get_shipping_terms(){
        $master_id = $this->input->post('master_id');
        $data = $this->db->query("SELECT * FROM f_shipping_terms where master_id = '$master_id' ")->row();
        echo json_encode($data);
    }

    public function get_transport_details(){
        $master_id = $this->input->post('master_id');
        $data = $this->db->query("SELECT * FROM f_transport_details where master_id = '$master_id' ")->row();
        echo json_encode($data);
    }
    public function get_shipping_documents(){
        $master_id = $this->input->post('master_id');
        $data = $this->db->query("SELECT * FROM f_shipping_documents where master_id = '$master_id' ")->row();
        echo json_encode($data);
    }

    public function get_chat_delivery(){
        $master_id = $this->input->post('master_id');
        $from_user_id = $this->input->post('from_user_id');
        $chat_id = $this->input->post('chat_id');
        $limit = $this->input->post('limit');

        $data = $this->list_shipper_model->get_chat_delivery($master_id,$from_user_id,$chat_id,$limit )->result();
        if($data){
            echo json_encode($data);
            $this->update_status($chat_id,$master_id,$from_user_id);
        }else{
            echo json_encode($data);
        }
       
    }

    public function update_status($chat_id,$master_id,$user_id){

            $type = $this->session->userdata('type');
            if($type == 'admin'){
                    $key['read_admin'] = "yes"; 
            }else if($type == 'superadmin'){
                    $key['read_sadmin'] = "yes"; 
            }else if($type == 'shiper'){
                $key['read_shiper'] = "yes"; 
            }else if($type == 'consignee'){
                $key['read_consignee'] = "yes"; 
            }
            $this->db->where('f_chat_id',$chat_id); 
            $this->db->where('master_id',$master_id); 
            // $this->db->where('to_user_id',$user_id); 
            $this->db->update('f_chat_delivery',$key);
       

    }
    public function sendMessage(){
        $data = array(
            'master_id' => $this->input->post('master_id'), 
            'from_user_id' => $this->input->post('from_user_id'), 
            'to_user_id' => $this->input->post('to_user_id'), 
            'f_chat_id' => $this->input->post('chat_id'), 
            'text' => $this->input->post('chatText'), 
            'read_admin' => 'no', 
            'read_sadmin' => 'no', 
            'read_shiper' => 'no', 
            'read_consignee' => 'no', 
            'created_dated' => date('Y-m-d H:i:s')
        );
        $res = $this->db->insert('f_chat_delivery',$data);
        if($res){
            echo"1";
        }else{
            echo"2";
        }
    }

    public function sendFiles($chat_id,$from_user_id,$to_user_id,$master_id,$chat){
        $config['upload_path']          = './assets/files';
        $config['allowed_types']        = '*';
        $this->upload->initialize($config);
        $this->load->library('upload');
        if (!$this->upload->do_upload('file'))
        {
            echo "1"; 
        }
        else
        {
            $file = $this->upload->file_name;
            $type_file =  $this->upload->data('file_ext');
            $data = array(
                'master_id' => $master_id, 
                'from_user_id' => $from_user_id, 
                'to_user_id' => $to_user_id, 
                'f_chat_id' => $chat_id, 
                'text' => str_replace("%20"," ",$chat),
                'file' => $file, 
                'read_admin' => 'no', 
                'read_sadmin' => 'no', 
                'read_shiper' => 'no', 
                'read_consignee' => 'no', 
                'type_file' => $type_file, 
                'created_dated' => date('Y-m-d H:i:s')
            );
            $res = $this->db->insert('f_chat_delivery',$data);
        }
       
    }

    public function get_file_delivery(){
        $master_id = $_POST['master_id'];
        $search = $_POST['search'];
        $sortBy = $_POST['sortBy'];
        $data = $this->list_shipper_model->get_file_delivery($master_id,$search,$sortBy)->result();
        echo json_encode($data);
    }

    public function process_booking(){
        $master_id = $this->input->post('master_id');
        $type = $this->session->userdata('type');

        if($type == 'admin'){

            $a['status'] = '2';
            $this->db->where('master_id',$master_id);
            $this->db->update('f_master',$a);
    
            $data['master_id'] = $master_id;
            $data['from_user_id'] = $this->session->userdata('user_id');
            $data['user_id'] = $this->input->post('user_shipper_id');
            $data['linkFromTo'] = 'adminToShipper';
            $data['f_chat_id'] = md5($user_id.$master_id.date('Y-m-d H:i:s'));
            $data['created_dated'] = date('Y-m-d H:i:s');
            $this->db->insert('f_linkto',$data);

        }else if($type == 'superadmin'){
            $a['status'] = '4';
            $this->db->where('master_id',$master_id);
            $this->db->update('f_master',$a);

        }


       

    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'form' => 'create',
            'button_back' => base_url('admin/shipper'),
            'action' => base_url('admin/shipper/create_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'shipper_id' => set_value('shipper_id'),
    	    'shipper_name' => set_value('shipper_name'),
    	    'shipper_phone' => set_value('shipper_phone'),
    	    'shipper_address' => set_value('shipper_address'),
    	    'shipper_email' => set_value('shipper_email'),
    	    'shipper_country' => set_value('shipper_country'),
    	    'shipper_password' => set_value('shipper_password'),
    	    'shipper_status' => set_value('shipper_status'),
    	    'shipper_name_building_housing' => set_value('shipper_name_building_housing'),
    	    'shipper_detail_building_housing' => set_value('shipper_detail_building_housing'),
    	    'shipper_postal_code' => set_value('shipper_postal_code'),
    	    'shipper_province_id' => set_value('shipper_province_id'),
    	    'shipper_city_id' => set_value('shipper_city_id'),
    	    'shipper_district_id' => set_value('shipper_district_id'),
    	    'shipper_village_id' => set_value('shipper_village_id'),
    	    'shipper_lat' => set_value('shipper_lat'),
    	    'shipper_lng' => set_value('shipper_lng'),
            'page' => "Create Shipper",
            'title' => "PAM CARGO",
            'main' => "admin/shipper/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'shipper_name' => $this->input->post('shipper_name',TRUE),
                'shipper_phone' => $this->input->post('shipper_phone',TRUE),
                'shipper_address' => $this->input->post('shipper_address',TRUE),
                'shipper_name_building_housing' => $this->input->post('shipper_name_building_housing',TRUE),
                'shipper_detail_building_housing' => $this->input->post('shipper_detail_building_housing',TRUE),
                'shipper_postal_code' => $this->input->post('shipper_postal_code',TRUE),
                'shipper_province_id' => $this->input->post('prop',TRUE),
                'shipper_city_id' => $this->input->post('kota',TRUE),
                'shipper_district_id' => $this->input->post('kec',TRUE),
                'shipper_village_id' => $this->input->post('kel',TRUE),
                'shipper_lat' => $this->input->post('shipper_lat',TRUE),
                'shipper_lng' => $this->input->post('shipper_lng',TRUE),
    	    );

            $save = $this->list_shipper_model->insert($data);
            if($save){
                $this->session->set_flashdata('success', $this->lang->line('insert_success'));
                redirect(base_url('admin/shipper'));    
            }else{
                $this->session->set_flashdata('error', $this->lang->line('error_alert'));
                redirect(base_url('admin/shipper/create'));    
            }
        }
    }

    public function update($id) 
    {
        $get_shipper = $this->list_shipper_model->get_by_id($id);
        $data = array(
            'button' => 'Create',
            'form' => 'update',
            'button_back' => base_url('admin/shipper'),
            'action' => base_url('admin/shipper/update_action'),
    	    'province' => $this->db->query("select province_id, name from province")->result(),
    	    'city' => $this->db->query("select city_id, name from city")->result(),
    	    'district' => $this->db->query("select district_id, name from district")->result(),
    	    'village' => $this->db->query("select village_id, name from village")->result(),
    	    'shipper_id' => set_value('shipper_id', $get_shipper->shipper_id),
    	    'shipper_name' => set_value('shipper_name', $get_shipper->shipper_name),
    	    'shipper_phone' => set_value('shipper_phone', $get_shipper->shipper_phone),
    	    'shipper_email' => set_value('shipper_email', $get_shipper->shipper_email),
    	    'shipper_country' => set_value('shipper_country', $get_shipper->shipper_country),
    	    'shipper_password' => set_value('shipper_password', $get_shipper->shipper_password),
    	    'shipper_status' => set_value('shipper_status', $get_shipper->shipper_status),
    	    'shipper_address' => set_value('shipper_address', $get_shipper->shipper_address),
    	    'shipper_name_building_housing' => set_value('shipper_name_building_housing', $get_shipper->shipper_name_building_housing),
    	    'shipper_detail_building_housing' => set_value('shipper_detail_building_housing', $get_shipper->shipper_detail_building_housing),
    	    'shipper_postal_code' => set_value('shipper_postal_code', $get_shipper->shipper_postal_code),
    	    'shipper_province_id' => set_value('shipper_province_id', $get_shipper->shipper_province_id),
    	    'shipper_city_id' => set_value('shipper_city_id', $get_shipper->shipper_city_id),
    	    'shipper_district_id' => set_value('shipper_district_id', $get_shipper->shipper_district_id),
    	    'shipper_village_id' => set_value('shipper_village_id', $get_shipper->shipper_village_id),
    	    'shipper_lat' => set_value('shipper_lat', $get_shipper->shipper_lat),
    	    'shipper_lng' => set_value('shipper_lng', $get_shipper->shipper_lng),
            'page' => "Update Shipper",
            'title' => "PAM CARGO",
            'main' => "admin/shipper/form",
        );
        
        $this->load->view('admin/template/index',$data);
    }
 
    public function update_action() 
    {
        $id = $this->input->post('shipper_id',TRUE);
        $password = $this->input->post('shipper_password',TRUE);
        $email = $this->input->post('shipper_email',TRUE);
        $name = $this->input->post('shipper_name',TRUE);

        $data = array(
            'shipper_name' => $this->input->post('shipper_name',TRUE),
            'shipper_phone' => $this->input->post('shipper_phone',TRUE),
            'shipper_address' => $this->input->post('shipper_address',TRUE),
            'shipper_postal_code' => $this->input->post('shipper_postal_code',TRUE),
            'shipper_email' => $this->input->post('shipper_email',TRUE),
            'shipper_country' => $this->input->post('shipper_country',TRUE),
            'shipper_password' => md5($this->input->post('shipper_password',TRUE)),
            'shipper_status' => $this->input->post('shipper_status',TRUE),
        );

        $update = $this->list_shipper_model->update($id, $data);
        if($update){

            $html .= "<img src='' height='50' width='50' style='float:left;' >
            <h1 style='float:left;' >PAM CARGO </h1>
            <br> <br> <br> <br> 
            <hr>
            <h4><b>Hi, ".$name."</b></h4>
            <h4>Your account has been approved </h4>
            <table class='table table-bordered' >
            <tr>
                <td>Password: ".$password."</td>
            </tr>
            </table>
            ";
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
            $this->email->from('aulhakim998@gmail.com','PAM CARGO');
            $this->email->to($email);
            $this->email->subject("Your account approved");
            $this->email->message($html);
            $this->email->send();
            echo $this->email->print_debugger();


            $this->session->set_flashdata('success', $this->lang->line('update_success'));
            redirect(base_url('admin/shipper'));  

        }else{
            $this->session->set_flashdata('error', $this->lang->line('error_alert'));
            redirect(base_url('admin/shipper/update/'.$id.''));    
        }






    }

    // public function read($id) 
    // {
    //     $get_shipper = $this->list_shipper_model->get_by_id($id);
    //     $data = array(
    //         // 'button' => 'Create',
    //         'button_back' => base_url('admin/shipper'),
    //         'form' => 'read',
    //         'action' => base_url('admin/shipper/update_action'),
    // 	    'province' => $this->db->query("select province_id, name from province")->result(),
    // 	    'city' => $this->db->query("select city_id, name from city")->result(),
    // 	    'district' => $this->db->query("select district_id, name from district")->result(),
    // 	    'village' => $this->db->query("select village_id, name from village")->result(),
    // 	    'shipper_id' => set_value('shipper_id', $get_shipper->shipper_id),
    // 	    'shipper_name' => set_value('shipper_name', $get_shipper->shipper_name),
    //         'shipper_phone' => set_value('shipper_phone', $get_shipper->shipper_phone),
    //         'shipper_email' => set_value('shipper_email', $get_shipper->shipper_email),
    // 	    'shipper_country' => set_value('shipper_country', $get_shipper->shipper_country),
    // 	    'shipper_password' => set_value('shipper_password', $get_shipper->shipper_password),
    // 	    'shipper_status' => set_value('shipper_status', $get_shipper->shipper_status),
    // 	    'shipper_address' => set_value('shipper_address', $get_shipper->shipper_address),
    // 	    'shipper_name_building_housing' => set_value('shipper_name_building_housing', $get_shipper->shipper_name_building_housing),
    // 	    'shipper_detail_building_housing' => set_value('shipper_detail_building_housing', $get_shipper->shipper_detail_building_housing),
    // 	    'shipper_postal_code' => set_value('shipper_postal_code', $get_shipper->shipper_postal_code),
    // 	    'shipper_province_id' => set_value('shipper_province_id', $get_shipper->shipper_province_id),
    // 	    'shipper_city_id' => set_value('shipper_city_id', $get_shipper->shipper_city_id),
    // 	    'shipper_district_id' => set_value('shipper_district_id', $get_shipper->shipper_district_id),
    // 	    'shipper_village_id' => set_value('shipper_village_id', $get_shipper->shipper_village_id),
    // 	    'shipper_lat' => set_value('shipper_lat', $get_shipper->shipper_lat),
    // 	    'shipper_lng' => set_value('shipper_lng', $get_shipper->shipper_lng),
    //         'page' => "Update Shipper",
    //         'title' => "PAM CARGO",
    //         'main' => "admin/shipper/form",
    //     );
        
    //     $this->load->view('admin/template/index',$data);
    // }

    public function delete($id) 
    {
        $id = $this->input->post('id',TRUE);
        $row = $this->list_shipper_model->get_by_id($id);

        if ($row) {
            $this->list_shipper_model->delete($id);
            $this->session->set_flashdata('success', $this->lang->line('delete_success'));
            redirect(base_url('admin/shipper'));
        } else {
            $this->session->set_flashdata('error', $this->lang->line('delete_error'));
            redirect(base_url('admin/shipper'));
        }
    }

    // public function _rules() 
    // {	
    //     $this->form_validation->set_rules('shipper_name', 'Name', 'trim|required');
    //     $this->form_validation->set_rules('shipper_phone', 'Phone', 'trim|required');
    //     $this->form_validation->set_rules('shipper_address', 'Address', 'trim|required');
    //     $this->form_validation->set_rules('shipper_name_building_housing', 'Building Housing Name', 'trim|required');
    //     $this->form_validation->set_rules('shipper_detail_building_housing', 'Building Housing Detail', 'trim|required');
    //     $this->form_validation->set_rules('shipper_postal_code', 'Postal Code', 'trim|required');
	//     $this->form_validation->set_rules('prop', 'Province', 'trim|required');
	//     $this->form_validation->set_rules('kota', 'City', 'trim|required');
	//     $this->form_validation->set_rules('kec', 'District', 'trim|required');
	//     $this->form_validation->set_rules('kel', 'Village', 'trim|required');
	//     $this->form_validation->set_rules('shipper_lat', 'Lattitude', 'trim|required');
	//     $this->form_validation->set_rules('shipper_lng', 'Longitude', 'trim|required');
	//     $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    // }


}