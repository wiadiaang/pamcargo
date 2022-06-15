<!DOCTYPE html>
<html>

<!-- HEAD PHP -->
<?php $this->load->view('struktur/header');?>

<body>

<!-- navbar PHP -->
<?php $this->load->view('struktur/navbar');?>


    <section id="news-content">
    <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row mb-2">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="news-title">
                                                <h2><?= $data->title; ?></h2>
                                            </div>
                                            <div class="news-cats">
                                                <ul class="list-unstyled list-inline mb-1">
                                                    <li class="list-inline-item">
                                                            <i class="fa fa-folder-o text-danger"></i>
                                                            <a href="#"><small>Advertisment</small> </a>
                                                    </li>
                                                     <li class="list-inline-item">
                                                            <i class="fa fa-folder-o text-danger"></i>
                                                            <a href="#"><small>Author</small> </a>
                                                    </li>
                                                     <li class="list-inline-item">
                                                            <i class="fa fa-folder-o text-danger"></i>
                                                            <a href="#"><small>4th July 2018</small></a>
                                                    </li>
                                                  
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="news-image">
                                                <img src="<?= base_url('assets/dash/files/news/'.$data->image_thumbnail)?>">
                                            </div>
                                            <div class="news-content">
                                            <?= $data->description; ?>
                                                       
                                            </div>
                                            <hr>
                                          
                                            <div class="news-tags">
                                                <h5>Tags</h5>
                                                <button type="button" class="btn btn-sm btn-secondary">
                                                  Education <span class="badge badge-light">4</span>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-secondary">
                                                  Entertainment <span class="badge badge-light">4</span>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-secondary">
                                                  Automobile <span class="badge badge-light">4</span>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-secondary">
                                                  Insurance <span class="badge badge-light">4</span>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-secondary">
                                                  Energy <span class="badge badge-light">4</span>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-secondary">
                                                  Health <span class="badge badge-light">4</span>
                                                </button>
                                            </div>
                                            <hr>
                                            <div class="news-author">
                                                <div class="row">
                                                    <div class="col-md-auto">
                                                            <img src="assets/img/user.svg" alt="Author image" class="rounded-circle" style="width:100px">
                                                    </div>
                                                    <div class="col">
                                                        <div class="auth-title">
                                                            <h4 class="author h4">Admin</h4>
                                                            <div class="bio">
                                                                Description
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3">
                    <div class="row mb-2">
                      <div class="col-md-12">
                          <div class="card">
                             <div class="row">
                              <div class="col-md-12">
                                  <div class="card">
                                    <div class="card-body">
                                        <h5>Highlight</h5>
                                    </div>
                                   </div>
                              </div>
                             </div>
                             <div class="list-group">
                              <a href="#" class="list-group-item list-group-item-action">Lorem Ipsum</a>
                              <a href="#" class="list-group-item list-group-item-action">Lorem Ipsum</a>
                              <a href="#" class="list-group-item list-group-item-action">Lorem Ipsum</a>
                            </div> 
                           </div>
                      </div>
                     </div>
                    <div class="row">
                      <div class="col-md-12">
                          <div class="card">
                            <div class="card-body">
                                <img src="http://www.3forty.media/cannix/wp-content/uploads/2018/04/clem-onojeghuo-228522-unsplash-1-768x1153.jpg">
                            </div>
                           </div>
                      </div>
                     </div>
                 </div>
                
            </div>
        </div>
    </section>




  <!-- LATEST NEWS START SECTION -->
  <div class="container text-center my-3 mb-5">
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
    </div>

  </div>


  <!-- FOOTER PHP -->
  <?php $this->load->view('struktur/footer');?>





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