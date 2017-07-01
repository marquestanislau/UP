<!DOCTYPE html>
<html>
<head>
	<title>Concursos</title>
	<style type="text/css">
		#cabecalho {
			border: solid black thin;
			padding: 2%;
		}

		table {
			border-spacing: 0px;
			margin: auto;
		}
		thead {
			background-color: #2196F3;
		}

		tbody td {

		}
		
	</style>
</head>
<body>
	<div id="cabecalho">
		<img src="img/icon.png">
		<h4>SIGERH</h4>
	</div>
	<div id="corpo">
		<h4>Lista de concursos </h4>
		<table>
			<head>
				<tr>
					<th>
						Data
					</th>
					<th>
						Nome
					</th>
				</tr>
			</head>
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

</body>
</html>