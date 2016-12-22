<div class="row ">
	<div class="col-md-9 w3-container w3-border w3-white w3-padding">
		<h4 class="w3-text-blue">
			<span class="glyphicon glyphicon-folder-open" style="font-size: 24px;"></span>
			<?php echo __('Concurso: '); ?>
			<?php echo h($concurso['Concurso']['data_aprovacao']); ?>
		</h4>
		<p><strong><?php echo h($concurso['Concurso']['nome']); ?></strong></p>
		<table class="w3-margin-bottom w3-table-all">
			<tr>
				<td><strong><?php echo __('Data Aprovacao'); ?></strong></td>
				<td><strong><?php echo __('Data Registo'); ?></strong></td>
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
				<?php echo $this->Form->input('Carreira', array('id' => 'carreiraSelecionada', 'label' => FALSE,'class' => 'w3-margin')); ?>			
			</div>
			<?php echo $this->Form->input('Concurso.id', array('value' => $concurso['Concurso']['id'])); ?>
			<button id="adicionar" class="w3-btn w3-green w3-large pull-right">
				<span class="glyphicon glyphicon-save"></span> Adicionar
			</button>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
	<div class="col-md-3">
		<div class="list-group">
			<h3>
				<a href="" class="list-group-item w3-purple">
					<span class="glyphicon glyphicon-list"></span> <?php echo __('Menu'); ?>	
				</a>
			</h3>
			<?php echo $this->Html->link("<span class='glyphicon glyphicon-edit'></span> Editar", array('action' => 'edit', $concurso['Concurso']['id']), array('class' => 'list-group-item w3-hover-khaki', 'escape' => false)); ?>
			<?php echo $this->Form->postLink("<span class='glyphicon glyphicon-trash'></span> Delete Concurso", array('action' => 'delete', $concurso['Concurso']['id']), array('escape' => false, 'class' => 'list-group-item w3-hover-khaki', 'confirm' => __('Are you sure you want to delete # %s?', $concurso['Concurso']['id']))); ?> 
			<?php echo $this->Html->link("<span class='glyphicon glyphicon-list'></span> Lista de Concursos", array('action' => 'index'), array('class' => 'list-group-item w3-hover-khaki', 'escape' => false)); ?>
			<?php echo $this->Html->link(__('New Concurso'), array('action' => 'add'), array('class' => 'list-group-item w3-hover-khaki', 'escape' => false)); ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-9 w3-margin-top w3-container w3-border w3-white w3-padding">
		<p>Carreiras para o concurso: {<?php echo h($concurso['Concurso']['data_aprovacao']); ?>}</p>
		<div id="requesting" style="display: none;">
			<?php echo $this->Html->image('ajax/ajax-loader.gif', array('alt' => 'Aguarde...')); ?>
		</div>
		<table id="table-carreiras" class="w3-table-all">
			<thead>
				<th>Designa&ccedil;&atilde;o da carreira</th>
				<th>N&uacute;mero de vagas</th>
				<th>N&uacute;mero de participantes</th>
				<th>Ac&ccedil;&otilde;es</th>
			</thead>
			<tbody id="table-body">
				<?php 
				include('carreiras.ctp');
				?>
			</tbody>
		</table>
	</div>
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