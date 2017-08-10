<div class="w3-modal" id="editUser<?php echo $id; ?>">
	<div class="w3-modal-content w3-round w3-animate-zoom" style="width: 60%;">
		<header class="w3-container w3-text-blue">
			<span class="w3-closebtn w3-hover-text-orange" 
				onclick="document.getElementById('editUser<?php echo $id; ?>').style.display='none';">&times;</span>
				<h3>Editar as informa&ccedil;&otilde;es do utilizador</h3>
		</header>
		<div class="w3-container w3-padding">
			<div class="row">
				<div class="col-md-6">
					<?php 
						echo $this->Html->image($usuario['Usuario']['foto_perfil'], array('class' => 'object-fit-cover img-circle'));
					?>
				</div>
				<div class="col-md-6">
					<h4><?php echo $usuario['Usuario']['nome'].' '.$usuario['Usuario']['apelido'];  ?></h4>
				</div>
			</div>			
			<?php echo $this->Form->create('Usuario', array('type' => 'file', 'id' => 'editUserForm'.$id)); ?>
			<?php
			echo $this->Form->input('id', array('value' => $id));
			echo $this->Form->input('foto_perfil', array('type' => 'file'));
			?>
			<div class="row">
				<div class="col-md-6">
				<?php 
					echo $this->Form->input('nome', array('class' => 'w3-input w3-round w3-margin-bottom w3-hover-khaki w3-border', 'value' => $usuario['Usuario']['nome']));
					echo $this->Form->input('apelido', array('class' => 'w3-input w3-round w3-margin-bottom w3-hover-khaki w3-border', 'value' => $usuario['Usuario']['apelido']));
				?>
				</div>
				<div class="col-md-6">
				<?php
					echo $this->Form->input('email', array('class' => 'w3-input w3-round w3-margin-bottom w3-hover-khaki w3-border', 'value' => $usuario['Usuario']['email']));
					echo $this->Form->input('contacto', array('class' => 'w3-input w3-round w3-margin-bottom w3-hover-khaki w3-border', 'value' => $usuario['Usuario']['contacto']));
				?>
				</div>
			</div>
			<br>
		</div>
		<footer class="w3-container">
			<div class="w3-bar w3-margin-bottom">
				<button type="submit" class="w3-button w3-bar-item w3-green">
					<span class="glyphicon glyphicon-ok"></span>
					Submeter
				</button>
				<?php echo $this->Form->end(); ?>
				<button onclick="document.getElementById('editUser<?php echo $id; ?>').style.display='none';" type="button" class="w3-button w3-bar-item w3-light-grey">
					<i class="fa fa-close"></i>
					Sair
				</button>
			</div>
			<div id="requesting" style="display:none;">
				<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
			</div>
		</footer>
	</div>
</div>
<?php 
	$data = $this->Js->get('#editUserForm'.$id)->serializeForm(array('inline' => true, 'isForm' => true));
	$successo = $this->Js->request(
			array(
					'action' => 'index'
				),
			array(
					'update' => '#table-body',
					'method' => 'post',
					'complete' => 'displayMessages()',
				)
		);
	$this->Js->get('#editUserForm'.$id)->event(
			'submit',
			$this->Js->request(
					array(
							'action' => 'edit/'.$id,
							'controller' => 'usuarios'
						),
					array(
							'method' => 'post',
							'dataExpression' => true,
							'async' => true,
							'data' => $data,
							'before' => '$("#requesting'.$id.'").attr("style", "")',
							'complete' => '$("#requesting'.$id.'").attr("style", "display:none")',
							'update' => '#message',
							'success' => $successo
						)
				)
		);

 ?>