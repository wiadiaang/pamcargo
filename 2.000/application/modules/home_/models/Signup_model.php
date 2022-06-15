<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Signup_model extends CI_Model
{
	public function provinsi()
	{
		$query = $this->db->get('province');
		return $query->result();
    }
    
    public function kelurahan($id)
    {
        $this->db->where('village_id',$id);
        $query = $this->db->get('village');
		return $query->row();
    }

    public function signup($data)
    {
        $this->db->insert('user',$data);
    }
	   	
}
?>