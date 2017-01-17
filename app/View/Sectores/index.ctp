<?php echo $this->Html->script('filter.js');  ?>
<h4 class="w3-text-grey"><?php echo __('Sectores'); ?></h4>
<div class="col-md-8 w3-border w3-padding w3-white">
	<h4 class="w3-text-blue"><span class="fa fa-industry"></span> <?php echo __('Sectores'); ?></h4>
	<input onkeyup="filtro()" id="procurar" type="text" style="width: 30%" class="w3-animate-input w3-tiny w3-hover-sand w3-border w3-input" placeholder="Insira o nome do sector..." >
    <table class="table table-hover" id="tabelaFiltro">
	<thead>
	<tr class="w3-white">
			<!-- <th><?php echo $this->Paginator->sort('#'); ?></th> -->
			<th><?php echo $this->Paginator->sort('designacao'); ?></th>
			<th><?php echo $this->Paginator->sort('delegacao_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody id="table-body">
	 <?php include('sectores.ctp'); ?>
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
		<a class="list-group-item" href="">
			<h6><span class="glyphicon glyphicon-menu-hamburger"></span> <?php echo __('Menu'); ?></h6>
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
?>
