<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends MX_Controller {

    public function __construct() 
		{
			parent::__construct();
			 $this->load->library('session');
			 $this->load->model('m_schedule');
			 $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));

			 $id = $this->session->userdata('user_id');
			 if( $id == ''){
				redirect(base_url('auth'));
			 }
		}

	public function index()
	{
		$this->load->view('data/schedule/schedule');
	}

	public function ajax_list(){
		$list = $this->m_schedule->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $key) {
			$button = "<a href='javascript:void(0)'  onClick='update(".$key->schedule_id.")' title='Edit' class='btn btn-xs btn-primary'> Update</a>
			<a href='javascript:void(0)' onClick='deletes(".$key->schedule_id.")' title='Delete' class='btn btn-xs btn-danger'>Delete</a>";
			$no++;
			$row = array(); 
            $row[] = $no;
            $row[] = $key->departure_name;            
            $row[] = $key->arrive_name;            
            $row[] = $key->via_name;            
            $row[] = $key->feeder_vessel_name;            
            $row[] = $key->mother_vessel_name;            
			$row[] = $button;
			$data[] = $row;
		}
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_schedule->count_all(),
						"recordsFiltered" => $this->m_schedule->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	
	public function form($id = ''){
		$data['id'] = $id;
		$data['schedule'] = $this->db->query("SELECT * FROM schedule where schedule_id = '$id' ")->row();
		$this->load->view('admin/data/schedule/form',$data);
    }
    
	public function save_schedule(){

		$a['departure_id'] = $_POST['departure_id'];
		$a['arrive_id'] = $_POST['arrive_id'];
		$a['via_id'] = $_POST['via_id'];
		$a['feeder_vessel_name'] = $_POST['feeder_vessel_name'];
		$a['feeder_vessel_id'] = $_POST['feeder_vessel_id'];
		$a['voyage_feeder'] = $_POST['voyage_feeder'];
		$a['mother_vessel_name'] = $_POST['mother_vessel_name'];
		$a['mother_vessel_id'] = $_POST['mother_vessel_id'];
		$a['voyage_mother'] = $_POST['voyage_mother'];
		$a['closing_time_for_delivery'] = $_POST['closing_time_for_delivery'];
		$a['etd_departure'] = $_POST['etd_departure'];
		$a['etd_transit_airport'] = $_POST['etd_transit_airport'];
		$a['eta'] = $_POST['eta'];
		$a['transit_time'] = $_POST['transit_time'];
        
		$schedule_id = $_POST['schedule_id'];
		if($schedule_id != ''){
			$this->db->where('schedule_id',$schedule_id);
			$this->db->update('schedule',$a);
		}else{
			$this->db->insert('schedule',$a);
		}

	}

	function delete_data(){
		$id = $_POST['id'];
		// $que = $this->db->query("SELECT * FROM schedule where schedule = '$id' ")->row();
		// $path ="./assets/dash/files/schedule/".$que->image_thumbnail;
		// unlink($path);

		$this->db->where('schedule_id',$id);
		$this->db->delete('schedule');
	}
	
	function get_schedule(){
		$id = $_POST['schedule_id'];
		$data = $this->db->query("SELECT * FROM shedule where schedule_id = '$id' ")->row();
		echo json_encode($data);

	}
	public function upload_excel(){
		$config['upload_path'] = './assets/';
		$config['allowed_types'] = 'xls|xlsx';
		$departure_id = $_POST['departure_id'];
		$this->upload->initialize($config);
        $this->load->library('upload');
        if(!$this->upload->do_upload('image')) {
          
        }else{
			
				$pathFile = './assets/'.$this->upload->file_name;
				try {
					$inputFileType = IOFactory::identify($pathFile);
					$objReader = IOFactory::createReader($inputFileType);
					$objPHPExcel = $objReader->load($pathFile);
				} catch(Exception $e) {
					die('Error loading file "'.pathinfo($pathFile,PATHINFO_BASENAME).'": '.$e->getMessage());
				}
				$sheet = $objPHPExcel->getSheet(0);
				$highestRow = $sheet->getHighestRow();
				$highestColumn = $sheet->getHighestColumn();
				for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array                 
					$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
													NULL,
													TRUE,
													FALSE);
					 $data = array(
						"departure_id"=> $departure_id,
						"feeder_vessel_name"=> $rowData[0][0],
						"voyage_feeder"=> $rowData[0][1],
						"mother_vessel_name"=> $rowData[0][2],
						"voyage_mother"=> $rowData[0][3],
						"cfs_closing"=> $rowData[0][4],
						"closing_time_for_delivery"=> $rowData[0][5],
						"time"=> $rowData[0][6],
						"etd_departure"=> $rowData[0][7],
						"etd_transit_airport"=> $rowData[0][8],
						"eta"=> $rowData[0][9],
						"transit_time"=> $rowData[0][10],
						"eta_us"=> $rowData[0][11],
						"transit_time_us"=> $rowData[0][12]
					);
					$insert = $this->db->insert("schedule",$data);
				}

		}

	

	}
	

    
}