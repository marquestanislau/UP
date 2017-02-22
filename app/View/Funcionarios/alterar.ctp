<div class="row">
	<h5 class="w3-text-grey"> 
		<span class="fa fa-user w3-large"></span>
		Alterar dados de funcionario</h5>
	<div class="col-md-10 w3-padding w3-border w3-white">
		<div class="row">
			<div class="col-md-12 w3-center w3-text-grey">
				<h4>
					<?php echo $funcionario['Funcionario']['nome']; ?>
					<?php echo $funcionario['Funcionario']['apelido']; ?>
				</h4>
				<!-- Mensagem de status (Erro ou Exito) -->
				<div id="sucesso"></div>
				<!-- End mensagem de erro ou exito -->
				<a href="#" class="pull-right w3-large" onclick="history.back()" ><i class="fa fa-arrow-circle-left"></i> Voltar</a>
			</div>
			<div class="col-md-6">
				<?php echo $this->Form->create('Funcionario', array('id' => 'formUpdateFuncionario')); ?>
				<?php $funcionario_id = $funcionario['Funcionario']['id']; ?>
				<?php $this->Form->input('id', array('value' => $funcionario_id)); ?>
				<table class="w3-table">
					<tr>
						<td>
							<h4>Dados pessoais</h4>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Nome:</label>
							<?php echo $this->Form->input('nome', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['nome'])); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Apelido: </label class="w3-label">
							<?php echo $this->Form->input('apelido', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['apelido'])); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Data de Nascimento: </label>
							<?php echo $this->Form->input('data_nascimento', array('label' => false, 'class' => 'w3-border w3-input datepicker','type' => 'text' , 'value' => $funcionario['Funcionario']['data_nascimento'])); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Genero: </label>
							<?php echo $this->Form->radio('sexo', array('M' => 'Masculino', 'F' => 'Feminino'), array('legend' => false)); ?>

						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Contacto Prim&aacute;rio: </label class="w3-label">
							<?php echo $this->Form->input('contacto_pessoal', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['contacto_pessoal'])); ?>
						</td>
					</tr>
					<tr>
						<td>
							<h4>Contactos</h4>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Contacto alternativo: </label>	
							<?php echo $this->Form->input('contacto_alternativo', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['contacto_alternativo'])); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Contacto da empresa: </label>	
							<?php echo $this->Form->input('contacto_trabalho', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['contacto_trabalho'])); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Email: </label>
							<?php echo $funcionario['Funcionario']['email_pessoal']; ?>
							<?php echo $this->Form->input('email_pessoal', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['email_pessoal'])); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Email corporativo: </label>
							<?php echo $this->Form->input('email_corporativo', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['email_corporativo'])); ?>
						</td>
					</tr>
					<tr>
						<td>
							<h4>Documentos de indentifica&ccedil;&atilde;o</h4>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">NUIT: </label>
							<?php echo $this->Form->input('nuit', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['nuit'])); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Numedo do BI: </label>
							<?php echo $this->Form->input('bi', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['bi'])); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Data de Emiss&atilde;o: </label>	
							<?php echo $this->Form->input('data_emissao', array('type' => 'text', 'label' => false, 'class' => 'w3-border w3-input datepicker', 'value' => $funcionario['Funcionario']['data_emissao'])); ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Local de emiss&atilde;o: </label>	
							<?php echo $this->Form->input('local_emissao', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['local_emissao'])); ?>
						</td>
					</tr>
					<tr>
						<td>
							<h4>Informa&ccedil;&otilde;es adicionais do funcion&aacute;rio</h4>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Carreira: </label>	
							<?php echo $funcionario['Carreira']['nome']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Classe: </label>
							<?php echo $funcionario['Funcionario']['clazze_id']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Delega&ccedil;&atilde;o: </label>
							<?php echo $funcionario['Delegacao']['nome']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Departamento: </label>
							<?php echo $funcionario['Funcionario']['departamento_id']; ?>
						</td>
						<td>
							<label class="w3-label">Data e hora de registo no sistema: </label>
							<strong><?php echo $funcionario['Funcionario']['created']; ?></strong>
						</td>
					</tr>
					<tr>
						<td>
							<button id="submeter" class="w3-btn w3-large w3-blue">
								Submeter formul&aacute;rio
							</button>
						</td>
						<td>
							<div id="requesting" style="display: none">
								<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
							</div>
						</td>
					</tr>
				</table>
				<?php echo $this->Form->end(); ?>
			</div>
			<div class="col-md-4">
				<?php echo $this->Html->image('perfil_default.png', array('class' => 'img img-responsive img-circle pull-right')); ?>
				<h4>Documentos</h4>
				Sem documento
			</div>
		</div>
	</div>
</div>
<?php
	$data = $this->Js->get('#formUpdateFuncionario')->serializeForm(array('isForm' => true, 'inline' => true));
	$this->Js->get('#formUpdateFuncionario')->event(
		'submit',
		$this->Js->request(
			array(
				'action' => 'alterarDados/'.$funcionario_id,
				'controller' => 'funcionarios'
			),
			array(
				'method' => 'post',
				'data' => $data,
				'dataExpression' => true,
				'async' => true,
				'update' => '#sucesso',
				'before' => '$("#requesting").attr("style", "")',
				'complete' => '$("#requesting").attr("style", "display:none")'
			)
		)
	);
?>