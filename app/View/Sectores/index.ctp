<div class="col-md-8">
	<h4 class="settings-font-color"><span class="glyphicon glyphicon-file"></span><?php echo __('Sectores'); ?></h4>
	<div class="input-group w3-margin-bottom">
		<input type="text" class="form-control" placeholder="Insira o nome do sector..." >
		<span class="input-group-btn">
			<button class="btn btn-default">
				<span class="glyphicon glyphicon-search"></span> Procurar
			</button>
		</span>
	</div>
    <table class="table table-hover" cellpadding="0" cellspacing="0">
	<thead>
	<tr class="w3-black">
			<th><?php echo $this->Paginator->sort('#'); ?></th>
			<th><?php echo $this->Paginator->sort('designacao'); ?></th>
			<th><?php echo $this->Paginator->sort('delegacao_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($sectores as $sectore): ?>
	<tr>
		<td><?php echo h($sectore['Sectore']['id']); ?>&nbsp;</td>
		<td><?php echo h($sectore['Sectore']['designacao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sectore['Delegacao']['nome'], array('controller' => 'delegacaos', 'action' => 'view', $sectore['Delegacao']['id'])); ?>
		</td>
		<td class="actions">
			<?php $id = $sectore['Sectore']['id']; ?>
			<?php echo $this->Form->postLink("<span class='glyphicon glyphicon-trash'></span>", array('action' => 'delete', $sectore['Sectore']['id']), array('class' => 'w3-btn w3-red', 'escape' => false, 'confirm' => __('Are you sure you want to delete # %s?', $sectore['Sectore']['id']))); ?>
		<a href="#" class="w3-btn w3-green" onclick="document.getElementById('sectoresModalWindow<?php echo $id; ?>').style.display='block'">
			<span class='glyphicon glyphicon-refresh'></span>
		</a>
		<button class="w3-btn w3-red" id="apagar" onclick="document.getElementById('confirmacao<?php echo $id; ?>').style.display='block'" ><span class='glyphicon glyphicon-trash'></span></button>
		
		<?php 
			include('edit.ctp');
			include('confirmacao.ctp');
		?>

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
<div class="col-md-3">
	<div class="list-group">
		<a class="list-group-item w3-black" href="">
			<h6><?php echo __('Menu'); ?></h6>	
		</a>
		<a href="#" class="list-group-item" onclick="document.getElementById('sectoresModal').style.display='block'">
			<span class='glyphicon glyphicon-plus'></span> Novo sector
		</a>
		<?php echo $this->Html->link("<span class='glyphicon glyphicon-list'></span> Listas das delega&ccedil;&otilde;s", array('controller' => 'delegacaos', 'action' => 'index'), array('class' => 'list-group-item', 'escape' => false)); ?>
		<?php echo $this->Html->link("<span class='glyphicon glyphicon-map-marker'></span> Nova delega&ccedil;&atilde;o", array('controller' => 'delegacaos', 'action' => 'add'), array('class' => 'list-group-item', 'escape' => false)); ?>
	</div>
</div>
<?php 
	include('add.ctp');
	include('edit.ctp');
?>