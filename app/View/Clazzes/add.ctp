<div id="classeModal" class="w3-modal">
	<div class="w3-modal-content">
		<header class="w3-container w3-blue">
			<span class="w3-closebtn" onclick="document.getElementById('classeModal').style.display = 'none'">
				&times;
			</span>
			<h4>Adicao de classes</h4>
		</header>
		<div class="w3-container w3-margin">
			<div id="sucesso"></div>
			<?php echo $this->Form->create('Clazze', array('id' => 'ajaxFormClasseAdd', 'class' => 'w3-container')); ?>
			<?php
				echo $this->Form->input('nome', array('class' => 'w3-input w3-border w3-hover-khaki'));
				echo $this->Form->input('carreira_id', array('class' => 'w3-input w3-border w3-hover-khaki'));
			?>
			<div id="requesting" style="display:none">
				<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
			</div>
		</div>
		<footer class="w3-container w3-white w3-padding">
			<button class="w3-btn w3-green w3-large">
				<span class="glyphicon glyphicon-ok"></span>
				Submeter
			</button>
			<?php echo $this->Form->end(); ?>
		</footer>
	</div>
</div>
<?php
	$dados = $this->Js->get('#ajaxFormClasseAdd')->serializeForm(array('inline' => true, 'isForm' => true));
	$this->Js->get('#ajaxFormClasseAdd')->event(
		"submit",
		$this->Js->request(
			array(
				'action' => 'add'
			),
			array(
				'method' => 'post',
				'data' => $dados,
				'dataExpression' => true,
				'update' => '#sucesso',
				'async' => true,
				'before' => '$("#requesting").attr("style", "")',
				'complete' => '$("#requesting").attr("style", "display:none")',
				'success' => $this->Js->request(
								array('action' => 'index'),
								array(
									'method' => 'post',
									'update' => '#table-body',
									'dataExpression' => true,
									'async' => true
								)
							)
			)
		)
	);
?>

