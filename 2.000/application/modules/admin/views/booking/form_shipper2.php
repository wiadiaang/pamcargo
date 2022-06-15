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
        <!-- END PAGE BREADCRUMB -->
        <div class="row">
            <div class="col-md-12">
                <div id="binForm" class="portlet light bordered">

                    <div class="content">

                    <h3>Booking / Shipping Instruction (SI)</h3>

                    <form action="javascript:void(0);" id="form_shipper" method="POST" novalidate>

                        <div class="block two">

                            <div class="group">

                                <span class="groupTitle">Vendor<i>(if applicable & different from shipper)</i></span>

                                <div class="obj">

                                    <label>Name</label>
                                    <input type="text" name="nameVendor" spellcheck="false" placeholder="Name" required/>
                                    <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id'); ?>"/>
                                    <input type="hidden" name="master_id" value="<?= $master_id; ?>"/>

                                </div>

                                <div class="obj">

                                    <label>Contact</label>
                                    <select name="title" class="four">

                                        <option value="mrs">Mrs.</option>
                                        <option value="mr">Mr.</option>

                                    </select>

                                    <input class="four-one" type="text" name="contact" spellcheck="false" placeholder="Contact" required/>

                                </div>

                            </div>

                            <div class="group">

                                <span class="groupTitle">Shipper (on HBL/HAWB)</span>

                                <div class="obj">

                                    <label>Name</label>
                                    <input type="text" name="nameShipper" spellcheck="false" placeholder="Name" required/>

                                </div>

                                <div class="obj">

                                    <label>Street</label>
                                    <textarea  spellcheck="false" placeholder="Street" required name="streetShipper" id="streetShipper"></textarea>

                                </div>

                                <div class="obj three">

                                    <label>City</label>
                                    <input type="text" name="cityShipper" spellcheck="false" placeholder="City" required/>

                                </div>

                                <div class="obj three">

                                    <label>Zip Code</label>
                                    <input type="number" name="zipCodeShipper" maxlength="5" spellcheck="false" placeholder="Zip Code" required/>

                                </div>

                                <div class="obj three">

                                    <label>Country</label>
                                    <input type="text" name="countryShipper" spellcheck="false" placeholder="Country" required/>

                                </div>

                                <div class="obj">

                                    <label>Email</label>
                                    <input type="email" name="emailShipper" spellcheck="false" placeholder="Email" required/>

                                </div>

                                <div class="obj">

                                    <label>Contact</label>
                                    <input class="two" type="text" name="nameContact1Shipper" spellcheck="false" placeholder="Name Contact 1">
                                    <input class="two" type="text" name="nameContact2Shipper" spellcheck="false" placeholder="Name Contact 2">

                                </div>

                                <div class="obj">

                                    <label>Phone</label>
                                    <input type="number" name="phoneShipper" spellcheck="false" placeholder="Phone Number" required/>

                                </div>

                            </div>

                            <div class="group">

                                <span class="groupTitle">Pick Up Address <i>if different from shipper</i></span>

                                <div class="obj">

                                    <label>Name</label>
                                    <input type="text" name="namePick" spellcheck="false" placeholder="Name" required/>

                                </div>

                                <div class="obj">

                                    <label>Street</label>
                                    <textarea name="streePick" id="streePick" spellcheck="false" placeholder="Street" required></textarea>

                                </div>

                                <div class="obj three">

                                    <label>City</label>
                                    <input type="text" name="cityPick" spellcheck="false" placeholder="City" required/>

                                </div>

                                <div class="obj three">

                                    <label>Zip Code</label>
                                    <input type="number" name="zipCodePick" maxlength="5" spellcheck="false" placeholder="Zip Code" required/>

                                </div>

                                <div class="obj three">

                                    <label>Country</label>
                                    <input type="text" name="countryPick" spellcheck="false" placeholder="Country" required/>

                                </div>

                                <div class="obj">

                                    <label>Email</label>
                                    <input type="email" name="emailPick" spellcheck="false" placeholder="Email" required/>

                                </div>

                                <div class="obj">

                                    <label>Contact</label>
                                    <input class="two" type="text" name="nameContact1Pick" spellcheck="false" placeholder="Name Contact 1">
                                    <input class="two" type="text" name="nameContact2Pick" spellcheck="false" placeholder="Name Contact 2">

                                </div>

                                <div class="obj">

                                    <label>Phone</label>
                                    <input type="number" name="phonePick" spellcheck="false" placeholder="Phone Number" required/>

                                </div>

                            </div>

                            <div class="group">

                                <span class="groupTitle">Consignee (on HBL/HAWB)</span>

                                <div class="obj">

                                    <label>Name</label>
                                    <input type="text" name="nameCons" spellcheck="false" placeholder="Name" required/>

                                </div>

                                <div class="obj">

                                    <label>Street</label>
                                    <textarea name="streetCons" id="streetCons" spellcheck="false" placeholder="Street" required></textarea>

                                </div>

                                <div class="obj three">

                                    <label>City</label>
                                    <input type="text" name="cityCons" spellcheck="false" placeholder="City" required/>

                                </div>

                                <div class="obj three">

                                    <label>Zip Code</label>
                                    <input type="number" name="zipCodeCons" maxlength="5" spellcheck="false" placeholder="Zip Code" required/>

                                </div>

                                <div class="obj three">

                                    <label>Country</label>
                                    <input type="text" name="countryCons" spellcheck="false" placeholder="Country" required/>

                                </div>

                                <div class="obj">

                                    <label>Email</label>
                                    <input type="email" name="emailCons" spellcheck="false" placeholder="Email" required/>

                                </div>

                                <div class="obj">

                                    <label>Contact</label>
                                    <input class="two" type="text" name="nameContact1Cons" spellcheck="false" placeholder="Name Contact 1">
                                    <input class="two" type="text" name="nameContact2Cons" spellcheck="false" placeholder="Name Contact 2">

                                </div>

                                <div class="obj">

                                    <label>Phone</label>
                                    <input type="number" name="phoneCons" spellcheck="false" placeholder="Phone Number" required/>

                                </div>

                            </div>

                            <div class="group">

                                <span class="groupTitle">Delivery Address <i>if different from shipper</i></span>

                                <div class="obj">

                                    <label>Name</label>
                                    <input type="text" name="nameDel" spellcheck="false" placeholder="Name" required/>

                                </div>

                                <div class="obj">

                                    <label>Street</label>
                                    <textarea name="streetDel" id="streetDel" spellcheck="false" placeholder="Street" required></textarea>

                                </div>

                                <div class="obj three">

                                    <label>City</label>
                                    <input type="text" name="cityDel" spellcheck="false" placeholder="City" required/>

                                </div>

                                <div class="obj three">

                                    <label>Zip Code</label>
                                    <input type="number" name="zipCodeDel" maxlength="5" spellcheck="false" placeholder="Zip Code" required/>

                                </div>

                                <div class="obj three">

                                    <label>Country</label>
                                    <input type="text" name="countryDel" spellcheck="false" placeholder="Country" required/>

                                </div>

                                <div class="obj">

                                    <label>Email</label>
                                    <input type="email" name="emailDel" spellcheck="false" placeholder="Email" required/>

                                </div>

                                <div class="obj">

                                    <label>Contact</label>
                                    <input class="two" type="text" name="nameContact1Del" spellcheck="false" placeholder="Name Contact 1">
                                    <input class="two" type="text" name="nameContact2Del" spellcheck="false" placeholder="Name Contact 2">

                                </div>

                                <div class="obj">

                                    <label>Phone</label>
                                    <input type="number" name="phoneDel" spellcheck="false" placeholder="Phone Number" required/>

                                </div>

                            </div>

                            <div class="group">

                                <span class="groupTitle">Notify Party</span>

                                <div class="obj">

                                    <label>Name</label>
                                    <input type="text" name="nameNot" spellcheck="false" placeholder="Name" required/>

                                </div>

                                <div class="obj">

                                    <label>Street</label>
                                    <textarea name="streetNot" id="streetNot" spellcheck="false" placeholder="Street" required></textarea>

                                </div>

                                <div class="obj three">

                                    <label>City</label>
                                    <input type="text" name="cityNot" spellcheck="false" placeholder="City" required/>

                                </div>

                                <div class="obj three">

                                    <label>Zip Code</label>
                                    <input type="number" name="zipCodeNot" maxlength="5" spellcheck="false" placeholder="Zip Code" required/>

                                </div>

                                <div class="obj three">

                                    <label>Country</label>
                                    <input type="text" name="countryNot" spellcheck="false" placeholder="Country" required/>

                                </div>

                                <div class="obj">

                                    <label>Email</label>
                                    <input type="email" name="emailNot" spellcheck="false" placeholder="Email" required/>

                                </div>

                                <div class="obj">

                                    <label>Contact</label>
                                    <input class="two" type="text" name="nameContact1Not" spellcheck="false" placeholder="Name Contact 1">
                                    <input class="two" type="text" name="nameContact2Not" spellcheck="false" placeholder="Name Contact 2">

                                </div>

                                <div class="obj">

                                    <label>Phone</label>
                                    <input type="number" name="phoneNot" spellcheck="false" placeholder="Phone Number" required/>

                                </div>

                            </div>

                        </div>

                        <div class="block two" style="margin-left: 10px">

                            <div class="group">

                                <span class="groupTitle">Transport Mode</span>

                                <div class="obj">

                                    <input id="sea" type="radio" name="transport" value="sea" required/>
                                    <label for="sea" class="radio three">SEA</label>

                                    <input id="air" type="radio" name="transport" value="air" required/>
                                    <label for="air" class="radio three">AIR</label>

                                    <input id="seaair" type="radio" name="transport" value="seaair" required/>
                                    <label for="seaair" class="radio three">SEA/AIR</label>

                                </div>

                            </div>

                            <div class="group">

                                <span class="groupTitle">Shipper / Vendor <i>shall send this booking/</i></span>

                                <div class="obj">

                                    <label>To</label>
                                    <input type="text" name="toSV" spellcheck="false" placeholder="To." required/>

                                </div>

                                <div class="obj two">

                                    <label>Copy</label>
                                    <input type="text" name="copySV" spellcheck="false" placeholder="Copy." required/>

                                </div>

                                <div class="obj two">

                                    <label>Copy</label>
                                    <input type="text" name="copy2SV" spellcheck="false" placeholder="Copy." required/>

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
                                    <input type="text" name="shippingReference" spellcheck="false" placeholder="Shipping References" required/>

                                </div>

                                <div class="obj">

                                    <label>Airport / part of loading</label>
                                    <input type="text" name="partOfLoading" spellcheck="false" placeholder="Airport / part of loading" required/>

                                </div>

                                <div class="obj">

                                    <label>SEA / AIR transit port</label>
                                    <input type="text" name="seaAirTransit" spellcheck="false" placeholder="SEA / AIR transit port" required/>

                                </div>

                                <div class="obj">

                                    <label>Airport / port of discharges</label>
                                    <input type="text" name="portOfDischarges" spellcheck="false" placeholder="Airport / port of discharges" required/>

                                </div>

                                <div class="obj">

                                    <label>Place of cargo hand over</label>
                                    <input type="text" name="placeOfCargo" spellcheck="false" placeholder="Place of cargo hand over" required/>

                                </div>

                                <div class="obj">

                                    <label>Request hand over / pick up (date)</label>
                                    <input type="text" name="pickUp" spellcheck="false" placeholder="Request hand over / pick up (date)" required/>

                                </div>

                                <div class="obj two">

                                    <label>Request hand over / pick up</label>
                                    <span class="label-left">From</span>
                                    <input class="with-label-left" type="text" name="pickup2" spellcheck="false" placeholder="From" required/>

                                </div>

                                <div class="obj two">

                                    <label></label>
                                    <span class="label-left">To</span>
                                    <input class="with-label-left" type="text" name="pickup3" spellcheck="false" placeholder="To" required/>

                                </div>

                            </div>

                            <div class="group">

                                <span class="groupTitle">Shipping Documents</span>

                                <div class="obj">

                                    <label>Shipping Requires</label>
                                    <input type="text" name="shipRequires" spellcheck="false" placeholder="Shipping Requires" required/>

                                </div>

                                <div class="obj">

                                    <label>Shpr issue commercial invoice #</label>
                                    <input type="text" name="issueCommercial" spellcheck="false" placeholder="Shpr issue commercial invoice #" required>

                                </div>

                                <div class="obj">

                                    <label>Shpr issue packing list</label>
                                    <input type="text" name="issuePacking" spellcheck="false" placeholder="Shpr issue packing list" required>

                                </div>

                                <div class="obj">

                                    <label>Shpr issue certificate of origin</label>
                                    <input type="text" name="issueCertificate" spellcheck="false" placeholder="Shpr issue certificate of origin" required>

                                </div>

                                <div class="obj">

                                    <label>Shpr issue (specify document & #)</label>
                                    <input type="text" name="issueSpecify" spellcheck="false" placeholder="Shpr issue (specify document & #)" required>

                                </div>

                                <div class="obj">

                                    <label>Shpr issue (specify document & #)</label>
                                    <input type="text" name="issueSpecify2" spellcheck="false" placeholder="Shpr issue (specify document & #)" required>

                                </div>

                            </div>

                        </div>
                        <?php 
                        $type = $this->session->userdata('type');
                        if($type == 'shiper'){

                            $mst = $this->db->query("SELECT * FROM f_master where master_id = '$master_id' ")->row();
                            $count = count($mst);
                            if($count > 0){
                                if($mst->status == '1'){
                                    echo '<button class="btn btn-primary" type="submit">Booking</button>';
                                }else{
                                    
                                }
                            }else{
                                echo '<button class="btn btn-primary" type="submit">Booking</button>';
                            }
                            ?>
                                  
                        <?php  }  ?>
                            
                            <br>
                            <br>
                            <br>
                            <br>
                    </form>

                    <table>

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
                                <td style="text-align: left">GIU-JW-190723</td>

                            </tr>

                            <tr class="grey">
                                
                                <td style="width: 200px">Remarks</td>
                                <td style="text-align: left">EX FACTORY JULY 05.2019</td>

                            </tr>

                        </tbody>

                    </table>
                          
                </div>

                </div>
            </div>
         </div>
    <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>

<script>
    $("#form_shipper").on("submit",function(){
        $.ajax({
            url:"<?= base_url('admin/list_shipper/prosess_booking');?>",
            type:"POST",
            data:$("#form_shipper").serialize(),
            success:function(data){
                if(data == "1"){
                    window.location.href = 'https://express.rembon.co.id/admin/list_shipper';
                        Swal.fire({
                            position: 'top-end',
                            type: 'success',
                            title: 'Your work has been saved',
                            showConfirmButton: false,
                            timer: 1500
                        });
                }
            },
        });
    });

    <?php if($master_id != ''){ ?>
            $.ajax({
                url:"<?= base_url('admin/List_shipper/get_vendor');?>",
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
                url:"<?= base_url('admin/List_shipper/get_shipper');?>",
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
                url:"<?= base_url('admin/List_shipper/get_pickup');?>",
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
                url:"<?= base_url('admin/List_shipper/get_consignee');?>",
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
                url:"<?= base_url('admin/List_shipper/get_delivery');?>",
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
                url:"<?= base_url('admin/List_shipper/get_notify');?>",
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
                url:"<?= base_url('admin/List_shipper/get_transport');?>",
                type:"POST",
                data:{
                    "master_id":"<?= $master_id ?>"
                },
                dataType:"JSON",
                success:function(data){
                    $("#"+data.name).attr('checked','');
                },
            });
            $.ajax({
                url:"<?= base_url('admin/List_shipper/get_shipper_vendor');?>",
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
                url:"<?= base_url('admin/List_shipper/get_ordering_customer');?>",
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
                url:"<?= base_url('admin/List_shipper/get_shipping_terms');?>",
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
                url:"<?= base_url('admin/List_shipper/get_transport_details');?>",
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
                url:"<?= base_url('admin/List_shipper/get_shipping_documents');?>",
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