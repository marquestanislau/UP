<!DOCTYPE html>
<html>
<head>
	<title>Bem vindo!</title>
	<?php echo $this->Html->css('bootstrap/bootstrap.min'); ?>
</head>
<body>
	<h1 style="color: gray;">SIGERH</h1>
	<h3>Activa&ccedil;&atilde;o de conta de utilizador</h3>

	<p>Utilize este dados abaixo para aceder ao sistema</p>
	<p><b>Nota:</b> A senha fornecida n&atilde;o e&acute; alteravel.</p>
	
	<table class="table table-striped">
		<tr>
			<th>Nome do utilizador</th>
			<th>Palavra passe</th>
		</tr>
		<tr>
			<td><?php echo $user['User']['username']; ?></td>
			<td><?php echo $password; ?></td>
		</tr>
	</table>

	<p>Use este <a href="<?php echo $url; ?>">endere&ccedil;o</a> para aceder ao sistema</p>

	<p style="position: fixed; bottom: 0;">O sistema de gest&atilde;o do processo de recrutamento e selec&ccedil;&atilde;o da universidade pedag&oacute;gica, todos direitos reservados</p>
</body>
</html>