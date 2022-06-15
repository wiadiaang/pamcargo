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
                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="category" id="" class="form-control">
                                  <option value="education">education</option>
                                  <option value="sport">sport</option>
                                  <option value="business">business</option>
                                </select>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Caption Thumbnail <span class="required"></span>
                            </label>
                            <div class="col-md-8 col-sm-6 col-xs-12">
                          
                                <textarea name="caption_thumbnail" class="form-control" placeholder="Caption Thumbnail" cols="30" rows="5"><?= isset($data->caption_thumbnail) ? $data->caption_thumbnail : ''?></textarea>
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
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="hidden" name="image2" value="<?= isset($data->image) ? $data->image : ''?>" class="form-control col-md-7 col-xs-12" >
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
    window.location = "<?= base_url('admin/news') ?>";
}); 
$('#btn_save').click(function(){
          var userfile = $('#userfile').val();
                $('#form_data').ajaxForm({
                  url:"<?php echo base_url('admin/news/save_news')?>",
                  type: 'POST',
                  data:{"userfile":userfile},
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
