<div id="addGroupo" class="w3-modal">
	<div class="w3-modal-content w3-round w3-padding w3-animate-zoom" style="width: 50%;">
		<header class="w3-container w3-text-blue">
			<span onclick="document.getElementById('addGroupo').style.display='none'" class="w3-closebtn">&times;</span>
			<h3><i class="fa fa-group"></i> Criar novo grupo</h3>
		</header>
		<div class="w3-container">
			<?php 

				echo $this->Form->create('Group', array('id' => 'formGrupo'));
				echo $this->Form->input('name', array('class' => 'w3-input w3-border w3-round w3-margin-bottom', 'placeholder' => 'Nome do grupo'));
				echo $this->Form->input('descricao', array('class' => 'w3-input w3-border w3-round w3-margin-bottom', 'placeholder' => 'Digite algum texto que descreva o proposito do grupo', 'type' => 'textarea', 'label' => 'Descrição'));
			?>
				<button class="w3-button w3-green w3-round"><i class="fa fa-plus"></i> Criar novo grupo</button>
				<div id="requesting" style="display: none">
					<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
				</div>
			<?php 
				echo $this->Form->end();
			 ?>
		</div>
		<footer class="w3-container"></footer>
	</div>
</div>

<?php 

	$data = $this->Js->get('#formGrupo')->serializeForm(array('isForm' => true, 'inline' => true));
	$this->Js->get('#formGrupo')->event(
			'submit',
			$this->Js->request(
					array(
							'action' => 'add',
							'controller' => 'groups'
						),
					array(
							'method' => 'post',
							'data' => $data,
							'dataExpression' => true,
							'async' => true,
							'before' => '$("#requesting").attr("style","")',
							'complete' => '$("#requesting").attr("style","display:none")',
							'update' => '#message',
							'success' => $this->Js->request(
									array(
											'action' => 'index',
											'controller' => 'groups'
										),
									array(
											'method' => 'post',
											'update' => '#table-body',
											'complete' => 'displayMessages()'
										)
								)
						)
				)
		);

?>