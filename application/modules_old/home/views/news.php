<!DOCTYPE html>
<html>

<!-- HEAD PHP -->
<?php $this->load->view('struktur/header');?>


<body>

<!-- navbar PHP -->
<?php $this->load->view('struktur/navbar');?>





  <!-- MAIN START SECTION -->
  <section id="news-body">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <label class="section-divider">
            <span>PAM CARGO NEWS</span>
          </label>

        </div>
      </div>
      <div class="row">
        <div class="card-group">


          <?php foreach($data as $key){?>
        <div class="col-md-4">
          <div class="card  chr-1">
            <img src="<?= base_url('assets/dash/files/news/'.$key->image_thumbnail) ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $key->title ?> </h5>
              <p class="card-text"><?= substr($key->caption_thumbnail, 0, 100) . '..';
                                                        
                                         ?></p>
              <p class="card-text"><small class="text-muted"><?= $key->create_date ?></small></p>
              <div class="read">
                <a href="<?= base_url($key->url);?>">
                  <span class="text-right" id="rm-1">Read More</span>
                </a>

              </div>
            </div>
          </div>
        
        </div>

          <?php } ?>

        
          <!-- <div class="card chr-2">
            <img src="assets/img/news-img.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">What is Lorem Ipsum? </h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <div class="read">
                <a href="">
                  <span class="text-right" id="rm-2">Read More</span>
                </a>
              </div>
            </div>
          </div> -->
          <!-- <div class="card chr-3">
            <img src="assets/img/news-img.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">What is Lorem Ipsum? </h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <div class="read">
                <a href="">
                  <span class="text-right" id="rm-3">Read More</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card-group mb-5">
          <div class="card chr-4">
            <img src="assets/img/news-img.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">What is Lorem Ipsum? </h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <div class="read">
                <a href="">
                  <span class="text-right" id="rm-4">Read More</span>
                </a>
              </div>
            </div>
          </div>
          <div class="card chr-5">
            <img src="assets/img/news-img.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">What is Lorem Ipsum? </h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <div class="read">
                <a href="">
                  <span class="text-right" id="rm-5">Read More</span>
                </a>
              </div>
            </div>
          </div>
          <div class="card chr-6">
            <img src="assets/img/news-img.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">What is Lorem Ipsum? </h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              <div class="read">
                <a href="">
                  <span class="text-right" id="rm-6">Read More</span>
                </a>

              </div>
            </div>
          </div> -->


        </div>
      </div>
    </div>

    <!-- PAGINATION  START SECTION -->
    <!-- <nav aria-label="Page navigation example" class="mb-5">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav> -->
  </section>

  <br>
  <br>
  <br>

  <!-- LATEST NEWS START SECTION -->
  <!-- <div class="container text-center my-3 mb-5">
    <div class="row text-center mb-2">
      <div class="col-12">
        <label class="section-divider">
          <span>LATEST NEWS</span>
        </label>

      </div>
    </div>
    <div class="row mx-auto my-auto text-left">
      <div id="recipeCarousel" class="carousel bot slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
          <div class="outer-box">
            <div class="carousel-item active">
              <div class="col-lg-3 col-md-3">
                <div class="box-news">
                  <img class="img-fluid" src="assets/img/daan-stevens-9z0V7KuvPgo-unsplash.jpg">
                  <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h5>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-3 col-md-3">
                <div class="box-news">
                  <img class="img-fluid" src="assets/img/gao-yang-4loUhQgm-m0-unsplash.jpg">
                  <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h5>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-3 col-md-3">
                <div class="box-news">
                  <img class="img-fluid" src="assets/img/scott-osborn-ei-3nNlBu0U-unsplash.jpg">
                  <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</h5>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-lg-3 col-md-3">
                <div class="box-news">
                  <img class="img-fluid" src="assets/img/bruno-aguirre-QYZcQiCeEVk-unsplash.jpg">
                  <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    incididunt
                    incididunt incididunt iasiiadnaminidai</h5>
                </div>
              </div>
            </div>
          </div>


        </div>
        <a class="carousel-control-prev bg-dark w-auto" href="#recipeCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next bg-dark w-auto" href="#recipeCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div> -->

  </div>


  <!-- FOOTER PHP -->
  <?php $this->load->view('struktur/footer');?>

  <style>
    .card-body .text-muted {
    position: absolute;
    bottom: 4%;
}
  </style>





  <!-- <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/coming-soon.js"></script>
  <script src="assets/js/coming-soon.min.js"></script> -->

  <script>
    $('#recipeCarousel').carousel({
      interval: 4000
    })

    $('.bot .carousel-item').each(function () {
      var minPerSlide = 4;
      var next = $(this).next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));

      for (var i = 0; i < minPerSlide; i++) {
        next = next.next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
      }
    });

    $(document).ready(function () {
      $(".chr-1").hover(function () {
        $("#rm-1").css("color", "green");
      }, function () {
        $("#rm-1").css("color", "black");
      });

      $(".chr-2").hover(function () {
        $("#rm-2").css("color", "green");
      }, function () {
        $("#rm-2").css("color", "black");
      });

      $(".chr-3").hover(function () {
        $("#rm-3").css("color", "green");
      }, function () {
        $("#rm-3").css("color", "black");
      });

      $(".chr-4").hover(function () {
        $("#rm-4").css("color", "green");
      }, function () {
        $("#rm-4").css("color", "black");
      });

      $(".chr-5").hover(function () {
        $("#rm-5").css("color", "green");
      }, function () {
        $("#rm-5").css("color", "black");
      });

      $(".chr-6").hover(function () {
        $("#rm-6").css("color", "green");
      }, function () {
        $("#rm-6").css("color", "black");
      });

    });
  </script>
</body>

</html>