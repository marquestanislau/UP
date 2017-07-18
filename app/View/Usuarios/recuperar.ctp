<!DOCTYPE html>
<html>
<head>
	<title>Recuperar senha</title>
	<style type="text/css">
		div#centered {
			position: absolute;
			top: 10%;
			right: 0;
			bottom: 10%;
			left: 0;
			margin: auto;
		}		
	</style>
</head>
<body class="w3-blue">
	<div class="w3-row">
		<div class="w3-third">
			<p></p>
		</div>
		<div id="centered" class="w3-white w3-padding w3-third w3-card-4">
			<center>
				<?php echo $this->Html->image('icon.png');?>
				<h1 class="w3-text-blue">Esqueceu a sua senha?</h1>
			</center>
			<p>Digite o seu email para recuperar a sua senha</p>
			<input type="text" placeholder="Email" class="w3-input w3-border w3-sand" name="">
			<button class="w3-btn w3-green w3-margin-top">Trocar senha</button>
			<p>Sistema de Gest&atilde;o de Recursos Humanos da UP <span class="w3-text-blue">SIGERH</span></p>
		</div>
		<div class="w3-third"></div>
	</div>

</body>
</html>