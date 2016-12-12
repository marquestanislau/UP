<!-- <h3>Hello world</h3> -->
<?php 
	foreach($concursos as $concurso): 
		foreach($concurso['Carreira'] as $carreira):
?>
			<tr>
				<td><?php echo $carreira['nome']; ?></td>
				<td><?php echo $carreira['id']; ?></td>
				<td><?php echo $carreira['id']; ?></td>
				<td class="actions">
				<button onclick="document.getElementById('config').style.display='block'" class="w3-btn w3-orange">
					<span class="glyphicon glyphicon-cog"></span>
				</button>
				<?php
					echo $this->Html->link(
						'<span class="glyphicon glyphicon-trash"></span>', 
						array('controller' => 'carreiras', 'action' => 'view', $carreira['id']),
						array('class' => 'w3-btn w3-red', 'escape' => FALSE)
					);
				 ?>
				 <button onclick="document.getElementById('participantesModal').style.display='block'" class="w3-btn w3-purple">
				 	<span class="glyphicon glyphicon-user"></span>
				 </button>
				</td>
			</tr>
<?php 			
			include('configurarCarreiras.ctp');

		endforeach;
	endforeach;
?>