<?= $this->session->flashdata('error');?>

<div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><?php echo $page; ?></h1>
                        </div>
                        <div class="page-toolbar">
                            <!-- BEGIN THEME PANEL -->
                        </div>
                    </div>

                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>admin/Dashboard"><?php echo $this->lang->line('home'); ?></a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active"><?php echo $page; ?></span>
                        </li>
                    </ul>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase"><?php echo $page; ?></span>
                                    </div>
                                </div>
                                
                                <form action="<?= base_url('admin/admin/create_action') ?>" method="post" enctype="multipart/form-data" >
                                    <?php
                                        if($form == 'read'){
                                            $read_only = 'readonly';
                                        }else{
                                            $read_only = '';
                                        }
                                    ?>
                                    <input type="hidden" class="form-control" name="user_id" id="user_id" value="" />
                                    <div class="row">
                                        <div class="col-md-">
                                            <div class="form-body">
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label">First Name</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" required="" name="firstname" id="firstname" value=""/>
                                                        <div class="form-control-focus"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label">Last Name</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" required="" name="lastname" id="lastname" value=""/>
                                                        <div class="form-control-focus"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label">Email</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" required="" name="email" id="email" value=""/>
                                                        <div class="form-control-focus"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label">Phone</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" required="" name="phone" id="phone" value=""/>
                                                        <div class="form-control-focus"></div>
                                                    </div>
                                                </div>


                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label">Address</label>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" required="" name="address" id="address"></textarea>
                                                        <div class="form-control-focus"></div>
                                                    </div>
                                                </div>
                                               
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label">Province</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" required="" name="prop" id="prov"  required="true" >
                                                            <option value="">Select Province</option>
                                                         
                                                        </select>
                                                        <div class="form-control-focus"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label">City</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" required="" name="kab" id="kab" required="true" >
                                                           
                                                        </select>
                                                        <div class="form-control-focus"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="control-label col-md-4">District</label>
                                                    <div class="col-md-8">
                                                        <select name="kec" id="kec" class="form-control" required="" >
                                                          
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="control-label col-md-4">Village</label>
                                                    <div class="col-md-8 ">
                                                        <select name="desa" class="form-control" required="" id="desa" >
                                                       
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label">Postal Code</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" required="" name="postal_code" id="postal_code" value=""/>
                                                        <div class="form-control-focus"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label">Lattitude</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" required="" name="lat" id="lat" value="" />
                                                        <div class="form-control-focus"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label">Longitude</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" required="" name="lng" id="lng" value="" />
                                                        <div class="form-control-focus"></div>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label">Password</label>
                                                    <div class="col-md-8">
                                                        <input type="password" class="form-control" required="" name="pass" id="" value="" />
                                                        <div class="form-control-focus"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label">Confirm Password</label>
                                                    <div class="col-md-8">
                                                        <input type="password" class="form-control" required="" name="pass2" id="" value="" />
                                                        <div class="form-control-focus"></div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-4 margin-top-30">
                                            
                                            <input type="submit" name="Simpan" class="btn blue" value="<?php echo $this->lang->line('save'); ?>" />
                                        
                                            <a href="<?php echo $button_back?>" class="btn btn-danger" ><?php echo $this->lang->line('back'); ?></a>
                                        </div>
                                    </div>
                                </form>
                                    
                            </div>

                        </div>
                        
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- <script type="text/javascript" src="<?php echo base_url(); ?>daerah/ajax_daerah.js"></script> -->

            <script>
                        $.ajax({
                            type : "POST",
                            url : "<?php echo base_url('admin/Getwilayah/getprov') ?>",
                            beforeSend: function(f) {
                                $("#kab").html('<option value="0">City</option>');
                                $("#kec").html('<option value="0">District</option>');
                                $("#desa").html('<option value="0">Village </option>');
                            },
                            success: function(data) {
                                $("#prov").html(data);
                            }
                        });
                
                        
                    $('#prov').change(function(){
                        let kd_propinsi = $('#prov').val();
                        $.ajax({
                            type : "POST",
                            url : "<?php echo site_url('admin/Getwilayah/getkabkota') ?>",
                            data : "kd_propinsi=" + kd_propinsi,
                            beforeSend: function(f) {
                                $("#kab").html('<option value="0">Loading...</option>');
                                $("#kec").html('<option value="0">District</option>');
                                $("#desa").html('<option value="0">Village</option>');

                            },
                            success: function(data) {
                                $("#kab").html(data);
                            }
                        });
                    });
                    $('#kab').change(function(){
                        var kd_propinsi = $('#prov').val();
                        var kd_kabkota = $('#kab').val();
                    
                        $.ajax({
                            type : "POST",
                            url : "<?php echo site_url('admin/Getwilayah/getkecamatan') ?>",
                            data : "kd_propinsi=" + kd_propinsi+"&kd_kabkota=" + kd_kabkota,
                            beforeSend: function(f) {
                                $("#kec").html('<option value="0">Loading...</option>');
                                $("#desa").html('<option value="0">Village</option>');
                            },
                            success: function(data) {
                                $("#kec").html(data);
                            }
                        });
                    });
                    $('#kec').change(function(){
                            var kd_propinsi = $('#prov').val();
                            var kd_kabkota = $('#kab').val();
                            var kd_kecamatan = $('#kec').val();
                            
                            $.ajax({
                                type : "POST",
                                url : "<?php echo site_url('admin/Getwilayah/getdesa') ?>",
                                data : "kd_propinsi=" + kd_propinsi+"&kd_kabkota=" + kd_kabkota+"&kd_kecamatan=" + kd_kecamatan,
                                beforeSend: function(f) {
                                    $("#desa").html('<option value="0">Loading...</option>');
                                },
                                success: function(data) {
                                    $("#desa").html(data);
                                
                                }
                            });
                    });

                    $('#desa').change(function(){
                            var desa = $("#desa").val();
                            $.ajax({
                                type : "POST",
                                url : "<?php echo site_url('admin/getwilayah/getkodepos') ?>",
                                data : "village_id=" + desa,
                                beforeSend: function(f) {
                                    $("#postal_code").val('Loading..');
                                },
                                success: function(data) {
                                    $("#postal_code").val(data);
                                
                                }
                            });
                            
                            
                    });


                   
            </script>