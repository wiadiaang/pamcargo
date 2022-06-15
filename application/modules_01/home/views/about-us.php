<?php $this->load->view('struktur/header') ?>

<div class="jumbotron">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="text">
                    About PAM International Cargo (LLC)
                </div>
            </div>
        </div>
    </div>
</div>


<section id="about" class="sec-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title">OVERVIEW</div>
                <div class="desc"><?= $about->overview; ?></div>
            </div>
            <div class="col-md-6">
                <img class="img-box" src="<?= base_url('assets/layouts2') ?>/img/img211.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="sec-2">
    <div class="spart-1">
        <div class="about">ABOUT <div class="bold">&nbspPAM CARGO</div>
        </div>
        <div class="desc">PAM CARGO provides full spectrum of Freight and Logistics services that include Air & Ocean
            Import/Export, Sea-Air Multimodal Traffic, Customs Clearing/Forwarding, Consolidation, Project Cargo
            Movements, Road Haulage, Packaging, Door-to-Door Delivery, Warehousing etc. Our specialty is SEA–AIR Service
            from all over Asia to Worldwide.</div>
    </div>

    <!-- <div class="spart-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <div class="box-title">OUR VISION</div>
                        <div class="box-desc"> <?= $about->vision; ?></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="box-title">OUR OBJECTIVE</div>
                        <div class="box-desc"><?= $about->objective; ?></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="box-title">OUR MISSION</div>
                        <div class="box-desc"><?= $about->mision; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="spart-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <div class="box-title">OUR VISION</div>
                                <div class="box-desc">To constantly exceed customer expectations by providing innovative logistics solutions.</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="box-title">OUR OBJECTIVE</div>
                                <div class="box-desc">Our primary objectives is to maintain our success through constant dedication, innovation and ongoing investment in quality services.</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <div class="box-title">OUR MISSION</div>
                                <div class="box-desc">Our highly qualified and experienced management team, including our well trained staff will enable us to reach the level of target and to establish long lasting business relationship with our customers.</div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4 mb-4">
                            <div class="box">
                                <div class="box-title">OUR RESPONSIBILITIES</div>
                                <div class="box-desc">We believe in serving the best to our client’s supply chain. It remains our responsibility to keep our environment in mind for the betterment of mankind and the future generations to follow. <br> PAM Cargo International Freight believes in supporting the cause of protecting our environment.</div>
                            </div>
                        </div>
                    </div>
                </div>
               
                
            </div>

</section>

<?php $this->load->view('struktur/footer') ?>