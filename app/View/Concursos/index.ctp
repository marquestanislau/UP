<div class="col-md-12">
	<h4 class="w3-text-grey settings-font-color">
		<span style="font-size: 24px;" class=" glyphicon glyphicon-folder-open"></span> <?php echo __('Concursos'); ?>
	</h4>
	<button id="salvarConcurso" onclick="document.getElementById('addConcursoModal').style.display='block'"
	class="w3-btn w3-green">
		<span class='glyphicon glyphicon-plus-sign' ></span>
		Novo Concurso
	</button>
	<input type="text" style="width: 30%;" class="pull-right w3-input w3-hover-aqua " placeholder="Nome do concurso...">
</div>
<div class="col-md-12">
	<div style="margin-top: 10px;"></div>
	<div class="w3-white w3-border w3-container w3-padding">
		<table class="table table-striped" cellpadding="0" cellspacing="0">
			<thead>
				<tr class="w3-purple w3-text-white">
					<th><?php echo $this->Paginator->sort('data_aprovacao'); ?></th>
					<th><?php echo $this->Paginator->sort('nome'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody id="table-body">
				<?php include('concursos.ctp');?>
			</tbody>
		</table>
		<p>
			<?php
			echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?>
		</p>
		<div class="paging">
			<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
		</div>
		</div>
	<!-- Inclui outra view -->
	<?php include('add.ctp'); ?>
</div>
