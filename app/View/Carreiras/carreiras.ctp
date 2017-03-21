	<?php foreach ($carreiras as $carreira): ?>
		<!-- Para facilitar na nomeacao de formulario, usamos o id por ser unico -->
	<?php $id = $carreira['Carreira']['id']; ?>
	<tr class="w3-hover-khaki w3-hover-text-blue">
		<td><?php echo h($carreira['Carreira']['id']); ?>&nbsp;</td>
		<td><?php echo h($carreira['Carreira']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Form->postLink("<span class='glyphicon glyphicon-trash'></span>", array('action' => 'delete', $carreira['Carreira']['id']), array('class' => 'w3-btn w3-red' , 'escape' => false, 'confirm' => __('Are you sure you want to delete # %s?', $carreira['Carreira']['id']))); ?>
			<button class="w3-btn w3-blue" onclick="document.getElementById('carreiraModalEditar<?php echo $id;?>').style.display='block'">
				<span class='glyphicon glyphicon-edit'></span>
			</button>
		</td>
	</tr>
	<?php
		include('edit.ctp');
	?>
<?php endforeach; ?>