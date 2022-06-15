<div class="page-content-wrapper">

	<div class="page-content">

		<div class="page-head">

			<div class="page-title">

				<h1>User Admin</h1>

			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption font-dark">
							<i class="icon-users font-dark"></i>
							<span class="caption-subject bold uppercase">Admin</span>
						</div>
						<div class="tools">
						<div class="btn-group">
								<!-- <a href="<?php echo base_url();?>admin/Admin/create" class="btn sbold btn-primary"><i class="fa fa-plus"></i> Add Admin
								</a> -->
								<a href="javascript:void(0)" onClick="add_admin()" class="btn sbold btn-primary"><i class="fa fa-plus"></i> Add Admin
								</a>
								<a href="javascript:void(0)" onClick="reload_table()" class="btn sbold btn-default"><i class="fa fa-refresh"></i>Refresh
								</a>
							</div>
						</div>
					</div>
					<div class="portlet-body">
						<table class="table table-striped table-xs table-bordered table-hover display compact nowrap" id="admin_tabe">
							<thead>
								<tr>
									<th width="20px">No</th>
									<th>Name Company</th>
									<th>email</th>
									<th>Phone</th>
									<th>Country</th>
									<th>Status</th>
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



<div class="modal fade" id="modal_addAdmin" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="title_modal"></h4>
      </div>
      <div class="modal-body">
        <form action="javascript:void(0)" id="form_admin" method="POST">
          <div class="form-group">
            <label  class="control-label">Name Company :</label>
            <input type="hidden" name="user_id" class="form-control" >
            <input type="text" name="name_pt" class="form-control" placeholder="Name Company">
          </div>
          <div class="form-group">
            <label  class="control-label">Email :</label>
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
		  <div class="form-group">
            <label  class="control-label">Phone Office :</label>
            <input type="text" class="form-control" name="phone_office" placeholder="Phone Office">
          </div>

          <div class="form-group">
            <label  class="control-label">Address:</label>
            <textarea class="form-control" name="address" placeholder="Address"></textarea>
          </div>

		  <div class="form-group">
            <label  class="control-label">Country :</label>
				<select name="country" id="country" class="form-control">
				</select>
          </div>

          <div class="row">
              <div class="col-md-6">
                <div class="form-group pass" >
                    <label  class="control-label">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
              
              </div>
              <div class="col-md-6 pass">
                <div class="form-group">
                    <label  class="control-label">Confirm Password:</label>
                    <input type="password" name="password2" class="form-control" placeholder="Confirm Password">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                    <label  class="control-label">Status:</label>
                    <select name="status" id="" class="form-control">
                        <option value="active">Active</option>
                        <option value="nonnactive">Non active</option>
                    </select>
                </div>
             </div>

          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btnsubmit">Add Admin</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">

      $.ajax({
         url:"<?= base_url('admin/admin/get_country');?>",
         type:"POST",
         success:function(data){
            $("#country").html(data);
         },
      });

var table;
 $(document).ready(function() {
  
	 //datatables
	 table = $('#admin_tabe').DataTable({ 
  
		 "processing": true, //Feature control the processing indicator.
		 "serverSide": true, //Feature control DataTables' server-side processing mode.
		 "order": [], //Initial no order.
  
		 // Load data for the table's content from an Ajax source
		 "ajax": {
			 "url": "<?php echo site_url('admin/admin/ajax_list')?>",
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

function add_admin()
{
	$('#modal_addAdmin').modal('show');
	$('#btnsubmit').text('Add Admin');
	$('#title_modal').text('Form add admin');
	$('#form_admin')[0].reset();
  $("[name='country']").removeAttr('disabled','');
  $("[name='password']").removeAttr('disabled','');
  $("[name='password2']").removeAttr('disabled','');
}

	$('#form_admin').on('submit',function(){
	     $('#btnsubmit').text('Processing ....');
       
        var pas = $("[name='password']").val();
        var pas2 = $("[name='password2']").val();
        var user = $("[name='user_id']").val();
        if(user == ""){
            if(pas != pas2 ){
                alert("Password doesn't match!");
            }else{

                $.ajax({
                    url:"<?= base_url('admin/Admin/save_admin');?>",
                    type:"POST",
                    data: $('#form_admin').serialize(),
                    success:function(data){
                      if(data == 'registered'){
                        alert('User country has registered! ');
                      }else if(data == "success"){
                        reload_table();
                        $('#modal_addAdmin').modal('hide');
	                      $('#btnsubmit').text('Add Admin');
                        
                      }
                        
                    }
                });
                
            }
        }else{

               $.ajax({
                    url:"<?= base_url('admin/Admin/save_admin');?>",
                    type:"POST",
                    data: $('#form_admin').serialize(),
                    success:function(data){
                      if(data == 'registered'){
                        alert('User country has registered! ');
                      }else if(data == "success"){
                        reload_table();
                        $('#modal_addAdmin').modal('hide');
	                      $('#btnsubmit').text('Update Admin');

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
  confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
      if (result.value) {
                $.ajax({
                  type: "POST",
                  url: "<?= base_url('admin/admin/delete') ?>",
                  data: {
                      'id': no
                  },
                  success: function (data, status) {
                      reload_table();
                      Swal.fire(
                        'Deleted!',
                        'Admin has been deleted.',
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

      function edit_admin(id){
        $('#modal_addAdmin').modal('show');
      	$('#btnsubmit').text('Update Admin');
        $('#title_modal').text('Form update admin');

        $("[name='country']").attr('disabled','');
        $("[name='password']").attr('disabled','');
        $("[name='password2']").attr('disabled','');

        $.ajax({
          url:"<?= base_url('admin/admin/get_user/'); ?>"+id,
          type:"POST",
          dataType:"json",
          success:function(data){
            $("[name='user_id']").val(data.user_id);
            $("[name='name_pt']").val(data.name_pt);
            $("[name='email']").val(data.email);
            $("[name='phone_office']").val(data.phone_office);
            $("[name='address']").val(data.address);
            $("[name='country']").val(data.country);
            $("[name='status']").val(data.status_user);
          },
        });
      }
</script>