
<div class="col-md-12">
    <p>Formul&aacute;rio de registo de Carreira de tecnicos administrativos</p>
    <hr>
</div>
<div class="col-md-6">
<?php echo $this->Form->create('Cta'); ?>
<?php echo $this->Form->input('funcionario_id', array('type' => 'hidden')); ?>

    <div class="form-horizontal">
        <div class="form-group">
            <label for="FuncionarioNome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
      <?php echo $this->Form->input('Funcionario.nome', array('label'=>false, 'class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => 'Ex: Estanislau')); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="FuncionarioApelido" class="col-sm-2 control-label">Apelido</label>
            <div class="col-sm-10">
      <?php echo $this->Form->input('Funcionario.apelido', array('label'=>false, 'class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => 'Ex: Marques')); ?>
            </div>
        </div>
         <div class="form-group">
    <?php echo $this->Form->label('Funcionario.sexo', 'Genero', array('class' => 'col-sm-2 control-label')); ?>
             <div class="col-sm-10">
       <?php echo $this->Form->radio('Funcionario.sexo', array('M' => 'Masculino', 'F' => 'Feminino'), array('legend' => false)); ?>
             </div>
         </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-4"><label for="Funcionario.Contacto_pessoal">Contacto pessoal</label></div>
            <div class="col-sm-8">
    <?php echo $this->Form->input('Funcionario.contacto_pessoal', array('label'=>false, 'class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => '841234567')); ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4"><label for="FuncionarioContactoAlternativo">Contacto alternativo</label></div>
    <div class="col-md-8"><?php   echo $this->Form->input('Funcionario.contacto_alternativo', array('label'=>false, 'class' => 'w3-input w3-border w3-hover-khaki', 'placeholder' => '821234567')); ?></div>
        </div>
        <button class="pull-right w3-btn w3-green w3-large">
            Submeter
        </button>
    </div>   
</div>
<?php echo $this->Form->end(); ?>
<!-- Tooltips para o formulario -->
<span class="mdl-tooltip" data-mdl-for="FuncionarioNome">Digite o nome do candidato</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioApelido">Digite o apelido do candidato</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioSexoF">Escolha se for femenino</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioSexoM">Escolha se for masculino</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioContactoPessoal">Contacto actualizado e funcional do concorrente</span>
<span class="mdl-tooltip" data-mdl-for="FuncionarioContactoAlternativo">Contacto actualizado do concorrente</span>