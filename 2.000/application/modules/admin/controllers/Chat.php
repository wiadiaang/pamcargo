<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat extends MX_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/chat_model');
        $this->load->library('Format_date');
    }

    public function index(){
        $data['title'] = "PAM CARGO";
        $data['main'] = "admin/chat/index";
        $this->load->view('admin/template/index',$data);
    }
 
    public function ajax_list()
    {
        $list = $this->chat_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $chat) {
            $no++;
            $row = array();
            $row[] = $this->newDate($chat->created_dated);
            $row[] = $chat->name_pt.' | '.$chat->text;
            $row[] = '<a href="'.base_url('admin/booking/form_booking/'.$chat->master_id.'/'.$chat->to_user_id.'/'.$chat->user_id.'/'.$chat->f_chat_id).'"  class="btn btn-info btn-xs">Read</a>'; 
            $row[] = $chat->read_admin;
            $data[] = $row;
        }
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->chat_model->count_all(),
                        "recordsFiltered" => $this->chat_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }    

    public function newDate ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = 'WIB') {
        if (trim ($timestamp) == '')
        {
                $timestamp = time ();
        }
        elseif (!ctype_digit ($timestamp))
        {
            $timestamp = strtotime ($timestamp);
        }
        $date_format = preg_replace ("/S/", "", $date_format);
        $pattern = array (
            '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
            '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
            '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
            '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
            '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
            '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
            '/April/','/June/','/July/','/August/','/September/','/October/',
            '/November/','/December/',
        );
        $replace = array ( 'Mon','Tue','Wed','Thu','Fri','Sat','Sun',
            'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday',
            'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Aug','Sep','Okt','Nov','Dec',
            'January','February','March','April','June','July','August','September',
            'Oktober','November','December',
        );
        $date = date ($date_format, $timestamp);
        $date = preg_replace ($pattern, $replace, $date);
        $date = "{$date} ";
        return $date;
    } 
    
        
        
        
        

}