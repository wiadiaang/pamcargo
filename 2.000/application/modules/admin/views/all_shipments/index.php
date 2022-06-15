<div class="page-content-wrapper">

	<div class="page-content">

		<div class="page-head">

			<div class="page-title">

				<h1>Dashboard</h1>

			</div>

		</div>

		<div class="row">

			<div class="part1">

				<div class="block">

					<div class="left">

						30

					</div>

					<div class="right">

						<img src="https://sms.rembon.co.id/assets/img/sms.png">
						<span>Perangkat Daerah</span>

					</div>

				</div>

				<div class="block">

					<div class="left">

						<?php echo $contact; ?>

					</div>

					<div class="right">

						<img src="https://sms.rembon.co.id/assets/img/client.png">
						<span>Operator</span>

					</div>

				</div>

				<div class="block">

					<div class="left">

						<?php echo $contact; ?>

					</div>

					<div class="right">

						<img src="https://sms.rembon.co.id/assets/img/contact.png">
						<span>Keluhan</span>

					</div>

				</div>

				<div class="block">

					<div class="left">

						<?php echo $history; ?>

					</div>

					<div class="right">

						<img src="https://sms.rembon.co.id/assets/img/history.png">
						<span>Admin</span>

					</div>

				</div>

			</div>

			<!-- <canvas id="myChart"></canvas>
			<script>
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
			    type: 'bar',
			    data: {
			        labels: ["XL", "Indosat", "Axis", "Telkomsel", "Smartfren", "Three"],
			        datasets: [{
			            label: 'Total SMS',
			            data: [<?php echo $xl; ?>, <?php echo $indosat; ?>, <?php echo $axis; ?>, <?php echo $telkom; ?>, <?php echo $smart; ?>, <?php echo $three; ?>],
			            backgroundColor: [
			                'rgba(255, 99, 132, 0.2)',
			                'rgba(54, 162, 235, 0.2)',
			                'rgba(255, 206, 86, 0.2)',
			                'rgba(75, 192, 192, 0.2)',
			                'rgba(153, 102, 255, 0.2)',
			                'rgba(255, 159, 64, 0.2)'
			            ],
			            borderColor: [
			                'rgba(255,99,132,1)',
			                'rgba(54, 162, 235, 1)',
			                'rgba(255, 206, 86, 1)',
			                'rgba(75, 192, 192, 1)',
			                'rgba(153, 102, 255, 1)',
			                'rgba(255, 159, 64, 1)'
			            ],
			            borderWidth: 1
			        }]
			    },
			    options: {
			        scales: {
			            yAxes: [{
			                ticks: {
			                    beginAtZero:true
			                }
			            }]
			        }
			    }
			});
			</script> -->

			<!-- <div class="part2">

				<div class="block">

					<div class="number"><?php echo $xl; ?></div>
					<img src="https://sms.rembon.co.id/assets/img/providers/xl.png"/>
					<span>XL Axiata</span>

				</div>

				<div class="block">

					<div class="number"><?php echo $indosat; ?></div>
					<img src="https://sms.rembon.co.id/assets/img/providers/indosat.png"/>
					<span>Indosat Ooredoo</span>

				</div>

				<div class="block">

					<div class="number"><?php echo $axis; ?></div>
					<img src="https://sms.rembon.co.id/assets/img/providers/axis.png"/>
					<span>Axis</span>

				</div>

				<div class="block">

					<div class="number"><?php echo $telkom; ?></div>
					<img src="https://sms.rembon.co.id/assets/img/providers/telkomsel.png"/>
					<span>Telkomsel</span>

				</div>

				<div class="block">

					<div class="number"><?php echo $smart; ?></div>
					<img src="https://sms.rembon.co.id/assets/img/providers/smartfren.png"/>
					<span>Smartfren</span>

				</div>

				<div class="block">

					<div class="number"><?php echo $three; ?></div>
					<img src="https://sms.rembon.co.id/assets/img/providers/three.png"/>
					<span>three</span>

				</div>

			</div> -->

		</div>

	</div>

</div>