<!DOCTYPE html>
<html>

<!-- HEAD PHP -->
<?php $this->load->view('struktur/header');?>


<body>

<!-- navbar PHP -->
<?php $this->load->view('struktur/navbar');?>


    <div class="container-fluid header-contact-us" style="padding: 0;">
        <div class="no-results" style="height: 300px;">
            <div class="vertical-align">
                <h1>We would love to hear from you !</h1>
            </div>
        </div>
    </div>
    <section class="body-item-contact" style="padding-bottom: 20px;">
        <div class="container">
            <div class="box-long" style="padding: 60px 20px 50px 20px;margin-bottom: 0;margin-top: 0;">
                <div class="row contact-us-title">
                    <div class="col">
                        <h1>Contact Us</h1>
                    </div>
                </div>
                <div class="row contact-us-items">
                    <div class="col">
                        <form id="form_contact" action="javascript:void(0)" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6 form-group-content" style="padding-left: 30px; padding-right: 30px;"><label>First Name</label>
                                    <input class="form-control" type="text" name="first_name" required placeholder="Enter here">
                                </div>
                                <div class="form-group col-md-6" style="color: rgb(255,255,255);font-size: 23px;padding-left: 30px;padding-right: 30px;"><label>Last Name</label>
                                <input class="form-control" type="text" name="last_name" required placeholder="Enter here">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6" style="color: rgb(255,255,255);font-size: 23px;padding-left: 30px;padding-right: 30px;"><label>E-mail</label>
                                <input class="form-control" type="text" required placeholder="Enter here" name="email">
                                </div>
                                <div class="form-group col-md-6" style="color: rgb(255,255,255);font-size: 23px;padding-left: 30px;padding-right: 30px;"><label>Phone Number</label>
                                <input class="form-control" type="text" required placeholder="Enter here" name="phone">
                                </div>
                            </div>
                            <div class="form-row" style="padding: 0px 30px;height: 165px;margin-top: 0;"><label style="color: rgb(255,255,255);font-size: 23px;margin-bottom: -45px;">Your Message</label>
                            <textarea class="form-control" name="message" required placeholder="Enter you message here"></textarea>
                            </div>
                            <div class="form-row" style="padding: 0px 25px;">
                                <div class="col">
                                <button type="submit" class="contact-us" id="btn-contact" ><span class="contact-name">Submit</span></button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     <!-- FOOTER PHP -->
<?php $this->load->view('struktur/footer');?>

    <!-- <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script> -->
    <script>
    
    $('#form_contact').submit('submit',function(){
        $.ajax({
            url:"<?= base_url('home/send_message') ?>",
            type:"POST",
            data:$('#form_contact').serialize(),
            beforeSend:function(){
                $('#btn-contact').attr('disabled','');
                $('#btn-contact').text('Please wait ...');
            },
            success:function(){
                Swal.fire(
                    'Thank You For Contact Us',
                    'We will contact you soon',
                    'success'
                    )
                $('#form_contact')[0].reset();
                $('#btn-contact').removeAttr('disabled','');
                $('#btn-contact').text('SUBMIT');
            },

        });
    });
    </script>
</body>

</html>