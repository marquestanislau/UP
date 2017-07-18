<!DOCTYPE html>
<html>
<head>
	<title>Relatorio</title>
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
	<div id="content"> 
		<h4 style="text-align: center;">** Lista da rela&ccedil;&atilde;o Carreira/Classe **</h4>
		<table style="width: 100%;" class="pure-table">
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
