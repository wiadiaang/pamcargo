<?php
	
	class Getwilayah extends MX_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('m_wilayah', 'gw');
		}

		function index()
		{
			echo "<h3>It's Work</h3>";
		}

		public function getprov() {
		
			$prov = $this->gw->getprov();
			$kd_propinsi = $this->input->post('kd_propinsi');
			
			$data .= "<option value='0'>Select Provinces</option>";
			foreach ($prov as $kk) {
				if ($kd_propinsi==$kk['province_id']) {
			        $cek = "selected";
			    }
			    else {
			        $cek = "";
			    }
			    $data .= "<option value='$kk[province_id]'$cek>$kk[name]</option>";
			}
			echo $data;
		}

		public function getkabkota() {
			$kd_propinsi = $this->input->post('kd_propinsi');
			$kd_kabkota = $this->input->post('kd_kabkota');
			$kabkota = $this->gw->getkabkota($kd_propinsi);
			
			$data .= '<option value="0" >City</option>';
			foreach ($kabkota as $kk) {
			    if ($kk['city_id']==$kd_kabkota) {
			        $cek = "selected";
			    }
			    else {
			        $cek = "";
			    }
			    $data .= "<option value='$kk[city_id]'$cek>$kk[name]</option>";
			}
			echo $data;
		}

		function getkecamatan() {
			
			$kd_propinsi = $this->input->post('kd_propinsi');
			$kd_kabkota = $this->input->post('kd_kabkota');
			$kd_kecamatan = $this->input->post('kd_kecamatan');
			$kecamatan = $this->gw->getkecamatan($kd_kabkota);
			$data .= "<option value='0'>District</option>";
			foreach ($kecamatan as $kec) {
				if ($kec['district_id']==$kd_kecamatan) {
					$cek = "selected";
				}
				else  {
					$cek = "";
				}
				$data .= "<option value='$kec[district_id]' $cek>$kec[name]</option>";
			}
			echo $data;
		}
 

		function getdesa() {
			$kd_propinsi = $this->input->post('kd_propinsi');
			$kd_kabkota = $this->input->post('kd_kabkota');
			$kd_kecamatan = $this->input->post('kd_kecamatan');
			$kd_keldesa = $this->input->post('kd_keldesa');
			$desa = $this->gw->getdesa($kd_kecamatan);
			$data .= "<option value='0'>Village</option>";
			foreach ($desa as $dc) {
				if ($dc['village_id']==$kd_keldesa) {
					$cek = "selected";
				}
				else  { 
					$cek = "";
				}
				$data .= "<option value='$dc[village_id]'$cek>$dc[name]</option>";
			}
			echo $data;
		}
		function getkodepos() {
			$village_id = $this->input->post('village_id');
			
			$data = $this->gw->getkodepos($village_id);
			
			echo $data->postal_code;
		}

		
		function get_map() {
			$a['map'] = $this->input->post('mapnya');
			$this->load->view('templates/maps',$a);
		}

		function provinsi() {
			$kd_propinsi = $this->input->post('kd_propinsi');
			$a = $this->db->query("SELECT * from mp_tbl_propinsi where kd_propinsi = '$kd_propinsi'")->row();
			echo json_encode($a);
		}

		function kabupaten() {
			$kd_propinsi = $this->input->post('kd_propinsi');
			$kd_kabkota = $this->input->post('kd_kabkota');
			$a = $this->db->query("SELECT mp_tbl_kabkota.*,mp_tbl_propinsi.NamaPropinsi from mp_tbl_kabkota 
									left join mp_tbl_propinsi on mp_tbl_kabkota.kd_propinsi = mp_tbl_propinsi.kd_propinsi
									where mp_tbl_kabkota.kd_propinsi = '$kd_propinsi' and mp_tbl_kabkota.kd_kabkota = '$kd_kabkota' ")->row();
			echo json_encode($a);
		}

		function kecamatan() {
			$kd_propinsi = $this->input->post('kd_propinsi');
			$kd_kabkota = $this->input->post('kd_kabkota');
			$kd_kecamatan = $this->input->post('kd_kecamatan');
			$a = $this->db->query("SELECT mp_tbl_kecamatan.*,
										  mp_tbl_propinsi.NamaPropinsi,
										  mp_tbl_kabkota.NamaKabKota 
										  from mp_tbl_kecamatan 
									left join mp_tbl_propinsi on mp_tbl_kecamatan.kd_propinsi = mp_tbl_propinsi.kd_propinsi
									left join mp_tbl_kabkota on mp_tbl_kecamatan.kd_propinsi = mp_tbl_kabkota.kd_propinsi 
															and mp_tbl_kecamatan.kd_kabkota = mp_tbl_kabkota.kd_kabkota
									where mp_tbl_kecamatan.kd_propinsi = '$kd_propinsi' and mp_tbl_kecamatan.kd_kabkota = '$kd_kabkota' and mp_tbl_kecamatan.kd_kecamatan = '$kd_kecamatan' ")->row();
			echo json_encode($a);
		}

		function desa() {
			$kd_propinsi = $this->input->post('kd_propinsi');
			$kd_kabkota = $this->input->post('kd_kabkota');
			$kd_kecamatan = $this->input->post('kd_kecamatan');
			$kd_keldesa = $this->input->post('kd_keldesa');
			$a = $this->db->query("SELECT mp_tbl_keldesa.*,
										  mp_tbl_propinsi.NamaPropinsi,
										  mp_tbl_kabkota.NamaKabKota,
										  mp_tbl_kecamatan.NamaKecamatan as nama_kec
										  from mp_tbl_keldesa 
									left join mp_tbl_propinsi on mp_tbl_keldesa.kd_propinsi = mp_tbl_propinsi.kd_propinsi
									left join mp_tbl_kabkota on mp_tbl_keldesa.kd_propinsi = mp_tbl_kabkota.kd_propinsi and mp_tbl_keldesa.kd_kabkota = mp_tbl_kabkota.kd_kabkota

									left join mp_tbl_kecamatan on mp_tbl_keldesa.kd_propinsi = mp_tbl_kecamatan.kd_propinsi 
																and mp_tbl_keldesa.kd_kabkota = mp_tbl_kecamatan.kd_kabkota 
																and mp_tbl_keldesa.kd_kecamatan = mp_tbl_kecamatan.kd_kecamatan

									where mp_tbl_keldesa.kd_propinsi = '$kd_propinsi' and mp_tbl_keldesa.kd_kabkota = '$kd_kabkota' and mp_tbl_keldesa.kd_kecamatan = '$kd_kecamatan' and mp_tbl_keldesa.kd_keldesa = '$kd_keldesa' ")->row();
			echo json_encode($a);
		}




		

	}


// 