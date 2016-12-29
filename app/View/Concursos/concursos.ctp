<?php foreach ($concursos as $concurso): ?>
	<tr>
		<td class="w3-text-gray"><?php echo h($concurso['Concurso']['data_aprovacao']); ?>&nbsp;</td>
		<td class="w3-text-gray"><?php echo h($concurso['Concurso']['nome'].' [' .$concurso['Concurso']['data_aprovacao']. ']'); ?>&nbsp;</td>
		<td class="actions">
			<!-- <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $concurso['Concurso']['id']), array('class' => 'btn btn-success', 'id' => '')); ?> -->
			<?php echo $this->Form->postLink("<span class='glyphicon glyphicon-trash'></span>", array('action' => 'delete', $concurso['Concurso']['id']), array('escape' => false, 'class' => 'w3-btn w3-red', 'confirm' => __('Are you sure you want to delete # %s?', $concurso['Concurso']['id']))); ?>
			<!-- Trigger/Open the Modal -->
			<button onclick="document.getElementById('modal<?php echo $concurso['Concurso']['id']?>').style.display='block'"
				class="w3-btn w3-green">
				<span class="glyphicon glyphicon-repeat"></span>
			</button>
			<?php echo $this->Html->link("<span class='glyphicon glyphicon-briefcase '></span>", array('action' => 'view', $concurso['Concurso']['id']), array('escape' => false, 'class' => 'w3-btn w3-blue')); ?>

		</td>

		<!-- The Modal -->
		<div id="modal<?php echo $concurso['Concurso']['id']?>" class="w3-modal">
			<div class="w3-modal-content">
				<header class="w3-container w3-purple">
					<span onclick="document.getElementById('modal<?php echo $concurso['Concurso']['id']?>').style.display='none'"
						class="w3-closebtn">&times;</span>
						<h1>Editar dados para concurso</h1>
					</header>
					<?php echo $this->Form->create('Concurso', array( 'url' =>array('action' => 'editarModal'), 'default' => false, 'id' => 'ajaxform'.$concurso['Concurso']['id']));?>
					<div class="w3-container">
						<div id="sucesso<?php echo $concurso['Concurso']['id']?>"></div>
						<div id="erro<?php echo $concurso['Concurso']['id']?>"></div>
						<?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => $concurso['Concurso']['id']));?>
						<?php echo $this->Form->input('nome', array('value' => $concurso['Concurso']['nome'], 'class' => 'w3-input w3-border w3-hover-sand'));?>
						<?php echo $this->Form->input('data_aprovacao', array('value' => $concurso['Concurso']['data_aprovacao'], 'class' => 'w3-input w3-border w3-hover-sand', 'type' => 'text', 'id' => 'date_input', 'label' => 'Data de aprova&ccedil;&atilde;o'));?>
						<?php echo $this->Form->hidden('data_registo', array('id' => $concurso['Concurso']['id'])); ?>
					</div>
					<footer style="padding: 14px;" class="w3-container">
						<button class="w3-btn w3-purple w3-large" id="saveForm">
							<span class="glyphicon glyphicon-ok"></span>
							Modificar dados
						</button>
						<?php echo $this->Form->end();?> 
						<!-- end form  -->
						<!-- button to cancel and exit modal window -->
						<button onclick="document.getElementById('modal<?php echo $concurso['Concurso']['id']?>').style.display='none'" class="w3-btn w3-red w3-large">
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
			array('method' => 'post', 'dataExpression' => true, 'update' => '#table-body')
		);

		$this->Js->get('#ajaxform'.$id)->event('submit',
			$this->Js->request(
				array('action' => 'editarModal'),
				array(
					'update' => '#sucesso'.$id,
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