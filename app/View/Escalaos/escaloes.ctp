<?php foreach ($escalaos as $escalao): ?>
	<?php $id = $escalao['Escalao']['id'];?>
	<tr class="w3-hover-khaki w3-text-grey">
		<td><?php echo h($escalao['Escalao']['nome']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($escalao['Categoria']['nome'], array('controller' => 'categorias', 'action' => 'view', $escalao['Categoria']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($escalao['Clazze']['nome'], array('controller' => 'clazzes', 'action' => 'view', $escalao['Clazze']['id'])); ?>
		</td>
		<td class="actions">
			<a href="#" class="w3-tag w3-round w3-hover-light-grey w3-green" onclick="document.getElementById('escModal<?php echo $id;?>').style.display='block'">
				<span class="glyphicon glyphicon-edit"></span>
			</a>
			<?php echo $this->Form->postLink("<span class='glyphicon glyphicon-trash'></span>", array('action' => 'delete', $escalao['Escalao']['id']), array('escape' => false, 'class' => 'w3-tag w3-round w3-hover-light-grey w3-red', 'confirm' => __('Are you sure you want to delete # %s?', $escalao['Escalao']['id']))); ?>
		</td>
	</tr>
	<?php include('edit.ctp');?>
<?php endforeach; ?>