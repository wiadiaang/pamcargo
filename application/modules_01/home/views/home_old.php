<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>PAM Cargo International</title>
  <link rel="icon" href="<?= base_url();?>assets/img/favicon_paam.png" type="image/icon type">

  <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/fonts/simple-line-icons.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/Bold-BS4-Footer-Social.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/button.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/glyphicon.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/Social-Icons.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/style_index.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/card-index.css">
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>

<body>
  <!-- Navbar start -->
  
  <nav class="my-nav navbar navbar-expand-md navbar-light bg-light sticky-top" id="navbar">

    <a class="navbar-brand"><img src="<?= base_url();?>assets/img/logo.png"></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapse_target">
      <ul class="navbar-nav ml-auto">
       <li class="f-nav-items">
          <a href="home">Home</a>
        </li>
        <li class="f-nav-items">
          <a href="news">News</a>
        </li>
        <li class="f-nav-items">
          <a href="about-us">About</a>
        </li>
        <li class="dropdown f-nav-items-dropdown">
          <a class="dropdown-toggle f-items-x" data-toggle="dropdown" href="#" role="button">Services</a>
          <div class="dropdown-menu animate slideIn" style="margin: 0;">
            <a class="dropdown-item" href="sea-air-service">Sea Air Service</a>
            <a class="dropdown-item" href="air-freight-service">Air Freight Service</a>
            <a class="dropdown-item" href="sea-freight-service">Sea Freight Service</a>
            <a class="dropdown-item" href="ad-hoc-charter-service">Ad Hoc Charter Service</a>
            <a class="dropdown-item" href="road-transport">Road Transport</a>
            <a class="dropdown-item" href="custom-clearance">Custom Clearance</a>
            <a class="dropdown-item" href="warehousing">Warehousing</a>
          </div>
        </li>
        <li class="dropdown f-nav-items-dropdown">
            <a class="dropdown-toggle f-items-x" data-toggle="dropdown" href="#" role="button">Schedule</a>
            <div class="dropdown-menu animate slideIn" style="margin: 0;">
              <!-- <a class="dropdown-item" href="monthly-schedule">Montly Schedule</a> -->
              <a class="dropdown-item" href="schedule-query">Schedule Query</a>
              <a class="dropdown-item" href="rate-request">Rate Request</a>
            </div>
          </li>
       
        <li class="f-nav-items">
          <a href="offices">Offices</a>
        </li>
        <li class="f-nav-items">
          <a href="agents">Agents</a>
        </li>
        <li class="f-nav-items">
          <a href="contact-us">Contact</a>
        </li>
        <li class="f-nav-items">
          <a href="track-and-trace">Track & Trace</a>
          <!-- <a href="javascript:void(0)" id="track">Track & Trace</a> -->
        </li>
        <!-- <li class="f-nav-items-login">
                <a href="<?= base_url('../shipment')?>" class="index-home-btn">Shipment</a>
            </li> -->
      </ul>
    </div>
  </nav>

   <!-- Navbar end -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php 
    $no = 0;
      foreach($slider as $key){ 
        
          if($key->slider_id == '24'){
            $act = 'active';
          }else{
            $act = '';
          }
        ?>
      <li data-target="#carouselExampleIndicators" data-slide-to="<?= $no++; ?>" class="<?= $act ?>"></li>
        <?php } ?>
    </ol>
    <div class="carousel-inner">
    <?php 
      foreach($slider as $key){ 
  
          if($key->slider_id == '24'){
            $act = 'active';
          }else{
            $act = '';
          }

          if($key->type == "1"){
        ?>
            <div class="carousel-item <?= $act ?>">
              <img class="d-block w-100 img-fluid"  src="<?= base_url('assets/dash/files/'.$key->image);?>" alt="First slide">
              <div class="carousel-caption">
                <h5 style="padding: 0px 20px; color:<?= $key->color_text; ?>"><?= $key->title ?>  </h5>
                <p><?= $key->description ?></p>
              </div>
            </div>
          <?php }else{?>

      <!-- Updatw Mulai dari sini -->
       <div class="carousel-item  <?= $act ?>">
        <img class="d-block w-100 img-fluid" style="height: 100vh" src="<?= base_url('assets/dash/files/'.$key->image);?>" alt="Four slide">
        <div class="container f-container_index">
          <div class="row f-row_index-1 text-center">
            <div class="col-md-12">
            <!-- <h1><strong class="f-sea-air"> SEA-AIR</strong> COMBINED TRANSPORT</h1> -->
            <h1><?= $key->title; ?></h1>
            </div>
          </div>
          <div class="row f-row_index">
            <div class="col-md-6">
            <!-- <h1>What is<strong class="f-sea-air"> Sea Air</strong>?</h1> -->
            <h1><strong class="f-sea-air"> <?= $key->title2; ?></strong></h1>
            <?= $key->description2; ?>
            </div>
            <div class="col-md-6">
              <!-- <h1>Why <strong class="f-sea-air"> Sea Air</strong>?</h1> -->
              <h1><strong class="f-sea-air"><?= $key->title3; ?></strong></h1>
              <?= $key->description3; ?>
            </div>
          </div>
        </div>
      </div> 
      <!-- Sampai sini -->
     
      <?php } } ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <i class="fa fa-chevron-left"></i>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <i class="fa fa-chevron-right"></i>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Body start -->
  <section>
    <div class="container-fluid">
      <div class="row" style="background-color: #eeeeee;">
        <div class="col-md-12" style="margin: 0; padding: 0;">
          <div>
            <!-- Company promises start -->
            <div class="container-fluid" id="company-promises">
              <div class="row">
                <div class="col company-promises">
                  <div class="company-promises">
                    <div class="content-company-promises">
                      <div class="vertical-align"></div>
                      <h1>Company Promises</h1>
                      <p>As a contractor we promise to take care of all supply chain management, to make your shipments
                        travel safe, fast and on time.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Company promises end -->
          </div>


        </div>
      </div>
      <div class="row" style="
      margin-bottom: 20px;
      -webkit-box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.75);
box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.75);
">
        <div class="col-md-5 text-center custom-index-text-4" style="color: black;">
          <div class="vertical-align">
            <h1>Our Services :</h1>
            <!-- <a href="services"><button type="button" class="btn btn-success f-btn-read-more" style="background-color: #13A266; border-radius: 55px;">Read More</button> -->
            </a> 
            <hr>
          </div>

        </div>
        <div class="col-md-7" style="padding: 0;">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active body">
                <img class="d-block w-100" src="<?= base_url();?>assets/img/sea-freight.png" alt="First slide">
                <div class="carousel-caption body">
                  <h5>Sea Freight Services</h5>

                </div>
              </div>
              <div class="carousel-item body">
                <img class="d-block w-100" src="<?= base_url();?>assets/img/air-freight.png" alt="Second slide">
                <div class="carousel-caption body">
                  <h5>Air Freight Services</h5>

                </div>
              </div>
              <div class="carousel-item body">
                <img class="d-block w-100" src="<?= base_url();?>assets/img/img-header.png" alt="Third slide">
                <div class="carousel-caption body">
                  <h5>Sea Air Services</h5>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="row index-body-3">
        <div class="col-md-12 text-center custom-index-text-5">
          <h1>Our Offices</h1>
          <div class="my-custom-hr"></div>
        </div>
        <!-- Create by fabio viandino -->

        <?php foreach($offices as $key){  ?>
        <div class="col-md-4 text-center">
            <div class="image-flip">
                <div class="mainflip">
                    <div class="frontside" style="width: 100%;">
                        <div class="card">
                            <div class="card-body text-center">
                                <p><img src="<?= base_url('assets/dash/files/offices/'.$key->image_thumbnail);?>"></p>
                                <h4 class="card-title"><strong><?= $key->name_country; ?></strong><br><br></h4>
                                <h5 class="card-title"><?= $key->name_office; ?><br><br></h5>
                                <p class="card-title"><?= $key->address; ?>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="backside" style="width: 100%;">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-center"><?= $key->name_country; ?><br><br></h3>
                                <h4 class="card-title">Contact: <?= $key->contact_name; ?></h4>
                                <p class="card-title"><br><br><br>Tel:<?= $key->telp; ?><br>Fax: <?= $key->fax; ?> <br>Mob: <?= $key->mob; ?><br> Email: <?= $key->email; ?> <br>Web: <?= $key->website; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="col-md-12 text-center">
          <a href="offices"><button type="button" class="btn btn-success f-btn-read-more" style="background-color: #13A266; border-radius: 55px;">Read More</button>
          </a>  
           </div>
         </div>


    </div>
  </section>
  <!-- Body end -->


 <!-- FOOTER PHP -->
 <?php $this->load->view('struktur/footer'); ?>
  
  <button id="topBtn"><i class="fa fa-arrow-up"></i></button>


 
</body>

</html>