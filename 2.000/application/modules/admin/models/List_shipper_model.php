<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_shipper_model extends CI_Model {

	var $table = 'f_master';
	var $column = array('f_master.master_id','f_master.invoice_number','f_vendor.name','f_shipper.name','f_transport.name','f_ordering_customer.name'); 
	var $order = array('master_id' => 'desc');

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	} 

	private function _get_datatables_query()
	{
		
		$this->db->from($this->table);
		$this->db->select("f_vendor.name as name_vendor,
                                f_shipper.name as name_shipper,
                                f_transport.name as name_transport,
                                f_ordering_customer.name as name_ordering,
                                f_consignee.name as name_consignee,
                                f_notify_party.name as name_notify,
                                f_master.master_id as master_id,
                                f_master.status,
                                f_master.country,
                                f_master.invoice_number,
                                f_master.user_id,
                                f_master.f_consignee_id,
                                user.name_pt as name_user
				");

		$i = 0;
	
		foreach ($this->column as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND. 
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$column[$i] = $item; // set column array variable to order processing
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
                 }
        

        $type = $this->session->userdata('type');
        if($type == 'shiper'){
                $user_id = $this->session->userdata('user_id');
                $this->db->where('f_master.user_id',$user_id);
        }else if($type == 'admin'){
                $country = $this->session->userdata('country');
                $this->db->where('f_master.country',$country);
        }else if($type == 'superadmin'){
                $user_id = $this->session->userdata('user_id');
                $this->db->where('f_linkto.user_id',$user_id);
                $this->db->join('f_linkto','f_master.master_id = f_linkto.master_id','left');
        }else if($type == 'consignee'){
                $user_id = $this->session->userdata('user_id');
                $this->db->where('f_master.status',5);
                $this->db->where('f_master.f_consignee_id',$user_id);
        }
        
        $this->db->join('f_vendor','f_master.master_id = f_vendor.master_id','left');
        $this->db->join('f_shipper','f_master.master_id = f_shipper.master_id','left');
        $this->db->join('f_transport','f_master.master_id = f_transport.master_id','left');
        $this->db->join('f_ordering_customer','f_master.master_id = f_ordering_customer.master_id','left');
        $this->db->join('f_consignee','f_master.master_id = f_consignee.master_id','left');
        $this->db->join('f_notify_party','f_master.master_id = f_notify_party.master_id','left');
        $this->db->join('user','f_master.user_id = user.user_id','left');
		
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->row();
        }
        public function create_master(){
                $country = $this->session->userdata('country');
                $data['user_id'] = $_POST['user_id'];
                $data['country'] = $country;
                $data['status'] = '1';
                $data['created_date'] = date('Y-m-d H:i:s');
                $data['f_consignee_id'] = $_POST['nameCons'];
                $data['f_shipper_id'] = $_POST['user_id'];
                $six_digit = mt_rand(100000, 999999);
                $data['invoice_number'] = 'SI-'.$country.'-'.$six_digit;
                $this->db->insert('f_master',$data);
                return $this->db->insert_id();
        }
        public function create_vendor($id){
                $data = array(
                        'master_id' => $id, 
                        'name' => $_POST['nameVendor'], 
                        'gender' => $_POST['title'], 
                        'contact' => $_POST['contact'],
                        'created_date' => date('Y-m-d')
                        );
                $this->db->insert('f_vendor',$data);
        }
        public function create_shipper($id){
                $data = array(
                        'master_id' => $id, 
                        'name' => $_POST['nameShipper'], 
                        'street' => $_POST['streetShipper'], 
                        'city' => $_POST['cityShipper'], 
                        'zip_code' => $_POST['zipCodeShipper'], 
                        'country' => $_POST['countryShipper'],
                        'email' => $_POST['emailShipper'],
                        'contact1' => $_POST['nameContact1Shipper'],
                        'contact2' => $_POST['nameContact2Shipper'],
                        'phone' => $_POST['phoneShipper'],
                        'created_dated' => date('Y-m-d H:i:s'),
                        );
                $this->db->insert('f_shipper',$data);
        }
	public function create_pickup_address($id){
        $data = array(
                    'master_id' => $id, 
                    'name' => $_POST['namePick'], 
                    'street' => $_POST['streePick'], 
                    'city' => $_POST['cityPick'], 
                    'zip_code' => $_POST['zipCodePick'], 
                    'country' => $_POST['countryPick'], 
                    'email' => $_POST['emailPick'], 
                    'contact1' => $_POST['nameContact1Pick'], 
                    'contact2' => $_POST['nameContact2Pick'], 
                    'phone' => $_POST['phonePick'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
        $this->db->insert('f_pickup_address',$data);
	}
	public function create_consignee($id){
        $data = array(
                    'master_id' => $id, 
                    'name' => $_POST['nameCons'], 
                    'street' => $_POST['streetCons'], 
                    'city' => $_POST['cityCons'], 
                    'zip_code' => $_POST['zipCodeCons'], 
                    'country' => $_POST['countryCons'], 
                    'email' => $_POST['emailCons'], 
                    'contact1' => $_POST['nameContact1Cons'], 
                    'contact2' => $_POST['nameContact2Cons'], 
                    'phone' => $_POST['phoneCons'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
        $this->db->insert('f_consignee',$data);
	}
	public function create_delivery_address($id){
        $data = array(
                    'master_id' => $id, 
                    'name' => $_POST['nameDel'], 
                    'street' => $_POST['streetDel'], 
                    'city' => $_POST['cityDel'], 
                    'zip_code' => $_POST['zipCodeDel'], 
                    'country' => $_POST['countryDel'], 
                    'email' => $_POST['emailDel'], 
                    'contact1' => $_POST['nameContact1Del'], 
                    'contact2' => $_POST['nameContact2Del'], 
                    'phone' => $_POST['phoneDel'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
        $this->db->insert('f_delivery_address',$data);
	}

	public function create_notify_party($id){
        $data = array(
                    'master_id' => $id, 
                    'name' => $_POST['nameNot'], 
                    'street' => $_POST['streetNot'], 
                    'city' => $_POST['cityNot'], 
                    'zip_code' => $_POST['zipCodeNot'], 
                    'country' => $_POST['countryNot'], 
                    'email' => $_POST['emailNot'], 
                    'contact1' => $_POST['nameContact1Not'], 
                    'contact2' => $_POST['nameContact2Not'], 
                    'phone' => $_POST['phoneNot'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
        $this->db->insert('f_notify_party',$data);
	}


        public function create_transport($id){
                $data['master_id'] = $id;
                $data['name'] = $_POST['transport'];
                $data['created_dated'] = date('Y-m-d H:i:s');
                $this->db->insert('f_transport',$data);
        }

        public function create_shipper_vendor($id){
                $data = array(
                        'master_id' => $id, 
                        'to' => $_POST['toSV'], 
                        'copy1' => $_POST['copySV'], 
                        'copy2' => $_POST['copy2SV'], 
                        'created_dated' => date('Y-m-d H:i:s'),
                        );
                $this->db->insert('f_shipper_vendor',$data);
	}

	public function create_ordering_customer($id){
        $data = array(
                    'master_id' => $id, 
                    'name' => $_POST['nameOC'], 
                    'street' => $_POST['streetOC'], 
                    'city' => $_POST['cityOC'], 
                    'zip_code' => $_POST['zipCodeOC'], 
                    'country' => $_POST['countryOC'], 
                    'email' => $_POST['emailOC'], 
                    'contact' => $_POST['nameContactOC'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
        $this->db->insert('f_ordering_customer',$data);
        }
        
	public function create_shipping_terms($id){
        $data = array(
                    'master_id' => $id, 
                    'inco_terms_for_shipping' => $_POST['inco'], 
                    'fob_charges' => $_POST['fobCharges'], 
                    'ocean_airfreight_charges' => $_POST['oaCharges'], 
                    'destination_charges' => $_POST['destinationCharges'], 
                    'import_duties_taxes' => $_POST['dutiesTaxes'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
        $this->db->insert('f_shipping_terms',$data);
	}
	

	public function create_transport_details($id){
        $data = array(
                    'master_id' => $id, 
                    'shipping_reference' => $_POST['shippingReference'], 
                    'airport_part_of_loading' => $_POST['partOfLoading'], 
                    'sea_air_transit_port' => $_POST['seaAirTransit'], 
                    'airport_port_of_discharges' => $_POST['portOfDischarges'], 
                    'place_of_cargo_hand_over' => $_POST['placeOfCargo'], 
                    'request_hand_over_date' => $_POST['pickUp'], 
                    'from' => $_POST['pickup2'], 
                    'to' => $_POST['pickup3'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
        $this->db->insert('f_transport_details',$data);
	}
	
	public function create_shipping_document($id){
        $data = array(
                    'master_id' => $id, 
                    'shipping_requires' => $_POST['shipRequires'], 
                    'shpr_isu_commerical_invoice' => $_POST['issueCommercial'], 
                    'shpr_isu_packing_list' => $_POST['issuePacking'], 
                    'shpr_isu_certificate_origin' => $_POST['issueCertificate'], 
                    'shpr_isu_specify' => $_POST['issueSpecify'], 
                    'shpr_isu_specify2' => $_POST['issueSpecify2'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
        $this->db->insert('f_shipping_documents',$data);
	}
	
        // Update
        public function update_master($id){
                $data['updated_date'] = date('Y-m-d H:i:s');
                $this->db->where('master_id',$id);
                $this->db->update('f_master',$data);
        }
        public function update_vendor($id){
                $data = array(
                        
                        'name' => $_POST['nameVendor'], 
                        'gender' => $_POST['title'], 
                        'contact' => $_POST['contact'],
                        'created_date' => date('Y-m-d')
                        );
                $this->db->where('master_id',$id);

                $this->db->update('f_vendor',$data);
        }
        public function update_shipper($id){
                $data = array(
                                                
                        'name' => $_POST['nameShipper'], 
                        'street' => $_POST['streetShipper'], 
                        'city' => $_POST['cityShipper'], 
                        'zip_code' => $_POST['zipCodeShipper'], 
                        'country' => $_POST['countryShipper'],
                        'email' => $_POST['emailShipper'],
                        'contact1' => $_POST['nameContact1Shipper'],
                        'contact2' => $_POST['nameContact2Shipper'],
                                                'phone' => $_POST['phoneShipper'],
                        'created_dated' => date('Y-m-d H:i:s'),
                        );
                $this->db->where('master_id',$id);

                $this->db->update('f_shipper',$data);
        }
	public function update_pickup_address($id){
        $data = array(
                    
                    'name' => $_POST['namePick'], 
                    'street' => $_POST['streePick'], 
                    'city' => $_POST['cityPick'], 
                    'zip_code' => $_POST['zipCodePick'], 
                    'country' => $_POST['countryPick'], 
                    'email' => $_POST['emailPick'], 
                    'contact1' => $_POST['nameContact1Pick'], 
                    'contact2' => $_POST['nameContact2Pick'], 
                    'phone' => $_POST['phonePick'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
                $this->db->where('master_id',$id);

        $this->db->update('f_pickup_address',$data);
	}
	public function update_consignee($id){
        $data = array(
                    
                    'name' => $_POST['nameCons'], 
                    'street' => $_POST['streetCons'], 
                    'city' => $_POST['cityCons'], 
                    'zip_code' => $_POST['zipCodeCons'], 
                    'country' => $_POST['countryCons'], 
                    'email' => $_POST['emailCons'], 
                    'contact1' => $_POST['nameContact1Cons'], 
                    'contact2' => $_POST['nameContact2Cons'], 
                    'phone' => $_POST['phoneCons'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
                $this->db->where('master_id',$id);

        $this->db->update('f_consignee',$data);
	}
	public function update_delivery_address($id){
        $data = array(
                    
                    'name' => $_POST['nameDel'], 
                    'street' => $_POST['streetDel'], 
                    'city' => $_POST['cityDel'], 
                    'zip_code' => $_POST['zipCodeDel'], 
                    'country' => $_POST['countryDel'], 
                    'email' => $_POST['emailDel'], 
                    'contact1' => $_POST['nameContact1Del'], 
                    'contact2' => $_POST['nameContact2Del'], 
                    'phone' => $_POST['phoneDel'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
                $this->db->where('master_id',$id);

        $this->db->update('f_delivery_address',$data);
	}

	public function update_notify_party($id){
        $data = array(
                    
                    'name' => $_POST['nameNot'], 
                    'street' => $_POST['streetNot'], 
                    'city' => $_POST['cityNot'], 
                    'zip_code' => $_POST['zipCodeNot'], 
                    'country' => $_POST['countryNot'], 
                    'email' => $_POST['emailNot'], 
                    'contact1' => $_POST['nameContact1Not'], 
                    'contact2' => $_POST['nameContact2Not'], 
                    'phone' => $_POST['phoneNot'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
                $this->db->where('master_id',$id);

        $this->db->update('f_notify_party',$data);
	}


        public function update_transport($id){
                $data['master_id'] = $id;
                $data['name'] = $_POST['transport'];
                $data['created_dated'] = date('Y-m-d H:i:s');
                $this->db->where('master_id',$id);
                $this->db->update('f_transport',$data);
        }

        public function update_shipper_vendor($id){
                $data = array(
                        
                        'to' => $_POST['toSV'], 
                        'copy1' => $_POST['copySV'], 
                        'copy2' => $_POST['copy2SV'], 
                        'created_dated' => date('Y-m-d H:i:s'),
                        );
                $this->db->where('master_id',$id);

                $this->db->update('f_shipper_vendor',$data);
	}

	public function update_ordering_customer($id){
        $data = array(
                    
                    'name' => $_POST['nameOC'], 
                    'street' => $_POST['streetOC'], 
                    'city' => $_POST['cityOC'], 
                    'zip_code' => $_POST['zipCodeOC'], 
                    'country' => $_POST['countryOC'], 
                    'email' => $_POST['emailOC'], 
                    'contact' => $_POST['nameContactOC'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
                $this->db->where('master_id',$id);

        $this->db->update('f_ordering_customer',$data);
        }
        
	public function update_shipping_terms($id){
        $data = array(
                    
                    'inco_terms_for_shipping' => $_POST['inco'], 
                    'fob_charges' => $_POST['fobCharges'], 
                    'ocean_airfreight_charges' => $_POST['oaCharges'], 
                    'destination_charges' => $_POST['destinationCharges'], 
                    'import_duties_taxes' => $_POST['dutiesTaxes'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
                $this->db->where('master_id',$id);

        $this->db->update('f_shipping_terms',$data);
	}
	

	public function update_transport_details($id){
        $data = array(
                    
                    'shipping_reference' => $_POST['shippingReference'], 
                    'airport_part_of_loading' => $_POST['partOfLoading'], 
                    'sea_air_transit_port' => $_POST['seaAirTransit'], 
                    'airport_port_of_discharges' => $_POST['portOfDischarges'], 
                    'place_of_cargo_hand_over' => $_POST['placeOfCargo'], 
                    'request_hand_over_date' => $_POST['pickUp'], 
                    'from' => $_POST['pickup2'], 
                    'to' => $_POST['pickup3'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
                $this->db->where('master_id',$id);

        $this->db->update('f_transport_details',$data);
	}
	
	public function update_shipping_document($id){
        $data = array(
                    
                    'shipping_requires' => $_POST['shipRequires'], 
                    'shpr_isu_commerical_invoice' => $_POST['issueCommercial'], 
                    'shpr_isu_packing_list' => $_POST['issuePacking'], 
                    'shpr_isu_certificate_origin' => $_POST['issueCertificate'], 
                    'shpr_isu_specify' => $_POST['issueSpecify'], 
                    'shpr_isu_specify2' => $_POST['issueSpecify2'], 
                    'created_dated' => date('Y-m-d H:i:s'),
                    );
                $this->db->where('master_id',$id);

        $this->db->update('f_shipping_documents',$data);
	}
        
        

	public function delete_booking($id){
                $this->db->where('master_id',$id);
                $this->db->delete('f_master');

                $this->db->where('master_id',$id);
                $this->db->delete('f_vendor');

                $this->db->where('master_id',$id);
                $this->db->delete('f_shipper');

                $this->db->where('master_id',$id);
                $this->db->delete('f_pickup_address');

                $this->db->where('master_id',$id);
                $this->db->delete('f_consignee');

                $this->db->where('master_id',$id);
                $this->db->delete('f_delivery_address');

                $this->db->where('master_id',$id);
                $this->db->delete('f_notify_party');

                $this->db->where('master_id',$id);
                $this->db->delete('f_transport');

                $this->db->where('master_id',$id);
                $this->db->delete('f_shipper_vendor');

                $this->db->where('master_id',$id);
                $this->db->delete('f_ordering_customer');

                $this->db->where('master_id',$id);
                $this->db->delete('f_shipping_terms');

                $this->db->where('master_id',$id);
                $this->db->delete('f_transport_details');

                $this->db->where('master_id',$id);
                $this->db->delete('f_shipping_documents');
        }

        function sendNotif($data){
                $this->db->insert('f_notif',$data);
        }

        function selectUser($data){
                $this->db->select('*');
                $this->db->from('user');
        }

        function user_link($id){
                $this->db->select('f_linkto.*, usr.name_pt,usr.level,usr.user_image, usr2.name_pt as name_pt2 ,usr2.level as level2 ,usr2.user_image user_image2');
                $this->db->from('f_linkto');
                $this->db->join('user as usr','f_linkto.user_id = usr.user_id ','left');
                $this->db->join('user as usr2','f_linkto.from_user_id = usr2.user_id ','left');
                $type = $this->session->userdata('type');
                $user_id = $this->session->userdata('user_id');
                if( $type == 'shiper' || $type == 'consignee'){
                  $this->db->where('f_linkto.user_id',$user_id);
                }else if($type == 'superadmin'){
                  $this->db->where('f_linkto.user_id !=',$user_id);
                //   $this->db->or_where('linkFromTo','adminToConsignee');
                }else{

                }
                $this->db->where('f_linkto.master_id',$id);
                return $this->db->get();
        }

          public function newDate ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = 'WIB') {
        if (trim ($timestamp) == '')
        {
                $timestamp = time ();
        }
        elseif (!ctype_digit ($timestamp))
        {
            $timestamp = strtotime ($timestamp);
        }
        $date_format = preg_replace ("/S/", "", $date_format);
        $pattern = array (
            '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
            '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
            '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
            '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
            '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
            '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
            '/April/','/June/','/July/','/August/','/September/','/October/',
            '/November/','/December/',
        );
        $replace = array ( 'Mon','Tue','Wed','Thu','Fri','Sat','Sun',
            'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday',
            'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Aug','Sep','Okt','Nov','Dec',
            'January','February','March','April','June','July','August','September',
            'Oktober','November','December',
        );
        $date = date ($date_format, $timestamp);
        $date = preg_replace ($pattern, $replace, $date);
        $date = "{$date} ";
        return $date;
    } 

        function get_chat_delivery($master_id,$from_user_id,$chat_id,$limit){
                $this->db->select('f_chat_delivery.*, user.name_pt,user.user_image');
                $this->db->from('f_chat_delivery');
                $this->db->join('user','f_chat_delivery.from_user_id = user.user_id ','left');
                $this->db->where('f_chat_delivery.master_id',$master_id);
                $this->db->where('f_chat_delivery.f_chat_id',$chat_id);
                $this->db->order_by('f_chat_delivery.chat_delivery_id','desc');

                $this->db->limit('3');
                
                return $this->db->get();
        }


        function get_file_delivery($master_id,$search,$sortBy){
                $this->db->select('f_chat_delivery.*, user.name_pt,user.user_image');
                $this->db->from('f_chat_delivery');
                $this->db->join('user','f_chat_delivery.from_user_id = user.user_id ','left');
                $this->db->where('f_chat_delivery.master_id',$master_id);
                $this->db->where('f_chat_delivery.type_file !=','');

                $type = $this->session->userdata('type');
                $user_id = $this->session->userdata('user_id');
                if($type == 'superadmin'){
                  $this->db->where('f_chat_delivery.to_user_id',$user_id);
                }else{
 
                }
                if($sortBy != ''){
                  $this->db->where('f_chat_delivery.user_id',$sortBy);
                }

                $this->db->like('f_chat_delivery.file',$search);
               
                return $this->db->get();
        }

        function insert_chat($data){
                $this->db->insert('f_chat_delivery',$data);
        }

      


}
