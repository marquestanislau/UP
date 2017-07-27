<!-- The Modal -->
<div id="sectoresModal" class="w3-modal">
  <div class="w3-modal-content w3-round" style="width: 50%;">
  <header class="w3-container w3-text-blue">
      <span onclick="document.getElementById('sectoresModal').style.display='none'"
       class="w3-closebtn w3-hover-text-orange">&times;</span>
       <h4><?php echo __('Adicionar novos Sectores a Delega&ccedil;&atilde;o'); ?></h4>
     </header>

     <div class="w3-container">
     	<div id="sucesso"></div>
		<div class="w3-margin">
			<?php echo $this->Form->create('Sectore', array('id' => 'ajaxSectorForm', 'class' => 'w3-container', 'url' => array('controller'  => 'sectores', 'action' => 'add'))); ?>
			<?php
				echo $this->Form->input('designacao', array('class' => 'w3-input w3-round w3-hover-khaki w3-border', 'label' => 'Designa&ccedil;&atilde;o', 'id' => 'nome'));
				echo $this->Form->input('delegacao_id', array('empty' => '** Escolha a delegacao **', 'class' => 'w3-input w3-round w3-hover-khaki w3-border', 'label' => 'Delega&ccedil;&atilde;o'));
			?>
			<div id="processando" style="display: none;">
				<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
			</div>
		</div>
     </div>

     <footer class="w3-container w3-padding w3-margin-left">
	    <button class="w3-button w3-round w3-green">
	    	<i class="fa fa-check"></i>
    	 	Submeter
     	</button>
		<?php echo $this->Form->end(); ?>
		<button onclick="clearInput('ajaxSectorForm', 'nome')" class="w3-button w3-round w3-ligth-grey">
	    	<i class="fa fa-plus"></i>
    	 	Novo sector
     	</button>
     </footer>
  </div>
</div>

<?php
	$dados = $this->Js->get('#ajaxSectorForm')->serializeForm(array('inline' => true, 'isForm' => true));

	$success = $this->Js->request(
			array(
					'action' => 'index',
					'controller' => 'sectores'
				),
			array (
					'update' => '#table-body',
					'method' => 'post',
					'dataexpression' => true,
					'async' => true,
					'complete' => 'displayMessages()'
				)
		);

	$this->Js->get('#ajaxSectorForm')->event(
		"submit",
		$this->Js->request(
			array('action' => 'add'),
			array(
				'update' => '#message',
				'data' => $dados,
				'method' => 'post',
				'dataExpression' => true,
				'async' => true,
				'before' => '$("#processando").attr("style", "")',
				'complete' => '$("#processando").attr("style", "display:none")',
				'success' => $success
			)
		)
	);
?>
