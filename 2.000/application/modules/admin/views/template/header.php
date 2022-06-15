
<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>

<a href="#"><img class="logo-default" src="<?php echo base_url(); ?>/assets/image/logox.png" alt="logo"/></a>

<div class="right">
<span class="hUser"><?php 
                        $type = $this->session->userdata('type');
                        $name = $this->session->userdata('name_pt');
                        $country = $this->session->userdata('country');
                        if($type == "superadmin"){
                            echo"Super Admin | ".$name." - ".$country;
                        }else if($type == "admin"){
                            echo"Admin | ".$name." - ".$country;
                        }else if($type == "shiper"){
                            echo"Admin Shipper | ".$name ." - ".$country;
                        }else if($type == "consignee"){
                            echo"User Consignee | ".$name ." - ".$country;
                        }
?></span>


<div class="chat-notification">

    <img class="chat-bell" src="<?= base_url('assets/image/chat.png')?>">
    <span class="chat-number" id="c_chat"></span>

    <div class="chat-notList" style="display: none;">

        <img class="chat-rectangle" src="<?= base_url('assets/image/rectangle.png')?>">
   
        <div id="chat-notif"></div>
        

    </div>

</div>

<div class="notification">

    <img class="bell" src="<?= base_url('assets/image/notification.png')?>">
    <span class="number" id="c_notif"></span>

    <div class="notList" style="display: none;">

        <img class="rectangle" src="<?= base_url('assets/image/rectangle.png')?>">
        <div id="notif"></div>

    </div>

</div>

<a class="hLogout" href="<?php echo base_url(); ?>auth/Auth/logout"><img src="<?= base_url('assets/image/logout.png')?>"/></a>
</div>

<script>

	$(document).ready(function(){
		$('.notification').click(function(){
        	$('.notList').slideToggle('fast');
    	});

    	$('.chat-notification').click(function(){
        	$('.chat-notList').slideToggle('fast');
    	});

        function load_notif(){
            $.ajax({
                url:"<?= base_url('admin/content/notif'); ?>",
                type:"POST",
                success:function(data){
                    $('#notif').html(data);
                },
            });
        }
        load_notif();
        function count_notif(){
            $.ajax({
                    url:"<?= base_url('admin/content/count_notif'); ?>",
                    type:"POST",
                    success:function(data){
                        $('#c_notif').text(data);
                    },
                });
            }
        count_notif();

	});


// chat

        function load_chat(){
            $.ajax({
                url:"<?= base_url('admin/content/chat2'); ?>",
                type:"POST",
                success:function(data){
                    $('#chat-notif').html(data);
                },
            });
        }
        load_chat();

        function count_chat(){
            $.ajax({
                    url:"<?= base_url('admin/content/count_chat'); ?>",
                    type:"POST",
                    success:function(data){
                        $('#c_chat').text(data);
                    },
                });
            }
        count_chat();

    

</script>