<link rel="stylesheet" type="text/css" href="css/pure-min.css">
<link rel="stylesheet" type="text/css" href="css/report.css">
<script type="text/javascript" src="js/Chart.min.js"></script>

<style type="text/css">
	table {
		width: 100%;
	}
</style>

<div id="cabecalho">
	<img src="img/icon72x72.png">
	<h2>DIREC&Ccedil;ÃO DE RECURSOS HUMANOS</h2>
	<p id="endereco">
		Rua Comandante Augusto Cardoso nº 135, Caixa Postal 3276, Tef.: 21312585 ou 21324502; Fax nº 21312585, Maputo - Moçambique
	</p>
</div>
			<h3><i class="fa fa-file-text"></i> Relat&oacute;rio do sistema - [Funcion&aacute;rios]</h3>
		
				<p>Quantidade de funcion&aacute;rios por Delega&ccedil;&otilde;es</p>
				<?php 
					$nomes_delegacoes = array();
					$numeros = array();
					$i = 0;
					$j = 0;
				 ?>
				<table class="pure-table">
					<tr>
				<?php foreach ($delegacao as $singular) {
				?>
						<td><?php echo $singular['Delegacao']['nome']; ?></td>
						<?php 
							$nomes_delegacoes[$i] = $singular['Delegacao']['nome'];
							$i++;
						 ?>
				<?php
				} ?>
					</tr>
					<tr>
				<?php foreach ($delegacao as $singular) {
				?>
						<td><?php echo count($singular['Funcionario']); ?></td>
						<?php 
							$numeros[$j] = count($singular['Funcionario']);
							$j++;
						 ?>
				<?php
				} ?>
					</tr>			
				</table>
				
				<div class="row">
					<div class="col-md-6"><canvas id="delegacao_funcionario"></canvas></div>
					<div class="col-md-6">
						<div class="row">
							<div class="w3-center alert alert-info">
								<p>
									As tabelas a baixo mostram os dados relativos a quantidade de funcion&aacute;rios 
									subdividida em dois grupos <b>Corpo tecnico administractivo</b> e <b>Corpo docente</b> respectivamente.
								</p>
							</div>
							<div class="col-md-6">
								<h4><i class="fa fa-user"></i> CORPO T&Eacute;CNICO ADMINISTRATIVO</h4>
								<table class="pure-table pure-table-striped">
									<tr>
										<td>Masculino</td>
										<td><?php echo count($cta_masculino); ?></td>
									</tr>
									<tr>
										<td>Feminino</td>
										<td><?php echo count($cta_feminino); ?></td>
									</tr>
									<tr>
										<td><strong>Total:</strong></td>
										<td><?php echo count($cta_masculino) + count($cta_feminino); ?></td>
									</tr>
								</table>
							</div>
							<div class="col-md-6">
								<h4><i class="fa fa-graduation-cap"></i> CORPO DOCENTE</h4>
								<table class="pure-table pure-table-striped">
									<tr>
										<td>Masculino</td>
										<td><?php echo count($cd_masculino); ?></td>
									</tr>
									<tr>
										<td>Feminino</td>
										<td><?php echo count($cd_feminino); ?></td>
									</tr>
									<tr>
										<td><strong>Total:</strong></td>
										<td><?php echo count($cd_masculino) + count($cd_feminino); ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>

				<?php 
					$json = json_encode($nomes_delegacoes);
					$json_totalidades = json_encode($numeros);
				?>

				<script type="text/javascript">
					var label = <?php echo $json;?>;
					var data = <?php echo $json_totalidades;?>;

					var bgcolor = new Array();
					for (var i = 0; i < data.length; i++ ) {
						bgcolor[i] = 'rgba('+(i*150)+','+(i*30)+','+(i*10)+','+0.4+')';
					}

					var ctx = document.getElementById("delegacao_funcionario").getContext('2d');
					var myChart = new Chart(ctx, {
					    type: 'bar',
					    data: {
					        labels: label,
					        datasets: [{
					            label: '# Numero de funcionarios por delegacao',
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
					           text: 'Numero de funcionarios por delegacao'
					         }
					       }
					});
				</script>
			
			
	