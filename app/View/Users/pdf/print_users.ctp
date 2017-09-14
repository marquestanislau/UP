<!DOCTYPE html>
<html>
<head>
	<title>todos utilizadores do sistema</title>
	<style type="text/css">
		table {
			margin: auto;
			border-spacing: 0px;
		}
		thead {
			background-color: #2196F3;
		}

		#header {
			border: solid thin black;
			padding: 2%;
		}
		img {
			width: 100px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/pure-min.css">
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
	<div id="body">
		Data: <strong><?php $hoje = date('d/m/Y'); echo $hoje; ?></strong>
		<h3 style="text-align: center;">Lista de utilizadores do sistema.</h3>
		<table class="pure-table">
			<thead>
				<tr>
					<th>Nome</th>
					<!-- <th>Apelido</th> -->
					<th>Email</th>
					<th>Contacto</th>
					<th>Grupo</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ( $usuarios as $usuario ): ?>
					<tr>
						<td><?php echo $usuario['User']['username']; ?></td>
						<!-- <td><?php //echo $usuario['User']['apelido']; ?></td> -->
						<td><?php echo $usuario['User']['email']; ?></td>
						<td><?php echo $usuario['User']['contacto']; ?></td>
						<td><?php echo $usuario['Group']['name']; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<p style="position: fixed; bottom: 0;">Lista de todos utilizadores</p>
</body>
</html>