
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

				<h3>AIR SERVICE</h3>

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
								<input name="accountCon" spellcheck="false" placeholder="Consignee Account Number" disabled required/>

							</div>

							<div class="obj">

								<label>Address</label>
								<textarea name="addressCon" spellcheck="false" placeholder="Consignee Address" required></textarea>

							</div>

							<div class="obj two">

								<label>Issuing Carrier's Agent Name and City</label>
								<span class="label-left">Name</span>
								<input type="text" name="agentName" class="with-label-left" spellcheck="false" placeholder="Agent Name" required/>

							</div>

							<div class="obj two">

								<label></label>
								<span class="label-left">City</span>
								<input type="text" name="agentCity" class="with-label-left" spellcheck="false" placeholder="Agent City" required/>

							</div>

							<div class="obj two">

								<label>Agent's IATA Code</label>
								<input type="text" name="agentCode" spellcheck="false" placeholder="Agent's IATA Code" required/>

							</div>

							<div class="obj two">

								<label>Account No.</label>
								<input type="Text" name="accountNo" spellcheck="false" placeholder="Account No." required/>

							</div>

							<div class="obj">

								<label>Airport of Departure (Addr. of first Carrier) and requested Routing</label>
								<input type="text" name="airportOfDeparture" spellcheck="false" placeholder="Airport of Departure" required/>

							</div>

						</div>

						<div class="group">

							<div class="obj">

								<label>Airport of Destination</label>
								<input type="text" name="airportofDestination" spellcheck="false" placeholder="Airport of Destionation" required/>

							</div>

							<div class="obj two">

								<label>For Carrier Use Only</label>
								<span class="label-left">Flight/Date</span>
								<input type="text" name="flightDate1" class="with-label-left" spellcheck="false" placeholder="Flight/Date" required/>

							</div>

							<div class="obj two">

								<label></label>
								<span class="label-left">Flight/Date</span>
								<input type="text" name="flightDate" class="with-label-left" spellcheck="false" placeholder="Flight/Date" required/>

							</div>

							<div class="obj">

								<label>Amount of Insurance</label>
								<input type="text" name="amountOfInsurance" spellcheck="false" placeholder="Amount of Insurance" required/>
								<span class="desc">Insurance. If shipperer requests insurance is in accordance with conditions on reverse hereof, indicale the amount to be insured in figures in box marked amount of insurance.</span>

							</div>

						</div>

					</div>

					<div class="block two" style="margin-left: 10px">

						<div class="group">

							<div class="obj">

								<label>House Air Waybill No</label>
								<input type="text" name="airWayBill" spellcheck="false" placeholder="House Air Waybill No" required/>

							</div>

							<div class="obj">

								<label>Not negotiable. Air Waybill</label>
								<span class="label-left">Issued By</span>
								<input type="text" name="issuedBy" class="with-label-left" spellcheck="false" placeholder="Issued by" required/>
								<span class="desc">Air Consigment Note</span>

							</div>

							<div class="obj">

								<span class="desc">Copies 1-2 and 3 of this waybill are originals and have the same validity</span>

								<span class="desc">

									It is agreed that the good described herein are accepted in apparent good order and condition (except as noted) for carriage SUBJECT TO THE CONDITIONS OF CONTRACT ON THE REVERSE HEREOF. THE SHIPPER'S ATTENTION IS DRAWN TO THE NOTICE CONCERNING CARRIER'S LIMITATION OF LIABILITY. shipper may increase such limitation of liability by declaring a higher value for carriage and playing a supplemental charge if required.

								</span>

							</div>

							<div class="obj">

								<label>Accounting Information</label>
								<textarea name="accounting" style="height: 92px !important" spellcheck="false" placeholder="Accounting information" required/></textarea>

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
								<input type="text" name="chsgCode" spellcheck="false" placeholder="CHSG Code" disabled required/>

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

							<div class="obj">

								<label>Handling Information</label>
								<input type="text" name="handlingInformation" spellcheck="false" placeholder="Handling Information" required/>

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
										<th>Nature and Quantity of Goods (incl. Dimensions on Volume)</th>

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
										<td>(Said to Contains and Shipper's Load Count)</td>

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

							<div class="obj two">

								<label>Total Prepaid</label>
								<input type="text" name="totalPrepaid" spellcheck="false" placeholder="Total Prepaid" required/>

							</div>

							<div class="obj two">

								<label>Total Collect</label>
								<input type="text" name="totalCollect" spellcheck="false" placeholder="Total Collect" required/>

							</div>

						</div>

					</div>

					<div class="block two" style="margin-left: 10px">

						<div class="group">

							<div class="obj two">

								<label>Currency Conversion Rates</label>
								<input type="text" name="currencyConversionRates" spellcheck="false" placeholder="Currency Conversion Rates" disabled required/>

							</div>

							<div class="obj two">

								<label>CC Charges in Dest. Currency</label>
								<input type="text" name="ccCharges" spellcheck="false" placeholder="CC Charges in Foreign Currency" disabled required/>

							</div>

							<div class="obj two">

								<label>Charges at Destination</label>
								<input type="text" name="chargesAtDestionation" spellcheck="false" placeholder="Charges at Destination" required/>
								<span class="desc">For Carrier's Use Only at Destination</span>

							</div>

							<div class="obj two">

								<label>Total Collect Charges</label>
								<input type="text" name="totalCollectCharges" spellcheck="false" placeholder="Total Collect Charges" required/>

							</div>

							<div class="obj" style="margin-bottom: 6px">

								<span class="desc" style="margin-top: 0">

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

	$('#air').addClass('active');						
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