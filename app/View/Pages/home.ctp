<?php echo $this->Html->script('Chart.min'); ?>
<div id="ajaxContent">
<div id="requesting" class="w3-row-padding" style="display:none;">
	<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
	A processar...
</div>

<!-- Janela modal para os funcionarios que receberao as novas nota provisorias -->
<div class="w3-modal w3-text-white" id="notasProvisorias">
	<div class="w3-modal-content w3-animate-zoom w3-blue w3-padding w3-round">
		<header class="w3-container">
			<span class="w3-closebtn w3-hover-text-orange" onclick="document.getElementById('notasProvisorias').style.display=''">&times;</span>
			<h3><i class="fa fa-info"></i> Mensagem do sistema</h3>
		</header>
		<div class="w3-container">
			<i class="fa fa-user"></i> Candidatos por emitir a nota provis&oacute;ria
			<table class="table">
				<thead>
					<th>Posi&ccedil;&atilde;o</th>
					<th>Nome</th>
					<th>Carreira</th>
					<th></th>
				</thead>
				<tbody>
					<?php foreach ($funcionarios_notas as $funcionario) { ?>
						<?php $func_id = $funcionario['Funcionario']['id']; ?>
						<tr class="w3-hover-white">
							<td><span class="w3-button w3-blue w3-border w3-border-white w3-round"><?php echo $funcionario['Funcionario']['posicao']; ?></span></td>
							<td><?php echo $funcionario['Funcionario']['nome']; ?></td>
							<td><?php echo $funcionario['Carreira']['nome']; ?></td>
							<td><a onclick="document.getElementById('aceitarCandidatura<?php echo $func_id; ?>').style.display='block'" href="#" class="w3-button w3-round w3-green w3-hover-blue"><i class="fa fa-file-pdf-o"></i> Gerar nota!</a></td>
							<div class="w3-modal" id="aceitarCandidatura<?php echo $func_id; ?>">
								<div class="w3-blue w3-modal-content w3-padding">
									<header class="w3-conatiner">
										<span class="w3-closebtn" onclick="document.getElementById('aceitarCandidatura').style.display='none'">&times;</span>
										<h3>Atribuir nota provisoria</h3>
									</header>
									<div class="w3-container">
										<?php 
											echo $this->Form->create('Funcionario', array('url' => array('controller' => 'funcionarios', 'action' => 'nomeacao', 'ext' => 'pdf', $funcionario['Funcionario']['id'])));
											echo $this->Form->input('nuit', array('class' => 'w3-input w3-border w3-round w3-text-dark-gray w3-large'));
											echo '<label>Data do despacho: </label>';
											echo $this->Form->input('despacho', array('class' => 'w3-input w3-border datepicker w3-round w3-text-dark-gray w3-large', 'style' => 'width: 32%', 'label' => FALSE, 'type' => 'text'));
											echo $this->Form->input('id', array('value' => $funcionario['Funcionario']['id'], 'type' => 'hidden'));
										?>
										<button class="w3-button w3-large w3-round w3-margin-top w3-orange">
											<i class="fa fa-print"></i>
											Obter nota
										</button>
										<?php 
											echo $this->Form->end();
										?>
									</div>
								</div>
							</div>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- fim da janela modal -->
<div class="w3-row-padding">
	<div class="w3-quarter">
		<div class="w3-brown">
			<div class="w3-container w3-center w3-textp-brown">
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
		<div class="w3-red">
			<div class="w3-container w3-center">
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
		<div class="w3-teal">
			<div class="w3-container w3-center">
				<div class="row w3-border w3-border-teal">
					<div class="col-sm-6">
						<h3><i class="fa fa-file-pdf-o"></i></h3>
					</div>
					<div class="col-sm-6">
						<h1 class="">N</h1>
					</div>
					<div class="col-sm-12 w3-teal">
						<p><a id="nota" class="w3-hover-text-white" href="#" onclick="document.getElementById('notasProvisorias').style.display='block'">Pr&oacute;xima nota provis&oacute;ria</a></p>
						<span data-mdl-for="nota" class="mdl-tooltip w3-large">Clique para observar os proximos <br> candidatos a obter as notas</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="w3-quarter">
		<div>
			<div class="w3-container w3-center">
				<a id="search" href="#" class="w3-button w3-green w3-xxlarge w3-hover-light-green w3-hover-text-white">
					<i class="fa fa-search"></i>
					Procurar
					<span data-mdl-for="search" class="mdl-tooltip">Localize o funicon&aacute;rio <br>que desejar aqui! </span>
				</a>
			</div>
		</div>
	</div> 
</div>
<div class="w3-row-padding w3-margin-top panel panel-info">
	<div class="w3-col m8">
		<div class="w3-container">
			<h4 class="w3-text-grey w3-center">Gr&aacute;fico de rela&ccedil;&atilde;o Concurso/carreiras</h4>
			<?php 
				$json = json_encode($json_concursos_nomes);
				$json_totalidades = json_encode($json_concursos_totalidades);
			?>
			<canvas id="concursoChart" class="w3-white" ></canvas>

			<script type="text/javascript">
				var label = <?php echo $json;?>;
				var data = <?php echo $json_totalidades;?>;

				var bgcolor = new Array();
				for (var i = 0; i < data.length; i++ ) {
					bgcolor[i] = 'rgba('+(i*100)+','+(i*50)+','+(i*30)+','+0.4+')';
				}

				var ctx = document.getElementById("concursoChart").getContext('2d');
				var myChart = new Chart(ctx, {
				    type: 'bar',
				    data: {
				        labels: label,
				        datasets: [{
				            label: '# Carreiras',
				            data: data,
				            backgroundColor: bgcolor,
				            borderColor: bgcolor,
				            borderWidth: 1
				        }]
				    },
				   options: {
				         legend: { display: false },
				         title: {
				           display: true,
				           text: 'Quantidade de carreiras por concurso'
				         }
				       }
				});
			</script>
		</div>
	</div>
	<div class="w3-rest w3-padding">
		<div class="w3-center">
			<h3>Total de concursos</h3>
			<h3 class="w3-round w3-button"><?php echo count($json_concursos_nomes); ?></h3>
		</div>
	</div>
</div>
<div class="w3-row-padding panel panel-info">
	<div class="w3-col m8">
		<h4 class="w3-text-grey w3-center">Gr&aacute;fico Rela&ccedil;&atilde;o carreira e Funcion&aacute;rio</h4>
		<canvas class="w3-margin-top" id="carreirasChart"></canvas>
		<?php 
			$json_carreiras_nomes_ = json_encode($json_carreiras_nomes);
			$json_carreiras_participantes_ = json_encode($json_carreiras_participantes);
		?>
		<script>
		var ctx = document.getElementById("carreirasChart").getContext('2d');
		var nomesCarreiras = <?php echo $json_carreiras_nomes_; ?>;
		var participantes = <?php echo $json_carreiras_participantes_; ?>;

		var myChart = new Chart(ctx, {
		    type: 'line',
		    data: {
		        labels: nomesCarreiras,
		        datasets: [{
		            label: '# of Votes',
		            data: participantes,
		            backgroundColor: [
		                'rgba(54, 162, 235, 0.2)'		            ],
		            borderColor: [
		                'rgba(255,99,132,1)'
		            ],
		            borderWidth: 2
		        }]
		    },
		   options: {
		         legend: { display: false },
		         title: {
		           display: true,
		           text: 'Quantidade total de funcionarios por carreira'
		         }
		       }
		});
		</script>
	</div>
	<div class="w3-rest">
		<div class=" w3-padding w3-margin-top w3-center">
			<h3>Total de carreiras</h3>
			<h3 class="w3-button w3-round" style="background-color:rgba(54, 162, 235, 0.2); "><?php echo count($json_carreiras_participantes); ?></h3>
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