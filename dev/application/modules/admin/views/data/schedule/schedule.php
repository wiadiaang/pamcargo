 

<?php $this->load->view('admin/template/header'); ?>
 
 <div class="row">
   <div class="col-md-6 col-sm-12 col-xs-12">
     <div class="x_panel">
       <div class="x_title">
         <h2>Upload Schedule </h2>
          <div class="clearfix"></div> 
       </div>
        <div class="x_content">  
          
                <form id="form_upload" method="POST" enctype="multipart/form-data" class="form-horizontal" >
                    <div class="form-group">
                        <label for="">Departure</label>
                        <select name="departure_id" id="departure_id" class="form-control">
                           <option value="">-- Select Departure --</option>
                           <?php 
                              $a = $this->db->query("SELECT * FROM departure WHERE active != '0' ORDER BY departure_name ASC ")->result();
                              foreach($a as $b){
                           ?>
                           <option value="<?= $b->departure_id ?>"><?= $b->departure_name ?></option>
                              <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">File Excel <br><br><small> <a href="<?= base_url('assets/dash/files/temp/Upload_schedule.xlsx');?>">Download template</a></small><br><br></label>
                        <input type="file" id="userfile" name="image" >
                    </div>

                    
                    <div class="form-group">
                        <label for="">Delete old data </label>
                        <select name="delete_all" id=""  class="form-control">
                          <option value="0">No</option>
                          <option value="1">Yes</option>
                        </select>

                    </div>
                    <hr>
                    <div class="form-group">
                        <!-- <a href="javascript:void(0)" class="btn btn-primary btn-md" id="btn-upload" >Upload</a> -->
                        <button id="btn_save" class="btn btn-success">Upload</button>
                       </div>
                </form>        
        </div>  
     </div>
   </div>

</div>
</div>
 



 <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
     <div class="x_panel">
       <div class="x_title">
         <h2>Table Schedule </h2>
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
                               <th>Departure Origin</th>
                               <th>Destination </th>
                               <th>Via</th>
                               <th>Feeder Vessel</th>
                               <th>Mother Vessel</th>
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


  $('#btn_save').click(function(){  
      var departure_id = $('#departure_id').val();
      var userfile = $('#userfile').val();

      if(departure_id == ''){
        alert('Select departure');
      }else if(userfile == ''){
        alert('Upload file');
      }else{
         
                $('#form_upload').ajaxForm({
                  url:"<?php echo base_url('admin/schedule/upload_excel')?>",
                  type: 'POST',
                  data:{"userfile":userfile},
                  success: function(resp) {
                    // console.log(resp);
                    // if(resp == 'yes'){
                        window.location = "<?= base_url('admin/schedule') ?>";
                    // }else{
                    //   window.location = "<?= base_url('admin/schedule/ll') ?>";
                    // }
                        
                  },
              });   

      }

          
    });


function add_data(){
  window.location = "<?= base_url('admin/schedule/form') ?>";
}

var table;
table = $('#table_data').DataTable({ 
      "processing": true, 
      "serverSide": true, 
      "order": [],
      "ajax": {
      "url": "<?php echo site_url('admin/schedule/ajax_list')?>",
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
  window.location = "<?= base_url('admin/schedule/form') ?>"+"/"+id;
}

function deletes(id){
  if(confirm('Delete ?')){
          $.ajax({
          url:"<?= base_url('admin/schedule/delete_data') ?>",
          type:"POST",
          data:{"id":id},
          success:function(){
            reload_table();
          },
          });
    }
}

</script>
