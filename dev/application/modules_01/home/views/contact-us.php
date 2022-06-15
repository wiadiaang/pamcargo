<?php $this->load->view('struktur/header'); ?>
<div class="jumbotron">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="text">
                    Contact Us
                </div>
            </div>
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
                    <form class="col-md-6">


                    </form>
                    <form class="col-md-6" id="form_contact" action="javascript:void(0)" method="POST">

                        <div class="row col-12">
                            <div class="col-6 mb-3">
                                <label for="exampleInputEmail1" class="form-label">First Name</label>
                                <input class="form-control" type="text" name="first_name" required
                                    placeholder="Enter here">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="exampleInputPassword1" class="form-label">Last Name</label>
                                <input class="form-control" type="text" name="last_name" required
                                    placeholder="Enter here">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">E-mail</label>
                            <input class="form-control" type="email" required placeholder="Enter here" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                            <input class="form-control" type="text" required placeholder="Enter here" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Your Message</label>
                            <textarea class="form-control" name="message" required
                                placeholder="Enter you message here"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- FOOTER PHP -->
<?php $this->load->view('struktur/footer'); ?>

<!-- <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script> -->
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