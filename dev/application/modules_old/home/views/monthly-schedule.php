<!DOCTYPE html>
<html>

<!-- HEAD PHP -->
<?php $this->load->view('struktur/header');?>


<body>

<!-- navbar PHP -->
<?php $this->load->view('struktur/navbar');?>

    <div class="header-services">
        <div class="vertical-align text-center">
            <h1 class="text-center d-sm-block" style="font-size: 4em;"><strong>Montly Schedule</strong></h1>
        </div>
    </div>
    <section class="schedule-menu">
        <div class="container schedule-menu">
            <div class="row schedule-menu-content" style="padding-top: 15px;">
                <div class="col-lg-3">
                    <div class="sidebar">
                        <h3 class="text-center" style="padding-top: 10px;font-style: normal;font-weight: bold;">Tools</h3>
                        <ul>
                            <li class="li-tools"><i class="fa fa-caret-right"></i>&nbsp;<a href="monthly_schedule.php">Monthly Schedule</a><br></li>
                            <li class="li-tools"><i class="fa fa-caret-right"></i>&nbsp;<a href="schedule_query.php">Schedule Query</a><br></li>
                            <li class="li-tools"><i class="fa fa-caret-right"></i>&nbsp;<a href="rate_request.php">Rate Request</a><br></li>
                            <!-- <li class="li-tools"><i class="fa fa-caret-right"></i>&nbsp;<a href="#">Track &amp; Trace</a><br></li> -->
                        </ul><img src="assets/img/locations.jpg" class="img-tool">
						
						<a href="contact-us.php">
								<button class="btn btn-primary btn-tool" type="button" style="margin-bottom: 10px;">Contact Us</button></div>
							</a>
                </div>
                <div class="col-lg-9" style="padding: 0;">
                    <div class="active-bar">
                        <div class="row" style="margin: 0;padding: 20px;">
                            <div class="col-lg-7" style="margin: 5px;">
                                <h1 class="text-center" style="font-size: 30px;padding-top: 20px;"><strong>SAILING SCHEDULE</strong><br></h1>
                                <hr>
                                <form action="monthly_schedule.php">
									<p><br>Download our complete full monthly schedule<br><br><br><br>*&nbsp;Choose Destination Region :<br></p>
									<button onclick="ada();return false;" class="btn btn-primary" type="button" style="width: 70%;border-radius: 20px;">Download Europe</button></form>
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
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>China - Ningbo via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL GLOBE</td>
									<td style="text-align: center;">TBA </td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">23-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
									<td style="text-align: center;width: 100px;">15-06-2019</td>
									<td style="text-align: center;">20 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO SHIPPING PISCES</td>
									<td style="text-align: center;">TBA </td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
									<td style="text-align: center;width: 100px;">22-06-2019 </td>
									<td style="text-align: center;">20 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">APL PARIS</td>
									<td style="text-align: center;">0SV41W1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">30-06-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER UNIFIC</td>
									<td style="text-align: center;">0GN25W1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="width: 100px;text-align: center;">03-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">05-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM VELA</td>
									<td style="text-align: center;">0SV45W1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">07-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER URSULA</td>
									<td style="text-align: center;">0GN2BW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="width: 100px;text-align: center;">09-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">11-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">APL SANTIAGO</td>
									<td style="text-align: center;">0SV49W1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="width: 100px;text-align: center;">13-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">15-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM PEGASUS</td>
									<td style="text-align: center;">0SV4DW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">18-07-2019</td>
									<td style="width: 100px;text-align: center;">19-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">21-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EMC TBN 14</td>
									<td style="text-align: center;">0GN2ZW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="width: 100px;text-align: center;">03-07-2019</td>
									<td style="width: 100px;text-align: center;">22-07-2019</td>
									<td style="width: 100px;text-align: center;">23-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">25-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM LYRA</td>
									<td style="text-align: center;">0SV4HW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">06-07-2019</td>
									<td style="width: 100px;text-align: center;">25-07-2019</td>
									<td style="width: 100px;text-align: center;">26-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">28-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EMC TBN 15</td>
									<td style="text-align: center;">0GN31W1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="width: 100px;text-align: center;">10-07-2019</td>
									<td style="width: 100px;text-align: center;">29-07-2019</td>
									<td style="width: 100px;text-align: center;">30-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">01-08-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">ITAL UNIVERSO</td>
									<td style="text-align: center;">TBA </td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">15-07-2019</td>
									<td style="width: 100px;text-align: center;">17-07-2019</td>
									<td style="width: 100px;text-align: center;">05-08-2019</td>
									<td style="width: 100px;text-align: center;">06-08-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">08-08-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>China - Qingdao via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL GLOBE</td>
									<td style="text-align: center;">032W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">18-05-2019</td>
									<td style="width: 100px;text-align: center;">23-05-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">15-06-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MALIK AL ASHTAR</td>
									<td style="text-align: center;">0NM2FW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">23-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">18-06-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO SHIPPING PISCES</td>
									<td style="text-align: center;">004W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-05-2019</td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">25-06-2019 </td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL SATURN</td>
									<td style="text-align: center;">0NM2HW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">25-06-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">APL PARIS</td>
									<td style="text-align: center;">0SV41W1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">30-06-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UMM SALAL</td>
									<td style="text-align: center;">0NM2JW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">02-07-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM VELA</td>
									<td style="text-align: center;">0SV45W1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">07-07-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">APL SANTIAGO</td>
									<td style="text-align: center;">0SV49W1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="width: 100px;text-align: center;">12-07-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">14-07-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM PEGASUS</td>
									<td style="text-align: center;">0SV4DW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">18-07-2019</td>
									<td style="width: 100px;text-align: center;">19-07-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">21-07-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM LYRA</td>
									<td style="text-align: center;">0SV4HW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">25-07-2019</td>
									<td style="width: 100px;text-align: center;">26-07-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">28-07-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM TUTICORIN</td>
									<td style="text-align: center;">0SV4LW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="width: 100px;text-align: center;">10-07-2019</td>
									<td style="width: 100px;text-align: center;">01-08-2019</td>
									<td style="width: 100px;text-align: center;">03-08-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">05-08-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>China - Shanghai via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL GLOBE</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">22-05-2019</td>
									<td style="width: 100px;text-align: center;">25-05-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">15-06-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO SHIPPING PISCES</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">22-06-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL SATURN</td>
									<td style="text-align: center;">0NM2HW</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">27-06-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSOCO SHIPPING HIMALAYAS</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">26-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">29-06-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UMM SALAL</td>
									<td style="text-align: center;">0NM2JW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">01-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL ATLANTIC OCEAN</td>
									<td style="text-align: center;">029W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">06-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL JUPITER</td>
									<td style="text-align: center;">0NM2LW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="width: 100px;text-align: center;">06-07-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">08-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO SHIPPING SOLAR</td>
									<td style="text-align: center;">02W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="width: 100px;text-align: center;">12-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">14-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TAYMA</td>
									<td style="text-align: center;">0NM2NW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="width: 100px;text-align: center;">13-07-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">14-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL INDIAN OCEAN</td>
									<td style="text-align: center;">013W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">18-07-2019</td>
									<td style="width: 100px;text-align: center;">19-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">21-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">THESEUS</td>
									<td style="text-align: center;">06W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="width: 100px;text-align: center;">22-07-2019</td>
									<td style="width: 100px;text-align: center;">23-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">25-07-219</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>China - Xiamen via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">YM PLUM</td>
									<td style="text-align: center;">154W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">23-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">YM PINE</td>
									<td style="text-align: center;">147W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">30-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">YM GREEN</td>
									<td style="text-align: center;">146W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">07-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">YM CYPRESS</td>
									<td style="text-align: center;">163W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="width: 100px;text-align: center;">26-06-2019</td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="width: 100px;text-align: center;">12-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">14-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">YM COSMOS</td>
									<td style="text-align: center;">146W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="width: 100px;text-align: center;">03-07-2019</td>
									<td style="width: 100px;text-align: center;">18-07-2019</td>
									<td style="width: 100px;text-align: center;">19-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">21-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">YM SUCCESS</td>
									<td style="text-align: center;">142W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="width: 100px;text-align: center;">10-07-2019</td>
									<td style="width: 100px;text-align: center;">25-07-2019</td>
									<td style="width: 100px;text-align: center;">26-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">28-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>China - Hong Kong via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">OOCL EGYPT</td>
									<td style="text-align: center;">0NM2DW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">23-05-2019</td>
									<td style="width: 100px;text-align: center;">25-05-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">12-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MALIK AL ASHTAR</td>
									<td style="text-align: center;">0NM2FW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">19-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL SATURN</td>
									<td style="text-align: center;">0NM2HW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">26-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UMM SALAL</td>
									<td style="text-align: center;">0NM2JW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">02-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL JUPITER</td>
									<td style="text-align: center;">0NM2LW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">06-07-2019</td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">10-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TAYMA</td>
									<td style="text-align: center;">0NM2NW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">13-07-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">16-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EMC TBN 8</td>
									<td style="text-align: center;">0NM2PW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">06-07-2019</td>
									<td style="width: 100px;text-align: center;">20-07-2019</td>
									<td style="width: 100px;text-align: center;">21-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">23-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UNAYZAH</td>
									<td style="text-align: center;">0NM2RW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="width: 100px;text-align: center;">13-07-2019</td>
									<td style="width: 100px;text-align: center;">27-07-2019</td>
									<td style="width: 100px;text-align: center;">28-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">30-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">OOCL EGYPT</td>
									<td style="text-align: center;">0NM2TW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">18-07-2019</td>
									<td style="width: 100px;text-align: center;">20-07-2019</td>
									<td style="width: 100px;text-align: center;">03-08-2019</td>
									<td style="width: 100px;text-align: center;">04-08-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">06-08-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>India - Cochin via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">ALS CLIVIA</td>
									<td style="text-align: center;">006W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-05-2019</td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;">06-06-2019</td>
									<td style="text-align: center;">11 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MOGRAL</td>
									<td style="text-align: center;">012W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;">13-06-2019</td>
									<td style="text-align: center;">11 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER DELIGHT </td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;">20-06-2019</td>
									<td style="text-align: center;">11 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">VARADA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;">27-06-2019</td>
									<td style="text-align: center;">11 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">ALS CLIVIA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;">03-07-2019</td>
									<td style="text-align: center;">11 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Indonesia - Jakarta via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL GLOBE</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-05-2019</td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="text-align: center;">14 days</td>
									<td style="text-align: center;width: 100px;">14-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO SHIPPING PISCES</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="text-align: center;">14 days</td>
									<td style="text-align: center;width: 100px;">21-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UMM SALAL</td>
									<td style="text-align: center;">014W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="text-align: center;">14 DAYS</td>
									<td style="text-align: center;width: 100px;">28-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL JUPITER</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="text-align: center;">14 DAYS</td>
									<td style="text-align: center;width: 100px;">06-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TAYMA</td>
									<td style="text-align: center;">008W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="width: 100px;text-align: center;">12-07-2019</td>
									<td style="text-align: center;">14 DAYS</td>
									<td style="text-align: center;width: 100px;">13-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">THESEUS</td>
									<td style="text-align: center;">016W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">18-07-2019</td>
									<td style="width: 100px;text-align: center;">19-07-2019</td>
									<td style="text-align: center;">14 DAYS</td>
									<td style="text-align: center;width: 100px;">20-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Indonesia - Semarang via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL MERCURY</td>
									<td style="text-align: center;">062W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">20-05-2019</td>
									<td style="width: 100px;text-align: center;">22-05-2019</td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">10-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">OOCL EGYPT</td>
									<td style="text-align: center;">022W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">22-05-2019</td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">13-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MALIK AL ASHTAR</td>
									<td style="text-align: center;">033W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">20-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL SATURN</td>
									<td style="text-align: center;">0NM2HW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">25-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UMM SALAL</td>
									<td style="text-align: center;">0NM2JW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">02-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL JUPITER</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">06-07-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">09-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TAYMA</td>
									<td style="text-align: center;">008W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">13-07-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">16-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">THESEUS</td>
									<td style="text-align: center;">016W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">06-07-2019</td>
									<td style="width: 100px;text-align: center;">20-07-2019</td>
									<td style="width: 100px;text-align: center;">21-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">23-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UNAYZAH</td>
									<td style="text-align: center;">014W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="width: 100px;text-align: center;">13-07-2019</td>
									<td style="width: 100px;text-align: center;">27-07-2019</td>
									<td style="width: 100px;text-align: center;">28-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">30-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Indonesia - Surabaya via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">OOCL EGYPT</td>
									<td style="text-align: center;">0NM2DW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">21-05-2019</td>
									<td style="width: 100px;text-align: center;">23-05-2019</td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">11-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL GLOBE</td>
									<td style="text-align: center;">0GT0HW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-05-2019</td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">15-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO SHIPPING PISCES</td>
									<td style="text-align: center;">0GT0JW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">22-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL SATURN</td>
									<td style="text-align: center;">0NM2HW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2016</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">25-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UMM SALAL</td>
									<td style="text-align: center;">014W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">02-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL JUPITER</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">06-07-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">09-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TAYMA</td>
									<td style="text-align: center;">008W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">13-07-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">16-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">THESEUS</td>
									<td style="text-align: center;">016W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">20-07-2019</td>
									<td style="width: 100px;text-align: center;">21-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">23-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UNAYZAH</td>
									<td style="text-align: center;">014W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">09-07-2019</td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="width: 100px;text-align: center;">27-07-2019</td>
									<td style="width: 100px;text-align: center;">28-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">30-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">OOCL EGYPT</td>
									<td style="text-align: center;">023W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">16-07-2019</td>
									<td style="width: 100px;text-align: center;">18-07-2019</td>
									<td style="width: 100px;text-align: center;">03-08-2019</td>
									<td style="width: 100px;text-align: center;">04-08-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">06-08-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Malaysia - Port Klang via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER URSULA</td>
									<td style="text-align: center;">154W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">08-05-2019</td>
									<td style="width: 100px;text-align: center;">10-05-2019</td>
									<td style="width: 100px;text-align: center;">21-05-2019</td>
									<td style="width: 100px;text-align: center;">22-05-2019</td>
									<td style="text-align: center;">12 DAYS</td>
									<td style="text-align: center;width: 100px;">24-05-2019</td>
									<td style="text-align: center;">14 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER URBAN</td>
									<td style="text-align: center;">150W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">15-05-2019</td>
									<td style="width: 100px;text-align: center;">17-05-2019</td>
									<td style="width: 100px;text-align: center;">28-05-2019</td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="text-align: center;">12 DAYS</td>
									<td style="text-align: center;width: 100px;">01-06-2019</td>
									<td style="text-align: center;">14 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER UNITY</td>
									<td style="text-align: center;">160W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">22-05-2019</td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="text-align: center;">12 DAYS</td>
									<td style="text-align: center;width: 100px;">07-06-2019</td>
									<td style="text-align: center;">14 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;">004W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="text-align: center;">12 DAYS</td>
									<td style="text-align: center;width: 100px;">14-06-2019</td>
									<td style="text-align: center;">14 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Sri Lanka - Colombo via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">MALIAKOS</td>
									<td style="text-align: center;">1904W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">20-05-2019</td>
									<td style="width: 100px;text-align: center;">22-05-2019</td>
									<td style="width: 100px;text-align: center;">28-05-2019</td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;">31-05-2019</td>
									<td style="text-align: center;">12 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER DELUX</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;">09-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL SYDNEY</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;">16-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MP THE BELICHICK</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;">23-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">BEIJING BRIDGE</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;">30-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER DECENT</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="width: 100px;text-align: center;">26-06-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;">07-07-2019</td>
									<td style="text-align: center;">10 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MALIAKOS</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="width: 100px;text-align: center;">03-07-2019</td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="width: 100px;text-align: center;">12-07-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;">14-07-2019</td>
									<td style="text-align: center;">10 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Taiwan - Kaohsiung via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI HOPE</td>
									<td style="text-align: center;">032W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">20-05-2019</td>
									<td style="width: 100px;text-align: center;">23-05-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">12-06-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI HONOUR</td>
									<td style="text-align: center;">015W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">19-06-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI RESPECT</td>
									<td style="text-align: center;">015W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">26-06-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI DRIVE</td>
									<td style="text-align: center;">029W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">03-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI PRIDE</td>
									<td style="text-align: center;">029W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">09-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI PROMISE</td>
									<td style="text-align: center;">007W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="width: 100px;text-align: center;">15-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">16-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI VICTORY </td>
									<td style="text-align: center;">031W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">21-07-2019</td>
									<td style="width: 100px;text-align: center;">22-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">23-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Thailand - Bangkok via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI HOPE</td>
									<td style="text-align: center;">032W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">22-05-2019</td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">12-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI HONOUR</td>
									<td style="text-align: center;">029W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">19-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI RESPECT</td>
									<td style="text-align: center;">015W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">26-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI DRIVE</td>
									<td style="text-align: center;">029W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">03-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI PRIDE</td>
									<td style="text-align: center;">029W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">10-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HMM PROMIE</td>
									<td style="text-align: center;">007W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">26-06-2019</td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="width: 100px;text-align: center;">15-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">17-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI VICTORY</td>
									<td style="text-align: center;">031W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">03-07-2019</td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="width: 100px;text-align: center;">21-07-2019</td>
									<td style="width: 100px;text-align: center;">22-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
									<td style="text-align: center;width: 100px;">24-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Vietnam - Haiphong via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">APL YANGSHAN</td>
									<td style="text-align: center;">0SV3TW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">23-05-2019</td>
									<td style="width: 100px;text-align: center;">25-05-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="text-align: center;">20 DAYS</td>
									<td style="text-align: center;width: 100px;">16-06-2019</td>
									<td style="text-align: center;">22 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO SHIPPING PISCES </td>
									<td style="text-align: center;">003W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
									<td style="text-align: center;width: 100px;">22-06-2019</td>
									<td style="text-align: center;">20 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO SHIPPING HIMALAYAS</td>
									<td style="text-align: center;">015W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">26-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
									<td style="text-align: center;width: 100px;">29-06-2019</td>
									<td style="text-align: center;">20 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL ATLANTIC OCEAN</td>
									<td style="text-align: center;">029W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">03-07-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
									<td style="text-align: center;width: 100px;">06-07-2019</td>
									<td style="text-align: center;">20 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO SHIPPING SOLAR</td>
									<td style="text-align: center;">002W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="width: 100px;text-align: center;">10-07-2019</td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
									<td style="text-align: center;width: 100px;">13-07-2019</td>
									<td style="text-align: center;">20 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL INDIAN OCEAN</td>
									<td style="text-align: center;">031W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="width: 100px;text-align: center;">17-07-2019</td>
									<td style="width: 100px;text-align: center;">18-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
									<td style="text-align: center;width: 100px;">20-07-2019</td>
									<td style="text-align: center;">20 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Vietnam - Ho Chi Minh via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">OOCL EGYPT</td>
									<td style="text-align: center;">0NM2DW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">13-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MALIK AL ASHTAR</td>
									<td style="text-align: center;">0NM2FW1MA </td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">19-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL SATURN</td>
									<td style="text-align: center;">0NM2HW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">26-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UMM SALAL</td>
									<td style="text-align: center;">0NM2JW1MA </td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">03-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">APL TBN 4</td>
									<td style="text-align: center;">0NM2LW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">10-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TAYMA</td>
									<td style="text-align: center;">0NM2NW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="width: 100px;text-align: center;">15-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">17-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>India - Mumbai via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">ALS FIDES</td>
									<td style="text-align: center;">909</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="text-align: center;">06 DAYS</td>
									<td style="text-align: center;width: 100px;">06-06-2019</td>
									<td style="text-align: center;">08 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MAERSK KITHIRA</td>
									<td style="text-align: center;">922W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="text-align: center;">06 DAYS</td>
									<td style="text-align: center;width: 100px;">07-06-2019</td>
									<td style="text-align: center;">08 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">FOLEGANDROS</td>
									<td style="text-align: center;">014</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="text-align: center;">06 DAYS</td>
									<td style="text-align: center;width: 100px;">10-06-2019</td>
									<td style="text-align: center;">08 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MAERSK KLIAPEDA</td>
									<td style="text-align: center;">923W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="text-align: center;">06 DAYS</td>
									<td style="text-align: center;width: 100px;">14-06-2019</td>
									<td style="text-align: center;">08 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">BLANDINE</td>
									<td style="text-align: center;">19022</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="text-align: center;">06 DAYS</td>
									<td style="text-align: center;width: 100px;">18-06-2019</td>
									<td style="text-align: center;">08 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Malaysia - Penang via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO OCEANIA</td>
									<td style="text-align: center;">0MZ61W1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">07-05-2019</td>
									<td style="width: 100px;text-align: center;">09-05-2019</td>
									<td style="width: 100px;text-align: center;">22-05-2019</td>
									<td style="width: 100px;text-align: center;">23-05-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">25-05-2019</td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER URBAN</td>
									<td style="text-align: center;">0GN0ZW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">13-05-2019</td>
									<td style="width: 100px;text-align: center;">15-05-2019</td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">28-05-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">30-05-2019</td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER UNITY</td>
									<td style="text-align: center;">0GN17W1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">21-05-2019</td>
									<td style="width: 100px;text-align: center;">23-05-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="text-align: center;">12 DAYS</td>
									<td style="text-align: center;width: 100px;">06-06-2019</td>
									<td style="text-align: center;">14 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EMC TBN 17</td>
									<td style="text-align: center;">0GN1JW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">13-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>India - Chennai via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">MOGRAL</td>
									<td style="text-align: center;">012</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-05-2019</td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">12-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER DELIGHT</td>
									<td style="text-align: center;">133</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">19-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">VARADA</td>
									<td style="text-align: center;">012</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">26-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">ALS CILVIA</td>
									<td style="text-align: center;">007</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">04-07-2019</td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MOGRAL</td>
									<td style="text-align: center;">013</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="width: 100px;text-align: center;">26-06-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="width: 100px;text-align: center;">09-07-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">11-07-2019</td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER DELIGHT</td>
									<td style="text-align: center;">134</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="width: 100px;text-align: center;">03-07-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="width: 100px;text-align: center;">16-07-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">18-07-2019</td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Bangladesh - Chittagong via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER DELUX</td>
									<td style="text-align: center;">143W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-02-2019</td>
									<td style="width: 100px;text-align: center;">27-02-2019</td>
									<td style="width: 100px;text-align: center;">13-03-2019</td>
									<td style="width: 100px;text-align: center;">15-03-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">16-03-2019 </td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MOGRAL</td>
									<td style="text-align: center;">009W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-02-2019</td>
									<td style="width: 100px;text-align: center;">03-03-2019</td>
									<td style="width: 100px;text-align: center;">17-03-2019</td>
									<td style="width: 100px;text-align: center;">19-03-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">20-03-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">KOTA LAYAR</td>
									<td style="text-align: center;">094W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">03-03-2019</td>
									<td style="width: 100px;text-align: center;">06-03-2019</td>
									<td style="width: 100px;text-align: center;">20-03-2019</td>
									<td style="width: 100px;text-align: center;">22-03-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">23-03-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER DELIGHT</td>
									<td style="text-align: center;">130W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">07-03-2019</td>
									<td style="width: 100px;text-align: center;">10-03-2019</td>
									<td style="width: 100px;text-align: center;">24-03-2019</td>
									<td style="width: 100px;text-align: center;">26-03-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">27-03-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Cambodia - Sihanoukville via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">OOCL EGYPT</td>
									<td style="text-align: center;">0NM2DW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">11-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MALIK AL ASHTAR</td>
									<td style="text-align: center;">0NM2FW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">20-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL SATURN</td>
									<td style="text-align: center;">0NM2HW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">27-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UMM SALAL</td>
									<td style="text-align: center;">0NM2JW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">01-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL JUPITER</td>
									<td style="text-align: center;">0NM2LW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">06-07-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">09-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TAYMA</td>
									<td style="text-align: center;">0NM2NW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">13-07-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">16-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="width: 100px;text-align: center;">20-07-2019</td>
									<td style="width: 100px;text-align: center;">21-07-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">23-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Korea - Busan via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI RESPECT </td>
									<td style="text-align: center;">015W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-05-2019</td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">26-06-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI DRIVE</td>
									<td style="text-align: center;">029W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">03-07-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI PRIDE</td>
									<td style="text-align: center;">029W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">10-07-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HMM PROMISE</td>
									<td style="text-align: center;">007W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="width: 100px;text-align: center;">15-07-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">17-07-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI VICTORY</td>
									<td style="text-align: center;">031W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">21-07-2019</td>
									<td style="width: 100px;text-align: center;">22-07-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">23-07-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI HOPE</td>
									<td style="text-align: center;">003W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">09-07-2019</td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="width: 100px;text-align: center;">04-08-2019</td>
									<td style="width: 100px;text-align: center;">05-08-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">06-08-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI HONOUR</td>
									<td style="text-align: center;">007W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">16-07-2019</td>
									<td style="width: 100px;text-align: center;">18-07-2019</td>
									<td style="width: 100px;text-align: center;">11-08-2019</td>
									<td style="width: 100px;text-align: center;">12-08-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">13-08-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Myanmar – Yangon via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">MALIK AL ASHTAR</td>
									<td style="text-align: center;">033W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-05-2019</td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="text-align: center;">20 DAYS</td>
									<td style="text-align: center;width: 100px;">18-06-2019</td>
									<td style="text-align: center;">22 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL SATURN</td>
									<td style="text-align: center;">0NM2HW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="text-align: center;">20 DAYS</td>
									<td style="text-align: center;width: 100px;">25-06-2019</td>
									<td style="text-align: center;">22 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UMM SALAL</td>
									<td style="text-align: center;">0NM2JW21MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="text-align: center;">20 DAYS</td>
									<td style="text-align: center;width: 100px;">31-06-2019</td>
									<td style="text-align: center;">22 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL JUPITER</td>
									<td style="text-align: center;">0NM2LW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">06-07-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="text-align: center;">20 DAYS</td>
									<td style="text-align: center;width: 100px;">08-07-2019</td>
									<td style="text-align: center;">22 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TAYMA</td>
									<td style="text-align: center;">0NM2NW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="width: 100px;text-align: center;">13-07-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
									<td style="text-align: center;width: 100px;">16-07-2019 </td>
									<td style="text-align: center;">22 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">THESEUS</td>
									<td style="text-align: center;">0NM2PW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="width: 100px;text-align: center;">20-07-2019</td>
									<td style="width: 100px;text-align: center;">21-07-2019</td>
									<td style="text-align: center;">21 DAYS </td>
									<td style="text-align: center;width: 100px;">22-07-2019</td>
									<td style="text-align: center;">22 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Pakistan – Karachi via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">BOTANY BAY</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">19-05-2019</td>
									<td style="width: 100px;text-align: center;">22-05-2019</td>
									<td style="width: 100px;text-align: center;">25-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="text-align: center;">05 DAYS</td>
									<td style="text-align: center;width: 100px;">27-05-2019</td>
									<td style="text-align: center;">06 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">IRENES RELIANCE</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="text-align: center;">05 DAYS</td>
									<td style="text-align: center;width: 100px;">04-06-2019</td>
									<td style="text-align: center;">06 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">BOTANY BAY</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="text-align: center;">05 DAYS</td>
									<td style="text-align: center;width: 100px;">10-06-2019</td>
									<td style="text-align: center;">06 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">IRENES RELIANCE</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="text-align: center;">05 DAYS</td>
									<td style="text-align: center;width: 100px;">17-06-2019</td>
									<td style="text-align: center;">06 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">BOTANY BAY</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="text-align: center;">05 DAYS</td>
									<td style="text-align: center;width: 100px;">24-06-2019</td>
									<td style="text-align: center;">06 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">IRENES RELIANCE</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">26-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="text-align: center;">05 DAYS</td>
									<td style="text-align: center;width: 100px;">01-06-2019</td>
									<td style="text-align: center;">06 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Singapore via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">UNAYZAH</td>
									<td style="text-align: center;">0NM2BW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">22-05-2019</td>
									<td style="width: 100px;text-align: center;">23-05-2019</td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;">04-06-2019</td>
									<td style="text-align: center;">12 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">OOCL EGYPT</td>
									<td style="text-align: center;">0NM2DW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;">11-06-2019</td>
									<td style="text-align: center;">12 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MALIK AL ASHTAR</td>
									<td style="text-align: center;">0NM2FW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;">18-06-2019</td>
									<td style="text-align: center;">12 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL SATURN</td>
									<td style="text-align: center;">0NM2HW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;">24-06-2019</td>
									<td style="text-align: center;">12 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UMM SALAL</td>
									<td style="text-align: center;">0NM2JW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="text-align: center;">12 DAYS</td>
									<td style="text-align: center;width: 100px;">03-07-2019</td>
									<td style="text-align: center;">13 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL JUPITER</td>
									<td style="text-align: center;">M2LWIP</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="width: 100px;text-align: center;">09-07-2019</td>
									<td style="text-align: center;">12 DAYS</td>
									<td style="text-align: center;width: 100px;">10-07-2019</td>
									<td style="text-align: center;">13 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TAYMA</td>
									<td style="text-align: center;">008W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">15-07-2019</td>
									<td style="width: 100px;text-align: center;">16-07-2019</td>
									<td style="text-align: center;">12 DAYS</td>
									<td style="text-align: center;width: 100px;">17-07-2019</td>
									<td style="text-align: center;">13 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Vietnam - Da Nang via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO AFRICA</td>
									<td style="text-align: center;">0GT0JW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">16-06-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO SHIPPING PISCES</td>
									<td style="text-align: center;">0GT0JW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">23-06-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO SHIPPING HIMALAYAS</td>
									<td style="text-align: center;">0GT0LW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">30-06-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL ATLANTIC OCEAN</td>
									<td style="text-align: center;">0GT0NW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">07-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO SHIPPING SOLAR</td>
									<td style="text-align: center;">0GT0PW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="width: 100px;text-align: center;">12-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">14-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL INDIAN OCEAN</td>
									<td style="text-align: center;">0GT0RW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">18-07-2019</td>
									<td style="width: 100px;text-align: center;">19-07-2019</td>
									<td style="text-align: center;">19 DAYS</td>
									<td style="text-align: center;width: 100px;">21-07-2019</td>
									<td style="text-align: center;">21 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5> China - Fuzhou via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">APL SOUTHAMTON</td>
									<td style="text-align: center;">0SV3TW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">22-05-2019</td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">16-06-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">ITAL UNIVERSO</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">20-06-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER UTILE </td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">27-06-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO SHIPPING HIMALAYAS</td>
									<td style="text-align: center;">0GT0LW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="width: 100px;text-align: center;">26-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">29-06-2019 </td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER UNIFIC</td>
									<td style="text-align: center;">0GN25W1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">04-07-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL ATLANTIC OCEAN</td>
									<td style="text-align: center;">0GT0NW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">03-07-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">05-07-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER URSULA</td>
									<td style="text-align: center;">0GN2BW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="width: 100px;text-align: center;">09-07-2019</td>
									<td style="text-align: center;">23 DAYS</td>
									<td style="text-align: center;width: 100px;">11-07-2019</td>
									<td style="text-align: center;">25 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO SHIPPING SOLAR</td>
									<td style="text-align: center;">0GT0PW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">10-07-2019</td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">13-07-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER URBAN</td>
									<td style="text-align: center;">0GN2JW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">15-07-2019</td>
									<td style="width: 100px;text-align: center;">16-07-2019</td>
									<td style="text-align: center;">22 DAYS</td>
									<td style="text-align: center;width: 100px;">18-07-2019</td>
									<td style="text-align: center;">24 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;">0GN2ZW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">22-07-2019</td>
									<td style="width: 100px;text-align: center;">23-07-2019</td>
									<td style="text-align: center;">23 DAYS</td>
									<td style="text-align: center;width: 100px;">25-07-2019</td>
									<td style="text-align: center;">25 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>India - Tuticorin via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color: #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">ALS CLIVIA</td>
									<td style="text-align: center;">006W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">21-05-2019</td>
									<td style="width: 100px;text-align: center;">23-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">06-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MOGRAL</td>
									<td style="text-align: center;">012W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-05-2019</td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">13-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER DELIGHT</td>
									<td style="text-align: center;">0133W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">20-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">VARADA</td>
									<td style="text-align: center;">012W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">27-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">ALS CLIVIA</td>
									<td style="text-align: center;">007W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">04-07-2019 </td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MOGRAL</td>
									<td style="text-align: center;">013W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="width: 100px;text-align: center;">09-07-2019</td>
									<td style="text-align: center;">13 DAYS</td>
									<td style="text-align: center;width: 100px;">11-07-2019</td>
									<td style="text-align: center;">15 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>China - Tianjin via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">APL VANCOUVER</td>
									<td style="text-align: center;">0SV3XW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">21-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">23-06-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">APL PARIS</td>
									<td style="text-align: center;">0SV41W1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">30-06-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM VELA</td>
									<td style="text-align: center;">0SV45W1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">07-07-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">APL SANTIAGO</td>
									<td style="text-align: center;">0SV49W1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="width: 100px;text-align: center;">12-07-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">14-07-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM PEGASUS</td>
									<td style="text-align: center;">0SV4DW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">18-07-2019</td>
									<td style="width: 100px;text-align: center;">19-07-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">21-07-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM LYRA</td>
									<td style="text-align: center;">0SV4HW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">26-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">25-07-2019</td>
									<td style="width: 100px;text-align: center;">26-07-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">28-07-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM TUTICORIN</td>
									<td style="text-align: center;">0SV4LW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">03-07-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="width: 100px;text-align: center;">01-08-2019</td>
									<td style="width: 100px;text-align: center;">02-08-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">04-08-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM MUNGO</td>
									<td style="text-align: center;">0SV4PW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">12-07-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="width: 100px;text-align: center;">08-08-2019</td>
									<td style="width: 100px;text-align: center;">09-08-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">11-08-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">APL SALALAH</td>
									<td style="text-align: center;">0SV4TW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">19-07-2019</td>
									<td style="width: 100px;text-align: center;">21-07-2019</td>
									<td style="width: 100px;text-align: center;">15-08-2019</td>
									<td style="width: 100px;text-align: center;">16-08-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">18-08-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">APL QINGDAO</td>
									<td style="text-align: center;">0SV4XW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">26-07-2019</td>
									<td style="width: 100px;text-align: center;">28-07-2019</td>
									<td style="width: 100px;text-align: center;">22-08-2019</td>
									<td style="width: 100px;text-align: center;">23-08-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">25-08-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">APL DUBLIN</td>
									<td style="text-align: center;">0SV51W1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">01-08-2019</td>
									<td style="width: 100px;text-align: center;">03-08-2019</td>
									<td style="width: 100px;text-align: center;">28-08-2019</td>
									<td style="width: 100px;text-align: center;">29-08-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">31-08-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>China - Dalian via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">APL YANGSHAN</td>
									<td style="text-align: center;">0SV3TW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-05-2019</td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">23-06-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">APL PARIS </td>
									<td style="text-align: center;">0SV41W1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">01-07-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM VELA</td>
									<td style="text-align: center;">0SV45W1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">06-07-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">08-07-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">APL SANTIAGO</td>
									<td style="text-align: center;">0SV49W1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">11-07-2019</td>
									<td style="width: 100px;text-align: center;">12-07-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">14-07-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM PEGASUS</td>
									<td style="text-align: center;">0SV4DW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="width: 100px;text-align: center;">18-07-2019</td>
									<td style="width: 100px;text-align: center;">19-07-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">21-07-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM LYRA</td>
									<td style="text-align: center;">0SV4HW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="width: 100px;text-align: center;">25-07-2019</td>
									<td style="width: 100px;text-align: center;">26-07-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">28-07-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM TUTICORIN</td>
									<td style="text-align: center;">0SV4LW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">06-07-2019</td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="width: 100px;text-align: center;">01-08-2019</td>
									<td style="width: 100px;text-align: center;">02-08-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">04-08-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CMA CGM MUNGO</td>
									<td style="text-align: center;">0SV4PW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">13-07-2019</td>
									<td style="width: 100px;text-align: center;">15-07-2019</td>
									<td style="width: 100px;text-align: center;">08-08-2019</td>
									<td style="width: 100px;text-align: center;">09-08-2019</td>
									<td style="text-align: center;">25 DAYS</td>
									<td style="text-align: center;width: 100px;">11-08-2019</td>
									<td style="text-align: center;">27 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Bangladesh - Chittagong via Colombo</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER DELUXE</td>
									<td style="text-align: center;">145W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">20-05-2019</td>
									<td style="width: 100px;text-align: center;">22-05-2019</td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">BLPL GRASCE</td>
									<td style="text-align: center;">023W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">OEL BANGLADESH</td>
									<td style="text-align: center;">1909W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">XPRESS NUPTSE</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">26-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">03-07-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">06-07-2019</td>
									<td style="width: 100px;text-align: center;">10-07-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="width: 100px;text-align: center;">13-07-2019</td>
									<td style="width: 100px;text-align: center;">17-07-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Bangladesh - Chittagong via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">ALS CLIVIA</td>
									<td style="text-align: center;">006W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">17-05-2019</td>
									<td style="width: 100px;text-align: center;">19-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">06-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER DELUXE</td>
									<td style="text-align: center;">145W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">20-05-2019</td>
									<td style="width: 100px;text-align: center;">22-05-2019</td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">08-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MOGRAL</td>
									<td style="text-align: center;">012W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">13-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL SYDNEY</td>
									<td style="text-align: center;">032W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">15-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER DELIGHT</td>
									<td style="text-align: center;">133W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">20-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER DELUXE</td>
									<td style="text-align: center;">145W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">20-05-2019</td>
									<td style="width: 100px;text-align: center;">22-05-2019</td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">08-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MOGRAL</td>
									<td style="text-align: center;">012W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">13-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EVER DELIGHT</td>
									<td style="text-align: center;">133W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">20-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">VARADA</td>
									<td style="text-align: center;">012W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">27-06-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">ALS CLIVIA</td>
									<td style="text-align: center;">007W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">04-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MOGRAL</td>
									<td style="text-align: center;">013W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="width: 100px;text-align: center;">09-09-2019</td>
									<td style="text-align: center;">16 DAYS</td>
									<td style="text-align: center;width: 100px;">11-07-2019</td>
									<td style="text-align: center;">18 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Indonesia - Jakarta via Singapore</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">Sinar Sumba </td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">Cai Yun He</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="text-align: center;">08 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">Sinar Sumba </td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">Cai Yun He</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="text-align: center;">08 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">Sinar Sumba </td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">Cai Yun He</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="text-align: center;">08 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">Sinar Sumba </td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Cambodia - Sihanoukville via Singapore</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">HUNSA BHUM</td>
									<td style="text-align: center;">055D4R</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="text-align: center;">07 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HUNSA BHUM</td>
									<td style="text-align: center;">056D4R</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="text-align: center;">07 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HUNSA BHUM</td>
									<td style="text-align: center;">057D4R</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="text-align: center;">07 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HUNSA BHUM</td>
									<td style="text-align: center;">058D4R</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="text-align: center;">07 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HUNSA BHUM</td>
									<td style="text-align: center;">059D4R</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">26-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="text-align: center;">07 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Myanmar - Yangon via Singapore</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">OCEAN PROBE</td>
									<td style="text-align: center;">015S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">23-05-2019</td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CHERRY VESTA</td>
									<td style="text-align: center;">015S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">OCEAN PROBE</td>
									<td style="text-align: center;">014S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CHERRY VESTA</td>
									<td style="text-align: center;">015S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">26-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">OCEAN PROBE</td>
									<td style="text-align: center;">014S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="width: 100px;text-align: center;">03-07-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CHERRY VESTA</td>
									<td style="text-align: center;">016S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="width: 100px;text-align: center;">10-07-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Vietnam - Ho Chi Minh via Singapore</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">VEGA FYENEN</td>
									<td style="text-align: center;">125S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">AEGEAN EXPRESS</td>
									<td style="text-align: center;">1214S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">VEGA FYNEN</td>
									<td style="text-align: center;">126S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">THANA BHUM</td>
									<td style="text-align: center;">231S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">SANTA LOUKIA</td>
									<td style="text-align: center;">056S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">VEGA FYNEN</td>
									<td style="text-align: center;">127S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">THANA BHUM</td>
									<td style="text-align: center;">232S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">12-06-2019</td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">KHUNA BHUM </td>
									<td style="text-align: center;">013S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">VEGA FYNEN</td>
									<td style="text-align: center;">128S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">THANA BHUM</td>
									<td style="text-align: center;">233S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">19-06-2019</td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">AEGEAN EXPRESS</td>
									<td style="text-align: center;">1215S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">VEGA FYNEN</td>
									<td style="text-align: center;">129S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">THANA BHUM</td>
									<td style="text-align: center;">234S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">26-06-2019</td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="width: 100px;text-align: center;">06-07-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">SANTA LOUKIA  </td>
									<td style="text-align: center;">059S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">VEGA FYNEN</td>
									<td style="text-align: center;">130S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="width: 100px;text-align: center;">09-07-2019</td>
									<td style="text-align: center;">8 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Vietnam - Haiphong via Singapore</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">KING CRIMSON</td>
									<td style="text-align: center;">019S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-05-2019</td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">KYOTO TOWER</td>
									<td style="text-align: center;">922S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">KING CRIMSON</td>
									<td style="text-align: center;">020S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">08-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">KYOTO TOWER</td>
									<td style="text-align: center;">022S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">15-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">KING CRIMSON</td>
									<td style="text-align: center;">021S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">22-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="text-align: center;">10 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Indonesia - Surabaya via Singapore</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">SEASPAN FRASER</td>
									<td style="text-align: center;">049W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">01-06-2019</td>
									<td style="text-align: center;">5 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">AMBASADOR BRIDGE</td>
									<td style="text-align: center;">078W</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-05-2019</td>
									<td style="width: 100px;text-align: center;">30-05-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="text-align: center;">5 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">ROTTERDAM BRIDGE</td>
									<td style="text-align: center;">007N</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">13-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="text-align: center;">5 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">NAVIOS VERDE</td>
									<td style="text-align: center;">045N</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="width: 100px;text-align: center;">20-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="text-align: center;">5 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">SEASPAN FRASER</td>
									<td style="text-align: center;">052N</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="width: 100px;text-align: center;">27-06-2019</td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="text-align: center;">5 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">ROTTERDAM BRIDGE</td>
									<td style="text-align: center;">009N</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="width: 100px;text-align: center;">04-07-2019</td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="width: 100px;text-align: center;">09-07-2019</td>
									<td style="text-align: center;">5 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Bangladesh - Chittagong via Singapore</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">OEL MALAYSIA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">17-05-2019</td>
									<td style="width: 100px;text-align: center;">19-05-2019</td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">28-05-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MARINE TARABA</td>
									<td style="text-align: center;">033S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">OCEAN NHAVA SHEVA</td>
									<td style="text-align: center;">1910S</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">29-05-2019</td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">05-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">OEL STRAITS</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="width: 100px;text-align: center;">04-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MARINE TARABA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">27-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">26-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="width: 100px;text-align: center;">09-07-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>China - Shekou via Singapore</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">UFS TBN 12</td>
									<td style="text-align: center;">0RD3FW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">20-05-2019</td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">28-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI HONOUR</td>
									<td style="text-align: center;">0DX2JW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-05-2019</td>
									<td style="width: 100px;text-align: center;">31-06-2019</td>
									<td style="width: 100px;text-align: center;">06-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">KOTA PUSAKA</td>
									<td style="text-align: center;">0RD3HW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">03-06-2019</td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">11-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">DUMMY 5</td>
									<td style="text-align: center;">0RD3JW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">18-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">KOTA PELANGI</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">25-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UFS TBN 12</td>
									<td style="text-align: center;">TBA </td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="width: 100px;text-align: center;">02-07-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">COSCO KAOHSIUNG</td>
									<td style="text-align: center;">TBA </td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">01-07-2019</td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="width: 100px;text-align: center;">09-07-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">HYUNDAI HONOUR</td>
									<td style="text-align: center;">TBA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">08-07-2019</td>
									<td style="width: 100px;text-align: center;">12-07-2019</td>
									<td style="width: 100px;text-align: center;">16-07-2019</td>
									<td style="width: 100px;text-align: center;">21-07-2019</td>
									<td style="text-align: center;">09 DAYS</td>
									<td style="text-align: center;width: 100px;"></td>
									<td style="text-align: center;"></td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>China - Shekou via Dubai</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
														<tbody>
								<tr>
									<td style="text-align: center;">OOCL EGYPT</td>
									<td style="text-align: center;">0NM2DW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">24-05-2019</td>
									<td style="width: 100px;text-align: center;">26-05-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">10-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">12-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MALIK AL ASHTAR</td>
									<td style="text-align: center;">0NM2FW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">31-05-2019</td>
									<td style="width: 100px;text-align: center;">02-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">17-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">19-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL SATURN</td>
									<td style="text-align: center;">0NM2HW1MA</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">07-06-2019</td>
									<td style="width: 100px;text-align: center;">09-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">24-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">26-06-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UMM SALAL</td>
									<td style="text-align: center;">0NM2JWIPL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">14-06-2019</td>
									<td style="width: 100px;text-align: center;">16-06-2019</td>
									<td style="width: 100px;text-align: center;">29-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">02-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL JUPITER</td>
									<td style="text-align: center;">0NM2LW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">21-06-2019</td>
									<td style="width: 100px;text-align: center;">23-06-2019</td>
									<td style="width: 100px;text-align: center;">06-07-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">09-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">TAYMA</td>
									<td style="text-align: center;">0NM2NW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">28-06-2019</td>
									<td style="width: 100px;text-align: center;">30-06-2019</td>
									<td style="width: 100px;text-align: center;">13-07-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">16-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">EMC TBN 8</td>
									<td style="text-align: center;">0NM2PW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">05-07-2019</td>
									<td style="width: 100px;text-align: center;">07-07-2019</td>
									<td style="width: 100px;text-align: center;">20-07-2019</td>
									<td style="width: 100px;text-align: center;">21-07-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">23-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">UNAYZAH</td>
									<td style="text-align: center;">0NM2RW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">12-07-2019</td>
									<td style="width: 100px;text-align: center;">14-07-2019</td>
									<td style="width: 100px;text-align: center;">27-07-2019</td>
									<td style="width: 100px;text-align: center;">28-07-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">30-07-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">OOCL EGYPT</td>
									<td style="text-align: center;">0NM2TW21PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">19-07-2019</td>
									<td style="width: 100px;text-align: center;">21-07-2019</td>
									<td style="width: 100px;text-align: center;">03-08-2019</td>
									<td style="width: 100px;text-align: center;">04-08-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">06-08-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">MALIK AL ASHTAR</td>
									<td style="text-align: center;">0NM2VW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">26-07-2019</td>
									<td style="width: 100px;text-align: center;">28-07-2019</td>
									<td style="width: 100px;text-align: center;">10-08-2019</td>
									<td style="width: 100px;text-align: center;">11-08-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">13-08-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
														<tbody>
								<tr>
									<td style="text-align: center;">CSCL SATURN</td>
									<td style="text-align: center;">0NM2XW1PL</td>
									<td style="text-align: center;"></td>
									<td style="width: 100px;text-align: center;">02-08-2019</td>
									<td style="width: 100px;text-align: center;">04-08-2019</td>
									<td style="width: 100px;text-align: center;">17-08-2019</td>
									<td style="width: 100px;text-align: center;">19-08-2019</td>
									<td style="text-align: center;">15 DAYS</td>
									<td style="text-align: center;width: 100px;">21-08-2019</td>
									<td style="text-align: center;">17 DAYS</td>
								</tr>
							</tbody>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	
	<div class="page-content">
		<div class="container" style="height: 100%; padding-top: 10px;">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading" style="text-align: center; ">
						<img src="https://pamcargo.com/img/logo.png" />
						<h2 style="color: #58B947;">SAILING SCHEDULE</h2>
					</div>
					<div class="table-responsive" style="margin-bottom: 30px;">
						<div><h5>Indonesia - Semarang via Singapore</h5></div>
						<table class="table table-bordered table-striped" style="width: 100%;border-collapse: collapse;" border="1" cellpadding="4" cellspacing="0">
							<thead>
								<tr>
									<th style="color: #58B947;text-align: center;">Mother-Vessel</th>
									<th style="color: #58B947;text-align: center;">Voyage</th>
									<th style="color:  #58B947;text-align: center;">CFS Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">FCL Closing</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETD Origin</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA Dubai</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA European HUB</th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
									<th style="color: #58B947;width: 100px;text-align: center;">ETA US/Canada </th>
									<th style="color: #58B947;text-align: center;">Transit Time</th>
								</tr>
							</thead>
													</table>
						<i>* Add 1 day up to final European destination</i>
					</div>
					<div style="clear: both;"></div>
					<hr />
				</div>
			</div>
		</div>
	</div>
	</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/montly_schedule.js"></script>
    <script src="assets/js/script_index.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>