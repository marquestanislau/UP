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
						array('class' => 'btn btn-default', 'escape' => FALSE)
					);

					echo $this->Html->link(
						'<span class="glyphicon glyphicon-trash"></span> Excluir', 
						array('controller' => 'carreiras', 'action' => 'view', $carreira['id']),
						array('class' => 'btn btn-danger', 'escape' => FALSE)
					);
					echo $this->Html->link(
						'<span class="glyphicon glyphicon-user"></span> Adicionar candidato', 
						array('controller' => 'carreiras', 'action' => 'view', $carreira['id']),
						array('class' => 'btn btn-primary', 'escape' => FALSE)
					);
				 ?>
				</td>
			</tr>
<?php 			
		endforeach;
	endforeach;
?>