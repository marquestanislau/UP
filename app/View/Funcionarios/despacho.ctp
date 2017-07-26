<div id="modalfuncionario<?php echo $funcionario_id;?>" class="w3-modal">
  <div class="w3-modal-content  w3-animate-top w3-round w3-text-dark-grey">
    <header class="w3-container w3-padding">
      <span class="w3-closebtn" onclick="document.getElementById('modalfuncionario<?php echo $funcionario_id;?>').style.display='none'" >&times;</span>
      <h6 class="w3-center">
          <i class="fa fa-user w3-large"></i>
          Aprovar candidato <?php echo $funcionario['Funcionario']['nome']; ?>?
      </h6>
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
      <div class="row">
        <div class="col-md-12">
          <div style="line-height: 30px;" class="w3-light-grey w3-padding">
            Concurso:<br>
            <strong>[<?php echo $funcionario['Concurso']['nome'] != '' ? $funcionario['Concurso']['nome'] : 'N/D'; ?>]</strong> <br>
            Carreira a que concorre:<br>
            <span class="w3-large"><?php echo $funcionario['Carreira']['nome']; ?></span>
          </div>
        </div>
        <!-- <div class="w3-col m12">
          <label class="w3-label">Nome: </label>
          <?php echo $funcionario['Funcionario']['nome']; ?>
        </div>
        <div class="w3-col m12">
          <label class="w3-label">Apelido: </label>
          <?php echo $funcionario['Funcionario']['apelido']; ?>
        </div> -->
        <div class="col-md-12 m12">
          <strong>Sexo: <?php echo $funcionario['Funcionario']['sexo']; ?></strong>          
        </div>
        <div class="col-md-6 m12">
          <label class="w3-label w3-margin-top">Despacho: </label>
          <?php echo $this->Form->input('despacho', array('class' => 'w3-white w3-input w3-round w3-border w3-text-blue', 'type' => 'date', 'label' => false)); ?>
          <label class="w3-label w3-margin-top">Delega&ccedil;&atilde;o: </label>
          <?php echo $this->Form->input('delegacao_id', array('class' => 'w3-input w3-round w3-border', 'label' => false)); ?>
        </div>
        <!-- <div class="w3-col m12">
          <label class="w3-label">Classe: </label>
          <?php echo $this->Form->input('clazze_id', array('class' => 'w3-input w3-round w3-border', 'label' => false)); ?>
        </div> -->
      </div>
      <div id="requesting<?php echo $funcionario['Funcionario']['id']; ?>" style="display: none;">
        <?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
      </div>
      <?php }?>
    </div>
    <footer class="w3-container w3-white w3-padding-bottom w3-padding w3-round">
      <?php if ( !empty($funcionario['Funcionario']['despacho'])): ?>
        <button type="button" onclick="document.getElementById('modalfuncionario<?php echo $funcionario_id;?>').style.display='none'" class="w3-btn w3-large w3-blue">
          <i class="fa fa-thumbs-up"></i>
          Ok
        </button>
      <?php else: ?>
        <div class="w3-bar"> 
        <button id="admitir<?php echo $funcionario_id;?>" class=" w3-button w3-round w3-green"><i class="fa fa-thumbs-o-up"></i> Aprovar candidato
          </button>
          <button onclick="document.getElementById('modalfuncionario<?php echo $funcionario_id;?>').style.display='none'" type="button" class="w3-button w3-round w3-border">
            <i class="fa fa-close"></i>
            Cancelar aprova&ccedil;&atilde;o
          </button>
        </div>
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
    'async' => true,
    'complete' => 'displayMessages()'
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
      'update' => '#message',
      'async' => true,
      'success' => $success
      )
    )
  );
  ?>