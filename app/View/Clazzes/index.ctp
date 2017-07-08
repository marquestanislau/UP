<div class="row">
	<div class="">
	    <div class="w3-white w3-padding">
	    <div class="w3-container">
	    	<h6 class="w3-text-blue">
	    		<span class="fa fa-cube"></span>
	    		Classes
	    		<a href="#" class="w3-button w3-circle w3-large pull-right"><span class="glyphicon glyphicon-question-sign w3-text-grey"></span></a>
	    		<a href="#" class="w3-button w3-circle w3-large pull-right"><span class="glyphicon glyphicon-file w3-text-grey"></span></a>
			</h6>
	    </div>
	    <div class="w3-bar w3-light-grey w3-margin-top w3-margin-bottom">
	    		<span class="mdl-tooltip" data-mdl-for="print"><i class="fa fa-check"></i> Imprimir relat&oacute;rio</span>
	    		<span class="mdl-tooltip" data-mdl-for="add"><i class="fa fa-plus"></i> Adicionar classes</span>
				<a id="print" href="<?php echo $this->Html->url(array('action' => 'pdf_classes', 'ext' => 'pdf')); ?>" class="w3-bar-item w3-button" target="_blank"><span class="glyphicon glyphicon-print w3-text-dark-grey"></span>
					Imprimir
				</a>
				<button id="add" onclick="document.getElementById('classeModal').style.display='block'" class="w3-bar-item w3-button w3-text-dark-grey">
					<span class="glyphicon glyphicon-plus"></span>
					Nova classe
				</button>
		    <input placeholder="Procure aqui..." class="w3-bar-item w3-input w3-white w3-border w3-hover-sand">
	    </div>
    	    <table class="table table-striped w3-border w3-border-light-grey">
	    		<thead class="w3-text-blue">
	    		<tr>
    				<th><?php echo $this->Paginator->sort('nome'); ?></th>
    				<th><?php echo $this->Paginator->sort('carreira_id'); ?></th>
    				<th class="actions"><?php echo __('Opera&ccedil;&otilde;es'); ?></th>
	    		</tr>
	    		</thead>
	    		<tbody id="table-body">
	    			<?php include('classes.ctp'); ?>
	    		</tbody>
    		</table>
			<p>
			<?php
			echo $this->Paginator->counter(array(
				'format' => __('<b class="w3-text-blue">P&aacute;gina {:page} de {:pages}, a mostrar {:current} num total de {:count}</b>')
			));
			?>	</p>
			<div class="paging">
			<?php
				echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('Proximo') . ' >', array(), null, array('class' => 'next disabled'));
			?>
			</div>

			<div class="row w3-margin-top">
			<div class="col-md-4">

			</div>
	    </div>
	</div>
</div>
<?php
	include('add.ctp');
?>
