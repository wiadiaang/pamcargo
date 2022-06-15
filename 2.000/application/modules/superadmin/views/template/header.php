
<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>

<a href="#"><img class="logo-default" src="<?php echo base_url(); ?>/assets/image/logox.png" alt="logo"/></a>

<div class="right">
<span class="hUser"><?php $type = $this->session->userdata('type');
                        $name = $this->session->userdata('name_pt');
                        $country = $this->session->userdata('country');
                        if($type == "superadmin"){
                            echo"Super Admin | ".$name." - ".$country;
                        }else if($type == "admin"){
                            echo"Admin | ".$name." - ".$country;
                        }else if($type == "shiper"){
                            echo"Admin Shipper | ".$name ." - ".$country;
                        }
?></span>
<a class="hLogout" href="<?php echo base_url(); ?>admin/Auth/logout"><img src="https://sms.rembon.co.id/assets/img/logout.png"/></a>
</div>