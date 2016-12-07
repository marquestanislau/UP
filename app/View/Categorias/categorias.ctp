<?php foreach ($categorias as $categoria): ?>
	<tr>
		<td><?php echo h($categoria['Categoria']['nome']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($categoria['Carreira']['nome'], array('controller' => 'carreiras', 'action' => 'view', $categoria['Carreira']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoria['Categoria']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoria['Categoria']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $categoria['Categoria']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>