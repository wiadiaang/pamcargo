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
                        <div class="col-md-8">
                        <div class="portlet light bordered">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase"><?php echo $page; ?></span>
                                                </div>
                                            </div>
                                           
                                                
                                                <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" >
                                                    <div class="row">
                                                        <div class="col-md-">
                                                            <div class="form-body">
                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-4 control-label" for="nama_siswa">Level</label>
                                                                    <div class="col-md-8">
                                                                        <input type="text" class="form-control" name="level" value="<?php echo $level; ?>" />
                                                                        <div class="form-control-focus"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-4 control-label" for="nama_siswa">Keterangan</label>
                                                                    <div class="col-md-8">
                                                                        <input type="text" class="form-control" name="keterangan" value="<?php echo $keterangan; ?>" />
                                                                        <div class="form-control-focus"></div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 col-md-offset-4 margin-top-30">
                                                            <input type="submit" name="Simpan" class="btn blue" value="<?php echo $this->lang->line('save'); ?>" />
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





             

