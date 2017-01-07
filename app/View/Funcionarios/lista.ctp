<?php if (!empty($funcionarios)) { ?>
<?php foreach ($funcionarios as $funcionario) :?>
      <tr class="w3-text-dark-grey w3-hover-sand">
        <td><?php echo $funcionario['Funcionario']['delegacao_id'] != NULL? "<span class='glyphicon glyphicon-ok w3-text-blue'>": "<span class='w3-text-grey glyphicon glyphicon-remove'>"; ?></td>
        <td><?php echo $funcionario['Funcionario']['nome']; ?></td>
        <td><?php echo $funcionario['Funcionario']['apelido']; ?></td>
        <td><?php echo $funcionario['Funcionario']['contacto_pessoal']; ?></td>
        <td><?php echo $funcionario['Funcionario']['sexo']; ?></td>
        <td><?php echo $funcionario['Funcionario']['data_nascimento']; ?></td>
        <td><?php echo $funcionario['Funcionario']['contacto_alternativo']; ?></td>
      </tr>
<?php endforeach; ?>
<?php } else { ?>
  <tr>
    <td colspan="7">Sem participantes</td>
  </tr>
<?php } ?>
