<h4 class="w3-text-grey">
	<?php echo __('Categorias'); ?>
</h4>
<div class="col-md-9 w3-container w3-border w3-padding w3-white">
	<div id="espera" style="display:none">
		<?php echo $this->Html->image('ajax/ajax-loader.gif');?>
	</div>
	<div class="w3-container w3-text-blue">
		<h6>
			<span class="glyphicon glyphicon-tags"></span>
			<?php echo __('Categorias'); ?>
		</h6>
	</div>
	<table class="table table-striped">
	<thead>
	<tr>
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
	<div class="w3-container w3-blue">
		<h6><span class="glyphicon glyphicon-list"></span>  <?php echo __('Menu'); ?></h6>
	</div>
	<ul class="w3-ul w3-border w3-white">
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