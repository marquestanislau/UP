<!DOCTYPE html>
<html>
<head>
	<title>Concursos</title>
	<style type="text/css">
		#cabecalho {
			border: solid black thin;
			padding: 2%;
			text-align: center;
		}

		table {
			width: 100%;
		}
		
	</style>
	<link rel="stylesheet" href="css/pure-min.css" type="text/css">
</head>
<body>
	<div id="cabecalho">
		<img src="img/icon.png">
		<h4>SIGERH</h4>
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