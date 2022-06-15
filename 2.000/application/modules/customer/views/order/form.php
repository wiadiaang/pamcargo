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
                                           
                                                
                                                <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" onsubmit="return validateForm();">
                                                    <div class="row">
                                                        <div class="col-md-">
                                                            <div class="form-body">
                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-4 control-label" for="nama_siswa">Kategori</label>
                                                                    <div class="col-md-8">
                                                                        <select name="kategori_id" class="form-control" id="kategori_id" required>
                                                                            <option value="0">Pilih Kategori</option>
                                                                            <?php foreach($kategori as $row){ ?>
                                                                                <option value="<?php echo $row->kategori_id; ?>" <?php if($row->kategori_id == $kategori_id){ echo "Selected"; } ?>><?php echo $row->kategori; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                        <div class="form-control-focus"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-4 control-label" for="nama_siswa">Pengaduan</label>
                                                                    <div class="col-md-8">
                                                                        <textarea name="pengaduan" class="form-control" required><?php echo $pengaduan; ?></textarea>
                                                                        <div class="form-control-focus"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group form-md-line-input">
                                                                    <label class="col-md-4 control-label" for="nama_siswa">Foto</label>
                                                                    <div class="col-md-8">
                                                                        <input type="file" class="form-control" name="photo" value="" />
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
<script type="text/javascript">
	function validateForm()
	{
		var kategori_id = $("#kategori_id").val();
		if(kategori_id == "0")
		{
			alert('kategori harap di isi');
			return false;
		}
	}
</script>




             

