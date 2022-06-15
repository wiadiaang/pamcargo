<!DOCTYPE html>
<html>

<?php $this->load->view('struktur/header'); ?>

<body>

<!-- navbar PHP -->
<?php $this->load->view('struktur/navbar'); ?>
    <div class="container-fluid" style="padding: 0;">
        <div class="scheduler-header" style="height: 360px;">
            <div class="vertical-align">
                <h1 style="font-size: 74px;">About</h1>
                <p style="font-size: 18px;">Share our purposes</p>
            </div>
        </div>
    </div>
    <section class="content-items">
        <div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col" style="margin-top: 10px;">
                        <h1 class="text-dark text-center">Overview</h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 offset-md-0 offset-lg-0 text-center">
                        <!-- <p class="text-justify" style="padding: 0px;padding-right: 20px;padding-left: 20px;"><br>PAM CARGO provides full spectrum of Freight and Logistics services that include Air &amp; Ocean Import/Export, Sea-Air Multimodal Traffic, Customs Clearing/Forwarding, Consolidation, Project Cargo Movements, Road Haulage, Packaging,
                            Door-to-Door Delivery, Warehousing etc. Our specialty is SEA–AIR Service from all over Asia to Worldwide. Our expertise includes providing comprehensive and tailor-made transportation solutions to our clients as each of their
                            requirements are unique.<br></p>
                        <p class="text-justify" style="padding: 0px;padding-right: 20px;padding-left: 20px;">We believe in providing innovative, cost and time effective solutions in every logistical moment we undertake. We pride ourselves in our approach of service delivery, always thinking ahead and developing innovative customized solutions
                            for each and every client of ours. We are persistently looking at ways to improve our service offerings. One of our main methods of improvement is by investing in our people thereby increasing and improving our capabilities
                            constantly.<br><br></p> -->
                            <?= $about->overview; ?>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col" style="margin-top: 10px;">
                        <h1 class="text-dark text-center">Objective</h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 offset-md-0 offset-lg-0 text-center">
                        <?= $about->objective; ?>
                        <!-- <p><br>Our primary objectives is to maintain our success through constant dedication, innovation and ongoing investment in quality services.<br><br></p> -->
                    </div>
                </div>
            </div>
        </div>
        <div> <div class="container-fluid our">
            <div class="row" style="margin-left: 0px; margin-right: 10px; min-height: 300px">
                <div class="col-md-6 boxi-main">
                    <div class="boxi-1"></div>
                </div>
                <div class="col-md-6 boxi-main text-center">
                    <h1 style="
                    padding-top: 60px;">Our Vision</h1>
                    <hr>
                    <!-- <p>To constantly exceed customer expectations by providing</br> innovative logistics solutions.</p> -->
                    <?= $about->vision; ?>

                </div>
            </div>
            <div class="row our-mission" style="margin-right: 0px; margin-left: 10px; min-height: 300px;">
                <div class="col-md-6 boxi-main text-center">
                    <h1 style="
                    padding-top: 55px;">Our Mission</h1>
                    <hr>
                    <!-- <p>Our highly qualified and experienced management team, including our well trained</br> staff will enable us to reach the level of target and to establish </br>long lasting business relationship with -->
                        <!-- our customers.</p> -->
                    <?= $about->mision; ?>

                </div>
                <div class="col-md-6 boxi-main">
                    <div class="boxi-2"></div>
                </div>
            </div>
        </div>
        </div>
        
        <?= $about->team; ?>

        </div>
    </section>
   
  <!-- FOOTER PHP -->
  <?php $this->load->view('struktur/footer');?>

</body>

</html>