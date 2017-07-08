<!DOCTYPE html>
<html>
<head>
	<title>Demo print employee</title>
	<style type="text/css">
		#header {
			text-align: center;
			padding: 2%;
		}
		table {
			width: 100%;
		}
	</style>
	<link rel="stylesheet" href="css/pure-min.css" type="text/css">
</head>
<body>
	<div id="header">
		<img src="img/icon.png">
	</div>
	<h1>
		<?php echo $funcionario['Funcionario']['nome']; ?>
		<?php echo $funcionario['Funcionario']['apelido']; ?>	
	</h1>
	<table class="pure-table">
		<thead>
        <tr>
            <th>Nome Completo</th>
            <th></th>
        </tr>
    </thead>
		<tr>
			<td>
				<?php echo $funcionario['Funcionario']['nome']; ?> 
				<?php echo $funcionario['Funcionario']['apelido']; ?>
			</td>
			<td></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td>
				<?php echo $funcionario['Funcionario']['email_pessoal']; ?>
			</td>
		</tr>
		<tr>
			<td>Contacto primario</td>
			<td><?php echo $funcionario['Funcionario']['contacto_pessoal']; ?></td>
		</tr>
	</table>
</body>
</html>