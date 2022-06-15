<style type="text/css">
.shows{
    z-index: 999;
    display: none;
}
.shows .overlay{
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,.66);
    position: absolute;
    top: 0;
    left: 0;
}
.shows .img-show{
    width: 800px;
    height: 600px;
    background: #FFF;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    overflow: hidden;
    
}
.img-show span{
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 99;
    cursor: pointer;
}
.img-show img{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
}
/*End style*/

</style>
<div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1><?php echo $page; ?></h1>
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
                            <span class="active"><?php echo $page; ?></span>
                        </li>
                    </ul>
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
                                    <table class="table">
                                        <tr>
                                            <td>Kategori</td>
                                            <td><?php echo $this->db->get_where("kategori",array("kategori_id"=>$row->kategori_id))->row()->kategori; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pertanyaan</td>
                                            <td><?php echo $row->pengaduan; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Foto</td>
                                            <?php if($row->foto == ""){ ?>
                                                    <td></td>
                                                <?php }else{ ?>
                                                    <td><img src="<?php echo base_url(); ?>upload/pengaduan/<?php echo $row->foto; ?>" width="200"  height="200"></td>
                                                <?php } ?>
                                        </tr>
                                    </table>
                                    
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-users font-dark"></i>
                                        <span class="caption-subject bold uppercase">Jawaban</span>
                                    </div>
                                    <div class="tools">
                                    <div class="btn-group">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table">
                                        <tr>
                                            <td>Author</td>
                                            <td><?php echo $user->nama; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jawaban</td>
                                            <td><?php echo $rows->jawaban; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Foto</td>
                                            <?php if($rows->foto == ""){ ?>
                                                    <td></td>
                                            <?php }else{ ?>
                                                    <td><img src="<?php echo base_url(); ?>upload/jawaban/<?php echo $rows->foto; ?>"  width="200"  height="200"></td>
                                            <?php } ?>
                                        </tr>
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

<div class="shows">
  <div class="overlay"></div>
  <div class="img-show">
    <span>X</span>
    <img src="">
  </div>
</div>

<script>
$(function () {
    "use strict";
    
    $("img").click(function () {
        var $src = $(this).attr("src");
        $(".shows").fadeIn();
        $(".img-show img").attr("src", $src);
    });
    
    $("span, .overlay").click(function () {
        $(".shows").fadeOut();
    });
    
});
</script>





             

