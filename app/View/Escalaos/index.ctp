<div class="row">
	<div class="col-md-12">
		<h4>Escal&otilde;es</h4>
	</div>
	<div class="col-md-6">
		<label>Procure aqui:</label>
		<input class="w3-input w3-border w3-animate-input" placeholder="Digite o nome do escalao" style="width: 50%" type="" name="">
	</div>
	<div class="col-md-3">
		<button class="w3-btn w3-teal w3-large" onclick="document.getElementById('escAddModal').style.display='block'">
			<span class="glyphicon glyphicon-plus-sign"></span>
			Adicionar Escal&otilde;es
		</button>
	</div>
	<div class="col-md-3">
		<div class="w3-dropdown-hover">
			<button class="w3-btn w3-grey">Opcoes</button>
			<div class="w3-dropdown-content w3-border">
				<?php echo $this->Html->link(__('Lista de Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?>
				<?php echo $this->Html->link(__('Lista de Classes'), array('controller' => 'clazzes', 'action' => 'index')); ?>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('nome'); ?></th>
					<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
					<th><?php echo $this->Paginator->sort('clazze_id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody id="table-body">
				<?php include('escaloes.ctp');?>
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
	</div>
	<?php include('add.ctp'); ?>