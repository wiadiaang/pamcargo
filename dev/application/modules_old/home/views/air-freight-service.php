<!DOCTYPE html>
<html>

<!-- HEAD PHP -->
<?php $this->load->view('struktur/header');?>


<body>

<!-- navbar PHP -->
<?php $this->load->view('struktur/navbar');?>



    <div class="header-services">
        <div class="vertical-align text-center">
            <h1 class="text-center"><strong><?= $data->title; ?></strong><br></h1>
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
                <div class="col" style="padding: 10px;"><img class="img-thumbnail img-fluid" src="assets/img/air-freight.png" style="width: 100%;height: 100%;"></div>
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

   <!-- FOOTER PHP -->
   <?php $this->load->view('struktur/footer');?>

   
    <!-- <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script_index.js"></script>
    <script src="assets/js/script.js"></script> -->
</body>

</html>