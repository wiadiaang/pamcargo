<!DOCTYPE html>
<html>

<!-- HEAD PHP -->
<?php $this->load->view('struktur/header');?>

<body>

<!-- navbar PHP -->
<?php $this->load->view('struktur/navbar');?>

    <div class="container-fluid" style="padding: 0;">
        <div class="scheduler-header" style="height: 300px;">
            <div class="vertical-align">
                <h1 style="font-size: 74px;">Agents<br></h1>
                <p style="font-size: 18px;">Preparing to serve our customer</p>
            </div>
        </div>
    </div>
    <section class="body-item-schedule" style="padding-bottom: 20px;">
        <div class="container schedule-box">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center" style="padding-top: 10px;color: rgb(27,187,34);">Agent list</h1>
                </div>
                <hr>
            </div>
            <div class="row" style="padding: 0px 20px;">


            <?php 
                    foreach($data as $key){
                ?>
                <div class="col-md-12 col-lg-4">
                    <div class="content-box">
                        <div class="mini-content">
                            <div class="col text-center">
                                <h5 style="font-size: 20px;"><strong><?= $key->title; ?></strong><br></h5>
                            </div>
                        </div>
                        <div class="card alucard" style="padding-top: 20px;padding-left: 15px;padding-right: 10px;">
                        <?= $key->content; ?>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <!-- <div class="col-md-12 col-lg-4">
                    <div class="content-box">
                        <div class="mini-content">
                            <div class="col text-center">
                                <h5 style="font-size: 20px;"><strong>AIF Global Logistics, CO., Ltd.</strong><br></h5>
                            </div>
                        </div>
                        <div class="card alucard" style="padding-top: 25px;">
                            <div class="card-body border-info" style="padding-top: 5px;padding-bottom: 7px;">
                                <h4 class="text-left card-title" style="font-size: 18PX;filter: blur(0px) grayscale(0%) invert(0%);"><strong>YANGON OFFICE, MYANMAR</strong><br></h4>
                                <p class="card-text">International Commercial Centre 422/426&nbsp;<br>Corner of Strand Road &amp; Botahtaung - Pagoda Road #04-03 Botahtaung Township Yangon - Myanmar<br></p>
                                <h4 class="text-left card-title" style="font-size: 18PX;filter: blur(0px) grayscale(0%) invert(0%);"><strong>Contact: MS. JENNY CHEN</strong><br></h4>
                                <p class="card-text" style="padding-top: 5px;padding-bottom: 0px;"><br>Tel : +95 1 203417&nbsp; &nbsp;Mobile : +95 9 958017770<br>Email : jenny.chen@aif.com.tw<br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="content-box">
                        <div class="mini-content">
                            <h5 class="text-center" style="font-size: 20px;"><strong>CTI LOGISTICS (CAMBODIA) Co., Ltd</strong><br><br></h5>
                        </div>
                        <div class="card alucard" style="padding-top: 25px;">
                            <div class="card-body" style="padding: 0;padding-right: 1px;padding-left: 15px;padding-bottom: 1px;">
                                <p class="card-text" style="padding-top: 5px;">No175, Confederation de la Russie Blvd (110) Unit 2F, 12102, Phnom Penh Cambodia<br></p>
                                <h4 class="card-title">Contact:</h4>
                                <p class="card-text">CTI Export : Mr. Bun Brosoe email:rt@cticambodia.com&nbsp;<br><br>CTI Polina : Ms. Nop Polina <br>email : polina@cticambodia.com&nbsp;<br><br>Sales Manager : Mr. Heang <br>email : heang@cticambodia.com&nbsp;<br><br>Office
                                    Manager : Mr. Jirasak&nbsp;<br>email : jirasak@cticambodia.com&nbsp;<br></p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <div class="row" style="padding: 0px 20px; margin-top: 19px;">
                <div class="col-md-6">
                    <div class="content-box">
                        <div class="mini-content">
                            <div class="col text-center">
                                <h5 style="font-size: 25px;padding-top: 5px;"><strong>MUMBAI</strong><br></h5>
                            </div>
                        </div>
                        <h4 class="text-left" style="font-size: 18PX;filter: blur(0px) grayscale(0%) invert(0%);padding: 5px 20px;"><strong>CARGO MARKETING INTERNATIONAL</strong><br></h4>
                        <p style="padding-left: 15px;padding-right: 15px;"><br>117, 1st floor, Nahar &amp; Seth Indl. Estate, Cardinal Gracious Road,&nbsp; Chakala Andheri East, Mumbai - 400099 India.<br></p>
                        <h4 class="text-left" style="font-size: 18PX;filter: blur(0px) grayscale(0%) invert(0%);padding: 5px 20px;"><br><strong>Contact: MR. KAYUM SHAIKH</strong><br></h4>
                        <p style="padding-left: 15px;padding-right: 15px;"><br>Mobile : 0091 9321189891&nbsp;<br>Tel : 0091 22 42744014&nbsp;<br>Fax : 0091 22 42744001&nbsp;<br>Email : operations@cargomarketingintl.com<br></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-box">
                        <div class="mini-content">
                            <div class="col text-center">
                                <h5 style="font-size: 25px;padding-top: 5px;"><strong>CHENNAI</strong><br><br></h5>
                            </div>
                        </div>
                        <h4 class="text-left" style="font-size: 18PX;filter: blur(0px) grayscale(0%) invert(0%);padding: 5px 20px;"><strong>CARGO MARKETING INTERNATIONAL</strong><br></h4>
                        <p style="padding-left: 15px;padding-right: 15px;"><br>New no 77 / old no 39, Thambu Chetty Street Parry, Chennai - 6000001 India.<br><br></p>
                        <h4 class="text-left" style="font-size: 18PX;filter: blur(0px) grayscale(0%) invert(0%);padding: 5px 20px;"><strong>Contact: MR. SATHISHKUMAR R</strong><br></h4>
                        <p style="padding-left: 15px;padding-right: 15px;"><br>Mobile : 0091 99520 24427&nbsp;<br>Tel : 0091 44 4553 2111 / 8111&nbsp;<br>Fax : 0091 44 2521 0023<br>Email : satishkr@cargomarketingintl.com<br></p>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
   

       <!-- FOOTER PHP -->
       <?php $this->load->view('struktur/footer');?>

    <!-- <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script> -->
</body>

</html>