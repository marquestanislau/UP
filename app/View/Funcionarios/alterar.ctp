<?php 
  echo $this->Html->script('fine-uploader/fine-uploader');
  echo $this->Html->css('fine-uploader/fine-uploader-gallery.min');

 ?>
 <script type="text/template" id="qq-template-gallery">
         <div class="qq-uploader-selector qq-uploader qq-gallery" qq-drop-area-text="Arraste os ficheiros para aqui">
             <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
                 <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
             </div>
             <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
                 <span class="qq-upload-drop-area-text-selector"></span>
             </div>
             <div class="qq-upload-button-selector qq-upload-button">
                 <div><i class="fa fa-upload"></i></div>
             </div>
             <span class="qq-drop-processing-selector qq-drop-processing">
                 <!-- <span>Processing dropped files...</span> -->
                 <span>A processar os ficheiros...</span>
                 <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
             </span>
             <ul class="qq-upload-list-selector qq-upload-list" role="region" aria-live="polite" aria-relevant="additions removals">
                 <li>
                     <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                     <div class="qq-progress-bar-container-selector qq-progress-bar-container">
                         <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                     </div>
                     <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                     <div class="qq-thumbnail-wrapper">
                         <img class="qq-thumbnail-selector" qq-max-size="120" qq-server-scale>
                     </div>
                     <button type="button" class="qq-upload-cancel-selector qq-upload-cancel">X</button>
                     <button type="button" class="qq-upload-retry-selector qq-upload-retry">
                         <span class="qq-btn qq-retry-icon" aria-label="Retry"></span>
                         <!-- Retry -->
                         Tente de novo
                     </button>

                     <div class="qq-file-info">
                         <div class="qq-file-name">
                             <span class="qq-upload-file-selector qq-upload-file"></span>
                             <span class="qq-edit-filename-icon-selector qq-edit-filename-icon" aria-label="Edit filename"></span>
                         </div>
                         <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                         <span class="qq-upload-size-selector qq-upload-size"></span>
                         <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">
                             <span class="qq-btn qq-delete-icon" aria-label="Delete"></span>
                         </button>
                         <button type="button" class="qq-btn qq-upload-pause-selector qq-upload-pause">
                             <span class="qq-btn qq-pause-icon" aria-label="Pause"></span>
                         </button>
                         <button type="button" class="qq-btn qq-upload-continue-selector qq-upload-continue">
                             <span class="qq-btn qq-continue-icon" aria-label="Continue"></span>
                         </button>
                     </div>
                 </li>
             </ul>

             <dialog class="qq-alert-dialog-selector">
                 <div class="qq-dialog-message-selector"></div>
                 <div class="qq-dialog-buttons">
                     <button type="button" class="qq-cancel-button-selector">Close</button>
                 </div>
             </dialog>

             <dialog class="qq-confirm-dialog-selector">
                 <div class="qq-dialog-message-selector"></div>
                 <div class="qq-dialog-buttons">
                     <button type="button" class="qq-cancel-button-selector">No</button>
                     <button type="button" class="qq-ok-button-selector">Yes</button>
                 </div>
             </dialog>

             <dialog class="qq-prompt-dialog-selector">
                 <div class="qq-dialog-message-selector"></div>
                 <input type="text">
                 <div class="qq-dialog-buttons">
                     <button type="button" class="qq-cancel-button-selector">Cancel</button>
                     <button type="button" class="qq-ok-button-selector">Ok</button>
                 </div>
             </dialog>
         </div>
     </script>
<div class="row">
    <div class="w3-padding w3-white">
      <div class="w3-row">
        <div class="w3-container w3-blue-gray"> 
      	   <h5 class="w3-center"> 
      		  <span class="fa fa-user w3-large"></span>
      	   	Alterar dados de funcionario
          </h5>
          <h4 id="nome">
            <?php echo $funcionario['Funcionario']['nome']; ?>
            <?php echo $funcionario['Funcionario']['apelido']; ?>
            <a href="#" class="pull-right" onclick="history.back()" ><i class="fa fa-arrow-circle-left"></i> Voltar</a>
          </h4>
        </div>

        <div class="w3-bar w3-light-grey">
          <button class="w3-bar-item w3-button" onclick="openCity('London')"><i class="fa fa-info"></i> Informa&ccedil;&atilde;o</button>
          <button class="w3-bar-item w3-button" onclick="openCity('Paris')"><i class="fa fa-address-card-o"></i> Dados/Contacto</button>
          <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')"><i class="fa fa-file-word-o"></i> Documentos</button>
        </div>
        <?php echo $this->Form->create('Funcionario', array('id' => 'formUpdateFuncionario')); ?>
        <?php $funcionario_id = $funcionario['Funcionario']['id']; ?>
        <?php $this->Form->input('id', array('value' => $funcionario_id, 'type' => 'hidden')); ?>
        <?php $this->Form->input('escalao_id', array('value' => $funcionario['Funcionario']['escalao_id'], 'type' => 'hidden')); ?>
        <div id="London" style="display: block;" class="w3-container city w3-text-grey">
          <div class="w3-half">

           <h4>Informa&ccedil;&otilde;es adicionais do funcion&aacute;rio</h4>
            <ul class="w3-ul">
              <li>
                <label class="w3-label">Carreira: </label> 
                  <?php echo $funcionario['Carreira']['nome']; ?>
              </li>
              <li>
                <?php if ($funcionario['Concurso']['tipo'] == 0) { ?>
                  <label class="w3-label">Classe: </label>
                  <?php echo $this->Form->input('clazze_id', array('value' => $funcionario['Funcionario']['clazze_id'], 'label' => false, 'class' => 'w3-input w3-round w3-margin-bottom w3-border', 'style' => 'width: 50%'));?>
                <?php } else { ?>
                  <label class="w3-label">Categoria: </label>
                  <?php echo $this->Form->input('categoria_id', array('value' => $funcionario['Funcionario']['categoria_id'], 'label' => false, 'class' => 'w3-input w3-round w3-margin-bottom w3-border', 'style' => 'width: 50%'));?>
                <?php } ?>
              </li>
              <li>
                <label class="w3-label">Delega&ccedil;&atilde;o: </label>
                   <?php echo $this->Form->input('delegacao_id', array('value' => $funcionario['Funcionario']['delegacao_id'], 'label' => false, 'class' => 'w3-input w3-round w3-margin-bottom w3-border', 'style' => 'width: 50%')); ?>
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

        <div id="Paris" class="w3-container city w3-text-grey" style="display:none">
          <div class="w3-third w3-padding">
            <h4>Dados pessoais</h4>
            <label class="w3-label">Nome:</label>
            <?php echo $this->Form->input('nome', array('label' => false, 'class' => 'w3-border w3-input w3-round w3-margin-bottom', 'value' => $funcionario['Funcionario']['nome'])); ?>
            <label class="w3-label">Apelido: </label class="w3-label">
              <?php echo $this->Form->input('apelido', array('label' => false, 'class' => 'w3-border w3-input w3-round w3-margin-bottom', 'value' => $funcionario['Funcionario']['apelido'])); ?>
              <label class="w3-label">Data de Nascimento: </label>
              <?php echo $this->Form->input('data_nascimento', array('label' => false, 'class' => 'w3-border w3-input w3-round w3-margin-bottom datepicker','type' => 'text' , 'value' => $funcionario['Funcionario']['data_nascimento'])); ?>
              <label class="w3-label">Contacto Prim&aacute;rio: </label class="w3-label">
                <?php echo $this->Form->input('contacto_pessoal', array('label' => false, 'class' => 'w3-border w3-input w3-round w3-margin-bottom', 'value' => $funcionario['Funcionario']['contacto_pessoal'])); ?>
                <label class="w3-label">Genero: </label>
                <?php echo $this->Form->radio('sexo', array('M' => 'Masculino', 'F' => 'Feminino'), array('legend' => false, 'value' => $funcionario['Funcionario']['sexo'])); ?>
              </div>
              <div class="w3-third w3-padding">
                <h4>Contactos</h4>
                <label class="w3-label">Contacto alternativo: </label>  
                <?php echo $this->Form->input('contacto_alternativo', array('label' => false, 'class' => 'w3-border w3-input w3-round w3-margin-bottom', 'value' => $funcionario['Funcionario']['contacto_alternativo'])); ?>
                <label class="w3-label">Contacto da empresa: </label> 
                <?php echo $this->Form->input('contacto_trabalho', array('label' => false, 'class' => 'w3-border w3-input w3-round w3-margin-bottom', 'value' => $funcionario['Funcionario']['contacto_trabalho'])); ?>
                <label class="w3-label">Email: </label>
                <?php echo $funcionario['Funcionario']['email_pessoal']; ?>
                <?php echo $this->Form->input('email_pessoal', array('label' => false, 'class' => 'w3-border w3-input w3-round w3-margin-bottom', 'value' => $funcionario['Funcionario']['email_pessoal'])); ?>
                <label class="w3-label">Email corporativo: </label>
                <?php echo $this->Form->input('email_corporativo', array('label' => false, 'class' => 'w3-border w3-input w3-round w3-margin-bottom', 'value' => $funcionario['Funcionario']['email_corporativo'])); ?>
              </div>
            </div>

            <div id="Tokyo" class="w3-container city w3-text-grey" style="display:none">
              <div class="w3-third w3-padding">
                <h4>Documentos de indentifica&ccedil;&atilde;o</h4>
                <label class="w3-label">NUIT: </label>
                   <?php echo $this->Form->input('nuit', array('label' => false, 'class' => 'w3-border w3-input w3-round w3-margin-bottom', 'value' => $funcionario['Funcionario']['nuit'])); ?>
                 <label class="w3-label">N&uacute;mero do BI: </label>
                   <?php echo $this->Form->input('bi', array('label' => false, 'class' => 'w3-border w3-input w3-round w3-margin-bottom', 'value' => $funcionario['Funcionario']['bi'])); ?>
                 <label class="w3-label">Data de Emiss&atilde;o: </label> 
                   <?php echo $this->Form->input('data_emissao', array('type' => 'text', 'label' => false, 'class' => 'w3-border w3-input w3-round w3-margin-bottom datepicker', 'value' => $funcionario['Funcionario']['data_emissao'])); ?>
                <label class="w3-label">Local de emiss&atilde;o: </label> 
                   <?php echo $this->Form->input('local_emissao', array('label' => false, 'class' => 'w3-border w3-input w3-round w3-margin-bottom', 'value' => $funcionario['Funcionario']['local_emissao'])); ?>
              </div>
              <div class="w3-rest w3-padding">
                <h4 class="w3-text-grey">Documentos</h4>
                    <p class="w3-text-brown">S&atilde;o aceites os documentos com estes formatos: ['jpeg', 'jpg', 'gif', 'png', 'pdf']</p>
                <!-- Fine Uploader DOM Element
                    ====================================================================== -->
                    <div id="fine-uploader-gallery"></div>

                    <!-- Your code to create an instance of Fine Uploader and bind to the DOM/template
                    ====================================================================== -->
                    <script>
                        var galleryUploader = new qq.FineUploader({
                            element: document.getElementById("fine-uploader-gallery"),
                            template: 'qq-template-gallery',
                            // debug: true,
                            request: {
                                endpoint: '/sigerh/funcionarios/alterar/<?php echo $funcionario_id; ?>'
                            },
                            thumbnails: {
                                placeholders: {
                                    waitingPath: '/sigerh/js/fine-uploader/placeholders/waiting-generic.png',
                                    notAvailablePath: '/sigerh/js/fine-uploader/placeholders/not_available-generic.png'
                                }
                            },
                            validation: {
                                allowedExtensions: ['jpeg', 'jpg', 'gif', 'png', 'pdf']
                            }
                        });
                    </script>
              </div>
            </div>

             <button id="submeter" class="w3-margin-left w3-hover-text-white w3-hover-light-green w3-button w3-large w3-green">
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
    array(
        'controller' => 'funcionarios',
        'action' => 'novoNome/'.$funcionario_id
      ),
    array(
        'complete' => 'displayMessages()',
        'update' => '#nome',
        'method' => 'post'
      )
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