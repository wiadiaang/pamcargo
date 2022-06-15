<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	var $table = 'pam_user';
	var $column = array('pam_user.email'); 
	var $order = array('user_id' => 'desc');

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	} 

	private function _get_datatables_query()
	{
		$this->db->from($this->table);
		$this->db->select("pam_user.*
		");
		// $this->db->like('pam_user.type','news');
		// $this->db->where('pam_user.type','uploader');
		// $this->db->where('type','uploader');
		$status= array('news', 'uploader');
		$this->db->or_where_in('pam_user.type', $status);

		$i = 0;

		foreach ($this->column as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND. 
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$column[$i] = $item; // set column array variable to order processing
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
                 }
        

        $type = $this->session->userdata('type');
      
		
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('slider_id',$id);
		$query = $this->db->get();
		return $query->row();
        }
       
      


}
