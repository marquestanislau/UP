
<div class="col-md-12">
    <p>
        Formul&aacute;rio de registo de Carreira de tecnicos administrativos |
        <span class="w3-text-blue"><?php echo $carreira['nome'];?></span> |
    </p>
    <div id="sucesso<?php echo $carreira_id;?>"></div>
</div>
<div class="col-md-6">
    <?php echo $this->Form->create('Cta', array('id' => 'ctasForm'.$carreira_id, 'url' => array('controller' => 'ctas', 'action' => 'add'))); ?>
    <?php echo $this->Form->input('funcionario_id', array('type' => 'hidden')); ?>
    <?php echo $this->Form->input('Funcionario.carreira_id', array('type' => 'hidden', 'value' => $carreira_id)); ?>
    <?php echo $this->Form->input('Funcionario.concurso_id', array('type' => 'hidden', 'value' => $concurso_id)); ?>
    <label for="FuncionarioNome" class="w3-label">Nome</label>
    <?php echo $this->Form->input('Funcionario.nome', array('label'=>false, 'class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => 'Ex: Estanislau')); ?>
    <label for="FuncionarioApelido" class="w3-label">Apelido</label>
    <?php echo $this->Form->input('Funcionario.apelido', array('label'=>false, 'class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => 'Ex: Marques')); ?>
     <?php echo $this->Form->label('Funcionario.sexo', 'Genero', array('class' => 'w3-label')); ?>
      <?php echo $this->Form->radio('Funcionario.sexo', array('M' => 'Masculino', 'F' => 'Feminino'), array('legend' => false)); ?>
    <div id="requesting<?php echo $carreira_id;?>" style="display:none">
        <?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
    </div>
</div>
<div class="col-md-6">
    <label for="Funcionario.Contacto_pessoal" class="w3-label">Contacto Pessoal</label>
    <?php echo $this->Form->input('Funcionario.contacto_pessoal', array('label'=>false, 'class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => '841234567')); ?>
    <label for="FuncionarioContactoAlternativo" class="w3-label">Contacto alternativo</label>
    <?php   echo $this->Form->input('Funcionario.contacto_alternativo', array('label'=>false, 'class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => '821234567')); ?>
    <?php echo $this->Form->label('Funcionario.data_nascimento', 'Data de Nascimento', array('class' => 'w3-label')); ?>
      <?php echo $this->Form->input('Funcionario.data_nascimento', array('label' => false, 'type' => 'text', 'class' => 'w3-input w3-border datepicker', 'placeholder' => '(Ano/Mes/Dia)')); ?>
    <button class="pull-right w3-btn w3-green w3-large w3-margin-top">
        <span class="glyphicon glyphicon-ok"></span>
        Submeter
    </button>
</div>
<?php echo $this->Form->end(); ?>
<!-- Tooltips para o formulario -->
<span class="mdl-tooltip" data-mdl-for="FuncionarioNome">Digite o nome do candidato</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioApelido">Digite o apelido do candidato</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioSexoF">Escolha se for femenino</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioSexoM">Escolha se for masculino</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioContactoPessoal">Contacto actualizado e funcional do concorrente</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioContactoAlternativo">Contacto actualizado do concorrente</span>
<?php
  $dados = $this->Js->get('#ctasForm'.$carreira_id)->serializeForm(array('inline' => true, 'isForm' => true));
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
          'update' => '#sucesso'.$carreira_id,
          'before' => '$("#requesting'.$carreira_id.'").attr("style", "")',
          'complete' => '$("#requesting'.$carreira_id.'").attr("style", "display:none")'
        )
      )
  );
?>
