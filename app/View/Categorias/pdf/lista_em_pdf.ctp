<!DOCTYPE html>
<html>
<head>
	<title>Categorias - Report</title>
	<link rel="stylesheet" type="text/css" href="css/report.css">
	<link rel="stylesheet" type="text/css" href="css/pure-min.css">
</head>
<body>
	<div id="cabecalho">
		<img src="img/icon72x72.png">
		<h2>DIREC&Ccedil;ÃO DE RECURSOS HUMANOS</h2>
		<p id="endereco">
			Rua Comandante Augusto Cardoso nº 135, Caixa Postal 3276, Tef.: 21312585 ou 21324502; Fax nº 21312585, Maputo - Moçambique
		</p>
	</div>
	<h2>Report of categorias</h2>
	<table class="pure-table" style="width:100%;">
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