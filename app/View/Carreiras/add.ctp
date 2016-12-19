<div id="carreiraModal" class="w3-modal">
	<div class="w3-modal-content">

		<header class="w3-container w3-blue"> 
			<span onclick="document.getElementById('carreiraModal').style.display='none'" 
			class="w3-closebtn">&times;</span>
			<h4>
				<span class="glyphicon glyphicon-briefcase" style="font-size: 24px;"></span> 
				<?php echo __('Adicionar Carreiras'); ?>
			</h4>
		</header>

		<div class="w3-container w3-padding-32">
			<div id="sucesso"></div>
			<?php echo $this->Form->create('Carreira', array('url' => array('action' => 'adicionarCarreira'), 'class' => 'w3-container', 'id' => 'addFormCarreira')); ?>
			<?php
			echo $this->Form->input('nome', array('class' => 'w3-input w3-hover-khaki', 'label' => 'Designa&ccedil;&atilde;o da carreira'));
			?>
			<div id="processando" style="display: none">
				<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
			</div>
		</div>

		<footer class="w3-container w3-blue w3-padding-8">
			<button class="w3-btn w3-green w3-large"><span class="glyphicon glyphicon-ok"></span> 
				Submeter
			</button>
			<?php echo $this->Form->end(); ?>
		</footer>

	</div>
</div>
<?php 
	$data = $this->Js->get('#addFormCarreira')->serializeForm(array('isForm' => true, 'inline' => true));
	$this->Js->get('#addFormCarreira')->event(
		"submit",
		$this->Js->request(
			array('action' => 'adicionarCarreira'),
			array(
				'update' => '#sucesso',
				'data' => $data,
				'before' => '$("#processando").attr("style", "")',
				'complete' => '$("#processando").attr("style", "display:none")',
				'async' => true,
				'dataExpression' => true,
				'method' => 'post',
				'success' => $this->Js->request(
								array(
									'action' => 'index'
								),
								array(
									'update' => '#corpo',
									'method' => 'post',
									'async' => true
								)
							)
			)
		)
	);
 ?>

