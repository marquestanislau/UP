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
		<div id="centered" class="w3-white w3-padding w3-third w3-card-4 w3-round">
			<center class="w3-padding">
				<?php echo $this->Html->image('icon.png');?>
				<h4 class="w3-text-blue">Esqueceu a sua senha?</h4>
			</center>
			<p>Digite o seu e-mail para recuperar a sua senha</p>
			<input type="text" placeholder="Email" class="w3-input w3-border w3-sand" name="">
			<button style="width: 100%;" class="w3-btn w3-green w3-margin-top">Enviar pedido</button>
			<p class="w3-center">Sistema de Gest&atilde;o de Recursos Humanos da UP</p>
			<p class="w3-center"><span class="w3-text-blue">SIGERH</span></p>
		</div>
		<div class="w3-third"></div>
	</div>

</body>
</html>