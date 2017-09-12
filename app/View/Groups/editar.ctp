<div id="addGroupo<?php echo $grupo_id; ?>" class="w3-modal">
	<div class="w3-modal-content w3-round w3-padding w3-animate-zoom" style="width: 50%;">
		<header class="w3-container w3-text-blue">
			<span onclick="document.getElementById('addGroupo<?php echo $grupo_id; ?>').style.display='none'" class="w3-closebtn">&times;</span>
			<h3><i class="fa fa-group"></i> Editar grupo <?php echo $grupo['Group']['name']; ?></h3>
		</header>
		<div class="w3-container">
			<?php 

				echo $this->Form->create('Group', array('id' => 'formGrupo'.$grupo_id));
				echo $this->Form->input('name', array('class' => 'w3-input w3-border w3-round w3-margin-bottom', 'placeholder' => 'Nome do grupo', 'value' => $grupo['Group']['name']));
				echo $this->Form->hidden('id', array('value' => $grupo['Group']['id']));
				echo $this->Form->input('descricao', array('class' => 'w3-input w3-border w3-round w3-margin-bottom', 'placeholder' => 'Digite algum texto que descreva o proposito do grupo', 'type' => 'textarea', 'label' => 'Descrição', 'value' => $grupo['Group']['descricao']));
			?>
				<button type="submit" class="w3-button w3-green w3-round"><i class="fa fa-plus"></i> Editar grupo</button>
				<div id="requesting<?php echo $grupo_id; ?>" style="display: none">
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

	$data = $this->Js->get('#formGrupo'.$grupo_id)->serializeForm(array('isForm' => true, 'inline' => true));
	$this->Js->get('#formGrupo'.$grupo_id)->event(
			'submit',
			$this->Js->request(
					array(
							'action' => 'edit/'.$grupo_id,
							'controller' => 'groups'
						),
					array(
							'method' => 'post',
							'data' => $data,
							'dataExpression' => true,
							'async' => true,
							'before' => '$("#requesting'.$grupo_id.'").attr("style","")',
							'complete' => '$("#requesting'.$grupo_id.'").attr("style","display:none")',
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