	<?php foreach ($clazzes as $clazze): ?>
		<?php $id = $clazze['Clazze']['id'];?>
		<tr>
			<td><?php echo h($clazze['Clazze']['nome']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($clazze['Carreira']['nome'], array('controller' => 'carreiras', 'action' => 'view', $clazze['Carreira']['id'])); ?>
			</td>
			<td class="actions">
				<button onclick="document.getElementById('classeModal<?php echo $id;?>').style.display='block'" class="w3-btn w3-green ">
					<span class="glyphicon glyphicon-edit"></span>
				</button>
				<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $clazze['Clazze']['id']), array('escape' => false, 'class' => 'w3-btn w3-red', 'confirm' => __('Are you sure you want to delete # %s?', $clazze['Clazze']['id']))); ?>
			</td>
			<?php
				include('edit.ctp');
			?>
		</tr>
	<?php endforeach; ?>