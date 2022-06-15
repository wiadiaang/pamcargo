<?php

	class M_wilayah extends CI_Model {

		function getprov() {
			$result = $this->db->get('province');
			if ($result->num_rows() > 0) {
				return $result->result_array();
			}
			else {
				return array();
			}
		}

		function getkabkota($kd_propinsi) {
			$this->db->where('province_id', $kd_propinsi);
			$this->db->order_by('name');
			$result = $this->db->get('city');
			if ($result->num_rows() > 0) {
				return $result->result_array();
			}
			else {
				return array();
			}
		}

		function getkecamatan($kd_kabkota) {
			$this->db->where('city_id', $kd_kabkota);
			$this->db->order_by('name');
			$result = $this->db->get('district');
			if ($result->num_rows() > 0) {
				return $result->result_array();
			}
			else {
				return array();
			}
		}

		function getdesa($kd_kecamatan) {
			$this->db->where('district_id', $kd_kecamatan);
			$this->db->order_by('name');
			$result = $this->db->get('village');
			if ($result->num_rows() > 0) {
				return $result->result_array();
			}
			else {
				return array();
			}
		}

		function getkodepos($desa) {
			$this->db->where('village_id', $desa);
			$this->db->from('village');
			$query = $this->db->get();
			return $query->row();
			
		}

	
		
	}

?>