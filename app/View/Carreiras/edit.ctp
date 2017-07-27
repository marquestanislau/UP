<div id="carreiraModalEditar<?php echo $id;?>" class="w3-modal">
	<div class="w3-modal-content w3-round" style="width: 50%;">
		<header class="w3-container w3-text-blue">
			<span onclick="document.getElementById('carreiraModalEditar<?php echo $id;?>').style.display='none'"
				class="w3-closebtn w3-hover-text-orange">&times;</span>
				<h3><?php echo __('Editar dados da Carreira'); ?></h3>
			</header>
			<div class="w3-container w3-padding">
				<div id="sucessoEditar<?php echo $id;?>"></div>
				<?php echo $this->Form->create('Carreira', array('id' => 'ajaxFormEditar'.$id)); ?>
				<?php
				echo $this->Form->input('id', array('value' => $id));
				echo $this->Form->input('nome', array('class' => 'w3-input w3-large w3-round w3-hover-khaki w3-border', 'value' => $carreira['Carreira']['nome']));
				?>
				<div id="processandoEditar<?php echo $id;?>" style="display: none;">
					<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
				</div>
			</div>
			<footer class="w3-container w3-padding">
				<button class="w3-button w3-round w3-green w3-large">
					<span class="glyphicon glyphicon-ok"></span>
					Submeter
				</button>
				<?php echo $this->Form->end(); ?>
			</footer>
		</div>
	</div>
	<?php
	$completed = '$("#processandoEditar'.$id.'").attr("style", "display:none")';
	$beforeIt = '$("#processandoEditar'.$id.'").attr("style", "")';

	$success = $this->Js->request(
		array(
			'action' => 'index'
			),
		array(
			'update' => '#corpo',
			'method' => 'post',
			'async' => true,
			'complete' => 'displayMessages()'
			)
		);

	$dados = $this->Js->get('#ajaxFormEditar'.$id)->serializeForm(array('inline' => true, 'isForm' => true));
	$this->Js->get('#ajaxFormEditar'.$id)->event(
		"submit",
		$this->Js->request(
			array(
				'action' => 'adicionarCarreira'
				),
			array(
				'method' => 'post',
				'update' => '#message',
				'complete' => $completed,
				'before' => $beforeIt,
				'data' => $dados,
				'dataExpression' => true,
				'async' => true,
				'success' => $success
				)
			)
		);
		?>
