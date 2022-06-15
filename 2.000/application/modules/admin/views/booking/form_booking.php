<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-head">
            <div class="page-title">

				<h1>Invoice : <?php
					if($master_id != ''){
						echo $master_key->invoice_number; 
					}
				?> </h1>
            </div>
        </div>
        <ul class="page-breadcrumb breadcrumb">
            <li><a href="<?php echo base_url();?>admin/Dashboard"><?php echo $this->lang->line('home'); ?></a>
            <i class="fa fa-circle"></i></li>
            <li><span class="active"><?php echo $page; ?></span></li>
            <!-- <li><a href="javascript:void(0)" onClick="messageClick()">Message</a></li> -->
        </ul>
        <div class="row">

		<section id="binForm">
 
			<div class="content">

				<ul class="switch">

					<li data-tab="tab-1" id="booking">Booking</li>
					<li data-tab="tab-2" id="delivery">Message</li>
					<li data-tab="tab-3" id="document">Document</li>

				</ul>

				<div id="tab-1" class="tab">

					<h3>Booking / Shipping Instruction (SI)</h3>

					<form action="javascript:void(0);" id="form_booking" method="POST">

						<div class="block two">

							<div class="group">

								<span class="groupTitle">Vendor<i>(if applicable & different from shipper)</i></span>

								<div class="obj">
									<input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id'); ?>"/>
	                                <input type="hidden" name="master_id" value="<?= $master_id; ?>"/>

									<label>Name</label>
									<input type="text" name="nameVendor" spellcheck="false" placeholder="Name" required/>
								
	                            
								</div>

								<div class="obj">

									<label>Contact</label>
									<select name="title" class="four">

										<option value="mrs">Mrs.</option>
										<option value="mr">Mr.</option>

									</select>

									<input class="four-one" type="text" name="contact" spellcheck="false" placeholder="Contact" />

								</div>

							</div>

							<div class="group">

								<span class="groupTitle">Shipper (on HBL/HAWB)</span>

								<div class="obj">

									<label>Name</label>
									<input type="text" name="nameShipper" id="nameShipper" spellcheck="false" placeholder="Name" required/>

								</div>

								<div class="obj">

									<label>Street</label>
									<textarea name="streetShipper" id="streetShipper"spellcheck="false" placeholder="Street" required></textarea>

								</div>

								<div class="obj three">

									<label>City</label>
									<input type="text" name="cityShipper" id="cityShipper" spellcheck="false" placeholder="City" required/>

								</div>

								<div class="obj three">

									<label>Zip Code</label>
									<input type="number" name="zipCodeShipper" id="zipCodeShipper" maxlength="5" spellcheck="false" placeholder="Zip Code" required/>

								</div>

								<div class="obj three">

									<label>Country</label>
									<input type="text" name="countryShipper" id="countryShipper" spellcheck="false" placeholder="Country" required/>

								</div>

								<div class="obj">

									<label>Email</label>
									<input type="email" name="emailShipper" id="emailShipper" spellcheck="false" placeholder="Email" required/>

								</div>

								<div class="obj">

									<label>Contact</label>
									<input class="two" type="text" name="nameContact1Shipper" id="nameContact1Shipper" spellcheck="false" placeholder="Name Contact 1">
									<input class="two" type="text" name="nameContact2Shipper" id="nameContact2Shipper" spellcheck="false" placeholder="Name Contact 2">

								</div>

								<div class="obj">

									<label>Phone</label>
									<input type="number" name="phoneShipper" id="phoneShipper" spellcheck="false" placeholder="Phone Number" required/>

								</div>

							</div>

							<div class="group">

								<span class="groupTitle">Pick Up Address <i>if different from shipper</i></span>

								<div class="obj">

									<label>Name</label>
									<input type="text" name="namePick" spellcheck="false" placeholder="Name" />

								</div>

								<div class="obj">

									<label>Street</label>
									<textarea name="streePick" id="streePick" spellcheck="false" placeholder="Street" ></textarea>

								</div>

								<div class="obj three">

									<label>City</label>
									<input type="text" name="cityPick" spellcheck="false" placeholder="City" />

								</div>

								<div class="obj three">

									<label>Zip Code</label>
									<input type="number" name="zipCodePick" maxlength="5" spellcheck="false" placeholder="Zip Code" />

								</div>

								<div class="obj three">

									<label>Country</label>
									<input type="text" name="countryPick" spellcheck="false" placeholder="Country" />

								</div>

								<div class="obj">

									<label>Email</label>
									<input type="email" name="emailPick" spellcheck="false" placeholder="Email" />

								</div>

								<div class="obj">

									<label>Contact</label>
									<input class="two" type="text" name="nameContact1Pick" spellcheck="false" placeholder="Name Contact 1">
									<input class="two" type="text" name="nameContact2Pick" spellcheck="false" placeholder="Name Contact 2">

								</div>

								<div class="obj">

									<label>Phone</label>
									<input type="number" name="phonePick" spellcheck="false" placeholder="Phone Number" />

								</div>

							</div>

							<div class="group">

								<span class="groupTitle">Consignee (on HBL/HAWB)</span>

								<div class="obj">

									<label>Name</label>
									<!-- <input type="text" name="nameCons" spellcheck="false" placeholder="Name" required/> -->

									<select name="nameCons" id="consignee_id">
										<option value="">Select Consignee</option>
										<?php 
											$q = $this->db->query("select name_pt,user_id from user where level = 'consignee' ")->result();
											foreach ($q as $key) {
										?>
										<option value="<?= $key->user_id; ?>"><?= $key->name_pt; ?></option>
											<?php } ?>
									</select>

									<script>
										$('#consignee_id').on('change',function(){
											var consignee_id = $('#consignee_id').val();
											$.ajax({
												url : "<?= base_url('admin/get_data/get_consignee'); ?>",
												type : "POST",
												data : {"id":consignee_id},
												dataType:"json",
												beforeSend : function(){
													$('#streetCons').val('Loading ...');
													$('#cityCons').val('Loading ...');
													$('#zipCodeCons').val('Loading ...');
													$('#countryCons').val('Loading ...');
													$('#emailCons').val('Loading ...');
													$('#nameContact1Cons').val('Loading ...');
													$('#nameContact2Cons').val('Loading ...');
													$('#phoneCons').val('Loading ...');
												},
												success : function(data){
													
													if(data == null){
														$('#streetCons').val('');
														$('#cityCons').val('');
														$('#zipCodeCons').val('');
														$('#countryCons').val('');
														$('#emailCons').val('');
														$('#nameContact1Cons').val('');
														$('#nameContact2Cons').val('');
														$('#phoneCons').val('');
													}else{
														$('#streetCons').val(data.address);
														$('#cityCons').val(data.city);
														$('#zipCodeCons').val(data.postal_code);
														$('#countryCons').val(data.country);
														$('#emailCons').val(data.email);
														$('#nameContact1Cons').val(data.contact1);
														$('#nameContact2Cons').val(data.contact2);
														$('#phoneCons').val(data.phone_office);


														$('#nameNot').val(data.name_pt);
														$('#streetNot').val(data.address);
														$('#cityNot').val(data.city);
														$('#zipCodeNot').val(data.postal_code);
														$('#countryNot').val(data.country);
														$('#emailNot').val(data.email);
														$('#nameContact1Not').val(data.contact1);
														$('#nameContact2Not').val(data.contact2);
														$('#phoneNot').val(data.phone_office);
													}
													
												},

											});

										});
									</script>

								</div>

								<div class="obj">

									<label>Street</label>
									<textarea name="streetCons" id="streetCons" spellcheck="false" readonly="" placeholder="Street" required></textarea>

								</div>

								<div class="obj three">

									<label>City</label>
									<input type="text" name="cityCons" id="cityCons" spellcheck="false" readonly="" placeholder="City" required/>

								</div>

								<div class="obj three">

									<label>Zip Code</label>
									<input type="number" name="zipCodeCons" id="zipCodeCons" maxlength="5" spellcheck="false" readonly="" placeholder="Zip Code" required/>

								</div>

								<div class="obj three">

									<label>Country</label>
									<input type="text" name="countryCons" id="countryCons" spellcheck="false" readonly="" placeholder="Country" required/>

								</div>

								<div class="obj">

									<label>Email</label>
									<input type="email" name="emailCons" id="emailCons" spellcheck="false" readonly="" placeholder="Email" required/>

								</div>

								<div class="obj">

									<label>Contact</label>
									<input class="two" type="text" name="nameContact1Cons" id="nameContact1Cons" spellcheck="false" readonly="" placeholder="Name Contact 1">
									<input class="two" type="text" name="nameContact2Cons" id="nameContact2Cons" spellcheck="false" readonly="" placeholder="Name Contact 2">

								</div>

								<div class="obj">

									<label>Phone</label>
									<input type="text" name="phoneCons" id="phoneCons" spellcheck="false" readonly="" placeholder="Phone Number" required/>

								</div>

							</div>

							<div class="group">

								<span class="groupTitle">Delivery Address <i>if different from consignee</i></span>

								<div class="obj">

									<label>Name</label>
									<input type="text" name="nameDel" spellcheck="false" placeholder="Name" />

								</div>

								<div class="obj">

									<label>Street</label>
									<textarea name="streetDel" id="streetDel" spellcheck="false" placeholder="Street" ></textarea>

								</div>

								<div class="obj three">

									<label>City</label>
									<input type="text" name="cityDel" spellcheck="false" placeholder="City" />

								</div>

								<div class="obj three">

									<label>Zip Code</label>
									<input type="number" name="zipCodeDel" maxlength="5" spellcheck="false" placeholder="Zip Code" />

								</div>

								<div class="obj three">

									<label>Country</label>
									<input type="text" name="countryDel" spellcheck="false" placeholder="Country" />

								</div>

								<div class="obj">

									<label>Email</label>
									<input type="email" name="emailDel" spellcheck="false" placeholder="Email" />

								</div>

								<div class="obj">

									<label>Contact</label>
									<input class="two" type="text" name="nameContact1Del" spellcheck="false" placeholder="Name Contact 1">
									<input class="two" type="text" name="nameContact2Del" spellcheck="false" placeholder="Name Contact 2">

								</div>

								<div class="obj">

									<label>Phone</label>
									<input type="number" name="phoneDel" spellcheck="false" placeholder="Phone Number" />

								</div>

							</div>

							<div class="group">

								<span class="groupTitle">Notify Party</span>

								<div class="obj">

									<label>Name</label>
									<input type="text" name="nameNot" id="nameNot" spellcheck="false" placeholder="Name" required/>

								</div>

								<div class="obj">

									<label>Street</label>
									<textarea name="streetNot" id="streetNot" spellcheck="false" placeholder="Street" required></textarea>

								</div>

								<div class="obj three">

									<label>City</label>
									<input type="text" name="cityNot" id="cityNot" spellcheck="false" placeholder="City" required/>

								</div>

								<div class="obj three">

									<label>Zip Code</label>
									<input type="number" name="zipCodeNot" id="zipCodeNot" maxlength="5" spellcheck="false" placeholder="Zip Code" required/>

								</div>

								<div class="obj three">

									<label>Country</label>
									<input type="text" name="countryNot" id="countryNot" spellcheck="false" placeholder="Country" required/>

								</div>

								<div class="obj">

									<label>Email</label>
									<input type="email" name="emailNot" id="emailNot" spellcheck="false" placeholder="Email" required/>

								</div>

								<div class="obj">

									<label>Contact</label>
									<input class="two" type="text" name="nameContact1Not" id="nameContact1Not" spellcheck="false" placeholder="Name Contact 1">
									<input class="two" type="text" name="nameContact2Not" id="nameContact2Not" spellcheck="false" placeholder="Name Contact 2">

								</div>

								<div class="obj">

									<label>Phone</label>
									<input type="number" name="phoneNot" id="phoneNot" spellcheck="false" placeholder="Phone Number" required/>

								</div>

							</div>

						</div>

						<div class="block two" style="margin-left: 10px">

							<div class="group">

								<span class="groupTitle">Transport Mode</span>

								<div class="obj">

									<input id="tsea" type="radio" name="transport" value="sea"/>
									<label for="tsea" class="radio three">SEA</label>

									<input id="tair" type="radio" name="transport" value="air"/>
									<label for="tair" class="radio three">AIR</label>

									<input id="tseaair" type="radio" name="transport" value="seaair"/>
									<label for="tseaair" class="radio three">SEA/AIR</label>

									

								</div>

							</div>

							<div class="group">

								<span class="groupTitle">Shipper / Vendor <i>shall send this booking / (SI)</i></span>

								<div class="obj">

									<label>To</label>
									<input type="text" name="toSV" id="toSV" spellcheck="false"  placeholder="To." required/>

								</div>

								<div class="obj two">

									<label>Copy</label>
									<input type="text" name="copySV" spellcheck="false" placeholder="Copy." />

								</div>

								<div class="obj two">

									<label>Copy</label>
									<input type="text" name="copy2SV" spellcheck="false" placeholder="Copy." />

								</div>


							</div>

							<div class="group">

								<span class="groupTitle">Ordering Customer</span>

								<div class="obj">

									<label>Name</label>
									<input type="text" name="nameOC" spellcheck="false" placeholder="Name" required/>

								</div>

								<div class="obj">

									<label>Street</label>
									<textarea name="streetOC" id="streetOC" spellcheck="false" placeholder="Street" required></textarea>

								</div>

								<div class="obj three">

									<label>City</label>
									<input type="text" name="cityOC" spellcheck="false" placeholder="City" required/>

								</div>

								<div class="obj three">

									<label>Zip Code</label>
									<input type="number" name="zipCodeOC" maxlength="5" spellcheck="false" placeholder="Zip Code" required/>

								</div>

								<div class="obj three">

									<label>Country</label>
									<input type="text" name="countryOC" spellcheck="false" placeholder="Country" required/>

								</div>

								<div class="obj">

									<label>Email</label>
									<input type="email" name="emailOC" spellcheck="false" placeholder="Email" required/>

								</div>

								<div class="obj">

									<label>Contact</label>
									<input type="text" name="nameContactOC" spellcheck="false" placeholder="Name Contact">

								</div>

							</div>

							<div class="group">

								<span class="groupTitle">Shipping Terms / Charge Payment</span>

								<div class="obj">

									<label>INCO terms for shipping</label>
									<input type="text" name="inco" spellcheck="false" placeholder="INCO terms for shipping" required/>

								</div>

								<div class="obj">

									<label>FOB charges</label>
									<input type="text" name="fobCharges" spellcheck="false" placeholder="FOB Charges" required/>

								</div>

								<div class="obj">

									<label>Ocean / airfreight charges</label>
									<input type="text" name="oaCharges" spellcheck="false" placeholder="Ocean / airfreight charges" required/>

								</div>

								<div class="obj">

									<label>Destination charges</label>
									<input type="text" name="destinationCharges" spellcheck="false" placeholder="Destination Charges" required/>

								</div>

								<div class="obj">

									<label>Import duties & taxes</label>
									<input type="text" name="dutiesTaxes" spellcheck="false" placeholder="Import duties & taxes" required/>

								</div>

							</div>

							<div class="group">

								<span class="groupTitle">Transport Details</span>

								<div class="obj">

									<label>Shipping Reference</label>
									<input type="text" name="shippingReference" spellcheck="false" placeholder="Shipping References" />

								</div>

								<div class="obj">

									<label>Airport / part of loading</label>
									<input type="text" name="partOfLoading" spellcheck="false" placeholder="Airport / part of loading" />

								</div>

								<div class="obj">

									<label>SEA / AIR transit port</label>
									<input type="text" name="seaAirTransit" spellcheck="false" placeholder="SEA / AIR transit port" />

								</div>

								<div class="obj">

									<label>Airport / port of discharges</label>
									<input type="text" name="portOfDischarges" spellcheck="false" placeholder="Airport / port of discharges" />

								</div>

								<div class="obj">

									<label>Place of cargo hand over</label>
									<input type="text" name="placeOfCargo" spellcheck="false" placeholder="Place of cargo hand over" />

								</div>

								<div class="obj">

									<label>Request hand over / pick up (date)</label>
									<input type="text" name="pickUp" spellcheck="false" placeholder="Request hand over / pick up (date)" />

								</div>

								<div class="obj two">

									<label>Request hand over / pick up</label>
									<span class="label-left">From</span>
									<input class="with-label-left" type="text" name="pickup2" spellcheck="false" placeholder="From" />

								</div>

								<div class="obj two">

									<label></label>
									<span class="label-left">To</span>
									<input class="with-label-left" type="text" name="pickup3" spellcheck="false" placeholder="To" />

								</div>

							</div>

							<div class="group">

								<span class="groupTitle">Shipping Documents</span>

								<div class="obj">

									<label>Shipping Requires</label>
									<input type="text" name="shipRequires" spellcheck="false" placeholder="Shipping Requires" />

								</div>

								<div class="obj">

									<label>Shpr issue commercial invoice #</label>
									<input type="text" name="issueCommercial" spellcheck="false" placeholder="Shpr issue commercial invoice #" >

								</div>

								<div class="obj">

									<label>Shpr issue packing list</label>
									<input type="text" name="issuePacking" spellcheck="false" placeholder="Shpr issue packing list" >

								</div>

								<div class="obj">

									<label>Shpr issue certificate of origin</label>
									<input type="text" name="issueCertificate" spellcheck="false" placeholder="Shpr issue certificate of origin" >

								</div>

								<div class="obj">

									<label>Shpr issue (specify document & #)</label>
									<input type="text" name="issueSpecify" spellcheck="false" placeholder="Shpr issue (specify document & #)" >

								</div>

								<div class="obj">

									<label>Shpr issue (specify document & #)</label>
									<input type="text" name="issueSpecify2" spellcheck="false" placeholder="Shpr issue (specify document & #)" >

								</div>

							</div>

						</div>
						<!-- <button class="btn btn-primary" id="btn-booking" type="submit">Booking</button> -->

						<?php 
						$type = $this->session->userdata('type');
	                        if($type == 'shiper'){
								$master = $this->db->query("SELECT count(f_master.master_id) as jml, f_master.status FROM f_master where master_id = '$master_id' ")->row();
								$ss = $master->jml;
	                            if($ss > 0){
	                                if($master->status == '1'){
	                                    echo '<button class="btn btn-primary" id="btn-booking" type="submit">Booking</button>';
	                                }
	                            }else{
	                            	echo '<button class="btn btn-primary" id="btn-booking" type="submit">Booking</button>';
	                            }
	                        } 
	                    ?>

					</form>

					<table style="margin-top:20px;">

						<thead>

							<tr>

								<th>Pos</th>
								<th style="width: 600px">Goods Description</th>
								<th>Package Type</th>
								<th>Gross Weight - all packages (kg)</th>
								<th>No. of packages</th>
								<th>Length<br/>(cm)</th>
								<th>Width<br/>(cm)</th>
								<th>Height<br/>(cm)</th>
								<th style="width: 100px">Volume<br/>(cbm)</th>

							</tr>

						</thead>

						<tbody>

							<tr>

								<td></td>
								<td rowspan="22"></td>
								<td>CTN</td>
								<td>676,71</td>
								<td>63</td>
								<td>60,0</td>
								<td>40,0</td>
								<td>32,0</td>
								<td class="grey">4,838</td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>60,0</td>
								<td>40,0</td>
								<td>25,0</td>
								<td class="grey">4,838</td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td>NPE</td>
								<td style="text-align: left">271672</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td>PEB</td>
								<td style="text-align: left">275934</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td>DATE</td>
								<td style="text-align: left">04-07-2019</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td>KPBC</td>
								<td style="text-align: left">050100</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr>

								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="grey"></td>

							</tr>

							<tr class="grey" style="border-top: 2px solid #999">

								<td></td>
								<td></td>
								<td></td>
								<td>676,71</td>
								<td>63</td>
								<td></td>
								<td></td>
								<td></td>
								<td>4,838</td>

							</tr>

							<tr>
								
								<td colspan="9"></td>

							</tr>

						</tbody>

					</table>

					<table>
						<tbody>
							<tr>
								<td class="grey" style="width: 200px">Invoice Number(s)</td>
								<td style="text-align: left"><?= $master_key->invoice_number; ?></td>
							</tr>
							<tr class="grey">
								<td style="width: 200px">Remarks</td>
								<td style="text-align: left">EX FACTORY JULY 05.2019</td>
							</tr>
						</tbody>
					</table>




				</div>

				<div id="tab-2" class="tab">
					<div class="row">
						<div class="col-lg-3">
							<div class="btn-panel btn-panel-conversation">
								<!-- <div class="custom-file-container" data-upload-id="myUniqueUploadId">
									<label>Upload File <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">&times;</a></label>

									<label class="custom-file-container__custom-file" >
										<input type="file" class="custom-file-container__custom-file__custom-file-input" accept="*" multiple aria-label="Choose File">
										<input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
										<span class="custom-file-container__custom-file__custom-file-control"></span>
									</label>
									<div class="custom-file-container__image-preview"></div>
								</div> -->
								<!-- <a href="" class="btn  col-lg-6 send-message-btn " role="button"><i class="fa fa-search"></i> Search</a> -->
								<!-- <a href="" class="btn  col-lg-6  send-message-btn pull-right" role="button"><i class="fa fa-plus"></i> New Message</a>  -->
							</div>
						</div>

						<div class="col-lg-offset-1 col-lg-7">
							<div class="btn-panel btn-panel-msg">
								<!-- <a href="" class="btn  col-lg-3  send-message-btn pull-right" role="button"><i class="fa fa-gears"></i> Settings</a> -->
							</div>
						</div>
					</div>
					<div class="row">
						<div class="switchChat col-lg-3">
						<?php 
							$type = $this->session->userdata('type');
						?>
							<?php
							 foreach ($user_link as $key) {
								
								if($type == "admin"){ ?>
									<a id="<?= $key->f_chat_id; ?>" class="media conversation"  href="javascript:void(0)" onClick="get_chat('<?= $key->master_id; ?>','<?= $key->from_user_id; ?>','<?= $key->user_id; ?>','<?= $key->f_chat_id; ?>')" data-chat="chat-123">
									
								<?php }else{ ?>
									<a id="<?= $key->f_chat_id; ?>" class="media conversation"  href="javascript:void(0)" onClick="get_chat('<?= $key->master_id; ?>','<?= $key->user_id; ?>','<?= $key->from_user_id; ?>','<?= $key->f_chat_id; ?>')" data-chat="chat-123">

								<?php } ?>

							


								<div class="pull-left">
									<?php
										
										if($type == 'superadmin' || $type == 'shiper' || $type == 'consignee'){
											$name =  $key->name_pt2;
											$level =  $key->level2;
											if($key->user_image2 != ''){
												$file = file_exists('assets/image/users/'.$key->user_image2);
												if($file == ''){
													$img = "assets/image/user-default.png"; 
												}else{
													$img = "assets/image/users/".$key->user_image2; 
												}
											}else{
												$img = "assets/image/user-default.png"; 
											}

										}else if($type == 'admin'){
											$name =  $key->name_pt;
											$level =  $key->level;

											if($key->user_image != ''){
												$file = file_exists('assets/image/users/'.$key->user_image);
												if($file == ''){
													$img = "assets/image/user-default.png"; 
												}else{
													$img = "assets/image/users/".$key->user_image; 
												}
											}else{
												$img = "assets/image/user-default.png"; 
											}

										}

									?>
									<img class="media-object" alt="64x64" width="64" src="<?php echo base_url($img) ?>"/>
								</div>
								<div class="media-body">
									<h5 class="media-heading"><?= $name; ?></h5>
									<small><?php
										echo $level;
									 ?></small>
								</div>
							</a>
							<?php } ?>
							<?php  ?>
						</div>
						
						
							
						<div id="chat-123" class="message-wrap col-lg-9">
							<div class="msg-wrap" >
								<div id="chat_delivery"></div>
							</div>
 
							<style>
								div.msg-wrap
								{
								height:300PX;
								FLOAT: left;
								overflow:scroll;
								width:100%;
								}
							</style>
							
							<form id="formMessage" action="javascript:void(0)" method="POST" >
								<input type="hidden" id="master_id" name="master_id">
								<input type="text" name="from_user_id" id="from_user_id" value="">
								<input type="text" name="to_user_id" id="to_user_id" value="">
								<input type="hidden" id="chat_id" name="chat_id">
								<div class="send-wrap">
									<textarea class="form-control send-message" rows="3" id="chatText" name="chatText" placeholder="Write a reply..."></textarea>
								</div>
							<div class="bin-group">
							<div id="output"></div>
								<a href="javascript:void(0)" id="browse_file" class="bin-left">
								<i class="fa fa-cloud-upload"></i>Send with File</a>
								<input id="userfiless" name="userfile" type="file"  accept="*" class="hidden" >
								<a onClick="sendMessage()" href="javascript:void(0)" class="bin-right">
								<i class="fa fa-plus"></i> Send Message</a>
								
							</div>
							</form>
							
							<script>
							    
							</script>
						</div>

					</div>	
				</div>

				<div id="tab-3" class="tab">
					<h3>Document List</h3>
					<div class="bin-content">

						<div class="bin-head">
							<div class="input-group">
								<label>Sort By</label>
								<select name="sortBy" id="sortBy" required>
									<option value="" selected>All</option>
								<?php foreach ($user_link as $key) {?>
									<option value="<?= $key->user_id; ?>"><?= $key->name_pt; ?></option>
								<?php } ?>
								<option value="<?= $this->session->userdata('user_id'); ?>" ><?= $this->session->userdata('name_pt'); ?></option>
								</select>
							</div>

							<div class="input-group">
								<label>Search</label>
								<input type="search" id="search" class="with-label-left" name="search" spellcheck="false" placeholder="Search Files" required/>
								<div class="label-left" id="btnSearch" style="cursor:pointer;"><img src="<?php echo base_url() ?>assets/image/search.png"/></div>
							</div>

						</div>

						<div class="list">
							<div id="filesUpload"></div>
						</div>
					</div>
				</div>

			</div>

		</section>

<!-- 
		<section>
									
					<table style="margin-top:20px;">
						<thead>
							<tr>
								<th>Pos</th>
								<th style="width: 600px">Goods Description</th>
								<th>Package Type</th>
								<th>Gross Weight - all packages (kg)</th>
								<th>No. of packages</th>
								<th>Length<br/>(cm)</th>
								<th>Width<br/>(cm)</th>
								<th>Height<br/>(cm)</th>
								<th style="width: 100px">Volume<br/>(cbm)</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="text" name="pos" spellcheck="false" class="form-control"></td>
								<td><input type="text" name="goods" spellcheck="false" class="form-control"></td>
								<td>CTN</td>
								<td>676,71</td>
								<td>63</td>
								<td>60,0</td>
								<td>40,0</td>
								<td>32,0</td>
								<td class="grey">4,838</td>
							</tr>
						</tbody>
				</table> -->
				<script>

					$(document).ready(function(){
						$(".addCF").click(function(){
							$("#customFieldss").append('<tr valign="top"><th scope="row"><label for="customFieldName">Custom Field</label></th><td><input type="text" class="code" id="customFieldName" name="customFieldName[]" value="" placeholder="Input Name" /> &nbsp; <input type="text" class="code" id="customFieldValue" name="customFieldValue[]" value="" placeholder="Input Value" /> &nbsp; <a href="javascript:void(0);" class="remCF">Remove</a></td></tr>');
						});
						$("#customFieldss").on('click','.remCF',function(){
							$(this).parent().parent().remove();
						});
					});
				
				</script>
					


		</section>



      </div>
    </div>
</div>





				

<script>
	


	$(document).ready(function(){

        $('.switch li').click(function(){

            var tab_id = $(this).attr('data-tab');
            $('.tab').removeClass('opened');
            $('.switch li').removeClass('clicked');

            $(this).addClass('clicked');
            $("#"+tab_id).addClass('opened');

        });

        $('#chat-3').addClass("openedChat");
        $("a[data-chat='chat-3']").addClass("clickedChat");

        $('.switchChat a').click(function(){

            var chat_id = $(this).attr('data-chat');
            $('.message-wrap').removeClass('openedChat');
            $('.switchChat a').removeClass('clickedChat');

            $(this).addClass('clickedChat');
            $("#"+chat_id).addClass('openedChat');

        });

	});

	

	$('#booking').addClass('active');						
    $("#form_booking").on("submit",function(){
        $.ajax({
            url:"<?= base_url('admin/Booking/prosess_booking');?>",
            type:"POST",
            data:$("#form_booking").serialize(),
			beforeSend:function(){
				$('#btn-booking').text('Waiting Proccess ... ');

			},
            success:function(data){
                    Swal.fire({
                            type: 'success',
                            title: 'Your data has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    window.location.href = '<?= base_url(); ?>admin/Booking';
                    },
        });
    });

		$("input[name='toSV']").attr('readonly','');
    <?php if($master_id != ''){ ?>


            $.ajax({
                url:"<?= base_url('admin/Booking/get_vendor');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
				beforeSend: function(){
					$("input[name='nameVendor']").val('Loading ...');
                    $("input[name='title']").val('Loading ...');
                    $("input[name='contact']").val('Loading ...');
				},
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
                    "shipper_id":"<?= $master_key->f_shipper_id;?>"
                },
                dataType:"JSON",
				beforeSend : function(){
					$("input[name='nameShipper']").val('Loading ...');
                    $("#streetShipper").val('Loading ...');
                    $("input[name='cityShipper']").val('Loading ...');
                    $("input[name='zipCodeShipper']").val('Loading ...');
                    $("input[name='countryShipper']").val('Loading ...');
                    $("input[name='emailShipper']").val('Loading ...');
                    $("input[name='nameContact1Shipper']").val('Loading ...');
                    $("input[name='nameContact2Shipper']").val('Loading ...');
                    $("input[name='phoneShipper']").val('Loading ...');
				},
                success:function(data){
					$("input[name='nameShipper']").attr('readonly','');
                    $("#streetShipper").attr('readonly','');
                    $("input[name='cityShipper']").attr('readonly','');
                    $("input[name='zipCodeShipper']").attr('readonly','');
                    $("input[name='countryShipper']").attr('readonly','');
                    $("input[name='emailShipper']").attr('readonly','');
                    $("input[name='nameContact1Shipper']").attr('readonly','');
                    $("input[name='nameContact2Shipper']").attr('readonly','');
                    $("input[name='phoneShipper']").attr('readonly','');

                    $("input[name='nameShipper']").val(data.name_pt);
                    $("#streetShipper").val(data.address);
                    $("input[name='cityShipper']").val(data.city);
                    $("input[name='zipCodeShipper']").val(data.postal_code);
                    $("input[name='countryShipper']").val(data.country);
                    $("input[name='emailShipper']").val(data.email);
                    $("input[name='nameContact1Shipper']").val(data.contact1);
                    $("input[name='nameContact2Shipper']").val(data.contact2);
                    $("input[name='phoneShipper']").val(data.phone_office);
                },
            });

            $.ajax({
                url:"<?= base_url('admin/Booking/get_pickup');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
				beforeSend : function(){
					$("input[name='namePick']").val('Loading ...');
                    $("#streePick").val('Loading ...');
                    $("input[name='cityPick']").val('Loading ...');
                    $("input[name='zipCodePick']").val('Loading ...');
                    $("input[name='countryPick']").val('Loading ...');
                    $("input[name='emailPick']").val('Loading ...');
                    $("input[name='nameContact1Pick']").val('Loading ...');
                    $("input[name='nameContact2Pick']").val('Loading ...');
                    $("input[name='phonePick']").val('Loading ...');
				},
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


			// $("#consignee_id").val("<?= $master_key->f_consignee_id;?>");
            $.ajax({
                url:"<?= base_url('admin/Booking/get_consignee');?>",
                type:"POST",
                data:{
                    "consignee_id":"<?= $master_key->f_consignee_id;?>"
                },
                dataType:"JSON",
				beforeSend : function(){
					$("#consignee_id").val('Loading ...');
                    $("#streetCons").val('Loading ...');
                    $("input[name='cityCons']").val('Loading ...');
                    $("input[name='zipCodeCons']").val('Loading ...');
                    $("input[name='countryCons']").val('Loading ...');
                    $("input[name='emailCons']").val('Loading ...');
                    $("input[name='nameContact1Cons']").val('Loading ...');
                    $("input[name='nameContact2Cons']").val('Loading ...');
                    $("input[name='phoneCons']").val('Loading ...');
				},
                success:function(data){
                    $("#consignee_id").val(data.user_id);
                    $("#streetCons").val(data.address);
                    $("input[name='cityCons']").val(data.city);
                    $("input[name='zipCodeCons']").val(data.postal_code);
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
				beforeSend:function(data){
                    $("input[name='nameDel']").val('Loading ...');
                    $("#streetDel").val('Loading ...');
                    $("input[name='cityDel']").val('Loading ...');
                    $("input[name='zipCodeDel']").val('Loading ...');
                    $("input[name='countryDel']").val('Loading ...');
                    $("input[name='emailDel']").val('Loading ...');
                    $("input[name='nameContact1Del']").val('Loading ...');
                    $("input[name='nameContact2Del']").val('Loading ...');
                    $("input[name='phoneDel']").val('Loading ...');
                },
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
				beforeSend:function(data){
                    $("input[name='nameNot']").val('Loading ...');
                    $("#streetNot").val('Loading ...');
                    $("input[name='cityNot']").val('Loading ...');
                    $("input[name='zipCodeNot']").val('Loading ...');
                    $("input[name='countryNot']").val('Loading ...');
                    $("input[name='emailNot']").val('Loading ...');
                    $("input[name='nameContact1Not']").val('Loading ...');
                    $("input[name='nameContact2Not']").val('Loading ...');
                    $("input[name='phoneNot']").val('Loading ...');
                },
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
				beforeSend:function(data){
                    $("input[name='toSV']").val('Loading ...');
                    $("input[name='copySV']").val('Loading ...');
                    $("input[name='copy2SV']").val('Loading ...');
                },
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
				beforeSend:function(data){
                    $("input[name='nameOC']").val('Loading ...');
                    $("#streetOC").val('Loading ...');
                    $("input[name='cityOC']").val('Loading ...');
                    $("input[name='zipCodeOC']").val('Loading ...');
                    $("input[name='countryOC']").val('Loading ...');
                    $("input[name='emailOC']").val('Loading ...');
                    $("input[name='nameContactOC']").val('Loading ...');
                },
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
				beforeSend:function(data){
                    $("input[name='inco']").val('Loading ...');
                    $("input[name='fobCharges']").val('Loading ...');
                    $("input[name='oaCharges']").val('Loading ...');
                    $("input[name='destinationCharges']").val('Loading ...');
                    $("input[name='dutiesTaxes']").val('Loading ...');
                },
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
				beforeSend:function(data){
                    $("input[name='shippingReference']").val('Loading ...');
                    $("input[name='partOfLoading']").val('Loading ...');
                    $("input[name='seaAirTransit']").val('Loading ...');
                    $("input[name='portOfDischarges']").val('Loading ...');
                    $("input[name='placeOfCargo']").val('Loading ...');
                    $("input[name='pickUp']").val('Loading ...');
                    $("input[name='pickup2']").val('Loading ...');
                    $("input[name='pickup3']").val('Loading ...');
                },
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
				beforeSend:function(data){
                    $("input[name='shipRequires']").val('Loading ...');
                    $("input[name='issueCommercial']").val('Loading ...');
                    $("input[name='issuePacking']").val('Loading ...');
                    $("input[name='issueCertificate']").val('Loading ...');
                    $("input[name='issueSpecify']").val('Loading ...');
                    $("input[name='issueSpecify2']").val('Loading ...');
                },
                success:function(data){
                    $("input[name='shipRequires']").val(data.shipping_requires);
                    $("input[name='issueCommercial']").val(data.shpr_isu_commerical_invoice);
                    $("input[name='issuePacking']").val(data.shpr_isu_packing_list);
                    $("input[name='issueCertificate']").val(data.shpr_isu_certificate_origin);
                    $("input[name='issueSpecify']").val(data.shpr_isu_specify);
                    $("input[name='issueSpecify2']").val(data.shpr_isu_specify2);
                },
            });
			$('#btn-booking').removeAttr('disabled','');


			// CHAT =========================================================

			if("<?= $this->uri->segment('5') ?>" != ''){
				messageClick("<?= $this->uri->segment('4'); ?>","<?= $this->uri->segment('5'); ?>","<?= $this->uri->segment('6'); ?>","<?= $this->uri->segment('7'); ?>");
		
			} else{
				  $('#tab-1').addClass("opened");
      			  $("li[data-tab='tab-1']").addClass("clicked");
			}
			function messageClick(master_id,user_id,from_user_id,chat_id){
				$('#tab-1').removeClass("opened");
				$("li[data-tab='tab-1']").removeClass("clicked"); 
				
				$('#booking').removeClass('clicked');
				$('#delivery').addClass('clicked');
				$('#document').removeClass('clicked');

				$('#tab-2').addClass("opened");
				$("li[data-tab='tab-2']").addClass("clicked"); 

				$('#tab-3').removeClass("opened");
				$("li[data-tab='tab-3']").removeClass("clicked"); 

				get_chat(master_id,user_id,from_user_id,chat_id);

				$('.message-wrap').removeClass('openedChat');
				$('#'+chat_id).addClass('clickedChat');
				$("#chat-123").addClass('openedChat');

			}

			function get_chat(master_id,from_user_id,user_id,chat_id){
					$('#master_id').val(master_id);
					$('#from_user_id').val(from_user_id);
					$('#to_user_id').val(user_id);
				// if("<?= $this->session->userdata('type') ?>" == 'admin'){
				// 	$('#from_user_id').val(from_user_id);
				// 	$('#to_user_id').val(user_id);
				// }else if("<?= $this->session->userdata('type') ?>" == 'superadmin'){
				// 	$('#from_user_id').val(from_user_id);
				// 	$('#to_user_id').val(user_id);
				// }else if("<?= $this->session->userdata('type') ?>" == 'shiper'){
				// 	$('#from_user_id').val(from_user_id);
				// 	$('#to_user_id').val(user_id);
				// }
				$('#chat_id').val(chat_id);

				$.ajax({
					url:"<?= base_url('admin/Booking/get_chat_delivery');?>",
					type:"POST",
					data:{
						"master_id":master_id,"user_id":user_id,"chat_id":chat_id,"limit":'3'
					},
					dataType:"JSON",
					beforeSend:function(){
						$('#chat_delivery').text('Loading ...');
					},
					success:function(data){
						load_chat();
						count_chat();
						$('#chat_delivery').text('');
						
						// $('#chat_delivery').append('');
						$.each(data, function(key, value ) {
							if(value.user_image == null){
								var img = "<?= base_url() ?>assets/image/user-default.png";
							}else{
								var img = "<?= base_url() ?>assets/image/users/"+value.user_image;
							}
							if(value.file != null ){
								if(value.type_file == ".docx" || value.type_file == ".doc"){
									var type = "<?php echo base_url('assets/image/ms-word.png') ?>";
								}else if(value.type_file == ".pdf"){
									var type = "<?php echo base_url('assets/image/exicon_pdf.png') ?>";
								}else if(value.type_file == ".xlsx" || value.type_file == ".xls"){
									var type = "<?php echo base_url() ?>assets/image/ms-excel.png";
								}else if(value.type_file == ".pptx" || value.type_file == ".ppt"){ 
									var type = "<?php echo base_url() ?>assets/image/ms-powerpoint.png";
								}else if(value.type_file == ".zip"){ 
									var type = "<?php echo base_url() ?>assets/image/exicon_zip.png";
								}else if(value.type_file == ".png" || value.type_file == ".jpg" || value.type_file == ".jpeg"){ 
									var type = "<?php echo base_url() ?>assets/image/exicon_png.png";
								}else{
									var type = "<?php echo base_url() ?>assets/image/ms-word.png";
								}
								var content = '<div class="item"> '+value.text+' <br><img class="icon" width="40" src="'+type+'"/><span class="filename"> <a href="<?= base_url('assets/files/')?>'+value.file+'" target="_blank">'+value.file+'</a></span></div>';
							}else{
								var content = value.text;
							}
							$('#chat_delivery').append('<div class="media msg "><a class="pull-left" href="#"><img width="64" class="media-object" src="'+img+'"></a><div class="media-body"><small class="pull-right time"><i class="fa fa-clock-o"></i> '+value.created_dated+'</small><h5 class="media-heading">'+value.name_pt+'</h5><small class="col-lg-10">'+content+'</small></div></div>');
						});
 
					},
				});
			}

			function refresh_chat(master_id,from_user_id,user_id,chat_id){
				get_chat(master_id,from_user_id,user_id,chat_id);
			}
			// $('#formMessage').on('submit',function(){
			// 	$.ajax({
			// 		url:"<?= base_url('admin/Booking/sendMessage');?>",
			// 		type:"POST",
			// 		data: $('#formMessage').serialize(),
			// 		success:function(data){
			// 			if(data == '2'){
			// 				alert('Failed');
			// 			}else{
			// 				var master_id = $('#master_id').val();
			// 				var user_id = $('#from_user_id').val();
			// 				var from_user_id= $('#to_user_id').val();
			// 				var chat_id = $('#chat_id').val();
			// 				$('#chatText').val('');
			// 				get_chat(master_id,from_user_id,user_id,chat_id);
			// 			}
			// 		},
			// 	}); 
			// });

			function sendMessage(){
				var chat = $('#chatText').val();
				if(chat == ""){
					alert('Fill chat');
				}else{

					$.ajax({
						url:"<?= base_url('admin/Booking/sendMessage');?>",
						type:"POST",
						data: $('#formMessage').serialize(),
						success:function(data){
							if(data == '2'){
								alert('Failed');
							}else{
								var master_id = $('#master_id').val();
								var from_user_id = $('#from_user_id').val();
								var user_id =  $('#to_user_id').val();
								var chat_id = $('#chat_id').val();

								$('#chatText').val('');
								if("<?= $this->session->userdata('type') ?>" == 'admin'){
									get_chat(master_id,from_user_id,user_id,chat_id);
								}else if("<?= $this->session->userdata('type') ?>" == 'superadmin'){
									get_chat(master_id,from_user_id,user_id,chat_id);
								}else if("<?= $this->session->userdata('type') ?>" == 'shiper'){
									get_chat(master_id,from_user_id,user_id,chat_id);
								}else if("<?= $this->session->userdata('type') ?>" == 'consignee'){
									get_chat(master_id,from_user_id,user_id,chat_id);
								}
								
							}
						},
					}); 

				}
			}

			$('#btnSearch').on('click',function(){
				getFiles();
			});
			$('#document').on('click',function(){
				getFiles();
			});

			$('#sortBy').on('change',function(){
				getFiles();
			});
			
			function getFiles(){

			var search = $('#search').val();
			var sortBy = $('#sortBy').val();
			var to_user_id = $('#to_user_id').val();
			$.ajax({
					url:"<?= base_url('admin/Booking/get_file_delivery');?>",
					type:"POST",
					data:{"master_id":'<?= $master_id ?>',"search":search,"sortBy":sortBy},
					dataType:"json",
					beforeSend:function(){
						$('#filesUpload').text('Loading ...');
					},
					success:function(data){
						$('#filesUpload').text('');
						if(data == ''){
							$('#filesUpload').text('Data empty');
						}else{
						$.each(data, function(key, value ) {
								if(value.type_file == ".docx" || value.type_file == ".doc"){
									var type = "<?php echo base_url('assets/image/ms-word.png') ?>";
								}else if(value.type_file == ".pdf"){
									var type = "<?php echo base_url('assets/image/exicon_pdf.png') ?>";
								}else if(value.type_file == ".xlsx" || value.type_file == ".xls"){
									var type = "<?php echo base_url() ?>assets/image/ms-excel.png";
								}else if(value.type_file == ".pptx" || value.type_file == ".ppt"){ 
									var type = "<?php echo base_url() ?>assets/image/ms-powerpoint.png";
								}else if(value.type_file == ".zip"){ 
									var type = "<?php echo base_url() ?>assets/image/exicon_zip.png";
								}else if(value.type_file == ".png" || value.type_file == ".jpg" || value.type_file == ".jpeg"){ 
									var type = "<?php echo base_url() ?>assets/image/exicon_png.png";
								}else{
									var type = "<?php echo base_url() ?>assets/image/ms-word.png";
								}
							$('#filesUpload').append('<a href="<?= base_url('assets/files/');?>'+value.file+'" target="_blank"><div class="item"><img class="icon" src="'+type+'"/><span class="filename">'+value.file+' <br> <small>'+value.name_pt+'<small><br> <small>'+value.created_dated+'<small></span></div></a> ');
						});

						}
 
					},
				});

			}

		$('#browse_file').on('click',function(){
				$('#userfiless').click();
		});
		$('#userfiless').on('change', function(){ 
			uploadFile();
		 });
		 function uploadFile(){
			var chat = $('#chatText').val();
			if(chat == ''){
				alert('Submit with chat');
			}else{
				var chat = $('#chatText').val();
				var chat_id = $('#chat_id').val();
				var user_id = $('#from_user_id').val();
				var to_user_id = $('#to_user_id').val();
				var master_id = $('#master_id').val();
				
				var formData = new FormData();
				formData.append('file', $('#userfiless')[0].files[0] );
				$.ajax({ 
					url:"<?php echo base_url('admin/booking/sendFiles/')?>"+chat_id+"/"+user_id+"/"+to_user_id+"/"+master_id+"/"+chat,
					type: 'POST',
					data:formData,
					contentType: false,
					cache: false,
					processData:false,
					beforeSend:function(){
						$('#browse_file').text('Upload file ...');
					},
					success: function(resp) {
								var user_session = "<?= $this->session->userdata('type') ?>";
								if(user_session == 'admin'){
									get_chat(master_id,user_id,to_user_id,chat_id);
								}else if(user_session == 'superadmin'){
									get_chat(master_id,user_id,to_user_id,chat_id);
								}else if(user_session == 'shiper'){
									get_chat(master_id,user_id,to_user_id,chat_id);
								}else if(user_session == 'consignee'){
									get_chat(master_id,user_id,to_user_id,chat_id);
								}
								$('#chatText').val('');
								$('#browse_file').text('Send with File');
					},
				}); 


			}  
				
				
		 };

    <?php }else{ ?>
		$('#tab-1').addClass("opened");
      	$("li[data-tab='tab-1']").addClass("clicked");


					
		  			$('#nameShipper').attr('readonly','');
					$('#streetShipper').attr('readonly','');
					$('#cityShipper').attr('readonly','');
					$('#zipCodeShipper').attr('readonly','');
					$('#countryShipper').attr('readonly','');
					$('#emailShipper').attr('readonly','');
					$('#nameContact1Shipper').attr('readonly','');
					$('#nameContact2Shipper').attr('readonly','');
					$('#phoneShipper').attr('readonly','');

		  			$('#nameShipper').val('<?= $this->session->userdata('name_pt'); ?>');
					$('#streetShipper').val('<?= $this->session->userdata('address'); ?>');
					$('#cityShipper').val('<?= $this->session->userdata('city'); ?>');
					$('#zipCodeShipper').val('<?= $this->session->userdata('postal_code'); ?>');
					$('#countryShipper').val('<?= $this->session->userdata('country'); ?>');
					$('#emailShipper').val('<?= $this->session->userdata('email'); ?>');
					$('#nameContact1Shipper').val('<?= $this->session->userdata('contact1'); ?>');
					$('#nameContact2Shipper').val('<?= $this->session->userdata('contact2'); ?>');
					$('#phoneShipper').val('<?= $this->session->userdata('phone_office'); ?>');
					
					$.ajax({
							url:"<?= base_url('admin/get_data/get_origin');?>",
							type:"POST",
							dataType:"json",
							beforeSend:function(){
								$('#toSV').val('Loading ...');
							},
							success:function(data){
								$('#toSV').val(data.name_pt);
								$('#toSV').attr('readonly','');
							},

						});

			

		  $.ajax({
				url:"<?= base_url('admin/get_data/get_origin');?>",
				type:"POST",
				dataType:"json",
				beforeSend:function(){
					$('#toSV').val('Loading ...');
				},
				success:function(data){
					$('#toSV').val(data.name_pt);
					$('#toSV').attr('readonly','');
				},

			});
	 
	<?php } ?>
	
</script>