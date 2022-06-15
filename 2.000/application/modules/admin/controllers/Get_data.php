<?php
	
	class Get_data extends MX_Controller {

		function __construct()
		{
			parent::__construct();
		}

		function index()
		{
			echo "<h3>It's Work</h3>";
		}

		public function get_consignee() {
			$id = $this->input->post('id');
		
            $data = $this->db->query("select * from user where user_id = '$id' ")->row();
            
            echo json_encode($data);
			
		}

		public function get_origin() {
			$country = $this->session->userdata('country');
		
            $data = $this->db->query("select name_pt from user where country = '$country' and level = 'admin' ")->row();
            
            echo json_encode($data);
			
		}


		

	}


// 