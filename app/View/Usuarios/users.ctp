<?php foreach ($usuarios as $usuario): ?>
	<tr class="w3-text-dark-grey w3-hover-khaki">
		<td><?php echo h($usuario['Usuario']['nome']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['apelido']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['email']); ?>&nbsp;</td>
		<td><?php echo h('+(258) '.$usuario['Usuario']['contacto']); ?>&nbsp;</td>
		<td><span class="glyphicon glyphicon-ok w3-text-green"></span></td>
		<td class="actions">
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', array('action' => 'view', $usuario['Usuario']['id']), array('class' => 'w3-tag w3-round w3-green', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $usuario['Usuario']['id']), array('class' => 'w3-tag w3-round w3-teal', 'escape' => FALSE)); ?>
			<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $usuario['Usuario']['id']), array('escape' => FALSE, 'class' => 'w3-tag w3-round w3-red', 'confirm' => __('Are you sure you want to delete # %s?', $usuario['Usuario']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>