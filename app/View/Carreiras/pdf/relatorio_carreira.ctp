<!DOCTYPE html>
<html>
<head>
	<title>Relatorio/Carreiras</title>
	<link rel="stylesheet" type="text/css" href="css/pure-min.css">
	<link rel="stylesheet" type="text/css" href="css/report.css">
	<style type="text/css">
		table {
			width: 100%;
			line-height: normal;
		}

	</style>
</head>
<body>
	<div id="cabecalho">
		<img src="img/icon72x72.png">
		<h2>DIREC&Ccedil;ÃO DE RECURSOS HUMANOS</h2>
		<p id="endereco">
			Rua Comandante Augusto Cardoso nº 135, Caixa Postal 3276, Tef.: 21312585 ou 21324502; Fax nº 21312585, Maputo - Moçambique
		</p>
	</div>

	<div class="corpo">
		<h4>Lista das carreiras existentes no sistema!</h4>
		<table class="pure-table">
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