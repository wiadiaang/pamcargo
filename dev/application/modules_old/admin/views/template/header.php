<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PAM CARGO</title>

    <!-- Bootstrap -->
    <link href="<?= base_url()?>assets/dash/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url()?>assets/dash/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url()?>assets/dash/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url()?>assets/dash/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?= base_url()?>assets/dash/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/dash/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/dash/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/dash/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/dash/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url()?>assets/dash/build/css/custom.min.css" rel="stylesheet">

    <script src="<?= base_url()?>assets/dash/ckeditor/ckeditor.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <!-- <link rel="stylesheet" href="<?= base_url()?>assets/dash/custom/f-style.css"> -->
    <style>
   .swal2-popup {
      font-size: 1.6rem !important;
    }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?= base_url('admin');?>" class="site_title"> <span>PAM CARGO</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= base_url()?>assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2 class=""><?= $this->session->userdata('type');?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                <?php 
                $type =  $this->session->userdata('type');
                if($type == 'admin'){
                ?>
                    <li><a href="<?= base_url()?>admin/home"><i class="fa fa-home"></i> Home </a>
                    </li>
                    <li><a href="<?= base_url()?>admin/about"><i class="fa fa-info"></i> About</a>

                    </li>
                    <li><a><i class="fa fa-desktop"></i>Services<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?= base_url()?>admin/sea-air-services">Sea Air Services</a></li>
                            <li><a href="<?= base_url()?>admin/air-freight-services">Air Freight Services</a></li>
                            <li><a href="<?= base_url()?>admin/sea-freight-services">Sea Freight Services</a></li>
                            <li><a href="<?= base_url()?>admin/ad-hoc-services">Ad hoc charter services</a></li>
                            <li><a href="<?= base_url()?>admin/road-transport">Road transport</a></li>
                            <li><a href="<?= base_url()?>admin/custom-clearance">Custom clearance</a></li>
                            <li><a href="<?= base_url()?>admin/warehousing">Warehousing</a></li>

                        </ul>
                    </li>
                    
                    <li><a href="<?= base_url()?>admin/news"><i class="fa fa-book"></i> News </a>

                    </li>
                    <li><a href="<?= base_url()?>admin/offices"><i class="fa fa-building"></i>Offices</a></li>
                    <li><a href="<?= base_url()?>admin/agents"><i class="fa fa-user"></i>Agents</a>
                    <li><a href="<?= base_url()?>admin/contact"><i class="fa fa-envelope"></i>Contact Us</a>
                    <li><a href="<?= base_url()?>admin/rate_request"><i class="fa fa-envelope"></i>Rate Request</a></li>

                  <?php }else if($type == 'uploader'){ ?>
                    <li><a><i class="fa fa-table"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?= base_url()?>admin/vessel_name">Vessel Name</a></li>
                            <li><a href="<?= base_url()?>admin/departure_origin">Departure Origin</a></li>
                            <li><a href="<?= base_url()?>admin/schedule">Schedule</a></li>
                        </ul>
                    </li>
                  <?php }else if($type == 'origin' || $type == 'transit' || $type == 'consignee' || $type == 'superadmin'){ ?>
                    <!-- <li id="menu_shipment"><a><i class="fa fa-table"></i> SHIPMENT <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu"> -->
                            <li id="menu_shipment"><a href="<?= base_url()?>admin/delivery_package"><i class="fa fa-table"></i>SHIPMENT</a></li>
                        <!-- </ul>
                    </li> -->

                  <?php } ?>
                  
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <!-- <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a> -->
            <!-- <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= base_url('auth/auth/logout') ?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a> -->
        </div>
        <!-- /menu footer buttons -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?= $this->session->userdata('email');?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!-- <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="<?= base_url('auth/auth/logout')?>"><i class="fa fa-sign-out pull-right"></i> Sign Out</a></li>
                  </ul>
                </li>

                <!-- <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul> -->
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

         <!-- page content -->
         <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>
