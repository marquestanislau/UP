<?php echo $this->Html->script('filter.js');  ?>
<div class="row">
		<div class="w3-white w3-padding">
		<div class="row w3-padding-top">
			<div class="col-md-6 w3-white">
				<h6 class="w3-text-blue">
					<span style="font-size: 24px;" class="fa fa-users"></span>
					Lista de Utilizadores regitados no sistema</h6>
			</div>
			<div class="col-md-4 w3-text-grey w3-white">
				<a href="#" class="pull-right w3-margin-left w3-button w3-circle w3-hover-text-gray">
					<span class="glyphicon glyphicon-question-sign"></span>
				</a>
				<a target="_blank" href="<?php echo $this->Html->url(array('action' => 'print_users', 'ext' => 'pdf'));?>" class="pull-right w3-margin-left w3-button w3-circle w3-hover-text-gray">
					<span class="glyphicon glyphicon-print"></span>
				</a>
				<a href="#" class="pull-right w3-margin-left w3-button w3-circle w3-hover-text-gray">
					<span class="glyphicon glyphicon-cog"></span>
				</a>
			</div>
		</div>
			<table id="tabelaFiltro" class="table table-striped w3-topbar w3-border-blue">
				<thead class="w3-yellow">
					<tr>
						<th><?php echo $this->Paginator->sort('nome'); ?></th>
						<th><?php echo $this->Paginator->sort('apelido'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('contacto'); ?></th>
						<th>status</th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($usuarios as $usuario): ?>
						<tr class="w3-text-dark-grey w3-hover-sand">
							<td><?php echo h($usuario['Usuario']['nome']); ?>&nbsp;</td>
							<td><?php echo h($usuario['Usuario']['apelido']); ?>&nbsp;</td>
							<td><?php echo h($usuario['Usuario']['email']); ?>&nbsp;</td>
							<td><?php echo h('+(258) '.$usuario['Usuario']['contacto']); ?>&nbsp;</td>
							<td><span class="glyphicon glyphicon-ok w3-text-green"></span></td>
							<td class="actions">
								<?php echo $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', array('action' => 'view', $usuario['Usuario']['id']), array('class' => 'w3-btn w3-green', 'escape' => FALSE)); ?>
								<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $usuario['Usuario']['id']), array('class' => 'w3-btn w3-teal', 'escape' => FALSE)); ?>
								<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $usuario['Usuario']['id']), array('escape' => FALSE, 'class' => 'w3-btn w3-red', 'confirm' => __('Are you sure you want to delete # %s?', $usuario['Usuario']['id']))); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<?php
			echo $this->Paginator->counter(array(
				'format' => __('Pagina {:page} de {:pages}, a visualizar {:current} registos num total de {:count}, inicia em {:start},  e termina em {:end}')
			));
			?>	</p>
			<div class="paging">
				<?php
				echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(__('Proximo') . ' >', array(), null, array('class' => 'next disabled'));
				?>
			</div>

			<input onkeyup="filtro()" style="width: 20%;" id="procurar" type="text" class="pull-right w3-margin-left w3-border w3-input" placeholder="Digite o nome ou apelido...">

			<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> Adicionar utilizador', array('action' => 'add'), array('class' => 'w3-btn w3-green pull-right', 'escape' => FALSE)); ?>

			<p>
			</div>
</div>
