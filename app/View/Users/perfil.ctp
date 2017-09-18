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
			echo h($usuario['User']['username'].' '.$usuario['User']['apelido']);
		?>
    </h3>   
    <?php echo $this->Form->create('User', array('id' => 'perfilForm')); ?>
    <?php echo $this->Form->input('id', array('value' => $usuario['User']['id'])); ?>
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
        <tr>
            <td class="w3-label"><?php echo __('Data De Registo'); ?></td>
            <td class="w3-text-dark-grey"><?php echo h($usuario['User']['created']); ?></td>
        </tr>
        <tr>
            <td class="w3-label"><?php echo __('Contacto'); ?></td>
            <td class="w3-text-dark-grey"><?php echo $this->Form->input('contacto', array('value' => $usuario['User']['contacto'], 'label' => FALSE, 'class' => 'w3-input w3-round w3-border')); ?></td>
        </tr>
        <tr>
            <td>
                <div id="requesting" style="display:none;"><?php echo $this->Html->image('ajax/ajax-loader.gif'); ?></div>
            </td>
            <td></td>
        </tr>
    </table>
    <button class="w3-button w3-green w3-round w3-large">
        <i class="fa fa-edit"></i>
        Alterar informa&ccedil;&atilde;o
    </button>
    <?php echo $this->Form->end(); ?>
</div>
<?php 

    $data = $this->Js->get('#perfilForm')->serializeForm(array('isForm' => true, 'inline' => true));

    $success = $this->Js->request(
            array(),
            array(
                    'complete' => 'displayMessages()'
                )
        );

    $this->Js->get('#perfilForm')->event(
        'submit',
        $this->Js->request(
                array(
                        'action' => 'edit/'.$usuario['User']['id'],
                        'controller' => 'users'
                    ),
                array(
                        'method' => 'post',
                        'dataExpression' => true,
                        'data' => $data,
                        'async' => true,
                        'before' => '$("#requesting").attr("style", "");',
                        'complete' => '$("#requesting").attr("style", "display: none")',
                        'update' => '#message',
                        'success' => $success
                    )
            )
        );
 ?>
