<style>
    .object-fit-cover {
        height: 64px;
        max-height: 64px;
        width: 64px;
        overflow: hidden;
        object-fit: cover; /*magic*/
    }
</style>

<h4 class="w3-text-blue"><i class="fa fa-user"></i> Meu perfil</h4>

<div class="col-md-8 w3-card w3-padding w3-round w3-border">
    <h3 class="w3-text-gray">
		<?php 
			$photo = $usuario['User']['foto_perfil'];
			if ($photo == NULL) {
				$photo = 'perfil_default.png';
			} else {
				echo $this->Html->image($photo, array('class' => 'object-fit-cover img-circle'));	
			}
		?>
        <space></space>
		<?php
			echo h($usuario['User']['username']);
		?>
    </h3>   
    <?php echo $this->Form->create('User'); ?>
    <table class="table table-striped">
        <tr>
            <td class="w3-label"><?php echo __('username'); ?></td>
            <td class="w3-text-dark-grey"><strong><?php echo $this->Form->input('username', array('value' => $usuario['User']['username'], 'label' => FALSE, 'class' => 'w3-input w3-round w3-border')); ?></strong></td>
        </tr>
        <tr>
            <td class="w3-label"><?php echo __('Apelido'); ?></td>
            <td class="w3-text-dark-grey"><?php echo $this->Form->input('apelido', array('value' => $usuario['User']['apelido'], 'label' => FALSE, 'class' => 'w3-input w3-round w3-border')); ?></td>
        </tr>
        <tr>
            <td class="w3-label"><?php echo __('Email'); ?></td>
            <td class="w3-text-dark-grey"><?php echo $this->Form->input('email', array('value' => $usuario['User']['email'], 'label' => FALSE, 'class' => 'w3-input w3-round w3-border')); ?></td>
        </tr>
        </tr>
        <tr>
            <td class="w3-label"><?php echo __('Data De Registo'); ?></td>
            <td class="w3-text-dark-grey"><?php echo h($usuario['User']['data_de_registo']); ?></td>
        </tr>
        <tr>
            <td class="w3-label"><?php echo __('Contacto'); ?></td>
            <td class="w3-text-dark-grey"><?php echo $this->Form->input('contacto', array('value' => $usuario['User']['contacto'], 'label' => FALSE, 'class' => 'w3-input w3-round w3-border')); ?></td>
        </tr>
        <tr>
            <td colspan="2">
                Defina a senha
            </td>
        </tr>
    </table>
    <button class="w3-button w3-green w3-round w3-large">
        <i class="fa fa-edit"></i>
        Alterar informa&ccedil;&atilde;o
    </button>
    <?php echo $this->Form->end(); ?>
</div>
<!-- <div class="col-md-3">
    <div class="list-group">
        <h6>
            <a href="#" class="w3-black list-group-item list-group-item-success">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
                Menu 
            </a>
        </h6>
	  <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> Rectificar dados', array('action' => 'edit', $usuario['User']['id']), array('class' => 'list-group-item', 'escape' => FALSE)); ?>
	  <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span> Remover este utilizador', array('action' => 'delete', $usuario['User']['id']), array('escape' => FALSE, 'class' => 'list-group-item', 'confirm' => __('Are you sure you want to delete # %s?', $usuario['User']['id']))); ?>
	  <?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span> Todos utilizadores', array('action' => 'index'), array('escape' => false,'class' => 'list-group-item')); ?>
	  <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> Registo de utilizadores', array('action' => 'add'), array('escape' => FALSE, 'class' => 'list-group-item')); ?>
    </div>
</div> -->