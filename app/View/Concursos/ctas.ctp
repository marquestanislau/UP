
<div class="col-md-12">
    <p>
        Formul&aacute;rio de registo de Corpo t&eacute;cnico administrativo |
        <span class="w3-text-blue"><?php echo $carreira['nome'];?></span> |
    </p>
    <div id="sucesso<?php echo $carreira_id;?>"></div>
</div>
<div class="col-md-6">
    <?php echo $this->Form->create('Cta', array('id' => 'ctasForm'.$carreira_id)); ?>
    <?php //echo $this->Form->input('funcionario_id', array('type' => 'hidden')); ?>
    <?php echo $this->Form->input('Funcionario.escalao_id', array('type' => 'hidden', 'value' => 1)); ?>
    <?php echo $this->Form->input('Funcionario.nuit', array('type' => 'hidden', 'value' => 1)); ?>
    <?php echo $this->Form->input('Funcionario.carreira_id', array('type' => 'hidden', 'value' => $carreira_id)); ?>
    <?php echo $this->Form->input('Funcionario.concurso_id', array('type' => 'hidden', 'value' => $concurso_id)); ?>
    <?php echo $this->Form->input('Funcionario.delegacao_id', array('type' => 'hidden', 'value' => $concurso['Concurso']['delegacao_id'])); ?>
    <label for="FuncionarioNome">Nome</label>
    <?php echo $this->Form->input('Funcionario.nome', array('label'=>false, 'class' => 'w3-input w3-round w3-border w3-hover-khaki', 'placeholder' => 'Estanislau', 'id' => 'nome'.$carreira_id)); ?>
    <label for="FuncionarioApelido">Apelido</label>
    <?php echo $this->Form->input('Funcionario.apelido', array('label'=>false, 'class' => 'w3-input w3-round w3-border w3-hover-khaki', 'placeholder' => 'Marques')); ?>
    <br>
     <div class="row">
       <div class="col-md-6">
         <?php echo $this->Form->label('Funcionario.sexo', 'Genero'); ?>
         <br>
         <?php echo $this->Form->radio('Funcionario.sexo', array('M' => 'Masculino', 'F' => 'Feminino'), array('legend' => false, 'separator' => '<br>')); ?>
       </div>
       <div class="col-md-6">
         <?php echo $this->Form->input('Funcionario.posicao', array('class' => 'w3-input w3-round w3-border', 'label' => 'Posi&ccedil;&atilde;o')); ?>
       </div>
     </div>
    <div id="requesting<?php echo $carreira_id;?>" style="display:none">
        <?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
    </div>
</div>
<div class="col-md-6">
  <div class="row">
    <div class="col-md-6">
      <label for="Funcionario.Contacto_pessoal">Contacto Pessoal</label>
      <?php echo $this->Form->input('Funcionario.contacto_pessoal', array('label'=>false, 'class' => 'w3-input w3-round w3-border w3-hover-khaki', 'placeholder' => '841234567')); ?>
      <label for="FuncionarioContactoAlternativo">Contacto alternativo</label>
      <?php   echo $this->Form->input('Funcionario.contacto_alternativo', array('label'=>false, 'class' => 'w3-input w3-round w3-border w3-hover-khaki', 'placeholder' => '821234567')); ?>
      <br>
      <?php echo $this->Form->label('Funcionario.data_nascimento', 'Data de Nascimento'); ?>
        <?php echo $this->Form->input('Funcionario.data_nascimento', array('label' => false, 'type' => 'text', 'class' => 'w3-input w3-text-blue w3-round w3-border datepicker', 'placeholder' => '(Ano-Mes-Dia)', 'id' => 'datepicker'.$carreira_id , 'onfocus' => 'selecionador('.$carreira_id.')')); ?>
    </div>
    <div class="col-md-6">
    </div>
  </div>
</div>
<footer class="w3-container w3-padding">
    <div class="w3-bar">
      <button class="w3-button w3-green w3-margin-top w3-round">
          <span class="glyphicon glyphicon-ok"></span>
          Guardar
      </button>
      <?php echo $this->Form->end(); ?>
      <button  class="w3-button w3-light-grey w3-margin-top w3-round" onclick="clearInput('ctasForm'+<?php echo $carreira_id?>,'nome'+<?php echo $carreira_id?>)">
          <span class="glyphicon glyphicon-plus"></span>
          Novo registo
      </button>
    </div>
</footer>
<!-- Tooltips para o formulario -->
<span class="mdl-tooltip" data-mdl-for="FuncionarioNome">Digite o nome do candidato</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioApelido">Digite o apelido do candidato</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioSexoF">Escolha se for femenino</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioSexoM">Escolha se for masculino</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioContactoPessoal">Contacto actualizado e funcional do concorrente</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioContactoAlternativo">Contacto actualizado do concorrente</span>
<?php
  $dados = $this->Js->get('#ctasForm'.$carreira_id)->serializeForm(array('inline' => true, 'isForm' => true));

  $success = $this->Js->request(
      array(
          'controller' => 'ctas'
        ),
      array (
          'complete' => 'displayMessages()'
        )
    );

  $this->Js->get('#ctasForm'.$carreira_id)->event(
    'submit',
    $this->Js->request(
        array(
            'controller' => 'ctas',
            'action' => 'add'
        ),
        array(
          'method' => 'post',
          'async' => true,
          'data' => $dados,
          'dataExpression' => true,
          'update' => '#message',
          'before' => '$("#requesting'.$carreira_id.'").attr("style", "")',
          'complete' => '$("#requesting'.$carreira_id.'").attr("style", "display:none")',
          'success' => $success
        )
      )
  );
?>
