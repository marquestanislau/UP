<div id="modalfuncionario<?php echo $funcionario_id;?>" class="w3-modal">
  <div class="w3-modal-content  w3-animate-top">
    <header class="w3-container w3-blue w3-padding">
      <i class="fa fa-user w3-large"></i>
      <span class="w3-closebtn" onclick="document.getElementById('modalfuncionario<?php echo $funcionario_id;?>').style.display='none'" >&times;</span>
      Aprovar Candidato para participar do conjunto de colaboradores...
    </header>
    <div class="w3-container w3-padding-bottom">
      <?php if (!empty($funcionario['Funcionario']['despacho'])) {?>
      <h1 class="w3-large w3-text-grey w3-padding"><span class="glyphicon glyphicon-ok  w3-large"></span> Este candidato j&aacute; foi marcado como funcion&aacute;rio</h1>
      <?php } else {?>
      <?php echo $this->Form->create('Funcionario', array('id' => 'formCandidatura'.$funcionario_id)); ?>
      <?php echo $this->Form->input('id', array('type' => 'hidden', 'value' => $funcionario['Funcionario']['id'])); ?>
      <?php echo $this->Form->input('nome', array('type' => 'hidden', 'value' => $funcionario['Funcionario']['nome'])); ?>
      <?php echo $this->Form->input('apelido', array('type' => 'hidden', 'value' => $funcionario['Funcionario']['apelido'])); ?>
      <?php echo $this->Form->input('carreira_id', array('type' => 'hidden', 'value' => $funcionario['Funcionario']['carreira_id'])); ?>
      <?php echo $this->Form->input('sexo', array('type' => 'hidden', 'value' => $funcionario['Funcionario']['sexo'])); ?>
      <?php echo $this->Form->input('data_nascimento', array('type' => 'hidden', 'value' => $funcionario['Funcionario']['data_nascimento'])); ?>
      <?php echo $this->Form->input('contacto_pessoal', array('type' => 'hidden', 'value' => $funcionario['Funcionario']['contacto_pessoal'])); ?>
      <?php echo $this->Form->input('despacho', array('type' => 'hidden', 'value' => $funcionario['Funcionario']['despacho'])); ?>
      <div id="sucesso<?php echo $funcionario_id;?>"></div>
      <h5>
        <?php echo $funcionario['Funcionario']['nome']; ?>
        <?php echo $funcionario['Funcionario']['apelido']; ?>
      </h5>
      <div class="w3-row">
        <div class="w3-col m12 w3-topbar">
          <strong>Concurso [<?php echo $funcionario['Concurso']['nome']; ?>]</strong> <br>
          <label class="w3-label">Carreira a que concorre: </label>
          <span class="w3-large"><?php echo $funcionario['Carreira']['nome']; ?></span>
        </div>
        <div class="w3-col m12">
          <label class="w3-label">Nome: </label>
          <?php echo $funcionario['Funcionario']['nome']; ?>
        </div>
        <div class="w3-col m12">
          <label class="w3-label">Apelido: </label>
          <?php echo $funcionario['Funcionario']['apelido']; ?>
        </div>
        <div class="w3-col m12">
          <strong>Sexo: <?php echo $funcionario['Funcionario']['sexo']; ?></strong>          
        </div>
        <div class="w3-col m12">
          <label class="w3-label">Despacho: </label>
          <?php echo $this->Form->input('despacho', array('class' => 'w3-light-grey', 'type' => 'date', 'label' => false)); ?>
        </div>
      </div>
      <div id="requesting<?php echo $funcionario['Funcionario']['id']; ?>" style="display: none;">
        <?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
      </div>
      <?php }?>
    </div>
    <footer class="w3-container w3-sand w3-padding-bottom">
        <?php if ( !empty($funcionario['Funcionario']['despacho'])): ?>
          <button type="button" onclick="document.getElementById('modalfuncionario<?php echo $funcionario_id;?>').style.display='none'" class="w3-btn w3-large w3-blue">
            <i class="fa fa-thumbs-up"></i>
            Ok
          </button>
        <?php else: ?>
          <button onclick="document.getElementById('modalfuncionario<?php echo $funcionario_id;?>').style.display='none'" type="button" class="w3-btn w3-red w3-large pull-right">
            <i class="fa fa-close"></i>
            Cancelar
          </button>
          <button id="admitir<?php echo $funcionario_id;?>" class="w3-large w3-btn pull-right w3-green"><i class="fa fa-thumbs-o-up"></i> Admitir
          </button>
        <?php endif ?>

        <?php echo $this->Form->end(); ?>
    </footer>
  </div>
  </div>
  <?php 
  $data = $this->Js->get('#formCandidatura'.$funcionario_id)->serializeForm(array('inline' => true, 'isForm' => true));
  $success = $this->Js->request(
    array(
      'action' => 'listaDeParticipantesAjax',
      'controller' => 'funcionarios'
      ),
    array(
      'update' => '#table-body',
      'method' => 'post',
      'dataExpression' => true,
      'async' => true
      )
    );
  $this->Js->get('#formCandidatura'.$funcionario_id)->event(
    'submit',
    $this->Js->request(
      array(
        'action' => 'aceitarDespacho', $funcionario_id,
        'controller' => 'funcionarios'
      ),
      array(
        'method' => 'post',
        'dataExpression' => true,
        'data' => $data,
        'before' => '$("#requesting'.$funcionario_id.'").attr("style", "")',
        'complete' => '$("#requesting'.$funcionario_id.'").attr("style", "display:none")',
        'update' => '#sucesso'.$funcionario_id,
        'async' => true,
        'success' => $success
        )
      )
    );
    ?>