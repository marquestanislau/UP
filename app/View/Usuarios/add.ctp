<div id="addUser" class="w3-modal">
	<div class="w3-modal-content w3-round w3-animate-zoom" style="width: 50%;">
		<header class="w3-container w3-text-blue">
			<span class="w3-closebtn w3-hover-text-orange" onclick="document.getElementById('addUser').style.display='none'">&times;</span>
			<h5>
				<span class="glyphicon glyphicon-user"></span> 
				<?php echo __('Adicionar utilizador'); ?>
			</h5>
		</header>
		<div class="w3-container w3-padding">
			<?php echo $this->Form->create('Usuario', array('type' => 'file', 'class' => 'w3-container', 'id' => 'ajaxFormUserAdd')); ?>
			<!-- Mensagem de sucesso  -->
			<div id="sucesso"></div>
			<div class="row">
				<div class="col-md-6">
					<?php echo $this->Form->input('nome', array('class' => 'w3-input w3-round w3-margin-bottom w3-hover-khaki w3-border', 'placeholder' => 'John', 'id' => 'userName'));?>
					<?php echo $this->Form->input('apelido', array('class' => 'w3-input w3-round w3-margin-bottom w3-hover-khaki w3-border', 'placeholder' => 'Doe')); ?>
					<?php echo $this->Form->input('email', array('class' => 'w3-input w3-round w3-margin-bottom w3-hover-khaki w3-border', 'placeholder' => 'example@mail.com')); ?>
					<?php echo $this->Form->input('contacto', array('class' => 'w3-input w3-round w3-margin-bottom w3-hover-khaki w3-border', 'placeholder' => '845656561')); ?>
					<?php
					$hoje = date("Y-m-d");
					echo $this->Form->input('data_de_registo', array('value' => $hoje,'type' => 'hidden'), array('class' => 'btn btn-default'));

					echo $this->Form->input('foto_perfil', array('value' => 'upload/perfil_default.png', 'type' => 'file', 'class' => 'w3-button'));
					?>
				</div>
				<div class="col-md-6">
					<p class="w3-center">
						<?php echo $this->Html->image('upload/perfil_default.png', array('class' => 'w3-center w3-circle')); ?>
					</p>
				</div>
			</div>
				<!-- Ajax loading image... -->
			<div style="display: none;" id="enviando">
				<?php echo $this->Html->image('ajax/ajax-loader.gif') ?>
			</div>
		</div>
		<footer class="w3-container w3-padding-top w3-padding">
			<div class="w3-bar w3-xxround">
				<button class="w3-button w3-bar-item w3-margin-left w3-green">
					<span class="glyphicon glyphicon-ok"></span> Submeter
				</button>
				<?php
					echo $this->Form->end();
				?>
				<button onclick="clearInput('ajaxFormUserAdd', 'userName')" id="novo" type="button" class="w3-button w3-bar-item w3-light-grey">
					<span class="glyphicon glyphicon-plus"></span> Novo
				</button>
			</div>
		</footer>
	</div>
</div>

	<?php
		$dados = $this->Js->get('#ajaxFormUserAdd')->serializeForm(array('inline' => true, 'isForm' => true));
		
		$actualizarDados = $this->Js->request(
			array(
				'action' => 'index',
			),
			array(
				'update' => '#table-body', 
				'complete' => 'displayMessages()',
			)
		);

		$this->Js->get('#ajaxFormUserAdd')->event(
			'submit',
			$this->Js->request(
				array(
					'action' => 'add',
					'controller' => 'usuarios'
				),
				array(
					'method' => 'post',
					'data' => $dados,
					'dataExpression' => true,
					'async' => true,
					'before' => '$("#enviando").attr("style", "")',
					'complete' => '$("#enviando").attr("style", "display:none")',
					'update' => '#message',
					'success' => $actualizarDados
				)
			)
		);
	?>
