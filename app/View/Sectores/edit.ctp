<div id="sectoresModalWindow<?php echo $id; ?>" class="w3-modal">
	<div class="w3-modal-content">
		<header class="w3-container w3-blue">
			 <span onclick="document.getElementById('sectoresModalWindow<?php echo $id; ?>').style.display='none'"
       class="w3-closebtn w3-hover-white">&times;</span>
			<h4><?php echo __('Edit Sectore'); ?></h4>
		</header>
		<div class="w3-container w3-padding-32">
			<div id="sucesso<?php echo $id; ?>"></div>
			<?php echo $this->Form->create('Sectore', array('class' => 'w3-container', 'id' => 'ajaxSectorEditarForm'.$id, 'url' => array('controller' => 'sectores', 'action' => 'modificar'))); ?>
			<?php
				echo $this->Form->input('id', array('value' => $id));
				echo $this->Form->input('designacao', array('class' => 'w3-input w3-hover-khaki', 'value' => $sectore['Sectore']['designacao']));
				echo $this->Form->input('delegacao_id', array('class' => 'w3-input w3-hover-khaki', 'value' => $sectore['Sectore']['delegacao_id']));
			?>
			<div id="requesting<?php echo $id; ?>" style="display: none">
				<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
			</div>
		</div>
		<footer class="w3-container w3-padding">
			<button class="w3-btn w3-green w3-large">
				Submeter dados
			</button>
			<?php echo $this->Form->end(); ?>
		</footer>
	</div>
</div>
<?php
	$completed = '$("#requesting'.$id.'").attr("style", "display:none")';
	$before = '$("#requesting'.$id.'").attr("style", "")';
	$formData = $this->Js->get('#ajaxSectorEditarForm'.$id)->serializeForm(array('inline' => true, 'isForm' => true));
	$this->Js->get('#ajaxSectorEditarForm'.$id)->event(
		"submit",
		$this->Js->request(
			array(
				'action' => 'modificar'
			),
			array(
				'method' => 'post',
				'data' => $formData,
				'async' => true,
				'dataExpression' => true,
				'update' => '#sucesso'.$id,
				'before' => $before,
				'complete' => $completed
			)
		)
	);
?>