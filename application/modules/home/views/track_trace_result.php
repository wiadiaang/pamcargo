
    <section id="tracking">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h5 style="padding: 22px 10px 10px; font-size: 22px;">SHIPMENT <?= $data->method; ?></h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="content-shipping_1-address">
                        <div class="box_shipping">
                            <h4><strong>ORIGIN </strong></h4>
                            <hr style="width:100%; border-width:2px">
                            <?= $data->shipper_name; ?>
                           
                            <div class="order-item mt-2">
                                <label><?= $data->ori; ?> :</label> 
                                <h5 class="info"><?= $data->origin_code; ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-shipping_2-address">
                        <div class="box_shipping">
                            <h4><strong>DESTINATION </strong> </h4>
                            <hr style="width:100%; border-width:2px">

                            <?= $data->consignee_name; ?>
                            <div class="order-item mt-2">
                                 <label><?= $data->dest; ?> : </label> 
                                <h5 class="info"> <?= $data->destination_code; ?></h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




        </div>

    </section>


<section id="tracking-2">
        <div class="container" style="padding: 50px 25px;">
            <div class="row text-center">
                <div class="col-md-12">
                    <h3 style="padding: 22px 10px 10px; font-size: 22px;">TRACKING INFORMATION</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 offset-md-1">
                    <h5 style="text-align: center;">TRACE SHIPPING</h5>

                    <ul class="progress-tracker progress-tracker--vertical" style="margin-top: 30px;">
                        <?php
                            foreach($conv as $key ){
                                if($key->user_type == "origin"){ 
                                    $col = "clr-1";
                                 }else if($key->user_type == "transit"){ 
                                     $col = "clr-2";
                                 }else if($key->user_type == "consignee"){
                                    $col = "clr-3";
                                }
                        ?> 

                                     

                        <style>
                        </style>
                        <li class="progress-step ">
                            <div class="<?= $col ?> progress-marker" ></div>
                            <div class="progress-text">
                                <h4 class="progress-title"><?= $key->message ?></h4>
                                <?= $key->create_date ?>
                            </div>
                        </li>
                            <?php } ?>
                    </ul>
                   
                </div>
                <div class="col-md-6">
                    <h6 style="margin-bottom: 30px; text-align: center;">DESCRIPTION OF GOODS</h6>

                    <section id="desc_shipping">
                                <div class="row">
                                        
                                        <div class="col-6 col-md-4">
                                            <label>Carton :</label>
                                        </div>
                                        <div class="col-6">
                                            <h5><?= $data->carton; ?></h5>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-6 col-md-4">
                                            <label>Commodity :</label>
                                        </div>
                                        <div class="col-6">
                                            <h5><?= $data->commodity; ?> </h5>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-6 col-md-4">
                                            <label>Gross Weight :</label>
                                        </div>
                                        <div class="col-6">
                                            <h5><?= $data->gross_weight; ?></h5>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-6 col-md-4">
                                            <label>Volume :</label>
                                        </div>
                                        <div class="col-6">
                                            <h5><?= $data->volume; ?></h5>
                                        </div>
                                </div>
                </section>
                <h6 style="margin-bottom: 30px; text-align: center;" class="mt-4">VESSEL / FLIGHT DETAIL</h6>

                <section id="desc_shipping">

                                 <div class="row">
                                        
                                        <div class="col-6 col-md-4">
                                            <label>Detail 1 :</label>
                                        </div>
                                        <div class="col-6">
                                            <h5><?= $data->detail1; ?></h5>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-6 col-md-4">
                                            <label>Detail 2 :</label>
                                        </div>
                                        <div class="col-6">
                                            <h5><?= $data->detail2; ?> </h5>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-6 col-md-4">
                                            <label>Detail 3 :</label>
                                        </div>
                                        <div class="col-6">
                                            <h5><?= $data->detail3; ?></h5>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-6 col-md-4">
                                            <label>Detail 4 :</label>
                                        </div>
                                        <div class="col-6">
                                            <h5><?= $data->detail4; ?></h5>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-6 col-md-4">
                                            <label>Detail 5 :</label>
                                        </div>
                                        <div class="col-6">
                                            <h5><?= $data->detail5; ?></h5>
                                        </div>
                                </div>
                                
                
                
                </section>
                </div>
            </div>
        </div>
    </section>

    <script>
       var aku = "<?= $data->status_id ?>";
        if(aku == "1"){
            $("#satu").addClass("is-active");
            $("#dua").addClass("");
            $("#tiga").addClass("");
            $("#empat").addClass("");
            $("#lima").addClass("");
        }else if(aku == "2"){
            $("#satu").addClass("is-complete");
            $("#dua").addClass("is-active");
            $("#tiga").addClass("");
            $("#empat").addClass("");
            $("#lima").addClass("");
        }else if(aku == "3"){
            $("#satu").addClass("is-complete");
            $("#dua").addClass("is-complete");
            $("#tiga").addClass("is-complete");
            $("#empat").addClass("");
            $("#lima").addClass("");
        }else if(aku == "4"){
            $("#satu").addClass("is-complete");
            $("#dua").addClass("is-complete");
            $("#tiga").addClass("is-complete");
            $("#empat").addClass("is-complete");
            $("#lima").addClass("");
        }else if(aku == "5"){
            $("#satu").addClass("is-complete");
            $("#dua").addClass("is-complete");
            $("#tiga").addClass("is-complete");
            $("#empat").addClass("is-complete");
            $("#lima").addClass("is-complete");
        }
    
    </script>