
<?php $this->load->view('struktur/header');?>


        <!-- bradcam_area  -->
        <div class="bradcam_area" style="background-image: url(./assets/v.2/img/header-pamcargo/news.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <!-- <h3>News</h3> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ bradcam_area  -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                    <?php foreach($data as $key){?>
     

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?= base_url('assets/dash/files/news/'.$key->image_thumbnail) ?>" alt="">
                                <a href="<?= base_url($key->url);?>" class="blog_item_date">
                                    <h3><?php
                                    
                                    $currDate = $key->create_date;
                                    $changeDate = date("d-m-Y", strtotime($currDate));
                                    echo $changeDate;
                                     ?></h3>
                                    <!-- <p>Jan</p> -->
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?= base_url($key->url);?>">
                                    <h2><?= $key->title ?></h2>
                                </a>
                                <p>
                                <?php
                                    if (strlen($key->caption_thumbnail) > 10)
                                    echo substr($key->caption_thumbnail, 0, 99) . '...';
                                ?>.</p>
                                <!-- <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-comments"></i> 0 Comments</a></li>
                                </ul> -->
                            </div>
                        </article>

                        <?php } ?>

                        <!-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        

                        
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <?php foreach($data as $key){?>
                            <div class="media post_item">
                                <div class="media-body">
                                    <a href="<?= $key->url;?>">
                                        <h3><?= $key->title;?>.</h3>
                                    </a>
                                    <p><?php 
                                     $currDate = $key->create_date;
                                     $changeDate = date("d-m-Y", strtotime($currDate));
                                     echo $changeDate;
                                    ?></p>
                                </div>
                            </div>
                            <?php } ?>
                          
                        </aside>
                        

                        
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- 

<div class="jumbotron">
          <div class="container-fluid">
              <div class="row text-center">
                  <div class="col-md-12">
                    <div class="text">
                      News
                    </div>
                  </div>
              </div>
          </div>
      </div>


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


        </div>
      </div>
    </div>

  </section>

  <br>
  <br>
  <br>

  </div> -->


  <?php $this->load->view('struktur/footer');?>

  <style>
    .card-body .text-muted {
    position: absolute;
    bottom: 4%;
}
  </style>



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