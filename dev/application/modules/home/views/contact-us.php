
<?php $this->load->view('struktur/header');?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<div class="bradcam_area" style="background-image: url(./assets/v.2/img/header-pamcargo/contact.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="bradcam_text text-center">
                                    <!-- <h3>Contact Us</h3> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <section class="contact-section">
            <div class="container">
              
    
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Contact Us</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" id="form_contact" action="javascript:void(0)" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"placeholder=" message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="first_name" id="name" type="text" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="last_name" id="name" type="text" placeholder="last name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="phone" id="phone" type="number"  placeholder="Phone">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>PAM INTERNATIONAL CARGO (LLC)</h3>
                                <p>P.O. Box - 117993, <br>206, Lootah HO, Marakkech St.,<br>
Umm Ramool, Dubai - U.A.E.</p> 
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+971 4 285 2520</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>info@pamcargo.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php $this->load->view('struktur/footer');?>

    <script>
$('#form_contact').submit('submit', function() {
    $.ajax({
        url: "<?= base_url('home/send_message') ?>",
        type: "POST",
        data: $('#form_contact').serialize(),
        beforeSend: function() {
            $('#btn-contact').attr('disabled', '');
            $('#btn-contact').text('Please wait ...');
        },
        success: function() {
            Swal.fire(
                'Thank You For Contact Us',
                'We will contact you soon',
                'success'
            )
            $('#form_contact')[0].reset();
            $('#btn-contact').removeAttr('disabled', '');
            $('#btn-contact').text('SUBMIT');
        },

    });
});
</script>