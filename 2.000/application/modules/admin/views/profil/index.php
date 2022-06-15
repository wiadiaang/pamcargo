<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Hi, <?= $this->session->userdata('name_pt'); ?></h1>
            </div>
            <div class="page-toolbar">
                <!-- BEGIN THEME PANEL -->
            </div>
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="<?php echo base_url();?>admin/Dashboard"><?php echo $this->lang->line('home'); ?></a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Profile</span>
            </li>
        </ul>

        <div class="row">

            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="icon-users font-dark"></i>
                                <span class="caption-subject bold uppercase">Profile</span>
                            </div>
                            <div class="tools">
                                <div class="btn-group">
                                
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                   

                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="thumbnail">
                                        <?php
                                            if($user->user_image == ""){
                                                $img = '//placehold.it/150';
                                            }else{
                                                $img = base_url('assets/image/users/'.$user->user_image);
                                            }
                                         ?>
                                        <img id="output" src="<?= $img ?>" class="avatar img-rounded" style="width:200px; height:160px;" alt="...">
                                        <div class="caption">
                                           
                                        <form name="upload_image" id="upload_image" method="POST" enctype='multipart/form-data' >
                                             <input type="hidden" name="user_id" id="user_id" value="<?= $user->user_id; ?>">
                                            <a href="javascript:void(0)" class="btn btn-danger btn-xs" role="button" id="browse_image" >Update image</a>  
                                            <input id="userfile" name="userfile" type="file"  accept="jpg/png/jpeg" class="hidden"  onchange="loadFile(event)">
                                            <input type="submit" class="btn btn-success btn-xs"  onclick="save_photo();" id="sbm_img" value="Upload"> 
                                        </form>

                                        </div>
                                       
                                        </div>
                                        <ul class="list-group">
                                            <li class="list-group-item">Cras justo odio<span class="badge">14</span></li>
                                            <!-- <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                            <li class="list-group-item">Porta ac consectetur ac</li>
                                            <li class="list-group-item">Vestibulum at eros</li> -->
                                        </ul>

                                    </div>
                                
                                
                                </div>
                                <div class="col-md-8">
                              
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#profiless" aria-controls="profiless" role="tab" data-toggle="tab">Profile</a></li>
                                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Password</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active"  id="profiless">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5>Profile</h5>
                                        </div>
                                     <div class="panel-body">
                                        <form action="javascript:void(0)" id="updateProfile" method="POST">
                                        <div class="form-group">
                                            <label>Name Company</label>
                                            <input type="hidden" name="user_id"  value="<?= $user->user_id ?>" >
                                            <input type="text" name="name_pt" class="form-control" value="<?= $user->name_pt ?>" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label >Email</label>
                                            <input type="text" name="email" class="form-control" value="<?= $user->email ?>" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label >Phone</label>
                                            <input type="text" name="phone_office" class="form-control" value="<?= $user->phone_office ?>" placeholder="Phone">
                                        </div>
                                      

                                        <button type="submit" class="btn btn-default">Save</button>
                                        </form>
                                     </div>
                                    </div>
                                    
                                    
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5>Message</h5>
                                        </div>
                                     <div class="panel-body">
                                            <table class="table table-bordered table-xs" id="table">
                                                <thead>
                                                    <th>Time</th>
                                                    <th></th>
                                                    <th></th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table> 
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="settings">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5>Change Password</h5>
                                        </div>
                                     <div class="panel-body">
                                        <form action="javascript:void(0)" id="form_password" method="POST">
                                        <div class="form-group">
                                            <label>Current Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                        </div>
                                        <div class="form-group">
                                            <label >New Password</label>
                                            <input type="password" name="newPassword" class="form-control" placeholder="Password" required="">
                                        </div>
                                        <div class="form-group">
                                            <label >Retype Password</label>
                                            <input type="password" name="retypePassword" class="form-control" placeholder="Password" required="">
                                        </div>
                                        <button type="submit" class="btn btn-default">Save</button>
                                        </form>
                                     </div>
                                    </div>
                                    
                                    
                                    </div>
                                </div>

                                
                                </div>
                            </div>
                        
                        </div>







                        
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

   
 
<script>
    $('#user_manage').addClass('active');
    $('#profile').addClass('active');

    $("#form_password").on('submit',function(){
        $.ajax({
            url:"<?= base_url('admin/Profile/update_password'); ?>",
            type:"POST",
            data: $('#form_password').serialize(),
            success:function(data){
                if(data == '1'){
                    alert('Is not your current password, try again');
                }else if(data == '2'){
                    alert("Password doesn't match, try again");
                }else{
                    alert('Password has been changed ');
                    location.reload();
                }
            },
        });
        

    });

    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
    $('#browse_image').on('click',function(){
            $('#userfile').click();
    });

    function save_photo(){
        var userfile = $('#userfile').val();
        if(userfile == ""){
         alert('Insert image !');
        }else{
        $('#upload_image').ajaxForm({
            url:"<?php echo base_url('admin/Profile/update_image')?>",
            type: 'POST',
            data:{"userfile":userfile},
            success: function(resp) {
                if(resp == '1'){
                    alert("Can't upload!");
                }else{
                    $('#output').attr('src','https://express.rembon.co.id/assets/image/users/'+resp);
                    alert('Success');
                }
            },
        });   
        }  
    };

    $('#updateProfile').on('submit',function(){
        $.ajax({
            url:"<?= base_url('admin/Profile/updateProfile'); ?>",
            type:"POST",
            data: $('#updateProfile').serialize(),
            success:function(){
                location.reload();
                alert('Berhasil');
            },
        });
    });


   
</script>


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