<?php $this->load->view('admin/template/header'); ?>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form News </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <!-- <a href="javascript:void(0)" onClick="add_data();" class="btn btn-primary btn-sm">Add Data</a> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                        <div class="x_content">

                        <form id="form_data" class="form-horizontal form-label-left" method="POST"  enctype="multipart/form-data">

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="hidden" name="news_id" value="<?= isset($data->news_id) ? $data->news_id : ''?>" class="form-control col-md-7 col-xs-12" >
                                <input type="text" name="title" value="<?= isset($data->title) ? $data->title : ''?>" class="form-control col-md-7 col-xs-12" >
                            </div>
                            </div>
                            <!-- <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="category" id="" class="form-control">
                                  <option value="education">education</option>
                                  <option value="sport">sport</option>
                                  <option value="business">business</option>
                                </select>
                            </div> 
                            </div> -->
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Caption Thumbnail <span class="required"></span>
                            </label>
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <input type="text" name="caption_thumbnail" class="form-control" placeholder="Caption Thumbnail" maxlength="99" value="<?= isset($data->caption_thumbnail) ? $data->caption_thumbnail : ''?>" >
                                <!-- <textarea name="caption_thumbnail" class="form-control" placeholder="Caption Thumbnail" cols="30" rows="5"><?= isset($data->caption_thumbnail) ? $data->caption_thumbnail : ''?></textarea> -->
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description <span class="required"></span>
                            </label>
                            <div class="col-md-8 col-sm-6 col-xs-12">
                          
                                <textarea name="description" id="editor1" cols="30" rows="10"><?= isset($data->description) ? $data->description : ''?></textarea>
                            </div>  
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Image 1</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="hidden" name="image_thumbnail" value="<?= isset($data->image_thumbnail) ? $data->image_thumbnail : ''?>" class="form-control col-md-7 col-xs-12" >
                                  <input  class="form-control col-md-7 col-xs-12" type="file" id="userfile" name="image">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Image 2</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="hidden" name="image_2" value="<?= isset($data->image2) ? $data->image2 : ''?>" class="form-control col-md-7 col-xs-12" >
                                  <input  class="form-control col-md-7 col-xs-12" type="file" id="userfile2" name="image2">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Image 3</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="hidden" name="image_3" value="<?= isset($data->image3) ? $data->image3 : ''?>" class="form-control col-md-7 col-xs-12" >
                                  <input  class="form-control col-md-7 col-xs-12" type="file" id="userfile3" name="image3">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Image 4</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="hidden" name="image_4" value="<?= isset($data->image4) ? $data->image4 : ''?>" class="form-control col-md-7 col-xs-12" >
                                  <input  class="form-control col-md-7 col-xs-12" type="file" id="userfile4" name="image4">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Image 5</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="hidden" name="image_5" value="<?= isset($data->image5) ? $data->image5 : ''?>" class="form-control col-md-7 col-xs-12" >
                                  <input  class="form-control col-md-7 col-xs-12" type="file" id="userfile5" name="image5">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Active</label>
                              <div class="col-md-2 col-sm-2 col-xs-2">
                                  <select name="active" id="" class="form-control">
                                    <option value="1" <?php if(isset($data->active) == '1'){ echo ' selected="selected"'; } ?> >Yes</option>
                                    <option value="0" <?php if(isset($data->active) == '0'){ echo ' selected="selected"'; } ?>>No</option>
                                  </select>
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
    window.location = "<?= base_url('admin/news') ?>";
}); 
$('#btn_save').click(function(){
          var userfile = $('#userfile').val();
          var userfile2 = $('#userfile2').val();
          var userfile3 = $('#userfile3').val();
          var userfile4 = $('#userfile4').val();
          var userfile5 = $('#userfile5').val();
                $('#form_data').ajaxForm({
                  url:"<?php echo base_url('admin/news/save_news')?>",
                  type: 'POST',
                  data:{"userfile":userfile, "userfile2":userfile2, "userfile3":userfile3, "userfile4":userfile4, "userfile5":userfile5},
                  beforeSend:function(){
                    $('#backTable').hide();
                    $('#btn_save').attr('disabled','');
                    $('#btn_save').text('Please Wait ...');
                  },
                  success: function(resp) {
                    //   if(resp == '1'){
                    //       alert("Can't upload!");
                    //   }else{
                        window.location = "<?= base_url('admin/news') ?>";
                    //   }
                  },
              });   

    
    });

</script>
