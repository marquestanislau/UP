<div class="col-md-12">
	<h4><?php echo __('Categorias'); ?></h4>
</div>
<div class="col-md-9">
	<div id="espera" style="display:none">
		<?php echo $this->Html->image('ajax/ajax-loader.gif');?>
	</div>
	<table class="table table-striped">
	<thead>
	<tr class="w3-lime w3-text-black">
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('carreira_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody id="table-body">
		<?php include('categorias.ctp'); ?>
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
<div class="col-md-3">
	<div class="w3-container w3-lime">
		<h3><?php echo __('Menu'); ?></h3>
	</div>
	<ul class="w3-ul w3-border">
		<li><a href="#" onclick="document.getElementById('categoriaAddForm').style.display='block'">
			<span class="glyphicon glyphicon-plus"></span>
			Novas categorias</a>
		</li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Carreiras'), array('controller' => 'carreiras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carreira'), array('controller' => 'carreiras', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php include('add.ctp');?>