<?php if (!empty($funcionarios)) { ?>
<?php foreach ($funcionarios as $funcionario): ?>
  <?php $funcionario_id = $funcionario['Funcionario']['id'];?>
  <tr class="w3-text-grey w3-hover-khaki">
    <td><?php echo $funcionario['Cta']['id'] != NULL ? '<i class="fa fa-user"></i>' : '<i class="fa fa-graduation-cap"></i>'; ?></td>
    <td><?php echo $funcionario['Funcionario']['despacho'] != NULL? '<i class="fa fa-check w3-text-green"></i>': '<i class="fa fa-remove"></i>'; ?>
    </td>
    <td><?php echo $funcionario['Funcionario']['nome']; ?></td>
    <td><?php echo $funcionario['Funcionario']['apelido']; ?></td>
    <td><?php echo $funcionario['Funcionario']['contacto_pessoal']; ?></td>
    <td><?php echo $funcionario['Funcionario']['data_nascimento']; ?></td>
    <td ><span class="w3-tag w3-green w3-opacity w3-round"><?php echo $funcionario['Funcionario']['posicao']; ?></span></td>
    <td><?php echo $funcionario['Funcionario']['sexo']; ?></td>
    <td>
      <?php if ( empty($funcionario['Funcionario']['despacho']) ) { ?>
      <button id="aprovado<?php echo $funcionario_id;?>" onclick="document.getElementById('modalfuncionario<?php echo $funcionario_id;?>').style.display='block'" class="w3-text-teal w3-tiny w3-white w3-border">
        <i class="fa fa-thumbs-up"></i>
      </button>
      <span class="mdl-tooltip" for="aprovado<?php echo $funcionario_id;?>">Aprovar <?php echo $funcionario['Funcionario']['nome']; ?></span>
      <?php } else { ?>
      <a id="nomeacao<?php echo $funcionario_id;?>" target="_blank" href="<?php echo $this->Html->url(
            array(
              'action' => 'nomeacao',
              'controller' => 'funcionarios',
              'ext' => 'pdf',
              $funcionario_id
              )); ?>" 
              class="w3-hover-text-black">
        <i class="fa fa-file-pdf-o w3-text-green"></i>
        <span class="mdl-tooltip" data-mdl-for="nomeacao<?php echo $funcionario_id;?>">Gerar nomea&ccedil;&atilde;o provis&oacute;ria</span>
      </a>/
      <a id="cancel<?php echo $funcionario_id;?>" href="#" class="w3-text-red">
        <i class="fa fa-rotate-left "></i>
        <span class="mdl-tooltip" data-mdl-for="cancel<?php echo $funcionario_id;?>"> Cancelar despacho de <br><?php echo $funcionario['Funcionario']['nome']; ?></span>
          <?php 

            $success = $this->Js->request(
                array(
                    'action' => 'listaDeParticipantesAjax',
                    'controller' => 'funcionarios'
                  ), 
                array(
                    'update' => '#table-body',
                    'complete' => 'displayMessages()',
                    'method' => 'post',
                    'dataExpression' => true,
                    'async' => true
                  )
              );

            $this->Js->get('#cancel'.$funcionario_id)->event(
                'click',
                $this->Js->request(
                    array(
                        'action' => 'cancelDespacho/'.$funcionario_id,
                        'controller' => 'funcionarios'
                      ),
                    array(
                        'method' => 'post',
                        'dataExpression' => true,
                        'async' => true,
                        'before' => '$("#requesting").attr("style", "")',
                        'complete' => '$("#requesting").attr("style", "display:none")',
                        'update' => '#message',
                        'success' => $success
                      )
                  )
              );
          ?>
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