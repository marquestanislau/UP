<!DOCTYPE html>
<html>
<head>
	<title>Funcionarios da UP</title>
	<link rel="stylesheet" type="text/css" href="css/report.css">
	<link rel="stylesheet" href="css/pure-min.css" type="text/css">
</head>
<body>
	<div id="cabecalho">
		<img src="img/icon72x72.png">
		<h2>DIREC&Ccedil;ÃO DE RECURSOS HUMANOS</h2>
		<p id="endereco">
			Rua Comandante Augusto Cardoso nº 135, Caixa Postal 3276, Tef.: 21312585 ou 21324502; Fax nº 21312585, Maputo - Moçambique
		</p>
	</div>
	<hr>
	<h3>Lista dos funcion&aacute;rios afectos a diversas delega&ccedil;&otilde;es</h3>
	<div>
		<table style="width: 100%;" class="pure-table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Apelido</th>
					<th>Delega&ccedil;&atilde;o</th>
					<th>Contacto pessoal</th>
				</tr>
			</thead>
			<?php foreach ($funcionarios as $funcionario) : ?>
			<tr>
				<td><?php echo $funcionario['Funcionario']['nome']; ?></td>
				<td><?php echo $funcionario['Funcionario']['apelido']; ?></td>
				<td><?php echo $funcionario['Delegacao']['nome']; ?></td>
				<td><?php echo $funcionario['Funcionario']['contacto_pessoal']; ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
	<footer style="position: fixed; bottom: 0; text-align: center;">
		<small style="color: blue;">
			Lista gerada pelo SIGERH [<?php $hoje = date('d-m-Y'); echo $hoje; ?>]
		</small>
	</footer>
</body>
</html>