<div class="row">
	<div class="">
		<div class="w3-container w3-white w3-padding">
			<h6 class="w3-text-blue"><span class="fa fa-cubes"></span>Escal&otilde;es pertencentes a categorias e classes</h6>
		<div class="w3-bar w3-light-grey w3-margin-bottom w3-margin-top">
		  <button class="w3-button w3-bar-item" onclick="document.getElementById('escAddModal').style.display='block'">
					<span class="glyphicon glyphicon-plus-sign"></span>
					Adicionar Escal&otilde;es
				</button>
				<?php echo $this->Html->link(__('Lista de Categorias'), array('controller' => 'categorias', 'action' => 'index'), array('class' => 'w3-button w3-bar-item')); ?>
				<?php echo $this->Html->link(__('Lista de Classes'), array('controller' => 'clazzes', 'action' => 'index'), array('class' => 'w3-button w3-bar-item')); ?>
			<input class="w3-input w3-border w3-white w3-hover-sand w3-bar-item" placeholder="Digite o nome do escal&atilde;o" style="width: 50%;">
		</div>
			<table class="table table-striped">
				<thead class="w3-text-blue">
					<tr>
						<th><?php echo $this->Paginator->sort('nome'); ?></th>
						<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
						<th><?php echo $this->Paginator->sort('classe'); ?></th>
						<th class="actions"><?php echo __('Opera&ccedil;&otilde;es'); ?></th>
					</tr>
				</thead>
				<tbody id="table-body">
					<?php include('escaloes.ctp');?>
				</tbody>
			</table>
			<p>
				<?php
				echo $this->Paginator->counter(array(
					'format' => __('<span class="w3-text-blue">P&aacute;gina {:page} de {:pages}, a mostrar {:current} num total de {:count}</span>')
					));
					?>	</p>
					<div class="paging">
						<?php
						echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
						echo $this->Paginator->numbers(array('separator' => ''));
						echo $this->Paginator->next(__('Proximo') . ' >', array(), null, array('class' => 'next disabled'));
						?>
					</div>
				</div>
			</div>
		</div>
		
		<?php include('add.ctp'); ?>