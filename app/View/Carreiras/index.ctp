<div class="col-md-8">
	<h4 class="w3-text-blue settings-font-color"><span style="font-size: 24px;" class="glyphicon glyphicon-briefcase"></span> <?php echo __('Carreiras disponiveis no sistema'); ?></h4>
	<a href="">
		<span class="glyphicon glyphicon-print"></span>
		Imprimir
	</a>
	<div class="well">
		Alguma informacao relacionada com a configuracao inserccao de novas carreiras
	</div>
	<table class="table table-striped" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<th><?php echo $this->Paginator->sort('nome'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($carreiras as $carreira): ?>
		<!-- Para facilitar na nomeacao de formulario, usamos o id por ser unico -->
	<?php $id = $carreira['Carreira']['id']; ?>
	<tr>
		<td><?php echo h($carreira['Carreira']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Form->postLink("<span class='glyphicon glyphicon-trash'></span>", array('action' => 'delete', $carreira['Carreira']['id']), array('class' => 'w3-btn w3-red' , 'escape' => false, 'confirm' => __('Are you sure you want to delete # %s?', $carreira['Carreira']['id']))); ?>
			<button class="w3-btn w3-blue" onclick="document.getElementById('carreiraModalEditar<?php echo $id;?>').style.display='block'">
				<span class='glyphicon glyphicon-edit'></span>
			</button>
		</td>
	</tr>
	<?php
		include('edit.ctp');
	?>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="col-md-4">
	<div class="list-group">
	  <a href="#" class="list-group-item active">
	    <h4><span class="glyphicon glyphicon-menu-left"></span> <?php echo __('Menu'); ?></h4>
	  </a>
	  <a href="<?php echo $this->Html->url(array('action' => 'configuracao', 'controller' => 'pages'));?>" class="list-group-item"> <span class="glyphicon glyphicon-cog"></span> Configuracoes</a>
	  <a href="#" onclick="document.getElementById('carreiraModal').style.display='block'"  class="list-group-item w3-hover-green">
		<span class="glyphicon glyphicon-plus-sign"></span>
	  	Nova carreira
	  </a>
	</div>
</div>

<?php
	include('add.ctp');
	include('edit.ctp');
?>
