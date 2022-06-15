
<?php $this->load->view('struktur/header');?>

 <div class="bradcam_area" style="background-image: url(./assets/v.2/img/header-pamcargo/news.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?= base_url('assets/dash/files/news/'.$data->image_thumbnail)?>" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?= $data->title;?></h2>

                     <?php 
                      if($data->image2 != ""){ ?>
                        <img class="img-fluid" src="<?= base_url('assets/dash/files/news/'.$data->image2)?>" alt="">
                        <br>
                        <br>
                     <?php  } ?>
                     <?php 
                      if($data->image3 != ""){ ?>
                        <img class="img-fluid" src="<?= base_url('assets/dash/files/news/'.$data->image3)?>" alt="">
                        <br>

                     <?php  } ?>
                     <?php 
                      if($data->image4 != ""){ ?>
                        <img class="img-fluid" src="<?= base_url('assets/dash/files/news/'.$data->image4)?>" alt="">
                        <br>
                        <br>

                     <?php  } ?>
                     <?php 
                      if($data->image5 != ""){ ?>
                        <img class="img-fluid" src="<?= base_url('assets/dash/files/news/'.$data->image5)?>" alt="">
                        <br>
                        <br>

                     <?php  } ?>
                     
                     
                     
                          <?= $data->description; ?>

                  </div>
               </div>
              
               
               
               
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  
                  
                   <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <?php
                            $data =   $this->db->get('pam_news')->result();
                            foreach($data as $key){?>
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
                                                            <a href="#"><small><?= $data->create_date; ?></small></a>
                                                    </li>
                                                  
                                                    
                                                    
                                                    
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="news-image">
                                                 <img src="<?= base_url('assets/dash/files/news/'.$data->image_thumbnail)?>">
                                                <p class="text-muted "></p>
                                            </div>
                                            <div class="news-content">
                                                <?= $data->description; ?>
                                            </div>
                                            <hr>
                                        
                                            <div class="news-tags">
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
                             <?php 
                              $news = $this->db->query("SELECT * FROM pam_news order by news_id DESC limit 8")->result();

                              foreach($news as $hi){ ?>

                              <a href="<?= base_url($hi->url); ?>" class="list-group-item list-group-item-action"><?= $hi->title?></a>
                              
                              <?php } ?>
                            </div> 
                           </div>
                      </div>
                     </div>
                 </div>
                
            </div>
        </div>
    </section>


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
          
          <?php 
            $news = $this->db->query("SELECT * FROM pam_news order by news_id DESC ")->result();

            foreach($news as $key){

              if($key->news_id == '10'){
                $act ='active';
              }else{
                $act ='';

              }
          
          ?>
            <div class="carousel-item <?= $act ?>">
              <div class="col-lg-3 col-md-3">
                <div class="box-news">
                  <img class="img-fluid" src="<?= base_url('assets/dash/files/news/'.$key->image_thumbnail);?>">
                  <h5><a href="<?= base_url($key->url);?>"><?= $key->title; ?></a></h5>
                </div>
              </div>
            </div>
            
            <?php } ?>

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

  </div> -->

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