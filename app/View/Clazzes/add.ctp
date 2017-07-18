<div id="classeModal" class="w3-modal">
	<div class="w3-modal-content w3-animate-zoom">
		<header class="w3-container w3-blue">
			<span class="w3-closebtn" onclick="document.getElementById('classeModal').style.display = 'none'">
				&times;
			</span>
			<h4> <i class="fa fa-cube"></i> Adi&ccedil;&atilde;o de classes</h4>
		</header>
		<div class="w3-container w3-margin">
			<div id="sucesso"></div>
			<?php echo $this->Form->create('Clazze', array('id' => 'ajaxFormClasseAdd', 'class' => 'w3-container')); ?>
			<?php
				echo $this->Form->input('nome', array('class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => 'Ex: Classe E', 'id' => 'nome'));
				echo $this->Form->input('carreira_id', array('class' => 'w3-input w3-border w3-hover-khaki', 'empty' => 'Pertencente a qual das Carreiras?'));
			?>
			<div id="requesting" style="display:none">
				<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
			</div>
		</div>
		<footer class="w3-container w3-white w3-padding">
			<button class="w3-button w3-border">
				<span class="glyphicon glyphicon-ok"></span>
				Submeter
			</button>
			<?php echo $this->Form->end(); ?>
			<button onclick="clearInput('ajaxFormClasseAdd', 'nome')" class="w3-button w3-border">
				<i class="fa fa-plus"></i>
				Adicionar outra
			</button>
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
				'update' => '#message',
				'async' => true,
				'before' => '$("#requesting").attr("style", "")',
				'complete' => '$("#requesting").attr("style", "display:none")',
				'success' => $this->Js->request(
								array('action' => 'index'),
								array(
									'method' => 'post',
									'update' => '#table-body',
									'dataExpression' => true,
									'async' => true,
									'complete' => 'displayMessages()'
								)
							)
			)
		)
	);
?>

