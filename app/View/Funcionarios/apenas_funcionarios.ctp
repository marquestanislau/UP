<?php if (!empty($funcionarios)) { ?>
<?php foreach ($funcionarios as $funcionario) :?>
      <?php $funcionario_id = $funcionario['Funcionario']['id'];?>
      <tr class="w3-hover-khaki w3-text-dark-grey w3-hover-text-blue">
        <td><?php echo $funcionario['Funcionario']['nome']; ?></td>
        <td><?php echo $funcionario['Funcionario']['apelido']; ?></td>
        <td><?php echo $funcionario['Funcionario']['contacto_pessoal']; ?></td>
        <td>
          <i class="<?php echo $funcionario['Funcionario']['sexo'] == 'M' ? 'w3-text-grey fa fa-male' : 'w3-text-grey fa fa-female'; ?>"></i>    
          [<?php echo $funcionario['Funcionario']['sexo']; ?>]
        </td>
        <td><?php echo $funcionario['Funcionario']['data_nascimento']; ?></td>
        <td>
          <button class="w3-btn w3-green" id="ver<?php echo $funcionario_id;?>">
            <i class="fa fa-user"></i>
            <span class="mdl-tooltip" data-mdl-for="ver<?php echo $funcionario_id;?>">Visualizar <?php echo $funcionario['Funcionario']['nome']; ?></span>
            <span class="mdl-tooltip" data-mdl-for="editar<?php echo $funcionario_id;?>">Alterar dados de: <?php echo $funcionario['Funcionario']['nome']; ?></span>
          </button>
          <?php echo $this->Html->link('<i class="fa fa-user-plus"></i>', array('action' => 'alterar/'.$funcionario_id, 'controller' => 'funcionarios'), array('escape' => false, 'class' => 'w3-blue w3-btn', 'id' => 'editar'.$funcionario_id)); ?>
          <span id="requesting<?php echo $funcionario_id;?>" style="display:none">
            <?php echo $this->Html->image('ajax/ajax-loader.gif');?>
          </span>
          <?php 
            $this->Js->get('#ver'.$funcionario_id)->event(
              'click',
              $this->Js->request(
                array(
                  'action' => 'detalhes/'.$funcionario_id,
                  'controller' => 'funcionarios'
                ),
                array(
                  'method' => 'get',
                  'async' => true,
                  'dataExpression' => true,
                  'update' => '#content',
                  'before' => '$("#requesting'.$funcionario_id.'").attr("style", "display:");',
                  'completed' => '$("#requesting'.$funcionario_id.'").attr("style", "display:none");'
                )
              )
            );
          ?>
        </td>
      </tr>
<?php endforeach; ?>
<?php } else { ?>
  <tr>
    <td colspan="7"><i class="fa fa-stop"></i> Sem funcionarios cadastrados no sistema</td>
  </tr>
<?php } ?>