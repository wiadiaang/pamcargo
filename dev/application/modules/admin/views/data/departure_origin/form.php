<?php $this->load->view('admin/template/header'); ?>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Departure </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <!-- <a href="javascript:void(0)" onClick="add_data();" class="btn btn-primary btn-sm">Add Data</a> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                        <div class="x_content">

                        <form id="form_data" class="form-horizontal form-label-left" method="POST"  enctype="multipart/form-data">

                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="hidden" name="departure_id" value="<?= isset($data->departure_id) ? $data->departure_id : ''?>" class="form-control col-md-7 col-xs-12" >
                                <input type="text" name="departure_name" value="<?= isset($data->departure_name) ? $data->departure_name : ''?>" class="form-control col-md-7 col-xs-12" >
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
    window.location = "<?= base_url('admin/departure_origin') ?>";
}); 
$('#btn_save').click(function(){
          var userfile = $('#userfile').val();
                $('#form_data').ajaxForm({
                  url:"<?php echo base_url('admin/departure_origin/save_departure_origin')?>",
                  type: 'POST',
                  data:{"userfile":userfile},
                  success: function(resp) {
                        window.location = "<?= base_url('admin/departure_origin') ?>";
                  },
              });   

    
    });

</script>
