<div class="w3-white w3-text-blue">
	<h4><i class="fa fa-graduation-cap"></i> <?php echo __('Corpo docente / Novo Funcion&aacute;rio'); ?></h4>
	<?php debug($r); ?>
</div>
<div class="w3-cell-row">
	<div class="w3-third w3-padding w3-topbar w3-border-lime" style="background-color: #fafafa;">
	<h5><i class="fa fa-edit"></i> Dados pessoais</h5>
		<hr>
		<?php echo $this->Form->create('Cds', array('id' => 'employeeForm')); ?>
		<?php
		echo $this->Form->input('Funcionario.nome', array('class' => 'w3-input w3-hover-sand w3-border w3-round required', 'id' => 'nome', 'placeholder' => 'Jossias'));
		echo $this->Form->input('Funcionario.apelido', array('class' => 'w3-input w3-hover-sand w3-border w3-round required', 'label' => array('class' => 'w3-margin-top'), 'placeholder' => 'Tongogara'));
		echo "<br><label>Data de nascimento:</label>";
		echo $this->Form->input('Funcionario.data_nascimento', array('label' => false, 'class' => 'datepicker w3-round w3-input w3-hover-sand w3-white w3-border w3-text-blue w3-roundw3-margin-bottom', 'type' => 'text', 'placeholder' => 'Formato ano-mes-dia (1964-08-09)'));
		echo $this->Form->label('sexo');
		echo '<br>';
		echo $this->Form->radio('Funcionario.sexo', array('F' => ' Feminino', 'M' => ' Masculino'), array('separator' => '<br>', 'legend' => false));
		echo "<h5><i class='fa fa-file-word-o'></i> Documenta&ccedil;&atilde;o</h5><hr>";
		echo $this->Form->input('Funcionario.nuit', array('class' => 'w3-input w3-hover-sand w3-border w3-round w3-white required', 'label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('Funcionario.bi', array('class' => 'w3-input w3-hover-sand w3-border w3-round w3-white required', 'placeholder' => '1234567891011F','label' => array('class' => 'w3-margin-top')));
		echo "<br><label>Data de Emiss&atilde;o:</label>";
		echo $this->Form->input('Funcionario.data_emissao', array('class' => 'w3-margin-bottom w3-input w3-hover-sand w3-border w3-white w3-round w3-white required w3-text-blue', 'label' => false));
		$options = array('Maputo', 'Xai-Xai', 'Nampula', 'Gaza', 'Inhambane', 'Tete');
		echo $this->Form->input('Funcionario.local_emissao', array('class' => 'w3-input w3-hover-sand w3-border w3-round w3-white','label' => array('class' => 'w3-margin-top', 'text' => 'Local de emiss&atilde;o'), 'type' => 'select', 'options' => $options, 'empty' => 'Escolha uma cidade'));
		echo "<br><h5><i class='fa fa-phone'></i> Contactos</h5><hr>";
		echo $this->Form->input('Funcionario.contacto_pessoal', array('class' => 'w3-input w3-hover-sand w3-border w3-round w3-white required','label' => array('class' => 'w3-margin-top')));
		// echo $this->Form->input('Funcionario.contacto_trabalho', array('class' => 'w3-input w3-hover-sand w3-border w3-round w3-white required','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('Funcionario.contacto_alternativo', array('class' => 'w3-input w3-hover-sand w3-border w3-round w3-white required','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('Funcionario.email_pessoal', array('class' => 'w3-input w3-hover-sand w3-border w3-round w3-white required','label' => array('class' => 'w3-margin-top'), 'placeholder' => 'tongogara.jossias@mail.co.mz'));
		// echo $this->Form->input('Funcionario.email_corporativo', array('class' => 'w3-input w3-hover-sand w3-border w3-round w3-white required','label' => array('class' => 'w3-margin-top')));
		echo "<br><h5><i class='fa fa-book'></i> Forma&ccedil;&atilde;o acad&eacute;mica</h5><hr>";
		echo $this->Form->input('Funcionario.curso', array('class' => 'w3-input w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top'), 'placeholder' => 'Medicina'));
		echo $this->Form->input('Funcionario.especialidade', array('class' => 'w3-input w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top'), 'placeholder' => 'Cardiologia'));
		echo "<br><label>Ano de conclus&atilde;o</label>";
		echo $this->Form->input('Funcionario.ano_conclusao', array('class' => 'w3-input w3-white w3-border w3-text-blue w3-round', 'label' => false));
		echo "<br><h5>Outros</h5><hr>";
		echo $this->Form->input('Funcionario.carreira_id', array('id' => 'carreiras', 'class' => 'w3-khaki w3-input w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top'), 'empty' => 'Escolha uma carreira'));
		echo $this->Form->input('Funcionario.categoria_id', array('class' => 'w3-input w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top')));
		// echo $this->Form->input('Funcionario.clazze_id', array('id' => 'classe' ,'class' => 'w3-input w3-khaki w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top', 'text' => 'Classe')));
		echo $this->Form->input('Funcionario.escalao_id', array('class' => 'w3-input w3-white w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top', 'text' => 'Escal&atilde;o'), 'empty' => 'Escolha o escalao'));
		echo $this->Form->input('Funcionario.delegacao_id', array('class' => 'w3-input w3-white w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top', 'text' => 'Delega&ccedil;&atilde;o'), 'empty' => 'Escolha a delegacao'));
		echo $this->Form->input('Funcionario.sectore_id', array('class' => 'w3-input w3-white w3-hover-sand w3-border w3-round required','label' => array('class' => 'w3-margin-top', 'text' => 'Sector'), 'empty' => 'Escolha o sector'));
		// echo $this->Form->input('Funcionario.departamento_id', array('class' => 'w3-input w3-hover-sand w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		// echo $this->Form->input('Funcionario.tipo_ingresso_id');
		// echo $this->Form->input('Funcionario.concurso_id', array('class' => 'w3-input w3-hover-sand w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		?>
		<div class="w3-bar">
			<button type="submit" class="w3-button w3-green w3-margin-top w3-round">
				<i class="fa fa-check"></i> Armazenar informa&ccedil;&atilde;o
			</button>
			<button id="resetForm" onclick="clearInput('employeeForm', 'nome')" type="button" class="w3-button w3-text-grey w3-white w3-round w3-border w3-margin-top">
				<i class="fa fa-plus"></i>
				Novo
			</button>
		</div>
		<?php echo $this->Form->end(); ?>
	</div>
	<div class="w3-quarter">
		<p></p>
	</div>

	<div class="w3-third w3-round w3-padding" style="background-color: #ffffff; position: fixed; right: 10%;">
		<small class="encouragement w3-padding">Barra de progresso</small>
		<div id="bar" class="w3-light-grey progress w3-round-xxlarge">
		  <div id="form-progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="progress-bar w3-round-xxlarge w3-container w3-teal w3-center" style="width:0%"><p></p></div>
		  <span class="mdl-tooltip" data-mdl-for="bar"> Esta ferramenta ajuda a saber em que etapa estamos</span>
		</div>
		<div id="requesting" style="display: none;">
			<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
		</div>
		<div>
			<a href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'funcionarios')); ?>" style="width: 100%;" class="w3-padding w3-button w3-xlarge w3-text-dark-grey w3-margin-top">
				<i class="fa fa-users"></i> Funcion&aacute;rios
			</a>
			<a href="<?php echo $this->Html->url(array('action' => 'excepcao', 'controller' => 'ctas')); ?>" style="width: 100%;" class="w3-padding w3-button w3-xlarge w3-text-dark-grey w3-margin-top">
				<i class="fa fa-user"></i> Adicionar CTA
			</a>
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
							'controller' => 'cds'
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
	// Submit button to the controller using ajax call
	$this->Js->get('#employeeForm')->event(
			'submit',
			$this->Js->request(
					array(
							'action' => 'add',
							'controller' => 'cds'
						),
					array(
							'method' => 'post',
							'data' => $data,
							'dataExpression' => true,
							'async' => true,
							'before' => '$("#requesting").attr("style", "display:block")',
							'complete' => '$("#requesting").attr("style", "display:none")',
							'update' => '#message',
							'success' => $this->Js->request(
										array('controller' => 'cds'),
										array('complete' => 'displayMessages()')
									)
						)
				)
		);
	
 ?>