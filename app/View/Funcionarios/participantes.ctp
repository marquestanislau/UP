<h5 class="w3-text-grey">Participantes</h5>
<div class="col-md-12 w3-border w3-white w3-padding">
  <h6 class="w3-text-blue"><span class="fa fa-users"></span> Participantes</h6>
  <?php echo $this->Form->create('Funcionario', array('class' => 'w3-container', 'id' => 'ajaxFormParticipantes'));?>
  <div class="row w3-margin-bottom">
    <div class="col-md-6">
      <?php echo $this->Form->input('concurso_id', 
                      array(
                        'class' => 'w3-input w3-hover-sand w3-border',
                        'id' => 'getConcurso',
                        'label' => array(
                            'text' => 'Concurso',
                            'class' => 'w3-label'
                        ),
                        'empty' => '( Por favor seleccione... )'
                      )
                  );
      ?>
    </div>
    <div class="col-md-6">
      <?php 
        echo $this->Form->input('carreira_id', 
                                array(
                                  'class' => 'w3-input w3-hover-sand w3-border',
                                  'id' => 'getCarreira',
                                  'label' => array(
                                    'text' => 'Carreira',
                                    'class' => 'w3-label'
                                  ), 
                                  'empty' => '( Por favor seleccione... )'
                                )
                          );
      ?>
    </div>
  </div>
  <?php echo $this->Form->end();?>
  <div id="requesting" style="display:none">
    <?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
  </div>
  <table class="table table-striped w3-bottombar">
    <thead class="w3-label w3-blue-grey">
      <th>Estado</th>
      <th>Nome</th>
      <th>Apelido</th>
      <th>Contacto Primario</th>
      <th>Sexo</th>
      <th>Data de Nascimento</th>
      <th>Contacto alternativo</th>
      <th></th>
    </thead>
    <tbody id="table-body">
      <?php include('lista.ctp'); ?>
    </tbody>
  </table>
  <?php
  echo $this->Paginator->counter(array(
    'format' => __('Pagina {:page} de {:pages}, a visualizar {:current} registos num total de {:count}, inicia em {:start},  e termina em {:end}')
  ));
  ?>  </p>
  <div class="paging">
    <?php
      echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
      echo $this->Paginator->numbers(array('separator' => ''));
      echo $this->Paginator->next(__('Seguinte') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
  </div>
</div>

<?php
  $dados = $this->Js->get('#ajaxFormParticipantes')->serializeForm(array('inline' => true, 'isForm' => true));
  $this->Js->get('#getConcurso')->event(
    'change',
    $this->Js->request(
      array(
        'action' => 'participantes'
      ),
      array(
        'method' => 'post',
        'dataExpression' => true,
        'data' => $dados,
        'async' => true,
        'update' => '#table-body',
        'before' => '$("#requesting").attr("style", "")',
        'complete' => '$("#requesting").attr("style", "display:none")'
      )
    )
  );
  $this->Js->get('#getCarreira')->event(
    'change',
    $this->Js->request(
      array(
        'action' => 'participantes'
      ),
      array(
        'method' => 'post',
        'dataExpression' => true,
        'data' => $dados,
        'async' => true,
        'update' => '#table-body',
        'before' => '$("#requesting").attr("style", "")',
        'complete' => '$("#requesting").attr("style", "display:none")'
      )
    )
  );
?>
