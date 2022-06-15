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
                                                                    <label class="col-md-4 control-label" for="nama_siswa">Nama</label>
                                                                    <div class="col-md-8">
                                                                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" />
                                                                        <div class="form-control-focus"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-4 control-label" for="nama_siswa">Username</label>
                                                                    <div class="col-md-8">
                                                                        <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" />
                                                                        <div class="form-control-focus"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-4 control-label" for="nama_siswa">Password</label>
                                                                    <div class="col-md-8">
                                                                        <input type="password" class="form-control" name="password" value="<?php echo $password; ?>" />
                                                                        <div class="form-control-focus"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-4 control-label" for="nama_siswa">Level</label>
                                                                    <div class="col-md-8">
                                                                        <select name="level_id" id="level_id" class="form-control">
                                                                            <option value="0">Pilih Level</option>
                                                                            <?php foreach($level as $row){ ?>
                                                                                <option value="<?php echo $row->level_id; ?>" <?php if($row->level_id == $level_id){ echo "Selected"; } ?>><?php echo $row->keterangan; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                        <div class="form-control-focus"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group form-md-line-input" id="opd" style="display:none">
                                                                    <label class="col-md-4 control-label" for="nama_siswa">OPD</label>
                                                                    <div class="col-md-8">
                                                                        <select name="opd_id" class="form-control">
                                                                            <option value="0">Pilih OPD</option>
                                                                            <?php foreach($opd as $row){ ?>
                                                                                <option value="<?php echo $row->opd_id; ?>" <?php if($row->opd_id == $opd_id){ echo "Selected"; } ?>><?php echo $row->nama_opd; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                        <div class="form-control-focus"></div>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="status_id" value="1">

                                                                <!-- <div class="form-group form-md-line-input">
                                                                    <label class="col-md-4 control-label" for="nama_siswa">Status</label>
                                                                    <div class="col-md-8">
                                                                        <select name="level_id" class="form-control">
                                                                            <option value="0">Pilih Status</option>
                                                                            <?php foreach($status as $row){ ?>
                                                                                <option value="<?php echo $row->status_id; ?>" <?php if($row->status_id == $status_id){ echo "Selected"; } ?>><?php echo $row->status; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                        <div class="form-control-focus"></div>
                                                                    </div>
                                                                </div> -->

                                                                <div class="form-group form-md-line-input" id="kat" style="display:none">
                                                                    <label class="col-md-4 control-label" for="status">Kategori</label>
                                                                    <div class="col-md-8">
                                                                    <?php
                                                                        $exp = explode(",",$kategori_id);
                                                                        
                                                                    ?>
                                                                        <select name="kategori_id" multiple id="client" class = "form-control selectpicker bs-select" >                              
                                                                            <?php  foreach($kategori as $rows){ ?>
                                                                                    <option value="<?php echo $rows->kategori_id; ?>" <?php foreach($exp as $r){
                                                                        if($r == $rows->kategori_id){ echo "Selected"; }
                                                                        } ?>><?php echo $rows->kategori; ?>
                                                                                    </option>                              
                                                                                <?php } ?>
                                                                        </select>
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

<script>
<?php if($level_id == "3"){ ?>
    $("#opd").show();
    $("#kat").hide();
<?php }else if($level_id == "2"){ ?>
    $("#opd").hide();
    $("#kat").show();
<?php }else{ ?>
    $("#opd").hide();
    $("#kat").hide();
<?php } ?>
    $( "#level_id" ).change(function() {
        var level_id = $("#level_id").val();
        if(level_id == "3")
        {
            $("#opd").show();
            $("#kat").hide();
        }else if(level_id == "2"){
            $("#opd").hide();
            $("#kat").show();
        }else{
            $("#opd").hide();
            $("#kat").hide();
        }
    });
</script>



             

