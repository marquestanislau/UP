<div class="w3-modal" id="escModal<?php echo $id;?>">
	<div class="w3-modal-content">
		<header class="w3-container w3-blue">
			<span onclick="document.getElementById('escModal<?php echo $id; ?>').style.display='none'" class="w3-closebtn">&times;</span>
			<h4>Altere os dados do escal&atilde;o</h4>
		</header>
		<div class="w3-container w3-padding">
			<div id="sucesso<?php echo $id;?>"></div>
			<?php echo $this->Form->create('Escalao', array('id' => 'ajaxFormEscEdit'.$id, 'class' => 'w3-container')); ?>
			<?php
				echo $this->Form->input('id', array('value' => $id));
				echo $this->Form->input('nome', array('class' => 'w3-input w3-border w3-hover-khaki', 'value' => $escalao['Escalao']['nome']));
				echo $this->Form->input('categoria_id', array('class' => 'w3-input w3-border w3-hover-khaki', 'value' => $escalao['Escalao']['categoria_id']));
				echo $this->Form->input('clazze_id', array('class' => 'w3-input w3-border w3-hover-khaki', 'value' => $escalao['Escalao']['clazze_id'], 'label' => 'Classe'));
			?>
			<div style="display:none"> id="requesting<?php echo $id;?>">
				<?php echo $this->Html->image('ajax/ajax-loader.gif');?>
			</div>
		</div>
		<footer class="w3-container w3-padding">
			<button class="w3-btn w3-green w3-large">
				<span class="glyphicon glyphicon-ok"></span>
				Submeter dados
			</button>
			<?php echo $this->Form->end(); ?>
		</footer>
	</div>
</div>
<?php
	$dados = $this->Js->get('#ajaxFormEscEdit'.$id)->serializeForm(array('inline' => true, 'isForm' => true));
	$before = '$("#requesting'.$id.'").attr("style", "")';
	$complete = '$("#requesting'.$id.'").attr("style", "display:none")';
	$success = $this->Js->request(
					array('action' => 'index'),
					array(
						'method' => 'post',
						'update' => '#table-body',
						'async' => true,
						'dataExpression' => true,
						'complete' => 'displayMessages()'
					)
				);
	$this->Js->get('#ajaxFormEscEdit'.$id);
	$this->Js->event(
		"submit",
		$this->Js->request(
			array('action' => 'edit/'.$id),
			array(
				'method' => 'post',
				'data' => $dados,
				'update' => '#message',
				'dataExpression' => true,
				'before' => $before,
				'complete' => $complete,
				'success' => $success
			)
		)
	);
?>