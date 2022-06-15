

<?php $this->load->view('admin/template/header'); ?>
 
 <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
     <div class="x_panel">
       <div class="x_title">
         <h2>User </h2>
         <ul class="nav navbar-right panel_toolbox">
           <a href="javascript:void(0)" onClick="add_data();" class="btn btn-primary btn-sm">Add Data</a>
           <a href="javascript:void(0)" onClick="reload_table();" class="btn btn-default btn-sm">Reload</a>
          
         </ul>
         <div class="clearfix"></div>
       </div>
             <div class="x_content">
                  <table id="table_data" class="table table-striped table-bordered display compact nowrap" cellpadding="0" cellspacing="0">
                    <thead>
                      <tr>
                        <th width="8px">No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type</th>
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
<script>


function add_data(){
  window.location = "<?= base_url('admin/user/form') ?>";
}

var table;
table = $('#table_data').DataTable({ 
      "processing": true, 
      "serverSide": true, 
      "order": [],
      "ajax": {
      "url": "<?php echo site_url('admin/user/ajax_list')?>",
      "type": "POST"
      },

      "columnDefs": [
      { 
      "targets": [ 0 ], 
      "orderable": false, 

      },
      ],
});

function reload_table(){
  table.ajax.reload();
}

function update(id){
  window.location = "<?= base_url('admin/user/form') ?>"+"/"+id;
}

function deletes(id){
  if(confirm('Delete ?')){
          $.ajax({
          url:"<?= base_url('admin/user/delete_data') ?>",
          type:"POST",
          data:{"id":id},
          success:function(){
            reload_table();
          },
          });
    }
}

</script>
