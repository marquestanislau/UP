<div id="classeModal<?php echo $id;?>" class="w3-modal">
	<div class="w3-modal-content w3-animate-zoom w3-round" style="width: 50%;">
		<header class="w3-container w3-text-blue">
			<span class="w3-closebtn w3-hover-text-orange" onclick="document.getElementById('classeModal<?php echo $id;?>').style.display = 'none'">
				&times;
			</span>
			<h4>Adi&ccedil;&atilde;o de classes</h4>
		</header>
		<div class="w3-container w3-margin">
			<div id="sucesso<?php echo $id;?>"></div>
			<?php echo $this->Form->create('Clazze', array('id' => 'ajaxFormClasseEdit'.$id, 'class' => 'w3-container')); ?>
			<?php
				echo $this->Form->input('id', array('value' => $id));
				echo $this->Form->input('nome', array('class' => 'w3-input w3-round w3-border w3-hover-khaki', 'value' => $clazze['Clazze']['nome']));
				echo $this->Form->input('carreira_id', array('class' => 'w3-input w3-round w3-border w3-hover-khaki', 'value' => $clazze['Clazze']['carreira_id']));
			?>
			<div id="requesting<?php echo $id;?>" style="display:none">
				<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
			</div>
		</div>
		<footer class="w3-container w3-white w3-padding w3-margin-left">
			<button class="w3-button w3-green w3-round">
				<span class="glyphicon glyphicon-ok"></span>
				Submeter
			</button>
			<?php echo $this->Form->end(); ?>
		</footer>
	</div>
</div>
<?php
	$dados = $this->Js->get('#ajaxFormClasseEdit'.$id)->serializeForm(array('inline' => true, 'isForm' => true));
	$before = '$("#requesting'.$id.'").attr("style", "")';
	$complete = '$("#requesting'.$id.'").attr("style", "display:none")';
	$this->Js->get('#ajaxFormClasseEdit'.$id)->event(
		"submit",
		$this->Js->request(
			array(
				'action' => 'edit/'.$id
			),
			array(
				'method' => 'post',
				'data' => $dados,
				'dataExpression' => true,
				'update' => '#message',
				'async' => true,
				'before' => $before,
				'complete' => $complete,
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

