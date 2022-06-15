<!DOCTYPE html>
<html lang="en" >
<!-- <html lang="en" oncontextmenu="return false"> -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAMCARGO</title>
    <link rel="stylesheet" href="<?= base_url('assets/layouts2');?>/style.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
      
    <link rel="stylesheet" href="<?= base_url('assets/html')?>/base.min.css"/>
      <link rel="stylesheet" href="<?= base_url('assets/html')?>/fancy.min.css"/>
      <link rel="stylesheet" href="<?= base_url('assets/html')?>/main.css"/>
      <script src="<?= base_url('assets/html')?>compatibility.min.js"></script>
      <script src="<?= base_url('assets/html')?>theViewer.min.js"></script>
</head>
<body>

  <div id="wrapper">
    <div class="overlay"></div>
     
   <nav class="navbar position-absolute navbar-expand-lg">
    <div class="container-md">
  
      <a class="navbar-brand" href="#"><img src="<?= base_url('assets/layouts2');?>/img/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        
        <div class="navbar-nav ms-auto">
          <a class="nav-link nav-cs" aria-current="page" href="index.html">Home</a>
          <a class="nav-link nav-cs" href="about-us">About</a>
          <li class="nav-item dropdown">
            <a class="nav-link nav-cs dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="sea-air-service">Sea Air Services</a></li>
              <li><a class="dropdown-item" href="sea-freight-service">Sea Freight Services</a></li>
              <li><a class="dropdown-item" href="air-freight-service">Air Freight Services</a></li>
              <li><a class="dropdown-item" href="road-transport">Road Transport</a></li>
              <li><a class="dropdown-item" href="ad-hoc-charter-service">Ad Hoc Charter Service</a></li>
              <li><a class="dropdown-item" href="custom-clearance">Custom clearance</a></li>
              <li><a class="dropdown-item" href="warehousing">Warehousing</a></li>
            </ul>
         </li>
         <li class="nav-item dropdown">
          <a class="nav-link nav-cs dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Schedule
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="schedule-query">Schedule Query</a></li>
            <li><a class="dropdown-item" href="rate-request">Rate Request</a></li>
          </ul>
       </li>
        <a class="nav-link nav-cs" href="news">News</a>
          <a class="nav-link nav-cs" href="offices">Offices</a>
          <a class="nav-link nav-cs" href="agents">Agents</a>
          <a class="nav-link nav-cs" href="contact-us">Contact</a>
         
          
        </div>
      </div>
    </div>
  </nav>

         <div id="page-content-wrapper">
            
              
      <div class="swiper-container">
  
        <div class="swiper-wrapper">

        <?php 
      foreach($slider as $key){ 
  

        ?>
            <div class="swiper-slide" style="background-image: url(./assets/dash/files/<?= $key->image ?>);">
              <div class="container text">
                <div class="carousel-caption jumbo-text" style="position:initial !important">
                  <h1><?= $key->title ?> </h1>
                  <h5><?= $key->description ?></h5>
                  <p></p>
                 
                </div>
              </div>
            </div>
            <?php } ?>
         
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>




      <div id="highlight" class="container-fluid">
          <div class="box-s1">
              <div class="row row-cs">
                  <div class="col-md-12 text-center">
                        <div class="text-highlight">
                            We are honored to be a leading and reliable partner in the field of multimodal transport
                            <!-- <a href="contact-us" class="cta-contact-us">
                                Contact US <i class="bi bi-caret-right-fill"></i>
                            </a> -->
                        </div> 
                  </div>
              </div>
          </div>
      </div>



      <!-- <section> -->

        <!-- <div class="row"> -->
          <!-- <div class="col-md-8 p-4">

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10" aria-label="Slide 11"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11" aria-label="Slide 12"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?= base_url('assets/images/slide/Slide2.PNG'); ?>" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/images/slide/Slide3.PNG'); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/images/slide/Slide4.PNG'); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/images/slide/Slide5.PNG'); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/images/slide/Slide6.PNG'); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/images/slide/Slide7.PNG'); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/images/slide/Slide8.PNG'); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/images/slide/Slide9.PNG'); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/images/slide/Slide10.PNG'); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/images/slide/Slide11.PNG'); ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/images/slide/Slide12.PNG'); ?>" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div> -->

          <!-- <div class="col-md-12"> -->
            <!-- <section class="sec-5" style=" ">

                      <div class=" part-2">
                      <div class="title">We have the best service that you can use</div>
                        <div class="desc">SEA AIR SERVICE</div>
                        <div class="desc-2">What is Sea Air Service?</div>
                        <div class="desc-3">Sea-Air Transport is faster than sea freight and cheaper than air freight - and also much more environmentally friendly. This is how our nonstop hybrid transport runs from Asia to Europe, Africa or America:</div>
                    
                    </div>
          </section> -->
          <!-- </div> -->
        <!-- </div> -->

      <!-- </section> -->
<!-- 
      <section class="sec-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="img-box"><img src="<?= base_url('assets/layouts2');?>/img/img-hd8.jpg" alt=""></div>
            </div>
            <div class="col-md-6 part-2">
              <div class="title">We have the best service that you can use</div>
              <div class="desc">SEA AIR SERVICE</div>
              <div class="desc-2">What is Sea Air Service?</div>
              <div class="desc-3">Sea-Air Transport is faster than sea freight and cheaper than air freight - and also much more environmentally friendly. This is how our nonstop hybrid transport runs from Asia to Europe, Africa or America:</div>
            </div>
          </div>
          <div class="row middle">
          
            <div class="col-md-12">
              <div class="text">How It Works?</div>
            </div>
            <div class="arrow"><img src="<?= base_url('assets/layouts2');?>/img/Arrow 2.PNG" alt=""></div>
            <div class="col-md-3">
              <div class="wrapper">
                <img src="<?= base_url('assets/layouts2');?>/img/air freight.PNG" alt="">
                <div class="title">SEA FREIGHT</div>
                <div class="desc">Your deliveries from Asia will first be shipped to Dubai ...  </div>
             </div>
            </div>
            <div class="col-md-3">
              <div class="wrapper">
                <img src="<?= base_url('assets/layouts2');?>/img/GRAP-23.PNG" alt="">
                <div class="title">TRANSIT</div>
                <div class="desc">... where they are reloaded from containers to airfreight pallets in just 8-12 hours ... </div>
             </div>
            </div>
            <div class="col-md-3">
              <div class="wrapper">
                <img src="<?= base_url('assets/layouts2');?>/img/sea freight.PNG" alt="">
                <div class="title">AIR FREIGHT</div>
                <div class="desc">... and be flown by the quickest route to Europe, Africa or America. </div>
             </div>
            </div>
            <div class="col-md-3">
              <div class="wrapper">
                <img src="<?= base_url('assets/layouts2');?>/img/GRAP-22.PNG" alt="">
                <div class="title">DELIVERY</div>
                <div class="desc">The freight can be delivered immediately from the airport directly to your warehouse on request. </div>
             </div>
            </div>
          </div>
          <div class="row lower">
            <div class="col-md-8 order-2">
              <div class="row">
                <div class="col-md-6 no-pad">
                  <div class="box">
                    <div class="title"> <div class="bold bold-2">Quicker </div> than pure sea freight</div>
                  </div>
                </div>
                <div class="col-md-6 no-pad">
                  <div class="box">
                    <div class="title"><div class="bold bold-2">Cheaper </div> than pure air freight</div>
                  </div>
                </div>
                <div class="col-md-6 no-pad">
                  <div class="box">
                    <div class="title"><div class="bold bold-2">Reduction of CO2 </div></div>
                  </div>
                </div>
                <div class="col-md-6 no-pad">
                  <div class="box">
                    <div class="title">Continuous monitoring and tracking of shipment flows</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 order-1 part-2 ">
              <div class="desc">WHY SEA AIR SERVICE?</div>
              </div>
          </div>
          <div class="row lower-dif">
            <div class="col-md-12 no-pad">
              <div class="box">
                <div class="text">FASTER.  CHEAPER. CLEANER.</div>
              </div>
            </div>
          </div>
        </div>
      </section> -->


      <section>
      <div class="row p-5">
        <div class="col-md-12">
          <div class="card mb-3" >
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="https://www.pamcargo.com/files/services/sea_air_services_965854083.jpg" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">SEA AIR SERVICE <br><br> <small class="">What is Sea Air Service?</small></h5>
                    <p class="card-text">Sea-Air Transport is faster than sea freight and cheaper than air freight - and also much more environmentally friendly. This is how our nonstop hybrid transport runs from Asia to Europe, Africa or America:</p>
                    <p class="card-text"><small class="text-muted"><a href="sea-air-service" class="btn btn-success">Read More</a></small></p>
                  </div>
                </div>
              </div>
            </div>
        
        </div>
      </div>
         
      
      </section>

      <section class="sec-1" style="background-color:#F2F2F2">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="head">OVERVIEW <div class="bold"></div></div>
                  </div>
                  
              </div>

              <div class="row content-off">

                  <div class="col-md-4">
                      <div class="left"><img src="<?= base_url('assets/layouts2');?>/img/grap-1.png" alt=""></div>
                      <div class="right">
                          <div class="head-ct">OBJECTIVE</div>
                          <div class="desc">To maintain our success through constant dedication, innovation and ongoing investment in quality services.</div>
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="left"><img src="<?= base_url('assets/layouts2');?>/img/grap-2.png" alt=""></div>
                    <div class="right">
                        <div class="head-ct">OUR VISION</div>
                        <div class="desc">To constantly exceed customer expectations by providing innovative logistics solutions. </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="left"><img src="<?= base_url('assets/layouts2');?>/img/grap-3.png" alt=""></div>
                    <div class="right">
                        <div class="head-ct">OUR MISSION</div>
                        <div class="desc">To create long lasting and sustainable relationship with our customers using the vast experience of our management team and highly qualified staff.</div>
                    </div>
                </div>
                </div>
                <div class="row content-off">
                <div class="col-md-4 mb-5 mt-5">
                </div>
                <div class="col-md-4 mb-5 mt-5">
                    <div class="left"><img src="<?= base_url('assets/layouts2');?>/img/grap-3.png" alt=""></div>
                    <div class="right">
                        <div class="head-ct">OUR RESPONSIBILITIES</div>
                        <div class="desc">We believe in serving the best to our client’s supply chain. It remains our responsibility to keep our environment in mind for the betterment of mankind and the future generations to follow.

                        PAM Cargo International Freight believes in supporting the cause of protecting our environment.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5 mt-5">
                </div>

              </div>


          </div>
      </section>

      <!-- <section style="background-color:white" class="p-5">
          <div class="row ">
              <div class="col-md-12">
                  <h4><b>OUR EFFORTS TO PROTECT THE ENVIRONMENT</b></h4>
                  <p class="text-start mt-2 ">1. We advice Sea Air product rather Air freight to our clients in order to reduce the carbon emission.</p>
                  <p class="text-start ">2. IMO(International Maritime Organization)has sanctioned all the shipping line to reduce Sulphur content in bunker fuel to 0.5 from 3.5% or use alternative fueling such as LNG.</p>
                  <p class="text-start"><b>CMA-CGM </b>are compliant to this since January 1st 2020. Hence we primarily choose to work with CMA-CGM who is our primary shipping partner.</p>
                
              </div>

          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="col-md-12 p-4" >
               <div class="card text-white" style="background-color:#6DB04E">
                <div class="card-body">
                   <p>This long term plan, but as to improve and comply with 2020 they will be using existing marine diesel fuel which has 0.1% sulphur.</p>

                </div>
              </div>
              </div>
              <div class="col-md-12 p-4 ">
                  <img src="https://www.localhost/2.0/assets/layouts2/img/logo.PNG"  class="rounded " alt="">
                  <p class="text-start mt-5 ">3.Focus on reducing CO2 emission on Earth :</p>
                 
                  <p class="text-start">Efficient planning and moving goods can help to decrease negative impact on the environment. We encourage our employees and truck drivers:</p>
                  <ul>
                    <li>To make sure out truck used to transport goods from sea ports to airports with properly inflated vehicles at standard tyre pressure.</li>
                    <li>To drive at 80-90 kmph in order to generate the lowest level of CO2 to the environment.</li>
                    <li>To avoid harsh breaking and acceleration.</li>
                    <li>To switch off engine while standstill for >3 minutes.</li>
                    <li>To avoid using devices at gasoline stations</li>
                    <li>To avoid using vehicles for short journey.</li>
                    <li>Example: by combining several short trips into a longer one as cold engines use 60% more fuel per KM than warm engines.</li>
                    <li>To utilize sharing cars.</li>
                  </ul>

              </div>
            </div>
            <div class="col-md-4">
            <img src="https://www.localhost/2.0/assets/images/circle.jpg"  class="rounded " style="border-radius:15px" alt="">

            
            </div>


          </div>
      
      </section> -->



      <!-- <section style="background-color:#F2F2F2" class="p-5">
          <div class="row ">
              <div class="col-md-12">
                  <h4><b>OUR OFFICE</b></h4>
                  <div class="row">
                  <div class="card-group">

                    <div class="card">
                      <img src="<?= base_url('assets/img/uea.PNG')?>" class="card-img-top"  alt="...">
                      <div class="card-body">
                        <h5 class="card-title">PAM DUBAI</h5>
                        <p class="card-text">PAM INTERNATIONAL CARGO(LLC)
                          P.O.Box- 117993,206,Lootah HO,Umm Ramool,
                          Dubai- U.A.E
                          </p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Contact : Thomas Varghese</li>
                        <li class="list-group-item">Telephone</li>
                        <li class="list-group-item">Fax</li>
                        <li class="list-group-item">Mobile : + 971 502020443</li>
                        <li class="list-group-item">Email : deepak@pamcargo.com</li>
                        <li class="list-group-item">Web : www.pamcargo.com</li>
                      </ul>
                     
                    </div>
                    <div class="card">
                      <img src="<?= base_url('assets/img/vietnam.PNG')?>" class="card-img-top"  alt="...">
                      <div class="card-body">
                        <h5 class="card-title">PAM VIETNAM</h5>
                        <p class="card-text">
                            PAM INTERNATIONAL CARGO HO CHI MINH Room 402-403,Citilight Tower, 45 Vo Thi Sau St.Daokao Ward,Dist.1, Hochiminh City, Vietnam

                          </p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Contact : Dennis Nguyen</li>
                        <li class="list-group-item">Telephone : +84 38200986</li>
                        <li class="list-group-item">Fax : +84 8 38200096</li>
                        <li class="list-group-item">Mobile : +84 918264090, +84 918899536</li>
                        <li class="list-group-item">Email :dennis.nguyen@pamvn.com <br> hochiminh@pamcargo.com</li>
                        <li class="list-group-item">Web : www.pamcargo.com</li>
                      </ul>
                     
                    </div>
                    <div class="card">
                      <img src="<?= base_url('assets/img/vietnam.PNG')?>" class="card-img-top"  alt="...">
                      <div class="card-body">
                        <h5 class="card-title">PAM VIETNAM</h5>
                        <p class="card-text">PAM INTERNATIONAL CARGO DA NANG
                          5th Floor, Trong Thuc Building, 630-632 Ngo
                          Quyen Street, An Hai Bac Ward, Son Tra District, Da Nang City

                          </p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Telephone: +84 236 3573102730 1868</li>
                        <li class="list-group-item">Mobile : + 971 502020443</li>
                        <li class="list-group-item">Email : lucia.nguyen@pamvn.com</li>
                        <li class="list-group-item">Web : www.pamcargo.com</li>
                      </ul>
                     
                    </div>
                   
                   
                  </div>
                  </div>
              </div>

          </div>
      </section> -->



      <section class="sec-2" style="min-height: 80px; background-color:white;">

            <div class="spart-1">
                <div class="about">ABOUT <div class="bold"> &nbsp PAM CARGO</div></div>
                <div class="desc">PAM CARGO provides full spectrum of Freight and Logistics services that include Air & Ocean Import/Export, Sea-Air Multimodal Traffic, Customs Clearing/Forwarding, Consolidation, Project Cargo Movements, Road Haulage, Packaging, Door-to-Door Delivery, Warehousing etc. Our specialty is SEA–AIR Service from all over Asia to Worldwide.</div>
            </div>

            <!-- <div class="spart-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <div class="box-title">OUR VISION</div>
                                <div class="box-desc">To constantly exceed customer expectations by providing innovative logistics solutions.</div>
                                <div class="cta-read">READ MORE</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="box-title">OUR OBJECTIVE</div>
                                <div class="box-desc">Our primary objectives is to maintain our success through constant dedication, innovation and ongoing investment in quality services.</div>
                                <div class="cta-read">READ MORE</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="box-title">OUR MISSION</div>
                                <div class="box-desc">Our highly qualified and experienced management team, including our well trained staff will enable us to reach the level of target and to establish long lasting business relationship with our customers.</div>
                                <div class="cta-read">READ MORE</div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4 mb-4">
                            <div class="box">
                                <div class="box-title">OUR RESPONSIBILITIES</div>
                                <div class="box-desc">We believe in serving the best to our client’s supply chain. It remains our responsibility to keep our environment in mind for the betterment of mankind and the future generations to follow. <br> PAM Cargo International Freight believes in supporting the cause of protecting our environment.</div>
                                <div class="cta-read">READ MORE</div>
                            </div>
                        </div>
                    </div>
                </div>
               
                
            </div> -->

           
            
      </section>

      
      <section style="background-color:#F2F2F2" class="p-5 mt-5">
          <div class="row ">

              <div class="col-md-4"></div>
              <div class="col-md-8">
                  <h4 style="margin-left:20px"><b>OUR OPERATIONAL EFFICIENCY</b></h4>
                  
              </div>

          </div>
          <div class="row mt-3">
            <div class="col-md-1"></div>
              <div class="col-md-10">
                 <h5>All our Sea-Air containers are loaded on top stowage: because of two reasons,</h5>
                  <p>1. To ensure the best safety of cargo, it is important to plan in advance, both at the shore terminal and offshore to aid effective cargo securing so as to smoothly load the cargo on board at origins without roll-overs</p>
                  <p>2. Pre-planned tap stowage always eases/facilitates the next connection from feeders at origin such as Vietnam, Myanmar, Cambodia, Indonesia to mother vessel immediately at the transit part.</p>

                  <img src="<?= base_url('assets/images/supply.JPG')?>" style="width:100%" alt="">

                  <p class="mt-2">It helps the consignments to save waiting time in transit and supply chain activities of our customers to be better taken care with shorter transit time from end to end comparing to the traditional seaway transport mode.
</p>
<p>The objective of pre-planning action is to make sure the shipments will be immediately loaded on board of aircrafts on the same arrival day at transit ports with reserved space. Our operational teams will proceed all the needful to clear the goods at destination airports then deliver the shipments to final destinations as requested
</p>
              </div>
            <div class="col-md-1"></div>
                    
                  </div>
      </section>



      <!-- <section class="sec-2 " style="min-height: 80px; ">
            <div class="spart-2"> 
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-10">
                        <img src="<?= base_url('assets/images/slide/Slide4.PNG'); ?>" class="d-block w-100 mt-5" alt="...">
                        <br>  
                        </div>
                    </div>
                </div>
              </div>
      </section> -->
      
      <!-- <section class="sec-3">
          <div class="container">
            <div class="row text-center part-1">
              <div class="col-md-12">
                <div class="text">Why Choose US?</div>
                <div class="desc">We offer the best service you will get, with our top choice of service</div>
              </div>
            </div>
            <div class="row part-2">
              <div class="col-md-4 xs">
                <img src="<?= base_url('assets/layouts2');?>/img/img01.PNG" alt="">
                <div class="gold"><img src="<?= base_url('assets/layouts2');?>/img/gold.PNG" alt=""></div>
                <div class="title">SEA AIR SERVICE</div>
                <div class="desc">The best service from us is sea air service. We find the right solution for your shipment with combined SEA and AIR Service.</div>
                <div class="cta-btn">READ MORE</div>
              </div>
              <div class="col-md-4">
                <img src="<?= base_url('assets/layouts2');?>/img/img02.PNG" alt="">
                <div class="title">AIR FREIGHT SERVICE</div>
                <div class="desc">With our network of agents overseas, PAM Cargo, provides import and export air freight services to destinations worldwide.</div>
                <div class="cta-btn">READ MORE</div>
              </div>
              <div class="col-md-4">
                <img src="<?= base_url('assets/layouts2');?>/img/img03.PNG" alt="">
                <div class="title">SEA FREIGHT SERVICE</div>
                <div class="desc">We are uniquely positioned to offer flexible carrier choices at very competitive rates through our relationships with major carriers.</div>
                <div class="cta-btn">READ MORE</div>
              </div>
            </div>
          </div>
      </section> -->
      
      <section class="sec-4">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <div class="text-1">PAM CARGO</div>
              <div class="text-2">YOUR TOTAL TRANSPORTATION SOLUTION</div>
              <div class="line"></div>
              <img  class="img-truck" src="<?= base_url('assets/layouts2');?>/img/truck.PNG" alt="">
            </div>
          </div>
        </div>
      </section>

  
      <section class="sec-6">
        <div class="container">
          <div class="row text-center">
            <div class="cold-md-12">
              <div class="title">Meet Our Solid Team</div>
            </div>
          </div>
          <div class="row content">
            <div class="col-md-4">
              <div class="box">
                <div class="img-person"><img src="<?= base_url('assets/layouts2');?>/img/profile-user.svg" alt=""></div>
                <div class="name"  style="font-size:15px">THOMAS VARGHESE</div>
                <div class="position">General Manager</div>
                <div class="desc">Thomas Varghese is the General Manager at PAM INTERNATIONAL CARGO (LLC), based in Dubai. One of the leading Sea – Air specialist in UAE. Thomas responsibilities include Global Air and Sea product management, and ensuring delivery of cost effective logistics solutions.</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box"> 
                <div class="img-person"><img src="<?= base_url('assets/layouts2');?>/img/profile-user.svg" alt=""></div>
                <div class="name" style="font-size:15px">C. CHANDRASHEKHARAN</div>
                <div class="position">Managing Director</div>
                <div class="desc">C. Chandrashekharan is the Managing Director at PAM INTERNATIONAL CARGO (LLC), based in Dubai, and is responsible for administration, finance and business development. Chandrashekharan brings over 30 years of experience in freight forwarding, logistics, compliance, service delivery with various organizations.</div>
              </div>
            </div>
            <div class="col-md-4"> 
              <div class="box">
                <div class="img-person"><img src="<?= base_url('assets/layouts2');?>/img/profile-user.svg" alt=""></div>
                <div class="name"  style="font-size:15px">WILLY RIETH</div>
                <div class="position">Group - CEO</div>
                <div class="desc">Willy Rieth is the Group CEO at PAM INTERNATIONAL CARGO (LLC), based in Germany, Willy a veteran in freight forwarding and logistics industry and is credited in pioneering Sea-Air business in the region and beyond. Willy’s main objective is to develop the overall business within the group.</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="footer">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="title">ABOUT US</div>
                <div class="desc">We pride ourselves in our approach of service delivery, always thinking ahead and developing innovative customized solutions for each and every client of ours. </div>
              </div>
              <div class="col-md-3">
                <div class="title">SERVICES</div>
                <div class="desc">
                  <ul>
                    <li class="link"><a href="">Sea Air Services</a></li>
                    <li class="link"><a href="">Air Freight Services</a></li>
                    <li class="link"><a href="">Sea Freight Services</a></li>
                    <li class="link"><a href="">Road Transport</a></li>
                    <li class="link"><a href="">Ad hoc charter services</a></li>
                    <li class="link"><a href="">Custom clearance</a></li>
                    <li class="link"><a href="">Warehousing</a></li>
                  </ul>  
                </div>
              </div>
              <div class="col-md-3">
                <div class="title">CONTACT US</div>
                <div class="desc">P.O. Box - 117993,
                  206, Lootah HO, Marakkech St.,
                  Umm Ramool, Dubai - U.A.E.
                  Tel: +971 4 285 2520
                  Fax: +971 4 286 8770
                  info@pamcargo.com
                  www.pamcargo.com</div>
              </div>
              <div class="col-md-3">
                <div class="title">SUBSCRIBE</div>
                <div class="desc">Subscribe to our newsletter and we will inform you about newest projects and promotions.</div>
                <form class="newsletter">
                  <input class="email" type="email" placeholder="Your email...">
                  <input type="submit" class="submit" value="">
              </form>
              </div>
            </div>
            <div class="row text-center">
              <div class="col-md-12 lower">
                <div class="text">PAM CARGO Int'l Freight - 2020 All Rights Reserved.</div>
              </div>
            </div>
          </div>
      </footer>
         </div>
         <!-- /#page-content-wrapper -->
 
     </div>
     <!-- /#wrapper -->





  <!-- floating top -->
  <a href="#" id="scroll" style="display: none;"><span></span></a>

    <!-- <nav class="navbar position-absolute navbar-expand-lg">
        <div class="container-md">
      
          <a class="navbar-brand" href="#"><img src="<?= base_url('assets/layouts2');?>/img/logo.PNG" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            
            <div class="navbar-nav ms-auto">
              <a class="nav-link nav-cs" aria-current="page" href="index.html">Home</a>
              <a class="nav-link nav-cs" href="about.html">About</a>
              <li class="nav-item dropdown">
                <a class="nav-link nav-cs dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Sea Air Services</a></li>
                  <li><a class="dropdown-item" href="#">Sea Freight Services</a></li>
                  <li><a class="dropdown-item" href="#">Air Freight Services</a></li>
                  <li><a class="dropdown-item" href="#">Road Transport</a></li>
                  <li><a class="dropdown-item" href="#">Ad Hoc Charter Service</a></li>
                  <li><a class="dropdown-item" href="#">Custom clearance</a></li>
                  <li><a class="dropdown-item" href="#">Warehousing</a></li>
                </ul>
             </li>
             <li class="nav-item dropdown">
              <a class="nav-link nav-cs dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Schedule
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Schedule Query</a></li>
                <li><a class="dropdown-item" href="#">Rate Request</a></li>
              </ul>
           </li>
              <a class="nav-link nav-cs" href="#">News</a>
              <a class="nav-link nav-cs" href="#">Offices</a>
              <a class="nav-link nav-cs" href="#">Agents</a>
              <a class="nav-link nav-cs" href="contact.html">Contact</a>
             
              
            </div>
          </div>
        </div>
      </nav> -->
    

    
</body>



<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/layouts2');?>/script.js"></script>
</html>

<script>
       
</script>