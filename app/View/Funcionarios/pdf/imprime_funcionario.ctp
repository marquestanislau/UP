<!DOCTYPE html>
<html>
<head>
	<title>Demo print employee</title>
	<style type="text/css">
		table {
			width: 100%;
		}
	</style>
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
	<h1>
		<?php echo $funcionario['Funcionario']['nome']; ?>
		<?php echo $funcionario['Funcionario']['apelido']; ?>	
	</h1>
	<table class="pure-table">
		<thead>
        <tr>
            <th>Nome Completo</th>
            <th>
            	<?php echo $funcionario['Funcionario']['nome']; ?> 
				<?php echo $funcionario['Funcionario']['apelido']; ?>
			</th>
        </tr>
    </thead>
		<tr>
			<td>
				Classe:
			</td>
			<td>
				<?php echo $funcionario['Clazze']['nome']; ?> 
			</td>
		</tr>
		<tr>
			<td><b>Contactos</b></td>
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
		<tr>
			<td>Contacto corporativo</td>
			<td><?php echo $funcionario['Funcionario']['contacto_trabalho']; ?></td>
		</tr>
		<tr>
			<td>Contacto alternativo</td>
			<td><?php echo $funcionario['Funcionario']['contacto_alternativo']; ?></td>
		</tr>
	</table>
	<footer style="padding: 10px 0px 0px 0px;">
		<i>
			<?php 
				$hoje = date('d-m-Y'); 
				echo "Data: $hoje";
			?>
		</i>
	</footer>
</body>
</html>