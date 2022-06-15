<?php $this->load->view('admin/template/header'); ?>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Offices </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <!-- <a href="javascript:void(0)" onClick="add_data();" class="btn btn-primary btn-sm">Add Data</a> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                        <div class="x_content">

                        <form id="form_data" class="form-horizontal form-label-left" method="POST"  enctype="multipart/form-data">

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" >Name Country <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="hidden" name="offices_id" value="<?= isset($data->offices_id) ? $data->offices_id : ''?>" class="form-control col-md-7 col-xs-12" >
                                <input type="text" name="name_country" value="<?= isset($data->name_country) ? $data->name_country : ''?>" class="form-control col-md-7 col-xs-12" >
                            </div>
                            </div>

                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" >Name Office<span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="name_office" value="<?= isset($data->name_office) ? $data->name_office : ''?>" class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Address <span class="required"></span>
                            </label>
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <textarea name="address"  cols="40" rows="5"><?= isset($data->address) ? $data->address : ''?></textarea>
                            </div>
                            </div>

                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" >Contact Name<span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="contact_name" value="<?= isset($data->contact_name) ? $data->contact_name : ''?>" class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>
                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" >Telp<span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="telp" value="<?= isset($data->telp) ? $data->telp : ''?>" class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>
                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" >Fax<span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="fax" value="<?= isset($data->fax) ? $data->fax : ''?>" class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>
                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" >Mob<span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="mob" value="<?= isset($data->mob) ? $data->mob : ''?>" class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>
                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" >Email<span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="email" value="<?= isset($data->email) ? $data->email : ''?>" class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>
                            <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" >Website<span class="required"></span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="website" value="<?= isset($data->website) ? $data->website : ''?>" class="form-control col-md-7 col-xs-12" >
                                </div>
                            </div>


                            <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Image Flag</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="hidden" name="image2" value="<?= isset($data->image_thumbnail) ? $data->image_thumbnail : ''?>" class="form-control col-md-7 col-xs-12" >
                                <input  class="form-control col-md-7 col-xs-12" type="file" id="userfile" name="image">
                            </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a href="javascript:void(0)" id="backTable" class="btn btn-primary" >Cancel</a>
                                <button id="btn_save" class="btn btn-success">Save</button>
                            </div>
                            </div>

                            </form>

                        </div>  
                </div>
              </div>
					
          </div>
        </div>


<?php $this->load->view('admin/template/footer'); ?>

<script>

CKEDITOR.replace( 'editor1' );
$('#backTable').on('click',function(){
    window.location = "<?= base_url('admin/offices') ?>";
}); 
$('#btn_save').click(function(){
          var userfile = $('#userfile').val();
                $('#form_data').ajaxForm({
                  url:"<?php echo base_url('admin/offices/save_offices')?>",
                  type: 'POST',
                  data:{"userfile":userfile},
                  success: function(resp) {
                    //   if(resp == '1'){
                    //       alert("Can't upload!");
                    //   }else{
                        window.location = "<?= base_url('admin/offices') ?>";
                    //   }
                  },
              });   

    
    });

</script>
