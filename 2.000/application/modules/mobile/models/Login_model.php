<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login_model extends CI_Model
{
	public function get_login($username,$password)
	{
		$query = $this->db->query("SELECT * FROM user WHERE email='$username' AND password='$password' ");
		return $query;
		// var_dump($query);

		/*echo $username;
		echo $password;*/
	}

	   	
}
?>