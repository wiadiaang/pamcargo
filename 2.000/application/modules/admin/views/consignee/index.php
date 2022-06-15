<div class="page-content-wrapper">

	<div class="page-content">

		<div class="page-head">

			<div class="page-title">

				<h1>Consignee</h1>

			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption font-dark">
							<i class="icon-users font-dark"></i>
							<span class="caption-subject bold uppercase">Consignee</span>
						</div>
						<div class="tools">
						<div class="btn-group">
								<a href="<?php echo base_url();?>admin/consignee/create" class="btn sbold btn-primary"><i class="fa fa-plus"></i> Add consignee
									
								</a>
							</div>
						</div>
					</div>
					<div class="portlet-body">
						<table class="table table-striped table-bordered table-xs table-hover display compact nowrap" id="bukus" cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th width="20px">No</th>
									<th>Name</th>
									<th>Street</th>
									<th>City</th>
									<th>Zip Code</th>
									<th>Country</th>
									<!-- <th>Email</th>
									<th>Contact</th>
									<th>Phone</th>
									<th>Action</th> -->
								</tr>
							</thead>
						
						</table>
						
					</div>
				</div>
			</div>
		</div>

	</div>

</div>
<script type="text/javascript">
var table;
 
 $(document).ready(function() {
  
	 //datatables
	 table = $('#bukus').DataTable({ 
  
		 "processing": true, //Feature control the processing indicator.
		 "serverSide": true, //Feature control DataTables' server-side processing mode.
		 "order": [], //Initial no order.
  
		 // Load data for the table's content from an Ajax source
		 "ajax": {
			 "url": "<?php echo site_url('admin/consignee/ajax_list')?>",
			 "type": "POST"
		 },
  
		 //Set column definition initialisation properties.
		 "columnDefs": [
		 { 
			 "targets": [ 0 ], //first column / numbering column
			 "orderable": false, //set not orderable
		 },
		 ],
  
	 });
  
 });

 function hapus(no) {
        job = confirm("Are you sure want to delete this data?");
        if (job != true)
        {
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/consignee/delete') ?>",
                data: {
                    'id': no
                },
                success: function (data, status) {
                    setTimeout(location.reload.bind(location), 5000);
					toastr.success('<?php echo $this->lang->line('success_alert'); ?>', '<?php echo $this->lang->line('delete_success'); ?>', {timeOut: 5000});
                },
                error: function () {
                    console.log("failure");
                }
            });
            return false;
        }
    }

</script>