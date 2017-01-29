<?php if (!empty($funcionarios)) { ?>
<?php foreach ($funcionarios as $funcionario) :?>
      <?php $funcionario_id = $funcionario['Funcionario']['id'];?>
      <tr class="w3-hover-khaki w3-text-dark-grey">
        <td><?php echo $funcionario['Funcionario']['nome']; ?></td>
        <td><?php echo $funcionario['Funcionario']['apelido']; ?></td>
        <td><?php echo $funcionario['Funcionario']['contacto_pessoal']; ?></td>
        <td>
          <i class="<?php echo $funcionario['Funcionario']['sexo'] == 'M' ? 'w3-text-blue fa fa-male' : 'w3-text-green fa fa-female'; ?>"></i>    
          <?php echo $funcionario['Funcionario']['sexo']; ?>
        </td>
        <td><?php echo $funcionario['Funcionario']['data_nascimento']; ?></td>
        <td>
          <button class="w3-btn w3-blue" id="ver<?php echo $funcionario_id;?>">
            <i class="fa fa-user"></i>
          </button>
          <?php echo $this->Html->link('<i class="fa fa-user-plus"></i>', array('action' => 'alterar/'.$funcionario_id, 'controller' => 'funcionarios'), array('escape' => false, 'class' => 'w3-blue w3-btn')); ?>
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