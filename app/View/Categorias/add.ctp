<div id="categoriaAddForm" class="w3-modal">
	<div class="w3-modal-content w3-animate-top w3-round" style="width: 50%;">
		<header class="w3-container w3-center w3-text-blue">
			<span onclick="document.getElementById('categoriaAddForm').style.display='none'"
       class="w3-closebtn w3-hover-text-orange">&times;</span>
			<h4><i class="fa fa-tags"></i> <?php echo __('Adicionar Categoria'); ?></h4>
		</header>
		<div class="w3-container w3-padding-32">
			<div id="sucesso"></div>
			<?php echo $this->Form->create('Categoria', array('class' => 'w3-container', 'id' => 'formAdd')); ?>
			<?php
				echo $this->Form->input('nome', array('class' => 'w3-input w3-round w3-border w3-hover-khaki w3-margin-bottom', 'id' => 'nome'));
				echo $this->Form->input('carreira_id', array('empty' => '==Seleccione uma carreira==', 'class' => 'w3-input w3-round w3-border w3-hover-khaki w3-large'));
			?>
			<div id="requesting" style="display:none">
				<?php echo $this->Html->image('ajax/ajax-loader.gif');?>
			</div>
		</div>
		<footer class="w3-container w3-padding w3-margin-left">
			<button class="w3-button w3-green w3-round">
				<span class="glyphicon glyphicon-ok"></span>
				Submeter
			</button>
			<?php echo $this->Form->end(); ?>
			<button onclick="clearInput('formAdd', 'nome')" class="w3-button w3-ligh-grey w3-round">
				<span class="glyphicon glyphicon-plus"></span>
				Nova categoria
			</button>
		</footer>
	</div>
</div>
<?php
	$dados = $this->Js->get('#formAdd')->serializeForm(array('inline' => true, 'isForm' => true));
	$this->Js->get('#formAdd')->event(
		"submit",
		$this->Js->request(
			array(
				'action' => 'add'
			),
			array(
				'data' => $dados,
				'sync' => true,
				'method' => 'post',
				'dataExpression' => true,
				'update' => '#message',
				'before' => '$("#requesting").attr("style", "")',
				'complete' => '$("#requesting").attr("style", "display:none")',
				'success' => $this->Js->request(
								array(
									'action' => 'index'
								),
								array(
									'update' => '#table-body',
									'complete' => 'displayMessages()',
									'method' => 'post',
									'async' => true
								)
							)
			)
		)
	);

?>
