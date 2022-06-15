<div class="page-content-wrapper">

	<div class="page-content">

		<div class="page-head">

			<div class="page-title">


			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption font-dark">
							<i class="fa fa-table font-dark"></i>
							<span class="caption-subject bold uppercase">Air Service </span>
						</div>
						<div class="tools">
						<div class="btn-group">
						<?php
							$type = $this->session->userdata('type');
							if($type == 'shiper'){ ?>
							<a href="<?php echo base_url();?>admin/daily_report/form_daily_report" class="btn sbold btn-primary"><i class="fa fa-plus"></i> Add Daily Report
								</a>

								<?php } ?>
							
							</div>
						</div>
					</div>
					<div class="portlet-body">
						<table class="table table-xs table-bordered table-hover  display compact nowrap custom topcustom" cellspacing="0" cellpadding="0" id="tbl_air">
							<thead >
								<tr  >
									<th width="5px">No</th>
									<th>Action</th>
									<th>Status</th>
									<th>Company</th>
									<th>Vendor</th>
									<th>Shipper</th>
									<th width="5px">Transport</th>
									<th>Ordering Customer</th>
									<th>Consignee</th>
									<th>Notify Party</th>
								</tr>
							</thead>
							<tbody  >
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

$('#daily').addClass('active');
var table;
 
 $(document).ready(function() {
  
	 //datatables
	 table = $('#table_master').DataTable({ 
		"createdRow": function( row, data, dataIndex ) {
			
           if ( data[2] == "Waiting process" ) {        
             $(row).addClass('danger');
           }else if ( data[2] == "Processed") {
             $(row).addClass('success');
           }

        },
		 "processing": true, //Feature control the processing indicator.
		 "serverSide": true, //Feature control DataTables' server-side processing mode.
		 "order": [], //Initial no order.
  
		 // Load data for the table's content from an Ajax source
		 "ajax": {
			 "url": "<?php echo site_url('admin/booking/ajax_list')?>",
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


 function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax 
}

	function hapus_master(id){
		Swal.fire({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		if (result.value) {

				$.ajax({
				url:"<?= base_url('admin/booking/delete_booking/');?>"+id,
				type:"POST",
				success:function(){
						Swal.fire({
                            type: 'success',
                            title: 'Your booking has been deleted',
                            showConfirmButton: false,
                            timer: 1500
                        });
						reload_table();
				},

			});
			
		}
		})


		
	}

	function process_booking(id){
		Swal.fire({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, Process it!'
		}).then((result) => {
		if (result.value) {

			$.ajax({
				url:"<?= base_url('admin/booking/process_booking'); ?>",
				type:"POST",
				data:{"master_id":id},
				success:function(){
					Swal.fire(
					'Processed!',
					'',
					'success'
					);
					reload_table();
				},
			});

			
		}
		})
	}

</script>
<style>
	.custom {
		font-size: 7px;
		font-family: Arial;
	}
	.bottomcustom, .topcustom {
		font-size: 7px;
		font-family: Arial;
		width: 540px;
	}
</style>