
<?php $this->load->view('struktur/header');?>


<!-- bradcam_area  -->
<div class="bradcam_area " style="background-image: url(./assets/v.2/img/header-pamcargo/header.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <!-- <h3>About Us</h3> -->
                </div>
            </div>
        </div>
    </div>
</div>
   
<div class="service_details_area">
        <div class="container">
            <div class="row">
                    <div class="col-lg-4 col-md-4">
                            <div class="service_details_left">
                                <h3>Services</h3>
                                <div class="nav nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a href="sea-air-service">Sea Air Services</a>
                                    <a href="sea-freight-service">Sea Freight Services</a>
                                    <a href="air-freight-service">Air Freight Services</a>
                                    <a href="road-transport">Road Transport</a>
                                    <a href="ad-hoc-charter-service">Ad Hoc Charter Service</a>
                                    <a href="custom-clearance">Custom clearance</a>
                                    <a href="warehousing">Warehousing</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <div class="service_details_info">
                                        <h3> <?= $data->title; ?></h3>
                                        <?= $data->content; ?>
                                    </div>
                                    <div class="service_thumb" style="justify-content: center; display: flex;">
                                        <img class="img-fluid" src="<?= base_url('assets/images/customclearance.jpg')?>"  style="width:70%; height:350px" alt="">
                                    </div>
                                   
                                    
                                </div>
                                
                                
                            </div>
                        </div>
            </div>
        </div>
    </div>
<!-- 
<div class="jumbotron">
          <div class="container-fluid">
              <div class="row text-center">
                  <div class="col-md-12">
                    <div class="text">
                      <?= $data->title; ?>
                    </div>
                  </div>
              </div>
          </div>
      </div>
    <section class="services-body">
        <div class="container services-body">
            <div class="row">
                <div class="col-lg-12 offset-lg-1 services-content">
                    <h1 style="font-size: 25px;"><br><br><br></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-1 services-content">
                <?= $data->content; ?>
                </div>
                <div class="col" style="padding: 10px;"><img class="img-thumbnail img-fluid" src="assets/img/custom-clereance.png" style="width: 100%;height: 100%;"></div>
            </div>
        </div>
    </section> -->
    
<?php $this->load->view('struktur/footer');?>
