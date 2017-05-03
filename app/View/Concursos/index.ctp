
<div class="col-md-12">
	<div class="w3-white w3-border w3-container w3-padding">
	<h4 class="w3-text-blue">
		<span style="font-size: 24px;" class=" glyphicon glyphicon-folder-open"></span> <?php echo __('Concursos'); ?>
	</h4>
		 <div class="w3-bar w3-light-grey w3-margin-bottom">
		 	<a id="salvarConcurso" href="#" onclick="document.getElementById('addConcursoModal').style.display='block'"
		 		class="w3-bar-item w3-button">
		 		<span class='glyphicon glyphicon-plus-sign' ></span>
		 		Novo Concurso
		 	</a>
		  <button class="w3-bar-item w3-button"><i class="fa fa-print"></i> Imprimir</button>
		  <input type="text" style="width: 50%;" class="w3-bar-item w3-input w3-border w3-white w3-hover-sand" placeholder="Nome do concurso...">
		  <!-- <a href="#" class="w3-bar-item w3-button w3-green">Go</a> -->
		</div>
		<!-- <h4 class="w3-text-dark-grey w3-center">Lista de concursos disponiveis</h4> -->
		<table class="table table-striped w3-border w3-border-dark-grey" cellpadding="0" cellspacing="0">
			<thead class="w3-dark-grey">
				<tr>
					<th><?php echo $this->Paginator->sort('data_aprovacao'); ?></th>
					<th><?php echo $this->Paginator->sort('nome'); ?></th>
					<th class="actions"><?php echo __('Actividade'); ?></th>
				</tr>
			</thead>
			<tbody id="table-body">
				<?php include('concursos.ctp');?>
			</tbody>
		</table>
		<p>
			<?php
			  echo $this->Paginator->counter(array(
			    'format' => __('<span class="w3-text-blue">P&aacute;gina {:page} de {:pages}, a mostrar {:current} num total de {:count}</span>')
			  ));
			  ?>  </p>
			  <div class="paging">
			  <?php
			    echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
			    echo $this->Paginator->numbers(array('separator' => ''));
			    echo $this->Paginator->next(__('Proximo') . ' >', array(), null, array('class' => 'next disabled'));
			  ?>
		</div>
	</div>
	<!-- Inclui outra view -->
	<?php include('add.ctp'); ?>
</div>
