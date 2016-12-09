<div class="row w3-margin-bottom">
	<div class="col-md-12">
		<h4><?php echo __('Classes'); ?></h4>
	</div>
	<div class="col-md-5">
		<input style="width: 40%;" placeholder="Procure aqui..." class="w3-input w3-border w3-hover-sand">
	</div>
	<div class="col-md-5">
		<button onclick="document.getElementById('classeModal').style.display='block'" class="pull-right w3-btn w3-dark-grey w3-large">
			<span class="glyphicon glyphicon-plus"></span>
			Nova classe
		</button>
	</div>
</div>
<div class="row">
	<div class="col-md-10">
	    <table class="table table-striped">
		<thead>
		<tr class="w3-brown">
				<th><?php echo $this->Paginator->sort('nome'); ?></th>
				<th><?php echo $this->Paginator->sort('carreira_id'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody id="table-body">
			<?php include('classes.ctp'); ?>
		</tbody>
		</table></div>
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
	<ul>
		<li><?php echo $this->Html->link(__('New Clazze'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Carreiras'), array('controller' => 'carreiras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carreira'), array('controller' => 'carreiras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Escalaos'), array('controller' => 'escalaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escalao'), array('controller' => 'escalaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php
	include('add.ctp');
?>