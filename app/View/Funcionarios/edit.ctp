<div class="w3-modal" id="edit<?php echo $funcionario_id; ?>">
	<div class="w3-modal-content w3-round w3-light-grey w3-animate-zoom">
		<header class="w3-container w3-dark-grey">
			<span onclick="document.getElementById('edit<?php echo $funcionario_id; ?>').style.display='none'" class="w3-closebtn">&times;</span>
			<h3><i class="fa <?php echo $funcionario['Concurso']['tipo'] == 0 ? 'fa-user': 'fa-graduation-cap';?>"></i> Editar dados do participante</h3>
		</header>
		<div class="w3-container">
			<?php 
				$carreira = $funcionario['Carreira'];
				$carreira_id = $carreira['id'];
				$concurso = $funcionario['Concurso'];
				$concurso_id = $concurso['id'];
				if ($concurso['tipo'] == 0) {
					include('ctas.ctp');
				 } else {
					include('cds.ctp');
				 }
			 ?>
		</div>
		<div class="footer"></div>		
	</div>
</div>