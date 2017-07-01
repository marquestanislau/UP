<!DOCTYPE html>
<html>
<head>
	<title>Relatorio/Carreiras</title>
	<style type="text/css">
		#header {
			border: solid black thin;
			padding: 2%;
		}
		#body {

		}
		table {
			margin: auto;
			border-spacing: 0px;
		}

		thead {
			background-color: #3a3a3a;
		}

		tbody td {
			padding-left: 2%;
			padding-right: 2%;
		}
	</style>
	<meta charset="utf-8" >
</head>
<body>
	<div id="header">
		<img src="img/icon.png">
		<h3>SIGERH</h3>
	</div>

	<div id="body">
		<h4>Lista das carreiras existentes no sistema!</h4>
		<table>
			<thead>
				<tr>
					<th>#ID</th>
					<th>DESIGNA&Ccedil;&Atilde;O</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ( $carreiras as $carreira ) { ?>
					<tr>
						<td><?php echo $carreira['Carreira']['id']; ?></td>
						<td><?php echo $carreira['Carreira']['nome']; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		
	</div>

</body>
</html>