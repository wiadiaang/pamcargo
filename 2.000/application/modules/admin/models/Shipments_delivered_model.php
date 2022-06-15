<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Shipments_delivered_model extends CI_Model
{
	public $table = 'stt';
    public $id = 'ref_stt';
    public $orders = 'DESC';
    var $column_order = array(null, 'ref_stt','date_stt','type_stt','eta','from_code_main_city','to_code_main_city','shipper_name','shipper_phone'); //set column field database for datatable orderable
    var $column_search = array('ref_stt','date_stt','type_stt','eta','from_code_main_city','to_code_main_city','shipper_name','shipper_phone'); //set column field database for datatable searchable 
    var $order = array('ref_stt' => 'desc'); // default order 
	   	    // insert data
    function get_all()
    {
        $this->db->order_by($this->id, $this->orders);
        return $this->db->get($this->table)->result();
    }

    function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        return $this->db->update($this->table, $data);
    }

	function delete($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->delete($this->table);
    }

    private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
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
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
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
}
?>