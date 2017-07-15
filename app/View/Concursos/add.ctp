<!-- The Modal -->
<div id="addConcursoModal" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-blue"> 
      <span onclick="document.getElementById('addConcursoModal').style.display='none'" 
      class="w3-closebtn w3-hover-text-yellow">&times;</span>
      <h4><i class="fa fa-folder"></i> Adicionar concurso</h4>
    </header>

    <div class="w3-container" style="padding: 30px;">
		<?php echo $this->Form->create('Concurso', array('url' => array('action' => 'adicionarModal'), 'class' => 'w3-container', 'id' => 'addForm')); ?>
		<?php
			$hoje = Date('Y-m-d');
			echo $this->Form->input('data_aprovacao', array('label' => 'Data de aprova&ccedil;&atilde;o: ', 'class' => 'w3-white'));
			echo $this->Form->input('nome', array('class' => 'w3-input w3-hover-sand w3-border', 'id' => 'nome'));
			echo $this->Form->input('data_registo', array('type' => 'hidden', 'value' => $hoje));
		?>
		<div id="salvar_processando" style="display: none;">
			<?php echo $this->Html->image('ajax/ajax-loader.gif', array('alt' => 'Por favor aguarde...')); ?>
		</div>
    </div>

    <footer style="padding: 20px;" class="w3-container w3-white">
		<button class="w3-button w3-border">
			<span class='glyphicon glyphicon-ok'></span>
			Submeter
		</button>
		<?php echo $this->Form->end(); ?>
		
		<button class="w3-button w3-border" onclick="clearInput('addForm', 'nome')">
			<i class="fa fa-plus"></i>
			Novo concurso
		</button>
    </footer>
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