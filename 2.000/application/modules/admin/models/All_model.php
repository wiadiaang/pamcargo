<?php
class All_model extends CI_Model{

    function updateNotif($id){
        $a['status']='1';
        $this->db->where('notif_id',$id);
        $this->db->update('f_notif',$a);
    }


}