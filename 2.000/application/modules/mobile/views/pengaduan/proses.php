<div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Pengaduan</h1>
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
                            <span class="active">Pengaduan</span>
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
                                        <span class="caption-subject bold uppercase">Pengaduan</span>
                                    </div>
                                    <div class="tools">
                                    <div class="btn-group">
                                   
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="buku">
                                        <thead>
                                            <tr>
                                                <th width="20px">No</th>
                                                    <th>OPD</th>
                                                    <th>Kategori</th>
                                                    <th>Pengaduan</th>
                                                    <th>Status</th>
                                                    <th>Foto</th>
                                                    <th>Datetime</th>
                                                    <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $start = 0;
                                                  foreach ($pengaduan as $row)
           										 {
                                            ?>
                                            <tr>   
                                                <td width="20px"><?php echo ++$start ?></td>
                                                <td><?php echo $this->db->get_where("opd",array("opd_id"=>$row->opd_id))->row()->nama_opd; ?></td>
                                                <td><?php echo $this->db->get_where("kategori",array("kategori_id"=>$row->kategori_id))->row()->kategori; ?></td>
                                                <td><?php echo $row->pengaduan; ?></td>
                                                <td><?php echo $this->db->get_where("status",array("status_id"=>$row->status_id))->row()->status; ?></td>
                                                <?php if($row->foto == ""){ ?>
                                                    <td></td>
                                                <?php }else{ ?>
                                                    <td><img src="<?php echo base_url(); ?>upload/pengaduan/<?php echo $row->foto; ?>" width="100" height="100"></td>
                                                <?php } ?>
                                                <td><?php echo $row->datetime; ?></td>
                                                <td><a href="<?php echo base_url(); ?>opd/pengaduan/detail/<?php echo $row->pengaduan_id; ?>" class="btn btn-success">Detail</a> </td>
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



             

