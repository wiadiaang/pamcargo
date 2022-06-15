<div class="page-content-wrapper">

	<div class="page-content">

		<div class="page-head">

			<div class="page-title">

				<!-- <h1>List Shipper</h1> -->

			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption font-dark">
							<i class="fa fa-table font-dark"></i>
							<span class="caption-subject bold uppercase">List Booking </span>
						</div>
						<div class="tools">
						<div class="btn-group">
						<?php
							$type = $this->session->userdata('type');
							if($type == 'shiper'){ ?>
								<a href="<?php echo base_url();?>admin/booking/form_booking" class="btn btn-sm sbold btn-primary"><i class="fa fa-plus"></i> Add Booking
								</a>

								<?php } ?>
								<a href="javascript:void(0)" onClick="reload_table()" class="btn btn-sm sbold btn-default">Refresh
								</a>
							
							</div>
						</div>
					</div>
					<div class="portlet-body">
						<table class="table table-xs table-bordered table-hover  display compact nowrap" cellspacing="0" cellpadding="0" id="table_master">
							<thead >
								<tr  >
									<th width="5px">No</th>
									<th>Action</th>
									<th>Status</th>
									<th>Invoice</th>
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

$('#booking').addClass('active');
var table;
 
 $(document).ready(function() {
  
	 //datatables
	 table = $('#table_master').DataTable({ 
		"createdRow": function( row, data, dataIndex ) {
           if ( data[2] == "Waiting process origin" ) {        
             $(row).addClass('danger');
           }else if ( data[2] == "Processed origin") {
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
                            // position: 'top-end',
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

	function process_booking(id,user_id){
		Swal.fire({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		type: 'warning',
		showLoaderOnConfirm: true,
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yes, Process it!'
		}).then((result) => {
		if (result.value) {

			$.ajax({
				url:"<?= base_url('admin/booking/process_booking'); ?>",
				type:"POST",
				data:{"master_id":id,"user_shipper_id":user_id},
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

	function linkto(id,consignee_id){
		$('#sendTo').modal('show');
		<?php
		 $type = $this->session->userdata('type');
		if($type == 'admin'){  
			$text = "Sending Booking (SI) From Origin To Superadmin";
		}else{
			$text = "Sending Booking (SI) From Superadmin To Consignee";

		} ?>
		$('#modal-title').text("<?= $text ?>");
		$('#sendTo').on('shown.bs.modal', function() {
			$(document).off('focusin.modal');
		});
		// $('#form_sending_booking')[0].reset();
		$.ajax({ 
			url:"<?= base_url('admin/booking/sendTo')?>",
			type:"POST",
			data:{'id':id,'consignee_id':consignee_id},
			beforeSend:function(){
			   $('#tbl_user').html("<img src='<?= base_url('assets/image/loading-spinner-grey.gif')?>'>");
			},
			success:function(data){
				$('#tbl_user').html(data);
				
			},
		});
	}

	function sendToConsignee(master_id){
		
        Swal.mixin({
        input: 'text',
        confirmButtonText: 'Next &rarr;',
        showCancelButton: true,
        progressSteps: ['1', '2', '3']
        }).queue([
        {
            title: 'Field 1'
        },
        'Field 2',
        'Field 3'
        ]).then((result) => {
        if (result.value ) {

            if(result.value['0'] == ''){
                Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Field 1 empty !'
                })
            }
            else if(result.value['1'] == ''){
                Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Field 2 empty !'
                })
            }
            else if(result.value['2'] == ''){
                Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Field 3 empty !'
                })
            }else {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Send it!'
                    }).then((result) => {
                    if (result.value) {

                         $.ajax({
                            url:"<?= base_url('admin/booking/send_to_consignee'); ?>",
                            type:"POST",
                            data:{"master_id":master_id},
                            beforeSend:function(){
                                Swal.fire({
                                title: 'Please wait ...',
                                html: 'Processd <strong></strong> .',
                                timer: 5000,
                                onBeforeOpen: () => {
                                    Swal.showLoading()
                                    timerInterval = setInterval(() => {
                                    Swal.getContent().querySelector('strong')
                                        .textContent = Swal.getTimerLeft()
                                    }, 100)
                                },
                                onClose: () => {
                                    clearInterval(timerInterval)
                                }
                                }).then((result) => {
									if (
										/* Read more about handling dismissals below */
										result.dismiss === Swal.DismissReason.timer
									) {
										console.log('I was closed by the timer')
									}
									})
                            },
                            success:function(){
                                Swal.fire({
                                type: 'success',
                                title: 'Your data sent',
                                showConfirmButton: false,
                                timer: 1500
                                })
                               
                            },
                        });
                       
                    }
                    })
            }



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


<div class="modal fade" id="sendTo" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-uppercase" id="modal-title"> </h4>
      </div>
      <div class="modal-body">
	  <form id="form_sending_booking">

	  <div class="row">
	  
		<div class="form-group">
			<label >Subject</label>
			<input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
		</div>
		<div class="form-group">
			<label >Content</label>
			<textarea name="content" id="content" placeholder="Content" class="form-control" id="" cols="30" rows="10"></textarea>
		</div>
		
		</form>

	  </div>
		<h5 sty;e="font-weight:bold">Send To</h5><br>
         <div id="tbl_user"></div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>