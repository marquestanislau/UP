<div class="row w3-padding">
	<?php foreach ($funcionario as $employee): ?>
		<div class="col-md-4 w3-padding">
			<div class="row w3-text-grey w3-light-grey">
				<div class="col-md-12 w3-padding">
					<?php echo $employee['Funcionario']['nome']; ?>
					<?php echo $employee['Funcionario']['apelido']; ?>
				</div>
				<div class="col-md-6 w3-padding">
					<h2 class="w3-large"><i class="fa fa-user"></i></h2>
					Posi&ccedil;&atilde;o: <?php echo $employee['Funcionario']['posicao']; ?>
				</div>
				<div class="col-md-6">
					<?php echo $this->Html->image('perfil_default.png', array('class' => 'w3-circle', 'style' => 'width: 50%')); ?>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>