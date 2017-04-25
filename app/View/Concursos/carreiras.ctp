<?php
	foreach($concursos as $concurso):
		$concurso_id = $concurso['Concurso']['id'];
		foreach($concurso['Carreira'] as $carreira):
			$carreira_id = $carreira['id'];
?>
			<tr class="w3-text-dark-grey">
				<td><?php echo $carreira['nome']; ?></td>
				<td><?php echo $carreira['id']; ?></td>
				<td><?php echo $carreira['id']; ?></td>
				<td class="actions">
				<button onclick="document.getElementById('config<?php echo $carreira_id;?>').style.display='block'" class="w3-btn w3-white w3-border">
					<span class="glyphicon glyphicon-cog"></span>
				</button>
				<?php
					echo $this->Html->link(
						'<span class="glyphicon glyphicon-trash"></span>',
						array('controller' => 'carreiras', 'action' => 'view', $carreira['id']),
						array('class' => 'w3-btn w3-white w3-border', 'escape' => FALSE)
					);
				 ?>
				 <button onclick="document.getElementById('participantesModal<?php echo $carreira_id;?>').style.display='block'" class="w3-btn w3-white w3-border">
				 	<span class="glyphicon glyphicon-user"></span>
				 </button>
				</td>
			</tr>
<?php
			include('configurarCarreiras.ctp');
			include('participantes.ctp');

		endforeach;
	endforeach;
?>
