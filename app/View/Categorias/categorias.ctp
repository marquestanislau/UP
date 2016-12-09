<?php foreach ($categorias as $categoria): ?>
	<?php $id = $categoria['Categoria']['id']; ?>
	<tr>
		<td><?php echo h($categoria['Categoria']['nome']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($categoria['Carreira']['nome'], array('controller' => 'carreiras', 'action' => 'view', $categoria['Carreira']['id'])); ?>
		</td>
		<td class="actions">
			<button onclick="document.getElementById('catModal<?php echo $id; ?>').style.display='block'" class="w3-btn w3-green">
				<span class="glyphicon glyphicon-edit"></span>
			</button>
			<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $categoria['Categoria']['id']), array('class' => 'w3-btn w3-red', 'escape' => false, 'confirm' => __('Are you sure you want to delete # %s?', $categoria['Categoria']['id']))); ?>
		</td>
		<?php include('edit.ctp');?>
	</tr>
<?php endforeach; ?>