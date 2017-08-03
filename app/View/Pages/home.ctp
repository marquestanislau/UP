<?php echo $this->Html->script('Chart.min'); ?>
<div class="w3-row-padding">
	<div class="w3-quarter">
		<div>
			<div class="w3-container w3-center">
				<div class="w3-button w3-green w3-xxlarge">
					<i class="fa fa-search"></i>
					Procurar
				</div>
			</div>
		</div>
	</div> 
	<div class="w3-quarter">
		<div class="w3-light-grey">
			<div class="w3-container w3-center w3-text-brown">
				<div class="row w3-border-brown w3-border">
					<div class="col-sm-6"> 
						<h3><i class="fa fa-users"></i></h3>
					</div>
					<div class="col-sm-6">
						<h1><?php echo count($funcionarios); ?></h1>
					</div>
					<div class="col-sm-12 w3-brown">
						<p>Funcion&aacute;rios</p>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<div class="w3-quarter">
		<div class="w3-light-grey">
			<div class="w3-container w3-center w3-text-red">
				<div class="row w3-border w3-border-red">
					<div class="col-sm-6">
						<h3><i class="fa fa-user"></i></h3>
					</div>
					<div class="col-sm-6">
						<h1><?php echo count($usuarios); ?></h1>
					</div>
					<div class="col-sm-12 w3-red">
						<p>Utilizadores</p>
					</div>
				</div>
			</div>
		</div>
	</div> 
	<div class="w3-quarter">
		<div class="w3-light-grey">
			<div class="w3-container w3-center w3-text-teal">
				<div class="row w3-border w3-border-teal">
					<div class="col-sm-6">
						<h3><i class="fa fa-file-pdf-o"></i></h3>
					</div>
					<div class="col-sm-6">
						<h1 class="">N</h1>
					</div>
					<div class="col-sm-12 w3-teal">
						<p>Pr&oacute;xima nota provis&oacute;ria</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="w3-row-padding w3-margin-top">
	<div class="w3-half">

		<div class="">

			<header class="w3-container">
				<h5>Gr&aacute;fico de relacao Concurso/carreiras</h5>
			</header>

			<div class="w3-container">
				<?php 
					$json = json_encode($json_concursos_nomes);
					$json_totalidades = json_encode($json_concursos_totalidades);
				?>
				<canvas id="concursoChart"></canvas>

				<script type="text/javascript">
					var label = <?php echo $json;?>;
					var data = <?php echo $json_totalidades;?>;

					console.log(data);

					var ctx = document.getElementById("concursoChart").getContext('2d');
					var myChart = new Chart(ctx, {
					    type: 'bar',
					    data: {
					        labels: label,
					        datasets: [{
					            label: '',
					            data: data,
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
				</script>
			</div>

			<footer class="w3-container">
				<h5>Footer</h5>
			</footer>

		</div>
	</div>
	<div class="w3-half">
		
		<div class="">

			<header class="w3-container">
				<h1>Gr&aacute;fico de concursos</h1>
			</header>

			<div class="w3-container">
				<p>Lorem ipsum...</p>
				<table class="w3-table w3-striped w3-white w3-border w3-margin-bottom">
					<tr class="">
						<th>First Name</th>
						<th>Last Name</th>
						<th>Points</th>
					</tr>
					<tr>
						<td>Jill</td>
						<td>Smith</td>
						<td>50</td>
					</tr>
					<tr>
						<td>Jill</td>
						<td>Smith</td>
						<td>50</td>
					</tr>
					<tr>
						<td>Jill</td>
						<td>Smith</td>
						<td>50</td>
					</tr>
					<tr>
						<td>Jill</td>
						<td>Smith</td>
						<td>50</td>
					</tr>
				</table>
			</div>

			<footer class="w3-container">
				<h5>Footer</h5>
			</footer>

		</div>
	</div>
</div> 