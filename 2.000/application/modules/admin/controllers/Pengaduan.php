<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengaduan extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();

        if($this->session->userdata('type') != 'admin'){
            
             redirect(base_url());
        }

   
    }

    public function index()
    {   
         $this->db->order_by("pengaduan_id","DESC");
         $data['pengaduan'] = $this->db->get('pengaduan')->result();
         $data['title'] = "Help Desk";
         $data['main'] = "admin/pengaduan/index";
    	 $this->load->view('admin/template/index',$data);
    }

    public function detail($id)
    {
        
        $row = $this->db->get_where("pengaduan",array("pengaduan_id"=>$id))->row();
        $user = $this->db->get_where("user",array("user_id"=>$row->operator_id))->row();
        $rows = $this->db->get_where("jawaban",array("pengaduan_id"=>$id))->row();
        $data = array(
            "page"=>"Detail Pertanyaan",
            "row"=>$row,
            "rows"=>$rows,
            "user"=>$user,
            "id"=>$id,
        );
        
        $data['title'] = "Help Desk";
        $data['main'] = "admin/pengaduan/detail";
        $this->load->view('admin/template/index',$data);
    }

    public function export_pengaduan()
    {
        $date = $this->input->post('datefrom');
        $date2 = $this->input->post('dateto');
        $this->db->select('pengaduan.*,user.nama,opd.nama_opd,jawaban.jawaban,status.status,jawaban.datetime as dates');
        $this->db->from('pengaduan');
        $this->db->join('user','user.user_id = pengaduan.user_id','left');
        $this->db->join('opd','opd.opd_id = pengaduan.opd_id','left');
        $this->db->join('jawaban','jawaban.pengaduan_id = pengaduan.pengaduan_id','left');
        $this->db->join('status','status.status_id = pengaduan.status_id','left');
        $this->db->where('DATE(pengaduan.datetime) >=', $date);
        $this->db->where('DATE(pengaduan.datetime) <=', $date2);
        $this->db->where("pengaduan.status_id","3");
        $query = $this->db->get();

        $this->db->select('pengaduan.*,user.nama,opd.nama_opd,jawaban.jawaban,status.status');
        $this->db->from('pengaduan');
        $this->db->join('user','user.user_id = pengaduan.user_id','left');
        $this->db->join('opd','opd.opd_id = pengaduan.opd_id','left');
        $this->db->join('jawaban','jawaban.pengaduan_id = pengaduan.pengaduan_id','left');
        $this->db->join('status','status.status_id = pengaduan.status_id','left');
        $this->db->where('DATE(pengaduan.datetime) >=', $date);
        $this->db->where('DATE(pengaduan.datetime) <=', $date2);
        $this->db->where("pengaduan.status_id !=","3");
        $querys = $this->db->get();


        $data['selesai'] = $query->result();
        $data['belum'] = $querys->result();
        $this->load->view('admin/pengaduan/export',$data);
    }

}