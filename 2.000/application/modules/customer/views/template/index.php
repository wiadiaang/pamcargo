<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Rembon Express</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/select2/css/select2.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/pages/css/error.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/dropzone/basic.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/jquery-multi-select/css/multi-select.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/pages/css/invoice.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/css/components-md.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url();?>assets/layouts/layout4/css/layout.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/layouts/layout4/css/themes/light.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/layouts/layout4/css/custom.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/layouts/layout4/css/extra2.css" rel="stylesheet"/>
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-toastr/toastr.css" rel="stylesheet"/>
        <!-- END THEME LAYOUT STYLES -->
        <link rel='icon' type='image/png' href='<?php echo base_url();?>assets/image/favicon.png'/>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <?php $this->load->view('template/header'); ?>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                    <?php $this->load->view('template/sidebar');?>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
                      <?php $this->load->view($main); ?>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
            
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <footer>

            Copyright © 2018 by PT Rembon Karya Digital

        </footer>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url();?>assets/global/plugins/jquery.chained.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url();?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/pages/scripts/form-dropzone.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url();?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/layouts/global/scripts/quick-sidebar.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/scripts/datatable.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script> 
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-toastr/toastr.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url();?>assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/select2/js/select2.full.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/pages/scripts/form-validation.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->



<script type="text/javascript">

<?php if($this->session->flashdata('success')){ ?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>", "<?php echo $this->lang->line('success_alert'); ?>", {timeOut: 5000});
<?php }else if($this->session->flashdata('error')){  ?>
    toastr.error("<?php echo $this->session->flashdata('error'); ?>", "<?php echo $this->lang->line('error_alert'); ?>", {timeOut: 5000});
<?php }else if($this->session->flashdata('warning')){  ?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>", "<?php echo $this->lang->line('warning_alert'); ?>", {timeOut: 5000});
<?php }else if($this->session->flashdata('info')){  ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>", "<?php echo $this->lang->line('information_alert'); ?>", {timeOut: 5000});
<?php } ?>

</script>

  <script type="text/javascript">
        $('#datetimepicker').datetimepicker({
            format: 'yyyy-mm-dd hh:ii:ss'
        });
        //delete jurusan
        function confirmDeletejurusan(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Jurusan/delete/" + id,
                        type: "POST",

                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Jurusan/';

                }else{
                     location.reload();
                }
                

            }); 
        }

        //delete class
        function confirmDeleteClass(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Kelas/delete/" + id,
                        type: "POST",

                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Kelas/';

                }else{
                     location.reload();
                }
                

            }); 
        }

        //delete section
        function confirmDeleteSection(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Section/delete/" + id,
                        type: "POST",

                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Section/';

                }else{
                     location.reload();
                }
                

            }); 
        }
  

        // hapus parent
        function confirmDeleteParent(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Parents/delete/" + id,
                        type: "POST",

                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Parents/';

                }else{
                     location.reload();
                }
                

            }); 
        }

        function confirmDeleteStudent(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Student/delete/" + id,
                        type: "POST",

                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Student/';

                }else{
                     location.reload();
                }
                

            }); 
        }
    

        function confirmDeleteTeacher(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Teacher/delete/" + id,
                        type: "POST",

                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Teacher/';

                }else{
                     location.reload();
                }
                

            }); 
        }

       function confirmDeleteSubject(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Subject/delete/" + id,
                        type: "POST",

                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Subject/';

                }else{
                     location.reload();
                }
                

            }); 
        }

     function confirmDeleteSpecialisasi(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/peminatan/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/peminatan/';

                }else{
                     location.reload();
                }
                

            }); 
        }


     function confirmDeleteRunningsession(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Tahun_akademik/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Tahun_akademik/';

                }else{
                     location.reload();
                }
                

            }); 
        }
        function confirmDeleteCompetensi(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Kompetensi_dasar/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Kompetensi_dasar/';

                }else{
                     location.reload();
                }
                

            }); 
        }

         function confirmDeletePermit(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Permit_letter/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Permit_letter/';

                }else{
                     location.reload();
                }
                

            }); 
        }

         function confirmDeleteAgama(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Agama/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Agama/';

                }else{
                     location.reload();
                }
                

            }); 
        }

         function confirmDeleteKkm(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Passing_grade/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Passing_grade/';

                }else{
                     location.reload();
                }
                

            }); 
        }

        function confirmDeletePengumuman(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Pengumuman/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Pengumuman/';

                }else{
                     location.reload();
                }
                

            }); 
        }

        function confirmDeleteKalenderAkademik(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Kalender_pengumuman/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Kalender_pengumuman/';

                }else{
                     location.reload();
                }
                

            }); 
        }

         function confirmDeletePertanyaan(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/pertanyaan_penilaian/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                   // window.location.href = '<?php echo base_url(); ?>admin/pertanyaan_penilaian/';
                    location.reload();

                }else{
                     location.reload();
                }
                

            }); 
        }
  
        function confirmDeletePredikat(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Predikat/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Predikat/';
                   
                }else{
                     location.reload();
                }
                

            }); 
        }

        function confirmDeleteBookCategory(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/kategori_buku/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/kategori_buku/';
                   
                }else{
                     location.reload();
                }
                

            }); 
        }

        function confirmDeleteBook(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Buku_perpustakaan/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Buku_perpustakaan/';
                   
                }else{
                     location.reload();
                }
                

            }); 
        }

        function confirmDeleteUpacara(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Upacara/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Upacara/';
                   
                }else{
                     location.reload();
                }
                

            }); 
        }

        function confirmDeletePaymentCategory(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/kategori_pembayaran/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/kategori_pembayaran/';
                   
                }else{
                     location.reload();
                }
                

            }); 
        }

        // function confirmDeletePaymentLainnya(id){
        //     bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
        //         if(result){
        //         //    alert(id);

        //               $.ajax({
        //                 url: "<?php echo base_url();?>admin/pembayaran_lainnya/delete/" + id,
        //                 type: "POST",


        //                 success: function () {
                          
        //                    toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
        //                 },
        //                 error: function (xhr, ajaxOptions, thrownError) {
                            
        //                    toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
        //                 }



        //               });

        //             //   location.reload();
        //             window.location.href = '<?php echo base_url(); ?>admin/pembayaran_lainnya/';
                   
        //         }else{
        //             window.location.href = '<?php echo base_url(); ?>admin/pembayaran_lainnya/';
        //             //  location.reload();
        //         }
                

        //     }); 
        // }

        function confirmDeletePaymentAmount(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/jumlah_pembayaran/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/jumlah_pembayaran/';
                   
                }else{
                     location.reload();
                }
                

            }); 
        }

        function confirmDeletePrestasi(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Identitas_sekolah/delete_prestasi/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Identitas_sekolah/';
                   
                }else{
                     location.reload();
                }
                

            }); 
        }


        function confirmDeleteAdmin(id){
            bootbox.confirm("<?php echo $this->lang->line('are_you_sure'); ?>", function(result) {
                if(result){
                   // alert("ok!");

                      $.ajax({
                        url: "<?php echo base_url();?>admin/Admin/delete/" + id,
                        type: "POST",


                        success: function () {
                          
                           toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                          
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            
                           toastr.error('<?php echo $this->lang->line('error'); ?>', '<?php echo $this->lang->line('delete_error'); ?>', {timeOut: 5000});
                           
                           
                        }



                      });

                    window.location.href = '<?php echo base_url(); ?>admin/Admin/';
                   
                }else{
                     location.reload();
                }
                

            }); 
        }



  </script>
   <script type="text/javascript">
                
                $("#section_id").chained("#class_id");
               
                
   </script>
   <script type="text/javascript">


        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'student_sex',
                    type: 'pie',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                },
                title: {
                    text: '<?php echo $this->lang->line('student'); ?>',
                    x: -20 //center
                },
          
         
                tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },

                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },


                 series: [{
                    type: 'pie',
                    name: '<?php echo $this->lang->line('sex'); ?>',
                    data: []
                  }]
            }
            
            $.getJSON("<?php echo base_url();?>admin/Dashboard/chart_student_by_sex", function(json) {
                options.series[0].data = json;
               // options.categories = json[0]['data'];
               // options.series[0].name = "Jenis Kelamin";
               // options.series[1] = json[1];
                chart = new Highcharts.Chart(options);
                console.log(json);
               // console.log(options.series);
            });
        });
   
   </script>
    


        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>