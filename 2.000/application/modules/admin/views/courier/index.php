<div class="page-content-wrapper">

	<div class="page-content">

		<div class="page-head">

			<div class="page-title">

				<h1>Courier</h1>

			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption font-dark">
							<i class="icon-users font-dark"></i>
							<span class="caption-subject bold uppercase">Courier</span>
						</div>
						<div class="tools">
						<div class="btn-group">
								<a href="<?php echo base_url();?>admin/courier/create" class="btn sbold btn-primary"><i class="fa fa-plus"></i> Add Courier
									
								</a>
							</div>
						</div>
					</div>
					<div class="portlet-body">
						<table class="table table-striped table-bordered table-hover" id="buku">
							<thead>
								<tr>
									<th width="20px">No</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Phone</th>
									<th>Email</th>
									<th>Postal Code</th>
									<th>Province</th>
									<th>City</th>
									<th>District</th>
									<th>Village</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
						
					</div>
				</div>
				<!-- END EXAMPLE TABLE PORTLET-->
			</div>
		</div>

	</div>

</div>

<script type="text/javascript">
var table;
 
 $(document).ready(function() {
  
	 //datatables
	 table = $('#buku').DataTable({ 
  
		 "processing": true, //Feature control the processing indicator.
		 "serverSide": true, //Feature control DataTables' server-side processing mode.
		 "order": [], //Initial no order.
  
		 // Load data for the table's content from an Ajax source
		 "ajax": {
			 "url": "<?php echo site_url('admin/courier/ajax_list')?>",
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
                url: "<?= base_url('admin/courier/delete') ?>",
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