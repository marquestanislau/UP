<?php foreach ($grupos as $grupo): ?>
	<?php $grupo_id = $grupo['Group']['id']; ?>
	<tr>
		<td><?php echo $grupo['Group']['name']; ?></td>
		<td><?php echo $grupo['Group']['descricao']; ?></td>
		<td>
			<a onclick="document.getElementById('addGroupo<?php echo $grupo_id; ?>').style.display='block'" class="w3-button w3-round w3-green"><i class="fa fa-edit"></i> Editar</a>
			<?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i> Remover'), array('action' => 'delete', $grupo['Group']['id']), array('confirm' => __('Deseja remover o grupo %s?', $grupo['Group']['name']), 'escape' => false, 'class' => 'w3-button w3-round w3-red')); ?>
		</td>
		<?php include('editar.ctp'); ?>
	</tr>
<?php endforeach; ?>