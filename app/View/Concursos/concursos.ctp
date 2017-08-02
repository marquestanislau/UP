<?php foreach ($concursos as $concurso): ?>
	<tr class="w3-hover-khaki">
		<td class="w3-text-gray"><?php echo $concurso['Concurso']['tipo'] == 0 ? '<i class="fa fa-user"></i>' : '<i class="fa fa-graduation-cap"></i>'; ?>&nbsp;</td>
		<td class="w3-text-gray"><?php echo h($concurso['Concurso']['data_aprovacao']); ?>&nbsp;</td>
		<td class="w3-text-gray"><?php echo h($concurso['Concurso']['nome'].' [' .$concurso['Concurso']['data_aprovacao']. ']'); ?>&nbsp;</td>
		<td class="actions">
			<!-- <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $concurso['Concurso']['id']), array('class' => 'btn btn-success', 'id' => '')); ?> -->
			<?php echo $this->Form->postLink("<span class='glyphicon glyphicon-trash'></span>", array('action' => 'delete', $concurso['Concurso']['id']), array('escape' => false, 'class' => 'w3-tag w3-hover-light-grey w3-round w3-red', 'id' => 'delete'.$concurso['Concurso']['id'], 'confirm' => __('Are you sure you want to delete # %s?', $concurso['Concurso']['id']))); ?>
			<!-- Trigger/Open the Modal -->
			<a href="#" id="edit<?php echo $concurso['Concurso']['id'];?>" onclick="document.getElementById('modal<?php echo $concurso['Concurso']['id']?>').style.display='block'"
				class="w3-tag w3-hover-light-grey w3-round w3-green">
				<span class="glyphicon glyphicon-edit"></span>
			</a>
			<?php echo $this->Html->link("<span class='glyphicon glyphicon-briefcase '></span>", array('action' => 'view', $concurso['Concurso']['id']), array('escape' => false, 'class' => 'w3-tag w3-hover-light-grey w3-round w3-blue', 'id' => 'view'.$concurso['Concurso']['id'])); ?>
			<!-- Tooltip's for buttons -->
			<span data-mdl-for="view<?php echo $concurso['Concurso']['id'];?>" class="mdl-tooltip">
				Configurar o concurso <br>(Carreiras, participantes, etc..)
				<br>
				Data: <?php echo $concurso['Concurso']['data_aprovacao'];?>
			</span>
			<span data-mdl-for="delete<?php echo $concurso['Concurso']['id'];?>" class="mdl-tooltip">Remover o concurso [<?php echo $concurso['Concurso']['data_aprovacao']; ?>]</span>
			<span data-mdl-for="edit<?php echo $concurso['Concurso']['id'];?>" class="mdl-tooltip">Alterar o concurso [<?php echo $concurso['Concurso']['data_aprovacao']; ?>]</span>
			<!-- end tooltips -->
		</td>

		<!-- The Modal -->
		<div id="modal<?php echo $concurso['Concurso']['id']; ?>" class="w3-modal">
			<div class="w3-modal-content w3-animate-zoom w3-round" style="width: 50%;">
				<header class="w3-container w3-text-blue w3-padding">
					<span onclick="document.getElementById('modal<?php echo $concurso['Concurso']['id']?>').style.display='none'"
						class="w3-closebtn w3-hover-text-orange">&times;</span>
						<h5><i class="fa fa-folder"></i> Editar dados do concurso</h5>
					</header>
					<?php echo $this->Form->create('Concurso', array( 'url' =>array('action' => 'editarModal'), 'default' => false, 'id' => 'ajaxform'.$concurso['Concurso']['id']));?>
					<div class="w3-container w3-padding">
						<div id="sucesso<?php echo $concurso['Concurso']['id']?>"></div>
						<div id="erro<?php echo $concurso['Concurso']['id']?>"></div>
						<?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => $concurso['Concurso']['id']));?>
						<?php echo $this->Form->input('nome', array('value' => $concurso['Concurso']['nome'], 'class' => 'w3-input w3-margin-bottom w3-round w3-border w3-hover-sand'));?>
						<?php echo $this->Form->input('data_aprovacao', array('value' => $concurso['Concurso']['data_aprovacao'], 'class' => 'w3-input datepicker w3-margin-bottom w3-round w3-border w3-hover-sand', 'type' => 'text', 'id' => 'date_input', 'label' => 'Data de aprova&ccedil;&atilde;o'));?>
						<?php echo $this->Form->input('delegacao_id', array('value' => $concurso['Concurso']['delegacao_id'], 'class' => 'w3-input w3-margin-bottom w3-round w3-border w3-hover-sand', 'label' => 'Delegaga&ccedil;&atilde;o'));?>
						<?php echo $this->Form->hidden('data_registo', array('id' => $concurso['Concurso']['id'])); ?>
						<?php // echo $this->Form->hidden('delegacao_id', array('id' => $concurso['Concurso']['delegacao_id'])); ?>
					</div>
					<footer class="w3-container w3-padding">
						<button class="w3-green w3-button w3-round" id="saveForm">
							<span class="glyphicon glyphicon-ok"></span>
							Modificar dados
						</button>
						<?php echo $this->Form->end();?> 
						<!-- end form  -->
						<!-- button to cancel and exit modal window -->
						<button onclick="document.getElementById('modal<?php echo $concurso['Concurso']['id']?>').style.display='none'" class="w3-light-grey w3-button w3-round">
							<span class="glyphicon glyphicon-remove"></span>
							Cancelar
						</button>
						<div id="enviando<?php echo $concurso['Concurso']['id']?>" style="display: none;">
							<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
						</div>
					</footer>
				</div>
			</div>
		</tr>
		<?php 
		$id = $concurso['Concurso']['id'];
		$data = $this->Js->get('#ajaxform'.$id)->serializeForm(array('isForm' => true, 'inline' => true));
		$before = '$("#enviando'.$id.'").attr("style", " ")';
		$complete = '$("#enviando'.$id.'").attr("style", "display:none")';
		$success = $this->Js->request(
			array('action' => 'index'),
			array('method' => 'post', 'dataExpression' => true, 'update' => '#table-body', 'complete' => 'displayMessages()')
		);

		$this->Js->get('#ajaxform'.$id)->event('submit',
			$this->Js->request(
				array('action' => 'editarModal'),
				array(
					/*'update' => '#sucesso'.$id,*/
					'update' => '#message',
					'data' => $data,
					'async' => true,
					'dataExpression' => true,
					'method' => 'post',
					'before'   => $before, 
					'complete' => $complete,
					'success' => $success
				)
			)
		);
		
		?>

	<?php endforeach; ?>

	<?php if (empty($concursos)) { ?>
		<tr>
			<td colspan="3" class="w3-center"> <div class="w3-panel w3-large">Do momento n&atilde;o existe concurso no sistema.</div></td>
			<td></td>
		</tr>
	<?php } ?>