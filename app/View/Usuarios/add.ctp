<div id="formularioUtilizador" class="col-md-8" role="form">
	<div id="sucesso"></div>
	<div class="w3-container w3-grey">
		<h4><span class="glyphicon glyphicon-user" style="font-size: 24px;" ></span> <?php echo __('Adicionar utilizador'); ?></h4>
	</div>
	<?php echo $this->Form->create('Usuario', array('type' => 'file', 'class' => 'w3-container')); ?>
		
		<!-- Ajax loading image... -->
		<span style="display: none;" id="enviando">
			<?php echo $this->Html->image('ajax/ajax-loader.gif') ?>
		</span>
		<?php echo $this->Form->input('nome', array('class' => 'w3-input w3-hover-khaki w3-border'));?>
		<?php echo $this->Form->input('apelido', array('class' => 'w3-input w3-hover-khaki w3-border')); ?>
		<?php echo $this->Form->input('email', array('class' => 'w3-input w3-hover-khaki w3-border')); ?>
		<?php echo $this->Form->input('contacto', array('class' => 'w3-input w3-hover-khaki w3-border')); ?>
		<?php
			$hoje = date("Y-m-d");
			echo $this->Form->input('data_de_registo', array('value' => $hoje,'type' => 'hidden'), array('class' => 'btn btn-default'));
			
			echo $this->Form->input('foto_perfil', array('value' => 'upload/perfil_default.png', 'type' => 'file', 'class' => 'btn btn-primary'));
		?>
		<button class="w3-btn w3-green w3-large"><span class="glyphicon glyphicon-ok"></span> Submeter</button>
		<?php
			echo $this->Form->end();
	 	?>
		<button id="novo" class="w3-btn w3-red w3-large"><span class="glyphicon glyphicon-plus"></span> Novo</button>
 </div>

<div class="col-md-4">
	<div class="list-group">
		<a href="" class="list-group-item w3-grey">
			<h4> Escolha uma op&ccedil;&atilde;o</h4>
		</a>
		<?php echo $this->Html->link("<span class='glyphicon glyphicon-list'></span> Lista de utilizadores", array('action' => 'index'), array('class' => 'list-group-item', 'escape' => FALSE)); ?>
		<?php echo $this->Html->link("<span class='glyphicon glyphicon-cog'></span> Configura&ccedil;&otilde;es", array('action' => 'configuracao', 'controller' => 'pages'), array('class' => 'list-group-item', 'escape' => FALSE)) ?>
	</div>
	<div class="list-group">
		<a href="" class="list-group-item success">
			<strong>Ultimo utilizador registrado</strong>
		</a>
		<a href="/sigerh/usuarios/view/<?php echo $ultimoUsuario['Usuario']['id']; ?>" class="list-group-item">
			<h4 class="list-group-item-heading"><span class="glyphicon glyphicon-user"></span> <?php echo $ultimoUsuario['Usuario']['nome']; ?></h4>
		    <p class="list-group-item-text"><span class="glyphicon glyphicon-user"></span> Apelido: <?php echo $ultimoUsuario['Usuario']['apelido']; ?></p>
		    <p class="list-group-item-text"><span class="glyphicon glyphicon-envelope"></span> E-mail: <?php echo $ultimoUsuario['Usuario']['email']; ?></p>
		    <p class="list-group-item-text"><span class="glyphicon glyphicon-phone"></span> Contacto: <?php echo $ultimoUsuario['Usuario']['contacto']; ?></p>
		</a>

	</div>
</div>