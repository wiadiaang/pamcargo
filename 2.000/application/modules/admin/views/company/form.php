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
                                    <input type="hidden" class="form-control" name="company_id" id="company_id" value="<?php echo $company_id; ?>" />
                                    <div class="row">
                                        <div class="col-md-">
                                            <div class="form-body">
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">Name</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('name') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">Phone</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $phone; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('phone') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">Address</label>
                                                    <div class="col-md-8">
                                                        <textarea class="form-control" name="address" id="address"<?php echo $read_only?>><?php echo $address?></textarea>
                                                        <div class="form-control-focus"></div><?php echo form_error('address') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">Email</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="email" id="email" value="<?php echo $email; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('email') ?>
                                                    </div>
                                                </div>
                                                <?php
                                                if($form == 'read' || $form == 'update'){

                                                }else{
                                                ?>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">Password</label>
                                                    <div class="col-md-8">
                                                        <input type="password" class="form-control" name="password" id="password" value="<?php echo $password; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('password') ?>
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">Postal Code</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="postal_code" id="postal_code" value="<?php echo $postal_code; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('postal_code') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">Province</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="prop" id="prop" onchange="ajaxkota(this.value)" required="true" <?php echo $read_only?>>
                                                            <option value="">-<?php echo $this->lang->line('selection'); ?>-</option>
                                                            <?php
                                                                foreach ($province as $cl) {
                                                            ?>
                                                            <option <?php echo $company_province_id== $cl->province_id ? 'selected="selected"' : '' ?> value="<?php echo $cl->province_id  ?>"><?php echo $cl->name  ?></option>
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
                                                            <?php
                                                                if($company_city_id != NULL){
                                                                    $city = $this->db->query("select name from city where city_id = '" . $company_city_id . "'")->row();

                                                            ?>
                                                                <option value="<?php echo $company_city_id?>"><?php echo $city->name?></option>
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
                                                                if($company_district_id != NULL){
                                                                    $district = $this->db->query("select name from district where district_id = '" . $company_district_id . "'")->row();

                                                            ?>
                                                                <option value="<?php echo $company_district_id?>"><?php echo $district->name?></option>
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
                                                                if($company_village_id != NULL){
                                                                    $village = $this->db->query("select name from village where village_id = '" . $company_village_id . "'")->row();

                                                            ?>
                                                                <option value="<?php echo $company_village_id?>"><?php echo $village->name?></option>
                                                            <?php
                                                                }else{
                                                            ?>
                                                                <option value="">-<?php echo $this->lang->line('selection'); ?>-</option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select><?php echo form_error('kel') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">Lattitude</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="lat" id="lat" value="<?php echo $lat; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('lat') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">Longitude</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="lng" id="lng" value="<?php echo $lng; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('lng') ?>
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