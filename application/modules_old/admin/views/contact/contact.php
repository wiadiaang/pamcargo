

<?php $this->load->view('admin/template/header'); ?>
 
 <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
     <div class="x_panel">
       <div class="x_title">
         <h2>Contact </h2>
         <ul class="nav navbar-right panel_toolbox">
           <a href="javascript:void(0)" onClick="reload_table();" class="btn btn-default btn-sm">Reload</a>
          
         </ul>
         <div class="clearfix"></div>
       </div>
             <div class="x_content">
                         <table id="table_data" class="table table-striped table-bordered display compact nowrap" cellpadding="0" cellspacing="0">
                           <thead>
                             <tr>
                               <th width="8px">No</th>
                               <th width="20px">Name</th>
                               <th width="50px">Phone | Email</th>
                               <th>Message</th>
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
  window.location = "<?= base_url('admin/contact/form') ?>";
}

var table;
table = $('#table_data').DataTable({ 
      "processing": true, 
      "serverSide": true, 
      "order": [],
      "ajax": {
      "url": "<?php echo site_url('admin/contact/ajax_list')?>",
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

</script>
