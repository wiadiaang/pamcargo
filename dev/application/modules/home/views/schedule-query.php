

<?php $this->load->view('struktur/header');?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<div class="bradcam_area " style="background-image: url(./assets/v.2/img/header-pamcargo/schedule-query.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <!-- <h3 >Schedule Query</h3> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   
<div class="service_details_area">
        <div class="container">
            <div class="row">
                    <div class="col-lg-4 col-md-4">
                            <div class="service_details_left">
                                <h3>Schedule</h3>
                                <div class="nav nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a href="schedule-query">Schedule Query</a>
                                    <a href="rate-request">Rate Request</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <div class="service_details_info">
                                        <h3 style="color:#459539"> Schedule Query</h3>
										<p>Plan the transport of your shipment easily using our schedule (Europe only, please download schedule for other destinations).</p>
										
                                    </div>



                                    <div class="download_brochure d-flex align-items-center justify-content-between mt-3">
                                        <div class="download_left d-flex align-items-center">
                                            <div class="icon">
                                                <img src="<?= base_url('assets/v.2')?>/img/svg_icon/download.svg" alt="">
                                            </div>
                                            <div class="download_text">
                                                <h4 class="mt-2">Country</h4>
												<form action="<?= base_url('schedule-query-result')?>" method="POST">
													<select name="" id="country_id" class="form-control" id="">
															<option value="">-- Choose Country --</option>
															<?php 
															$country = $this->db->query("SELECT * FROM apps_countries where status = '1' order by country_name ASC ")->result();
															foreach ($country as $key) { ?>
															<option value="<?= $key->id; ?>"><?= $key->country_name; ?></option>
																
															<?php  } ?>
												
														</select>
																<br>
																<br> 
														<div id="departure" class="mt-3"></div>		
                                            </div>
                                        </div>
                                        <!-- <div class="download_right">
                                            <button class="boxed-btn3-line" type="submit">View / Download </button>

											
                                        </div> -->
 
											<button type="submit" class="btn btn-default btn-lg" style="border:solid 3px #459539">
												<span class="fa fa-download" aria-hidden="true"></span> View / Download
											</button>
										</form>
                                    </div>



                                    <div class="download_brochure d-flex align-items-center justify-content-between mt-3">
                                        <div class="download_left d-flex align-items-center">
                                            <div class="icon">
                                                <img src="<?= base_url('assets/v.2')?>/img/svg_icon/download.svg" alt="">
                                            </div>
                                            <div class="download_text">
                                                <h3>Download All Schedule</h3>
													
                                            </div>
                                        </div>
                                        <!-- <div class="download_right">
                                            <button class="tn btn-default btn-lg" href="javascript:void(0)"  onclick="ada();return false;"> <span class="fa fa-download" aria-hidden="true"></span> View / Download </button>
                                        </div> -->

											<button type="button" class="btn btn-default btn-lg" onclick="ada();return false;" style="border:solid 3px #459539">
												<span class="fa fa-download" aria-hidden="true"></span> View / Download
											</button>

										<!-- <button type="submit" class="btn btn-default btn-lg">
												<span class="fa fa-download" aria-hidden="true"></span> View / Download
											</button>
										</form> -->

                                    </div>



                                </div>
                                
                                
                            </div>
                        </div>
            </div>
        </div>
    </div>
 


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

		
<script>
	$('#country_id').change(function(){
		var country_id = $(this).val();
		$.ajax({
			url:'<?= base_url('home/home/getRegion')?>',
			type:'POST',
			dataType:'JSON',
			data:{'country_id':country_id},
			success:function(data){
				var res = '<h4 class="mt-2">Origin</h4><select name="departure_id" id="departure_id" class="form-control"> ';
				$.each(data, function(k, v) {  
					 res += '<option value="'+v.departure_id+'" >'+v.departure_name+'</option>';
				});
				res += '</select>';

				 console.log(res);
				$('#departure').html(res);
			},
		});
	});
</script>

<style>
	.form-control{
		font-size:0.9rem !important;
	}
</style>