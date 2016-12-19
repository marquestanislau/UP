<div class="row">
	<div class="col-md-6">
		<h4 class="w3-text-grey">Escal&otilde;es</h4>
	</div>
	<div class="col-md-4">
		<input class="w3-input pull-right w3-border w3-animate-input" placeholder="Digite o nome do escal&atilde;o" style="width: 50%" type="" name="">
	</div>
</div>
<div class="row">
	<div class="col-md-10">
		<div class="w3-container w3-white w3-border w3-padding">
		<h6 class="w3-text-blue"><span class="fa fa-cubes"></span>Escaloes pertencentes a</h6>
			<table class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('nome'); ?></th>
						<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
						<th><?php echo $this->Paginator->sort('classe'); ?></th>
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
	</div>
	<div class="row w3-padding-top">
		<div class="col-md-3">
			<button class="w3-btn w3-teal w3-large" onclick="document.getElementById('escAddModal').style.display='block'">
				<span class="glyphicon glyphicon-plus-sign"></span>
				Adicionar Escal&otilde;es
			</button>
		</div>
		<div class="col-md-3">
			<div class="w3-dropdown-hover">
				<button class="w3-btn w3-green w3-large">
					<span class="glyphicon glyphicon-tasks"></span>
					Op&ccedil;&otilde;es
				</button>
				<div class="w3-dropdown-content w3-border">
					<?php echo $this->Html->link(__('Lista de Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?>
					<?php echo $this->Html->link(__('Lista de Classes'), array('controller' => 'clazzes', 'action' => 'index')); ?>
				</div>
			</div>
		</div>
	</div>
	<?php include('add.ctp'); ?>