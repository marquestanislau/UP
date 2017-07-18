<div class="carreirasConcursos index">
	<h2><?php echo __('Carreiras Concursos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('carreira_id'); ?></th>
			<th><?php echo $this->Paginator->sort('concurso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_vaga'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($carreirasConcursos as $carreirasConcurso): ?>
	<tr>
		<td><?php echo h($carreirasConcurso['CarreirasConcurso']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($carreirasConcurso['Carreira']['id'], array('controller' => 'carreiras', 'action' => 'view', $carreirasConcurso['Carreira']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($carreirasConcurso['Concurso']['id'], array('controller' => 'concursos', 'action' => 'view', $carreirasConcurso['Concurso']['id'])); ?>
		</td>
		<td><?php echo h($carreirasConcurso['CarreirasConcurso']['numero_vaga']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $carreirasConcurso['CarreirasConcurso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $carreirasConcurso['CarreirasConcurso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $carreirasConcurso['CarreirasConcurso']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $carreirasConcurso['CarreirasConcurso']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Carreiras Concurso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Carreiras'), array('controller' => 'carreiras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carreira'), array('controller' => 'carreiras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Concursos'), array('controller' => 'concursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Concurso'), array('controller' => 'concursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
