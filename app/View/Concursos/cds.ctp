<div class="col-md-12">
	<p><?php echo __('Adicionar candidactos para vagas de Corpo docente'); ?> |
        <span class="w3-text-blue"><?php echo $carreira['nome'];?></span> | </p>
</div>
<div class="col-md-6">
	<?php echo $this->Form->create('Cd', array('url' => array(), 'id' => 'cdsForm'.$carreira_id, 'class' => 'w3-container')); ?>

	<?php
		echo $this->Form->input('Funcionario.nome', array('class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => 'Estanislau'));
		echo $this->Form->input('Funcionario.apelido', array('class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => 'Marques'));
		echo $this->Form->input('cadeira', array('class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => 'Sistemas de Comunica&ccedil;&atilde;o'));
		echo $this->Form->input('funcionario_id', array('type' => 'hidden'));
		echo $this->Form->label('Funcionario.sexo', 'Genero');
		echo $this->Form->radio('Funcionario.sexo', array('M' => 'Masculino', 'F' => 'Feminino'), array('legend' => false));
	?>

</div>
<div class="col-md-6">
	<?php
		echo $this->Form->input('Funcionario.contacto_pessoal', array('class' => 'w3-input w3-border w3-hover-khaki'));
		echo $this->Form->input('Funcionario.contacto_alternativo', array('class' => 'w3-input w3-border w3-hover-khaki'));
		echo $this->Form->input('Funcionario.email', array('class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => 'exemplo@mail.com'));
	?>
	<button class="w3-large w3-green w3-btn w3-margin-top pull-right">
		<span class="glyphicon glyphicon-ok"></span>
		Submeter
	</button>
	<?php echo $this->Form->end(); ?>
</div>