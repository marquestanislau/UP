<?php echo $this->Html->script('filter.js');  ?>
<div class="col-md-10">
<?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> Adicionar utilizador', array('action' => 'add'), array('class' => 'w3-btn w3-blue w3-border pull-right', 'escape' => FALSE)); ?>
	<h5 class="settings-font-color">
		<span style="font-size: 24px;" class="glyphicon glyphicon-user"></span>
		Lista de Utilizadores regitados no sistema</h5>
	<hr>
	<?php echo $this->Form->create('Usuario', array('controller' => 'UsuariosController', 'url' => 'index')); ?>
	<div class="form-group">
		<div class="input-group">
    		<input onkeyup="myFunction()" id="procurar" type="text" class="form-control" placeholder="Digite o nome ou apelido...">
    		<span class="input-group-btn">
        		<button class="btn btn-default disabled" type="submit">
        			<span class="glyphicon glyphicon-search"></span>
        			Procurar!
        		</button>
      		</span>
    	</div>
	</div>
	<?php echo $this->Form->end(); ?>
	<div class="w3-responsive">
		<table id="tabelaUsuarios" class="w3-table-all" cellpadding="0" cellspacing="0">
			<thead>
			<tr class="w3-black" style="color: white;">
				<th><?php echo $this->Paginator->sort('nome'); ?></th>
				<th><?php echo $this->Paginator->sort('apelido'); ?></th>
				<th><?php echo $this->Paginator->sort('email'); ?></th>
				<th><?php echo $this->Paginator->sort('contacto'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($usuarios as $usuario): ?>
			<tr>
				<td><?php echo h($usuario['Usuario']['nome']); ?>&nbsp;</td>
				<td><?php echo h($usuario['Usuario']['apelido']); ?>&nbsp;</td>
				<td><?php echo h($usuario['Usuario']['email']); ?>&nbsp;</td>
				<td><?php echo h('+(258) '.$usuario['Usuario']['contacto']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', array('action' => 'view', $usuario['Usuario']['id']), array('class' => 'w3-btn w3-green', 'escape' => FALSE)); ?>
					<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $usuario['Usuario']['id']), array('class' => 'w3-btn w3-teal', 'escape' => FALSE)); ?>
					<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span>', array('action' => 'delete', $usuario['Usuario']['id']), array('escape' => FALSE, 'class' => 'w3-btn w3-red', 'confirm' => __('Are you sure you want to delete # %s?', $usuario['Usuario']['id']))); ?>
				</td>
			</tr>
		<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}, a visualizar {:current} registos num total de {:count}, inicia em {:start},  e termina em {:end}')
	));
	?>	</p>
	<div class="pagination">
	<?php
		echo $this->Paginator->prev('<< ' . __('Anterior'), array(), null, array('class' => 'btn btn-primary'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Proximo') . ' >>', array(), null, array('class' => 'btn btn-warning'));
	?>
	</div>
</div>
