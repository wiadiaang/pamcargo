<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery_package extends MX_Controller {

    public function __construct() 
		{
			parent::__construct();
			 $this->load->library('session');
			 $this->load->model('m_delivery');
			 $id = $this->session->userdata('user_id');
			 if( $id == ''){
				redirect(base_url('auth'));
			 }
		}

	public function index()
	{
		$this->load->view('data/delivery_package/delivery_package');
	}

	public function send_to_email(){
		$id = $_POST['id'];
		$email = $_POST['email'];
		$a['email'] = $_POST['email'];
		$a['create_date'] = date('Y-m-d H:i:s'); 

		$data = $this->db->query("select pam_shipment.*,pam_shipment_desc.*,pam_shipment_vfd.*,ori_c.country_name as ori, dest_c.country_name as dest
		from pam_shipment 
			left join pam_shipment_desc on pam_shipment.shipment_id = pam_shipment_desc.document_number_id
			left join pam_shipment_vfd on pam_shipment.shipment_id = pam_shipment_vfd.document_number_id
			left join apps_countries as ori_c on pam_shipment.origin = ori_c.country_code
			left join apps_countries as dest_c on pam_shipment.destination = dest_c.country_code
			where pam_shipment.shipment_id = '$id'")->row();

			$conv = $this->db->query("select pam_shipment_conversation.*
			from pam_shipment_conversation 
				where pam_shipment_conversation.document_number_id = '$id' ")->result();

			$html1 = '<div style="background-color: #f7f4f4;
				padding: 25px;
				border-top: 2px solid #4cdf87;
				box-shadow: 10px -4px 19px -12px rgba(0,0,0,0.75); 
				margin: 20px 10px;">
				<img src="https://pamcargo.com/img/logo.png" height="50" width="200">
				<hr style="border-top: 2px solid green;">
				<span style="font-weight: 700; color: green;">PAM CARGO INTERNATIONAL FREIGHT.</span>
				<h4 style="font-weight: 800"><b>Hi, '.$email.'</b></h4>
		
				<h4 style="
					font-weight: 600;
					color: #1b1b1b;">You got shipment from '.$this->session->userdata('email').' <br></h4>
				<h4 style="text-align: center;">SHIPMENT '.$data->method.'</h4>
				<center>
		
					<div style=" margin: 10px;
					display: inline-block;
					position: relative;
					width: 30%;
					padding: 20px;
					min-height: 80px;
					border: 1px solid #eee;
					border-top: 4px solid #2a4c98;
					padding: 20px 25px 10px 10px;
					-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
					box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);">
						<h4><strong>ORIGIN </strong> </h4>
						<hr style="width:100%; border-width:2px">
		
						'.$data->shipper_name.'
						             <div>
						                 <label>'.$data->ori.' </label>
						                 <h5 class="info"> '.$data->origin_code.'</h5>
						             </div>
					</div>
					<div style=" margin: 10px;
					display: inline-block;
					position: relative;
					width: 30%;
					padding: 20px;
					min-height: 80px;
					border: 1px solid #eee;
					border-top: 4px solid #2a4c98;
					padding: 20px 25px 10px 10px;
					-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
					box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);">
						<h4><strong>DESTINATION </strong> </h4>
						<hr style="width:100%; border-width:2px">
		
						'.$data->consignee_name.'
						 <div>
						     <label>'.$data->dest.' </label>
						     <h5 class="info"> '.$data->destination_code.'</h5>
						 </div>
		
					</div>
		
				</center>
		
				<h4 style="text-align: center;">TRACKING INFORMATION</h4>
		
					<div style=" margin: 10px;
					display: inline-block;
					float: left;
					width: 30%;
					margin-left: 16%;
					padding: 20px;
					min-height: 80px;
					border: 1px solid #eee;
					border-top: 4px solid rgb(95, 192, 95);
					padding: 20px 25px 10px 10px;
					-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
					box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);">
						<h4  style="text-align: center;"><strong>TRACE SHIPPING </strong> </h4>
						<hr style="width:100%; border-width:2px">
						<ul style="text-align: left;">';
						
					   foreach($conv as $key ){ 
						$html1 .= '<li style=" padding-bottom: 5px;"><label>'.$key->message.'<br><span
						style="font-size: 12px">'.$key->create_date.'</span></label></li>';
						}
						
						$html1 .= '
						</ul>
						
					</div>
					<div style=" margin: 10px;
					
					display: inline-block;
					width: 30%;
					padding: 20px;
					min-height: 80px;
					border: 1px solid #eee;
					border-top: 4px solid rgb(95, 192, 95);
					padding: 20px 25px 10px 10px;
					-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
					box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);">
						<h4 style="text-align: center;"><strong>DESCRIPTION OF GOODS </strong> </h4>
						<hr style="width:100%; border-width:2px">
		
						<table>
							<tr>
								<td>Carton</td>
								<td>: '.$data->carton.'</td>
							</tr>
							<tr>
								<td>Commodity</td>
								<td>: '.$data->commodity.'</td>
							</tr>
							<tr>
								<td>Gross Weight</td>
								<td>: '.$data->gross_weight.'</td>
							</tr>
							<tr>
								<td>Volume</td>
								<td>: '.$data->volume.'</td>
							</tr>
		
						</table>
		
						<h4 style="text-align: center;"><strong>VESSEL / FLIGHT DETAIL</strong> </h4>
						<hr style="width:100%; border-width:2px">
		
						<table>
							<tr>
								<td>Detail 1</td>
								<td>: '.$data->detail1.'</td>
							</tr>
							<tr>
								<td>Detail 2</td>
								<td>: '.$data->detail2.'</td>
							</tr>
							<tr>
								<td>Detail 3</td>
								<td>: '.$data->detail3.'</td>
							</tr>
							<tr>
								<td>Detail 4</td>
								<td>: '.$data->detail4.'</td>
							</tr>
							<tr>
								<td>Detail 5</td>
								<td>: '.$data->detail5.'</td>
							</tr>
		
						</table>
		
		
			</div>
		
					<h4 style="
					padding-top: 10%;
						font-weight: 600;
						color: #1b1b1b;">Regards, <br><span style="font-weight: 700; color: green;">PAM CARGO INTERNATIONAL
							FREIGHT</span></h4>';

	// 	$html1 = '
	// 	<div style=" margin: 10px;
	// 	display: inline-block;
	// 	position: relative;
	// 	width: 30%;
	// 	padding: 20px;
	// 	min-height: 80px;
	// 	border: 1px solid #eee;
	// 	border-top: 4px solid #2a4c98;
	// 	padding: 20px 25px 10px 10px;
	// 	-webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
	// 	box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);">
    //     <img src="https://pamcargo.com/img/logo.png" height="50" width="200">
    //     <hr style="border-top: 2px solid green;">
    //     <span style="font-weight: 700; color: green;">PAM CARGO INTERNATIONAL FREIGHT.</span>
    //     <h4 style="font-weight: 800"><b>Hi, '.$email.'</b></h4>

    //     <h4 style="
    //         font-weight: 600;
	// 		color: #1b1b1b;">You got shipment from consigneeegermany <br></h4>
    //     <h4 style="text-align: center;">SHIPMENT '.$data->method.'</h4>
    //     <center>

    //         <div style=" margin: 10px;
    //         display: inline-block;
    //         position: relative;
    //         width: 30%;
    //         padding: 20px;
    //         min-height: 80px;
    //         border: 1px solid #eee;
    //         border-top: 4px solid #2a4c98;
    //         padding: 20px 25px 10px 10px;
    //         -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
    //         box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);">
    //             <h4><strong>ORIGIN </strong> </h4>
    //             <hr style="width:100%; border-width:2px">
    //             '.$data->shipper_name.'
    //             <div class="order-item mt-2">
    //                 <label>'.$data->ori.' </label>
    //                 <h5 class="info"> '.$data->origin_code.'</h5>
    //             </div>
    //         </div>
    //         <div style=" margin: 10px;
    //         width: 30%;
	// 		padding: 20px;
	// 		float: left;
    //         min-height: 80px;
    //         border: 1px solid #eee;
    //         border-top: 4px solid #2a4c98;
    //         padding: 20px 25px 10px 10px;
    //         -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
    //         box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);">
    //             <h4><strong>DESTINATION </strong> </h4>
    //             <hr style="width:100%; border-width:2px">
    //             '.$data->consignee_name.'
    //             <div class="order-item mt-2">
    //                 <label>'.$data->dest.' </label>
    //                 <h5 class="info"> '.$data->destination_code.'</h5>
    //             </div>

    //         </div>

    //     </center>

    //     <h4 style="text-align: center;">TRACKING INFORMATION</h4>

    //         <div style=" margin: 10px;
    //         display: inline-block;
    //         float: left;
    //         width: 30%;
    //         margin-left: 16%;
    //         padding: 20px;
    //         min-height: 80px;
    //         border: 1px solid #eee;
    //         border-top: 4px solid rgb(95, 192, 95);
    //         padding: 20px 25px 10px 10px;
    //         -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
    //         box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);">
    //             <h4  style="text-align: center;"><strong>TRACE SHIPPING </strong> </h4>
    //             <hr style="width:100%; border-width:2px">
	// 			<ul style="text-align: left;">

    //                 // <li style=" padding-bottom: 5px;"><label>Goods are delivery to warehouse<br><span
	// 				// 			style="font-size: 12px">2018-10-24 14:05:11</span></label></li>
				
    //             </ul>
                
    //         </div>
    //         <div style=" margin: 10px;
            
    //         display: inline-block;
    //         width: 30%;
    //         padding: 20px;
    //         min-height: 80px;
    //         border: 1px solid #eee;
    //         border-top: 4px solid rgb(95, 192, 95);
    //         padding: 20px 25px 10px 10px;
    //         -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);
    //         box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);">
    //             <h4 style="text-align: center;"><strong>DESCRIPTION OF GOODS </strong> </h4>
    //             <hr style="width:100%; border-width:2px">

    //             <table>
    //                 <tr>
    //                     <td>Carton</td>
    //                     <td>: </td>
    //                 </tr>
    //                 <tr>
    //                     <td>Commodity</td>
    //                     <td>: </td>
    //                 </tr>
    //                 <tr>
    //                     <td>Gross Weight</td>
    //                     <td>: </td>
    //                 </tr>
    //                 <tr>
    //                     <td>Volume</td>
    //                     <td>: </td>
    //                 </tr>

    //             </table>

    //             <h4 style="text-align: center;"><strong>VESSEL / FLIGHT DETAIL</strong> </h4>
    //             <hr style="width:100%; border-width:2px">

    //             <table>
    //                 <tr>
    //                     <td>Detail 1</td>
    //                     <td>: </td>
    //                 </tr>
    //                 <tr>
    //                     <td>Detail 2</td>
    //                     <td>: </td>
    //                 </tr>
    //                 <tr>
    //                     <td>Detail 3</td>
    //                     <td>: </td>
    //                 </tr>
    //                 <tr>
    //                     <td>Detail 4</td>
    //                     <td>: </td>
    //                 </tr>

    //             </table>


    // </div>

    //         <h4 style="
    //         padding-top: 10%;
    //             font-weight: 600;
    //             color: #1b1b1b;">Regards, <br><span style="font-weight: 700; color: green;">PAM CARGO INTERNATIONAL
    //                 FREIGHT</span></h4>
   
       
	// 	';
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
		$this->email->subject("You got a new shipment!");
		$this->email->message($html1);
		$this->email->send();
		echo $this->email->print_debugger();


		// $this->db->insert('pam_subscribe',$a);



	}

	public function ajax_list(){
		$list = $this->m_delivery->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $key) {
			$type = $this->session->userdata('type');
			if($type == "origin"){

				if($key->status_id == '1'){
					$status = "<a href='javascript:void(0)'  onClick='cek_status(".$key->shipment_id.")' title='Detail' class='btn btn-xs btn-default'><i class='fa fa-eye'></i> Detail</a>
					<a href='javascript:void(0)'  onClick='create_status(".$key->shipment_id.")' title='Status' class='btn btn-xs btn-primary'><i class='fa fa-envelope'></i> Status</a>";

					if($key->method == 'SEA AIR'){
						$button = "<a href='javascript:void(0)' onClick='updateStatus(".$key->shipment_id.','.'2'.")' title='Release Shipment' class='btn btn-xs btn-warning'><i class='fa fa-send'></i> Release Shipment</a>
						<a href='javascript:void(0)' onClick='update(".$key->shipment_id.")' title='Edit' class='btn btn-xs btn-primary'> <i class='fa fa-pencil'></i></a>
						<a href='javascript:void(0)' onClick='deletes(".$key->shipment_id.")' title='Delete' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></a>";
					}else{
						$button = "<a href='javascript:void(0)' onClick='updateStatus(".$key->shipment_id.','.'4'.")' title='Release Shipment' class='btn btn-xs btn-warning'><i class='fa fa-send'></i> Release Shipment</a>
						<a href='javascript:void(0)' onClick='update(".$key->shipment_id.")' title='Edit' class='btn btn-xs btn-primary'> <i class='fa fa-pencil'></i></a>
						<a href='javascript:void(0)' onClick='deletes(".$key->shipment_id.")' title='Delete' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></a>";
					}
				
				}else if($key->status_id == '2') {
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Detail' class='btn btn-xs btn-default'><i class='fa fa-eye'></i> Shipment is on the way to DUBAI</a>";
					$button = "";
				}
				else if($key->status_id == '3'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Detail' class='btn btn-xs btn-info'><i class='fa fa-eye'></i> Shipment accepted by DUBAI Office Control</a>";
					$button = "";
				}else if($key->status_id == '4'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Detail' class='btn btn-xs btn-primary'><i class='fa fa-eye'></i> Shipment has send to Consignee</a>";
					$button = "";
				}else if($key->status_id == '5'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Detail' class='btn btn-xs btn-success'><i class='fa fa-eye'></i> Shipment has accepted by Consignee</a>";
					$button = "";
				}


			}else if($type == "transit"){

				if($key->status_id == '1'){
					$status = "<a href='javascript:void(0)'  onClick='cek_status(".$key->shipment_id.")' title='Cek Status' class='btn btn-xs btn-default'><i class='fa fa-eye'></i> Shipment created by origin ".$key->origin."</a>";
					$button = ""; 
				}else if($key->status_id == '2'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Cek Status' class='btn btn-xs btn-warning'><i class='fa fa-eye'></i> Shipment is on the way to DUBAI</a>
					";
					$button = "<a href='javascript:void(0)' onClick='updateStatus(".$key->shipment_id.','.'3'.")' title='Accept Shipment' class='btn btn-xs btn-info'><i class='fa fa-check'></i> Accept Shipment </a>";
				}else if($key->status_id == '3'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Cek Status' class='btn btn-xs btn-info'>Shipment accepted by DUBAI Office Control</a>
					<a href='javascript:void(0)'  onClick='create_status(".$key->shipment_id.")' title='Status' class='btn btn-xs btn-primary'><i class='fa fa-envelope'></i> Status</a>";
					$button = "<a href='javascript:void(0)' onClick='update(".$key->shipment_id.")' title='Edit' class='btn btn-xs btn-primary'> <i class='fa fa-pencil'></i> Edit Detail</a>
					<a href='javascript:void(0)' onClick='updateStatus(".$key->shipment_id.','.'4'.")' title='Release ' class='btn btn-xs btn-primary'><i class='fa fa-send'></i> Release  to consignee</a>";
				}else if($key->status_id == '4'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Cek Status' class='btn btn-xs btn-primary'><i class='fa fa-eye'></i> Shipment has send to Consignee</a>";
					$button = "";
				}else if($key->status_id == '5'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Cek Status' class='btn btn-xs btn-success'><i class='fa fa-eye'></i> Shipment has accepted by Consignee</a>";
					$button = "";
				}

			}else if($type == "consignee"){

				if($key->status_id == '1'){
					$status = "<a href='javascript:void(0)'  onClick='cek_status(".$key->shipment_id.")' title='Edit' class='btn btn-xs btn-default'><i class='fa fa-eye'></i> Shipment created by origin ".$key->origin."</a>";
					$button = "";
				}else if($key->status_id == '2'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Edit' class='btn btn-xs btn-warning'><i class='fa fa-eye'></i> Shipment is on the way to DUBAI</a>";
					$button = "";
				}else if($key->status_id == '3'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Cek Status' class='btn btn-xs btn-info'><i class='fa fa-eye'></i> Shipment accepted by DUBAI Office Control</a>";
					$button = "";
				}else if($key->status_id == '4'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Cek Status' class='btn btn-xs btn-primary'><i class='fa fa-eye'></i> Shipment has send to Consignee</a>";
					$button = "<a href='javascript:void(0)' onClick='updateStatus(".$key->shipment_id.','.'5'.")' title='Accept Shipment' class='btn btn-xs btn-success'><i class='fa fa-check'></i> Accept Shipment </a>";
				}else if($key->status_id == '5'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Cek Status' class='btn btn-xs btn-success'><i class='fa fa-eye'></i> Shipment has accepted by Consignee</a>
					<a href='javascript:void(0)'  onClick='create_status(".$key->shipment_id.")' title='Status' class='btn btn-xs btn-primary'><i class='fa fa-envelope'></i> Status</a>";
					$button = "<a href='javascript:void(0)' onClick='update(".$key->shipment_id.")' title='Edit' class='btn btn-xs btn-primary'> <i class='fa fa-pencil'></i> Edit Detail</a>
					<a href='javascript:void(0)' onClick='send_to_email(".$key->shipment_id.")' title='Send Shiptment' class='btn btn-xs btn-warning'> <i class='fa fa-paper-plane'></i> Send Shiptment</a>";
				}

			}else if($type == "superadmin"){

				if($key->status_id == '1'){
					$status = "<a href='javascript:void(0)'  onClick='cek_status(".$key->shipment_id.")' title='Edit' class='btn btn-xs btn-default'><i class='fa fa-eye'></i> Package created by origin ".$key->origin."</a>";
					$button = "	<a href='javascript:void(0)' onClick='update(".$key->shipment_id.")' title='Edit' class='btn btn-xs btn-primary'> <i class='fa fa-pencil'></i></a>
					<a href='javascript:void(0)' onClick='deletes(".$key->shipment_id.")' title='Delete' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></a>";
				}else if($key->status_id == '2'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Edit' class='btn btn-xs btn-warning'><i class='fa fa-eye'></i> Shipment is on the way to DUBAI</a>";
					$button = "	<a href='javascript:void(0)' onClick='update(".$key->shipment_id.")' title='Edit' class='btn btn-xs btn-primary'> <i class='fa fa-pencil'></i></a>
					<a href='javascript:void(0)' onClick='deletes(".$key->shipment_id.")' title='Delete' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></a>";
				}else if($key->status_id == '3'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Cek Status' class='btn btn-xs btn-info'><i class='fa fa-eye'></i> Package accepted by DUBAI Office Control</a>";
					$button = "	<a href='javascript:void(0)' onClick='update(".$key->shipment_id.")' title='Edit' class='btn btn-xs btn-primary'> <i class='fa fa-pencil'></i></a>
					<a href='javascript:void(0)' onClick='deletes(".$key->shipment_id.")' title='Delete' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></a>";
				}else if($key->status_id == '4'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Cek Status' class='btn btn-xs btn-primary'><i class='fa fa-eye'></i> Package send to Consignee</a>";
					$button = "	<a href='javascript:void(0)' onClick='update(".$key->shipment_id.")' title='Edit' class='btn btn-xs btn-primary'> <i class='fa fa-pencil'></i></a>
					<a href='javascript:void(0)' onClick='deletes(".$key->shipment_id.")' title='Delete' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></a>";
				}else if($key->status_id == '5'){
					$status = "<a href='javascript:void(0)' onClick='cek_status(".$key->shipment_id.")' title='Cek Status' class='btn btn-xs btn-success'><i class='fa fa-eye'></i> Shipment has accepted by Consignee</a>";
					$button = "	<a href='javascript:void(0)' onClick='update(".$key->shipment_id.")' title='Edit' class='btn btn-xs btn-primary'> <i class='fa fa-pencil'></i></a>
					<a href='javascript:void(0)' onClick='deletes(".$key->shipment_id.")' title='Delete' class='btn btn-xs btn-danger'><i class='fa fa-trash'></i></a>";
				}

			}
			
			$no++;
			$row = array(); 
            $row[] = $no;
            $row[] = $key->document_number;            
            $row[] = $key->shipper_name;            
            $row[] = $key->consignee_name;            
            $row[] = $key->origin;            
            $row[] = $key->destination;            
            $row[] = $key->method;            
            $row[] = $status;            
			$row[] = $button;
			$data[] = $row;
		}
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_delivery->count_all(),
						"recordsFiltered" => $this->m_delivery->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function get_country()
    {
        $negara = $this->db->query("SELECT country_code,country_name FROM apps_countries")->result();
		$data .= "<option value=''>-- Select Country --</option>";
		$origin = $_POST['origin'];
			foreach ($negara as $kk) {
				if($origin == $kk->country_code){
					$sel = "selected";
				}else{
					$sel = "";

				}
			    $data .= "<option value='$kk->country_code' $sel >$kk->country_name</option>";
			}
		echo $data;

	}
	public function get_consignee()
    {
        $user = $this->db->query("SELECT * FROM pam_user")->result();
        // $data .= "<option value=''>Consignee</option>";
			foreach ($user as $kk) {
			    $data = "<option value='$kk->user_id'>$kk->name</option>";
			}
		echo $data;

	}
	public function get_airport()
    {
        $air = $this->db->query("SELECT code,airport FROM pam_airport_codes")->result();
        // $data = "<option value=''>Airport</option>";
			foreach ($air as $port) {
			    $data = "<option value='$port->code'>$port->airport</option>";
			}
		echo $data;
		// echo json_encode($air);

    }
	
	public function form($id = ''){
		$data['data'] = $this->db->query("SELECT * FROM pam_shipment where shipment_id = '$id' ")->row();
		$data['document_number'] = $id;
		$this->load->view('admin/data/delivery_package/form',$data);
	}
	
	public function get_shipment(){
		$id = $_POST['document_number'];
		$data = $this->db->query("SELECT * FROM pam_shipment where shipment_id = '$id' ")->row();
		echo json_encode($data);
	}

	public function get_description(){
		$id = $_POST['document_number'];
		$data = $this->db->query("SELECT * FROM pam_shipment_desc where document_number_id = '$id' ")->row();
		echo json_encode($data);
	}
    
	public function get_vfd(){
		$id = $_POST['document_number'];
		$data = $this->db->query("SELECT * FROM pam_shipment_vfd where document_number_id = '$id' ")->row();
		echo json_encode($data);
	}

	public function get_table_status(){
		$id = $_POST['document_number'];
		$a['data'] = $this->db->query("SELECT * FROM pam_shipment_conversation where document_number_id = '$id' order by create_date DESC ")->result();
		$this->load->view('admin/data/delivery_package/table_message',$a);
	}

	public function send_message(){
		$a['document_number_id'] = $_POST['document_number'];
		$a['message'] = $_POST['message'];
		$a['create_date'] = date("Y-m-d H:i:s");
		$a['user_create'] = $this->session->userdata("user_id");
		$a['user_type'] = $this->session->userdata("type");

		$this->db->insert('pam_shipment_conversation',$a);
		echo  $_POST['document_number'];
		
		
	}
	public function delete_message(){
		$conv_id = $_POST['conv_id'];
		$this->db->where('conv_id',$conv_id);
		$this->db->delete('pam_shipment_conversation');
	}

	public function save_delivery_package(){
		$dn = $_POST['document_number'];

        $a['document_number'] = $_POST['document_number'];
        $a['shipper_name'] = $_POST['shipper_name'];
        $a['consignee_name'] = $_POST['consignee_name'];
        $a['origin'] = $_POST['origin'];
        $a['origin_code'] = $_POST['origin_code'];
        $a['destination'] = $_POST['destination'];
        $a['destination_code'] = $_POST['destination_code'];
        $a['method'] = $_POST['method'];
		$a['country'] = $this->session->userdata("origin");
		$a['user_create'] = $this->session->userdata("user_id");
		$a['user_transit'] = '4';
		$a['user_consignee'] = $_POST['consignee_name'];
		$a['status_id'] = '1';
		
        // $b['document_number_id'] = $_POST['document_number'];
		$b['carton'] = $_POST['carton'];
		$b['commodity'] = $_POST['commodity'];
		$b['gross_weight'] = $_POST['gross_weight'];
		$b['volume'] = $_POST['volume'];
		$b['note'] = $_POST['note'];

        // $c['document_number_id'] = $_POST['document_number'];
		$c['detail1'] = $_POST['detail1'];
		$c['detail2'] = $_POST['detail2'];
		$c['detail3'] = $_POST['detail3'];
		$c['detail4'] = $_POST['detail4'];
		$c['detail5'] = $_POST['detail5'];

		$shipment_id = $_POST['shipment_id'];
		if($shipment_id != ''){
			$a['origin_update_pickup_date'] = date('Y-m-d H:i:s');

			$type = $this->session->userdata("type");
			if($type == "origin"){

				$this->db->where('shipment_id',$shipment_id);
				$this->db->update('pam_shipment',$a);
				
				$this->db->where('document_number_id',$shipment_id);
				$this->db->update('pam_shipment_desc',$b);

				$this->db->where('document_number_id',$shipment_id);
				$this->db->update('pam_shipment_vfd',$c);

			}else{

				$this->db->where('document_number_id',$shipment_id);
				$this->db->update('pam_shipment_vfd',$c);

			}
			


		}else{
			$a['origin_create_pickup_date'] = date('Y-m-d H:i:s');
			$res = $this->db->query("select count(document_number) as jml, document_number  from pam_shipment where document_number = '$dn'  ")->row();
			if($res->jml > 0){
				echo "dn";
			}else{
				$this->db->insert('pam_shipment',$a);
				$insert_id = $this->db->insert_id();
				$b['document_number_id'] = $insert_id;
				$c['document_number_id'] = $insert_id;

				$this->db->insert('pam_shipment_desc',$b);
				$this->db->insert('pam_shipment_vfd',$c);
			}
		}

	}


	function delete_data(){
		$id = $_POST['id'];

		$this->db->where('shipment_id',$id);
		$this->db->delete('pam_shipment');

		$this->db->where('document_number_id',$id);
		$this->db->delete('pam_shipment_desc');

		$this->db->where('document_number_id',$id);
		$this->db->delete('pam_shipment_vfd');
	}
		
	function get_status(){
		$dn = $_POST['id'];
		$s = $this->db->query("select pam_shipment.*,pam_shipment_desc.*,pam_shipment_vfd.*
		from pam_shipment 
			left join pam_shipment_desc on pam_shipment.shipment_id = pam_shipment_desc.document_number_id
			left join pam_shipment_vfd on pam_shipment.shipment_id = pam_shipment_vfd.document_number_id
			where pam_shipment.shipment_id = '$dn'")->row();
		// $sa = $this->db->query("select pam_shipment.*,
		// usr1.name as shipper,
		// usr2.name as transiter,
		// usr3.name as consignee,
		// usr1.address as add_shipper,
		// usr2.address as add_transiter,
		// usr3.address as add_consignee 
		// from pam_shipment 
		// 	left join pam_user as usr1 on usr1.user_id = pam_shipment.user_create
		// 	left join pam_user as usr2 on usr2.user_id = pam_shipment.user_transit
		// 	left join pam_user as usr3 on usr3.user_id = pam_shipment.user_consignee
		// 	where pam_shipment.document_number = '$dn'")->row();
		// $data = $this->tgl_indo($s->origin_create_pickup_date);
		echo json_encode($s);
	}

	function change_status(){
		$id = $_POST['id'];
		$status_id = $_POST['status_id'];
		$a['status_id'] = $status_id;
		if($status_id == "2"){
			$a['origin_send_package_date'] = date("Y-m-d H:i:s");
		}else if($status_id == "3"){
			$a['transit_process_package_date'] = date("Y-m-d H:i:s");
		}else if($status_id == "4"){
			$a['transit_send_package_date'] = date("Y-m-d H:i:s");
		}else if($status_id == "5"){
			$a['consignee_received_date'] = date("Y-m-d H:i:s");
		}

		 $this->db->where('shipment_id',$id);
		 $this->db->update('pam_shipment',$a);
		
	}


	public function get_conversation(){
		$document_number_id = $_POST['document_number_id'];
		$a['data'] = $this->db->query("SELECT * FROM pam_shipment_conversation where document_number_id = '$document_number_id' order by create_date ASC ")->result();
		$this->load->view("admin/data/delivery_package/conversation",$a);
	}

	function tgl_indo($tanggal){
		$bulan = array (
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$pecahkan = explode('-', $tanggal);
		
		// variabel pecahkan 0 = tahun
		// variabel pecahkan 1 = bulan
		// variabel pecahkan 2 = tanggal
	
		return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}

    
}