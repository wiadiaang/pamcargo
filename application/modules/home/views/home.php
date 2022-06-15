<?php $this->load->view('struktur/header'); ?>


<style>
.card1 {
    /* display: inline-block; */
    width: 350px;
    height: auto;
    /* border: 1px solid #ccc; */
    transition: box-shadow 250ms linear;
    overflow: hidden;
}

.card1:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.card1 .card-content-title:hover {
    color: #459539 !important;

}

.font-green {
    color: #459539 !important;
}

.card2 {
    border-radius: 10px;
}

.card1-content {
    padding: 10px;
}

h3 {
    margin: 0;
}

.head {
    position: relative;
    display: flex;
    align-items: center;
    color: #fff;
    font-weight: 400;
}

.head .number-box {
    display: inline;
    float: left;
    /* margin: 15px; */
    margin-right: 15px;
    padding: 10px;
    font-size: 35px;
    line-height: 34px;
    font-weight: 600;
    background: rgba(0, 0, 0, 0.17);
}

.head h2 {
    text-transform: uppercase;
    font-size: 1.3rem;
    font-weight: inherit;
    letter-spacing: 2px;
    margin: 0;
    padding-bottom: 6px;
    line-height: 1rem;
}
</style>



<!-- slider_area_start -->
<div class="slider_area">
   

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php 
                 $no = 0;
                foreach($slider as $slide){
                    $no++;
                    if($no == 1){
                        $act = "active";
                    }else{
                        $act = "";
                    }
            ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?= $no ?>" class="<?= $act ?>"></li>
            <?php } ?>

        </ol>
        <div class="carousel-inner">
            <?php 
                 $no = 0;
                foreach($slider as $slide){
                    $no++;
                    if($no == 1){
                        $act = "active";
                    }else{
                        $act = "";
                    }
            ?>
            <div class="carousel-item <?= $act; ?>">
                <img class="d-block w-100" src="<?= base_url('assets/dash/files/'.$slide->image) ?>" alt="">
            </div>
            <?php } ?>
           

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


</div>


<!-- slider_area_end -->


<div class="chose_area ">
    <div class="container-fluid pl-5">
        <div class="features_main_wrap">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="about_image">
                        <img src="<?= base_url('assets/img');?>/sea_air_services_965854083.jpg" alt="">
                    </div>
                    <div class="about_image mt-5">
                        <img src="https://www.pamcargo.com/pamcargo_old/img/pics/img02.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="features_info">
                        <h3 style="color:#459539">Why SEA-AIR?</h3>
                        <p>We well understand that cost efficiency is important for every enterprise and being time
                            effective in international business is critical as well.
                            Therefore, our experts at PAM can provide tailor-made sea-air solutions in order to meet
                            your specific logistics requirements.</p>
                        <p>By combining lower costs of ocean freight with the benefit of shorter transit time in airway,
                            we can bring more flexibilities to your supply chain effectiveness. Our sea-air solution
                            model can get your cargos to final destinations at a very competitive price with a high
                            timing commitment to your business.</p>
                        <p>With a long time experience in logistics our management team and competent employees will
                            provide you with the best solution to meet your business goals.</p>
                        <p>PAM International service is available on all key lanes from Asia to all over Europe, Africa,
                            United States & Canada. Our Sea-Air product is able to aid you to reach your business goals
                            as we always try to minimize our logistics charges for a win-win partnership.
                        </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3">
                   
                <div class="blog_right_sidebar " style="border:1px solid green; margin-top:0px; padding-top:0" >
                    
                        <aside class="single_sidebar_widget popular_post_widget" >
                            <h3 style="color:#459539">News <small style="float:right; font-size:0.5em"> <a href="<?= base_url('news');?>">See All</a> </small></h3>
                            <hr class="mt-4">
                            <?php foreach($news as $key){?> 
                            <div class="media post_item">
                                <div class="media-body">
                                    <img src="<?= base_url('assets/dash/files/news/'.$key->image_thumbnail)?>" width="150" alt="">
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
    </div>
</div>

<div class="counter_area">
    <div class="container">
        <div class="offcan_bg">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3> <span class="counter">45</span> <span>%</span> </h3>
                        <p class="font-weight-bold">CO2 EMISSION</p>
                        <small>Reduce up to 45% of CO2 emissions.</small>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3> <span class="counter">30</span> - <span class="counter">50</span> <span>%</span> </h3>
                        <p class="font-weight-bold">COST</p>
                        <small>Save up to 30% cost compared to Air freight</small>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3> <span class="counter">50</span>%</h3>
                        <p class="font-weight-bold">TIME</p>
                        <small>Save up to 50% time compared to Sea freight</small>
                    </div>
                </div>
                <!-- <div class="col-xl-3 col-md-3">
                        <div class="single_counter text-center">
                            <h3> <span class="counter">3245</span></h3>
                            <p>Business Done</p>
                        </div>
                    </div> -->
            </div>
        </div>

    </div>
</div>

<!-- 
<div class="transportaion_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_transport">
                    <div class="icon">
                        <img src="<?= base_url('assets/v.2') ?>/img/svg_icon/001-goal.png" style="width:55px" alt="">
                    </div>
                    <h3>Objective</h3>
                    <p>To maintain our success through constant dedication, innovation and ongoing investment in quality
                        services.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_transport">
                    <div class="icon">
                        <img src="<?= base_url('assets/v.2') ?>/img/svg_icon/003-focus.png" style="width:55px" alt="">
                    </div>
                    <h3>Our Vision</h3>
                    <p>To constantly exceed customer expectations by providing innovative logistics solutions.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single_transport">
                    <div class="icon">
                        <img src="<?= base_url('assets/v.2') ?>/img/svg_icon/004-mission.png" style="width:55px" alt="">
                    </div>
                    <h3>Our Mission</h3>
                    <p>To create long lasting and sustainable relationship with our customers using the vast experience
                        of our management team and highly qualified staff.</p>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="single_transport">
                    <div class="icon">
                        <img src="<?= base_url('assets/v.2') ?>/img/svg_icon/002-responsibility.png" style="width:55px"
                            alt="">
                    </div>
                    <h3>Our Responsibility</h3>
                    <p>We believe in serving the best to our client’s supply chain. It remains our responsibility to
                        keep our environment in mind for the betterment of mankind and the future generations to follow.
                    </p>
                    <p>PAM Cargo International Freight believes in supporting the cause of protecting our environment.
                    </p>
                </div>
            </div> 
        </div>
    </div>
</div> -->

<div class="transportaion_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-50 text-center">
                    <h3 style="color:#459539">
                        Our Operational Efficiency
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="card1 card2">
                    <!-- <div class="titles">
                        <div class="head">
                            <div class="number-box">
                                <span>01</span>
                            </div>
                            <h4>Pre-Planning</h4>
                        </div>
                    </div> -->
                    <img src="<?= base_url('assets/v.2/img/icon/') ?>/e9b25e18d55b41ac65de62849606c043.gif"
                        height="250px" width="360px" alt="" />
                    <div class="card1-content">
                        <!-- <h3></h3> -->
                        <p class="card-content-title font-weight-bold font-green">Pre-Planning</p>
                        <small>is the crucial step that leads to efficient operations</small>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">

                <div class="card1 card2">
                    <!-- <div class="titles">
                        <div class="head">
                            <div class="number-box">
                                <span>02</span>
                            </div>
                            <h4>Relationship</h4>
                        </div>
                    </div> -->
                    <img src="<?= base_url('assets/v.2/img/icon/') ?>/960x0.gif" height="250px" width="360px" alt="" />
                    <div class="card1-content">
                        <p class="font-weight-bold font-green">Relationship</p>
                        <small>Strong Relationship With The shipping Line</small>
                    </div>
                </div>

            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="card1 card2">
                    <!-- <div class="titles">
                        <div class="head">
                            <div class="number-box">
                                <span>03</span>
                            </div>
                            <h4>Shifting</h4>
                        </div>
                    </div> -->
                    <img src="<?= base_url('assets/v.2/img/icon/') ?>/Container-ship.gif" height="250px" width="360px"
                        alt="" />
                    <div class="card1-content">
                        <p class="font-weight-bold font-green">Shifting</p>
                        <small>Easy shifting from feeder to mother vessel</small>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mt-10">
                <div class="card1 card2">
                    <!-- <div class="titles">
                        <div class="head">
                            <div class="number-box">
                                <span>03</span>
                            </div>
                            <h4>Shifting</h4>
                        </div>
                    </div> -->
                    <img src="<?= base_url('assets/v.2/img/icon/') ?>/e0f2c7bc-f8d6-4338-abbc-e03d9264753f.jpg"
                        height="250px" width="360px" alt="" />
                    <div class="card1-content">
                        <p class="font-weight-bold font-green">AirFreight Transfer</p>
                        <small>Smooth Loading to aircraft for immediate flight</small>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mt-10">
                <div class="card1 card2">
                    <!-- <div class="titles">
                        <div class="head">
                            <div class="number-box">
                                <span>04</span>
                            </div>
                            <h4>Safety</h4>
                        </div>
                    </div> -->
                    <img src="<?= base_url('assets/v.2/img/icon/') ?>/bc685251038249.58ef136283a3b.gif" height="250px"
                        width="360px" alt="" />
                    <div class="card1-content">
                        <!-- <h3>Safety</h3>
                            <p>Cargo Safety and no Damages on parcel</p> -->
                        <p class="font-weight-bold font-green">Safety</p>
                        <small>Cargo Safety and no Damages on parcel</small>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mt-10">
                <div class="card1 card2">
                    <!-- <div class="titles">
                        <div class="head">
                            <div class="number-box">
                                <span>05</span>
                            </div>
                            <h4>Destination</h4>
                        </div>
                    </div> -->
                    <img src="<?= base_url('assets/v.2/img/icon/takeabox.png') ?>" height="250px" width="360px"
                        alt="" />
                    <div class="card1-content">
                        <p class="font-weight-bold font-green">Destination</p>
                        <small>Customer satisfaction.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="service_area" style="background-color:">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50 text-center">
                        <h3>
                            Services We Offer
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="service_active owl-carousel">
                        <div class="single_service">
                            <div class="thumb">
                                <img src="<?= base_url('assets/v.2') ?>/img/service/1.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="sea-air-service">Sea Air Service</a></h3>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="<?= base_url('assets/v.2') ?>/img/service/2.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="sea-freight-service">Sea Freight Service</a></h3>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="<?= base_url('assets/v.2') ?>/img/service/3.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="air-freight-service">Air Freight Service</a></h3>
                            </div>
                        </div>
                        <div class="single_service">
                            <div class="thumb">
                                <img src="<?= base_url('assets/v.2') ?>/img/service/1.png" alt="">
                            </div>
                            <div class="service_info">
                                <h3><a href="road-transport">Road transport</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<!-- contact_action_area  -->
<div class="contact_action_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-50 text-center">
                    <h3 class=" font-green">
                        Our Efforts To Protect The Environment
                    </h3>
                </div>
            </div>
        </div>
        <div class="row  ">


            <div class="col-xl-7 col-md-6">
                <div class="action_heading ">
                    <p class="text-dark">1. We advice Sea Air product rather Air freight to our clients in order to
                        reduce the carbon
                        emission.
                    </p>
                    <p class="mt-2 text-dark">2. IMO(International Maritime Organization)has sanctioned all the shipping
                        line to
                        reduce Sulphur content in bunker fuel to 0.5 from 3.5% or use alternative fueling such as LNG.
                    </p>
                    <p class="mt-2 text-dark">

                        CMA-CGM are compliant to this since January 1st 2020. Hence we primarily choose to work with
                        CMA-CGM who is our primary shipping partner
                    </p>
                    <p class=" text-dark">3. Focus on reducing CO2 emission on Earth :</p>
                    <p class=" text-dark"> Efficient planning and moving goods can help to decrease negative impact on
                        the
                        environment. We encourage our employees and truck drivers:</p>

                    <p class=" text-dark">
                        <span> - To make sure out truck used to transport goods from sea ports to airports with properly
                            inflated vehicles at standard tyre pressure.</span><br>
                        <span> - To drive at 80-90 kmph in order to generate the lowest level of CO2 to the
                            environment.</span><br>
                        <span> - To avoid harsh breaking and acceleration.</span><br>
                        <span> - To switch off engine while standstill for >3 minutes.</span><br>
                        <span> - To avoid using devices at gasoline stations.</span><br>
                        <span> - To avoid using vehicles for short journey.</span><br>
                        <span> - Example: by combining several short trips into a longer one as cold engines use 60%
                            more
                            fuel
                            per KM than warm engines.</span><br>
                        <span> - To utilize sharing cars.</span>
                    </p>


                </div>
            </div>
            <div class="col-xl-5 col-md-6">
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="card text-white" style="background-color:#459539">
                            <div class="card-body ">
                                <p class="text-capitalize text-center text-white">This long term plan, but as to improve
                                    and
                                    comply with 2020 they will be using existing marine diesel fuel which has 0.1%
                                    sulphur.</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6">

                        <div class="call_add_action mt-3">
                            <span class="boxed-btn3" style="font-size: 17px !important;">-99% in Sulphur</span>
                        </div>
                        <div class="call_add_action mt-2">
                            <span class="boxed-btn3" style="font-size: 17px !important;">-25% CO2</span>
                        </div>
                        <div class="call_add_action mt-2">
                            <span class="boxed-btn3" style="font-size: 17px !important;">-99% Fine particulate</span>
                        </div>


                    </div>

                </div>
            </div>


        </div>
    </div>
</div>







<!-- testimonial_area  -->
<!-- <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section_title mb-50 text-left">
                                    <h3 class=" text-white">
                                    OUR OFFICE 
                                    </h3>
                                </div>
                            </div>
                        </div>
                    <div class="testmonial_active owl-carousel">
                        
                        <div class="single_carousel">

                            <div class="single_testmonial text-center">
                                <div class="quote mb-5">
                                    <img src="<?= base_url('assets/dash/files') ?>/offices/flag-uae2.png"  alt="">
                                </div>
                                <p class="">PAM INTERNATIONAL CARGO (LLC)</p>
                                <span>P.O. Box - 117993, 206, Lootah HO, Umm Ramool, Dubai - U.A.E.</span>
                                <div class="testmonial_author mt-4">
                                    <div class="thumb">
                                        <img src="https://i.pinimg.com/originals/0c/3b/3a/0c3b3adb1a7530892e55ef36d3be6cb8.png" style="width:50px" alt="">
                                    </div>
                                    <h3>Thomas Varghese</h3>
                                    <span>thomas@pamcargo.com</span>
                                </div>
                            </div>

                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote mb-5">
                                    <img src="<?= base_url('assets/dash/files') ?>/offices/vietnam.jpg"  alt="">
                                </div>
                                <p class="">PAM International Cargo HO CHI MINH</p>

                                <span>Room 402-403, Citilight Tower, 45 Vo Thi Sau St., Daokao Ward, Dist.1, Hochiminh City, Vietnam.</span>
                                <div class="testmonial_author mt-4">
                                    <div class="thumb">
                                        <img src="https://i.pinimg.com/originals/0c/3b/3a/0c3b3adb1a7530892e55ef36d3be6cb8.png" style="width:50px" alt="">
                                    </div>
                                    <h3>Dennis Nguyen</h3>
                                    <span>dennis.nguyen@pamvn.com</span><br>
                                    <span>hochiminh@pamcargo.com</span>
                                </div>
                            </div>

                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote mb-5">
                                    <img src="<?= base_url('assets/dash/files') ?>/offices/vietnam.jpg"  alt="">
                                </div>
                                <p class="">PAM International Cargo DA NANG</p>

                                <span>5th Floor, Trong Thuc Building, 630-632 Ngo Quyen Street, An Hai Bac Ward, Son Tra Distric, Da Nang City.</span>
                                <div class="testmonial_author mt-4">
                                    <div class="thumb">
                                        <img src="https://i.pinimg.com/originals/0c/3b/3a/0c3b3adb1a7530892e55ef36d3be6cb8.png" style="width:50px" alt="">
                                    </div>
                                    <h3>Danang</h3>
                                    <span>danang@pamvn.com </span>
                                </div>
                            </div>
                            
                        </div>
                    </div>


                </div>


                <div class="col-xl-5">

                <div class="row">
                            <div class="col " style="margin-top:100px">
                            <a href="offices" class="boxed-btn2">See All Office</a>

                            </div>

                        </div>
                </div>
            </div>
           
        </div>
    </div> -->
<!-- /testimonial_area  -->

<!-- <div class="Estimate_area overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="Estimate_info">
                        <h3>Get free Estimate</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture
                            placing.</p>
                        <a href="#" class="boxed-btn3">+971 4 285 2520</a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="form">
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="text" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="Product type">Product type</option>
                                            <option value="1">small</option>
                                            <option value="2">standard</option>
                                            <option value="3">high</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="Product size">Product size</option>
                                            <option value="1">M</option>
                                            <option value="2">L</option>
                                            <option value="3">Xl</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="City of departure">City of departure</option>
                                            <option value="1">departure</option>
                                            <option value="2">departure</option>
                                            <option value="3">departure</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="Delivery city">City of departure</option>
                                            <option value="1">Delivery</option>
                                            <option value="2">Delivery</option>
                                            <option value="3">Delivery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input_field">
                                        <button class="boxed-btn3-line" type="submit">Send Estimate</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<?php $this->load->view('struktur/footer'); ?>