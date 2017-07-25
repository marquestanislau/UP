<div class="row ">
	<div class="w3-container w3-white w3-padding">
		<h4 class="w3-text-blue">
			<span class="glyphicon glyphicon-folder-open" style="font-size: 24px;"></span>
			<?php echo __('Concurso: '); ?>
			<?php echo h($concurso['Concurso']['data_aprovacao']); ?>
		</h4>
		 <div class="w3-bar w3-light-grey">
		 	<!-- BEGIN BUTTON'S -->
		 	<?php echo $this->Form->postLink("<span class='glyphicon glyphicon-trash'></span> Delete Concurso", array('action' => 'delete', $concurso['Concurso']['id']), array('escape' => false, 'class' => 'w3-button w3-bar-item', 'confirm' => __('Are you sure you want to delete # %s?', $concurso['Concurso']['id']))); ?> 
		 	<?php echo $this->Html->link("<span class='glyphicon glyphicon-list'></span> Lista de Concursos", array('action' => 'index'), array('class' => 'w3-button w3-bar-item', 'escape' => false)); ?>
		 	<?php $link = $this->Html->url(array('action' => 'participantes', 'controller' => 'funcionarios')); ?>
		 	<a class="w3-button w3-bar-item" href="<?php echo $link; ?>"><i class="fa fa-users"></i> Lista de participantes</a>
		 	<!-- END BUTTON'S -->
		  <!-- <a href="#" class="w3-bar-item w3-button w3-green">Go</a> -->
		</div>
		<p><strong><?php echo h($concurso['Concurso']['nome']); ?></strong></p>
		<table class="w3-margin-bottom w3-table table-striped">
			<tr>
				<td><strong><?php echo __('Data da Aprova&ccedil;&atilde;o'); ?></strong></td>
				<td><strong><?php echo __('Data e Hora de Registo'); ?></strong></td>
			</tr>
			<tr>
				<td><?php echo h($concurso['Concurso']['data_aprovacao']); ?></td>
				<td><?php echo h($concurso['Concurso']['created']); ?></td>
			</tr>
		</table>
		<div role="form">

		<button onclick="myFunction('carreiras')" class="w3-button w3-hover-gray w3-hover-text-light-grey w3-block w3-left-align">
				<span class="glyphicon glyphicon-briefcase"></span> Carreiras (Clique para obter opcoes)
			</button>

			<div id="carreiras" style="overflow-y: scroll; height: 200px;" class="w3-hide w3-animate-top">
				<?php echo $this->Form->create('Concurso', array('url' => array('action' => 'add'), 'id' => 'ajaxFormAdd')); ?>
				<div class="form-group w3-light-grey w3-round w3-border-top">
					<?php echo $this->Form->input('Carreira', array(
								'multiple' => 'checkbox',
								'selected' => $selected,
								'id' => 'carreiraSelecionada', 
								'label' => FALSE,
								'class' => 'w3-margin w3-text-dark-grey w3-hover-text-blue'
							)
					); ?>	
				</div>
				<?php echo $this->Form->input('Concurso.id', array('value' => $concurso['Concurso']['id'])); ?>
			</div>
			<button id="adicionar" class="w3-button w3-green w3-large pull-right">
				<span class="glyphicon glyphicon-save"></span> Adicionar
			</button>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>

<div class="row">
	<div class="w3-margin-top w3-container w3-white w3-padding">
		<h4 class="w3-text-dark-grey">Carreiras para o concurso: {<?php echo h($concurso['Concurso']['data_aprovacao']); ?>}</h4>
		<div id="requesting" style="display: none;">
			<?php echo $this->Html->image('ajax/ajax-loader.gif', array('alt' => 'Aguarde...')); ?>
		</div>
		<table id="table-carreiras" class="table w3-topbar w3-border-light-grey">
			<thead class="w3-text-blue">
				<th>Designa&ccedil;&atilde;o da carreira</th>
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
$success = $this->Js->request(
		array(
				'controller' => 'concursos'
			),
		array(
				'update' => '#message',
				'complete' => 'displayMessagesVer2()'
			)
	);
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
			'complete' => '$("#requesting").attr("style", "display:none")',
			'success' => $success
		)
	)
);
?>

<script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>