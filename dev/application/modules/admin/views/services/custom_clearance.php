

<?php $this->load->view('admin/template/header'); ?>

<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Services</h2>
        <div class="clearfix"></div>
      </div>
            <div class="x_content">

                   <div class="x_panel">
                     <div class="x_title">
                       <h2>Custom Clearance</h2>
                       <div class="clearfix"></div>
                     </div>
                         <form id="form_data">
                           <div class="form-group">
                               <label for="">Title</label>
                             <input type="hidden" name="id" class="form-control" value="<?= $data->sas_id; ?>">
                             <input type="text" name="title" id="title" class="form-control" value="<?= $data->title; ?>">
                           </div>
                           <div class="form-group">
                             <textarea name="content" id="editor6" rows="10" cols="80" ><?= $data->content; ?></textarea>
                           </div>
                           <div class="form-group">
                             <a href="javascript:void(0)" id="btn-save" class="btn btn-sm btn-primary">Save </a>
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

CKEDITOR.replace( 'editor6' );

function add_data(){
$('#modal_data').modal('show');
$('#myModalLabel').text('Add Slider');
}

$('#btn-save').on('click',function(){
var data = CKEDITOR.instances.editor6.getData();
var tit = $('#title').val();
$.ajax({
     url:"<?php echo base_url('admin/services/save_data')?>",
     type: 'POST',
     data: {"content":data,"id":"<?= $data->sas_id; ?>","table":"<?= $table; ?>","title":tit },
     success: function(resp) {
        alert('Success');
        location.reload();
     },
 });   
});


</script>
