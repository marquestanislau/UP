<!-- The Modal -->
<div id="sectoresModal" class="w3-modal">
  <div class="w3-modal-content">
  <header class="w3-container w3-blue">
      <span onclick="document.getElementById('sectoresModal').style.display='none'"
       class="w3-closebtn">&times;</span>
       <h4><?php echo __('Adicionar Sectores novos a Delega&ccedil;&atilde;o'); ?></h4>
     </header>

     <div class="w3-container">
     	<div id="sucesso"></div>
		<div class="w3-margin">
			<?php echo $this->Form->create('Sectore', array('id' => 'ajaxSectorForm', 'class' => 'w3-container', 'url' => array('controller'  => 'sectores', 'action' => 'add'))); ?>
			<?php
				echo $this->Form->input('designacao', array('class' => 'w3-input w3-hover-khaki w3-border', 'label' => 'Designa&ccedil;&atilde;o', 'id' => 'nome'));
				echo $this->Form->input('delegacao_id', array('empty' => '** Escolha a delegacao **', 'class' => 'w3-input w3-hover-khaki w3-border', 'label' => 'Delega&ccedil;&atilde;o'));
			?>
			<div id="processando" style="display: none;">
				<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
			</div>
		</div>
     </div>

     <footer class="w3-container w3-padding">
	    <button class="w3-button w3-border">
	    	<i class="fa fa-check"></i>
    	 	Submeter
     	</button>
		<?php echo $this->Form->end(); ?>
		<button onclick="clearInput('ajaxSectorForm', 'nome')" class="w3-button w3-border">
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
					'async' => true
				)
		);

	$this->Js->get('#ajaxSectorForm')->event(
		"submit",
		$this->Js->request(
			array('action' => 'add'),
			array(
				'update' => '#sucesso',
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
