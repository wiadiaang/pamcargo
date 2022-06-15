
<?php $this->load->view('struktur/header');?>

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
   

    <section class="schedule-menu">
        <div class="container schedule-menu">
            <div class="row schedule-menu-content" style="padding-top: 15px;">
               <h5 style="color: black"><?= $departure->departure_name; ?></h5>

               <a onclick="print_table();return false;" href="" class="btn btn-big btn-yellow" style="float: right;margin-bottom: 10px;">
                        <span style="color: white;border-color: green;border-radius: 10px;background-color: green;padding: 10px 20px;">Print / Download</span>
                    </a>

            <?php
                if($departure_id == '38'){
            ?>
               <table class="table table-bordered table-striped" style="border:1px solid #58B947;">
				        	<thead style="background: #;">
				        		<tr>
					        		<th style="color: #fff;">Mother-Vessel</th>
					        		<th style="color: #fff;">Voyage</th>
									<th style="color: #fff">CFS Closing</th>
					        		<th style="color: #fff;">FCL Closing</th>
					        		<th style="color: #fff;">TIME</th>
					        		<th style="color: #fff;">ETD Origin</th>
					        		<th style="color: #fff;" style="width:25px;">ETA <?= $departure->eta; ?></th>
					        		<th style="color: #fff;">ETA European HUB</th>
					        		<th style="color: #fff;">Transit Time</th>
					        		<th style="color: #fff;">ETA US/CANADA</th>
					        		<th style="color: #fff;">Transit Time</th>
				        		</tr>
				        	</thead>
                            <tbody>
                            <?php 
                             $schedule1 = $this->db->query("SELECT * FROM schedule WHERE departure_id = '82' AND transit_time !='' ")->result_array();
                                foreach($schedule1 as $key){
                            ?>
				        		<tr style="border-bottom: 1px solid #58B947;">
				        			<td><?php echo $key['mother_vessel_name']; ?></td>
				        			<td><?php echo $key['voyage_mother']; ?></td>
									<td style="text-align: center;"><?php echo $key['cfs_closing']; ?></td>
				        			<td><?php echo $key['closing_time_for_delivery']; ?></td>
				        			<td><?php echo $key['time'];?></td>
				        			<td><?php echo $key['etd_departure']; ?></td>
				        			<td><?php echo $key['etd_transit_airport']; ?></td>
				        			<td><?php echo $key['eta']; ?></td>
				        			<td><?php echo $key['transit_time']; ?></td>
				        			<td style="border-bottom:1px solid #58B947;"><?php echo $key['eta_us']; ?></td>
				        			<td style="border-bottom:1px solid #58B947;"><?php echo $key['transit_time_us']; ?></td>
				        		</tr>
                            <?php }?>
				        	</tbody>
                </table>
                
                <table class="table table-bordered table-striped" style="border:1px solid #58B947;">
				        	<thead style="background: #58B947;">
				        		<tr>
					        		<th style="color: #fff;">Mother-Vessel</th>
					        		<th style="color: #fff;">Voyage</th>
									<th style="color: #fff">CFS Closing</th>
					        		<th style="color: #fff;">FCL Closing</th>
					        		<th style="color: #fff;">TIME</th>
					        		<th style="color: #fff;">ETD Origin</th>
					        		<th style="color: #fff;" style="width:25px;" >ETA <?= $departure->eta; ?></th>
					        		<th style="color: #fff;">ETA European HUB</th>
					        		<th style="color: #fff;">Transit Time</th>
					        		<th style="color: #fff;">ETA US/CANADA</th>
					        		<th style="color: #fff;">Transit Time</th>
				        		</tr>
				        	</thead>
				    	
				        	<tbody>
                            <?php
				    	        $schedule2 = $this->db->query("SELECT * FROM schedule WHERE departure_id = '83' AND transit_time !='' ")->result_array();
                                 foreach($schedule2 as $r2){
				    	?>
				        		<tr style="border-bottom: 1px solid #58B947;">
				        			<td><?php echo $r2['mother_vessel_name']; ?></td>
				        			<td><?php echo $r2['voyage_mother']; ?></td>
									<td style="text-align: center;"><?php echo $r2['cfs_closing']; ?></td>
				        			<td><?php echo $r2['closing_time_for_delivery']; ?></td>
				        			<td><?php echo $r2['time'];?></td>
				        			<td><?php echo $r2['etd_departure']; ?></td>
				        			<td><?php echo $r2['etd_transit_airport']; ?></td>
				        			<td><?php echo $r2['eta']; ?></td>
				        			<td><?php echo $r2['transit_time']; ?></td>
				        			<td style="border-bottom:1px solid #58B947;"><?php echo $r2['eta_us']; ?></td>
				        			<td style="border-bottom:1px solid #58B947;"><?php echo $r2['transit_time_us']; ?></td>
				        		</tr>
                        <?php } ?>
				        	</tbody>
                 </table>

            <?php }else{ ?>

                <table class="table table-bordered table-striped" style="border:1px solid #58B947;">
				        	<thead style="background: #58B947;">
				        		<tr>
					        		<th style="color: #fff;">Mother-Vessel</th>
					        		<th style="color: #fff;">Voyage</th>
									<th style="color: #fff" style="width:25px;">CFS Closing</th>
					        		<th style="color: #fff;" style="width:25px;">FCL Closing</th>
					        		<th style="color: #fff;" style="width:25px;">TIME</th>
					        		<th style="color: #fff;" style="width:25px;">ETD Origin</th>
					        		<th style="color: #fff;" style="width:25px;">ETA <?= $departure->eta; ?> </th>
					        		<th style="color: #fff;">ETA European HUB</th>
					        		<th style="color: #fff;">Transit Time</th>
					        		<th style="color: #fff;">ETA US/CANADA</th>
					        		<th style="color: #fff;">Transit Times</th>
				        		</tr>
				        	</thead>
				    	<?php
				    	 $schedule3 = $this->db->query("SELECT * FROM schedule WHERE departure_id = $departure_id AND transit_time !='' ")->result_array();
                         foreach($schedule3 as $r3){
				    	?>
				        	<tbody>
				        		<tr style="border-bottom: 1px solid #58B947;">
				        			<td><?php echo $r3['mother_vessel_name']; ?></td>
				        			<td><?php echo $r3['voyage_mother']; ?></td>
									<td style="text-align: center;"><?php echo $r3['cfs_closing']; ?></td>
				        			<td><?php echo $r3['closing_time_for_delivery']; ?></td>
				        			<td><?php echo $r3['time'];?></td>
				        			<td><?php echo $r3['etd_departure']; ?></td>
				        			<td><?php echo $r3['etd_transit_airport']; ?></td>
				        			<td><?php echo $r3['eta']; ?></td>
				        			<td><?php echo $r3['transit_time']; ?></td>
				        			<td style="border-bottom:1px solid #58B947;"><?php echo $r3['eta_us']; ?></td>
				        			<td style="border-bottom:1px solid #58B947;"><?php echo $r3['transit_time_us']; ?></td>
				        		</tr>
				        	</tbody>
				        <?php } ?>
				        </table>

            <?php } ?>

               
            </div>
        </div>
    </section>
    

    <!-- FOOTER PHP -->
<?php $this->load->view('struktur/footer');?>


<style>
.header-services {
    height: 330px;
    
}

.sqr {
    
}

</style>



<script type="text/javascript">
function print_table(){
        	console.log("a");
        	var divToPrint = document.getElementById('divToPrint');
				       var popupWin = window.open('', '_blank', 'width=2048,height=1000');
				       popupWin.document.open();
				       popupWin.document.title = "";
					   popupWin.document.write('<html><link rel="stylesheet" href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css">');
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

 
<div id="divToPrint" style="display:none;">
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				    <div class="custom-heading">
				    <center><img src="https://pamcargo.com/img/logo.png" /></center>
				    <h3 style="color: #58B947;">SCHEDULE QUERY RESULT</h3>
				    </div>
				    <div class="table-responsive" style="margin-bottom: 30px;">
				  
				    <div><h5 style="color: #58B947;">From   <h5><?= $departure->departure_name; ?></h5></h5></div>

				    	
                    <?php
                if($departure_id == '38'){
            ?>
               <table class="table table-bordered table-striped" style="border:1px solid #58B947;">
				        	<thead style="background: #;">
				        		<tr>
					        		<th style="color: #fff;">Mother-Vessel</th>
					        		<th style="color: #fff;">Voyage</th>
									<th style="color: #fff">CFS Closing</th>
					        		<th style="color: #fff;">FCL Closing</th>
					        		<th style="color: #fff;">TIME</th>
					        		<th style="color: #fff;">ETD Origin</th>
					        		<th style="color: #fff;" style="width:25px;">ETA <?= $departure->eta; ?></th>
					        		<th style="color: #fff;">ETA European HUB</th>
					        		<th style="color: #fff;">Transit Time</th>
					        		<th style="color: #fff;">ETA US/CANADA</th>
					        		<th style="color: #fff;">Transit Time</th>
				        		</tr>
				        	</thead>
                            <tbody>
                            <?php 
                             $schedule1 = $this->db->query("SELECT * FROM schedule WHERE departure_id = '82' AND transit_time !='' ")->result_array();
                                foreach($schedule1 as $key){
                            ?>
				        		<tr style="border-bottom: 1px solid #58B947;">
				        			<td><?php echo $key['mother_vessel_name']; ?></td>
				        			<td><?php echo $key['voyage_mother']; ?></td>
									<td style="text-align: center;"><?php echo $key['cfs_closing']; ?></td>
				        			<td><?php echo $key['closing_time_for_delivery']; ?></td>
				        			<td><?php echo $key['time'];?></td>
				        			<td><?php echo $key['etd_departure']; ?></td>
				        			<td><?php echo $key['etd_transit_airport']; ?></td>
				        			<td><?php echo $key['eta']; ?></td>
				        			<td><?php echo $key['transit_time']; ?></td>
				        			<td style="border-bottom:1px solid #58B947;"><?php echo $key['eta_us']; ?></td>
				        			<td style="border-bottom:1px solid #58B947;"><?php echo $key['transit_time_us']; ?></td>
				        		</tr>
                            <?php }?>
				        	</tbody>
                </table>
                
                <table class="table table-bordered table-striped" style="border:1px solid #58B947;">
				        	<thead style="background: #58B947;">
				        		<tr>
					        		<th style="color: #fff;">Mother-Vessel</th>
					        		<th style="color: #fff;">Voyage</th>
									<th style="color: #fff">CFS Closing</th>
					        		<th style="color: #fff;">FCL Closing</th>
					        		<th style="color: #fff;">TIME</th>
					        		<th style="color: #fff;">ETD Origin</th>
					        		<th style="color: #fff;" style="width:25px;" >ETA <?= $departure->eta; ?></th>
					        		<th style="color: #fff;">ETA European HUB</th>
					        		<th style="color: #fff;">Transit Time</th>
					        		<th style="color: #fff;">ETA US/CANADA</th>
					        		<th style="color: #fff;">Transit Time</th>
				        		</tr>
				        	</thead>
				    	
				        	<tbody>
                            <?php
				    	        $schedule2 = $this->db->query("SELECT * FROM schedule WHERE departure_id = '83' AND transit_time !='' ")->result_array();
                                 foreach($schedule2 as $r2){
				    	?>
				        		<tr style="border-bottom: 1px solid #58B947;">
				        			<td><?php echo $r2['mother_vessel_name']; ?></td>
				        			<td><?php echo $r2['voyage_mother']; ?></td>
									<td style="text-align: center;"><?php echo $r2['cfs_closing']; ?></td>
				        			<td><?php echo $r2['closing_time_for_delivery']; ?></td>
				        			<td><?php echo $r2['time'];?></td>
				        			<td><?php echo $r2['etd_departure']; ?></td>
				        			<td><?php echo $r2['etd_transit_airport']; ?></td>
				        			<td><?php echo $r2['eta']; ?></td>
				        			<td><?php echo $r2['transit_time']; ?></td>
				        			<td style="border-bottom:1px solid #58B947;"><?php echo $r2['eta_us']; ?></td>
				        			<td style="border-bottom:1px solid #58B947;"><?php echo $r2['transit_time_us']; ?></td>
				        		</tr>
                        <?php } ?>
				        	</tbody>
                 </table>

            <?php }else{ ?>

                <table class="table table-bordered table-striped" style="border:1px solid #58B947;">
				<thead style="background: #58B947; padding: 25px;">
				        		<tr>
					        		<th style="color: #fff;">Mother-Vessel</th>
					        		<th style="color: #fff;">Voyage</th>
									<th style="color: #fff">CFS Closing</th>
					        		<th style="color: #fff;">FCL Closing</th>
					        		<th style="color: #fff;">TIME</th>
					        		<th style="color: #fff;">ETD Origin</th>
					        		<th style="color: #fff;" style="width:25px;" >ETA <?= $departure->eta; ?></th>
					        		<th style="color: #fff;">ETA European HUB</th>
					        		<th style="color: #fff;">Transit Time</th>
					        		<th style="color: #fff;">ETA US/CANADA</th>
					        		<th style="color: #fff;">Transit Time</th>
				        		</tr>
				        	</thead>
				    	<?php
				    	 $schedule3 = $this->db->query("SELECT * FROM schedule WHERE departure_id = $departure_id AND transit_time !='' ")->result_array();
                         foreach($schedule3 as $r3){
				    	?>
				        	<tbody>
				        		<tr style="border-bottom: 1px solid #58B947;">
				        			<td><?php echo $r3['mother_vessel_name']; ?></td>
				        			<td><?php echo $r3['voyage_mother']; ?></td>
									<td style="text-align: center;"><?php echo $r3['cfs_closing']; ?></td>
				        			<td><?php echo $r3['closing_time_for_delivery']; ?></td>
				        			<td><?php echo $r3['time'];?></td>
				        			<td><?php echo $r3['etd_departure']; ?></td>
				        			<td><?php echo $r3['etd_transit_airport']; ?></td>
				        			<td><?php echo $r3['eta']; ?></td>
				        			<td><?php echo $r3['transit_time']; ?></td>
				        			<td style="border-bottom:1px solid #58B947;"><?php echo $r3['eta_us']; ?></td>
				        			<td style="border-bottom:1px solid #58B947;"><?php echo $r3['transit_time_us']; ?></td>
				        		</tr>
				        	</tbody>
				        <?php } ?>
				        </table>

            <?php } ?>



					<i>* Add 1 day up to final European destination</i>
				    </div>
				    <div style="clear: both;"></div>
				</div>
			</div>
		</div>
	</div>
</div>