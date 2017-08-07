<!DOCTYPE html>
<html>
<head>
	<title>Nomea&ccedil;&atilde;o provis&oacute;ria <?php echo $funcionario['Funcionario']['nome']; ?> </title>
	<link rel="stylesheet" type="text/css" href="css/report.css">
</head>
<body>
	<?php 

		if ($funcionario['Carreira']['tipo'] == 0) {
			include('nomeacao_cta.ctp');
		} else {
			include('nomeacao_cd.ctp');
		}
	 ?>
</body>
</html>