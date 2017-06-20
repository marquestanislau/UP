<!DOCTYPE html>
<html>
<head>
	<title>Relatorio</title>
	<style>

		html {
			font-size: small;
			color: #262626;
		}
		
		div {
			padding: 2%;
		}

		div#header {
			border: solid thin;
		}
		table {
			border-spacing: 0px;
			margin: auto;
			table-layout: auto;
		}
		tr {
			border-top: solid black;
		}
		thead > tr {
			background-color: #2196F3;
		}

		tbody td, thead th {
			padding: 0px 20px 0px 20px;
		}


	</style>
</head>
<body>
	<div id="header">
		<img src="sigerh/img/icon.png">
		<h3 style="color: #2196F3;">SIGERH-UP</h3>
	</div>
	<div id="content"> 
		<h4 style="text-align: center;">** Lista da rela&ccedil;&atilde;o Carreira/Classe **</h4>
		<table>
			<thead>
				<tr>
					<th># ORDEM</th>
					<th>NOME DA CLASSE</th>
					<th>NOME DA CARREIRA</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach( $clazzes as $classe) { ?>
				<tr>
					<td><?php echo $classe['Clazze']['id']; ?></td>
					<td><?php echo $classe['Clazze']['nome']; ?></td>
					<td id="carreira"><?php echo $classe['Carreira']['nome']; ?></td>
				</tr>
				<?php } ?>
			</tbody>
			<footer>
				Data:
				<strong>
					<?php 
						$hoje = date("d/m/Y");
						echo $hoje; 
					?>
				</strong>
			</footer>
		</table>
	</div>
</body>
</html>
