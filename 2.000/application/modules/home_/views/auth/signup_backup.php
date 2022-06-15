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
            <h1 style="color:#FFFFFF;">Daftarkan akun anda sekarang</h1>
            <p align="justify" style="color:#FFFFFF;">Kami memberikan kemudahan kepada anda untuk mengirim paket anda ke seluruh Indonesia, serta anda dapat melacak paket anda secara langsung.</p>
         </div>
         <div class="col-md-6">
            <div class="pb-contact">
               <img src="/express.rembon_components/images/boy_signup.png" alt="Parcelboy Contact Support">
            </div>
         </div>
      </section>
   </div>
   <section class="signup">
      <h2>Pendaftaran</h2>
      <div class="well">
<!-- 
<div class="row">
      <div class="col-md-6">
      
      <div class="panel">
            <div class="panel-body">
            <form class="form-horizontal" action="">
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                     <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
               </div>
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                     <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
               </div>
              <br>
               <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-default">Sign up</button>
                  </div>
               </div>
               </form>
         </div>
         </div>

      
      
      </div>
      <div class="col-md-6"></div>
</div>
     -->


         <form action="<?php echo base_url(); ?>signup/proses" method="post">
            <div class="col-md-4 form-col details">
               <div class="form-horizontal">
                  <div id="personal-details" class="form-horizontal">
                     <h4>Detail Company </h4>
                     <!-- <div class="form-group">
                        <label class="control-label col-md-4" for="PersonalDetails_Title"></label>
                        <div class="col-md-8">
                           <select class="form-control" style="width:100px"; id="PersonalDetails_Title" name="PersonalDetails.Title">
                              <option value="Mr">Tuan</option>
                              <option value="Ms">Ms</option>
                              <option value="Mrs">Bapak</option>
                              <option value="Other">Ibu</option>
                           </select>
                           <span class="field-validation-valid text-danger" data-valmsg-for="PersonalDetails.Title" data-valmsg-replace="true"></span>
                        </div>
                     </div> -->
                     <div class="form-group required">
                        <label class="control-label col-md-4" for="PersonalDetails_FirstName">Company Name</label>
                        <div class="col-md-8">
                           <input class="form-control text-box single-line" data-val="true" data-val-required="The First Name field is required." name="fname" required  type="text"  placeholder="Fullname" />
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
                     <div class="form-group hidden ">
                        <label class="control-label col-md-4" for="PersonalDetails_Surname">Nama Belakang</label>
                        <div class="col-md-8">
                           <input class="form-control text-box single-line" data-val="true" id="PersonalDetails_Surname" name="lname" type="text"  placeholder="Nama Belakang"  />
                           <span class="field-validation-valid text-danger" data-valmsg-for="PersonalDetails.Surname" data-valmsg-replace="true"></span>
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
                              <input onkeypress="return isnumeric(event)" class="form-control text-box single-line" data-val="true" data-val-regex="Please enter a valid telephone number." data-val-regex-pattern="^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$" data-val-requiredphone="Please enter a landline or a mobile number." data-val-requiredphone-alt="Mobile" data-val-requiredphone-condition="" id="PersonalContactDetails_Telephone" name="phone"  type="text" placeholder="0-9"  required/>
                              <span class="field-validation-valid text-danger" data-valmsg-for="PersonalContactDetails.Telephone" data-valmsg-replace="true"></span>
                           </div>
                        </div>
                        <!--<div class="form-group">
                           <label class="control-label col-md-4" for="PersonalContactDetails_Mobile">Company Name</label>
                           <div class="col-md-8">
                               <input class="form-control text-box single-line"  name="company" required  type="text"  placeholder="Name of the business" />
                               <span class="field-validation-valid text-danger"></span>
                           </div>
                           </div>-->
                        <div class="form-horizontal address-entry-element">
                           <div class="address-entry-address-fields ">
                              
                              <div class="form-group hidden">
                                 <label class="control-label col-md-3 col-xs-3" for="PersonalContactDetails_Address_Company">Provinsi</label>
                                 <div class="col-md-8 col-sm-8">
                                 <select  name ="prop" required  id ="prop" onchange="ajaxkota(this.value)" class="fa-glass booking_form_dropdown form-control" style="width:360px;">

                                          <option value="">Pilih Dari</option>
                                          <?php 
                                                foreach($provinsi as $row){
                                          ?>
                                                <option value="<?php echo $row->province_id; ?>"><?php echo $row->name; ?></option>
                                          <?php } ?>
                                          </select>
                                 </div>
                              </div>

                              <div class="form-group hidden">
                                 <label class="control-label col-md-3 col-xs-3" for="PersonalContactDetails_Address_Company">Kota/Kabupaten</label>
                                 <div class="col-md-8 col-sm-8">
                                    <select name="kota" class="form-control" id="kota" onchange="ajaxkec(this.value)">
                                       <option value="">Pilih Kota/kabupaten</option>
                                    </select>
                                 </div>
                              </div>

                              <div class="form-group hidden">
                                 <label class="control-label col-md-3 col-xs-3" for="PersonalContactDetails_Address_Company">Kecamatan</label>
                                 <div class="col-md-8 col-sm-8">
                                    <select name="kec" id="kec" class="form-control" onchange="ajaxkel(this.value)">
                                       <option value="">Pilih Kecamatan</option>
                                    </select>
                                 </div>
                              </div>

                              <div class="form-group hidden">
                                 <label class="control-label col-md-3 col-xs-3" for="PersonalContactDetails_Address_Company">Kelurahan</label>
                                 <div class="col-md-8 col-sm-8">
                                    <select name="kel" class="form-control" id="kel" onchange="showCoordinate();">
                                       <option value="">Pilih Kelurahan/Desa</option>
                                    </select>
                                 </div>
                              </div>
                              <input type='hidden' class="form-control" name="lat" id='lat' readonly>
                              <input type='hidden' class="form-control" name="lng" id='lng' readonly>
    									<div id="map-canvas"  style="display:none;"></div>
                                 
                             

                              <div class="form-group required hidden">
                                 <label class="control-label col-md-3 col-xs-3" for="PersonalContactDetails_Address_ThirdLine">Postal Code</label>
                                 <div class="col-md-8 col-sm-8">
                                    <input class="form-control address-entry-line3 text-box single-line" id="postal_code" name="postal_code" placeholder="0-9"/>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="PersonalContactDetails.Address.ThirdLine" data-valmsg-replace="true"></span>
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
                                    <input class="form-control address-entry-line3 text-box single-line"  name="name_pic" placeholder="No handphone"/>
                                    <span class="field-validation-valid text-danger"></span>
                                 </div>
                              </div>


                              <div class="form-group">
                                 <div class="col-md-12">
                                    <input type="submit" name="simpan" value="Daftar" class="btn btn-primary pull-right signup-btn" />
                                 </div>
                              </div>


                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 form-col hidden">
                  <div class="form-horizontal">
                     <div id="personall-account-details" class="form-horizontal ">
                        <h4>Detail Akun</h4>
                        <input id="PersonalAccountDetails_Currency" name="PersonalAccountDetails.Currency" type="hidden" value="GBP" />

                        <div class="form-group required hidden">
                           <label class="control-label col-md-5" for="PersonalAccountDetails_Password">Password</label>
                           <div class="col-md-7">
                              <input class="form-control text-box single-line password" data-val="true" data-val-regex="Password must be at least 6 characters (letters, numbers and basic punctuation)." data-val-regex-pattern="^[\u00c0-\u01ffa-zA-Z0-9&#39;-@%\+\\/!#\$\^\?:,\(\)\{\}\[\]~_]{6,30}$" data-val-required="The Password field is required." id="PersonalAccountDetails_Password" name="password" type="password" value="" placeholder="Password" />
                              <span class="field-validation-valid text-danger" data-valmsg-for="PersonalAccountDetails.Password" data-valmsg-replace="true"></span>
                           </div>
                        </div>
                        <div class="form-group required hidden">
                           <label class="control-label col-md-5" for="PersonalAccountDetails_ConfirmPassword">Ulangi Password</label>
                           <div class="col-md-7">
                              <input class="form-control text-box single-line password" data-val="true" data-val-equalto="The passwords do not match" data-val-equalto-other="*.Password" data-val-required="The Confirm Password field is required." id="PersonalAccountDetails_ConfirmPassword" name="rpassword" type="password" value="" required placeholder="Confirm Password" /> 
                              <span class="field-validation-valid text-danger" data-valmsg-for="PersonalAccountDetails.ConfirmPassword" data-valmsg-replace="true"></span>
                           </div>
                        </div>
                        <div class="form-group required hidden">
                           <label class="control-label col-md-5" for="">Select Admin PAM</label>
                           <div class="col-md-7">
                                  <select name="admin_id" class="form-control">
                                       <?php 
                                          foreach ($admin as $key) {
                                       ?>
                                       <option value="<?= $key->user_id;?>"><?= $key->firstname.' '.$key->lastname;?></option>
                                       <?php } ?>
                                  </select>
                           </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                           <div class="col-md-12 terms-check">
                              <p>Jika anda klik daftar maka anda setuju dengan <a href="page/terms-condition.php" target="_blank">Syarat & Ketentuan.</a></p>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-12">
                              <input type="submit" name="simpan" value="Daftar" class="btn btn-primary pull-right signup-btn" />
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