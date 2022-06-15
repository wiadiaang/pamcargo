<!-- <section class="footer" style="padding-top: 22px;min-height: 315px;margin-top: 0px;padding-bottom: 8px;">
    <div class="container">
        <div class="row footer-desc">
            <div class="col-md-3" style="padding-left: 31px;">
                <h5>Newsletter Subscribe</h5>
                <p class="footer-txt-desc">Subscribe to our newsletter and we will inform you about newest projects and
                    promotions.<br></p>

                    <form id="form-subscribe" action="javascript:void(0)" method="POST" >
                        <input type="email" class="footer-txt-desc area-email"name="email" required  placeholder="Enter your e-mail">
                        <button class="submit fill" type="submit" id="btn-subscribe" ><span>SUBMIT</span></button>
                    </form>
                  
            </div>
            <div class="col-md-3" style="padding-left: 40px;">
                <h5>Quick Link</h5>
                <hr style="width: 42px;padding-left: 127px;margin-left: 25px;">
                <ul class="footer-txt-3" style="padding-left: 0px;">
                    <li><a href="about-us">About Us</a></li>
                    <li><a href="services">Services</a></li>
                    <li><a href="contact-us">Contact Us</a></li> 
                </ul>
            </div>
            <div class="col-md-3" style="padding-left: 40px;">
                <h5>Services</h5>
                <hr style="width: 42px;padding-left: 127px;margin-left: 25px;">
                <ul style="padding-left: 0px;">
                    <li><a href="sea-air-service">Sea Air Services</a></li>
                    <li><a href="sea-freight-service">Sea Freght Services</a></li>
                    <li><a href="air-freight-service">Air Freight Services</a></li>
                    <li><a href="ad-hoc-charter-service">Ad Hoc Charter Services</a></li>
                    <li><a href="road-transport">Road Transport</a></li>
                    <li><a href="custom-clearance">Custom Cleareance</a></li>
                    <li><a href="warehousing">Warehousing</a></li>
                </ul>
            </div>
            <div class="col-md-3" style="padding-left: 40px;">
                <h5>Contact Us</h5>
                <hr style="width: 42px;padding-left: 127px;margin-left: 25px;">
                <p class="footer-txt-desc" style="padding-left: 0;padding-right: 0px;margin-bottom: 10px;">P.O. Box -
                    117993,&nbsp;<br>206, Lootah HO, Marakkech St.,<br>Umm Ramool, Dubai - U.A.E.<br>Tel: +971 4 285
                    2520<br>Fax: +971 4 286 8770<br><a href="mailto:">info@pamcargo.com</a>&nbsp;<br><a
                        href="https://pamcargo.com/">www.pamcargo.com</a>&nbsp;<br></p>
                
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer-end" style="margin-top: -1px;padding-bottom: -9px;">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p class="copyright" style="font-family: 'Alegreya Sans', sans-serif;font-size: 13px;">Copyright By
                    Rembon
                    Karya Digital</p>
            </div>
        </div>
    </div>
</section>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    
    <script>
    
    $('#form-subscribe').submit('submit',function(){
        $.ajax({
            url:"<?= base_url('home/send_subscribe') ?>",
            type:"POST",
            data:$('#form-subscribe').serialize(),
            beforeSend:function(){
                $('#btn-subscribe').attr('disabled','');
                $('#btn-subscribe').text('Please wait ...');
            },
            success:function(){
                Swal.fire(
                    'Thank You For Subscribe!',
                    'You Have Been Subscribe',
                    'success'
                    )
                $('#form-subscribe')[0].reset();
                $('#btn-subscribe').removeAttr('disabled','');
                $('#btn-subscribe').text('SUBMIT');
            },

        });
    });

    </script>

    
<script>

$("#track").on("click",function(){
    alert("Under Maintenance");
});
</script> -->


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
                <div class="text">PAM CARGO Int'l Freight - 2021 All Rights Reserved.</div>
              </div>
            </div>
          </div>
      </footer>

</body>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/layouts2');?>/script.js"></script>
</html>
<script>

$('#form-subscribe').submit('submit',function(){
        $.ajax({
            url:"<?= base_url('home/send_subscribe') ?>",
            type:"POST",
            data:$('#form-subscribe').serialize(),
            beforeSend:function(){
                $('#btn-subscribe').attr('disabled','');
                $('#btn-subscribe').text('Please wait ...');
            },
            success:function(){
                Swal.fire(
                    'Thank You For Subscribe!',
                    'You Have Been Subscribe',
                    'success'
                    )
                $('#form-subscribe')[0].reset();
                $('#btn-subscribe').removeAttr('disabled','');
                $('#btn-subscribe').text('SUBMIT');
            },

        });
    });


</script>
<style>

    .nav-cs{
        color:white;
    }
    .row{
        width:100%;
    }
</style>