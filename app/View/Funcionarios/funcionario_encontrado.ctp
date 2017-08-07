<div class="row">
	<?php foreach ($funcionario as $employee): ?>
		<div class="col-md-4">
			<div class="w3-container w3-text-grey w3-light-grey w3-margin-top">
				<div class="w3-panel">
					<?php echo $employee['Funcionario']['nome']; ?>
					<?php echo $employee['Funcionario']['apelido']; ?>
				</div>
				<div class="w3-panel">
					<h2 class="w3-large"><i class="fa fa-user"></i></h2>
					Posi&ccedil;&atilde;o: <?php echo $employee['Funcionario']['posicao']; ?>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>