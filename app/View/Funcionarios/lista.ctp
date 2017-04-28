<?php if (!empty($funcionarios)) { ?>
<?php foreach ($funcionarios as $funcionario): ?>
  <?php $funcionario_id = $funcionario['Funcionario']['id'];?>
  <tr class="w3-text-dark-grey w3-hover-khaki">
    <td><?php echo $funcionario['Funcionario']['despacho'] != NULL? "<span class='glyphicon glyphicon-ok w3-text-blue'>": "<span class='w3-text-grey glyphicon glyphicon-remove'>"; ?></td>
    <td><?php echo $funcionario['Funcionario']['nome']; ?></td>
    <td><?php echo $funcionario['Funcionario']['apelido']; ?></td>
    <td><?php echo $funcionario['Funcionario']['contacto_pessoal']; ?></td>
    <td><?php echo $funcionario['Funcionario']['sexo']; ?></td>
    <td><?php echo $funcionario['Funcionario']['data_nascimento']; ?></td>
    <td><?php echo $funcionario['Funcionario']['contacto_alternativo']; ?></td>
    <td>
      <button id="aprovado<?php echo $funcionario_id;?>" onclick="document.getElementById('modalfuncionario<?php echo $funcionario_id;?>').style.display='block'" class="w3-text-teal w3-btn w3-tiny w3-white w3-border">
        <i class="fa fa-thumbs-up"></i>
      </button>
      <span class="mdl-tooltip" for="aprovado<?php echo $funcionario_id;?>">Aprovar</span>
    </td>
    </tr>
    <?php include('despacho.ctp'); ?>
  <?php endforeach; ?>
  <?php } else { ?>
  <tr>
    <td colspan="7"><span class="w3-text-red">Sem participantes</span></td>
  </tr>
  <?php } ?>