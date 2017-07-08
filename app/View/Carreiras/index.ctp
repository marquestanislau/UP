<div class="w3-white w3-padding">
	<h4 class="w3-text-blue settings-font-color"><span style="font-size: 24px;" class="glyphicon glyphicon-briefcase"></span> <?php echo __('Carreiras disponiveis no sistema'); ?></h4>
	
	 <div class="w3-bar w3-light-grey w3-margin-bottom">
 	  <a href="#" onclick="document.getElementById('carreiraModal').style.display='block'"  class="w3-bar-item w3-button">
 		<span class="glyphicon glyphicon-plus-sign"></span>
 	  	Nova carreira
 	  </a>
 	  <a id="print_report" target="_blank" href="<?php echo $this->Html->url(array('action' => 'relatorio_carreira', 'ext' => 'pdf')); ?>"class="w3-bar-item w3-button">
 	  	<span class="glyphicon glyphicon-print"></span>
 	  	Imprimir
 	  </a>
 	  <span data-mdl-for="print_report" class="mdl-tooltip">Clique para imprimir o relat&oacute;rio</span>
 	  <input style="width: 30%;" class="w3-bar-item w3-hover-sand w3-input w3-border w3-white" placeholder="Nome da carreira">
	</div> 
	<table class="table table-striped w3-border w3-border-light-grey" cellpadding="0" cellspacing="0">
	<thead class="w3-white w3-text-blue">
	<tr>
		<th><?php echo $this->Paginator->sort('Ordem'); ?></th>
		<th><?php echo $this->Paginator->sort('nome'); ?> <span class="fa fa-sort w3-text-blue"></span></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody class="w3-text-dark-grey" id="corpo">
		<?php
			include('carreiras.ctp');
		?>
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
</div>

<?php
	include('add.ctp');
	include('edit.ctp');
?>
