<div class="row">
	<div class="col-md-10">
		<a href="#" class="pull-right w3-text-blue w3-margin"><i class="fa fa-print"></i> Imprimir</a>
	</div>
	<div class="col-md-10 w3-padding w3-border w3-white">
		<div class="row">
			<div class="col-md-12 w3-center w3-text-grey">
				<h4>
					<?php echo $funcionario['Funcionario']['nome']; ?>
					<?php echo $funcionario['Funcionario']['apelido']; ?>
				</h4>
				<a href="#" class="pull-right w3-large" onclick="history.back()" ><i class="fa fa-arrow-circle-left"></i> Voltar</a>
			</div>
			<div class="col-md-6">
				<table class="w3-table">
					<tr>
						<td>
							<h4>Dados pessoais</h4>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Nome:</label>
							<?php echo $funcionario['Funcionario']['nome']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Apelido: </label class="w3-label">
							<?php echo $funcionario['Funcionario']['apelido']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Data de Nascimento: </label>
							<?php echo $funcionario['Funcionario']['data_nascimento']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Genero: </label>
							<?php echo $funcionario['Funcionario']['sexo']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Contacto Prim&aacute;rio: </label class="w3-label">
							<?php echo $funcionario['Funcionario']['contacto_pessoal']; ?>
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
							<?php echo $funcionario['Funcionario']['contacto_alternativo']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Contacto da empresa: </label>	
							<?php echo $funcionario['Funcionario']['contacto_trabalho']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Email: </label>
							<?php echo $funcionario['Funcionario']['email_pessoal']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Email corporativo: </label>
							<?php echo $funcionario['Funcionario']['email_corporativo']; ?>
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
							<?php echo $funcionario['Funcionario']['nuit']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Numedo do BI: </label>
							<?php echo $funcionario['Funcionario']['bi']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Data de Emiss&atilde;o: </label>	
							<?php echo $funcionario['Funcionario']['data_emissao']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Local de emiss&atilde;o: </label>	
							<?php echo $funcionario['Funcionario']['local_emissao']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<h4>Informa&ccedil;&otilde;s adicionais do funcion&aacute;rio</h4>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Carreira: </label>	
							<?php echo $funcionario['Funcionario']['carreira_id']; ?>
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
							<?php echo $funcionario['Funcionario']['delegacao_id']; ?>
						</td>
					</tr>
					<tr>
						<td>
							<label class="w3-label">Departamento: </label>
							<?php echo $funcionario['Funcionario']['departamento_id']; ?>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-md-4">
				<?php echo $this->Html->image('perfil_default.png', array('class' => 'img img-responsive img-circle pull-right')); ?>
				<h4>Documentos</h4>
				Sem documento
			</div>
		</div>
	</div>
</div>