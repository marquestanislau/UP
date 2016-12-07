<style>
    .object-fit-cover {
        height: 64px;
        max-height: 64px;
        width: 64px;
        overflow: hidden;
        object-fit: cover; /*magic*/
    }
</style>

<div class="col-md-1"></div>
<div class="col-md-7">
    <h3>
		<?php 
			$photo = $usuario['Usuario']['foto_perfil'];
			if ($photo == NULL) {
				$photo = 'perfil_default.png';
			} else {
				echo $this->Html->image($photo, array('class' => 'object-fit-cover img-circle'));	
			}
		?>
        <space></space>
		<?php
			echo h($usuario['Usuario']['nome']);
		?>
    </h3>   

    <table class="table table-striped">
        <tr>
            <td><?php echo __('Nome'); ?></td>
            <td><strong><?php echo h($usuario['Usuario']['nome']); ?></strong></td>
        </tr>
        <tr>
            <td><?php echo __('Apelido'); ?></td>
            <td><?php echo h($usuario['Usuario']['apelido']); ?></td>
        </tr>
        <tr>
            <td><?php echo __('Email'); ?></td>
            <td><?php echo h($usuario['Usuario']['email']); ?></td>
        </tr>
        <tr>
            <td><?php echo __('Data De Registo'); ?></td>
            <td><?php echo h($usuario['Usuario']['data_de_registo']); ?></td>
        </tr>
        <tr>
            <td><?php echo __('Contacto'); ?></td>
            <td><?php echo h($usuario['Usuario']['contacto']); ?></td>
        </tr>
    </table>
    <button class="btn" onclick="window.history.back()">
        <span class="glyphicon glyphicon-arrow-left"></span>
        Voltar
    </button>
</div>
<div class="col-md-3">
    <div class="list-group">
        <h6>
            <a href="#" class="w3-black list-group-item list-group-item-success">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
                Menu 
            </a>
        </h6>
	  <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> Rectificar dados', array('action' => 'edit', $usuario['Usuario']['id']), array('class' => 'list-group-item', 'escape' => FALSE)); ?>
	  <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span> Remover este utilizador', array('action' => 'delete', $usuario['Usuario']['id']), array('escape' => FALSE, 'class' => 'list-group-item', 'confirm' => __('Are you sure you want to delete # %s?', $usuario['Usuario']['id']))); ?>
	  <?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span> Todos utilizadores', array('action' => 'index'), array('escape' => false,'class' => 'list-group-item')); ?>
	  <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> Registo de utilizadores', array('action' => 'add'), array('escape' => FALSE, 'class' => 'list-group-item')); ?>
    </div>
</div>