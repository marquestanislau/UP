<!DOCTYPE html>
<html>
<head>
	<title>Concursos</title>
	<style type="text/css">

		table {
			width: 100%;
		}
		
	</style>
	<link rel="stylesheet" href="css/pure-min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/report.css">
</head>
<body>
	<div id="cabecalho">
		<img src="img/icon72x72.png">
		<h2>DIREC&Ccedil;ÃO DE RECURSOS HUMANOS</h2>
		<p id="endereco">
			Rua Comandante Augusto Cardoso nº 135, Caixa Postal 3276, Tef.: 21312585 ou 21324502; Fax nº 21312585, Maputo - Moçambique
		</p>
	</div>
	<div id="corpo">
		<h4>Lista de concursos: <?php $data = date('d/m/Y'); echo $data; ?></h4>
		<table class="pure-table">
			<thead>
				<tr>
					<th>
						Data
					</th>
					<th>
						Nome
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ( $concursos as $concurso ): ?>
				<tr>
					<td><?php echo $concurso['Concurso']['data_aprovacao']; ?></td>
					<td><?php echo $concurso['Concurso']['nome']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<footer>
		<p>Todos direitos reservados blah</p>
	</footer>
</body>
</html>