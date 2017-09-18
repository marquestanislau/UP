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
		| <?php 
			$hoje = date('Y');
			$birth = date('Y', strtotime($funcionario['Funcionario']['data_nascimento']));
			$idade = ($hoje - $birth);
			echo $idade;
		 ?>
		 anos	
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
	    <tbody>
		<tr>
			<td>
				Classe:
			</td>
			<td>
				<?php echo $funcionario['Clazze']['nome']; ?> 
			</td>
		</tr>
		<tr>
			<td>
				Email:
			</td>
			<td>
				<?php echo $funcionario['Funcionario']['email_pessoal']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Contacto primario:
			</td>
			<td>
				<?php echo $funcionario['Funcionario']['contacto_pessoal']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Delega&ccedil;&atilde;o:
			</td>
			<td>
				<?php echo $funcionario['Delegacao']['nome']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Contacto alternativo:
			</td>
			<td>
				<?php echo $funcionario['Funcionario']['contacto_alternativo']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Data do despacho:
			</td>
			<td>
				<?php echo $funcionario['Funcionario']['despacho']; ?>
			</td>
		</tr>
		<tr>
			<td>
				NUIT
			</td>
			<td>
				<?php echo $funcionario['Funcionario']['nuit']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Sexo
			</td>
			<td>
				<?php echo $funcionario['Funcionario']['sexo']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Data de nascimento
			</td>
			<td>
				<?php echo $funcionario['Funcionario']['data_nascimento']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Posi&ccedil;&atilde;o
			</td>
			<td>
				<?php echo $funcionario['Funcionario']['posicao']; ?>
			</td>
		</tr>
		<tr>
			<td>
				Carreira:
			</td>
			<td>
				<?php echo $funcionario['Carreira']['nome']; ?>
			</td>
		</tr>
		</tbody>
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