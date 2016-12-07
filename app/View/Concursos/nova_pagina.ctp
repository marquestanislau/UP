<!-- <h3>Hello world</h3> -->
<?php 
	foreach($concursos as $concurso): 
		foreach($concurso['Carreira'] as $carreira):
?>
			<tr>
				<td><?php echo $carreira['nome']; ?></td>
				<td><?php echo $carreira['nome']; ?></td>
				<td class="actions">
				<?php 
					echo $this->Html->link(
						'<span class="glyphicon glyphicon-eye-open"></span> Ver', 
						array('controller' => 'carreiras', 'action' => 'view', $carreira['id']),
						array('class' => 'w3-btn w3-white w3-border', 'escape' => FALSE)
					);

					echo $this->Html->link(
						'<span class="glyphicon glyphicon-trash"></span> Excluir', 
						array('controller' => 'carreiras', 'action' => 'view', $carreira['id']),
						array('class' => 'btn btn-danger', 'escape' => FALSE)
					);
				 ?>
				 <button onclick="document.getElementById('participantesModal').style.display='block'" class="w3-btn w3-purple">
				 	<span class="glyphicon glyphicon-user"></span> Adicionar candidato
				 </button>
				</td>
			</tr>
<?php 			
		endforeach;
	endforeach;
?>