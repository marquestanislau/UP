<div class="col-md-9">
<h4 class="settings-font-color">
<span class="glyphicon glyphicon-folder-open" style="font-size: 24px;"></span>
<?php echo __('Concurso: '); ?>
	<?php echo h($concurso['Concurso']['data_aprovacao']); ?>
</h4>
<p><strong><?php echo h($concurso['Concurso']['nome']); ?></strong></p>
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
	<div role="form">
		<?php echo $this->Form->create('Concurso', array('url' => array('action' => 'add'), 'id' => 'ajaxFormAdd')); ?>
		Carreiras:
		<div class="form-group w3-sand w3-border">
			<?php echo $this->Form->input('Carreira', array('id' => 'carreiraSelecionada', 'label' => FALSE, 'multiple' => 'checkbox', 'class' => 'w3-margin')); ?>			
		</div>
		<div class="form-group">
			N&uacute;mero de vagas dispon&iacute;veis:
			<input type="" class="form-control" placeholder="Digite o numero de vaga para a carreira seleccionada" name="">
		</div>
		<?php echo $this->Form->input('Concurso.id', array('value' => $concurso['Concurso']['id'])); ?>
		<button id="adicionar" class="w3-btn w3-green w3-large">
			<span class="glyphicon glyphicon-save"></span> Adicionar
		</button>
		<?php echo $this->Form->end(); ?>
	</div>
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
	<div id="requesting" style="display: none;">
		<?php echo $this->Html->image('ajax/ajax-loader.gif', array('alt' => 'Aguarde...')); ?>
	</div>
	<table id="table-carreiras" class="table table-hover">
		<thead>
			<th>Designa&ccedil;&atilde;o da carreira</th>
			<th>N&uacute;mero de vagas</th>
			<th>Ac&ccedil;&otilde;es</th>
		</thead>
		<tbody id="table-body">
			<?php 
				 include('nova_pagina.ctp');
			?>
		</tbody>
	</table>
</div>
<?php 
	$dados = $this->Js->get('#ajaxFormAdd')->serializeForm(array('inline' => true, 'isForm' => true));
	$this->Js->get('#ajaxFormAdd')->event(
		"submit",
		$this->Js->request(
			array('action' => 'add'),
			array(
				'update' => '#table-body',
				'method' => 'post',
				'data' => $dados,
				'dataExpression' => true,
				'async' => true,
				'before' => '$("#requesting").attr("style", "")',
				'complete' => '$("#requesting").attr("style", "display:none")'
			)
		)
	);
?>
<?php
	include('participantes.ctp');
?>