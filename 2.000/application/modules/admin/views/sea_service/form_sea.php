
    <link rel="stylesheet" href="<?= base_url();?>forms/normal.css"/>
    <link rel="stylesheet" href="<?= base_url();?>forms/binForm.css"/>

    <div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-head">
            <div class="page-title">
                <h1><?php echo $page; ?></h1>
            </div>
            <div class="page-toolbar">
            </div>
        </div>
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="<?php echo base_url();?>admin/Dashboard"><?php echo $this->lang->line('home'); ?></a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active"><?php echo $page; ?></span>
            </li>
        </ul>
        <div class="row">

            <section id="binForm">

                <div class="content">

                    <h3>SEA SERVICE</h3>

                    <form action="" method="POST">

                        <div class="block two">

                            <div class="group">

                                <div class="obj two">

                                    <label>Shipper</label>
                                    <input type="text" name="shipper" spellcheck="false" placeholder="Shipper" required/>

                                </div>

                                <div class="obj two">

                                    <label>Consignee</label>
                                    <input type="text" name="consignee" spellcheck="false" placeholder="Consignee" required/>

                                </div>

                                <div class="obj">

                                    <label>Notify Party</label>
                                    <textarea name="notifyParty" spellcheck="false" placeholder="Notify Party"></textarea>

                                </div>

                                <div class="obj two">

                                    <label>Vessel</label>
                                    <input type="text" name="vessel" spellcheck="false" placeholder="Vessel" required/>

                                </div>

                                <div class="obj two">

                                    <label>Voyage No.</label>
                                    <input type="text" name="voyage" spellcheck="false" placeholder="Voyage No." required/>

                                </div>

                                <div class="obj two">

                                    <label>Port of Loading</label>
                                    <input type="text" name="portOfLoading" spellcheck="false" placeholder="Port of Loading" required/>

                                </div>

                                <div class="obj two">

                                    <label>Place of Receipt</label>
                                    <input type="text" name="placeOfReceipt" spellcheck="false" placeholder="Place of Receipt" required/>

                                </div>

                                <div class="obj two">

                                    <label>Port of Discharge</label>
                                    <input type="text" name="portOfDischarge" spellcheck="false" placeholder="Place of Discharge" required/>

                                </div>

                                <div class="obj two">

                                    <label>Place of Delivery</label>
                                    <input type="text" name="placeOfDelivery" spellcheck="false" placeholder="Place of Delivery" required/>

                                </div>

                            </div>

                        </div>

                        <div class="block two" style="margin-left: 10px">

                            <div class="seaPart">

                                <img src="<?= base_url('forms/')?>logo.png"/>
                                <span class="logoTitle">PT. PAM TRANSPOR INDONESIA</span>
                                <div class="description">

                                    <span>JURISDICTION AND LAW CLAUSE</span>
                                    "The contract evidenced by or contained in this bill of lading is governed the law of Vietnam and any claim or dispute arising hereunder or connection herewith shall be determined by the Courts in Ho Chi Minh Vietnam and no other Courts."

                                </div>

                                <div class="obj">

                                    <span class="label-left">B/L No.</span>
                                    <input type="text" name="blNo" class="with-label-left" spellcheck="false" placeholder="Bill of Lading" required/>

                                </div>

                            </div>

                        </div>

                        <div class="block one">

                            <div class="group">

                                <table>

                                    <thead>

                                        <tr>
                                            
                                            <th>Marks And Numbers</th>
                                            <th>No. of Packages</th>
                                            <th>Description of Goods</th>
                                            <th>Gross Weight</th>
                                            <th>Measurement</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr class="highTd">

                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>

                                        <tr>
                                            
                                            <td colspan="5" style="font: 600 20px/1 'Poppins'">ORIGINAL</td>

                                        </tr>

                                        <tr>

                                            <td colspan="5" style="text-transform: uppercase">According To The Declaration of the Consignor</td>

                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                            <div class="group">

                                <span class="desc">Received by the Carrier the Goods as specified above in apparent good order and condition unless otherwise stated, to be transported to such place as agreed, authorised or permitted herein and subject to all the terms and conditions appearing on the front and reverse of this Bill of Lading to which the Merchant agrees by accepting this Bill of Lading, any local privileges and customs notwithstanding.<br/>

                                The particulars given above as stated by the shipper and the weight, measure, quality, condition, content and value of the Goods are unknown to the Carrier. In WITNESS whereof in (1) original Bill of Lading has benn signed if not otherwise stated above, the same being accomplished the other(s), if any, to be void, if required by the Carrier one (1) original Bill of Lading must be surrendered duty endorsed in exchange for the Goods or delivered order.</span>

                            </div>

                            <div class="group">

                                <div class="obj three">

                                    <label>Freight Payable AT</label>
                                    <input type="text" name="payAble" spellcheck="false" placeholder="Freight Payable AT" required/>

                                </div>

                                <div class="obj three">

                                    <label>Number of Original BL'S</label>
                                    <input type="text" name="originalBL" spellcheck="false" placeholder="Number of Original BL's" required/>

                                </div>

                                <div class="obj three">

                                    <label>Place and Date of Issue</label>
                                    <input type="text" name="placeAndDate" spellcheck="false" placeholder="Place and Date of Issue" required/>

                                </div>

                                <div class="obj two">

                                    <label>Cargo Insurance throught the undersigned</label>

                                    <input id="dovered" type="radio" name="cargoInsurance" value="dovered" required/>
                                    <label for="dovered" class="radio two">Not Dovererd</label>

                                    <input id="covered" type="radio" name="cargoInsurance" value="covered" required/>
                                    <label for="covered" class="radio two">Covered according to attached Policy</label>

                                </div>

                                <div class="obj two">

                                    <label>Date Laden on Board</label>
                                    <input type="text" name="dateLaden" spellcheck="false" placeholder="Date Laden on Board" required/>

                                </div>

                                <div class="obj three">

                                    <label>Freight Amount</label>
                                    <span class="label-left">Rp</span>
                                    <input type="text" name="freightAmount" class="with-label-left" spellcheck="false" placeholder="Freight Amount" required/>

                                </div>

                                <div class="obj three">

                                    <label>For Delivery of Goods Please Apply To</label>
                                    <input type="text" name="deliveryApply" spellcheck="false" placeholder="For Delivery of Goods Please Apply To" required/>

                                </div>

                                <div class="obj three">

                                    <label></label>
                                    <button type="submit" style="height: 36px">Submit</button>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>

                </section>


      </div>
    </div>
</div>

<script>

	$('#sea').addClass('active');						
    $("#form_booking").on("submit",function(){
        $.ajax({
            url:"<?= base_url('admin/Booking/prosess_booking');?>",
            type:"POST",
            data:$("#form_booking").serialize(),
            success:function(data){
                if(data == "1"){
                    Swal.fire({
                            type: 'success',
                            title: 'Your data has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    window.location.href = 'https://express.rembon.co.id/admin/Booking';
                       
                }
            },
        });
    });

    <?php if($master_id != ''){ ?>
            $.ajax({
                url:"<?= base_url('admin/Booking/get_vendor');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
                success:function(data){
                    $("input[name='nameVendor']").val(data.name);
                    $("input[name='title']").val(data.gender);
                    $("input[name='contact']").val(data.contact);
                },
            });

            $.ajax({
                url:"<?= base_url('admin/Booking/get_shipper');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
                success:function(data){
                    $("input[name='nameShipper']").val(data.name);
                    $("#streetShipper").val(data.street);
                    $("input[name='cityShipper']").val(data.city);
                    $("input[name='zipCodeShipper']").val(data.zip_code);
                    $("input[name='countryShipper']").val(data.country);
                    $("input[name='emailShipper']").val(data.email);
                    $("input[name='nameContact1Shipper']").val(data.contact1);
                    $("input[name='nameContact2Shipper']").val(data.contact2);
                    $("input[name='phoneShipper']").val(data.phone);

                },
            });

            $.ajax({
                url:"<?= base_url('admin/Booking/get_pickup');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
                success:function(data){
                    $("input[name='namePick']").val(data.name);
                    $("#streePick").val(data.street);
                    $("input[name='cityPick']").val(data.city);
                    $("input[name='zipCodePick']").val(data.zip_code);
                    $("input[name='countryPick']").val(data.country);
                    $("input[name='emailPick']").val(data.email);
                    $("input[name='nameContact1Pick']").val(data.contact1);
                    $("input[name='nameContact2Pick']").val(data.contact2);
                    $("input[name='phonePick']").val(data.phone);

                },
            });

            $.ajax({
                url:"<?= base_url('admin/Booking/get_consignee');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
                success:function(data){
                    $("input[name='nameCons']").val(data.name);
                    $("#streetCons").val(data.street);
                    $("input[name='cityCons']").val(data.city);
                    $("input[name='zipCodeCons']").val(data.zip_code);
                    $("input[name='countryCons']").val(data.country);
                    $("input[name='emailCons']").val(data.email);
                    $("input[name='nameContact1Cons']").val(data.contact1);
                    $("input[name='nameContact2Cons']").val(data.contact2);
                    $("input[name='phoneCons']").val(data.phone);
                },
            });
            $.ajax({
                url:"<?= base_url('admin/Booking/get_delivery');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
                success:function(data){
                    $("input[name='nameDel']").val(data.name);
                    $("#streetDel").val(data.street);
                    $("input[name='cityDel']").val(data.city);
                    $("input[name='zipCodeDel']").val(data.zip_code);
                    $("input[name='countryDel']").val(data.country);
                    $("input[name='emailDel']").val(data.email);
                    $("input[name='nameContact1Del']").val(data.contact1);
                    $("input[name='nameContact2Del']").val(data.contact2);
                    $("input[name='phoneDel']").val(data.phone);
                                        
                },
            });
            $.ajax({
                url:"<?= base_url('admin/Booking/get_notify');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
                success:function(data){
                    $("input[name='nameNot']").val(data.name);
                    $("#streetNot").val(data.street);
                    $("input[name='cityNot']").val(data.city);
                    $("input[name='zipCodeNot']").val(data.zip_code);
                    $("input[name='countryNot']").val(data.country);
                    $("input[name='emailNot']").val(data.email);
                    $("input[name='nameContact1Not']").val(data.contact1);
                    $("input[name='nameContact2Not']").val(data.contact2);
                    $("input[name='phoneNot']").val(data.phone);
    
                },
            });
            $.ajax({
                url:"<?= base_url('admin/Booking/get_transport');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
                success:function(data){
                    $("#t"+data.name).attr('checked','');
                },
            });
            $.ajax({
                url:"<?= base_url('admin/Booking/get_shipper_vendor');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
                success:function(data){
                    $("input[name='toSV']").val(data.to);
                    $("input[name='copySV']").val(data.copy1);
                    $("input[name='copy2SV']").val(data.copy2);
                },
            });
            $.ajax({
                url:"<?= base_url('admin/Booking/get_ordering_customer');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
                success:function(data){
                    $("input[name='nameOC']").val(data.name);
                    $("#streetOC").val(data.street);
                    $("input[name='cityOC']").val(data.city);
                    $("input[name='zipCodeOC']").val(data.zip_code);
                    $("input[name='countryOC']").val(data.country);
                    $("input[name='emailOC']").val(data.email);
                    $("input[name='nameContactOC']").val(data.contact);

                },
            });
            $.ajax({
                url:"<?= base_url('admin/Booking/get_shipping_terms');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
                success:function(data){
                    $("input[name='inco']").val(data.inco_terms_for_shipping);
                    $("input[name='fobCharges']").val(data.fob_charges);
                    $("input[name='oaCharges']").val(data.ocean_airfreight_charges);
                    $("input[name='destinationCharges']").val(data.destination_charges);
                    $("input[name='dutiesTaxes']").val(data.import_duties_taxes);
                },
            });
            $.ajax({
                url:"<?= base_url('admin/Booking/get_transport_details');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
                success:function(data){
                    $("input[name='shippingReference']").val(data.shipping_reference);
                    $("input[name='partOfLoading']").val(data.airport_part_of_loading);
                    $("input[name='seaAirTransit']").val(data.sea_air_transit_port);
                    $("input[name='portOfDischarges']").val(data.airport_port_of_discharges);
                    $("input[name='placeOfCargo']").val(data.place_of_cargo_hand_over);
                    $("input[name='pickUp']").val(data.request_hand_over_date);
                    $("input[name='pickup2']").val(data.from);
                    $("input[name='pickup3']").val(data.to);
                },
            });
            $.ajax({
                url:"<?= base_url('admin/Booking/get_shipping_documents');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
                success:function(data){
                    $("input[name='shipRequires']").val(data.shipping_requires);
                    $("input[name='issueCommercial']").val(data.shpr_isu_commerical_invoice);
                    $("input[name='issuePacking']").val(data.shpr_isu_packing_list);
                    $("input[name='issueCertificate']").val(data.shpr_isu_certificate_origin);
                    $("input[name='issueSpecify']").val(data.shpr_isu_specify);
                    $("input[name='issueSpecify2']").val(data.shpr_isu_specify2);

                },
            });



    <?php } ?>

</script>