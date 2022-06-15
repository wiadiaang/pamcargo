<div class="page-content-wrapper">

	<div class="page-content">

		<div class="page-head">

			<div class="page-title">

				<h1>Dashboard</h1>

			</div>

		</div>

		<div class="row">

			<div class="part1">

				<div class="block">

					<div class="left">

						<?php echo $unpaid;?>

					</div>

					<div class="right">

						<img src="https://sms.rembon.co.id/assets/img/sms.png">
						<span>Unpaid</span>

					</div>

				</div>

				<div class="block">

					<div class="left">

						<?php echo $paid; ?>

					</div>

					<div class="right">

						<img src="https://sms.rembon.co.id/assets/img/client.png">
						<span>Paid</span>

					</div>

				</div>

				<div class="block">

					<div class="left">

						<?php echo $on_process; ?>

					</div>

					<div class="right">

						<img src="https://sms.rembon.co.id/assets/img/contact.png">
						<span>Shipment On Process</span>

					</div>

				</div>

				<div class="block">

					<div class="left">

						<?php echo $total_client; ?>

					</div>

					<div class="right">

						<img src="https://sms.rembon.co.id/assets/img/history.png">
						<span>Total Client</span>

					</div>

				</div>

			</div>



		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption font-dark">
							<i class="icon-users font-dark"></i>
							<span class="caption-subject bold uppercase">All Shipments</span>
						</div>
						<div class="tools">
						<div class="btn-group">
								<a href="<?php echo base_url();?>admin/Master/create_daerah" class="btn sbold btn-primary"><i class="fa fa-plus"></i> Create OPD
									
								</a>
							</div>
						</div>
					</div>
					<div class="portlet-body">
						<table class="table table-striped table-bordered table-hover" id="buku">
							<thead>
								<tr>
									<th width="20px">No</th>
									<th>No. Tracking</th>
									<th>Shipper</th>
									<th>Receiver</th>
									<th>Status</th>
									<th>Status Payment</th>
									<th>Print</th>
									<th>Barcode</th>
									<th>Update</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no = 1;
									foreach($all_shipment as $row){
										if($row->date_paid == NULL){
											$status_payment = 'Unpaid';
										}else{
											$status_payment = 'Paid';
										}
								?>
								<tr>
									<td><?php echo $no?></td>
									<td><?php echo $row->reff_stt?></td>
									<td><?php echo $row->shipper_name?></td>
									<td><?php echo $row->consignee_name?></td>
									<td><?php echo $row->status?></td>
									<td><?php echo $status_payment?></td>
									<td><button class="btn btn-info">Print</button></td>
									<td><button class="btn btn-success">Barcode</button></td>
									<td><button class="btn btn-warning">Update</button></td>
								</tr>
								<?php
								$no++;
									}
								?>
							</tbody>
						</table>
						
					</div>
				</div>
				<!-- END EXAMPLE TABLE PORTLET-->
			</div>
		</div>

	</div>

</div>

