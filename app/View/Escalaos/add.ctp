<div class="w3-modal" id="escAddModal">
	<div class="w3-modal-content">
		<header class="w3-teal w3-container">
			<span class="w3-closebtn" onclick="document.getElementById('escAddModal').style.display='none'">&times;</span>
			<h4>Adicionar escal&otilde;es</h4>
		</header>
		<div class="w3-container">
		<div id="sucesso"></div>
		<?php echo $this->Form->create('Escalao', array('id' => 'ajaxFormEscAdd', 'class' => 'w3-container', 'url' => array('action' => 'add', 'controller' => 'escalaos'))); ?>
		<?php
			echo $this->Form->input('nome', array('class' => 'w3-input w3-hover-khaki w3-border'));
			echo $this->Form->input('categoria_id', array('empty' => '-- Selecione a categoria --', 'class' => 'w3-input w3-hover-light-grey w3-border'));
			echo $this->Form->input('clazze_id', array('empty' => '-- Seleccione a carreira --', 'class' => 'w3-input w3-hover-sand w3-border'));
		?>
		<div style="display: none" id="requesting">
			<?php echo $this->Html->image('ajax/ajax-loader.gif');?>
		</div>
		</div>
		<footer class="w3-container w3-padding">
			<button class="w3-btn w3-green w3-large">
				<span class="glyphicon glyphicon-plus">
				</span>
				Submeter
			</button>
			<?php echo $this->Form->end(); ?>
		</footer>
	</div>
</div>
<?php
	$dados = $this->Js->get('#ajaxFormEscAdd')->serializeForm(array('inline' => true, 'isForm' => true));
	$success = $this->Js->request(
							array('action' => 'index'),
							array(
								'update' => '#table-body',
								'method' => 'post'
							)
						);
	$this->Js->get('#ajaxFormEscAdd')->event(
		"submit",
		$this->Js->request(
			array('action' => 'add'),
			array(
				'update' => '#sucesso',
				'data' => $dados,
				'dataExpression' => true,
				'method' => 'post',
				'async' => true,
				'before' => '$("#requesting").attr("style", "")',
				'complete' => '$("#requesting").attr("style", "display:none")',
				'success' => $success
			)
		)
	);
?>