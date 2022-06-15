<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<main class="slide">
   <div class="fw grey-gradient-bg" style="background:url(/express.rembon_components/images/compare_bg.jpg);">
      <section style="margin-top:30px;">
         <div class="col-md-6">
            <h1 style="color:black;">Masuk ke Akun Anda</h1>
            <p align="justify" style="color:black;">Kami ingin membantu Anda untuk menjadwalkan pengiriman barang Anda ke seluruh daerah di Indonesia. Anda dapat melacak keberadaan barang Anda dengan detail. Jika Anda membutuhkan bantuan, segera hubungi kami.</p>
         </div>
         <div class="col-md-6">
            <div class="pb-contact">
               <img src="/express.rembon_components/images/boy_signup.png" alt="Parcelboy Contact Support">
            </div>
         </div>
      </section>
   </div>

   <section class="login">
      <div class="col-xs-12 cf fl col-sm-6 col-md-6 login-col">
      <div class="login-form">
         <form action="/examples/actions/confirmation.php" method="post">
            <h2 class="text-center">Sign in</h2>   
            <div class="form-group">
               <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-user"></i></span>
                     <input type="text" class="form-control" name="username" placeholder="Username" required="required">				
                  </div>
            </div>
            <div class="form-group">
                  <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                     <input type="password" class="form-control" name="password" placeholder="Password" required="required">				
                  </div>
            </div>        
            <div class="form-group">
                  <button type="submit" class="btn btn-primary login-btn btn-block">Sign in</button>
            </div>
            <div class="clearfix">
                  <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                  <a href="#" class="pull-right">Forgot Password?</a>
            </div>
            
         </form>
         <p class="text-center text-muted small">Don't have an account? <a href="#">Sign up here!</a></p>
      </div>
      </div>

   </section>
   <style type="text/css">
	.login-form {
		width: 385px;
		margin: 30px auto;
	}
    .login-form form {        
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .login-btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .input-group-addon .fa {
        font-size: 18px;
    }
    .login-btn {
        font-size: 15px;
        font-weight: bold;
    }
	.social-btn .btn {
		border: none;
        margin: 10px 3px 0;
        opacity: 1;
	}
    .social-btn .btn:hover {
        opacity: 0.9;
    }
	.social-btn .btn-primary {
        background: #507cc0;
    }
	.social-btn .btn-info {
		background: #64ccf1;
	}
	.social-btn .btn-danger {
		background: #df4930;
	}
    .or-seperator {
        margin-top: 20px;
        text-align: center;
        border-top: 1px solid #ccc;
    }
    .or-seperator i {
        padding: 0 10px;
        background: #f7f7f7;
        position: relative;
        top: -11px;
        z-index: 1;
    }   
</style>
   <!-- <section class="login">
      <div class="col-xs-12 cf fl col-sm-6 col-md-6 login-col">
         <h2>Masuk</h2>
         <div class="col-md-12 well">
            <form class="form-horizontal templatemo-signin-form" action="<?php echo base_url(); ?>login/proses" role="form" name="form1" autocomplete="off" method="post" />
            <div class="form-horizontal">
               <div class="panel-heading">
                  <div class="form-group">
                     <div class="col-sm-16">
                     </div>
                     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-md-offset-1" for="Email">Email</label>
                        <div class="col-md-8">
                           <input class="form-control text-box single-line" data-val="true" data-val-required="Please enter an email" name="email"id="txtusername" type="email" value="" />
                           <span class="field-validation-valid text-danger" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-md-offset-1" for="Password">Password</label>
                        <div class="col-md-8">
                           <input class="form-control text-box single-line password" data-val="true" data-val-required="Please enter a password" name="password" id="txtpassword" type="password" value="" />
                           <span class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-10 col-md-offset-1 form-inline">
                           <a href="forgot-password">Lupa Kata Sandi</a>
                           <input type="submit" value="Masuk" class="btn btn-primary pull-right" /> <br /><br />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xs-12 fl col-sm-6 col-md-6 signup-col">
         <h2>Daftar</h2>
         <div class="col-md-12 well cf">
            <div class="col-md-12">
               <p>Belum punya akun? Silahkan daftarkan akun anda sekarang juga.</p>
               <a href='signup' class="btn btn-primary pull-right" role="button">
               Daftar
               </a>
            </div>
         </div>
      </div>
   </section> -->
   <div class="clearfix"></div>
</main>