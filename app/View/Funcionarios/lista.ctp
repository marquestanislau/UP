<?php if (!empty($funcionarios)) { ?>
<?php foreach ($funcionarios as $funcionario): ?>
  <?php $funcionario_id = $funcionario['Funcionario']['id'];?>
  <tr class="w3-text-grey w3-hover-khaki">
    <td><?php echo $funcionario['Funcionario']['despacho'] != NULL? "<span class='glyphicon glyphicon-ok w3-text-green'>": "<span class='w3-text-grey glyphicon glyphicon-remove'>"; ?></td>
    <td><?php echo $funcionario['Funcionario']['nome']; ?></td>
    <td><?php echo $funcionario['Funcionario']['apelido']; ?></td>
    <td><?php echo $funcionario['Funcionario']['contacto_pessoal']; ?></td>
    <td><?php echo $funcionario['Funcionario']['data_nascimento']; ?></td>
    <td><?php echo $funcionario['Funcionario']['contacto_alternativo']; ?></td>
    <td><?php echo $funcionario['Funcionario']['sexo']; ?></td>
    <td>
      <?php if ( empty($funcionario['Funcionario']['despacho']) ) { ?>
      <button id="aprovado<?php echo $funcionario_id;?>" onclick="document.getElementById('modalfuncionario<?php echo $funcionario_id;?>').style.display='block'" class="w3-text-teal w3-tiny w3-white w3-border">
        <i class="fa fa-thumbs-up"></i>
      </button>
      <span class="mdl-tooltip" for="aprovado<?php echo $funcionario_id;?>">Aprovar <?php echo $funcionario['Funcionario']['nome']; ?></span>
      <?php } else { ?>
      <a id="nomeacao" target="_blank" href="<?php echo $this->Html->url(
            array(
              'action' => 'nomeacao',
              'controller' => 'funcionarios',
              'ext' => 'pdf',
              $funcionario_id
              )); ?>" 
              class="w3-hover-text-black">
        <i class="fa fa-file-pdf-o"></i>
        <span class="mdl-tooltip" data-mdl-for="nomeacao">Gerar nomea&ccedil;&atilde;o provis&oacute;ria</span>
      </a>
      <?php } ?>
    </td>
    </tr>
    <?php include('despacho.ctp'); ?>
  <?php endforeach; ?>
  <?php } else { ?>
  <tr>
    <td colspan="7" class="w3-large w3-center" >Sem participantes</td>
    <td></td>
  </tr>
  <?php } ?>