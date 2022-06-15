<div class="page-content-wrapper">

	<div class="page-content">

		<div class="page-head">

			<div class="page-title">

				<!-- <h1>Notification</h1> -->

			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption font-dark">
							<i class="icon-bell font-dark"></i>
							<span class="caption-subject bold uppercase">Notification</span>
						</div>
						<div class="tools">
						<div class="btn-group">
								
							</div>
						</div>
					</div>
					<div class="portlet-body">
						<table class="table table-striped table-xs table-bordered table-hover" id="table">
							<thead>
								<tr>
									<th width="">Date</th>
									<th ></th>
									<th ></th>
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
	 	table = $('#table').DataTable({ 
  
			"processing": true, //Feature control the processing indicator.
			"serverSide": true, //Feature control DataTables' server-side processing mode.
			"order": [], //Initial no order.
	
			// Load data for the table's content from an Ajax source
			"ajax": {
				"url": "<?php echo site_url('admin/notif/ajax_list')?>",
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


</script>
