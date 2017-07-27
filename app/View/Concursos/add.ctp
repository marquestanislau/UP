<!-- The Modal -->
<div id="addConcursoModal" class="w3-modal">
  <div class="w3-modal-content w3-round w3-animate-zoom">
    <header class="w3-container w3-text-blue"> 
      <span onclick="document.getElementById('addConcursoModal').style.display='none'" 
      class="w3-closebtn w3-hover-text-yellow">&times;</span>
      <h4><i class="fa fa-folder"></i> Adicionar concurso</h4>
    </header>

    <div class="w3-container w3-padding">
		<?php echo $this->Form->create('Concurso', array('url' => array('action' => 'adicionarModal'), 'class' => 'w3-container', 'id' => 'addForm')); ?>
			<div class="col-md-12 w3-center w3-animate-zoom" id="delegacao">
				<h2>Escolha uma Delega&ccedil;&atilde;o</h2>
				<?php  
					echo $this->Form->input('delegacao_id', array('label' => false, 'class' => 'w3-white w3-border w3-input w3-round w3-large', 'style' => 'width: 50%; margin: auto;'));
				?>
				<button onclick="toConcurso()" type="button" class="w3-button w3-margin-top w3-circle w3-large w3-blue w3-hover-orange">
					<i class="fa  fa-arrow-circle-right"></i>
				</button>
			</div>
		<div style="display:none;" id="concursos" class="row w3-animate-zoom">
			<div class="col-md-9">
				<?php 
					echo $this->Form->input('nome', array('class' => 'w3-input w3-round w3-hover-sand w3-border w3-large', 'id' => 'nome', 'placeholder' => 'O nome do concurso'));
				 ?>
			</div>
			<div class="col-md-4">
				<?php 
					echo $this->Form->input('data_aprovacao', array('label' => 'Data de aprova&ccedil;&atilde;o: ', 'class' => 'w3-white w3-border w3-input w3-round datepicker w3-text-blue', 'type' => 'text'));
				 ?>
			</div>
			
			<?php
				$hoje = Date('Y-m-d');
				echo $this->Form->input('data_registo', array('type' => 'hidden', 'value' => $hoje));
			?>
			<div id="salvar_processando" style="display: none;">
				<?php echo $this->Html->image('ajax/ajax-loader.gif', array('alt' => 'Por favor aguarde...')); ?>
			</div>
	    	<div class="w3-bar w3-container w3-margin-top w3-padding">
				<button class="w3-button w3-round w3-green">
					<span class='glyphicon glyphicon-ok'></span>
					Submeter
				</button>
				<?php echo $this->Form->end(); ?>
				
				<button type="button" class="w3-button w3-light-grey w3-round" onclick="clearInput('addForm', 'nome')">
					<i class="fa fa-plus"></i>
					Novo concurso
				</button>
				<button type="button" onclick="backToDelegacao()" class="w3-button w3-red w3-hover-orange w3-circle w3-large w3-right" onclick="clearInput('addForm', 'nome')">
					<i class="fa fa-arrow-circle-left"></i>
				</button>
	    	</div>
		</div>
    </div>
  </div>
</div>
<!-- code that makes the request to concurso controller and save data through ajax -->
<?php
	$data = $this->Js->get('#addForm')->serializeForm(array('isForm' => true, 'inline' => true));
	$this->Js->get('#addForm');
	$this->Js->event(
		"submit",
		$this->Js->request(
			array(
				'action' => 'adicionarModal'
			),
			array(
				'update' => '#message',
				'data' => $data,
				'dataExpression' => true,
				'method' => 'post',
				'before'   => '$("#salvar_processando").attr("style", "")', 
				'complete' => '$("#salvar_processando").attr("style", "display:none")',
				'success' => $this->Js->request(
								array('action' => 'index'),
								array(
									'method' => 'post',
									'async' => true,
									'update' => '#table-body',
									'complete' => 'displayMessages()'
								)
							)
			)
		)
	);
?>