<?php $this->load->view('admin/template/header'); ?>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form User </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <!-- <a href="javascript:void(0)" onClick="add_data();" class="btn btn-primary btn-sm">Add Data</a> -->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                        <div class="x_content">

                        <form id="form_data" class="form-horizontal form-label-left" method="POST"  enctype="multipart/form-data">

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required"></span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="hidden" name="user_id" value="<?= isset($data->user_id) ? $data->user_id : ''?>" >
                                  <input type="hidden" name="password2" value="<?= isset($data->password) ? $data->password : ''?>" >
                                  <!-- <input type="hidden" name="type" value="news" value="<?= isset($data->type) ? $data->type : ''?>"> -->
                                  <input type="text" name="name" value="<?= isset($data->name) ? $data->name : ''?>" placeholder="Name" class="form-control col-md-7 col-xs-12" >
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required"></span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="email" value="<?= isset($data->email) ? $data->email : ''?>" placeholder="Email"  class="form-control col-md-7 col-xs-12" >
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Type <span class="required"></span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select name="type" id="" class="form-control">
                                    <option value="news">User News</option>
                                    <option value="uploader">User Uploader</option>
                                  </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password <span class="required"></span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="password" name="password" value="" class="form-control col-md-7 col-xs-12" placeholder="Password"  >
                              </div>
                            </div>
                         
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Address <span class="required"></span>
                              </label>
                              <div class="col-md-8 col-sm-6 col-xs-12">
                                  <textarea name="address" id="" cols="30" rows="10" class="form-control" placeholder="Address" ><?= isset($data->address) ? $data->address : ''?></textarea>
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

// CKEDITOR.replace( 'editor1' );
// $('#backTable').on('click',function(){
//     window.location = "<?= base_url('admin/agents') ?>";
// }); 
$('#btn_save').click(function(){
          // var userfile = $('#userfile').val();
                $('#form_data').ajaxForm({
                  url:"<?php echo base_url('admin/user/save_data')?>",
                  type: 'POST',
                  // data:{"userfile":userfile},
                  success: function(resp) {
                    //   if(resp == '1'){
                    //       alert("Can't upload!");
                    //   }else{
                        window.location = "<?= base_url('admin/user') ?>";
                    //   }
                  },
              });   

    
    });

</script>
