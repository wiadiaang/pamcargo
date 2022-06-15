<?php 
    // date_default_timezone_set('UTC'); 
    // date_default_timezone_set('Asia/Shanghai');        
?>
        <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><?php echo $this->lang->line('attendance'); ?></h1>
                        </div>
                        <div class="page-toolbar">
                            <!-- BEGIN THEME PANEL -->
                            <div class="btn-group">
                                 <button type="button" id = "btnprint" class="btn sbold green"  onclick="print_order_status('printablediv');" ><i class="fa fa-print"></i> <?php echo $this->lang->line('view'); ?></button>
                                 
                                 <button style="margin-left:10px" type="button" id = "btnprint" class="btn sbold blue"  onclick="exports();" ><i class="fa fa-print"></i> Export Excel</button>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>admin/Dashboard"><?php echo $this->lang->line('home'); ?></a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active"><?php echo $this->lang->line('attendance'); ?></span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="caption-subject font-blue-madison bold uppercase"><?php echo  $this->lang->line('filter'); ?></span>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-success">
                                            <input type="text" name="class_id" id="class_id" value="16">
                                            <!-- <select class="form-control select2me" name="class_id" id="class_id" required="true">
                                                <option value="">-<?php echo $this->lang->line('grade'); ?>-</option>
                                                <?php
                                                    foreach ($class as $cl) {
                                                ?>
                                                <option value="<?php echo $cl->class_id ?>"><?php echo $cl->name  ?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select> -->
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-success">
                                            <input type="text" name="section_id" id="section_id" value="151">
                                            <!-- <select class="form-control select2me" name="section_id" id="section_id">
                                                <option value="">-<?php echo $this->lang->line('section'); ?>-</option>
                                                    <?php
                                                        foreach ($section as $sc) {
                                                    ?>
                                                    <option class="<?php echo $sc->class_id ?>" value="<?php echo $sc->section_id ?>"><?php echo $sc->sc_name ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                            </select> -->
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group form-md-line-input has-success">
                                            <select class="form-control select2me" id="month" >
                                                <option value="01" <?php if($bulan == 1){ ?> selected <?php } ?>><?php echo $this->lang->line('january'); ?></option>
                                                <option value="02" <?php if($bulan == 2){ ?> selected <?php } ?>><?php echo $this->lang->line('february'); ?></option>
                                                <option value="03" <?php if($bulan == 3){ ?> selected <?php } ?>><?php echo $this->lang->line('march'); ?></option>
                                                <option value="04" <?php if($bulan == 4){ ?> selected <?php } ?>><?php echo $this->lang->line('april'); ?></option>
                                                <option value="05" <?php if($bulan == 5){ ?> selected <?php } ?>><?php echo $this->lang->line('may'); ?></option>
                                                <option value="06" <?php if($bulan == 6){ ?> selected <?php } ?>><?php echo $this->lang->line('june'); ?></option>
                                                <option value="07" <?php if($bulan == 7){ ?> selected <?php } ?>><?php echo $this->lang->line('july'); ?></option>
                                                <option value="08" <?php if($bulan == 8){ ?> selected <?php } ?>><?php echo $this->lang->line('august'); ?></option>
                                                <option value="09" <?php if($bulan == 9){ ?> selected <?php } ?>><?php echo $this->lang->line('september'); ?></option>
                                                <option value="10" <?php if($bulan == 10){ ?> selected <?php } ?>><?php echo $this->lang->line('october'); ?></option>
                                                <option value="11" <?php if($bulan == 11){ ?> selected <?php } ?>><?php echo $this->lang->line('november'); ?></option>
                                                <option value="12" <?php if($bulan == 12){ ?> selected <?php } ?>><?php echo $this->lang->line('december'); ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 margin-top-20">
                                        <input type="hidden" name="year" value="<?php  echo $tahun; ?>">
                                        <button type="button" id="btnSubmit" class="btn-block btn sbold green"><i class="fa fa-search"></i> <?php echo $this->lang->line('view'); ?></button>
                                    </div>
                                </div>
                                <div id="printablediv" class="printablediv" >
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-users font-dark"></i>
                                        <span class="caption-subject bold uppercase"><?php echo $this->lang->line('attendance'); ?></span>
                                    </div>
                                    <div class="tools"></div>
                                </div>
                                    <div class="portlet-body">
                                    <table class="table table-bordered table-striped table-condensed flip-content">
                                            <thead>
                                                <tr>
                                                     <th><?php echo $this->lang->line('name'); ?></th> 
                                                    <?php

                                                        $year = date("Y");
                                                        $month = $bulan;
                                                        $days = date('t', mktime(0, 0, 0, $month, 1, $year));                                                                    

                                                        // $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                                        for ($i = 1; $i <= $days; $i++) {
                                                    ?>
                                                        <th><?php echo $i; ?></th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
												// $icon = '<i class="fa fa-circle" style="color: #27AE60;"></i>';
												foreach ($absens as $item){
													?>
													<tr>
														<td><?php echo $item['nama'] ?></td>
														<?php
														for($i = 1; $i <= count($item['tgl']); $i++){
															?>
															<td>
																<?php 
																switch($item['tgl'][$i]){
																	case 0 : $color = "transparent"; break;
																	case 1 : $color = "#27AE60"; break;
																	case 2 : $color = "#2980B9"; break;
																	case 3 : $color = "#FFA800"; break;
																	case 4 : $color = "#8E44AD"; break;
																}
																?>
																<i class="fa fa-circle" style="color: <?php echo $color ?>;"></i>
																<?php //echo count($item['tgl']) ?>
															</td>
															<?php
														}
													?>
													</tr>
													<?php
												}
												?>
                                            </tbody>
                                        </table>
                                       
                                    </div>
                                
                                <div>
                                    Note : <br />
                                    <i class="fa fa-circle" style="color: #27AE60;"></i> : <?php echo $this->lang->line('attend'); ?> <br />
                                    <i class="fa fa-circle" style="color: #2980B9;"></i> : <?php echo $this->lang->line('permit'); ?> <br />
                                    <i class="fa fa-circle" style="color: #FFA800;"></i> : <?php echo $this->lang->line('sick'); ?> <br />
                                    <i class="fa fa-circle" style="color: #8E44AD;"></i> : <?php echo $this->lang->line('truant'); ?> <br />
                                </div>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>

<script src="<?php echo base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {

   
    var sectionid = ''
    $("#section_id").change(function(){
        var sec = $("#section_id").val();
         sectionid = sec ;
         console.log(sectionid);
    });

    $("#btnSubmit").click(function(){
        var sectionid = $("#section_id").val();
        var kelasid = $("#class_id").val();
        var bulan = $("#month").val();
        window.location.href='<?php echo base_url(); ?>admin/absen/absensi/'+ kelasid + '/' + sectionid + '/'  + bulan;
        console.log(sectionid);

    });



});

</script>

<script type="text/javascript">
    function exports(){
        var section_id = <?php echo $section_id ?>;
        var class_id = <?php echo $class_id ?>;
        var bulan = <?php echo $bulan ?>;
        window.location.href = '<?= base_url('admin/Attendance/export/') ?>' + class_id + '/' + section_id + '/' + bulan;
    }

    function print_order_status(el){
        $("#card").visibility='visible';
        var rest = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = rest;

    }
</script>





