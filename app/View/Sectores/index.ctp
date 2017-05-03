<?php echo $this->Html->script('filter.js');  ?>
<div class="col-md-10 w3-border w3-padding w3-white">
	<h4 class="w3-text-blue"><span class="fa fa-industry"></span> <?php echo __('Sectores'); ?></h4>
	
	<div class="w3-bar w3-light-grey w3-margin-bottom">
		<button class="w3-bar-item w3-button" onclick="document.getElementById('sectoresModal').style.display='block'">
			<span class='glyphicon glyphicon-plus'></span> Novo sector
		</button>
		<a href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'delegacaos')); ?>" class="w3-button w3-bar-item"><i class="fa fa-list"></i> Listas das delega&ccedil;&otilde;s</a>
		
		<input onkeyup="filtro()" id="procurar" style="width: 50%;" class="w3-bar-item w3-white w3-hover-sand w3-border w3-input" placeholder="Insira o nome do sector..." >
	</div>

    <table class="table table-hover w3-border w3-border-dark-grey" id="tabelaFiltro">
	<thead class="w3-dark-grey">
	<tr>
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
		'format' => __('<span class="w3-text-blue">P&aacute;gina {:page} de {:pages}, a mostrar {:current} num total de {:count}</span>')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Proximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<?php
	include('add.ctp');
?>
