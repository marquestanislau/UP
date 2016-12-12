<div class="col-md-12">
	<h4 class="settings-font-color">
		<span style="font-size: 24px;" class=" glyphicon glyphicon-folder-open"></span> <?php echo __('Concursos'); ?>
	</h4>
	<button id="salvarConcurso" onclick="document.getElementById('addConcursoModal').style.display='block'"
	class="w3-btn w3-green">
		<span class='glyphicon glyphicon-plus-sign' ></span>
		Novo Concurso
	</button>
	<div style="margin-top: 10px;"></div>
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
		<div class="input-group pull-right" style="width: 40%;">
		     <span class="input-group-btn">
		       <button class="btn btn-default" type="button">A procura de:</button>
		     </span>
		     <input type="text" class="form-control" placeholder="Search for...">
		   </div>
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
		<!-- Inclui outra view -->
		<?php include('add.ctp'); ?>
	</div>