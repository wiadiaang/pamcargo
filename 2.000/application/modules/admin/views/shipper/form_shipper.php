<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1><?php echo $page; ?></h1>
            </div>
            <div class="page-toolbar">
                <!-- BEGIN THEME PANEL -->
            </div>
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
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

                    <form action="" method="POST">

                        <div class="block two">

                            <div class="group">

                                <span class="groupTitle">Vendor<i>(if applicable & different from shipper)</i></span>

                                <div class="obj">

                                    <label>Name</label>
                                    <input type="text" name="nameVendor" spellcheck="false" placeholder="Name" required/>

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
                                    <textarea name="street" spellcheck="false" placeholder="Street" required></textarea>

                                </div>

                                <div class="obj three">

                                    <label>City</label>
                                    <input type="text" name="city" spellcheck="false" placeholder="City" required/>

                                </div>

                                <div class="obj three">

                                    <label>Zip Code</label>
                                    <input type="number" name="zipCode" maxlength="5" spellcheck="false" placeholder="Zip Code" required/>

                                </div>

                                <div class="obj three">

                                    <label>Country</label>
                                    <input type="text" name="country" spellcheck="false" placeholder="Country" required/>

                                </div>

                                <div class="obj">

                                    <label>Email</label>
                                    <input type="email" name="email" spellcheck="false" placeholder="Email" required/>

                                </div>

                                <div class="obj">

                                    <label>Contact</label>
                                    <input class="two" type="text" name="nameContact1" spellcheck="false" placeholder="Name Contact 1">
                                    <input class="two" type="text" name="nameContact2" spellcheck="false" placeholder="Name Contact 2">

                                </div>

                                <div class="obj">

                                    <label>Phone</label>
                                    <input type="number" name="phone" spellcheck="false" placeholder="Phone Number" required/>

                                </div>

                            </div>

                            <div class="group">

                                <span class="groupTitle">Pick Up Address <i>if different from shipper</i></span>

                                <div class="obj">

                                    <label>Name</label>
                                    <input type="text" name="nameShipper" spellcheck="false" placeholder="Name" required/>

                                </div>

                                <div class="obj">

                                    <label>Street</label>
                                    <textarea name="street" spellcheck="false" placeholder="Street" required></textarea>

                                </div>

                                <div class="obj three">

                                    <label>City</label>
                                    <input type="text" name="city" spellcheck="false" placeholder="City" required/>

                                </div>

                                <div class="obj three">

                                    <label>Zip Code</label>
                                    <input type="number" name="zipCode" maxlength="5" spellcheck="false" placeholder="Zip Code" required/>

                                </div>

                                <div class="obj three">

                                    <label>Country</label>
                                    <input type="text" name="country" spellcheck="false" placeholder="Country" required/>

                                </div>

                                <div class="obj">

                                    <label>Email</label>
                                    <input type="email" name="email" spellcheck="false" placeholder="Email" required/>

                                </div>

                                <div class="obj">

                                    <label>Contact</label>
                                    <input class="two" type="text" name="nameContact1" spellcheck="false" placeholder="Name Contact 1">
                                    <input class="two" type="text" name="nameContact2" spellcheck="false" placeholder="Name Contact 2">

                                </div>

                                <div class="obj">

                                    <label>Phone</label>
                                    <input type="number" name="phone" spellcheck="false" placeholder="Phone Number" required/>

                                </div>

                            </div>

                            <div class="group">

                                <span class="groupTitle">Consignee (on HBL/HAWB)</span>

                                <div class="obj">

                                    <label>Name</label>
                                    <input type="text" name="nameShipper" spellcheck="false" placeholder="Name" required/>

                                </div>

                                <div class="obj">

                                    <label>Street</label>
                                    <textarea name="street" spellcheck="false" placeholder="Street" required></textarea>

                                </div>

                                <div class="obj three">

                                    <label>City</label>
                                    <input type="text" name="city" spellcheck="false" placeholder="City" required/>

                                </div>

                                <div class="obj three">

                                    <label>Zip Code</label>
                                    <input type="number" name="zipCode" maxlength="5" spellcheck="false" placeholder="Zip Code" required/>

                                </div>

                                <div class="obj three">

                                    <label>Country</label>
                                    <input type="text" name="country" spellcheck="false" placeholder="Country" required/>

                                </div>

                                <div class="obj">

                                    <label>Email</label>
                                    <input type="email" name="email" spellcheck="false" placeholder="Email" required/>

                                </div>

                                <div class="obj">

                                    <label>Contact</label>
                                    <input class="two" type="text" name="nameContact1" spellcheck="false" placeholder="Name Contact 1">
                                    <input class="two" type="text" name="nameContact2" spellcheck="false" placeholder="Name Contact 2">

                                </div>

                                <div class="obj">

                                    <label>Phone</label>
                                    <input type="number" name="phone" spellcheck="false" placeholder="Phone Number" required/>

                                </div>

                            </div>

                            <div class="group">

                                <span class="groupTitle">Delivery Address <i>if different from shipper</i></span>

                                <div class="obj">

                                    <label>Name</label>
                                    <input type="text" name="nameShipper" spellcheck="false" placeholder="Name" required/>

                                </div>

                                <div class="obj">

                                    <label>Street</label>
                                    <textarea name="street" spellcheck="false" placeholder="Street" required></textarea>

                                </div>

                                <div class="obj three">

                                    <label>City</label>
                                    <input type="text" name="city" spellcheck="false" placeholder="City" required/>

                                </div>

                                <div class="obj three">

                                    <label>Zip Code</label>
                                    <input type="number" name="zipCode" maxlength="5" spellcheck="false" placeholder="Zip Code" required/>

                                </div>

                                <div class="obj three">

                                    <label>Country</label>
                                    <input type="text" name="country" spellcheck="false" placeholder="Country" required/>

                                </div>

                                <div class="obj">

                                    <label>Email</label>
                                    <input type="email" name="email" spellcheck="false" placeholder="Email" required/>

                                </div>

                                <div class="obj">

                                    <label>Contact</label>
                                    <input class="two" type="text" name="nameContact1" spellcheck="false" placeholder="Name Contact 1">
                                    <input class="two" type="text" name="nameContact2" spellcheck="false" placeholder="Name Contact 2">

                                </div>

                                <div class="obj">

                                    <label>Phone</label>
                                    <input type="number" name="phone" spellcheck="false" placeholder="Phone Number" required/>

                                </div>

                            </div>

                            <div class="group">

                                <span class="groupTitle">Notify Party</span>

                                <div class="obj">

                                    <label>Name</label>
                                    <input type="text" name="nameShipper" spellcheck="false" placeholder="Name" required/>

                                </div>

                                <div class="obj">

                                    <label>Street</label>
                                    <textarea name="street" spellcheck="false" placeholder="Street" required></textarea>

                                </div>

                                <div class="obj three">

                                    <label>City</label>
                                    <input type="text" name="city" spellcheck="false" placeholder="City" required/>

                                </div>

                                <div class="obj three">

                                    <label>Zip Code</label>
                                    <input type="number" name="zipCode" maxlength="5" spellcheck="false" placeholder="Zip Code" required/>

                                </div>

                                <div class="obj three">

                                    <label>Country</label>
                                    <input type="text" name="country" spellcheck="false" placeholder="Country" required/>

                                </div>

                                <div class="obj">

                                    <label>Email</label>
                                    <input type="email" name="email" spellcheck="false" placeholder="Email" required/>

                                </div>

                                <div class="obj">

                                    <label>Contact</label>
                                    <input class="two" type="text" name="nameContact1" spellcheck="false" placeholder="Name Contact 1">
                                    <input class="two" type="text" name="nameContact2" spellcheck="false" placeholder="Name Contact 2">

                                </div>

                                <div class="obj">

                                    <label>Phone</label>
                                    <input type="number" name="phone" spellcheck="false" placeholder="Phone Number" required/>

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
                                    <input type="text" name="to" spellcheck="false" placeholder="To." required/>

                                </div>

                                <div class="obj two">

                                    <label>Copy</label>
                                    <input type="text" name="copy" spellcheck="false" placeholder="Copy." required/>

                                </div>

                                <div class="obj two">

                                    <label>Copy</label>
                                    <input type="text" name="copy2" spellcheck="false" placeholder="Copy." required/>

                                </div>

                            </div>

                            <div class="group">

                                <span class="groupTitle">Ordering Customer</span>

                                <div class="obj">

                                    <label>Name</label>
                                    <input type="text" name="name" spellcheck="false" placeholder="Name" required/>

                                </div>

                                <div class="obj">

                                    <label>Street</label>
                                    <textarea name="street" spellcheck="false" placeholder="Street" required></textarea>

                                </div>

                                <div class="obj three">

                                    <label>City</label>
                                    <input type="text" name="city" spellcheck="false" placeholder="City" required/>

                                </div>

                                <div class="obj three">

                                    <label>Zip Code</label>
                                    <input type="number" name="zipCode" maxlength="5" spellcheck="false" placeholder="Zip Code" required/>

                                </div>

                                <div class="obj three">

                                    <label>Country</label>
                                    <input type="text" name="country" spellcheck="false" placeholder="Country" required/>

                                </div>

                                <div class="obj">

                                    <label>Email</label>
                                    <input type="email" name="email" spellcheck="false" placeholder="Email" required/>

                                </div>

                                <div class="obj">

                                    <label>Contact</label>
                                    <input type="text" name="nameContact" spellcheck="false" placeholder="Name Contact">

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