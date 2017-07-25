<div class="w3-white w3-text-blue">
	<h4><i class="fa fa-user"></i> <?php echo __('Novo Funcionario'); ?></h4>
</div>
<div class="w3-cell-row">
	<div class="w3-third">
	<h5><i class="fa fa-edit"></i> Dapos pessoais</h5>
		<hr>
		<?php echo $this->Form->create('Funcionario', array('id' => 'employeeForm')); ?>
		<?php
		echo $this->Form->input('nome', array('class' => 'w3-input w3-border w3-round', 'id' => 'nome'));
		echo $this->Form->input('apelido', array('class' => 'w3-input w3-border w3-round', 'label' => array('class' => 'w3-margin-top')));
		echo "<br><label>Data de nascimento:</label>";
		echo $this->Form->input('data_nascimento', array('label' => false, 'class' => 'w3-input w3-white w3-border w3-text-blue w3-round w3-margin-bottom'));
		echo $this->Form->label('sexo');
		echo '<br>';
		echo $this->Form->radio('sexo', array('F' => ' Feminino', 'M' => ' Masculino'), array('separator' => '<br>', 'legend' => false));
		echo "<h5><i class='fa fa-file'></i> Documenta&ccedil;&atilde;o</h5><hr>";
		echo $this->Form->input('nuit', array('class' => 'w3-input w3-border w3-round', 'label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('bi', array('class' => 'w3-input w3-border w3-round', 'label' => array('class' => 'w3-margin-top')));
		echo "<br><label>Data de Emiss&atilde;o:</label>";
		echo $this->Form->input('data_emissao', array('class' => 'w3-margin-bottom w3-input w3-border w3-white w3-round w3-text-blue', 'label' => false));
		$options = array('Cidade de Maputo', 'Cidade de Xai-Xai', 'Nampula', 'Gaza', 'Inhambane', 'Tete');
		echo $this->Form->input('local_emissao', array('class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top'), 'type' => 'select', 'options' => $options));
		echo "<br><h5><i class='fa fa-phone'></i> Contactos</h5><hr>";
		echo $this->Form->input('contacto_pessoal', array('class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('contacto_trabalho', array('class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('contacto_alternativo', array('class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('email_pessoal', array('class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('email_corporativo', array('class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		echo "<br><h5>Outros</h5><hr>";
		echo $this->Form->input('curso', array('class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('especialidade', array('class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('ano_conclusao');
		echo $this->Form->input('carreira_id', array('id' => 'carreiras', 'class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('categoria_id', array('class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('clazze_id', array('id' => 'classe' ,'class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top', 'text' => 'Classe')));
		echo $this->Form->input('escalao_id', array('class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('delegacao_id', array('class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('sector_id', array('class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('departamento_id', array('class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		echo $this->Form->input('tipo_ingresso_id');
		echo $this->Form->input('concurso_id', array('class' => 'w3-input w3-border w3-round','label' => array('class' => 'w3-margin-top')));
		?>
		<div class="w3-bar">
			<button class="w3-button w3-green w3-margin-top w3-round">
				<i class="fa fa-check"></i> Armazenar informacao
			</button>
			<button onclick="clearInput('employeeForm', 'nome')" type="button" class="w3-button w3-text-grey w3-round w3-border w3-margin-top">
				<i class="fa fa-plus"></i>
				Novo
			</button>
		</div>
		<?php echo $this->Form->end(); ?>
	</div>
	<div class="w3-quarter">
		<p></p>
	</div>
	<div style="position: fixed; right: 7%; background-color: #f9f4f4;" class="w3-third w3-round w3-padding">
		<ul class="statusbar">
			<li class="w3-button w3-circle w3-border">1</li>
			<li class="w3-button w3-circle w3-border">2</li>
			<li class="w3-button w3-circle w3-border">3</li>
		</ul>
		
		<ul>

			<li><?php echo $this->Html->link(__('List Funcionarios'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Carreiras'), array('controller' => 'carreiras', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Carreira'), array('controller' => 'carreiras', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Concursos'), array('controller' => 'concursos', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Concurso'), array('controller' => 'concursos', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Delegacaos'), array('controller' => 'delegacaos', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Delegacao'), array('controller' => 'delegacaos', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Ctas'), array('controller' => 'ctas', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('List Cds'), array('controller' => 'cds', 'action' => 'index')); ?> </li>
		</ul>

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
							'controller' => 'funcionarios'
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