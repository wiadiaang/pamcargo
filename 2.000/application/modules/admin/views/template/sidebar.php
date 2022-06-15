                <div class="page-sidebar navbar-collapse collapse">

                    <?php
                        $type = $this->session->userdata('type');
                        if($type == 'shiper' || $type == 'admin' || $type == 'superadmin'  || $type == 'consignee'){ ?>
                        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item" id="booking">
                                <a href="<?php echo base_url();?>admin/booking" class="nav-link">
                                    <i class="fa fa-table"></i>
                                    <span class="title">Booking / (SI)</span>
                                </a>
                        </li>
                        </ul>

                        <?php } ?>

                        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                       
                                 
                        <li class="nav-item" id="user_manage">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-users"></i>
                                <span class="title">User Management</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                    <?php if ($type == 'admin'){ ?>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url();?>admin/User_shipper" class="nav-link">
                                                <span class="title">User Shipper</span>
                                            </a>
                                        </li>
                                <?php }if ($type == 'superadmin'){ ?>
                                         <li class="nav-item">
                                            <a href="<?php echo base_url();?>admin/Adminr" class="nav-link">
                                                <span class="title">Admin</span>
                                            </a>
                                        </li>

                                <?php } ?>
                                <li class="nav-item" id="profile">
                                    <a href="<?php echo base_url();?>admin/profile" class="nav-link">
                                        <span class="title">Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        

                        <?php  if($type == 'superadmin'){ ?>

                                       <li class="nav-item" id="m_si">
                                            <a href="javascript:;" class="nav-link nav-toggle">
                                                <i class="fa fa-users"></i>
                                                <span class="title">Form SI</span>
                                                <span class="arrow" id="m_si"></span>
                                            </a>
                                            <ul class="sub-menu m_si">
                                                    
                                                        <li class="nav-item ">
                                                            <a href="<?php echo base_url();?>admin/vendor" class="nav-link">
                                                                <span class="title">Mater Vendor</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="<?php echo base_url();?>admin/ordering_customer" class="nav-link">
                                                                <span class="title">Master Ordering Customer</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="<?php echo base_url();?>admin/pickup_address" class="nav-link">
                                                                <span class="title">Master Pickup Address</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="<?php echo base_url();?>admin/consignees" class="nav-link">
                                                                <span class="title">Master Consignee</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="<?php echo base_url();?>admin/delivery_address" class="nav-link">
                                                                <span class="title">Master Deleivery Address</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="<?php echo base_url();?>admin/notify_party" class="nav-link">
                                                                <span class="title">Master Notify Party</span>
                                                            </a>
                                                        </li>

                                            </ul>
                                        </li>
                                       
                         <?php } ?>
                       


                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>