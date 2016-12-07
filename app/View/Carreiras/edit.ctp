<div id="carreiraModalEditar<?php echo $id;?>" class="w3-modal">
	<div class="w3-modal-content">
		<header class="w3-container w3-blue">
			<span onclick="document.getElementById('carreiraModalEditar<?php echo $id;?>').style.display='none'" 
			class="w3-closebtn">&times;</span>
			<h3><?php echo __('Editar dados da Carreira'); ?></h3>
		</header>
		<div class="w3-container w3-padding-32">
			<div id="sucessoEditar<?php echo $id;?>"></div>
			<?php echo $this->Form->create('Carreira', array('id' => 'ajaxFormEditar'.$id)); ?>
			<?php
				echo $this->Form->input('id', array('value' => $id));
				echo $this->Form->input('nome', array('class' => 'w3-input w3-hover-khaki', 'value' => $carreira['Carreira']['nome']));
			?>
			<div id="processandoEditar<?php echo $id;?>" style="display: none;">
				<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
			</div>
		</div>
		<footer class="w3-container w3-blue w3-padding-8">
			<button class="w3-btn w3-green w3-large">
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

	$dados = $this->Js->get('#ajaxFormEditar'.$id)->serializeForm(array('inline' => true, 'isForm' => true));
	$this->Js->get('#ajaxFormEditar'.$id)->event(
		"submit",
		$this->js->request(
			array(
				'action' => 'adicionarCarreira'
			),
			array(
				'method' => 'post',
				'update' => '#sucessoEditar'.$id,
				'complete' => $completed,
				'before' => $beforeIt,
				'data' => $dados,
				'dataExpression' => true,
				'async' => true
			)
		)
	);
?>