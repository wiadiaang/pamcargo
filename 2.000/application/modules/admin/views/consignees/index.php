<div class="page-content-wrapper">

	<div class="page-content">

		<div class="page-head">

			<div class="page-title">

				<!-- <h1>Vendor</h1> -->

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
							
								<a href="javascript:void(0)" onClick="add_data()" class="btn sbold btn-primary"><i class="fa fa-plus"></i> Add Data
								</a>
								<a href="javascript:void(0)" onClick="reload_table()" class="btn sbold btn-default"><i class="fa fa-refresh"></i>Refresh
								</a>
							</div>
						</div>
					</div>
					<div class="portlet-body">
						<table class="table table-striped table-xs table-bordered table-hover display compact nowrap" id="data_table">
							<thead>
								<tr>
									<th>Action</th>
									<th width="10px">No</th>
									<th>Name</th>
									<th>address</th>
									<th>City</th>
									<th>Zip Code</th>
									<th>Country</th>
									<th>Email</th>
									<th>Contact</th>
									<th>Contact 2</th>
									<th>Phone</th>

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



<div class="modal fade" id="modal_data" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="title_modal"></h4>
      </div>
      <div class="modal-body">
        <form action="javascript:void(0)" id="form_data" method="POST">
          <div class="form-group">
            <label  class="control-label">Name :</label>
            <input type="hidden" name="user_id" class="form-control" >
            <input type="text" name="name_pt" class="form-control" placeholder="Name ">
          </div>
        
		     <div class="form-group">
            <label  class="control-label">address :</label>
            <textarea name="address" class="form-control" id="" cols="30" rows="5"></textarea>
          </div>
		     <div class="form-group">
            <label  class="control-label">City :</label>
            <input type="text" class="form-control" name="city" placeholder="">
          </div>
		     <div class="form-group">
            <label  class="control-label">Zip Code :</label>
            <input type="text" class="form-control" name="postal_code" placeholder="">
          </div>
		     <div class="form-group">
            <label  class="control-label">Country :</label>
            <select name="country" id="country" class="form-control">
				    </select>
          </div>
		     <div class="form-group">
            <label  class="control-label">Email :</label>
            <input type="email" class="form-control" name="email" placeholder="">
          </div>
		     <div class="form-group">
            <label  class="control-label">Conatact :</label>
            <input type="text" class="form-control" name="contact1" placeholder="">
          </div>
          <div class="form-group">
            <label  class="control-label">Conatact 2 :</label>
            <input type="text" class="form-control" name="contact2" placeholder="">
          </div>
          <div class="form-group">
            <label  class="control-label">Phone :</label>
            <input type="text" class="form-control" name="phone" placeholder="">
          </div>
          <div class="form-group">
            <label  class="control-label">Password :</label>
            <input type="password" class="form-control" name="password" placeholder="">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btnsubmit">Add Data</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">

$('#m_si').addClass('active');
$('.m_si').css('display','block');

var table;
 $(document).ready(function() {
	 table = $('#data_table').DataTable({ 
		 "processing": true, 
		 "serverSide": true, 
		 "order": [], 
		 "ajax": {
			 "url": "<?php echo site_url('admin/consignees/ajax_list')?>",
			 "type": "POST"
		 },
		 "columnDefs": [
		 { 
			 "targets": [ 0 ], 
			 "orderable": false,
		 },
		 ],
	 });
  
 });
 function reload_table()
{
	table.ajax.reload(null,false); //reload datatable ajax 
}

function add_data()
{
	$('#modal_data').modal('show');
	$('#btnsubmit').text('Add Data');
	$('#title_modal').text('Form add data');
	$('#form_data')[0].reset();

  
}

	$('#form_data').on('submit',function(){
	     $('#btnsubmit').text('Processing ....');
       
        var user = $("[name='user_id']").val();
        if(user == ""){
           
                $.ajax({
                    url:"<?= base_url('admin/consignees/save_data');?>",
                    type:"POST",
                    data: $('#form_data').serialize(),
                    success:function(data){
                    if(data == "success"){
                        reload_table();
                        $('#modal_data').modal('hide');
	                      $('#btnsubmit').text('Add ');
                        
                      }
                        
                    }
                });
                
            
        }else{

               $.ajax({
                    url:"<?= base_url('admin/consignees/save_data');?>",
                    type:"POST",
                    data: $('#form_data').serialize(),
                    success:function(data){
                      if(data == "success"){
                        reload_table();
                        $('#modal_data').modal('hide');
	                      $('#btnsubmit').text('Update ');

                      }
                        
                    }
                });

        }
       

    });
 

 function hapus(no) {
  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!',
 
  }).then((result) => {
      if (result.value) {
                $.ajax({
                  type: "POST",
                  url: "<?= base_url('admin/consignees/delete') ?>",
                  data: {
                      'id': no
                  },
                  success: function (data, status) {
                      reload_table();
                      Swal.fire(
                        'Deleted!',
                        'Data has been deleted.',
                        'success'
                      )
                  },
                  error: function () {
                      console.log("failure");
                  }
              });
          }
        })
            
    }

      function edit_data(id){
        $('#modal_data').modal('show');
      	$('#btnsubmit').text('Update Data');
        $('#title_modal').text('Form update data');

        $.ajax({
          url:"<?= base_url('admin/consignees/get_data/'); ?>"+id,
          type:"POST",
          dataType:"json",
          beforeSend:function(){
            $("[name='name_pt']").val('Loading ...');
            $("[name='address']").val('Loading ...');
            $("[name='city']").val('Loading ...');
            $("[name='postal_code']").val('Loading ...');
            $("[name='country']").val('Loading ...');
            $("[name='email']").val('Loading ...');
            $("[name='contact1']").val('Loading ...');
            $("[name='contact2']").val('Loading ...');
            $("[name='phone']").val('Loading ...');
          },
          success:function(data){
            $("[name='user_id']").val(data.user_id);
            $("[name='name_pt']").val(data.name_pt);
            $("[name='address']").val(data.address);
            $("[name='city']").val(data.city);
            $("[name='postal_code']").val(data.postal_code);
            $("[name='country']").val(data.country);
            $("[name='email']").val(data.email);
            $("[name='contact1']").val(data.contact1);
            $("[name='contact2']").val(data.contact2);
            $("[name='phone']").val(data.phone_office);
           
          },
        });
      }

      $.ajax({
         url:"<?= base_url('admin/admin/get_country');?>",
         type:"POST",
         success:function(data){
            $("#country").html(data);
         },
      });

</script>