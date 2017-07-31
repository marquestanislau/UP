<div class="row">
	<h5 class="w3-text-blue"> 
		<span class="fa fa-user w3-large"></span>
		Alterar dados de funcionario</h5>
		<div class="w3-padding w3-white">
			<div class="w3-row">
        <div class="w3-container">
          <h4>
            <?php echo $funcionario['Funcionario']['nome']; ?>
            <?php echo $funcionario['Funcionario']['apelido']; ?>
            <a href="#" class="pull-right" onclick="history.back()" ><i class="fa fa-arrow-circle-left"></i> Voltar</a>
          </h4>
          <!-- Mensagem de status (Erro ou Exito) -->
          <div id="sucesso"></div>
          <!-- End mensagem de erro ou exito -->
        </div>

        <div class="w3-bar w3-light-grey">
          <button class="w3-bar-item w3-button" onclick="openCity('London')"><i class="fa fa-info"></i> Informa&ccedil;&atilde;o</button>
          <button class="w3-bar-item w3-button" onclick="openCity('Paris')"><i class="fa fa-address-card-o"></i> Dados/Contacto</button>
          <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')"><i class="fa fa-file-word-o"></i> Documentos</button>
        </div>
        <?php echo $this->Form->create('Funcionario', array('id' => 'formUpdateFuncionario')); ?>
        <?php $funcionario_id = $funcionario['Funcionario']['id']; ?>
        <?php $this->Form->input('id', array('value' => $funcionario_id, 'type' => 'hidden')); ?>
        <div id="London" style="display: block;" class="w3-container city">
          <div class="w3-half">

           <h4>Informa&ccedil;&otilde;es adicionais do funcion&aacute;rio</h4>
            <ul class="w3-ul">
              <li>
                <label class="w3-label">Carreira: </label> 
                  <?php echo $funcionario['Carreira']['nome']; ?>
              </li>
              <li>
                <label class="w3-label">Classe: </label>
                  <?php echo $this->Form->input('clazze_id', array('value' => $funcionario['Funcionario']['clazze_id'], 'label' => false, 'class' => 'w3-input w3-border', 'style' => 'width: 50%'));?>
              </li>
              <li>
                <label class="w3-label">Delega&ccedil;&atilde;o: </label>
                   <?php echo $this->Form->input('delegacao_id', array('value' => $funcionario['Funcionario']['delegacao_id'], 'label' => false, 'class' => 'w3-input w3-border', 'style' => 'width: 50%')); ?>
              </li>
              <li>
                <label class="w3-label">Departamento: </label>
                   <?php echo $funcionario['Funcionario']['departamento_id']; ?>
              </li>
              <li>
                <label class="w3-label">Data e hora de registo no sistema: </label>
                  <strong><?php echo $funcionario['Funcionario']['created']; ?></strong>
              </li>
            </ul>
          </div>
        </div>

        <div id="Paris" class="w3-container city" style="display:none">
          <div class="w3-third w3-padding">
            <h4>Dados pessoais</h4>
            <label class="w3-label">Nome:</label>
            <?php echo $this->Form->input('nome', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['nome'])); ?>
            <label class="w3-label">Apelido: </label class="w3-label">
              <?php echo $this->Form->input('apelido', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['apelido'])); ?>
              <label class="w3-label">Data de Nascimento: </label>
              <?php echo $this->Form->input('data_nascimento', array('label' => false, 'class' => 'w3-border w3-input datepicker','type' => 'text' , 'value' => $funcionario['Funcionario']['data_nascimento'])); ?>
              <label class="w3-label">Contacto Prim&aacute;rio: </label class="w3-label">
                <?php echo $this->Form->input('contacto_pessoal', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['contacto_pessoal'])); ?>
                <label class="w3-label">Genero: </label>
                <?php echo $this->Form->radio('sexo', array('M' => 'Masculino', 'F' => 'Feminino'), array('legend' => false, 'value' => $funcionario['Funcionario']['sexo'])); ?>
              </div>
              <div class="w3-third w3-padding">
                <h4>Contactos</h4>
                <label class="w3-label">Contacto alternativo: </label>  
                <?php echo $this->Form->input('contacto_alternativo', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['contacto_alternativo'])); ?>
                <label class="w3-label">Contacto da empresa: </label> 
                <?php echo $this->Form->input('contacto_trabalho', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['contacto_trabalho'])); ?>
                <label class="w3-label">Email: </label>
                <?php echo $funcionario['Funcionario']['email_pessoal']; ?>
                <?php echo $this->Form->input('email_pessoal', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['email_pessoal'])); ?>
                <label class="w3-label">Email corporativo: </label>
                <?php echo $this->Form->input('email_corporativo', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['email_corporativo'])); ?>
              </div>
            </div>

            <div id="Tokyo" class="w3-container city" style="display:none">
              <div class="w3-third w3-padding">
                <h4>Documentos de indentifica&ccedil;&atilde;o</h4>
                <label class="w3-label">NUIT: </label>
                   <?php echo $this->Form->input('nuit', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['nuit'])); ?>
                 <label class="w3-label">Numedo do BI: </label>
                   <?php echo $this->Form->input('bi', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['bi'])); ?>
                 <label class="w3-label">Data de Emiss&atilde;o: </label> 
                   <?php echo $this->Form->input('data_emissao', array('type' => 'text', 'label' => false, 'class' => 'w3-border w3-input datepicker', 'value' => $funcionario['Funcionario']['data_emissao'])); ?>
                <label class="w3-label">Local de emiss&atilde;o: </label> 
                   <?php echo $this->Form->input('local_emissao', array('label' => false, 'class' => 'w3-border w3-input', 'value' => $funcionario['Funcionario']['local_emissao'])); ?>
              </div>
              <div class="w3-third w3-padding">
                <h4>Documentos</h4>
                Sem documento
              </div>
            </div>

             <button id="submeter" class="w3-margin-left w3-hover-light-blue w3-button w3-round w3-large w3-blue">
              <i class="fa fa-check"></i>
              Submeter <!-- formul&aacute;rio -->
            </button>
             <div id="requesting" style="display: none">
              <?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
            </div>
            <?php echo $this->Html->image('perfil_default.png', array('class' => 'img img-responsive img-circle pull-right')); ?>
            
            <?php echo $this->Form->end(); ?>

            <script>
              function openCity(cityName) {
                var i;
                var x = document.getElementsByClassName("city");
                for (i = 0; i < x.length; i++) {
                 x[i].style.display = "none";  
               }
               document.getElementById(cityName).style.display = "block";  
             }
           </script>

         </div>
       </div>
     </div>
<?php
$data = $this->Js->get('#formUpdateFuncionario')->serializeForm(array('isForm' => true, 'inline' => true));
$success = $this->Js->request(
    array('controller' => 'funcionarios'),
    array('complete' => 'displayMessages()')
  );
$this->Js->get('#formUpdateFuncionario')->event(
 'submit',
 $this->Js->request(
  array(
   'action' => 'alterarDados/'.$funcionario_id,
   'controller' => 'funcionarios'
   ),
  array(
   'method' => 'post',
   'data' => $data,
   'dataExpression' => true,
   'async' => true,
   'update' => '#message',
   'before' => '$("#requesting").attr("style", "")',
   'complete' => '$("#requesting").attr("style", "display:none")',
   'success' => $success
   )
  )
 );
 ?>