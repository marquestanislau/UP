<div class="w3-modal" id="catModal<?php echo $id;?>">
	<div class="w3-modal-content w3-animate-top w3-round" style="width: 50%;">
		<header class="w3-container w3-text-blue">
			<span onclick="document.getElementById('catModal<?php echo $id;?>').style.display='none'" class="w3-closebtn w3-hover-text-orange">&times;</span>
			<h4>Alterar dados da categoria</h4>
		</header>
		<div class="w3-container w3-padding">
			<div id="sucesso<?php echo $id;?>"></div>
			<?php echo $this->Form->create('Categoria', array('id' => 'ajaxFormCatEdit'.$id, 'class' => 'w3-container')); ?>
			<?php
				echo $this->Form->input('id', array('value' => $categoria['Categoria']['id']));
				echo $this->Form->input('nome', array('class' => 'w3-input w3-round w3-hover-khaki w3-border', 'value' => $categoria['Categoria']['nome']));
				echo $this->Form->input('carreira_id', array('class' => 'w3-input w3-round w3-hover-khaki w3-border', 'value' => $categoria['Categoria']['carreira_id']));
			?>
			<div style="display: none" id="requesting<?php echo $id;?>">
				<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
			</div>
		</div>
		<footer class="w3-container w3-padding">
			<button class="w3-button w3-green w3-round w3-large">
				<span class="glyphicon glyphicon-ok"></span>
				Submeter
			</button>
			<?php echo $this->Form->end(); ?>
		</footer>
	</div>
</div>
<?php
	$dados = $this->Js->get('#ajaxFormCatEdit'.$id)->serializeForm(array('inline' => true, 'isForm' => true));

	$before = '$("#requesting'.$id.'").attr("style", "")';
	$complete = '$("#requesting'.$id.'").attr("style", "display:none")';
	$success = $this->Js->request(
		array('action' => 'index') ,
		array(
			'method' => 'post',
			'update' => '#table-body',
			'async' => true,
			'complete' => 'displayMessages()'
		)
	);

	$this->Js->get('#ajaxFormCatEdit'.$id)->event(
		"submit",
		$this->Js->request(
			array('action' => 'edit/'.$id),
			array(
				'method' => 'post',
				'data' => $dados,
				'dataExpression' => true,
				'update' => '#message',
				'async' => true,
				'before' => $before,
				'complete' => $complete,
				'success' => $success
			)
		)
	);
?>
