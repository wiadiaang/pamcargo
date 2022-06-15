<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends MX_Controller {
    
    function __construct()
    {
        parent::__construct();
    }


    public function notif()
    {
        $user_id = $this->session->userdata('user_id');
        $a = $this->db->query("SELECT * FROM f_notif where user_id = '$user_id' order by notif_id desc limit 5 ")->result();
        $data = '';
			foreach ($a as $b) {
                if($b->status == '0'){
                    $bg = 'style="background-color:#E4E8EB"';
                }else{
                    $bg = '';
                }
			    $data .= "<a class='block oLoading' onclick='updateNotif(".$b->notif_id.")' href=".$b->url." ".$bg." >
                            <span class='title' >".$b->title."</span>
                            <span class='desc' >".$b->text."</span>
                            <span class='desc' >".$this->newDate($b->created_dated)."</span>
                          </a>";
            }
            $data .= '<a class="more" href="'.base_url('admin/notif').'">All Notification</a>';
		echo $data;
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

    public function count_notif()
    {
        $user_id = $this->session->userdata('user_id');
        $a = $this->db->query("SELECT * FROM f_notif where user_id = '$user_id' and status='0' ")->result();
        echo count($a);
    }
    public function updateNotif(){
        $id = $_POST['id'];
        $data['status'] = '1';
        $this->db->where('notif_id',$id);
        $this->db->update('f_notif',$data);
    }

    // public function chat()
    // {
    //     $type = $this->session->userdata('type');
    //     $user_id = $this->session->userdata('user_id');
    //     if($type == 'admin'){
    //         $a = $this->db->query("SELECT f_linkto.*, user.user_image as img2,user.name_pt FROM f_linkto
    //         LEFT JOIN user ON f_linkto.user_id = user.user_id
    //         LEFT JOIN user as user2 ON f_linkto.from_user_id = user2.user_id
    //         where f_linkto.from_user_id = '$user_id' limit 5 ")->result();
    //     }else if($type == 'superadmin'){
    //         $a = $this->db->query("SELECT f_linkto.*, user2.user_image as img2,user2.name_pt FROM f_linkto
    //         LEFT JOIN user ON f_linkto.user_id = user.user_id
    //         LEFT JOIN user as user2 ON f_linkto.from_user_id = user2.user_id
    //         where f_linkto.user_id = '$user_id' limit 5 ")->result();
    //     }else if($type == 'shiper'){
    //         $a = $this->db->query("SELECT f_linkto.*, user2.user_image as img2,user2.name_pt FROM f_linkto
    //         LEFT JOIN user ON f_linkto.user_id = user.user_id
    //         LEFT JOIN user as user2 ON f_linkto.from_user_id = user2.user_id
    //         where f_linkto.user_id = '$user_id' limit 5 ")->result();
    //     }
    //     $data = '';
	// 		foreach ($a as $b) {
    //             if($type == 'admin'){
    //                  $count = count($this->db->query("SELECT chat_delivery_id from f_chat_delivery 
    //                                                 where f_chat_id = '$b->f_chat_id' and 
    //                                                  to_user_id = '$user_id' and
    //                                                   user_id = '$b->user_id' and
    //                                                    read_admin = 'no' ")->result());
    //             }else if($type == 'superadmin'){
    //                 $count = count($this->db->query("SELECT chat_delivery_id from f_chat_delivery where user_id = '$b->from_user_id' and f_chat_id = '$b->f_chat_id' and read_sadmin = 'no'  ")->result());
    //             }else if($type == 'shiper'){
    //                 $count = count($this->db->query("SELECT chat_delivery_id from f_chat_delivery where user_id = '$b->from_user_id' and f_chat_id = '$b->f_chat_id' and read_shiper = 'no'  ")->result());
    //             }

    //             if($b->img2 == ""){
    //                 $img = "assets/image/user-default.png";

    //             }else{
    //                 $img = "assets/image/users/".$b->img2;
    //             }
    //             $data .= '
    //             <div class="media">
    //             <div class="media-left media-middle">
    //                 <a href="#">
    //                 <img class="media-object" src="'.base_url($img).'" alt="..." width="30">
    //                 </a>
    //             </div>
    //             <div class="media-body">
    //                 <h5 class="media-heading"><a href="'.base_url('admin/booking/form_booking/'.$b->master_id.'/'.$b->user_id.'/'.$b->from_user_id.'/'.$b->f_chat_id).'"> '.$b->name_pt.' <span class="badge">'.$count. '</span> </a></h5><small></small>
    //             </div>
    //             </div>
    //             ';
    //         }
    //         $data .= '<br><a href="#">See All Chat</a>';
	// 	echo $data;
    // }

    public function chat2()
    {
        $type = $this->session->userdata('type');
        $user_id = $this->session->userdata('user_id');
        if($type == 'admin'){
            $a = $this->db->query("SELECT f_chat_delivery.*, user2.user_image as img2, user2.name_pt FROM f_chat_delivery
            LEFT JOIN user ON f_chat_delivery.to_user_id = user.user_id
            LEFT JOIN user as user2 ON f_chat_delivery.from_user_id = user2.user_id
            where f_chat_delivery.from_user_id != '$user_id' order by f_chat_delivery.chat_delivery_id desc limit 5 ")->result();

        }else if($type == 'superadmin'){
            $a = $this->db->query("SELECT f_chat_delivery.*, user2.user_image as img2, user2.name_pt FROM f_chat_delivery
            LEFT JOIN user ON f_chat_delivery.to_user_id = user.user_id
            LEFT JOIN user as user2 ON f_chat_delivery.from_user_id = user2.user_id
            where f_chat_delivery.from_user_id != '$user_id' and f_chat_delivery.to_user_id = '$user_id' order by f_chat_delivery.chat_delivery_id desc limit 5 ")->result();

        }else if($type == 'shiper'){
            $a = $this->db->query("SELECT f_chat_delivery.*, user2.user_image as img2, user2.name_pt FROM f_chat_delivery
            LEFT JOIN user ON f_chat_delivery.to_user_id = user.user_id
            LEFT JOIN user as user2 ON f_chat_delivery.from_user_id = user2.user_id
            where f_chat_delivery.from_user_id != '$user_id' and f_chat_delivery.to_user_id = '$user_id' order by f_chat_delivery.chat_delivery_id desc limit 5 ")->result();

        }else if($type == 'consignee'){
            $a = $this->db->query("SELECT f_chat_delivery.*, user2.user_image as img2, user2.name_pt FROM f_chat_delivery
            LEFT JOIN user ON f_chat_delivery.to_user_id = user.user_id
            LEFT JOIN user as user2 ON f_chat_delivery.from_user_id = user2.user_id
            where f_chat_delivery.from_user_id != '$user_id' and f_chat_delivery.to_user_id = '$user_id' order by f_chat_delivery.chat_delivery_id desc limit 5 ")->result();

        }
        $data = '';
			foreach ($a as $b) {
                if($b->img2 == ""){
                    $img = "assets/image/user-default.png";

                }else{
                    $img = "assets/image/users/".$b->img2;
                }
                if (strlen($b->text) > 30){
                $strs = substr($b->text, 0, 30) . ' ...';
                }else{
                    $strs = $b->text;
                }

                 $type = $this->session->userdata('type');
                if( $type == 'shiper'){
                    $check = $b->read_shiper;
                }else if( $type == 'admin'){
                    $check = $b->read_admin;
                }else if( $type == 'superadmin'){
                    $check = $b->read_sadmin;
                }else if( $type == 'consignee'){
                    $check = $b->read_sadmin;
                }

                if($check == 'yes'){
                    $color = "black";
                }else{
                    $color = "blue";
                }

                $data .= '
                <div class="media">
                <div class="media-left media-middle">
                    <a href="#">
                    <img class="media-object" src="'.base_url($img).'" alt="..." width="40">
                    </a>
                </div>
                <div class="media-body">
                    <h5 class="media-heading"><a style="color:'.$color.'" href="'.base_url('admin/booking/form_booking/'.$b->master_id.'/'.$b->to_user_id.'/'.$b->from_user_id.'/'.$b->f_chat_id).'"> '.$b->name_pt.' </a></h5><small>'.$strs.'</small><span ><br><small style="font-size:8px;">'.$this->newDate($b->created_dated).' </small></span>
                </div>
                </div>
                ';
            }
            $data .= '<br><a href="'.base_url('admin/chat').'">See All Chat</a>';
		echo $data;
    }
    
    public function count_chat(){
        $type = $this->session->userdata('type');
        $user_id = $this->session->userdata('user_id');
        if($type == 'admin'){
            $a = $this->db->query("SELECT chat_delivery_id,read_admin FROM f_chat_delivery where read_admin = 'no' and to_user_id = '$user_id'  ")->result();
        }else if($type == 'superadmin'){
            $a = $this->db->query("SELECT chat_delivery_id,read_sadmin FROM f_chat_delivery where read_sadmin = 'no' and to_user_id = '$user_id' ")->result();
        }else if($type == 'shiper'){
            $a = $this->db->query("SELECT chat_delivery_id,read_sadmin FROM f_chat_delivery where read_shiper = 'no' and to_user_id = '$user_id' ")->result();
        }else if($type == 'consignee'){
            $a = $this->db->query("SELECT chat_delivery_id,read_sadmin FROM f_chat_delivery where read_shiper = 'no' and to_user_id = '$user_id' ")->result();
        }
        echo count($a);
    }



}