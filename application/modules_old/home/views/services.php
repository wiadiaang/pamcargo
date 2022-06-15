<!DOCTYPE html>
<html>

<!-- HEAD PHP -->
<?php $this->load->view('struktur/header');?>


<body>

<!-- navbar PHP -->
<?php $this->load->view('struktur/navbar');?>


    <!-- Jumbotron start -->
    <div class="container-fluid header-contact-us" style="padding: 0;">
            <div class="no-results" style="height: 300px;">
                <div class="vertical-align">
                    <h1>PAM International Services</h1>
                </div>
            </div>
        </div>
    <!-- Jumbotron end -->

    <!-- Company promises start -->
        <div class="container-fluid" id="company-promises">
            <div class="row">
                <div class="col company-promises">
                    <div class="company-promises">
                        <div class="content-company-promises">
                            <div class="vertical-align"></div>
                            <h1>Company Promises</h1>
                            <p>As a contractor we promise to take care of all supply chain management, to make your shipments travel safe, fast and on time.</p>
                        </div>    
                    </div>
                </div>
            </div>
        </div>

    <!-- Company promises end -->

    <!-- Body start -->
    <section class="f-section-body" id="body-item">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 f-body-header-text">
                    <h2 style="font-family: 'Monda', sans-serif; margin-bottom: 0px;">OUR SERVICES</h2>
                    <p style="font-family: 'arial'; font-size: 14px;" class="f-body-header-text-2">TAILORED LOGISTIC SERVICES</p>
                    <span class="box-item-long"></span>
                    <hr>
                </div>
            </div>
            <div class="main-items">
                <div class="row">
                    
                
                    <a class="col-md-12 text-center f-main-box" href="sea-air-service.php" style="cursor:pointer">
                        <h3 class="f-body-item-text">SEA-AIR SERVICES</h3>
                    </a>
                    
                </div>
                <div class="row text-center">
                    <div class="col-md-4 services-items box-items-2" onclick="location.href='sea-freight-service.php'">
                        <h4>SEA FREIGHT SERVICES</h4>
                    </div>
                    <div class="col-md-4 services-items box-items-3" onclick="location.href='ad-hoc-charter-service.php'">
                        <h4>AD HOC CHARTER SERVICE</h4>
                    </div>
                    <div class="col-md-4 services-items box-items-4" onclick="location.href='air-freight-service.php'">
                        <h4>AIR FREIGHT SERVICES</h4>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4 services-items box-items-5" onclick="location.href='road-transport.php'">
                        <h4>ROAD TRANSPORT</h4>
                    </div>
                    <div class="col-md-4 services-items box-items-6" onclick="location.href='custom-clearance.php'">
                        <h4>CUSTOM CLEARANCE</h4>
                    </div>
                    <div class="col-md-4 services-items box-items-7" onclick="location.href='warehousing.php'">
                        <h4>WAREHOUSING</h4>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Body end -->

    <!-- FOOTER PHP -->
    <?php $this->load->view('struktur/footer');?>






    <!-- Optional JavaScript -->
    <script type="text/javaScript" src="script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>