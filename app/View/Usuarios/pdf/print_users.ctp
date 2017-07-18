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
</head>
<body>
	<div id="header">
		<img src="img/icon.png">
		<h3>SIGERH-UP</h3>
	</div>
	<div id="body">
		Data: <strong><?php $hoje = date('d/m/Y'); echo $hoje; ?></strong>
		<h3 style="text-align: center;">Lista de utilizadores do sistema.</h3>
		<table class="table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Apelido</th>
					<th>Email</th>
					<th>Contacto</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ( $usuarios as $usuario ): ?>
					<tr>
						<td><?php echo $usuario['Usuario']['nome']; ?></td>
						<td><?php echo $usuario['Usuario']['apelido']; ?></td>
						<td><?php echo $usuario['Usuario']['email']; ?></td>
						<td><?php echo $usuario['Usuario']['contacto']; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>