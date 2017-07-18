<div class="carreirasConcursos form">
<?php echo $this->Form->create('CarreirasConcurso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Carreiras Concurso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('carreira_id'/*, array('multiple' => 'checkbox')*/);
		echo $this->Form->input('concurso_id');
		echo $this->Form->input('numero_vaga');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CarreirasConcurso.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('CarreirasConcurso.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Carreiras Concursos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Carreiras'), array('controller' => 'carreiras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carreira'), array('controller' => 'carreiras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Concursos'), array('controller' => 'concursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Concurso'), array('controller' => 'concursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
