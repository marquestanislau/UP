<!-- <?php echo $this->Js->object($concurso); ?> -->
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
		<?php echo $this->Form->create('Concurso', array('controller' => 'concursos', 'url' => 'add')); ?>
		Carreiras:
		<div class="form-group">
			<?php echo $this->Form->input('Carreira', array('id' => 'carreiraSelecionada', 'label' => FALSE, 'multiple' => 'checkbox')); ?>			
		</div>
		<div class="form-group">
			N&uacute;mero de vagas dispon&iacute;veis:
			<input type="" class="form-control" placeholder="Digite o numero de vaga para a carreira seleccionada" name="">
		</div>
		<?php echo $this->Form->input('Concurso.id', array('value' => $concurso['Concurso']['id'])); ?>
		<!-- <?php echo $this->Js->submit(
						'Adicionar Carreiras',
						array(
							'before' => $this->Js->get('#requesting')->effect('fadeIn'),
							'success' => $this->Js->get('#requesting')->effect('fadeOut'),
							'update'=> '#table-body',
							'class' => 'btn btn-default'
						)
					);
		 ?> -->
		<button id="adicionar" class="btn btn-success">
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
	<table id="table-carreiras" class="table table-hover">
		<thead>
			<th>Designa&ccedil;&atilde;o da carreira</th>
			<th>N&uacute;mero de vagas</th>
			<th>Ac&ccedil;&otilde;es</th>
		</thead>
		<tr id="requesting">
			<td style="text-align: center; display: none;" colspan="3"><?php echo $this->Html->image('ajax/ajax-loader.gif', array('alt' => 'Aguarde...')); ?></td>
		</tr>
		<tbody id="table-body">
			<?php 
				include('nova_pagina.ctp');
			?>
		</tbody>
	</table>
	<button id="ajax" class="btn btn-primary">Ajax button</button>
</div>
<?php 
	$this->Js->get('#ajax')->event(
		'click',
		$this->Js->request(
			array('action' => 'nova_pagina/', $concurso['Concurso']['id']),
			array('update' => '#table-body')
		)
	);
	// $this->Js->get('#adicionar');
	// $this->Js->event(
	// 	'click',
	// 	$this->Js->request(
	// 		array(
	// 			'action' => 'view', $concurso['Concurso']['id']
	// 		),
	// 		array(
	// 			'async' => true, 
	// 			'update' => '#table-carreiras',
	// 			''
	// 		)
	// 	)
	// );
?>