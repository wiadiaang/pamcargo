<script type="application/javascript">
   function isnumeric(evt)
      {
       	var charCode = (evt.which) ? evt.which : event.keyCode
          if (charCode != 46 && charCode > 31
           && (charCode < 48 || charCode > 57))
           return false;
   
           return true;
      }
   
</script>
<main class="slide">
   <div class="fw grey-gradient-bg" style="background:url(/express.rembon_components/images/compare_bg.jpg);">
      <section style="margin-top:30px;">
         <div class="col-md-6">
            <h1 style="color:black;">Daftarkan akun anda sekarang</h1>
            <p align="justify" style="color:black;">Kami memberikan kemudahan kepada anda untuk mengirim paket anda ke seluruh Indonesia, serta anda dapat melacak paket anda secara langsung.</p>
         </div>
         <div class="col-md-6">
            <div class="pb-contact">
               <img src="/express.rembon_components/images/boy_signup.png" alt="Parcelboy Contact Support">
            </div>
         </div>
      </section>
   </div>
   <section class="signup">
      <h2>Signup</h2>
      <div class="well">


         <form action="<?php echo base_url(); ?>signup/proses" method="post">
            <div class="col-md-4 form-col details">
               <div class="form-horizontal">
                  <div id="personal-details" class="form-horizontal">
                     <h4>Detail Company </h4>
                   
                     <div class="form-group required">
                        <label class="control-label col-md-4" for="PersonalDetails_FirstName">Company Name</label>
                        <div class="col-md-8">
                           <input class="form-control text-box single-line" data-val="true" data-val-required="The First Name field is required." name='name_pt' required  type="text"  placeholder="Fullname" />
                           <span class="field-validation-valid text-danger" data-valmsg-for="PersonalDetails.FirstName" data-valmsg-replace="true"></span>
                        </div>
                     </div>
                     <div class="form-group required">
                        <label class="control-label col-md-4" for="PersonalContactDetails_Address_Company">Address</label>
                        <div class="col-md-8 col-sm-8">
                           <textarea class="form-control" name='address' placeholder="Address" required></textarea>
                           <span class="field-validation-valid text-danger" data-valmsg-for="PersonalContactDetails.Address.Company" data-valmsg-replace="true"></span>
                        </div>
                     </div>
                     <div class="form-group required">
                        <label class="control-label  col-md-4" for="PersonalContactDetails_Address_ThirdLine">Country </label>
                           <div class="col-md-8 col-sm-8">
                           <select name="country" id="country" class="form-control">
                                 
                           </select>
                           </div>
                     </div>
                    
                    
                  </div>
               </div>
            </div>
            <div class="email-not-in-use">
               <div class="col-md-4 form-col">
                  <div class="form-horizontal">
                     <div id="personal-contact-details" class="form-horizontal simple-address">
                        <h4>Contact </h4>

                        <div class="form-group required">
                           <label class="control-label col-md-4" for="PersonalDetails_Email">Email</label>
                           <div class="col-md-8">
                              <input class="form-control text-box single-line" data-val="true" data-val-email="The Email field is not a valid e-mail address." data-val-required="The Email field is required." id="PersonalDetails_Email" name="email" id="email" required  type="email" placeholder="nama@domain.com" />
                              <span class="field-validation-valid text-danger" data-valmsg-for="PersonalDetails.Email" data-valmsg-replace="true"></span>
                           </div>
                        </div>

                        <div class="form-group required">
                           <label class="control-label col-md-4" for="PersonalContactDetails_Telephone">Telephone Office</label>
                           <div class="col-md-8">
                              <input onkeypress="return isnumeric(event)" class="form-control text-box single-line" data-val="true" data-val-regex="Please enter a valid telephone number." data-val-regex-pattern="^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$" data-val-requiredphone="Please enter a landline or a mobile number." data-val-requiredphone-alt="Mobile" data-val-requiredphone-condition="" id="PersonalContactDetails_Telephone" name="phone_office"  type="text" placeholder="0-9"  required/>
                              <span class="field-validation-valid text-danger" data-valmsg-for="PersonalContactDetails.Telephone" data-valmsg-replace="true"></span>
                           </div>
                        </div>
                        
                           
                              
                              <div class="form-group required ">
                                 <label class="control-label col-md-3 col-xs-3" >Name pic</label>
                                 <div class="col-md-8 col-sm-8">
                                    <input class="form-control address-entry-line3 text-box single-line"  name="name_pic" placeholder="Name"/>
                                    <span class="field-validation-valid text-danger"></span>
                                 </div>
                              </div>
                              <div class="form-group required ">
                                 <label class="control-label col-md-3 col-xs-3" >Handphone pic</label>
                                 <div class="col-md-8 col-sm-8">
                                    <input class="form-control address-entry-line3 text-box single-line" name="phone_pic" placeholder="No handphone"/>
                                    <span class="field-validation-valid text-danger"></span>
                                 </div>
                              </div>


                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 form-col ">
                  <div class="form-horizontal">
                     <div id="personall-account-details" class="form-horizontal ">
                        <!-- <h4>Detail Akun</h4> -->

                        <div class="form-group">
                           <div class="col-md-12 terms-check">
                              <p>If you click register, you agree with <a href="page/terms-condition.php" target="_blank">Terms and Conditions.</a></p>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-12">
                              <input type="submit" name="simpan" value="Register" class="btn btn-primary pull-right signup-btn" />
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
         <div class="clearfix"></div>
      </div>
   </section>
</main>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAWE8BwPOPM7rjec74EZ1E1OjEqT25HQJk"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>daerah/ajax_daerah.js"></script>

   <script>
      $.ajax({
         url:"<?= base_url('home/auth/get_country');?>",
         type:"POST",
         // dataType:"JSON",
         success:function(data){
            $("#country").html(data);
         },
      });
</script>