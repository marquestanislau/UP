<div class="row">
	<div class="col-md-11">
		<h3><a href="#" class="pull-right w3-text-grey w3-large"><i class="fa fa-print"></i> Imprimir</a></h3>
	</div>
	<div class="col-md-11 w3-padding w3-border w3-white">
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
				</table>
			</div>
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-12">
						<?php echo $this->Html->image('perfil_default.png', array('class' => 'img img-responsive img-circle pull-right')); ?>
						<h4>Documentos</h4>
						Sem documento
					</div>
					<hr>
					<div class="col-md-12">
						<ul class="nav nav-pills nav-stacked w3-text-grey w3-leftbar w3-border-green w3-margin-top">
						  <li role="presentation"><a href="#"><i class="fa fa-balance-scale"></i> Avaliar desempenho</a></li>
						  <li role="presentation"><a href="<?php echo $this->Html->url(array('action' => 'transferencia'));?>"><i class="fa fa-refresh"></i> Transferir</a></li>
						  <li role="presentation"><a href="#"><i class="fa fa-info-circle"></i> Formalizar processo disciplinar</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>