<div class=" w3-text-blue">
	<h3>Carreira de <?php echo h($carreira['Carreira']['nome']); ?></h3>
</div>
<div class="w3-bar w3-round w3-light-grey">
	<?php echo $this->Html->link(__('Edit Carreira'), array('action' => 'edit', $carreira['Carreira']['id']), array('class' => 'w3-button')); ?>
	<?php echo $this->Form->postLink(__('Delete Carreira'), array('action' => 'delete', $carreira['Carreira']['id']), array('class' => 'w3-button'), array('confirm' => __('Are you sure you want to delete # %s?', $carreira['Carreira']['id']))); ?>
	<?php echo $this->Html->link(__('List Carreiras'), array('action' => 'index'), array('class' => 'w3-button')); ?>
	<?php echo $this->Html->link(__('New Carreira'), array('action' => 'add'), array('class' => 'w3-button')); ?>
</div>
<div>
	<?php include('classes.ctp'); ?>
</div>
