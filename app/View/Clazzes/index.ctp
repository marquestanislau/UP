<div class="row w3-margin-bottom">
	<div class="col-md-5">
		<h4 class="w3-text-grey"><?php echo __('Classes'); ?></h4>
	</div>
	<div class="col-md-6">
		<a href="#"><span class="glyphicon glyphicon-question-sign w3-text-grey pull-right w3-margin-left"></span></a>
		<a href="#"><span class="glyphicon glyphicon-file w3-text-grey pull-right w3-margin-left"></span></a>
		<a href="#"><span class="glyphicon glyphicon-print w3-text-grey pull-right w3-margin-left"></span></a>
	</div>
</div>
<div class="row">
	<div class="col-md-11">
	    <div class="w3-white w3-border w3-padding">
	    <div class="w3-container">
	    	<h6 class="w3-text-blue">
	    		<span class="fa fa-cube"></span>
	    		Classes
			</h6>
	    </div>
    	    <table class="table table-striped w3-border w3-border-dark-grey">
	    		<thead class="w3-dark-grey">
	    		<tr>
    				<th><?php echo $this->Paginator->sort('nome'); ?></th>
    				<th><?php echo $this->Paginator->sort('carreira_id'); ?></th>
    				<th class="actions"><?php echo __('Actions'); ?></th>
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
				<button onclick="document.getElementById('classeModal').style.display='block'" class=" w3-btn w3-blue w3-large">
					<span class="glyphicon glyphicon-plus"></span>
					Nova classe
				</button>
			</div>
			<div class="col-md-4">
				<input style="width: 70%;" placeholder="Procure aqui..." class="w3-input pull-right w3-border w3-hover-sand"></div>
			</div> 
	    </div>
	</div>
</div>
<!-- <div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New Clazze'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Carreiras'), array('controller' => 'carreiras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carreira'), array('controller' => 'carreiras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Escalaos'), array('controller' => 'escalaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escalao'), array('controller' => 'escalaos', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
<?php
	include('add.ctp');
?>