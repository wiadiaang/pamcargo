<?php

	class M_login extends CI_Model {

		function login($email, $password) {
			$this->db->where('email', $email);
	        $this->db->where('password', $password);
	        $query = $this->db->get('pam_user');

	        return $query->row_array();
		}

		function select_user_email($email, $password) {
			$this->db->select('*');
			$this->db->from('pam_user');
			$this->db->where('email', $email); 
	        $this->db->where('password', $password);


			return $this->db->get();
		}

		
		function pagin($num, $offset)		{
		
		$query = $this->db->get("tbl_galeri",$num, $offset);
		return $query->result();
		
		}
	}

?>