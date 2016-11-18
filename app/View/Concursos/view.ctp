<div class="col-md-9">
<h4><?php echo __('Concurso: '); ?>
	<?php echo h($concurso['Concurso']['data_aprovacao']); ?>
</h4>
<p><?php echo h($concurso['Concurso']['nome']); ?></p>
<table class="table table-striped">
	<tr>
		<td><?php echo __('Data Aprovacao'); ?></td>
		<td><?php echo __('Data Registo'); ?></td>
	</tr>
	<tr>
		<td><?php echo h($concurso['Concurso']['data_aprovacao']); ?></td>
		<td><?php echo h($concurso['Concurso']['data_registo']); ?></td>
	</tr>
</table>
	<?php echo $this->Form->create('Carreira'); ?>
	Carreiras:
	<?php echo $this->Form->input('carreira_id', array('label' => '', 'empty' => '-------------')); ?>
	Numero de vaga: <input type="" name="">
	<button class="btn btn-default">Adicionar</button>
	<button class="btn btn-success">Submeter</button>
</div>
<div class="col-md-3">
<div class="list-group">
	<h3>
		<a href="" class="list-group-item active">
			<span class="glyphicon glyphicon-list"></span> <?php echo __('Menu'); ?>	
		</a>
	</h3>
	<?php echo $this->Html->link(__('Edit Concurso'), array('action' => 'edit', $concurso['Concurso']['id']), array('class' => 'list-group-item', 'escape' => false)); ?>
	<?php echo $this->Form->postLink(__('Delete Concurso'), array('action' => 'delete', $concurso['Concurso']['id']), array('escape' => false, 'class' => 'list-group-item', 'confirm' => __('Are you sure you want to delete # %s?', $concurso['Concurso']['id']))); ?> 
	<?php echo $this->Html->link(__('List Concursos'), array('action' => 'index'), array('class' => 'list-group-item', 'escape' => false)); ?>
	<?php echo $this->Html->link(__('New Concurso'), array('action' => 'add'), array('class' => 'list-group-item', 'escape' => false)); ?>
</div>
</div>
<div class="col-md-9">
	<p>Carreiras para o concurso: {<?php echo h($concurso['Concurso']['data_aprovacao']); ?>}</p>
	<table class="table table-hover">
		<thead>
			<th>Designa&ccedil;&atilde;o da carreira</th>
			<th>N&uacute;mero de vagas</th>
			<th>Ac&ccedil;&otilde;es</th>
		</thead>
		<tr>
			<td>Not available</td>
		</tr>
	</table>
</div>
