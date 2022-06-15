

<?php $this->load->view('admin/template/header'); ?>
<link href="<?= base_url(); ?>assets/dash/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Slider </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <!-- <a href="javascript:void(0)" onClick="add_data();" class="btn btn-primary btn-sm">Add Data</a> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                        <div class="x_content">

                                
                        <form id="form_data" class="form-horizontal form-label-left" method="POST"  enctype="multipart/form-data">

                        <div class="form-group">
                             <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Type Slider</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="input-group">

                                  <select name="type" id="type" class="form-control">
                                      <option value="1">Slider 1</option>
                                      <option value="2">Slider 2</option>
                                  </select>
                                    
                                </div>
                              </div>
                            </div>



                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="hidden" name="slider_id" id="slider_id" value="<?= isset($data->slider_id) ? $data->slider_id : ''?>" class="form-control col-md-7 col-xs-12" >
                                <input type="text" name="title" value="<?= isset($data->title) ? $data->title : ''?>" class="form-control col-md-7 col-xs-12" >
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="description" id="description1" value="<?= isset($data->description) ? $data->description : ''?>" class="form-control col-md-7 col-xs-12">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="hidden" name="image2" value="<?= isset($data->image) ? $data->image : ''?>" class="form-control col-md-7 col-xs-12" >
                                <input  class="form-control col-md-7 col-xs-12" type="file" id="userfile" name="image">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Text Color</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="input-group demo2">
                                  <input type="text" name="text_color" value="<?= isset($data->color_text) ? $data->color_text : ''?>" class="form-control" />
                                  <span class="input-group-addon"><i></i></span>
                              </div>
                            </div>
                            </div>

                           

                            <div id="slider2">

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Title 2<span class="required"></span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="title2" id="" value="<?= isset($data->title2) ? $data->title2 : ''?>" cols="30" rows="10" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description 2 <span class="required"></span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <textarea name="description2" id="editor2"  cols="30" rows="5" class="form-control col-md-7 col-xs-12"><?= isset($data->description2) ? $data->description2 : ''?></textarea>
                              </div>
                            </div>
                            

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Title 3<span class="required"></span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="title3" id="" value="<?= isset($data->title3) ? $data->title3 : ''?>" cols="30" rows="10" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description 3 <span class="required"></span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <textarea name="description3"  id="editor3"  cols="30" rows="5" class="form-control col-md-7 col-xs-12"><?= isset($data->description3) ? $data->description3 : ''?></textarea>
                              </div>
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
<script src="<?= base_url(); ?>assets/dash/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>

<script>

CKEDITOR.replace('editor2');
CKEDITOR.replace('editor3');

$("#slider2").attr("hidden","");

$("#type").on('change',function(){
  var type = $("#type").val();
  if(type == '1'){
    $("#slider2").attr("hidden","");
    $("#description1").removeAttr("disabled","");
  }else{
    $("#slider2").removeAttr("hidden","");
    $("#description1").attr("disabled","");
  }
  
});

var slider_id = $("#slider_id").val();
if(slider_id == ""){
 

}else{
  var type = $("#type").val();
    if("<?= isset($data->type) ? $data->type : ''?>" == '1' ){

    }else{
      $("#slider2").removeAttr("hidden","");
      $("#type").val("<?= isset($data->type) ? $data->type : ''?>");
      $("#description1").attr("disabled","");
    }
 

}



$('#backTable').on('click',function(){
    window.location = "<?= base_url('admin/home') ?>";
});


$('#btn_save').click(function(){
          var userfile = $('#userfile').val();
          
                $('#form_data').ajaxForm({
                  url:"<?php echo base_url('admin/home/save_slider')?>",
                  type: 'POST',
                  data:{"userfile":userfile},
                  success: function(resp) {
                    //   if(resp == '1'){
                    //       alert("Can't upload!");
                    //   }else{
                        window.location = "<?= base_url('admin/home') ?>";
                    //   }
                  },
              });   
              
          

    });

</script>
