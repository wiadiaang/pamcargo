

<?php $this->load->view('admin/template/header'); ?>

   <div class="clearfix"></div>

   <div class="row">
     <div class="col-md-12 col-sm-12 col-xs-12">
       <div class="x_panel">
         <div class="x_title">
           <h2>About</h2>
           <div class="clearfix"></div>
         </div>
               <div class="x_content">

                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Overview</h2>
                          <div class="clearfix"></div>
                        </div>
                            <form id="">
                              <div class="form-group">
                                <textarea name="" id="editor1" rows="10" cols="80" ><?= $about->overview; ?></textarea>
                              </div>
                              <div class="form-group">
                                <a href="javascript:void(0)" id="btn-overview" class="btn btn-sm btn-primary">Save Overview</a>
                              </div>
                            </form>
                      </div>


                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Objective</h2>
                          <div class="clearfix"></div>
                        </div>
                            <form id="">
                              <div class="form-group">
                                <textarea name="" id="editor2" rows="10" cols="80" ><?= $about->objective; ?></textarea>
                              </div>
                              <div class="form-group">
                                <a href="javascript:void(0)" id="btn-objective" class="btn btn-sm btn-primary">Save Objective</a>
                              </div>
                            </form>
                      </div>
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Vision</h2>
                          <div class="clearfix"></div>
                        </div>
                            <form id="">
                              <div class="form-group">
                                <textarea name="" id="editor3" rows="10" cols="80" ><?= $about->vision; ?></textarea>
                              </div>
                              <div class="form-group">
                                <a href="javascript:void(0)" id="btn-vision" class="btn btn-sm btn-primary">Save Vision</a>
                              </div>
                            </form>
                      </div>
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Mision</h2>
                          <div class="clearfix"></div>
                        </div>
                            <form id="">
                              <div class="form-group">
                                <textarea name="" id="editor4" rows="10" cols="80" ><?= $about->mision; ?></textarea>
                              </div>
                              <div class="form-group">
                                <a href="javascript:void(0)" id="btn-mision" class="btn btn-sm btn-primary">Save Mision</a>
                              </div>
                            </form>
                      </div>
                      <div class="x_panel">
                        <div class="x_title">
                          <h2>Our Team</h2>
                          <div class="clearfix"></div>
                        </div>
                            <form id="">
                              <div class="form-group">
                                <textarea name="" id="editor5" rows="10" cols="80" ><?= $about->team; ?></textarea>
                              </div>
                              <div class="form-group">
                                <a href="javascript:void(0)" id="btn-team" class="btn btn-sm btn-primary">Save Team</a>
                              </div>
                            </form>
                      </div>


               </div>  
       </div>
     </div>

           
 </div>
</div>
<!-- /page content -->


<?php $this->load->view('admin/template/footer'); ?>


<script>

CKEDITOR.replace( 'editor1' );
CKEDITOR.replace( 'editor2' );
CKEDITOR.replace( 'editor3' );
CKEDITOR.replace( 'editor4' );
CKEDITOR.replace( 'editor5' );

function add_data(){
$('#modal_data').modal('show');
$('#myModalLabel').text('Add Slider');
}

$('#btn-overview').on('click',function(){
  var data = CKEDITOR.instances.editor1.getData();
   $.ajax({
        url:"<?php echo base_url('admin/about/save_overview')?>",
        type: 'POST',
        data: {"overview":data,"id":"<?= $about->about_id; ?>"},
        success: function(resp) {
           alert('Success');
           location.reload();
        },
    });   
});

$('#btn-objective').on('click',function(){
  var data = CKEDITOR.instances.editor2.getData();
   $.ajax({
        url:"<?php echo base_url('admin/about/save_objective')?>",
        type: 'POST',
        data: {"objective":data,"id":"<?= $about->about_id; ?>"},
        success: function(resp) {
           alert('Success');
           location.reload();
        },
    });   
});
$('#btn-vision').on('click',function(){
  var data = CKEDITOR.instances.editor3.getData();
   $.ajax({
        url:"<?php echo base_url('admin/about/save_vision')?>",
        type: 'POST',
        data: {"vision":data,"id":"<?= $about->about_id; ?>"},
        success: function(resp) {
           alert('Success');
           location.reload();
        },
    });   
});
$('#btn-mision').on('click',function(){
  var data = CKEDITOR.instances.editor4.getData();
   $.ajax({
        url:"<?php echo base_url('admin/about/save_mision')?>",
        type: 'POST',
        data: {"mision":data,"id":"<?= $about->about_id; ?>"},
        success: function(resp) {
           alert('Success');
           location.reload();
        },
    });   
});
$('#btn-team').on('click',function(){
  var data = CKEDITOR.instances.editor5.getData();
   $.ajax({
        url:"<?php echo base_url('admin/about/save_team')?>",
        type: 'POST',
        data: {"team":data,"id":"<?= $about->about_id; ?>"},
        success: function(resp) {
           alert('Success');
           location.reload();
        },
    });   
});



</script>
