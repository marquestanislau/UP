<div id="formularioUtilizador" class="col-md-8" role="form">
		<h5 class="w3-text-grey"><span class="glyphicon glyphicon-user" style="font-size: 16px;" ></span> <?php echo __('Adicionar utilizador'); ?></h5>
	<div class="w3-white w3-padding-bottom w3-padding w3-border">
		<?php echo $this->Form->create('Usuario', array('type' => 'file', 'class' => 'w3-container', 'id' => 'ajaxFormUserAdd')); ?>
		<!-- Mensagem de sucesso  -->
		<div id="sucesso"></div>
		<h5>Dados pessoais</h5>
		<?php echo $this->Form->input('nome', array('class' => 'w3-input w3-hover-khaki w3-border'));?>
		<?php echo $this->Form->input('apelido', array('class' => 'w3-input w3-hover-khaki w3-border')); ?>
		<?php echo $this->Form->input('email', array('class' => 'w3-input w3-hover-khaki w3-border')); ?>
		<?php echo $this->Form->input('contacto', array('class' => 'w3-input w3-hover-khaki w3-border')); ?>
		<?php
		$hoje = date("Y-m-d");
		echo $this->Form->input('data_de_registo', array('value' => $hoje,'type' => 'hidden'), array('class' => 'btn btn-default'));

		echo $this->Form->input('foto_perfil', array('value' => 'upload/perfil_default.png', 'type' => 'file', 'class' => 'btn btn-primary'));
		?>
			<!-- Ajax loading image... -->
		<div style="display: none;" id="enviando">
			<?php echo $this->Html->image('ajax/ajax-loader.gif') ?>
		</div>

		<button class="w3-btn w3-green w3-large pull-right"><span class="glyphicon glyphicon-ok"></span> Submeter</button>
		<button id="novo" type="button" class="w3-btn w3-blue w3-large pull-right"><span class="glyphicon glyphicon-plus"></span> Novo</button></div>
		<?php
		echo $this->Form->end();
		?>
	</div>

	<div class="col-md-4">
		<div class="list-group">
			<a href="" class="list-group-item w3-light-blue">
				<h6> Escolha uma op&ccedil;&atilde;o</h6>
			</a>
			<?php echo $this->Html->link("<span class='glyphicon glyphicon-list'></span> Lista de utilizadores", array('action' => 'index'), array('class' => 'list-group-item', 'escape' => FALSE)); ?>
			<?php echo $this->Html->link("<span class='glyphicon glyphicon-cog'></span> Configura&ccedil;&otilde;es", array('action' => 'configuracao', 'controller' => 'pages'), array('class' => 'list-group-item', 'escape' => FALSE)) ?>
		</div>
		<div class="list-group" id="ultimoUsuario">
			<?php include('ultimo_usuario.ctp'); ?>
		</div>
	</div>
	<?php
		$dados = $this->Js->get('#ajaxFormUserAdd')->serializeForm(array('inline' => true, 'isForm' => true));
		
		$actualizarDados = $this->Js->request(
			array(
				'action' => 'ultimo_user'
			),
			array(
				'update' => '#ultimoUsuario', 
				'method' => 'post', 
				'async' => true
			)
		);

		$this->Js->get('#ajaxFormUserAdd')->event(
			'submit',
			$this->Js->request(
				array(
					'action' => 'add'
				),
				array(
					'update' => '#sucesso',
					'data' => $dados,
					'dataExpression' => true,
					'async' => true,
					'method' => 'post',
					'complete' => '$("#enviando").attr("style", "display:none")',
					'before' => '$("#enviando").attr("style", "")',
					'success' => $actualizarDados
				)
			)
		);
	?>
