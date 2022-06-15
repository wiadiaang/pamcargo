<div class="page-content-wrapper">

	<div class="page-content">

		<div class="page-head">

			<div class="page-title">

				<!-- <h1>User Shipper </h1> -->

			</div>

		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption font-dark">
							<i class="icon-users font-dark"></i>
							<span class="caption-subject bold uppercase">User Shipper</span>
						</div>
						<div class="tools">
						<div class="btn-group">
								<!-- <a href="<?php echo base_url();?>admin/Admin/create" class="btn sbold btn-primary"><i class="fa fa-plus"></i> Add Admin
								</a> -->
							</div>
						</div>
					</div>
					<div class="portlet-body">
						<table class="table table-striped table-bordered table-hover display compact nowrap" id="shipper">
							<thead>
								<tr>
                  <th width="20px">No</th>
									<th>Action</th>                  
									<th>Name</th>
									<th>email</th>
									<th>Phone</th>
									<th>Addreess</th>
									<th>Country</th>
									<!-- <th>Status</th> -->
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



<!-- modal  -->




<div class="modal fade" id="modal_approve" tabindex="-1" role="dialog" aria-labelledby="">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="">Approve user</h4>
      </div>
      <div class="modal-body">
        <form action="javascript:void(0)" id="form_approve" method="POST">
          <div class="form-group">
            <label  class="control-label">Name:</label>
            <input type="hidden" name="user_id" class="form-control" readonly="">
            <input type="text" name="name" class="form-control" readonly="">
          </div>
          <div class="form-group">
            <label  class="control-label">Email:</label>
            <input type="text" class="form-control" name="email" readonly="">
          </div>

          <div class="form-group">
            <label  class="control-label">Address:</label>
            <textarea class="form-control" name="address" readonly=""></textarea>
          </div>

          <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label  class="control-label">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
              
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label  class="control-label">Confirm Password:</label>
                    <input type="password" name="password2" class="form-control" placeholder="Confirm Password" required="">
                </div>
              </div>

              <!-- <div class="col-md-4">
                <div class="form-group">
                    <label  class="control-label">Status:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="active">Active</option>
                        <option value="nonactive">Non active</option>
                    </select>
                </div>
             </div> -->


          </div>
          
         
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Approve</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">
var table;
 
 $(document).ready(function() {
  
	 table = $('#shipper').DataTable({ 

    "createdRow": function( row, data, dataIndex ) {
           if ( data[7] == "nonactive" ) {        
             $(row).addClass('danger');
           }else{
             $(row).addClass();
           }

        },
  
		 "processing": true,
		 "serverSide": true, 
		 "order": [], 
  
		 "ajax": {
			 "url": "<?php echo site_url('admin/user_shipper/ajax_list')?>",
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
                          'User has been deleted.',
                          'success'
                        )
                    },
                    error: function () {
                        console.log("failure");
                    }
                });
          }
        })
            
        // job = confirm("Are you sure want to delete this data?");
        // if (job != true)
        // {
        //     return false;
        // } else {
        //     $.ajax({
        //         type: "POST",
        //         url: "<?= base_url('admin/admin/delete') ?>",
        //         data: {
        //             'id': no
        //         },
        //         success: function (data, status) {
        //             reload_table();
        //         },
        //         error: function () {
        //             console.log("failure");
        //         }
        //     });
        //     return false;
        // }
    }

    function approve(id){
        $('#modal_approve').modal('show');
        $("[name='password']").val('');
        $("[name='password2']").val('');
        $.ajax({
            url:"<?= base_url('admin/user_shipper/get_user/');?>"+id,
            type:"POST",
            dataType:"JSON",
            success:function(data){
                $("[name='name']").val(data.name_pt);
                $("[name='address']").val(data.address);
                $("[name='user_id']").val(data.user_id);
                $("[name='email']").val(data.email);
                $("[name='status']").val(data.status_user);
            },
        });
    }

    $('#form_approve').on('submit',function(){
        var pas = $("[name='password']").val();
        var pas2 = $("[name='password2']").val();
        var status = $("[name='status']").val();
        if(status == 'nonactive'){
           Swal.fire({
              type: 'error',
              title: 'Oops...',
              text: "Status non active!",
            });
        }else{

          if(pas != pas2 ){
            Swal.fire({
              type: 'error',
              title: 'Oops...',
              text: "Password doesn't match!",
            });
        }else{

            $.ajax({
                url:"<?= base_url('admin/user_shipper/approve_user/');?>",
                type:"POST",
                data: $('#form_approve').serialize(),
                success:function(data){
                     reload_table();
                     $('#modal_approve').modal('hide');
                     Swal.fire({
                        type: 'success',
                        title: 'User approved',
                        showConfirmButton: false,
                        timer: 1500
                      })
                }
            });
            
        }

        



        }
       
      
       

    });
 
</script>
