<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model
{
	public function login($username,$password)
	{
				$this->db->where('email',$username);
				$this->db->where('password',md5($password));
		$query = $this->db->get('user');
		return $query;
	}
	   	
}
?>