<div class="col-md-12">
	<p><?php echo __('Adicionar candidactos para vagas de Corpo docente'); ?> |
        <span class="w3-text-blue"><?php echo $carreira['nome'];?></span> | </p>
</div>
<div id="sucessoCds<?php echo $carreira_id; ?>" class="col-md-12">
</div>
<div class="col-md-6">
	<?php echo $this->Form->create('Cd', array( 'id' => 'cdsForm'.$funcionario_id, 'class' => 'w3-container')); ?>

	<?php
		echo $this->Form->input('Cd.id', array('value' => $funcionario['Cd']['id'], 'type' => 'hidden'));
		echo $this->Form->input('Funcionario.id', array('value' => $funcionario_id, 'type' => 'hidden'));
		echo $this->Form->input('Funcionario.nuit', array('value' => 1, 'type' => 'hidden'));
		echo $this->Form->input('Funcionario.escalao_id', array('value' => 1, 'type' => 'hidden'));
		echo $this->Form->input('Funcionario.delegacao_id', array('value' => $concurso['delegacao_id'], 'type' => 'hidden'));
		echo $this->Form->input('Funcionario.carreira_id', array('value' => $carreira_id, 'type' => 'hidden'));
		echo $this->Form->input('Funcionario.concurso_id', array('value' => $concurso_id, 'type' => 'hidden'));
		echo $this->Form->input('Funcionario.nome', array('value' => $funcionario['Funcionario']['nome'], 'class' => 'w3-input w3-round w3-border w3-hover-khaki', 'placeholder' => 'Estanislau', 'id' => 'name'.$carreira_id));
		echo $this->Form->input('Funcionario.apelido', array('value' => $funcionario['Funcionario']['apelido'], 'class' => 'w3-input w3-round w3-border w3-hover-khaki', 'placeholder' => 'Marques'));
		echo $this->Form->input('Cd.funcionario_id', array('type' => 'hidden', 'value' => $funcionario_id));
		echo "<br>";
	?>
		<div class="row">
			<div class="col-md-6">
				<?php 
					echo $this->Form->label('Funcionario.sexo', 'Genero');
					echo "<br>";
					echo $this->Form->radio('Funcionario.sexo', array('M' => 'Masculino', 'F' => 'Feminino'), array('legend' => false, 'separator' => '<br>', 'value' => $funcionario['Funcionario']['sexo']));
				 ?>
			</div>
			<div class="col-md-6">
				<?php 
					echo $this->Form->input('Funcionario.posicao', array( 'value' => $funcionario['Funcionario']['posicao'], 'class' => 'w3-input w3-round w3-border', 'label' => 'Posi&ccedil;&atilde;o'));
					echo $this->Form->input('Funcionario.data_nascimento', array('label' => 'Data de nascimento', 'type' => 'text',  'value' => $funcionario['Funcionario']['data_nascimento'], 'class' => 'w3-input w3-text-blue w3-round w3-border datepicker', 'placeholder' => '(Ano-Mes-Dia)', 'id' => 'data'.$carreira_id , 'onfocus' => 'selecionadorPorId(data'.$carreira_id.')'));
				 ?>
			</div>
		</div>
	<div id="requestingCds<?php echo $funcionario_id; ?>" style="display: none">
		<?php echo $this->Html->image('ajax/ajax-loader.gif');  ?>
	</div>
</div>
<div class="col-md-6">
	<div class="row">
		<div class="col-md-6">
			<?php
				echo $this->Form->input('Funcionario.contacto_pessoal', array( 'value' => $funcionario['Funcionario']['contacto_pessoal'], 'class' => 'w3-input w3-round w3-border w3-hover-khaki', 'placeholder' => '84777777'));
				echo $this->Form->input('Funcionario.contacto_alternativo', array( 'value' => $funcionario['Funcionario']['contacto_alternativo'], 'class' => 'w3-input w3-round w3-border w3-hover-khaki', 'placeholder' => '841234567'));
			?>
			<br>
		</div>
		<div class="col-md-6"></div>
	</div>
	<?php 
		echo $this->Form->input('Funcionario.email_pessoal', array( 'value' => $funcionario['Funcionario']['email_pessoal'], 'class' => 'w3-input w3-round w3-border w3-hover-khaki', 'placeholder' => 'exemplo@mail.com'));
		echo $this->Form->input('cadeira', array( 'value' => $funcionario['Cd']['cadeira'], 'class' => 'w3-input w3-round w3-border w3-hover-khaki', 'placeholder' => 'Sistemas de Comunicação'));
	 ?>
</div>
<footer class="w3-container w3-padding">
	<div class="w3-bar">
		<button class="w3-button w3-green w3-margin-top w3-round">
			<span class="glyphicon glyphicon-ok"></span>
			Guardar
		</button>
		<?php echo $this->Form->end(); ?>
		<!-- <button onclick="clearInput('cdsForm'+<?php echo $carreira_id; ?>, 'name'+<?php echo $carreira_id; ?>)" class="w3-light-grey w3-button w3-margin-top w3-round">
			<i class="fa fa-plus"></i>
			Novo registro
		</button> -->
	</div>
</footer>
<?php
	$dados = $this->Js->get('#cdsForm'.$funcionario_id)->serializeForm(array('inline' => true, 'isForm' => true));
	$success = $this->Js->request(
		array(
			'controller' => 'funcionarios',
			'action' => 'listEmployee'
		),
		array(
			'complete' => 'displayMessages()'
		)
	);
	$this->Js->get('#cdsForm'.$funcionario_id)->event(
		'submit',
		$this->Js->request(
			array(
				'action' => 'edit/'.$funcionario['Cd']['id'],
				'controller' => 'cds'
			),
			array(
				'method' => 'post',
				'data' => $dados,
				'dataExpression' => true,
				'async' => true,
				'before' => '$("#requestingCds'.$funcionario_id.'").attr("style", "")',
				'complete' => '$("#requestingCds'.$funcionario_id.'").attr("style", "display:none")',
				'update' => '#message',
				'success' => $success
			)
		)
	);
?>
