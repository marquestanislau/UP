	<?php foreach ($carreiras as $carreira): ?>
		<!-- Para facilitar na nomeacao de formulario, usamos o id por ser unico -->
	<?php $id = $carreira['Carreira']['id']; ?>
	<tr class="w3-hover-khaki w3-hover-text-blue">
		<td><?php echo h($carreira['Carreira']['id']); ?>&nbsp;</td>
		<td><?php echo $carreira['Carreira']['tipo'] == 0 ? '<i class="fa fa-user"></i>': '<i class="fa fa-graduation-cap"></i>'; ?>&nbsp;</td>
		<td><?php echo h($carreira['Carreira']['nome']); ?>&nbsp;</td>
		<td><?php echo h($carreira['Carreira']['resolucao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Form->postLink("<span class='glyphicon glyphicon-trash'></span>", array('action' => 'delete', $carreira['Carreira']['id']), array('class' => 'w3-tag w3-red w3-round w3-hover-light-grey' , 'escape' => false, 'confirm' => __('Remover a carreira # %s?', $carreira['Carreira']['id']))); ?>
			<a href="#" class="w3-tag w3-round w3-green w3-hover-light-grey" onclick="document.getElementById('carreiraModalEditar<?php echo $id;?>').style.display='block'">
				<span class='glyphicon glyphicon-edit'></span>
			</a>
			<a class="w3-tag w3-round w3-blue w3-hover-light-grey" href="<?php echo $this->Html->url(array('controller' => 'carreiras', 'action' => 'view', $carreira['Carreira']['id']));?>">
				<i class="fa fa-eye"></i>
			</a>
		</td>
	</tr>
	<?php
		include('edit.ctp');
	?>
<?php endforeach; ?>