<div class="row w3-padding">
	<?php foreach ($funcionario as $employee): ?>
		<div class="col-md-4 w3-padding">
			<div class="row w3-text-grey w3-light-grey">
				<div class="col-md-12 w3-padding">
					<?php echo $employee['Funcionario']['nome']; ?>
					<?php echo $employee['Funcionario']['apelido']; ?>
				</div>
				<div class="col-md-6 w3-padding">
					<?php if ($employee['Funcionario']['despacho']) {?>
						<i class="fa fa-check w3-text-green"></i>
					<?php
					} else {?>
						<i class="fa fa-remove w3-text-red"></i>
					<?php } ?>
					<h2 class="w3-large"><i class="fa fa-user"></i></h2>
					Posi&ccedil;&atilde;o: <?php echo $employee['Funcionario']['posicao']; ?>
				</div>
				<div class="col-md-6">
					<?php echo $this->Html->image('perfil_default.png', array('class' => 'img-responsive w3-circle', 'style' => 'width: 50%')); ?>
				</div>
				<div class="col-md-12">
				<?php if (!empty($employee['Funcionario']['despacho'])) { ?>
						<a class="w3-button w3-teal w3-round w3-margin" href="<?php echo $this->Html->url(array('controller' => 'funcionarios', 'action' => 'alterar', $employee['Funcionario']['id'])); ?>">Detalhes</a>
				<?php } ?>
					<?php if (!empty($employee['Funcionario']['fileName'])){?>
						<a target="_blank" href="<?php echo $this->webroot;?>files/<?php echo $employee['Funcionario']['fileName']; ?>" class="w3-button w3-blue w3-round"><i class="fa fa-download"></i></a>
					<?php } else {?>
					<i class="fa fa-meh-o"></i> N/D
					<?php } ?>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>