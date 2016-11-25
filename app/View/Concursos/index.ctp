<div class="col-md-12">
	<h4 class="settings-font-color">
		<span style="font-size: 24px;" class=" glyphicon glyphicon-folder-open"></span> <?php echo __('Concursos'); ?></h4>
	<table class="table table-striped" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('data_aprovacao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_registo'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($concursos as $concurso): ?>
	<tr>
		<td><?php echo h($concurso['Concurso']['id']); ?>&nbsp;</td>
		<td><?php echo h($concurso['Concurso']['data_aprovacao']); ?>&nbsp;</td>
		<td><?php echo h($concurso['Concurso']['data_registo']); ?>&nbsp;</td>
		<td><?php echo h($concurso['Concurso']['nome'].' [' .$concurso['Concurso']['data_aprovacao']. ']'); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $concurso['Concurso']['id']), array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $concurso['Concurso']['id']), array('class' => 'btn btn-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $concurso['Concurso']['id']), array('class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # %s?', $concurso['Concurso']['id']))); ?>
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
</div>
<div class="col-md-12">
	<hr>
	<?php echo $this->Html->link("<span class='glyphicon glyphicon-plus-sign' ></span> Novo concuro", array('action' => 'add'), array('class' => 'btn btn-success', 'escape' => false)); ?>
</div>