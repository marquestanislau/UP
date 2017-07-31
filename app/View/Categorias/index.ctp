<div class="w3-container w3-padding w3-white">
	<div id="espera" style="display:none">
		<?php echo $this->Html->image('ajax/ajax-loader.gif');?>
	</div>
	<div class="w3-container w3-text-blue">
		<h6>
			<span class="glyphicon glyphicon-tags"></span>
			<?php echo __('Categorias'); ?>
		</h6>
	</div>
	<div class="w3-bar w3-light-grey w3-margin-bottom">
		<a class="w3-bar-item w3-button w3-green" href="#" onclick="document.getElementById('categoriaAddForm').style.display='block'">
			<span class="glyphicon glyphicon-plus w3-large"></span>
			Novas categorias</a>
			<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-briefcase w3-large"></span> Carreiras disponiveis'), array('controller' => 'carreiras', 'action' => 'index'), array('class' => 'w3-bar-item w3-button w3-text-grey', 'escape' => false)); ?>
			<a id="print_category" href="<?php echo $this->Html->url(array('action' => 'listaEmPdf', 'ext' => 'pdf')); ?>" target="_blank" class="w3-bar-item w3-button w3-text-grey"><i class="fa fa-print w3-large"></i> Imprimir</a>
			<span class="mdl-tooltip" data-mdl-for="print_category">Imprimir todas categorias disponiveis!</span>
		</div> 
		<table class="table table-striped w3-border-light-grey">
			<thead class="w3-text-blue">
				<tr>
					<th><?php echo $this->Paginator->sort('nome'); ?></th>
					<th><?php echo $this->Paginator->sort('carreira_id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody id="table-body">
				<?php include('categorias.ctp'); ?>
			</tbody>
		</table>
		<p>
			<?php
			echo $this->Paginator->counter(array(
				'format' => __('<b class="w3-text-blue">P&aacute;gina {:page} de {:pages}, a mostrar {:current} registos num total de {:count}</b>')
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
			<?php include('add.ctp');?>