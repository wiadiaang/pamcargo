<div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Kategori</h1>
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
                            <span class="active">Kategori</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-users font-dark"></i>
                                        <span class="caption-subject bold uppercase">Kategori</span>
                                    </div>
                                    <div class="tools">
                                    <div class="btn-group">
                                            <a href="<?php echo base_url();?>admin/Master/create_kategori" class="btn sbold btn-primary"><i class="fa fa-plus"></i> Create Kategori
                                                
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="buku">
                                        <thead>
                                            <tr>
                                                <th width="20px">No</th>
                                           			<th>Kategori</th>
                                                    <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $start = 0;
                                                  foreach ($kategori as $row)
           										 {
                                            ?>
                                            <tr>   
                                                <td width="20px"><?php echo ++$start ?></td>
                                                <td><?php echo $row->kategori; ?></td>
                                                <td><a href="<?php echo base_url(); ?>admin/Master/edit_kategori/<?php echo $row->kategori_id; ?>" class="btn btn-success">Manage</a> <a href="<?php echo base_url(); ?>admin/Master/delete_kategori/<?php echo $row->kategori_id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                                            </tr>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                   
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
<script>
$(document).ready(function () {
    $('#example').DataTable({
        dom: 'Brtip',
        buttons: [
        ],rowCallback: function ( row, data ) {
    // Set the checked state of the checkbox in the table
            // alert("aaa");
        }
    });

});
</script>

<script type="text/javascript">
   $(document).ready(function () {
                
            $('#buku').DataTable({
                dom: 'Brtip',
                 dom:' <"search"f><"top"l>rt<"bottom"ip><"clear">',
            });
        });
</script>



             

