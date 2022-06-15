                <div class="page-sidebar navbar-collapse collapse">

<!-- 
                    <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start">
                            <a href="<?php echo base_url();?>admin/Dashboard" class="nav-link nav-toggle">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    </ul> --> 

                    <?php
                        $type = $this->session->userdata('type');
                        if($type == 'shiper' || $type == 'admin' || $type == 'superadmin'){ ?>
                        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item" id="booking">
                                <a href="<?php echo base_url();?>admin/list_shipper" class="nav-link">
                                    <i class="fa fa-table"></i>
                                    <span class="title">List Booking Shipper</span>
                                </a>
                        </li>
                        </ul>
                        <?php } ?>

                    <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                     
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-database"></i>
                                <span class="title">Master Data</span>
                                <span class="arrow"></span>
                            </a>
                            
                            <ul class="sub-menu">
                                <?php
                                    if($type == 'shiper'){ ?>
                                      
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <span class="title">Mater Vendor</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <span class="title">Master Transport</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <span class="title">Master Ordering Customer</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <span class="title">Master Pickup Address</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <span class="title">Master Consignee</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <span class="title">Master Deleivery Address</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <span class="title">Master Notify Party</span>
                                            </a>
                                        </li>
                                   <?php }else{

                                    if($type == 'superadmin'){ ?>

                                    <li class="nav-item">
                                        <a href="<?php echo base_url();?>admin/Admin" class="nav-link">
                                            <span class="title">Admin</span>
                                        </a>
                                    </li>

                                    <?php }else if ($type == 'admin'){ ?>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url();?>admin/User_shipper" class="nav-link">
                                                <span class="title">User Shipper</span>
                                            </a>
                                        </li>
                                    <?php } ?>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Shipper" class="nav-link">
                                        <span class="title">Shipper</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Courier" class="nav-link">
                                        <span class="title">Courier</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Warehouse" class="nav-link">
                                        <span class="title">Warehouse</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Officer" class="nav-link">
                                        <span class="title">Officer</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Province" class="nav-link">
                                        <span class="title">Province</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Main_city" class="nav-link">
                                        <span class="title">Main City</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/City" class="nav-link">
                                        <span class="title">City</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/District" class="nav-link">
                                        <span class="title">District</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Village" class="nav-link">
                                        <span class="title">Village</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Goods" class="nav-link">
                                        <span class="title">Goods</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Flight" class="nav-link">
                                        <span class="title">Flight</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Company" class="nav-link">
                                        <span class="title">Company</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Consignee" class="nav-link">
                                        <span class="title">Consignee</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-users"></i>
                                <span class="title">Transaction</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Master/daerah" class="nav-link">
                                        <span class="title">Shipments Delivered</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Master/daerah" class="nav-link">
                                        <span class="title">All Shipments</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Master/daerah" class="nav-link">
                                        <span class="title">Online Booking</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Master/daerah" class="nav-link">
                                        <span class="title">Clients Management</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Master/daerah" class="nav-link">
                                        <span class="title">Price List</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        
                        
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-users"></i>
                                <span class="title">User Management</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="<?php echo base_url();?>admin/Master/daerah" class="nav-link">
                                        <span class="title">Edit Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <?php } ?>

                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>