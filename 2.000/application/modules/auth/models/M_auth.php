<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_auth extends CI_Model
{
	public function login($username,$password)
	{
				$this->db->where('email',$username);
				$this->db->where('password',md5($password));
		$query = $this->db->get('user');
		return $query;
	}

	function sendNotif($user_id){
		$a['title'] = 'New user shipper';
		$a['text'] = '';
		$a['user_id'] = $user_id;
		$a['url'] = 'https://express.rembon.co.id/admin/User_shipper';
		$a['status'] = '0';
		$a['created_dated'] = time();
		$this->db->insert('f_notif',$a);
	}
	   	
}
?>