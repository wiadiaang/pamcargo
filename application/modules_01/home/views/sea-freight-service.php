<?php $this->load->view('struktur/header');?>


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
                <div class="col" style="padding: 10px;"><img class="img-thumbnail img-fluid" src="assets/img/sea-freight.png" style="width: 100%;height: 100%;"></div>
            </div>
            <!-- <div class="row">
               
                    <div class="col-lg-12 offset-lg-0 services-content">
                            <a href="services.php">
                                    <button class="btn btn-primary read-more-services p-2 mr-2 mb-2" type="button">Other Services</button>
                            </a>
                        
                    </div>
            </div> -->
        </div>
    </section>



    <?php $this->load->view('struktur/footer');?>
