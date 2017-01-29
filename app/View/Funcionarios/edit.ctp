<div class="funcionarios form">
<?php echo $this->Form->create('Funcionario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Funcionario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('apelido');
		echo $this->Form->input('data_nascimento');
		echo $this->Form->input('sexo');
		echo $this->Form->input('nuit');
		echo $this->Form->input('bi');
		echo $this->Form->input('data_emissao');
		echo $this->Form->input('local_emissao');
		echo $this->Form->input('contacto_pessoal');
		echo $this->Form->input('contacto_trabalho');
		echo $this->Form->input('contacto_alternativo');
		echo $this->Form->input('email_pessoal');
		echo $this->Form->input('email_corporativo');
		echo $this->Form->input('curso');
		echo $this->Form->input('especialidade');
		echo $this->Form->input('ano_conclusao');
		echo $this->Form->input('carreira_id');
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('clazze_id');
		echo $this->Form->input('escalao_id');
		echo $this->Form->input('delegacao_id');
		echo $this->Form->input('sector_id');
		echo $this->Form->input('departamento_id');
		echo $this->Form->input('tipo_ingresso_id');
		echo $this->Form->input('concurso_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Funcionario.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Funcionario.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Carreiras'), array('controller' => 'carreiras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carreira'), array('controller' => 'carreiras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Concursos'), array('controller' => 'concursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Concurso'), array('controller' => 'concursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Delegacaos'), array('controller' => 'delegacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delegacao'), array('controller' => 'delegacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ctas'), array('controller' => 'ctas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cta'), array('controller' => 'ctas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cds'), array('controller' => 'cds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cd'), array('controller' => 'cds', 'action' => 'add')); ?> </li>
	</ul>
</div>
