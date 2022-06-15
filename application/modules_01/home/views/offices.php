<?php $this->load->view('struktur/header'); ?>
<style>
.hov {
    background: #fff;
    padding: 50px 25px 45px;
    border-radius: 13px;
    min-height: 500px;
    transition: all 0.2s ease;
}

.hov:hover {
    background: #6DB04E;
    color: #fff;
}
</style>
<div class="jumbotron">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="text">
                    Offices
                </div>
            </div>
        </div>
    </div>
</div>

<section class="offices-content-section">
    <div class="offices-content-box" style="background-color: #eeeeee;">
        <div class="row" style="padding-top: 5px;">
            <div class="col">
                <h1 class="text-center"><strong>Country :</strong><br></h1>
                <hr>
            </div>
        </div>
        <div class="container">

            <div class="col-12">
                <div class="row">
                    <?php
                    foreach ($data as $key) {
                    ?>
                    <div class="col-md-4">
                        <!-- <div class="image-flip">
                            <div class="mainflip">
                                <div class="frontside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img
                                                    src="<?= base_url('assets/dash/files/offices/' . $key->image_thumbnail) ?>">
                                            </p>
                                            <h4 class="card-title"><strong><?= $key->name_country; ?></strong><br><br>
                                            </h4>
                                            <h5 class="card-title"><?= $key->name_office; ?><br><br></h5>
                                            <p class="card-title"><?= $key->address; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title text-center"><?= $key->name_country; ?><br><br></h3>
                                            <h4 class="card-title">Contact: <?= $key->contact_name; ?></h4>
                                            <p class="card-title"><br><br><br>Tel: <?= $key->telp; ?> <br>Fax:
                                                <?= $key->fax; ?> <br>Mob: <?= $key->mob; ?> &nbsp; &nbsp;
                                                &nbsp;&nbsp;<br>
                                                Email: <?= $key->email; ?> <br>Web: <?= $key->website; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="card mb-3 hov " style=" border:0px solid white !important">
                            <p class="text-center"><img style="width: 50%;"
                                    src="<?= base_url('assets/dash/files/offices/' . $key->image_thumbnail) ?>"
                                    class="card-img-top" alt="..."></p> 
                            <div class="card-body">
                                <h4 class="card-title"><strong><?= $key->name_country; ?></strong>
                                </h4>
                                <h5 class="card-title"><?= $key->name_office; ?><br><br></h5>
                                <p class="card-text"><?= $key->address; ?></p>&nbsp; &nbsp;
                                <h4 class="card-title">Contact: <?= $key->contact_name; ?></h4>
                                <p class="card-text"><br> Tel: <?= $key->telp; ?> <br>Fax:
                                    <?= $key->fax; ?> <br>Mob: <?= $key->mob; ?> <br>
                                    Email: <?= $key->email; ?> 
                                
                            </div>
                        </div>
                    </div>
                    <br>
                    <?php } ?>
                </div>
                <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="image-flip">
                            <div class="mainflip">
                                <div class="frontside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img src="assets/img/flag-vietnam.svg"></p>
                                            <h4 class="card-title"><strong>PAM VIETNAM</strong><br><br></h4>
                                            <h5 class="card-title">PAM CARGO HO CHI MINH<br><strong>&nbsp;</strong><br><br></h5>
                                            <p class="card-title">Room 402-403, Citilight Tower, 45 Vo Thi Sau St., Daokao Ward, Dist.1, Hochiminh City, Vietnam<br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title text-center">PAM VIETNAM<br><br></h3>
                                            <h4 class="card-title">Contact: Dennis Nguyen<br></h4>
                                            <p class="card-title"><br><br><br>Tel: +84 38200986<br>Fax: +84 8 38200096&nbsp;<br>Mob: +84 918264090, +84 918899536&nbsp;<br>Email: dennis.nguyen@pamvn.com - hochiminh@pamcargo.com&nbsp;<br>Web: www.pamcargo.com<br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="image-flip">
                            <div class="mainflip">
                                <div class="frontside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img src="assets/img/flag-vietnam.svg"></p>
                                            <h4 class="card-title"><strong>PAM VIETNAM</strong><br><br></h4>
                                            <h5 class="card-title">PAM CARGO DANANG - Representative Office<br><br></h5>
                                            <p class="card-title">C&nbsp; 4-6 Lot, Tran Nhan Tong Str., Tho Quang Ward, Son Tra Dist., Danang City, Vietnam<br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title text-center">PAM VIETNAM<br><br></h3>
                                            <h4 class="card-title">Contact:<br><br></h4>
                                            <p class="card-title"><br><br><br>Tel: +84 236 3573102&nbsp;<br>Fax: +84 236 3573104&nbsp;<br>Email: danang@pamvn.com&nbsp;<br>Web: www.pamcargo.com&nbsp;<br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="image-flip">
                            <div class="mainflip">
                                <div class="frontside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img src="assets/img/flag-vietnam.svg"></p>
                                            <h4 class="card-title"><strong>PAM VIETNAM</strong><br><br></h4>
                                            <h5 class="card-title">PAM CARGO HANOI - Branch Office<br><br></h5>
                                            <p class="card-title">6th, Floor, Detech Tower No. 08 Ton That Thuyet St., My Dinh 2, Nam Tu Liem Dist., Hanoi, Viet Nam<br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title text-center">PAM VIETNAM<br><br></h3>
                                            <h4 class="card-title">Contact:&nbsp;</h4>
                                            <p class="card-title"><br><br><br>Tel: +84 913 040283&nbsp; Fax : +84 4 32484567&nbsp;<br>Email: eric.thanh@pamvn.com&nbsp;<br>Web: www.pamcargo.com&nbsp;<br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="image-flip">
                            <div class="mainflip">
                                <div class="frontside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img src="assets/img/flag-vietnam.svg"></p>
                                            <h4 class="card-title"><strong>PAM VIETNAM</strong><br><br></h4>
                                            <h5 class="card-title">PAM CARGO HAIPHONG - Branch Office<br><br></h5>
                                            <p class="card-title">Room 503, Thang Loi Building, 3 Le Thanh Tong Str., May To, Ngo Quyen, Haiphong City, Vietnam<br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title text-center">PAM VIETNAM<br><br></h3>
                                            <h4 class="card-title">Contact:<br><br></h4>
                                            <p class="card-title"><br><br>Tel: +84 225 8831778&nbsp;<br>Mob: +84 983 052 884 / +84 906 319 668<br>Email: haiphong@pamvn.com&nbsp;<br>Web: www.pamcargo.com&nbsp;<br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="image-flip">
                            <div class="mainflip">
                                <div class="frontside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img src="assets/img/flag-indonesia.png"></p>
                                            <h4 class="card-title">PAM INDONESIA<br><br></h4>
                                            <h5 class="card-title">PT PAM TRANSPOR INDONESIA<br><br><br></h5>
                                            <p class="card-title">Ganggeng III No 10. Tg Priok, Jakarta 14330 - Indonesia<br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title text-center">PAM INDONESIA<br><br></h3>
                                            <h4 class="card-title">Contact: Mas Soen<br><br><br></h4>
                                            <p class="card-title"><br>Tel: +62 21 2962 8746&nbsp;<br>Mob: +62 818 704518&nbsp;<br>Email: jakarta@pamcargo.com&nbsp;<br>Web: www.pamcargo.com<br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="image-flip">
                            <div class="mainflip">
                                <div class="frontside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img src="assets/img/flag-italy.png"></p>
                                            <h4 class="card-title">PAM ITALY<br><br></h4>
                                            <h5 class="card-title">MIA ITALIA SERVICES S.R.L.<br><br><br></h5>
                                            <p class="card-title">Via degli Alpini n. 10, 31046 Oderzo, Treviso, ITALIA<br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title text-center">PAM ITALY<br><br></h3>
                                            <h4 class="card-title">Contact: Stefano Petteno<br><br><br></h4>
                                            <p class="card-title"><br>Phone: +39 (041) 4574008&nbsp;<br>Fax : +39 (0422) 0431102&nbsp;<br>Mobile : +39 388 9473937&nbsp;<br>Email: stefano@pamcargo.com&nbsp;<br>Web: www.pamcargo.com<br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="image-flip">
                            <div class="mainflip">
                                <div class="frontside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img src="assets/img/flag-bangladesh.png"></p>
                                            <h4 class="card-title">PAM BANGLADESH<br><br></h4>
                                            <h5 class="card-title">P A M International Cargo Bangladesh<br><br></h5>
                                            <p class="card-title">1, Mohakhali DOHS , Dhaka, Bangladesh<br><br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title text-center">PAM BANGLADESH<br><br></h3>
                                            <p class="card-title">Customer Service :<br>Md.Babul Hossain / 01954 023135<br>Documents &amp; Accounts :&nbsp;<br>Md. Jahangir Alam / 01918 <br><br>038686Chittagong Office<br>203/211, Badamtoly , Agrabad C/A, Chittagong, Bangladesh<br>CFS
                                                Operation:&nbsp;<br>Amzad Ali / 01758 283820&nbsp;<br>Email : bangladesh@pamcargo.com<br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="image-flip">
                            <div class="mainflip">
                                <div class="frontside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img src="assets/img/flag-china.png"></p>
                                            <h4 class="card-title">PAM HONGKONG &amp; CHINA<br><br></h4>
                                            <h5 class="card-title">PAM Cargo International Hong Kong &amp; China Ltd<br><br></h5>
                                            <p class="card-title">Unit 903A, 9th Floor, Sun Cheong Industrial Building,No.2-4 Cheung Yee Street, Lai Chi Kok Kowloon, Hong Kong.<br></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside" style="width: 100%;">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title text-center">PAM HONGKONG &amp; CHINA<br><br></h3>
                                            <h4 class="card-title">Contact: Mr. Stephen So<br><br></h4>
                                            <p class="card-title"><br>Email: stephen@pamcargo.com&nbsp;<br>Office : (852) 21484210&nbsp;<br>Mobile : (852) 98819382&nbsp;<br>Skype : Stephen.so123&nbsp;<br>Web: www.pamcargo.com<br></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
</section>

<!-- FOOTER PHP -->
<?php $this->load->view('struktur/footer'); ?>