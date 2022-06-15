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
                                    <div class="row">
                                        <div class="col-md-">
                                            <div class="form-body">
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">Code</label>
                                                    <div class="col-md-8">
                                                        <input type="hidden" class="form-control" name="code_flight_old" id="code_flight_old" value="<?php echo $code_flight; ?>" />
                                                        <input type="text" class="form-control" name="code_flight" id="code_flight" value="<?php echo $code_flight; ?>" />
                                                        <div class="form-control-focus"></div><?php echo form_error('code_flight') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">Name flight</label>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" <?php echo $read_only?>/>
                                                        <div class="form-control-focus"></div><?php echo form_error('name') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">ETD</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-start-date="+0d">
                                                            <input type="text" class="form-control" name="etd" id="etd" value="<?php echo $etd?>" />
                                                            <span class="input-group-btn">
                                                                <button class="btn default" type="button">
                                                                    <i class="fa fa-calendar"></i>
                                                                </button>
                                                            </span>
                                                        </div>

                                                        <div class="form-control-focus"></div><?php echo form_error('etd') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa"></label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <input type="text" name="time" class="form-control timepicker timepicker-24" value="<?php echo $time?>">
                                                            <span class="input-group-btn">
                                                                <button class="btn default" type="button">
                                                                    <i class="fa fa-clock-o"></i>
                                                                </button>
                                                            </span>
                                                        </div>                                                                  

                                                        <div class="form-control-focus"></div><?php echo form_error('etd') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">ETA</label>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-start-date="+0d">
                                                            <input type="text" class="form-control" name="eta" id="eta" value="<?php echo $eta?>" />
                                                            <span class="input-group-btn">
                                                                <button class="btn default" type="button">
                                                                    <i class="fa fa-calendar"></i>
                                                                </button>
                                                            </span>
                                                        </div>

                                                        <div class="form-control-focus"></div><?php echo form_error('eta') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa"></label>
                                                    <div class="col-md-8">
                                                        <div class="input-group">
                                                            <input type="text" name="time2" class="form-control timepicker timepicker-24" value="<?php echo $time2?>">
                                                            <span class="input-group-btn">
                                                                <button class="btn default" type="button">
                                                                    <i class="fa fa-clock-o"></i>
                                                                </button>
                                                            </span>
                                                        </div>                                                                  

                                                        <div class="form-control-focus"></div><?php echo form_error('etd') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">From</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="from_code_main_city" id="from_code_main_city"  required="true" <?php echo $read_only?>>
                                                            <option value="">-<?php echo $this->lang->line('selection'); ?>-</option>
                                                            <?php
                                                                foreach ($from as $cl) {
                                                            ?>
                                                            <option <?php echo $from_code_main_city== $cl->code_main_city ? 'selected="selected"' : '' ?> value="<?php echo $cl->code_main_city  ?>"><?php echo $cl->name  ?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="form-control-focus"></div><?php echo form_error('from_code_main_city') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group form-md-line-input">
                                                    <label class="col-md-4 control-label" for="nama_siswa">To</label>
                                                    <div class="col-md-8">
                                                        <select class="form-control" name="to_code_main_city" id="to_code_main_city"  required="true" <?php echo $read_only?>>
                                                            <option value="">-<?php echo $this->lang->line('selection'); ?>-</option>
                                                            <?php
                                                                foreach ($from as $cl) {
                                                            ?>
                                                            <option <?php echo $to_code_main_city== $cl->code_main_city ? 'selected="selected"' : '' ?> value="<?php echo $cl->code_main_city  ?>"><?php echo $cl->name  ?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="form-control-focus"></div><?php echo form_error('to_code_main_city') ?>
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
