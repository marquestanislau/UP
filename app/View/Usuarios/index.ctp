<?php echo $this->Html->script('filter.js');  ?>
<div class="col-md-6">
	<h6 class="w3-text-grey settings-font-color">
		<span style="font-size: 24px;" class="glyphicon glyphicon-user"></span>
		Lista de Utilizadores regitados no sistema</h6>
</div>
<div class="col-md-6 w3-padding">
	<a href="#" class="pull-right w3-margin-left">
		<span class="glyphicon glyphicon-question-sign"></span>
	</a>
	<a href="#" class="pull-right w3-margin-left">
		<span class="glyphicon glyphicon-print"></span>
	</a>
	<a href="#" class="pull-right w3-margin-left">
		<span class="glyphicon glyphicon-cog"></span>
	</a>
</div>
<div class="col-md-12">
	<div class="w3-responsive w3-white w3-padding w3-border">
	<div class="alert alert-info w3-container"><h6>Utilizadores</h6></div>
		<table id="tabelaUsuarios" class="w3-table table table-striped w3-white">
			<thead>
			<tr class="w3-label">
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
			<tr class="w3-text-dark-grey">
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
    	
    	<input onkeyup="myFunction()" style="width: 20%;" id="procurar" type="text" class="pull-right w3-margin-left w3-border w3-input" placeholder="Digite o nome ou apelido...">

		<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> Adicionar utilizador', array('action' => 'add'), array('class' => 'w3-btn w3-green pull-right', 'escape' => FALSE)); ?>
	</div>
	<p>
</div>
