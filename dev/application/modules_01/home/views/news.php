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
                    PAMCARGO NEWS
                </div>
            </div>
        </div>
    </div>
</div>



<section class="sec-3">
    <div class="container">

        <div class="row part-2 ">
            <?php foreach ($data as $key) { ?>
            <div class="col-md-4 xs mb-5 hov">
                <img src="<?= base_url('assets/dash/files/news/' . $key->image_thumbnail) ?>" alt="">
                <!-- <div class="gold"><img src="<?= base_url('assets/layouts2'); ?>/img/gold.png" alt=""></div> -->
                <div class="title"><?= $key->title; ?></div>
                <?php
                    $myDateTime = DateTime::createFromFormat('Y-m-d', $key->create_date);
                    // $newdate = $myDateTime->format('d-m-Y');
                    ?>
                <p><?= $myDateTime ?></p>
                <div class="desc"><?= substr($key->caption_thumbnail, 0, 100) . '..'; ?></div>
                <a href="<?= base_url($key->url); ?>" class="cta-btn">READ MORE</a>
            </div>

            <?php } ?>

        </div>
    </div>
</section>


<br>
<br>
<br>

</div>


<!-- FOOTER PHP -->
<?php $this->load->view('struktur/footer'); ?>
<!-- 
<style>
.card-body .text-muted {
    position: absolute;
    bottom: 4%;
}
</style>





  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/coming-soon.js"></script>
  <script src="assets/js/coming-soon.min.js"></script> 
<script>
$('#recipeCarousel').carousel({
    interval: 4000
})

$('.bot .carousel-item').each(function() {
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

$(document).ready(function() {
    $(".chr-1").hover(function() {
        $("#rm-1").css("color", "green");
    }, function() {
        $("#rm-1").css("color", "black");
    });

    $(".chr-2").hover(function() {
        $("#rm-2").css("color", "green");
    }, function() {
        $("#rm-2").css("color", "black");
    });

    $(".chr-3").hover(function() {
        $("#rm-3").css("color", "green");
    }, function() {
        $("#rm-3").css("color", "black");
    });

    $(".chr-4").hover(function() {
        $("#rm-4").css("color", "green");
    }, function() {
        $("#rm-4").css("color", "black");
    });

    $(".chr-5").hover(function() {
        $("#rm-5").css("color", "green");
    }, function() {
        $("#rm-5").css("color", "black");
    });

    $(".chr-6").hover(function() {
        $("#rm-6").css("color", "green");
    }, function() {
        $("#rm-6").css("color", "black");
    });

});
</script> -->