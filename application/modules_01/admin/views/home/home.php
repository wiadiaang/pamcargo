

<?php $this->load->view('admin/template/header'); ?>
 
         
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Slider </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <a href="javascript:void(0)" onClick="add_data();" class="btn btn-primary btn-sm">Add Data</a>
                     
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                        <div class="x_content">
                                    <table id="table_data" class="table table-striped table-bordered display compact nowrap" cellpadding="0" cellspacing="0">
                                      <thead>
                                        <tr>
                                          <th width="8px">No</th>
                                          <th>Title</th>
                                          <th>Description</th>
                                          <th>Image</th>
                                          <th width="8px">Action</th>
                                        </tr>
                                      </thead>


                                    </table>
                        </div>  
                </div>
              </div>

					
          </div>
        </div>


        <!-- /page content -->
       





<?php $this->load->view('admin/template/footer'); ?>


<div id="modal_data" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel"></h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form name="form_data" id="form_data" action="javascript:void(0)" method="POST" class="form-horizontal " enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Image</label>
                  <div class="col-sm-10">
                    <input type="file" id="userfile" class="form-control" name="image">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height:55px;" id="descr" name="description"></textarea>
                  </div>
                </div>

                <button type="submit" id="btn_save" class="btn btn-primary ">Save changes</button>
                
              </form>
              
            </div>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>

    <script>

    
  function add_data(){
    // $('#modal_data').modal('show');
    // $('#myModalLabel').text('Add Slider');
    window.location = "<?= base_url('admin/home/form') ?>";

  }
  
    var table;
    table = $('#table_data').DataTable({ 
        "processing": true, 
        "serverSide": true, 
        "order": [],
        "ajax": {
          "url": "<?php echo site_url('admin/home/ajax_list')?>",
          "type": "POST"
        },

        "columnDefs": [
        { 
          "targets": [ 0 ], 
          "orderable": false, 
          
        },
        ],
  });


function update(id){
  window.location = "<?= base_url('admin/home/form') ?>"+"/"+id;
}


function deletes(id){
  if(confirm('Delete ?')){
    $.ajax({
      url:"<?= base_url('admin/home/delete_data') ?>",
      type:"POST",
      data:{"id":id},
      success:function(){
        window.location = "<?= base_url('admin/home') ?>";
      },
    });


  }
}
    
    </script>
