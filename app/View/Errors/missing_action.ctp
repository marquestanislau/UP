
<div class="alert alert-info w3-round w3-padding">
	<p class="error">
		<strong><?php echo __d('cake', 'Erro'); ?>: </strong>
		<?php printf(
			__d('cake', 'O endereco %s n&atilde;o esta disponivel no servidor.'),
			"<strong>'{$url}'</strong>"
		); ?>
	</p>
	<h1 style="font-size:2000%;">404</h1>
	<h1 class="w3-padding">P&aacute;gina n&atilde;o encontrada! <a href="<?php echo $this->Html->url(array('action' => '/', 'controller' => 'pages')); ?>" class="w3-button w3-large w3-round w3-green"><i class="fa fa-home"></i> P&aacute;gina inicial</a></h1>
</div>