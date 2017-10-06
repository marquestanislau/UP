<?php $user = $this->Session->read('Auth.User'); ?>
<?php foreach ($usuarios as $usuario): ?>
	<?php if ($user['email'] == $usuario['User']['email']) {
		# Just do nothing :).
		} else { 
	?>
	<tr class="w3-text-dark-grey w3-hover-khaki">
		<?php $id = $usuario['User']['id'];?>
		<td>
			<?php echo $this->Html->image($usuario['User']['foto_perfil'], array('class' => 'w3-circle', 'style' => 'width: 10%;'));
				echo ' '; 
				echo h($usuario['User']['username']); ?>&nbsp;
		</td>
		<td><?php echo h($usuario['User']['apelido']); ?>&nbsp;</td>
		<td class="w3-label"><?php echo h($usuario['Group']['name']); ?>&nbsp;</td>
		<td><?php echo h($usuario['User']['email']); ?>&nbsp;</td>
		<td><?php echo h('+(258) '.$usuario['User']['contacto']); ?>&nbsp;</td>
		<td><span class="glyphicon glyphicon-ok w3-text-green"></span></td>
		<td class="actions">
			<?php //echo $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', array('action' => 'view', $usuario['User']['id']), array('class' => 'w3-tag w3-round w3-green', 'escape' => FALSE)); ?>
			<a href="#" class="w3-tag w3-round w3-blue" onclick="document.getElementById('editUser<?php echo $id; ?>').style.display='block';">
				<i class="fa fa-edit"></i>				
			</a>
			<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $usuario['User']['id']), array('escape' => FALSE, 'class' => 'w3-tag w3-round w3-red', 'confirm' => __('Are you sure you want to delete # %s?', $usuario['User']['id']))); ?>
		</td>
		<?php include('edit.ctp'); ?>
	</tr>
	<?php } ?>
<?php endforeach; ?>