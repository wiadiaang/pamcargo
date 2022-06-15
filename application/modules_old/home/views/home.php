<!DOCTYPE html>
<html lang="en">
<!-- -->

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
          <a class="nav-link nav-cs" aria-current="page" href="<?= site_url('home'); ?>">Home</a>
          <a class="nav-link nav-cs" href="<?= site_url('about-us'); ?>">About</a>
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


         <!-- /#sidebar-wrapper -->
 
         <!-- Page Content -->
         <div id="page-content-wrapper">
            
              
      <!-- carousel -->

      <div class="swiper-container">
    
        

        <!-- swiper slides -->
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url(./assets/layouts2/img/img-hd1.jpg);">
              <div class="container text">
                <div class="carousel-caption text-start jumbo-text">
                  <h1>SEA AIR SERVICE</h1>
                  <h5>Your shipping solution</h5>
                  <p>We have the best solution for your needs in one of our superior services, Sea Air Service</p>
                 
                </div>
              </div>
            </div>
            
            <div class="swiper-slide" style="background-image: url(./assets/layouts2/img/img-hd3.jpg);"> 
              <div class="container text">
                <div class="carousel-caption text-start jumbo-text">
                  <h1>THE RIGHT CHOICE</h1>
                  <h3>sea ​​air service is the right choice for your delivery with great efficiency</h3>
                </div>
              </div>
            </div>
            
            <div class="swiper-slide" style="background-image: url(./assets/layouts2/img/img-hd4.jpg);">
              <div class="container text">
                <div class="carousel-caption text-end jumbo-text">
                  <h1>QUICKER THAN PURE SEA FREIGHT</h1>
                  <h3>With sea air service, Your deliveries from Asia will first be shipped to Dubai</h3>
                </div>
              </div>
            </div>
            
            <div class="swiper-slide" style="background-image: url(./assets/layouts2/img/img-hd6.jpg);">
              <div class="container text">
                <div class="carousel-caption text-start jumbo-text">
                  <h1>CHEAPER THAN PURE AIR FREIGHT</h1>
                  <h3>Your shipment will continue by air and be flown by the quickest route to Europe, Africa or America.</h3>
                  <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
                </div>
              </div>
            </div>
            
            <div class="swiper-slide" style="background-image: url(./assets/layouts2/img/img-hd7.jpg);">
              <div class="container text">
                <div class="carousel-caption text-center jumbo-text">
                  <h1>SEA AIR SERVICE BEST CHOICE.</h1>
                  <p>Sea-Air Transport is faster than sea freight and cheaper than air freight and also much more environmentally friendly.</p>
                  <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
                </div>
              </div>
            </div>
        </div>
        <!-- !swiper slides -->
        
        <!-- next / prev arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- !next / prev arrows -->
        
        <!-- pagination dots -->
        <div class="swiper-pagination"></div>
        <!-- !pagination dots -->
    </div>
      <!-- carousel end -->




      <div id="highlight" class="container-fluid">
          <div class="box-s1">
              <div class="row row-cs">
                  <div class="col-md-12 text-center">
                        <div class="text-highlight">
                            We are honored to be a leading and reliable partner in the field of multimodal transport in US 
                            <div class="cta-contact-us">
                                Contact US <i class="bi bi-caret-right-fill"></i>
                            </div>
                        </div>
                       
                  </div>
              </div>
          </div>
      </div>

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
            <div class="arrow"><img src="<?= base_url('assets/layouts2');?>/img/Arrow 2.png" alt=""></div>
            <div class="col-md-3">
              <div class="wrapper">
                <img src="<?= base_url('assets/layouts2');?>/img/air freight.png" alt="">
                <div class="title">SEA FREIGHT</div>
                <div class="desc">Your deliveries from Asia will first be shipped to Dubai ...  </div>
             </div>
            </div>
            <div class="col-md-3">
              <div class="wrapper">
                <img src="<?= base_url('assets/layouts2');?>/img/GRAP-23.png" alt="">
                <div class="title">TRANSIT</div>
                <div class="desc">... where they are reloaded from containers to airfreight pallets in just 8-12 hours ... </div>
             </div>
            </div>
            <div class="col-md-3">
              <div class="wrapper">
                <img src="<?= base_url('assets/layouts2');?>/img/sea freight.png" alt="">
                <div class="title">AIR FREIGHT</div>
                <div class="desc">... and be flown by the quickest route to Europe, Africa or America. </div>
             </div>
            </div>
            <div class="col-md-3">
              <div class="wrapper">
                <img src="<?= base_url('assets/layouts2');?>/img/GRAP-22.png" alt="">
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
              <!-- <div class="title">We have the best service that you can use</div> -->
              <div class="desc">WHY SEA AIR SERVICE?</div>
              <!-- <div class="desc-2">Why Sea Air Service?</div>
              <div class="desc-3">Sea-Air Transport is faster than sea freight and cheaper than air freight - and also much more environmentally friendly. This is how our nonstop hybrid transport runs from Asia to Europe, Africa or America:</div> -->
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
      </section>


      <section class="sec-1">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="head">What we <div class="bold">offer</div></div>
                  </div>
                  
              </div>

              <div class="row content-off">
                  <div class="col-md-4">
                      <div class="left"><img src="<?= base_url('assets/layouts2');?>/img/grap-1.png" alt=""></div>
                      <div class="right">
                          <div class="head-ct">Packaged goods transport</div>
                          <div class="desc">Focuses on the packaging requirements of goods in transit, in particular for items traveling overland by road or rail. </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="left"><img src="<?= base_url('assets/layouts2');?>/img/grap-2.png" alt=""></div>
                    <div class="right">
                        <div class="head-ct">Logistics solutions</div>
                        <div class="desc">Smart and sustainable business requires the skills of logistics experts who are able to think ahead. </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="left"><img src="<?= base_url('assets/layouts2');?>/img/grap-3.png" alt=""></div>
                    <div class="right">
                        <div class="head-ct">Sea and air freight</div>
                        <div class="desc">By using a combination of sea and air freight, you bring added flexibility to your supply chain. </div>
                    </div>
                </div>
              </div>
          </div>
      </section>



      <section class="sec-2">

            <div class="spart-1">
                <div class="about">ABOUT <div class="bold">&nbspPAM CARGO</div></div>
                <div class="desc">PAM CARGO provides full spectrum of Freight and Logistics services that include Air & Ocean Import/Export, Sea-Air Multimodal Traffic, Customs Clearing/Forwarding, Consolidation, Project Cargo Movements, Road Haulage, Packaging, Door-to-Door Delivery, Warehousing etc. Our specialty is SEA–AIR Service from all over Asia to Worldwide.</div>
            </div>

            <div class="spart-2">
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
                    </div>
                </div>
               
                
            </div>

           
            
      </section>

      <section class="sec-3">
          <div class="container">
            <div class="row text-center part-1">
              <div class="col-md-12">
                <div class="text">Why Choose US?</div>
                <div class="desc">We offer the best service you will get, with our top choice of service</div>
              </div>
            </div>
            <div class="row part-2">
              <div class="col-md-4 xs">
                <img src="<?= base_url('assets/layouts2');?>/img/img01.png" alt="">
                <div class="gold"><img src="<?= base_url('assets/layouts2');?>/img/gold.png" alt=""></div>
                <div class="title">SEA AIR SERVICE</div>
                <div class="desc">The best service from us is sea air service. We find the right solution for your shipment with combined SEA and AIR Service.</div>
                <div class="cta-btn">READ MORE</div>
              </div>
              <div class="col-md-4">
                <img src="<?= base_url('assets/layouts2');?>/img/img02.png" alt="">
                <div class="title">AIR FREIGHT SERVICE</div>
                <div class="desc">With our network of agents overseas, PAM Cargo, provides import and export air freight services to destinations worldwide.</div>
                <div class="cta-btn">READ MORE</div>
              </div>
              <div class="col-md-4">
                <img src="<?= base_url('assets/layouts2');?>/img/img03.png" alt="">
                <div class="title">SEA FREIGHT SERVICE</div>
                <div class="desc">We are uniquely positioned to offer flexible carrier choices at very competitive rates through our relationships with major carriers.</div>
                <div class="cta-btn">READ MORE</div>
              </div>
            </div>
          </div>
      </section>
      
      <section class="sec-4">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <div class="text-1">PAM CARGO</div>
              <div class="text-2">YOUR TOTAL TRANSPORTATION SOLUTION</div>
              <div class="line"></div>
              <img  class="img-truck" src="<?= base_url('assets/layouts2');?>/img/truck.png" alt="">
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
                <div class="name">THOMAS VARGHESE</div>
                <div class="position">General Manager</div>
                <div class="desc">Thomas Varghese is the General Manager at PAM INTERNATIONAL CARGO (LLC), based in Dubai. One of the leading Sea – Air specialist in UAE. Thomas responsibilities include Global Air and Sea product management, and ensuring delivery of cost effective logistics solutions.</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <div class="img-person"><img src="<?= base_url('assets/layouts2');?>/img/profile-user.svg" alt=""></div>
                <div class="name">C. CHANDRASHEKHARAN</div>
                <div class="position">Managing Director</div>
                <div class="desc">C. Chandrashekharan is the Managing Director at PAM INTERNATIONAL CARGO (LLC), based in Dubai, and is responsible for administration, finance and business development. Chandrashekharan brings over 30 years of experience in freight forwarding, logistics, compliance, service delivery with various organizations.</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <div class="img-person"><img src="<?= base_url('assets/layouts2');?>/img/profile-user.svg" alt=""></div>
                <div class="name">WILLY RIETH</div>
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
      
          <a class="navbar-brand" href="#"><img src="<?= base_url('assets/layouts2');?>/img/logo.png" alt=""></a>
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