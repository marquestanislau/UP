<div class="w3-modal" id="delegacaoModalWindow">
	<div class="w3-modal-content w3-animate-zoom">
		<header class="w3-container w3-blue">
			<span onclick="document.getElementById('delegacaoModalWindow').style.display='none'" class="w3-closebtn">&times;</span>
			<h5><span class="fa fa-map-signs"></span> Insira nova delega&ccedil;&atilde;o</h5>
		</header>
		<div class="w3-container w3-padding">
			<div id="sucesso">
			</div>
			<?php echo $this->Form->create('Delegacao', array('class' => 'w3-container', 'id' => 'delegaFormAdd')); ?>
			<?php
				echo $this->Form->input('nome', array('class' => 'w3-border w3-input w3-hover-khaki', 'placeholder' => 'Nampula..'));
			?>
		</div>
		<div id="requesting" style="display:none">
			<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
		</div>
		<footer class="w3-container w3-padding">
			<button class="w3-btn w3-green w3-large"><span class="glyphicon glyphicon-ok"></span> Submeter dados</button>
			<?php echo $this->Form->end(); ?>
		</footer>
	</div>
</div>
<?php
	$dados = $this->Js->get('#delegaFormAdd')->serializeForm(array('inline' => true, 'isForm' => true));
	$success = $this->Js->request(
			array('action' => 'index'),
			array(
				'update' => '#table-body',
				'method' => 'post',
				'async' => true,
				'dataExpression' => true,
				'complete' => 'displayMessages()'
			)
	);
	$this->Js->get('#delegaFormAdd')->event(
								"submit",
								$this->Js->request(
									array('action' => 'add'),
									array(
										'update' => '#sucesso',
										'method' => 'post',
										'data' => $dados,
										'dataExpression' => true,
										'async' => true,
										'before' => '$("#requesting").attr("style", "")',
										'complete' => '$("#requesting").attr("style", "display:none")',
										'success' => $success
									)
							)
		);
?>
