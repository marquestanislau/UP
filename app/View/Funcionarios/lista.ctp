<?php if (!empty($funcionarios)) { ?>
<?php foreach ($funcionarios as $funcionario) :?>
      <?php $funcionario_id = $funcionario['Funcionario']['id'];?>
      <tr class="w3-text-dark-grey w3-hover-khaki w3-hover-text-blue">
        <td><?php echo $funcionario['Funcionario']['delegacao_id'] != NULL? "<span class='glyphicon glyphicon-ok w3-text-blue'>": "<span class='w3-text-grey glyphicon glyphicon-remove'>"; ?></td>
        <td><?php echo $funcionario['Funcionario']['nome']; ?></td>
        <td><?php echo $funcionario['Funcionario']['apelido']; ?></td>
        <td><?php echo $funcionario['Funcionario']['contacto_pessoal']; ?></td>
        <td><?php echo $funcionario['Funcionario']['sexo']; ?></td>
        <td><?php echo $funcionario['Funcionario']['data_nascimento']; ?></td>
        <td><?php echo $funcionario['Funcionario']['contacto_alternativo']; ?></td>
        <td>
          <a id="aprovado<?php echo $funcionario_id;?>" onclick="document.getElementById('modalfuncionario<?php echo $funcionario_id;?>').style.display='block'" href="#" class="w3-text-teal">
            <i class="fa fa-thumbs-up"></i>
          </a>
          <span class="mdl-tooltip" for="aprovado<?php echo $funcionario_id;?>">Aprovar</span>
          <div id="modalfuncionario<?php echo $funcionario_id;?>" class="w3-modal">
            <div class="w3-modal-content  w3-animate-top">
              <header class="w3-container w3-blue w3-padding">
                <i class="fa fa-user w3-large"></i>
                <span class="w3-closebtn" onclick="document.getElementById('modalfuncionario<?php echo $funcionario_id;?>').style.display='none'" >&times;</span>
                Aprovar Candidato para participar do conjunto de colaboradores...
              </header>
              <div class="w3-container w3-padding-bottom">
                  <?php if (!empty($funcionario['Funcionario']['delegacao_id'])) {?>
                    <h1 class="w3-large w3-text-grey w3-padding"><span class="glyphicon glyphicon-ok  w3-large"></span> Este candidato ja foi marcado como funcionario</h1>
                  <?php } else {?>
                  <h5>
                    <?php echo $funcionario['Funcionario']['nome']; ?>
                    <?php echo $funcionario['Funcionario']['apelido']; ?>
                  </h5>
                  <table class="w3-table">
                    <tr class="w3-teal">
                      <td colspan="2"><strong>Concurso [<?php echo $funcionario['Concurso']['nome']; ?>]</strong></td>
                    </tr>
                    <tr>
                      <td>
                        <label class="w3-label pull-right">Nome: </label>
                      </td>
                      <td>
                        <?php echo $funcionario['Funcionario']['nome']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label class="w3-label pull-right">Apelido: </label>
                      </td>
                      <td>
                        <?php echo $funcionario['Funcionario']['apelido']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label class="w3-label pull-right">Carreira a que concorre: </label>
                      </td>
                      <td>
                        <?php echo $funcionario['Carreira']['nome']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label class="w3-label pull-right">Despacho: </label>
                      </td>
                      <td>
                        <input class="w3-input w3-border datepicker w3-animate-input" style="width: 50%" name="">
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <button onclick="document.getElementById('modalfuncionario<?php echo $funcionario_id;?>').style.display='none'" class="w3-btn w3-blue pull-right w3-large">
                          <i class="fa fa-close"></i> Cancelar
                        </button>
                        <button class="w3-large w3-btn pull-right w3-green"><i class="fa fa-thumbs-o-up"></i> Admitir
                        </button>
                        <div id="requesting<?php echo $funcionario['Funcionario']['id']; ?>" style="display: none.">
                          <?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
                        </div>
                      </td>
                    </tr>
                  </table>
                  <?php }?>
              </div>
              <footer class="w3-container"></footer>
            </div>
          </div>
        </td>
      </tr>
<?php endforeach; ?>
<?php } else { ?>
  <tr>
    <td colspan="7">Sem participantes</td>
  </tr>
<?php } ?>
