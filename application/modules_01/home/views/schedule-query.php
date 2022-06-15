

<?php $this->load->view('struktur/header');?>



	<div class="jumbotron">
          <div class="container-fluid">
              <div class="row text-center">
                  <div class="col-md-12">
                    <div class="text">
                      Shedule Query
                    </div>
                  </div>
              </div>
          </div>
      </div>



	  <section id="about" class="sec-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    
                    <div class="title ">Tools</div>

					<div class="row mt-4">
						<div class="col">
							<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h5 class="card-title">Schedule Query</h5>
								<!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
								<!-- <span class=""></span> -->
								<!-- <i class="far fa-address-card"></i> -->
								<a href="schedule-query" class="btn btn-success">Schedule QUery</a>
							</div>
							</div>
						</div>
							<div class="col">
							<div class="card" style="width: 18rem;">
								<div class="card-body">
									<h5 class="card-title">Rate Request</h5>
									<!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
									<a href="rate-request" class="btn btn-success">Rate Request</a>
								</div>
								</div>
							</div>
					</div>
					<div class="row">
					<!-- <p>Let us know what can we do for you. Contact us today!</p> -->

					</div>
				
                </div>
                <div class="col-md-6">
				<div class="title">Our Schedule Query</div>
                    <div class="desc">Plan the transport of your shipment easily using our schedule (Europe only, please download schedule for other destinations).</div>
                    <img class="img-box" src="assets/img/img25.jpg" alt="">
				


                </div>
            </div>
        </div>
    </section>


		<section class="p-5" style="background-color:#F2F2F2">

		<div class="row">
		<div class="col-sm-6">
			<div class="card">
			<div class="card-body">
				<h5 class="card-title">Download by origin port</h5>
				<hr>
				<form action="<?= base_url('schedule-query-result')?>" method="POST">
				<div class="mb-3">
					<label for="exampleFormControlInput1" class="form-label">Select origin port</label>
					<select  name="departure_id" id="departure_id" 	class="form-select" id="">
					<?php 
					$data = $this->db->query("SELECT * FROM departure order by departure_name ASC ")->result();
					foreach ($data as $key) { ?>
					<option value="<?= $key->departure_id; ?>"><?= $key->departure_name; ?></option>
						
					<?php  } ?>
			
					</select>
				</div>
				<div class="mb-3">
					<input type="submit" class="btn btn-success" value="View" >
				</div>
				</form>
			</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="card">
			<div class="card-body">
				<h5 class="card-title">Download all schedule</h5>
				<hr>
				<p>Download our complete full monthly schedule</p>
				<a href="javascript:void(0)" class="btn btn-success"  onclick="ada();return false;" >View all schedule</a>
			</div>
			</div>
		</div>
		</div>

		
				
		</section>



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