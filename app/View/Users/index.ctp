<?php echo $this->Html->script('filter.js');  ?>
<div class="row">
	<div class="w3-white w3-padding">
		<div class="row w3-padding-top">
			<div class="col-md-12 w3-white">
				<h6 class="w3-text-blue">
					<span style="font-size: 24px;" class="fa fa-users"></span>
					Lista de Utilizadores regitados no sistema</h6>
				</div>
				<div class="col-md-12 w3-text-grey w3-white w3-padding">
					<div class="w3-bar w3-light-grey">
						<button onclick="document.getElementById('addUser').style.display='block'" class="w3-button w3-green w3-bar-item">
							<i class="fa fa-check"></i>
							Adicionar utilizador
						</button>
						<input onkeyup="filtro()" style="width: 20%;" id="procurar" type="text" class="w3-bar-item w3-border w3-input w3-white w3-round" placeholder="Digite o nome ou apelido...">
						<a href="#" class="w3-button w3-right w3-bar-item w3-text-gray">
							<span class="glyphicon glyphicon-question-sign"></span>
						</a>
						<a target="_blank" href="<?php echo $this->Html->url(array('action' => 'print_users', 'ext' => 'pdf'));?>" class="w3-button w3-right w3-bar-item w3-text-gray">
							<span class="glyphicon glyphicon-print"></span>
							Imprimir
						</a>
						<!-- <a href="#" class="w3-button w3-right w3-bar-item w3-text-gray">
							<span class="glyphicon glyphicon-cog"></span>
						</a> -->
					</div>
					</div>
				</div>
				<table id="tabelaFiltro" class="table table-striped">
					<thead`>
					<tr>
						<th><?php echo $this->Paginator->sort('nome'); ?></th>
						<th><?php echo $this->Paginator->sort('apelido'); ?></th>
						<th><?php echo $this->Paginator->sort('Grupo'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('contacto'); ?></th>
						<th>status</th>
						<th class="actions"><?php echo __('Actividade'); ?></th>
					</tr>
				</thead>
				<tbody id="table-body">
					<?php include 'users.ctp'; ?>
				</tbody>
			</table>
			<p class="w3-text-blue">
				<?php
				echo $this->Paginator->counter(array(
					'format' => __('Pagina {:page} de {:pages}, a visualizar {:current} registos num total de {:count}, inicia em {:start},  e termina em {:end}')
					));
					?>	
			</p>
			<div class="paging">
				<?php
				echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('Proximo') . ' >', array(), null, array('class' => 'next disabled'));
				?>
			</div>
		</div>
	</div>
	<?php include('add.ctp'); ?>