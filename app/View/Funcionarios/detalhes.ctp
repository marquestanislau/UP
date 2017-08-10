<div class="row">
	<div class="col-md-12 w3-blue-gray">
		<?php $sexo = $funcionario['Funcionario']['sexo'] == 'F'? 'a' : 'o'; ?>
		<h4 class="w3-center"><i class="fa fa-user"></i> Dados d<?php echo $sexo; ?> funcion&aacute;ri<?php echo $sexo; ?></h4>
		<div>
			<h4>
				<?php echo $funcionario['Funcionario']['nome']; ?>
				<?php echo $funcionario['Funcionario']['apelido']; ?>
				<a href="#" class="pull-right w3-large w3-border w3-white w3-text-grey w3-button w3-circle" onclick="history.back()" ><i class="fa fa-arrow-circle-left"></i></a>
				
				<a target="_blank" href="<?php echo $this->Html->url(array('action' => 'imprimeFuncionario', 'ext' => 'pdf', $funcionario['Funcionario']['id'])); ?>" 
					id="print_employee" 
					class="pull-right w3-border w3-white w3-text-grey w3-large w3-button w3-circle">
					<i class="fa fa-print"></i>
				</a>
				<span data-mdl-for="print_employee" class="mdl-tooltip">Imprimir dados de <?php echo $funcionario['Funcionario']['nome']; ?></span>
			</h4>
		</div>
	</div>
		<div class="w3-bar w3-light-grey">
			<button class="w3-bar-item w3-button" onclick="openCity('London')"><i class="fa fa-user"></i> Dados pessoais</button>
			<button class="w3-bar-item w3-button" onclick="openCity('Paris')"><i class="fa fa-info-circle"></i> Documentos de Identificacao</button>
			<button class="w3-bar-item w3-button" onclick="openCity('Tokyo')"><i class="fa fa-phone"></i> Contactos</button>
		</div>
		<div id="London" class="city" style="display:block;">
			<div class="w3-half">
				<h4><i class="fa fa-user"></i> Dados pessoais</h4>
				<ul class="w3-ul">
					<li>
						<label class="w3-label">Nome:</label>
						<?php echo $funcionario['Funcionario']['nome']; ?>
					</li>
					<li>
						<label class="w3-label">Apelido: </label class="w3-label">
							<?php echo $funcionario['Funcionario']['apelido']; ?>

						</li>
						<li>
							<label class="w3-label">Data de Nascimento: </label>
							<?php echo $funcionario['Funcionario']['data_nascimento']; ?>
						</li>
						<li>
							<label class="w3-label">Genero: </label>
							<?php echo $funcionario['Funcionario']['sexo']; ?>

						</li>
						<li>
							<label class="w3-label">Contacto Prim&aacute;rio: </label class="w3-label">
								<?php echo $funcionario['Funcionario']['contacto_pessoal']; ?>

							</li>
						</ul>
					</div>
					<div class="w3-half">
						<ul class="w3-ul">
							<h4><i class="fa fa-info-circle"></i> Informa&ccedil;&otilde;s adicionais do funcion&aacute;rio</h4>
							<li>
								<label class="w3-label">Carreira: </label>	
								<?php echo $funcionario['Carreira']['nome']; ?>
							</li>
							<li>
								<label class="w3-label">Classe: </label>
								<?php echo $funcionario['Clazze']['nome']; ?>
							</li>
							<li>
								<label class="w3-label">Delega&ccedil;&atilde;o: </label>
								<?php echo $funcionario['Delegacao']['nome']; ?>
							</li>
							<li>
								<label class="w3-label">Departamento: </label>
								<?php echo $funcionario['Funcionario']['departamento_id']; ?>
							</li>
							<li>
								<label class="w3-label">Data e hora de registo no sistema: </label>
								<strong><?php echo $funcionario['Funcionario']['created']; ?></strong>
							</li>
						</ul>
					</div>
				</div>
				<div id="Paris" class="city" style="display:none">
					<h4><i class="fa fa-id-card"></i> Documentos de indentifica&ccedil;&atilde;o</h4>
					<ul class="w3-ul">
						<li>
							<label class="w3-label">NUIT: </label>
							<?php echo $funcionario['Funcionario']['nuit']; ?>
						</li>
						<li>
							<label class="w3-label">Numedo do BI: </label>
							<?php echo $funcionario['Funcionario']['bi']; ?>
						</li>
						<li>
							<label class="w3-label">Data de Emiss&atilde;o: </label>	
							<?php echo $funcionario['Funcionario']['data_emissao']; ?>
						</li>
						<li>
							<label class="w3-label">Local de emiss&atilde;o: </label>	
							<?php echo $funcionario['Funcionario']['local_emissao']; ?>
						</li>
						<li>
							<h4><i class="fa fa-file"></i> Documentos</h4>
							Sem documento
						</li>
					</ul>
				</div>

				<div id="Tokyo" class="city" style="display:none">
					<h4><i class="fa fa-phone"></i> Contactos</h4>
					<ul class="w3-ul">
						<li>
							<label class="w3-label">Contacto alternativo: </label>	
							<?php echo $funcionario['Funcionario']['contacto_alternativo']; ?>
						</li>
						<li>
							<label class="w3-label">Contacto da empresa: </label>	
							<?php echo empty($funcionario['Funcionario']['contacto_trabalho']) ? 'N/D': $funcionario['Funcionario']['contacto_trabalho']; ?>
						</li>
						<li>
							<label class="w3-label">Email: </label>
							<?php echo $funcionario['Funcionario']['email_pessoal']; ?>
						</li>
						<li>
							<label class="w3-label">Email corporativo: </label>
							<?php echo empty($funcionario['Funcionario']['email_corporativo']) ? _('N/D') : $funcionario['Funcionario']['email_corporativo']; ?>
						</li>
					</ul>
				</div>
				<button class="w3-button w3-green">
					<i class="fa fa-check"></i> Vta
				</button>

				 <?php echo $this->Html->image('perfil_default.png', array('class' => 'img img-responsive img-circle pull-right')); ?>
				<!--
				<ul class="nav nav-pills nav-stacked w3-text-grey w3-leftbar w3-border-green w3-margin-top">
					<li role="presentation"><a href="#"><i class="fa fa-balance-scale"></i> Avaliar desempenho</a></li>
					<li role="presentation"><a href="<?php echo $this->Html->url(array('action' => 'transferencia'));?>"><i class="fa fa-refresh"></i> Transferir</a></li>
					<li role="presentation"><a href="#"><i class="fa fa-info-circle"></i> Formalizar processo disciplinar</a></li>
				</ul> -->
			</div>
		</div>
		<script type="text/javascript">
			function openCity(cityName) {
				var i;
				var x = document.getElementsByClassName("city");
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}
				document.getElementById(cityName).style.display = "block";
			}
		</script>