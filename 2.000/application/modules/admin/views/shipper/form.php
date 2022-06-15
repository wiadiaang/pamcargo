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
                                    <input type="hidden" class="form-control" name="shipper_id" id="shipper_id" value="<?php echo $shipper_id; ?>" />
                                    <div class="row">
                                        <div class="col-md-">
                                            <div class="form-body">
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">Name</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="shipper_name" id="shipper_name" value="<?php echo $shipper_name; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('shipper_name') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">Phone</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="shipper_phone" id="shipper_phone" value="<?php echo $shipper_phone; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('shipper_phone') ?>
                                                    </div>
                                                </div>
                                            
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">Email</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="shipper_email" id="shipper_email" value="<?php echo $shipper_email; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('shipper_email') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">Country</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="shipper_country" id="shipper_country" value="<?php echo $shipper_country; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('shipper_country') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">Address</label>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" name="shipper_address" id="shipper_address"<?php echo $read_only?>><?php echo $shipper_address?></textarea>
                                                        <div class="form-control-focus"></div><?php echo form_error('shipper_address') ?>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">Building Housing Name</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="shipper_name_building_housing" id="shipper_name_building_housing" value="<?php echo $shipper_name_building_housing; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('shipper_name_building_housing') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">Building Housing Detail</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="shipper_detail_building_housing" id="shipper_detail_building_housing" value="<?php echo $shipper_detail_building_housing; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('shipper_detail_building_housing') ?>
                                                    </div>
                                                </div> -->
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">Postal Code</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="shipper_postal_code" id="shipper_postal_code" value="<?php echo $shipper_postal_code; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('shipper_postal_code') ?>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">Password</label>
                                                    <div class="col-md-8">
                                                        <input type="password" class="form-control" name="shipper_password" id="shipper_password" value="<?php echo $shipper_password; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('shipper_password') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">Retype Password</label>
                                                    <div class="col-md-8">
                                                        <input type="password" class="form-control" name="shipper_password2" id="shipper_password2" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('shipper_password2') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">Status</label>
                                                    <div class="col-md-8">
                                                       <select name="shipper_status" class="form-control" id="">
                                                            <option value="" <?= $shipper_status == 'nonactive' ? ' selected="selected"' : '';?>>Non Active</option>
                                                            <option value="" <?= $shipper_status == 'active' ? ' selected="selected"' : '';?>>Active</option>
                                                       </select>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">Province</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="prop" id="prop" onchange="ajaxkota(this.value)" required="true" <?php echo $read_only?>>
                                                            <option value="">-<?php echo $this->lang->line('selection'); ?>-</option>
                                                            <?php
                                                                foreach ($province as $cl) {
                                                            ?>
                                                            <option <?php echo $shipper_province_id== $cl->province_id ? 'selected="selected"' : '' ?> value="<?php echo $cl->province_id  ?>"><?php echo $cl->name  ?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="form-control-focus"></div><?php echo form_error('prop') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">City</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="kota" id="kota" required="true" onchange="ajaxkec(this.value)" <?php echo $read_only?>>
                                                            <?php
                                                                if($shipper_city_id != NULL){
                                                                    $city = $this->db->query("select name from city where city_id = '" . $shipper_city_id . "'")->row();

                                                            ?>
                                                                <option value="<?php echo $shipper_city_id?>"><?php echo $city->name?></option>
                                                            <?php
                                                                }else{
                                                            ?>
                                                                <option value="">-<?php echo $this->lang->line('selection'); ?>-</option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="form-control-focus"></div><?php echo form_error('kota') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="control-label col-md-4" for="PersonalContactDetails_Address_Company">Kecamatan</label>
                                                    <div class="col-md-8">
                                                        <select name="kec" id="kec" class="form-control" onchange="ajaxkel(this.value)" <?php echo $read_only?>>
                                                            <?php
                                                                if($shipper_district_id != NULL){
                                                                    $district = $this->db->query("select name from district where district_id = '" . $shipper_district_id . "'")->row();

                                                            ?>
                                                                <option value="<?php echo $shipper_district_id?>"><?php echo $district->name?></option>
                                                            <?php
                                                                }else{
                                                            ?>
                                                                <option value="">-<?php echo $this->lang->line('selection'); ?>-</option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select><?php echo form_error('kec') ?>
                                                    </div>
                                                </div>

                                                <div class="form-group form-md-line-input">
                                                    <label class="control-label col-md-4" for="PersonalContactDetails_Address_Company">Kelurahan</label>
                                                    <div class="col-md-8 ">
                                                        <select name="kel" class="form-control" id="kel" onchange="showCoordinate();" <?php echo $read_only?>>
                                                        <?php
                                                                if($shipper_village_id != NULL){
                                                                    $village = $this->db->query("select name from village where village_id = '" . $shipper_village_id . "'")->row();

                                                            ?>
                                                                <option value="<?php echo $shipper_village_id?>"><?php echo $village->name?></option>
                                                            <?php
                                                                }else{
                                                            ?>
                                                                <option value="">-<?php echo $this->lang->line('selection'); ?>-</option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select><?php echo form_error('kel') ?>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">Lattitude</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="shipper_lat" id="shipper_lat" value="<?php echo $shipper_lat; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('shipper_lat') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="">Longitude</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="shipper_lng" id="shipper_lng" value="<?php echo $shipper_lng; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('shipper_lng') ?>
                                                    </div>
                                                </div> -->

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