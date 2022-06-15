<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Absen extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();

        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

   
    }

	public function index($param1 = '', $param2 = '', $param3 = '')
	{
        $id = $this->session->userdata('teacherid');
        if($param2 != ''){
            $data['month'] = $param3;
            $data['section_id'] = $param2;
            $tahun_akademik = $this->db->query("select * from rb_tahun_akademik a where a.aktif='Ya'")->row();
            $tahun = $tahun_akademik->tahun_akademik;
            $subs = substr($tahun, 0, 4);
            // $data_attendance = $this->db->query("select * from enroll a where a.section_id='$section_id' AND SUBSTRING(a.year, 1, 4) = '$subs'");
            // $data['attendance'] = $this->db->query("select * from student a where a.section_id='$param2' AND SUBSTRING(a.year, 1, 4) = '$subs'")->result_array();
            // $attendance = $data_attendance->result_array();
            $data['absens'] = $this->absen_arr($param3, '16', $param2);
            // var_dump();die();
         }else{
            $data['month'] = '';
            $data['section_id'] = 0; 
         }

        // $data['month'] = date('m');
        $data['title'] = "Starstudents";
        $data['folder'] = 'absensi';
        $data['page_name'] = 'view_absensi_new';
        $data['title'] = "Starstudents";
        $data['section'] = $this->absensi_model->get_data_jadwal();        
        $this->load->view('teacher/template/index',$data);		
	}
    
    public function absensi($param1 = '', $param2 = '',$param3 = '')
    {   
         $tahun = $this->db->get_where('rb_tahun_akademik', array('aktif' =>'Ya'))->row('tahun_akademik');

         $data['title'] = "Starstudents";
         $data['tahun'] = $tahun;
        //  $data['main'] = 'admin/Attendance/Attendance_report';
         $data['main'] = 'admin/absen/Attendance_report2';
         $data['class_id'] = $param1;
         $data['section_id'] = $param2;
		 $data['bulan'] = $param3;
		//  var_dump($param2);die();
		 $data['absens'] = $this->absen_arr($param3, $param1, $param2);

         if($param3 == ''){
            $data['bulan'] = date('m');
         }else{
            $data['bulan'] = $param3;
		 }
		 $this->db->where('class_id','16');
		 $this->db->where('section_id','151');
		 $query = $this->db->get('student')->row();
 
         $data['student'] = $query;
        
         $this->load->view('admin/template/index',$data);
    }

	private function absen_arr($bulan, $param1, $param2){
		$result = array();
		$tahun = date("Y");
		if($bulan != NULL){
			$bu = $bulan;
		}else{
			$bu = date("m");
		}
		$max_day = date('t', mktime(0, 0, 0, $bu, 1, $tahun));                                                                    

		// $max_day = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
		$banyak_hari = $max_day;
		
		$this->db->select("student_id");
		$this->db->select("name");
		$this->db->where(array('class_id' => $param1,'section_id' => $param2 ));
		$query = $this->db->get("student");
		$all_student = $query->result_array();
		
		foreach($all_student as $student){
			$row = array();
			$row["nama"] = $student['name'];
			$row["student_id"] = $student['student_id'];
			$row["tgl"] = array();
			$query = "SELECT "
						."SUBSTR(`attendance`.`date_login`,1, 2) AS tgl, "
						."`attendance`.`date_login`, "
						."`attendance`.`time_login`, "
						."`attendance`.`student_id`, "
						."`attendance`.`status` "
					."FROM `attendance` "
					."WHERE "
						."`attendance`.`student_id` = '".$student['student_id']."' "
						."AND `attendance`.date_login LIKE '%".$bulan."-".$tahun."'";
			$sebulan = $this->db->query($query)->result_array();
			
			$tgl_awal = 1;
            $row['time_login'] ='';
            foreach($sebulan as $perhari){ // {07, 10}
				$tgl = ($perhari['tgl']+0);//$this->hilangkan_nol_didepan($perhari['tgl']); //{7,10}
				for($i = $tgl_awal; $i < $tgl; $i++){ // 1,2,3,4,5,6,8,9
					$row["tgl"][$i] = 0; 
					//echo $i.", ";
				}
				$row["tgl"][$i] = $perhari['status'];
				$tgl_awal = $i+1; // 7 + 1 // 10 + 1
                //echo $tgl_awal.", ";
                $row['time_login'] = $perhari["time_login"];
                // var_dump($row);die();
            }
			// 11 < 31 (true)
			if($tgl_awal <= $banyak_hari){
				// $i = 11; 11 <= 31; $++
				for($i = $tgl_awal; $i<= $banyak_hari; $i++){
					$row["tgl"][$i] = 0; 
					//echo $i.", ";
				}
			}
            // $row['date_login'] = $perhari["date_login"];
            $row['total'] = count($row["tgl"]);
			$result[] = $row;
			//echo "<hr>";
		}
		return $result;
	}

}