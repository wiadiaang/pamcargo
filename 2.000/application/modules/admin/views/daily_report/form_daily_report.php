
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

    <h3>DAILY REPORT</h3>

    <div class="block">

        <div class="group">

            <div class="obj" style="margin-bottom: 0">

                <label class="four">TO: SAT - DXB/NAVEN</label>
                <label class="four">No: 8367</label>
                <label class="four">Friday, 12 Juli 2019</label>
                <label class="four">PAGE #1 OF</label>

            </div>

            <table>
        
                <thead>

                    <tr>
                        
                        <th>No.</th>
                        <th>Shipper</th>
                        <th>Consignee</th>
                        <th>Dest</th>
                        <th>Order No.</th>
                        <th>Art No.</th>
                        <th>COMM</th>
                        <th>QTY</th>
                        <th>PKGS</th>
                        <th>Gr. Wt.</th>
                        <th>CBM</th>
                        <th>TOP</th>
                        <th>1st Vessel Name</th>
                        <th>ETD</th>
                        <th>CTD No.</th>
                        <th>RTG</th>
                        <th>Remark</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>
                        
                        <td>270</td>
                        <td>APL LOG-JKT</td>
                        <td>ESPRIT</td>
                        <td>DUS</td>
                        <td>4700101606</td>
                        <td>099EO1E012</td>
                        <td>GAR</td>
                        <td>7.930</td>
                        <td>133</td>
                        <td>1.928.50</td>
                        <td>12.77</td>
                        <td>C</td>
                        <td>-</td>
                        <td>-</td>
                        <td>3206469</td>
                        <td>DXB</td>
                        <td>17 JUL</td>

                    </tr>

                    <tr>
                        
                        <td>261</td>
                        <td>GGINDONESIA</td>
                        <td>S.OLIVER</td>
                        <td>FRA</td>
                        <td>4014705632</td>
                        <td>81.908.13.227</td>
                        <td>GAR</td>
                        <td>1.532</td>
                        <td>30</td>
                        <td>306.40</td>
                        <td>1.53</td>
                        <td>C</td>
                        <td>NYK FUJI V.083N</td>
                        <td>15/7</td>
                        <td>3206459</td>
                        <td>DXB</td>
                        <td>08 JUL</td>

                    </tr>

                    <tr>
                        
                        <td>266</td>
                        <td>CONTINENT 8</td>
                        <td>S.OLIVER</td>
                        <td>FRA</td>
                        <td>100056694</td>
                        <td>03.899.51.5247</td>
                        <td>GAR</td>
                        <td>2.633</td>
                        <td>550</td>
                        <td>2.084.00</td>
                        <td>37.80</td>
                        <td>C</td>
                        <td>-</td>
                        <td>-</td>
                        <td>3206465</td>
                        <td>DXB</td>
                        <td>11 JUL</td>

                    </tr>

                </tbody>

            </table>

            <table>

                <tbody>

                    <tr class="noBorder">

                        <td style="width: 45px">270</td>
                        <td colspan="3" style="text-align: left">THE GOODS WILL BE READY ON 17 JUL 2019. RTG DXB ON CC BASIS. PLAN FOR NEXT WEEKEND SCHDL. <b/>TO SAT-STR & SAT-DXB, PSE NT.</td>

                    </tr>

                    <tr class="noBorder">

                        <td></td>
                        <td style="width: 100px; text-align: left"><b>ITEM #270</b></td>
                        <td><b>SHIP #001</b></td>
                        <td style="text-align: left"><b>DC: MEYER & MEYER (DE11-2000), IHD: 07/24/2019</b></td>

                    </tr>

                    <tr class="noBorder">

                        <td style="width: 45px">261</td>
                        <td colspan="3" style="text-align: left">THE GOODS WILL BE READY ON 08 JUL 2019. RTG DXB ON CC BASIS. PLAN FOR THIS WEEKEND SCHDL. <b/>TO SAT-STR & SAT-DXB, PSE NT.</td>

                    </tr>

                    <tr class="noBorder">

                        <td style="width: 45px">266</td>
                        <td colspan="3" style="text-align: left">+267 THE GOODS WILL BE READY ON 08 JUL 2019. RTG DXB ON CC BASIS. PLAN FOR NEXT WEEKEND SCHDL. <b/>TO SAT-STR & SAT-DXB, PSE NT.</td>

                    </tr>

                    <tr class="noBorder">

                        <td style="width: 45px"></td>
                        <td colspan="3" style="text-align: left; font-weight: 600">BEST REGARDS - SEPNI @ SATINDO - JAKARTA<br/>
                        TO ALL SAT's OFFICE : PSE BE NOTED THAT WE NEED THE CONFIRMATION ABOUT SHIPMENT ROUTING/METHODS LATEST ON<br/>EVERY THURSDAY @ 15:00 HRS JKT LT FOR APL SCHEDULE AND EVERY TUESDAY @ 15:00 HRS JKT LT FOR HMM SCHEDULE.</td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

</section>






      </div>
    </div>
</div>

<script>

	$('#daily').addClass('active');						
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