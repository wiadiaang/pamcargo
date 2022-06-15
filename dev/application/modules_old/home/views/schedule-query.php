

<!-- HEAD PHP -->
<?php $this->load->view('struktur/header');?>


<!-- navbar PHP -->
<?php $this->load->view('struktur/navbar');?>


    <div class="header-services">
        <div class="vertical-align text-center">
            <h1 class="text-center"><strong>Schedule Query</strong><br></h1>
        </div>
    </div>
    <section class="schedule-menu">
        <div class="container schedule-menu">
            <div class="row schedule-menu-content" style="padding-top: 15px;">
                <div class="col-lg-3">
                    <div class="sidebar">
                        <h3 class="text-center" style="padding-top: 10px;font-style: normal;font-weight: bold;">Tools</h3>
                        <ul>
                            <!-- <li class="li-tools"><i class="fa fa-caret-right"></i>&nbsp;<a href="monthly_schedule.php">Monthly Schedule</a><br></li> -->
                            <li class="li-tools"><i class="fa fa-caret-right"></i>&nbsp;<a href="<?= base_url('schedule-query');?>">Schedule Query</a><br></li>
                            <li class="li-tools"><i class="fa fa-caret-right"></i>&nbsp;<a href="<?= base_url('rate-request');?>">Rate Request</a><br></li>
                            <!-- <li class="li-tools"><i class="fa fa-caret-right"></i>&nbsp;<a href="#">Track &amp; Trace</a><br></li> -->
                        </ul><img src="assets/img/locations.jpg" class="img-tool">
                        <p style="font-size: 13px;padding-right: 10px;padding-left: 5px;padding-top: 10px;margin-left: 10px;margin-right: 5px;">Let us know what can we do for you. Contact us today!<br></p>
                        <a href="contact-us">
                        <button class="btn btn-primary btn-tool" type="button" style="margin-bottom: 10px;">Contact Us</button></div>
                    </a>
                    </div>
                <div class="col-lg-9" style="padding: 0;">
                    <div class="text-center active-bar">
                        <h2 class="text-center heading-query"><strong>Our Schedule Query</strong></h2>
                        <hr>
                        <p class="text-left" style="padding: 20px;font-family: ABeeZee, sans-serif;"><br>Plan the transport of your shipment easily using our schedule (Europe only, please download schedule for other destinations).<br><br>Select Origin Port :</p>
                        <div class="row" style="margin: 0;">
                            <div class="col">
                                <form action="<?= base_url('schedule-query-result')?>" method="POST">
                                    <div class="form-row">
                                        <div class="col-lg-8 col-xl-8">
                                            <select  name="departure_id" id="departure_id" class="dropdown-query" style="padding: 10px 0 10px 10px;">
                                                <?php 
                                                    $data = $this->db->query("SELECT * FROM departure order by departure_name ASC ")->result();
                                                    foreach ($data as $key) { ?>
                                                    <option value="<?= $key->departure_id; ?>"><?= $key->departure_name; ?></option>
                                                        
                                                  <?php  } ?>
                                            
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-xl-4"><input type="submit" class="dropdown-query view-query" value="View"/></div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                        <div class="row" 
                        style=" margin: 0;
                                padding: 20px;     
                                display: flex;
                                justify-content: center;
                                align-items: center;">
                            <div class="col-lg-7" style="margin: 5px;">
                                
                                <form action="monthly_schedule.php">
									<p><br>Download our complete full monthly schedule</p>
									<button onclick="ada();return false;" class="btn btn-primary" type="button" style="width: 70%;border-radius: 20px;">Download All Schedule   </button></form>
                            </div>
                            <div class="col"><img src="assets/img/img25.jpg" style="width: 100%;height: 90%;padding-top: 50px;margin-top: 20px;"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    

    <!-- FOOTER PHP -->
<?php $this->load->view('struktur/footer');?>




<div id="divToPrint" style="display:none;">
	<?php
		$sql = $this->db->query("SELECT * FROM departure where active = '1' ORDER BY departure_id ASC")->result_array();
		
		foreach($sql as $rr1){
	?>

	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5><?php echo $rr1['departure_name'];?></h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
							<?php
								/*$num_rows = mysql_num_rows($sql1); 
								echo $num_rows ;*/
                                $id = $rr1['departure_id'];
		                        $sql2 = $this->db->query("SELECT * FROM schedule where departure_id='$id' AND transit_time !='' ")->result_array();
                                
								foreach($sql2 as $r2){ 
							?>
							<tbody>
								<tr>
									<td style="text-align: center;"><?php echo $r2['mother_vessel_name']; ?></td>
									<td style="text-align: center;"><?php echo $r2['voyage_mother']; ?></td>
									<td style="text-align: center;"><?php echo $r2['cfs_closing']; ?></td>
									<td style="width: 100px;text-align: center;"><?php echo $r2['closing_time_for_delivery']; ?></td>
									<td style="width: 100px;text-align: center;"><?php echo $r2['time']; ?></td>
									<td style="width: 100px;text-align: center;"><?php echo $r2['etd_departure']; ?></td>
									<td style="width: 100px;text-align: center;"><?php echo $r2['etd_transit_airport']; ?></td>
									<td style="width: 100px;text-align: center;"><?php echo $r2['eta']; ?></td>
									<td style="text-align: center;"><?php echo $r2['transit_time']; ?></td>
									<td style="text-align: center;width: 100px;"><?php echo $r2['eta_us']; ?></td>
									<td style="text-align: center;"><?php echo $r2['transit_time_us']; ?></td>
								</tr>
							</tbody>
							<?php } ?>
						</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</div>

<script type="text/javascript">
		
		function ada(){
					console.log("a");
					var divToPrint = document.getElementById('divToPrint');
							var popupWin = window.open('', '_blank', 'width=2048,height=1000');
							popupWin.document.open();
							popupWin.document.title = "";
							popupWin.document.write('<html><style media="print">'
			+'@page' 
			+'{'
				+'size: auto;'  
				+'margin: 2mm;'
			+'}'   
			+'</style><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
							popupWin.document.close();  
				}


		</script>