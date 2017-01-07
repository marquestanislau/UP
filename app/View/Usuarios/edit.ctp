<style>
	.object-fit-cover {
		height: 64px;
		max-height: 64px;
		width: 64px;
		overflow: hidden;
		object-fit: cover; /*magic*/
	}
</style>
<div class="row w3-border w3-white">
	<div class="col-md-7">
		<div class="w3-margin w3-padding-bottom">
			<div class="w3-container alert alert-info">
				<h3>
					<?php 
					echo $usuario['Usuario']['nome'].' '.$usuario['Usuario']['apelido']; 
					echo $this->Html->image($usuario['Usuario']['foto_perfil'], array('class' => 'object-fit-cover img-circle pull-right'));
					?>
				</h3>
			</div>
			<?php echo $this->Form->create('Usuario', array('type' => 'file', 'class' => 'w3-container')); ?>
			<?php
			echo $this->Form->input('id');
			echo $this->Form->input('nome', array('class' => 'w3-input w3-hover-khaki w3-border'));
			echo $this->Form->input('apelido', array('class' => 'w3-input w3-hover-khaki w3-border'));
			echo $this->Form->input('email', array('class' => 'w3-input w3-hover-khaki w3-border'));
			echo $this->Form->input('contacto', array('class' => 'w3-input w3-hover-khaki w3-border'));
			echo $this->Form->input('foto_perfil', array('type' => 'file'));
			?>
			<div style="margin-top: 20px;"></div>
			<button class="w3-btn w3-large w3-green">
				<span class="glyphicon glyphicon-ok"></span>
				Submeter</button>
				<?php echo $this->Form->end(); ?>
			</div>
	</div>
	<div class="col-md-4">
		<ul class="w3-padding-top nav nav-stacked nav-pills">
			<li>
				<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span> Remover', array('action' => 'delete', $this->Form->value('Usuario.id')), array('class' => 'w3-btn w3-teal','escape' => FALSE, 'confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Usuario.id')))); ?>
			</li>
			<li>
				<?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span> Todos utilizadores', array('action' => 'index'), array('escape' => FALSE, 'class' => 'w3-btn w3-teal')); ?>				
			</li>
		</ul>
	</div>
</div>