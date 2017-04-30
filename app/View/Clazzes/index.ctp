<div class="row">
	<div class="col-md-11">
	    <div class="w3-white w3-border w3-padding">
	    <div class="w3-container">
	    	<h6 class="w3-text-blue">
	    		<span class="fa fa-cube"></span>
	    		Classes
	    		<a href="#" class="w3-button w3-circle w3-large pull-right"><span class="glyphicon glyphicon-question-sign w3-text-grey"></span></a>
	    		<a href="#" class="w3-button w3-circle w3-large pull-right"><span class="glyphicon glyphicon-file w3-text-grey"></span></a>
			</h6>
	    </div>
	    <div class="w3-bar w3-grey w3-margin-top w3-margin-bottom">
				<a href="#" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-print w3-text-dark-grey"></span></a>
				<button onclick="document.getElementById('classeModal').style.display='block'" class="w3-bar-item w3-button w3-text-dark-grey">
					<span class="glyphicon glyphicon-plus"></span>
				</button>
		    <input placeholder="Procure aqui..." class="w3-bar-item w3-input w3-light-grey w3-border w3-hover-sand">
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
				
			</div>
	    </div>
	</div>
</div>
<?php
	include('add.ctp');
?>