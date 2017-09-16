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
	<?php 
		echo $this->Html->script('material/material.min');
		echo $this->Html->css('material/material.indigo-orange.min');
	 ?>
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
			<p class="w3-center">Digite o seu e-mail para recuperar a sua senha <i class="fa fa-key"></i></p>
			<form id="recuperar" method="post">
				<input type="email" placeholder="Email" class="w3-input w3-border w3-sand w3-large w3-text-gray w3-round" name="email">
				<button style="width: 100%;" class="w3-btn w3-green w3-margin-top w3-round"><i class="fa fa-recycle"></i> Recupera senha</button>
			</form>
			<div id="requesting" style="display: none">
				<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
			</div>
			<p class="w3-center">Sistema de Gest&atilde;o de Recursos Humanos da UP</p>
			<div class="w3-bar w3-light-grey">
				<a href="<?php echo $this->Html->url(array('action' => 'login', 'controller' => 'users')); ?>" class="w3-button w3-teal w3-bar-item">Autenticar</a>
			</div>
			<p class="w3-center"><span class="w3-text-blue">SIGERH</span></p>
		</div>
		<div class="w3-third"></div>
	</div>
	<?php 
			$formData = $this->Js->get('#recuperar')->serializeForm(array('isForm' => true, 'inline' => true));
			$success = $this->Js->request(
					array(),
					array(
							'complete' => 'displayMessages()'
						)
				);
			$this->Js->get('#recuperar')->event(
					'submit',
					$this->Js->request(
							array(
									'action' => 'recuperar',
									'controller' => 'users'
								),
							array(
									'method' => 'post',
									'data' => $formData,
									'dataExpression' => true,
									'async' => true,
									'before' => '$("#requesting").attr("style", "")',
									'complete' => '$("#requesting").attr("style", "display:none")',
									'update' => '#message',
									'success' => $success
								)

						)
				);

	 ?>
	 <?php echo $this->Js->writeBuffer(array('cache' => FALSE, 'buffer' => FALSE)); ?>
	 <div id="message" class="mdl-js-snackbar mdl-snackbar w3-green">
	   <div class="mdl-snackbar__text"></div>
	   <button class="mdl-snackbar__action" type="button"></button>
	 </div>
</body>
</html>