<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function index()
	{
		$a['offices'] = $this->db->query("SELECT * FROM pam_offices limit 3")->result(); 
		$a['news'] = $this->db->query("SELECT * FROM pam_news where active = '1' order by news_id DESC limit 3")->result(); 

		$a['slider'] = $this->db->query("SELECT * FROM pam_slider order by no_order asc")->result(); 
		$this->load->view('home',$a);
	}

	public function getRegion()
	{
		$country_id = $this->input->post('country_id');
		$a = $this->db->query("SELECT * FROM departure where country_id = $country_id and active = '1' order by departure_name ASC  ")->result(); 
		echo json_encode($a);
	}
	public function about_us(){
		$a['about'] = $this->db->query("SELECT * FROM pam_about where about_id ='1'")->row(); 
		$this->load->view('home/about-us',$a);
		
	}
	public function sea_air_service(){
		$a['data'] = $this->db->query("SELECT * FROM pam_sea_air  where sas_id ='1'")->row(); 
		$this->load->view('sea-air-service',$a);
		
	}
	public function air_freight_service(){
		$a['data'] = $this->db->query("SELECT * FROM pam_air_freight  where sas_id ='1'")->row(); 
		$this->load->view('air-freight-service',$a);

	}
	public function sea_freight_service(){
		$a['data'] = $this->db->query("SELECT * FROM pam_sea_freight  where sas_id ='1'")->row(); 
		$this->load->view('sea-freight-service',$a);

	}
	public function ad_hoc_charter_service(){
		$a['data'] = $this->db->query("SELECT * FROM pam_ad_hoc_charter  where sas_id ='1'")->row(); 
		$this->load->view('ad-hoc-charter-service',$a);

	}
	public function road_transport(){
		$a['data'] = $this->db->query("SELECT * FROM pam_road_transport  where sas_id ='1'")->row(); 
		$this->load->view('road-transport',$a);

	}
	public function custom_clearence(){
		$a['data'] = $this->db->query("SELECT * FROM pam_custom_clearance  where sas_id ='1'")->row(); 
		$this->load->view('custom-clearance',$a);

	}
	public function warehousing(){
		$a['data'] = $this->db->query("SELECT * FROM pam_warehouse  where sas_id ='1'")->row(); 
		$this->load->view('warehousing',$a);

	}
	public function monthly_schedule(){
		$this->load->view('monthly-schedule');

	}
	public function schedule_query(){
		$this->load->view('schedule-query');

	}
	public function schedule_query_result(){
		if(isset($_POST['departure_id']) == ""){
			redirect(base_url('schedule-query')); 

		}
		$departure_id = $_POST['departure_id'];
		$a['departure_id'] = $departure_id;
		$a['departure'] = $this->db->query("SELECT * FROM departure WHERE departure_id = $departure_id ")->row();
		$a['schedule'] = $this->db->query("SELECT * FROM schedule WHERE departure_id = $departure_id AND transit_time !='' ")->result_array();
		$this->load->view('schedule-query-result',$a);

	}

	public function rate_request(){
		$this->load->view('rate-request');

	}

	public function news(){
		$a['data'] = $this->db->query("SELECT * FROM pam_news where active = '1' order by news_id DESC")->result(); 
		$this->load->view('news',$a);

	}

	public function news_detail($url){
		$que = $this->db->query("SELECT * FROM pam_news where url = '$url' ")->row();
		$a['data'] = $que;
		$a['url'] = $url;

		if(!$que){
			redirect(base_url('home'));
		}else{
			$this->load->view('news_detail',$a);
		}


	}
	public function offices(){
		$a['data'] = $this->db->query("SELECT * FROM pam_offices ")->result(); 
		$this->load->view('offices',$a);

	}
	public function agents(){
		$a['data'] = $this->db->query("SELECT * FROM pam_agents ")->result(); 

		$this->load->view('agents',$a);

	}
	public function contact_us(){
		$this->load->view('contact-us');

	}

	public function not_found(){
		$this->load->view('not-found');

	}

	public function get_track_trace(){
		$no_delivery = $_POST['no_delivery'];
		$que = $this->db->query("select pam_shipment.*,pam_shipment_desc.*,pam_shipment_vfd.*,ori_c.country_name as ori, dest_c.country_name as dest
		from pam_shipment 
			left join pam_shipment_desc on pam_shipment.shipment_id = pam_shipment_desc.document_number_id
			left join pam_shipment_vfd on pam_shipment.shipment_id = pam_shipment_vfd.document_number_id
			left join apps_countries as ori_c on pam_shipment.origin = ori_c.country_code
			left join apps_countries as dest_c on pam_shipment.destination = dest_c.country_code
			where pam_shipment.document_number = '$no_delivery' ")->row();
		
		if(!$que){
			echo "null";
		}else{
			$que2 = $this->db->query("select pam_shipment_conversation.*
			from pam_shipment_conversation 
				where pam_shipment_conversation.document_number_id = '$que->shipment_id' ")->result();
			$a['data'] = $que;
			$a['conv'] = $que2;
			$this->load->view("home/track_trace_result",$a);
		}
		
	}


//  RATE REQUEST===========================================================================

	public function send_rate(){
		$contact_name = $_POST['contact_name'];
		$contact_phone	 = $_POST['contact_phone'];
		$contact_email	 = $_POST['contact_email'];
		$contact_company = $_POST['contact_company'];
		$contact_company_phone = $_POST['contact_company_phone'];
		$contact_company_location	= $_POST['contact_company_location'];
		$incoterm	= $_POST['incoterm'];
		$weight = $_POST['weight'];
		$volume= $_POST['volume'];
		$commodity	= $_POST['commodity'];
		$width	= $_POST['width'];
		$height = $_POST['height'];
		$length = $_POST['length'];
		$pieces = $_POST['pieces'];
		$origin = $_POST['origin'];
		$destination = $_POST['destination'];
		$via = $_POST['via'];
		$date = $_POST['date'];
		$address = $_POST['address'];
		$remark = $_POST['remark'];
		
		$a['contact_name'] = $_POST['contact_name'];
		$a['contact_phone']	 = $_POST['contact_phone'];
		$a['contact_email']	 = $_POST['contact_email'];
		$a['contact_company'] = $_POST['contact_company'];
		$a['contact_company_phone']	= $_POST['contact_company_phone'];
		$a['contact_company_location']	= $_POST['contact_company_location'];
		$a['incoterm']	= $_POST['incoterm'];
		$a['weight'] = $_POST['weight'];
		$a['volume']= $_POST['volume'];
		$a['commodity']	= $_POST['commodity'];
		$a['width']	= $_POST['width'];
		$a['height']= $_POST['height'];
		$a['length']= $_POST['length'];
		$a['pieces']= $_POST['pieces'];
		$a['origin']= $_POST['origin'];
		$a['destination']= $_POST['destination'];
		$a['via']= $_POST['via'];
		$a['date']	= $_POST['date'];
		$a['address']= $_POST['address'];
		$a['remark']= $_POST['remark'];

		$insert = $this->db->insert('rate_request',$a);
			
		$config['mailtype'] = 'html';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] = 'info.pamcargo@gmail.com';
		$config['smtp_pass'] = 'pamcargo123';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n"; 
		$config['validation'] = TRUE;
		
		$email = $_POST['contact_email'];

		$html1 = '
		<div style="background-color: #f7f4f4;
		padding: 25px;
		border-top: 2px solid #4cdf87;
		box-shadow: 10px -4px 19px -12px rgba(0,0,0,0.75);
		margin: 20px 10px;">
			<img src="https://pamcargo.com/img/logo.png" height="50" width="200" >
			<hr style="border-top: 2px solid green;">
			<h4 style="font-weight: 800"><b>Hi, '.$email.' </b></h4>
			<h4 style="
            font-weight: 600;
            color: #1b1b1b;">Thank you for submitting rate request. We will contact you soon.</h4>
			<h4 style="
            font-weight: 600;
            color: #1b1b1b;">Regards, <br><span style="font-weight: 700; color: green;">PAM CARGO INTERNATIONAL FREIGHT</span></h4>
		</div>
		';
		$html2 = '
		<div style="background-color: #f7f4f4;
		padding: 25px;
		border-top: 2px solid #4cdf87;
		box-shadow: 10px -4px 19px -12px rgba(0,0,0,0.75);
		margin: 20px 10px;">
			<img src="https://pamcargo.com/img/logo.png" height="50" width="200" >
			<hr style="border-top: 2px solid green;">
			<h4 style="font-weight: 800; font-size: 24px;">Hello, <span style="font-weight: 700; color: green; font-size: 25px">PAM CARGO INTERNATIONAL FREIGHT</span></h4>
			
			<h4 style="
            font-weight: 800;
			color: #1b1b1b; font-size: 22px;">Customer Send Rate Request, Check it Out </h4>
			
			<h4 style="
            font-weight: 800;
			color: #1b1b1b; font-size: 22px;">Contact Information </h4>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Name : <span style="font-weight:800; font-size: 16px;"> '.$contact_name.' </span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Company Name : <span style="font-weight:800; font-size: 16px;">'.$contact_company.'</span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Phone Number : <span style="font-weight:800; font-size: 16px;">'.$contact_phone.'</span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Company Phone Number : <span style="font-weight:800; font-size: 16px;">'.$contact_company_phone.'</span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">E-mail : <span style="font-weight:800; font-size: 16px;">'.$contact_email.'</span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Company Country : <span style="font-weight:800; font-size: 16px;">'.$contact_company_location.'</span></p>

			<h4 style="
            font-weight: 800;
			color: #1b1b1b; font-size: 22px;">Shipment Information </h4>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Incoterm : <span style="font-weight:800; font-size: 16px;"> '.$incoterm.' </span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Weight : <span style="font-weight:800; font-size: 16px;"> '.$weight.' </span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Volume : <span style="font-weight:800; font-size: 16px;"> '.$volume.' </span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Comodity : <span style="font-weight:800; font-size: 16px;"> '.$commodity.' </span></p>

			<h4 style="
            font-weight: 800;
			color: #1b1b1b; font-size: 22px;">Measurement </h4>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Width : <span style="font-weight:800; font-size: 16px;"> '.$width.' </span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Height : <span style="font-weight:800; font-size: 16px;"> '.$height.' </span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Length : <span style="font-weight:800; font-size: 16px;"> '.$length.' </span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Pieces : <span style="font-weight:800; font-size: 16px;"> '.$pieces.' </span></p>

			<h4 style="
            font-weight: 800;
			color: #1b1b1b; font-size: 22px;">Route </h4>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Origin : <span style="font-weight:800; font-size: 16px;"> '.$origin.' </span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Destination : <span style="font-weight:800; font-size: 16px;"> '.$destination.' </span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Via : <span style="font-weight:800; font-size: 16px;"> '.$via.' </span></p>

			<h4 style="
            font-weight: 800;
			color: #1b1b1b; font-size: 22px;">Misc </h4>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Ready Date : <span style="font-weight:800; font-size: 16px;"> '.$date.' </span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Delivery Address : <span style="font-weight:800; font-size: 16px;"> '.$address.' </span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Remark : <span style="font-weight:800; font-size: 16px;"> '.$remark.' </span></p>

		</div>
		';
		$this->load->library('email',$config);  
		$this->email->initialize($config);
		$this->email->from('info.pamcargo@gmail.com','PAM CARGO');
		$this->email->to($email);
		$this->email->subject("Your Form Has Been Submitted !");
		$this->email->message($html1);
		$this->email->send();
		echo $this->email->print_debugger();

		$admin_email = "info@pamcargo.com, thomas@pamcargo.com";
		$this->load->library('email',$config);  
		$this->email->initialize($config);
		$this->email->from('info.pamcargo@gmail.com','PAM CARGO');
		$this->email->to($admin_email);
		$this->email->subject("Customer Send Rate Request, Check it Out");
		$this->email->message($html2);
		$this->email->send();
		echo $this->email->print_debugger();




	}
	


//  CONTACT US===========================================================================

	public function send_message(){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$message = $_POST['message'];
		$phone = $_POST['phone'];

		$a['first_name'] = $first_name;
		$a['last_name'] = $last_name;
		$a['email'] = $_POST['email'];
		$a['phone'] = $_POST['phone'];
		$a['message'] = $message;
		$a['create_date'] = date('Y-m-d H:i:s');
		$this->db->insert('pam_contact_us',$a);

		$config['mailtype'] = 'html';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] = 'info.pamcargo@gmail.com';
		$config['smtp_pass'] = 'pamcargo123';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n"; 
		$config['validation'] = TRUE;

		$email = $_POST['email'];

		$html1 = '
		<div style="background-color: #f7f4f4;
		padding: 25px;
		border-top: 2px solid #4cdf87;
		box-shadow: 10px -4px 19px -12px rgba(0,0,0,0.75);
		margin: 20px 10px;">
			<img src="https://pamcargo.com/img/logo.png" height="50" width="200" >
			<hr style="border-top: 2px solid green;">
			<h4 style="font-weight: 800"><b>Hi, '.$email.' </b></h4>
			<h4 style="
            font-weight: 600;
            color: #1b1b1b;">Thank you for contact us. We will reply immediately.</h4>
			<h4 style="
            font-weight: 600;
            color: #1b1b1b;">Regards, <br><span style="font-weight: 700; color: green;">PAM CARGO INTERNATIONAL FREIGHT</span></h4>
		</div>
		';

		$html2 = '
		<div style="background-color: #f7f4f4;
		padding: 25px;
		border-top: 2px solid #4cdf87;
		box-shadow: 10px -4px 19px -12px rgba(0,0,0,0.75);
		margin: 20px 10px;">
			<img src="https://pamcargo.com/img/logo.png" height="50" width="200" >
			<hr style="border-top: 2px solid green;">
			<h4 style="font-weight: 800; font-size: 24px;">Hello, <span style="font-weight: 700; color: green; font-size: 25px">PAM CARGO INTERNATIONAL FREIGHT</span></h4>
			<h4 style="
            font-weight: 800;
			color: #1b1b1b; font-size: 22px;">You Got A Message From, </h4>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Name : <span style="font-weight:800; font-size: 16px;"> '.$first_name.' '.$last_name.' </span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">E-mail : <span style="font-weight:800; font-size: 16px;">'.$email.'</span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Phone Number : <span style="font-weight:800; font-size: 16px;">'.$phone.'</span></p>
			<p style="color: #1b1b1b;  margin: 0; font-size: 19px;">Message : <br> <span style="font-size: 16px;">'.$message.'</span></p>
			
		</div>
		';


		$this->load->library('email',$config);  
		$this->email->initialize($config);
		$this->email->from('info.pamcargo@gmail.com','PAM CARGO');
		$this->email->to($email);
		$this->email->subject("Thank you for Contact Us");
		$this->email->message($html1);
		$this->email->send();
		echo $this->email->print_debugger();

		$admin_email = "info@pamcargo.com, thomas@pamcargo.com";
		$this->load->library('email',$config);  
		$this->email->initialize($config);
		$this->email->from('info.pamcargo@gmail.com','PAM CARGO');
		$this->email->to($admin_email);
		$this->email->subject("You Got A New Message!");
		$this->email->message($html2);
		$this->email->send();
		echo $this->email->print_debugger();

	}



//  SUBSCRIBE===========================================================================
	public function send_subscribe(){
		$email = $_POST['email'];

		$admin_email = "info@pamcargo.com, thomas@pamcargo.com";
		$a['email'] = $_POST['email'];
		$a['create_date'] = date('Y-m-d H:i:s'); 

		$html1 = '
	
		<div style="background-color: #f7f4f4;
		padding: 25px;
		border-top: 2px solid #4cdf87;
		box-shadow: 10px -4px 19px -12px rgba(0,0,0,0.75);
		margin: 20px 10px;">
			<img src="https://pamcargo.com/img/logo.png" height="50" width="200" >
			<hr style="border-top: 2px solid green;">
			<h4 style="font-weight: 800"><b>Hi, </b></h4>
			<h4 style="
            font-weight: 600;
            color: #1b1b1b;">Thank you for subscribe to <span style="font-weight: 700; color: green;">PAM CARGO INTERNATIONAL FREIGHT.</span><br><br> We will send you new information about our news when a new post is made.</h4>
			<h4 style="
            font-weight: 600;
            color: #1b1b1b;">Regards, <br><span style="font-weight: 700; color: green;">PAM CARGO INTERNATIONAL FREIGHT</span></h4>
		</div>
		';
		$html2 = '<div style="background-color: #f7f4f4;
		padding: 25px;
		border-top: 2px solid #4cdf87;
		box-shadow: 10px -4px 19px -12px rgba(0,0,0,0.75);
		margin: 20px 10px;">
			<img src="https://pamcargo.com/img/logo.png" height="50" width="200" >
			<hr style="border-top: 2px solid green;">
			<h4 style="font-weight: 800">Hello, <span style="font-weight: 700; color: green;">PAM CARGO INTERNATIONAL FREIGHT</span></h4>
			<h4 style="
            font-weight: 800;
            color: #1b1b1b; font-size: 34px;">You Got A New Subscriber from '.$email.'</h4>
		</div>
		';
		$config['mailtype'] = 'html';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '7';
		$config['smtp_user'] = 'info.pamcargo@gmail.com';
		$config['smtp_pass'] = 'pamcargo123';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n"; 
		$config['validation'] = TRUE;
		
		$this->load->library('email',$config);  
		$this->email->initialize($config);
		$this->email->from('info.pamcargo@gmail.com','PAM CARGO');
		$this->email->to($email);
		$this->email->subject("Thank you for subscribe PAM CARGO");
		$this->email->message($html1);
		$this->email->send();
		echo $this->email->print_debugger();

		$this->load->library('email',$config);  
		$this->email->initialize($config);
		$this->email->from('info.pamcargo@gmail.com','PAM CARGO');
		$this->email->to($admin_email);
		$this->email->subject("New Subscriber");
		$this->email->message($html2);
		$this->email->send();
		echo $this->email->print_debugger();

		$this->db->insert('pam_subscribe',$a);

	}


	public function track_and_trace(){
		$this->load->view('home/track_trace');
	}
	


}
