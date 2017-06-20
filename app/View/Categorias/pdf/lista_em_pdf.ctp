<!DOCTYPE html>
<html>
<head>
	<title>Categorias - Report</title>
	<style type="text/css">
		#cabecalho {
			border: solid thin black;
			padding: 2%;
		}
		table {
			margin: auto;
			border-spacing: 0px;
		}

		table thead {
			background-color: yellow;
		}

		td, th {
			padding: 0px 10px 2px 10px;
		}
	</style>
</head>
<body>
	<div id="cabecalho">
		<img src="path/to/image">
		<h3>SIGERH-UP</h3>
	</div>
	<h2>Report of categorias</h2>
	<table>
	<thead>
		<tr>
			<th>#Id</th>
			<th>Nome da Categoria</th>
			<th>Carreira</th>
		</tr>
	</thead>
	<tbody>
	<?php 
		foreach ( $categorias as $categoria ):
	 ?>
		<tr>
			<td><?php echo $categoria['Categoria']['id']; ?></td>
			<td><?php echo $categoria['Categoria']['nome']; ?></td>
			<td><?php echo $categoria['Carreira']['nome']; ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>

</body>
</html>