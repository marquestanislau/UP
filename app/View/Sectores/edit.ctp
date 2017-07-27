<div id="sectoresModalWindow<?php echo $id; ?>" class="w3-modal">
	<div class="w3-modal-content w3-animate-top w3-round" style="width: 50%;">
		<header class="w3-container w3-text-blue">
			 <span onclick="document.getElementById('sectoresModalWindow<?php echo $id; ?>').style.display='none'"
       class="w3-closebtn w3-hover-text-orange">&times;</span>
			<h5><i class="fa fa-industry"></i> <?php echo __('Editar sector: '.$sectore['Sectore']['designacao']); ?></h5>
		</header>
		<div class="w3-container w3-padding">
			<div id="sucesso<?php echo $id; ?>"></div>
			<?php echo $this->Form->create('Sectore', array('class' => 'w3-container', 'id' => 'ajaxSectorEditarForm'.$id)); ?>
			<?php
				echo $this->Form->input('id', array('value' => $id));
				echo $this->Form->input('designacao', array('class' => 'w3-input w3-margin-bottom w3-round w3-hover-khaki w3-border', 'value' => $sectore['Sectore']['designacao'], 'label' => 'Nome'));
				echo $this->Form->input('delegacao_id', array('class' => 'w3-input w3-margin-bottom w3-round w3-hover-khaki w3-border', 'value' => $sectore['Sectore']['delegacao_id'], 'label' => 'Delega&ccedil;&atilde;o'));
			?>
			<div id="requesting<?php echo $id; ?>" style="display: none">
				<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
			</div>
		</div>
		<footer class="w3-container w3-padding">
			<button class="w3-button w3-round w3-green">
				<i class="fa fa-check"></i>
				Submeter dados
			</button>
			<?php echo $this->Form->end(); ?>
		</footer>
	</div>
</div>
<?php
	$completed = '$("#requesting'.$id.'").attr("style", "display:none")';
	$before = '$("#requesting'.$id.'").attr("style", "")';
	$data = $this->Js->get('#ajaxSectorEditarForm'.$id)->serializeForm(array('inline' => true, 'isForm' => true));

	$success = $this->Js->request(
			array(
				'action' => 'index'
			),
			array(
				'update' => '#table-body',
				'complete' => 'displayMessages()'
			)
	);

	$this->Js->get('#ajaxSectorEditarForm'.$id)->event(
		'submit',
		$this->Js->request(
			array(
				'controller' => 'sectores',
				'action' => 'modificar'
			),
			array(
				'method' => 'post',
				'data' => $data,
				'async' => true,
				'dataExpression' => true,
				'update' => '#message',
				'before' => $before,
				'success' => $success,
				'complete' => $completed
			)
		)
	);
?>
