<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Order_model extends CI_Model
{
	public function barang()
	{
        $query = $this->db->get('goods');
        return $query->result();
	}

	   	
}
?>