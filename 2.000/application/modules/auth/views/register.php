<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register PAM CARGO</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.14.0/dist/sweetalert2.all.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
            
        <style>
        @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
        .login-block{
            background: #DE6262;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        float:left;
        width:100%;
        padding : 50px 0;
        }
        .banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:600px; border-radius: 0 10px 10px 0; padding:0;}
        .container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
        .carousel-inner{border-radius:0 10px 10px 0;}
        .carousel-caption{text-align:left; left:5%;}
        .login-sec{padding: 50px 30px; position:relative;}
        .login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
        .login-sec .copy-text i{color:#FEB58A;}
        .login-sec .copy-text a{color:#E36262;}
        .login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
        .login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
        .btn-login{background: #DE6262; color:#fff; font-weight:600;}
        .banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
        .banner-text h2{color:#fff; font-weight:600;}
        .banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
        .banner-text p{color:#fff;}
        </style>

    </head>
<body>
  
<?= $this->session->flashdata('info') ?>

<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Register Now</h2>
          <form class="login-form" action="javascript:void(0)" id="form_signup" method="post" />
            <div class="form-group">
                <label  class="">Company Name</label>
                <input type="text" class="form-control" placeholder="Company Name" name="name_pt" required="">
            </div>
            <div class="form-group">
                <label  class="">Select PAM Country</label>
                <select name="country" id="country" class="form-control" required="">

                </select>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="">Email</label>
                        <input type="email" class="form-control" placeholder="email" name="email" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <label class="">Phone Office</label>
                        <input type="text" class="form-control" placeholder="Phone Office" name="phone_office" required="">
                    </div>

                </div>
            </div>
            
            <div class="form-group">
                <label  class="">Address</label>
                <textarea name="address" class="form-control" placeholder="Address" id="" cols="10" rows="2"></textarea>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label  class="">Your Name</label>
                        <input type="text" class="form-control" placeholder="Your Name" name="name_pic" required="">
                    </div>
                </div>
                <div class="col-md-6">

                <div class="form-group">
                    <label  class="">Your Phone</label>
                    <input type="text" class="form-control" placeholder="Your Phone" name="phone_pic" required="">
                </div>
            </div>
            </div>

    <button type="submit" class="btn btn-login float-right" id="signup">Sign Up</button>
  
</form> 
<div class="copy-text">  If you have already account <a href="https://express.rembon.co.id/auth">Sign in</a> now</div>
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is Heaven</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        </div>	
    </div>
  </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>
<script>
      $.ajax({
         url:"<?= base_url('home/auth/get_country');?>",
         type:"POST",
         // dataType:"JSON",
         success:function(data){
            $("#country").html(data);
         },
      });
      $('#form_signup').on('submit',function(){
          $.ajax({
              url:"<?= base_url('auth/auth/signup')?>",
              type:"POST",
              data:$('#form_signup').serialize(),
              beforeSend:function(){
                $('#signup').text('Sign Up ...');
              },
              success:function(data){
                if(data = "success"){
                    Swal.fire({
                        title: 'Congratulation',
                        text: "Check email periodically to get password from admin",
                        type: 'warning',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6'
                        }).then((result) => {
                        if (result.value) {
                            Swal.fire({
                                type: 'success',
                                title: 'Your account has been registered',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            window.location.href='https://express.rembon.co.id/auth';
                        }
                        })
                }
              },
          });
      });
</script>

