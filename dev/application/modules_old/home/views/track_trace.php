<!DOCTYPE html>
<html>

<!-- HEAD PHP -->
<?php $this->load->view('struktur/header');?>
<link rel="stylesheet" href="<?= base_url("assets/css/progress-tracker.css");?>">

<body>

<!-- navbar PHP -->
<?php $this->load->view('struktur/navbar');?>




    <div class="container-fluid" style="padding: 0;">
        <div class="scheduler-header" style="height: 360px;">
            <div class="vertical-align">
                <h1 style="font-size: 74px;">Track & Trace</h1>
                <p style="font-size: 18px;">Track your international shipments</p>
            </div>
        </div>
    </div>


    <section id="first_input_hw" >
        <div class="container">
            <div class="wrapper">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h5 style="padding: 22px 10px 10px; font-size: 22px;">PLEASE INPUT DOCUMENT NUMBER</h5>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <form action="javascript:void(0)" id="form_tracktrace" class="form-inline" style="display: inline-block;">
                            <div class="form-group">
                                <input type="text" name="no_delivery" placeholder="No. HBL/HAWB" class="form-control" required style="margin: 0; height:40px;border-radius:0" >
                                <!-- <input type="text"  name="no_delivery" class="form-control col-lg-12" placeholder="Search" required> -->
                                <button type="submit" class="btn btn-lg" style="border-radius:0;">Find</button>
                            </div>
                            <!-- <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-primary">Search</button>                     
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

      <div id="result"></div>
    
   
    <?php $this->load->view('struktur/footer');?>
    <script>
        $("#form_tracktrace").on("submit",function(){
            $.ajax({
                url:"<?= base_url("home/get_track_trace"); ?>",
                type:"POST",
                data: $("#form_tracktrace").serialize(),
                beforeSend:function(){
                    $("#result").html("<img src='<?= base_url('assets/img/Loader.gif') ?>'>");
                },
                success:function(data){
                    if(data == 'null'){
                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Data not found!'
                        });
                    $("#result").html("");
                     
                    }else{
                        $("#result").html(data);
                        $("html, body").animate({ scrollTop: 700 }, 1000);
                    }
                   
                }
            });
        });
    </script>