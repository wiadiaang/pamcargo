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
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="<?php echo base_url();?>admin/Dashboard"><?php echo $this->lang->line('home'); ?></a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active"><?php echo $page; ?></span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption caption-md">
                                        <i class="icon-globe theme-font hide"></i>
                                        <span class="caption-subject font-blue-madison bold uppercase"><?php echo $page; ?></span>
                                    </div>
                                </div>
                                
                                <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" >
                                    <?php
                                        if($form == 'read'){
                                            $read_only = 'readonly';
                                        }else{
                                            $read_only = '';
                                        }
                                    ?>
                                    <input type="hidden" class="form-control" name="village_id" id="village_id" value="<?php echo $village_id; ?>" />
                                    <div class="row">
                                        <div class="col-md-">
                                            <div class="form-body">
                                            <?php
                                                if($form == 'read'){

                                                }else{
                                            ?>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">Province</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="prop" id="prop" required="true" onchange="ajaxkota(this.value)" <?php echo $read_only?>>
                                                            <option value="">-<?php echo $this->lang->line('selection'); ?>-</option>
                                                            <?php
                                                                foreach ($province as $cl) {
                                                            ?>
                                                            <option <?php echo $province_id== $cl->province_id ? 'selected="selected"' : '' ?> value="<?php echo $cl->province_id  ?>"><?php echo $cl->name  ?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="form-control-focus"></div><?php echo form_error('prop') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">City</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="kota" id="kota" required="true" onchange="ajaxkec(this.value)" <?php echo $read_only?>>
                                                            <option value="">-<?php echo $this->lang->line('selection'); ?>-</option>
                                                            <?php
                                                                foreach ($city as $cl) {
                                                            ?>
                                                            <option <?php echo $city_id== $cl->city_id ? 'selected="selected"' : '' ?> value="<?php echo $cl->city_id  ?>"><?php echo $cl->name  ?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="form-control-focus"></div><?php echo form_error('kota') ?>
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                                ?>

                                                <div class="form-group form-md-line-input">
                                                    <label class="control-label col-md-4" for="PersonalContactDetails_Address_Company">District</label>
                                                    <div class="col-md-8">
                                                        <select name="kec" id="kec" class="form-control" onchange="ajaxkel(this.value)" <?php echo $read_only?>>
                                                            <?php
                                                                if($district_id != NULL){
                                                                    $district = $this->db->query("select name from district where district_id = '" . $district_id . "'")->row();

                                                            ?>
                                                                <option value="<?php echo $district_id?>"><?php echo $district->name?></option>
                                                            <?php
                                                                }else{
                                                            ?>
                                                                <option value="">-<?php echo $this->lang->line('selection'); ?>-</option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div><?php echo form_error('kec') ?>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">Name</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('name') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">Postal Code</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="postal_code" id="postal_code" value="<?php echo $postal_code; ?>" <?php echo $read_only?>/>
                                                        <input type="hidden" class="form-control" name="postal_code_old" id="postal_code_old" value="<?php echo $postal_code; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('postal_code') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-4 margin-top-30">
                                            <?php
                                                if($form == 'read'){

                                                }else{
                                            ?>
                                            <input type="submit" name="Simpan" class="btn blue" value="<?php echo $this->lang->line('save'); ?>" />
                                            <?php
                                                }
                                            ?>
                                            <a href="<?php echo $button_back?>" class="btn btn-danger" /><?php echo $this->lang->line('back'); ?></a>
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
            <script type="text/javascript" src="<?php echo base_url(); ?>daerah/ajax_daerah.js"></script>