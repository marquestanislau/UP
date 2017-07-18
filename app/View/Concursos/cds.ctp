<div class="col-md-12">
	<p><?php echo __('Adicionar candidactos para vagas de Corpo docente'); ?> |
        <span class="w3-text-blue"><?php echo $carreira['nome'];?></span> | </p>
</div>
<div id="sucessoCds<?php echo $carreira_id; ?>" class="col-md-12">
</div>
<div class="col-md-6">
	<?php echo $this->Form->create('Cd', array('url' => array('action' => 'add', 'controller' => 'cds'), 'id' => 'cdsForm'.$carreira_id, 'class' => 'w3-container')); ?>

	<?php
		echo $this->Form->input('Funcionario.carreira_id', array('value' => $carreira_id, 'type' => 'hidden'));
		echo $this->Form->input('Funcionario.concurso_id', array('value' => $concurso_id, 'type' => 'hidden'));
		echo $this->Form->input('Funcionario.nome', array('class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => 'Estanislau'));
		echo $this->Form->input('Funcionario.apelido', array('class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => 'Marques'));
		echo $this->Form->input('cadeira', array('class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => 'Sistemas de Comunicação'));
		echo $this->Form->input('funcionario_id', array('type' => 'hidden'));
		echo "<br>";
		echo $this->Form->label('Funcionario.sexo', 'Genero');
		echo $this->Form->radio('Funcionario.sexo', array('M' => 'Masculino', 'F' => 'Feminino'), array('legend' => false));
		echo $this->Form->input('Funcionario.posicao', array('class' => 'w3-input w3-border', 'label' => 'Posi&ccedil;&atilde;o'));
	?>
	<div id="requestingCds<?php echo $carreira_id; ?>" style="display: none">
		<?php echo $this->Html->image('ajax/ajax-loader.gif');  ?>
	</div>
</div>
<div class="col-md-6">
	<?php
		echo $this->Form->input('Funcionario.contacto_pessoal', array('class' => 'w3-input w3-border w3-hover-khaki'));
		echo $this->Form->input('Funcionario.contacto_alternativo', array('class' => 'w3-input w3-border w3-hover-khaki'));
		echo $this->Form->input('Funcionario.email_pessoal', array('class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => 'exemplo@mail.com'));
		echo $this->Form->input('Funcionario.data_nascimento', array('label' => 'Data de nascimento', 'type' => 'text', 'class' => 'w3-input w3-border datepicker', 'placeholder' => '(Ano-Mes-Dia)', 'id' => 'data'.$carreira_id , 'onfocus' => 'selecionadorPorId(data'.$carreira_id.')'));
	?>

	<button class="w3-large w3-green w3-btn w3-margin-top pull-right">
		<span class="glyphicon glyphicon-ok"></span>
		Submeter
	</button>
	<?php echo $this->Form->end(); ?>
</div>
<?php
	$dados = $this->Js->get('#cdsForm'.$carreira_id)->serializeForm(array('inline' => true, 'isForm' => true));
	$success = $this->Js->request(
		array(
			'controller' => 'cds'
		),
		array(
			'complete' => 'displayMessages()'
		)
	);
	$this->Js->get('#cdsForm'.$carreira_id)->event(
		'submit',
		$this->Js->request(
			array(
				'action' => 'add',
				'controller' => 'cds'
			),
			array(
				'method' => 'post',
				'data' => $dados,
				'dataExpression' => true,
				'async' => true,
				'before' => '$("#requestingCds'.$carreira_id.'").attr("style", "")',
				'complete' => '$("#requestingCds'.$carreira_id.'").attr("style", "display:none")',
				'update' => '#message',
				'success' => $success
			)
		)
	);
?>
