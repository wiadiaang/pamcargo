
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

                <h3>SEA - AIR SERVICE</h3>

                <form action="" method="POST">

                    <div class="block two">

                        <div class="group">

                            <span class="tagline">Shipper</span>

                            <div class="obj two">

                                <label>Name</label>
                                <input type="text" name="name" spellcheck="false" placeholder="Shipper Name" required/>

                            </div>

                            <div class="obj two">

                                <label>Account Number</label>
                                <input type="text" name="account" spellcheck="false" placeholder="Shipper Account Number" required/>

                            </div>

                            <div class="obj">

                                <label>Address</label>
                                <textarea name="address" spellcheck="false" placeholder="Shipper Address" required></textarea>

                            </div>

                            <span class="tagline">Consignee</span>

                            <div class="obj two">

                                <label>Name</label>
                                <input type="text" name="namecon" spellcheck="false" placeholder="Consignee Name" required/>

                            </div>

                            <div class="obj two">

                                <label>Account Number</label>
                                <input name="accountCon" spellcheck="false" placeholder="Consignee Account Number" required/>

                            </div>

                            <div class="obj">

                                <label>Address</label>
                                <textarea name="addressCon" spellcheck="false" placeholder="Consignee Address" required></textarea>

                            </div>

                            <div class="obj">

                                <label>Notify</label>
                                <textarea name="notify" spellcheck="false" placeholder="Notify" required></textarea>

                            </div>

                            <div class="obj">

                                <label>Place of Departure</label>
                                <input type="text" name="placeOfDeparture" spellcheck="false" placeholder="Place of Departure" required/>

                            </div>

                        </div>

                        <div class="group">

                            <div class="obj three">

                                <label>Airport of Destination</label>
                                <input type="text" name="airportofDestination" spellcheck="false" placeholder="Airport of Destionation" required/>

                            </div>

                            <div class="obj three">

                                <label>Flight/Date</label>
                                <input type="text" name="flightDate" spellcheck="false" placeholder="Flight/Date" required/>

                            </div>

                            <div class="obj three">

                                <label>Amount of Insurance</label>
                                <input type="text" name="amountOfInsurance" spellcheck="false" placeholder="Amount of Insurance" required/>

                            </div>

                            <div class="obj">

                                <label>Handling Information</label>

                                <input id="ssea" type="radio" name="transport" value="sea" required/>
                                <label for="ssea" class="radio two">THIS IS A SEA-AIR SHIPMENT TRANSITTING VIA FOR ONWARD CARRIAGE TO FINAL DESTINATION BY AIR</label>

                                <input id="sair" type="radio" name="transport" value="air" required/>
                                <label for="sair" class="radio two">THIS IS TO CERTIFY THAT CARGO DOES NOT LEAVE THE CUSTOMS-TERRITORY OF THE COUNTRY OF TRANSIT AND IS NOT MANIPULATED IN ANY MANNER</label>

                            </div>

                        </div>

                    </div>

                    <div class="block two" style="margin-left: 10px">

                        <div class="group">

                            <div class="obj four">

                                <label>CTD No.</label>
                                <input type="text" name="ctd" spellcheck="false" placeholder="CTD No." required/>

                            </div>

                            <div class="obj four-one">

                                <label>Not negotiable, combine, transport, document, issued by: </label>
                                <input type="text" name="issuedBy" spellcheck="false" placeholder="Issued by" required/>

                            </div>

                            <div class="obj">

                                <span class="desc">Copies 1-2 and 3 of this waybill are originals and have the same validity</span>

                                <span class="desc">

                                    it is agreed that the goods described herein area accepted in good order and condition (except as noted) for the carriage subject to the conditions of contract on the reverse thereof. <b>The shipper's and consignee's attention is drawn to the provisions in the Conditions of Contract concerning carrier's limitation of liability.</b><br/>
                                    Notwithstanding which party(shipper, supplier or any other party) has declared the weight, measurement, quantity ect. of shipment to the carrier or one of its subcontractors, agents, etc. The shipper will be fully responsible and liable for any damage, cost and disadvantage the carrier might suffer due to any discrepancy to the real weight, measurement, quantity etc. of the shipment.

                                </span>

                            </div>

                            <div class="obj">

                                <label>Accounting Information</label>
                                <textarea name="accounting" style="height: 127px !important" spellcheck="false" placeholder="Accounting information" required/></textarea>

                            </div>

                        </div>

                        <div class="group">

                            <div class="obj two">

                                <label>To</label>
                                <input type="text" name="to1" spellcheck="false" placeholder="To" required/>

                            </div>

                            <div class="obj two">

                                <label>By first Carrier (Routing and Destination)</label>
                                <input type="text" name="byFirstCarrier" spellcheck="false" placeholder="By First Carrier" required/>

                            </div>

                            <div class="obj two">

                                <label>To</label>
                                <input type="text" name="to2" spellcheck="false" placeholder="To" required/>

                            </div>

                            <div class="obj two">

                                <label>By</label>
                                <input type="text" name="by" spellcheck="false" placeholder="By" required/>

                            </div>

                            <div class="obj two">

                                <label>To</label>
                                <input type="text" name="to2" spellcheck="false" placeholder="To" required/>

                            </div>

                            <div class="obj two">

                                <label>By</label>
                                <input type="text" name="by" spellcheck="false" placeholder="By" required/>

                            </div>

                            <div class="obj two">

                                <label>Currency</label>
                                <input type="text" name="currency" spellcheck="false" placeholder="currency" required/>

                            </div>

                            <div class="obj two">

                                <label>CHSG Code</label>
                                <input type="text" name="chsgCode" spellcheck="false" placeholder="CHSG Code" required/>

                            </div>

                            <div class="obj two">

                                <label>WT/VAL</label>
                                <span class="label-left">PPD</span>
                                <input type="text" class="with-label-left" name="PPD" spellcheck="false" placeholder="PPD" required/>

                            </div>

                            <div class="obj two">

                                <label></label>
                                <span class="label-left">COLL</span>
                                <input type="text" class="with-label-left" name="COLL" spellcheck="false" placeholder="COLL" required/>

                            </div>

                            <div class="obj two">

                                <label>Other</label>
                                <span class="label-left">PPD</span>
                                <input type="text" class="with-label-left" name="PPD1" spellcheck="false" placeholder="PPD" required/>

                            </div>

                            <div class="obj two">

                                <label></label>
                                <span class="label-left">COLL</span>
                                <input type="text" class="with-label-left" name="COLL1" spellcheck="false" placeholder="COLL" required/>

                            </div>

                            <div class="obj two">

                                <label>Declared Value for Carriage</label>
                                <input type="text" name="carriage" spellcheck="false" placeholder="Declared value for carriage" required/>

                            </div>

                            <div class="obj two">

                                <label>Declared Value for Customs</label>
                                <input type="text" name="customs" spellcheck="false" placeholder="Declared value for customs" required/>

                            </div>

                        </div>

                    </div>

                    <div class="block one">

                        <div class="group">

                            <table>

                                <thead>

                                    <tr>

                                        <th>No. of Peices RCP</th>
                                        <th>Gross<br/>Weight</th>
                                        <th>Kg/Lb</th>
                                        <th>Rate<br/>Class</th>
                                        <th>Chargeable <br/>Weight</th>
                                        <th>Rate / Charge</th>
                                        <th>Total</th>
                                        <th>Nature and Quantity of Goods</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <tr class="highTd">

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td rowspan="3"></td>

                                    </tr>

                                    <tr style="height: 40px">

                                        <td style="text-align: left; font: 600 12px/1 'Poppins'" colspan="7">DIMENTIONS</td>

                                    </tr>

                                    <tr style="height: 40px">

                                        <td style="text-align: left; font: 600 12px/1 'Poppins'" colspan="7">VOLUME TOTAL</td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                    <div class="block two">

                        <div class="group">

                            <div class="obj three">

                                <label>Prepaid</label>
                                <input type="text" name="prepaid" spellcheck="false" placeholder="Prepaid" required/>

                            </div>

                            <div class="obj three">

                                <label>Weight Charge</label>
                                <input type="text" name="weightCharge" spellcheck="false" placeholder="Weight Charge" required/>

                            </div>

                            <div class="obj three">

                                <label>Collect</label>
                                <input type="text" name="collect" spellcheck="false" placeholder="Collect" required/>

                            </div>

                            <div class="obj two">

                                <label>Valuation Charge</label>
                                <span class="label-left">Rp</span>
                                <input type="text" name="valuationCharge" class="with-label-left" spellcheck="false" placeholder="Valuation Charge" required/>

                            </div>

                            <div class="obj two">

                                <label>Tax</label>
                                <span class="label-left">Rp</span>
                                <input type="text" name="tax" class="with-label-left" spellcheck="false" placeholder="Tax" required/>

                            </div>

                            <div class="obj two">

                                <label>Total Other Charges Due Agent</label>
                                <input type="text" name="dueAgent" spellcheck="false" placeholder="Total other charges Due Agent" required/>

                            </div>

                            <div class="obj two">

                                <label>Total Other Charges Due Carrier</label>
                                <input type="text" name="dueCarrier" spellcheck="false" placeholder="Total other charges Due Carrier" required/>

                            </div>

                            <span class="tagline">COD Amount</span>

                            <div class="obj two">

                                <label>Total Prepaid</label>
                                <input type="text" name="totalPrepaid" spellcheck="false" placeholder="Total Prepaid" required/>

                            </div>

                            <div class="obj two">

                                <label>Total Collect</label>
                                <input type="text" name="totalCollect" spellcheck="false" placeholder="Total Collect" required/>

                            </div>

                            <div class="obj two">

                                <label>Foreign Currency</label>
                                <input type="text" name="foreignCurrency" spellcheck="false" placeholder="Foreign Currency" required/>

                            </div>

                            <div class="obj two">

                                <label>CC Charges in Foreign Currency</label>
                                <input type="text" name="ccCharges" spellcheck="false" placeholder="CC Charges in Foreign Currency" required/>

                            </div>

                        </div>

                    </div>

                    <div class="block two" style="margin-left: 10px">

                        <div class="group">

                            <div class="obj">

                                <label>Amount collected throught/Billed to</label>
                                <input type="text" name="amountCollected" spellcheck="false" placeholder="Amount collected throught/Billed to" required/>

                            </div>

                            <span class="tagline">Other Charges</span>

                            <div class="obj two">

                                <label>Carrier</label>
                                <input type="text" name="carrier" spellcheck="false" placeholder="Carrier" required/>

                            </div>

                            <div class="obj two">

                                <label>Agent</label>
                                <input type="text" name="agent" spellcheck="false" placeholder="Agent" required/>

                            </div>

                            <div class="obj">

                                <span class="label-left">COD</span>
                                <input type="text" name="currency" class="with-label-left" spellcheck="false" placeholder="Currency" required/>
                                <span class="desc">This amount is not included with other charges</span>

                            </div>

                            <div class="obj">

                                <span class="desc" style="margin-bottom: 6px">

                                    Shipper certifies that the particulars on the face hereof area correct and that insofar as any part of the consignment contains restricted articles, such part is properly described by name and is in proper condition for carriage by sea-air according to the applicable dangerous goods regulations.

                                </span>

                            </div>

                        </div>

                        <button type="submit">Submit<button>

                    </div>

                </form>

            </div>

            </section>




      </div>
    </div>
</div>

<script>

	$('#seaair').addClass('active');						
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