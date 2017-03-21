<div id="delegacaoModal<?php echo $id;?>" class="w3-modal">
	<div class="w3-modal-content w3-animate-zoom">
		<header class="w3-container w3-blue">
			<span onclick="document.getElementById('delegacaoModal<?php echo $id;?>').style.display='none'" class="w3-closebtn">&times;</span>
			<h4>Alterar dados da delegacao</h4>
		</header>	
		<div class="w3-container w3-padding">
			<div id="sucesso<?php echo $id;?>"></div>
			<?php echo $this->Form->create('Delegacao', array('class' => 'w3-container', 'id' => 'delegacaoForm'.$id)); ?>
			<?php
				echo $this->Form->input('id', array('value' => $delegacao['Delegacao']['id']));
				echo $this->Form->input('nome', array('class' => 'w3-input w3-border w3-hover-sand', 'value' => $delegacao['Delegacao']['nome']));
			?>
			<div id="requesting<?php echo $id;?>" style="display: none">
				<?php echo $this->Html->image('ajax/ajax-loader.gif');?>
			</div>
		</div>
		<footer class="w3-container w3-padding">
			<button class="w3-btn w3-large w3-teal pull-right">
				<i class="fa fa-save"></i>
				Adicionar
			</button>
			<?php echo $this->Form->end(); ?>
		</footer>
	</div>
</div>
<?php
	$data = $this->Js->get('#delegacaoForm'.$id)->serializeForm(array('inline' => true, 'isForm' => true));
	$success = $this->Js->request(
		array(
			'action' => 'index'
		),
		array(
			'update' => '#table-body'
		)
	);
	$this->Js->get('#delegacaoForm'.$id)->event(
		'submit',
		$this->Js->request(
			array(
				'action' => 'edit/'.$id,
				'controller' => 'delegacaos'
			),
			array(
				'method' => 'post',
				'data' => $data,
				'async' => true,
				'dataExpression' => true,
				'before' => '$("#requesting'.$id.'").attr("style", "")',
				'complete' => '$("#requesting'.$id.'").attr("style", "display:none")',
				'update' => '#sucesso'.$id,
				'success' => $success
			)
		)
	);
?>