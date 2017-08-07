<?php echo $this->Html->script('Chart.min'); ?>
<div id="ajaxContent">
<div id="requesting" class="w3-row-padding" style="display:none;">
	<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
	A processar...
</div>
<div class="w3-row-padding">
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
	<div class="w3-quarter">
		<div>
			<div class="w3-container w3-center">
				<a id="search" href="#" class="w3-button w3-green w3-xxlarge">
					<i class="fa fa-search"></i>
					Procurar
				</a>
			</div>
		</div>
	</div> 
</div>
<div class="w3-row-padding w3-margin-top">
	<div class="w3-half">

		<div class="">

			<header class="w3-container">
				<h3 class="w3-text-grey">Gr&aacute;fico de rela&ccedil;&atilde;o Concurso/carreiras</h3>
			</header>

			<div class="w3-container">
				<?php 
					$json = json_encode($json_concursos_nomes);
					$json_totalidades = json_encode($json_concursos_totalidades);
				?>
				<canvas id="concursoChart" class="w3-white" ></canvas>

				<script type="text/javascript">
					var label = <?php echo $json;?>;
					var data = <?php echo $json_totalidades;?>;

					var ctx = document.getElementById("concursoChart").getContext('2d');
					var myChart = new Chart(ctx, {
					    type: 'bar',
					    data: {
					        labels: label,
					        datasets: [{
					            label: 'Concursos/Carreiras',
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
				<!-- <h5>Footer</h5> -->
			</footer>

		</div>
	</div>
	<div class="w3-half">
		<div class="w3-margin-bottom">
			<header class="w3-container">
				<h3>Proximas notas provisorias</h3>
			</header>
			<div class="w3-container">
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
				<!-- <h5>Footer</h5> -->
			</footer>
		</div>
	</div>
</div> 
<div class="w3-row-padding">
	<div class="w3-rest">
		<canvas id="carreirasChart"></canvas>
		
		<?php 
			$json_carreiras_nomes_ = json_encode($json_carreiras_nomes);
			$json_carreiras_participantes_ = json_encode($json_carreiras_participantes);
		?>

		<script>
		var ctx = document.getElementById("carreirasChart").getContext('2d');
		var nomesCarreiras = <?php echo $json_carreiras_nomes_; ?>;
		var participantes = <?php echo $json_carreiras_participantes_; ?>;

		var myChart = new Chart(ctx, {
		    type: 'radar',
		    data: {
		        labels: nomesCarreiras,
		        datasets: [{
		            label: '# of Votes',
		            data: participantes,
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
</div>
</div>
<?php 

	$this->Js->get('#search')->event(
			'click',
			$this->Js->request(
					array(
							'action' => 'busca',
							'controller' => 'funcionarios'
						),
					array(
							'update' => '#ajaxContent',
							'method' => 'post',
							'before' => '$("#requesting").attr("style", "")',
							'complete' => '$("#requesting").attr("style", "display:none")'
						)
				)
		);

	// $formData = $this->Js->get('#funcionarioSearch')->serializeForm(array('inline' => true, 'isForm' => true));

	// $this->Js->get('#concurso')->event(
	// 		'change', 
	// 		$this->Js->request(
	// 				array(
	// 						'action' => 'findAll',
	// 						'controller' => 'funcionarios'
	// 					),
	// 				array(
	// 						'data' => $formData,
	// 						'dataExpression' => true,
	// 						'method' => 'post',
	// 						'before' => '$("#requesting").attr("style", "")',
	// 						'complete' => '$("#requesting").attr("style", "display:none")',
	// 						'update' => '#result'
	// 					)
	// 			)
	// 	);

 ?>

 <script type="text/javascript">
 	
 	$(document).ready(function () {
 		$(document).on("change", "#concurso",function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {$("#requesting").attr("style", "")}, complete:function (XMLHttpRequest, textStatus) {$("#requesting").attr("style", "display:none")}, data:$("#funcionarioSearch").serialize(), dataType:"html", success:function (data, textStatus) {$("#result").html(data);}, type:"post", url:"\/sigerh\/funcionarios\/findAll"});
 			return false;});
 		$(document).on("change", "#carreira",function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {$("#requesting").attr("style", "")}, complete:function (XMLHttpRequest, textStatus) {$("#requesting").attr("style", "display:none")}, data:$("#funcionarioSearch").serialize(), dataType:"html", success:function (data, textStatus) {$("#result").html(data);}, type:"post", url:"\/sigerh\/funcionarios\/findAll"});
 			return false;});
 		$(document).on("change", "#delegacao",function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {$("#requesting").attr("style", "")}, complete:function (XMLHttpRequest, textStatus) {$("#requesting").attr("style", "display:none")}, data:$("#funcionarioSearch").serialize(), dataType:"html", success:function (data, textStatus) {$("#result").html(data);}, type:"post", url:"\/sigerh\/funcionarios\/findAll"});
 			return false;});
 		$(document).on("change", "#categoria",function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {$("#requesting").attr("style", "")}, complete:function (XMLHttpRequest, textStatus) {$("#requesting").attr("style", "display:none")}, data:$("#funcionarioSearch").serialize(), dataType:"html", success:function (data, textStatus) {$("#result").html(data);}, type:"post", url:"\/sigerh\/funcionarios\/findAll"});
 			return false;});
 		$(document).on("click", "#btnSubmit",function (event) {$.ajax({beforeSend:function (XMLHttpRequest) {$("#requesting").attr("style", "")}, complete:function (XMLHttpRequest, textStatus) {$("#requesting").attr("style", "display:none")}, data:$("#funcionarioSearch").serialize(), dataType:"html", success:function (data, textStatus) {$("#result").html(data);}, type:"post", url:"\/sigerh\/funcionarios\/findAll"});
 			return false;});

 	});
 </script>