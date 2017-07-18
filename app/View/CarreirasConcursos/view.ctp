<div class="carreirasConcursos view">
<h2><?php echo __('Carreiras Concurso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($carreirasConcurso['CarreirasConcurso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carreira'); ?></dt>
		<dd>
			<?php echo $this->Html->link($carreirasConcurso['Carreira']['id'], array('controller' => 'carreiras', 'action' => 'view', $carreirasConcurso['Carreira']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Concurso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($carreirasConcurso['Concurso']['id'], array('controller' => 'concursos', 'action' => 'view', $carreirasConcurso['Concurso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Vaga'); ?></dt>
		<dd>
			<?php echo h($carreirasConcurso['CarreirasConcurso']['numero_vaga']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Carreiras Concurso'), array('action' => 'edit', $carreirasConcurso['CarreirasConcurso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Carreiras Concurso'), array('action' => 'delete', $carreirasConcurso['CarreirasConcurso']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $carreirasConcurso['CarreirasConcurso']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreiras Concursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carreiras Concurso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carreiras'), array('controller' => 'carreiras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carreira'), array('controller' => 'carreiras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Concursos'), array('controller' => 'concursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Concurso'), array('controller' => 'concursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
