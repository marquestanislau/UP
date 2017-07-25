<div class="w3-white w3-text-blue">
	<h4><i class="fa fa-user"></i> <?php echo __('CTA / Novo Funcionario'); ?></h4>
</div>
<div class="w3-cell-row">
	<div class="w3-third">
	<h5><i class="fa fa-edit"></i> Dapos pessoais</h5>
		<hr>
		<?php echo $this->Form->create('Cta', array('id' => 'employeeForm')); ?>
		<?php
		echo $this->Form->input('Funcionario.nome', array('class' => 'w3-input w3-hover-sand w3-border w3-round required', 'id' => 'nome'));
		echo $this->Form->input('Funcionario.apelido', array('class' => 'w3-input w3-hover-sand w3-border w3-round required', 'label' => array('class' => 'w3-margin-top')));
		echo "<br><label>Data de nascimento:</label>";
		echo $this->Form->input('Funcionario.data_nascimento', array('label' => false, 'class' => 'w3-input w3-hover-sand w3-white w3-border w3-text-blue w3-roundw3-margin-bottom'));
		echo $this->Form->label('sexo');
		echo '<br>';
		echo $this->Form->radio('sexo', array('F' => ' Feminino', 'M' => ' Masculino'), array('separator' => '<br>', 'legend' => false));
		echo "<h5><i class='fa fa-file'></i> Documenta&ccedil;&atilde;o</h5><hr>";
		echo $this->Form->input('Funcionario.nuit', array('class' => 'w3-input w3-hover-sand w3-border w3-round required', 'label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('Funcionario.bi', array('class' => 'w3-input w3-hover-sand w3-border w3-round required', 'label' => array('class' => 'w3-margin-top')));
		echo "<br><label>Data de Emiss&atilde;o:</label>";
		echo $this->Form->input('Funcionario.data_emissao', array('class' => 'w3-margin-bottom w3-input w3-hover-sand w3-border w3-white w3-round required w3-text-blue', 'label' => false));
		$options = array('Cidade de Maputo', 'Cidade de Xai-Xai', 'Nampula', 'Gaza', 'Inhambane', 'Tete');
		echo $this->Form->input('Funcionario.local_emissao', array('class' => 'w3-input w3-hover-sand w3-border w3-round','label' => array('class' => 'w3-margin-top'), 'type' => 'select', 'options' => $options));
		echo "<br><h5><i class='fa fa-phone'></i> Contactos</h5><hr>";
		echo $this->Form->input('Funcionario.contacto_pessoal', array('class' => 'w3-input w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('Funcionario.contacto_trabalho', array('class' => 'w3-input w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('Funcionario.contacto_alternativo', array('class' => 'w3-input w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('Funcionario.email_pessoal', array('class' => 'w3-input w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('Funcionario.email_corporativo', array('class' => 'w3-input w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top')));
		echo "<br><h5>Outros</h5><hr>";
		// echo $this->Form->input('Funcionario.curso', array('class' => 'w3-input w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top')));
		// echo $this->Form->input('Funcionario.especialidade', array('class' => 'w3-input w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top')));
		// echo $this->Form->input('Funcionario.ano_conclusao');
		echo $this->Form->input('Funcionario.carreira_id', array('id' => 'carreiras', 'class' => 'w3-khaki w3-input w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top')));
		// echo $this->Form->input('Funcionario.categoria_id', array('class' => 'w3-input w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('Funcionario.clazze_id', array('id' => 'classe' ,'class' => 'w3-input w3-khaki w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top', 'text' => 'Classe')));
		echo $this->Form->input('Funcionario.escalao_id', array('class' => 'w3-input w3-white w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('Funcionario.delegacao_id', array('class' => 'w3-input w3-white w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top', 'text' => 'Delega&ccedil;&atilde;o')));
		echo $this->Form->input('Funcionario.sectore_id', array('class' => 'w3-input w3-white w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top', 'text' => 'Sector'), 'empty' => 'Escolha o sector'));
		// echo $this->Form->input('Funcionario.departamento_id', array('class' => 'w3-input w3-hover-sand w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		// echo $this->Form->input('Funcionario.tipo_ingresso_id');
		// echo $this->Form->input('Funcionario.concurso_id', array('class' => 'w3-input w3-hover-sand w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		?>
		<div class="w3-bar">
			<button class="w3-button w3-green w3-margin-top w3-round">
				<i class="fa fa-check"></i> Armazenar informacao
			</button>
			<button id="resetForm" onclick="clearInput('employeeForm', 'nome')" type="button" class="w3-button w3-text-grey w3-round w3-border w3-margin-top">
				<i class="fa fa-plus"></i>
				Novo
			</button>
		</div>
		<?php echo $this->Form->end(); ?>
	</div>
	<div class="w3-quarter">
		<p></p>
	</div>

	<div class="w3-third w3-round w3-padding" style="background-color: #fafafa; position: fixed; right: 10%;">
		<small class="encouragement w3-padding"></small>
		<div class="w3-light-grey progress w3-round-xxlarge">
		  <div id="form-progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="progress-bar w3-round-xxlarge w3-container w3-grey w3-center" style="width:0%"><p></p></div>
		</div>
	</div>
	
</div>
<!-- Ajax area for dropdown list -->
<?php 
	$data = $this->Js->get('#employeeForm')->serializeForm(array('isForm' => true, 'inline' => true));
	$this->Js->get('#carreiras')->event(
			'change',
			$this->Js->request(
					array(
							'action' => 'excepcao',
							'controller' => 'ctas'
						),
					array(
							'method' => 'post',
							'data' => $data,
							'async' => true,
							'dataExpression' => true,
							'update' => '#classe'
						)
				)
		);
	
 ?>