<!-- The Modal -->
<div id="addConcursoModal" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-purple"> 
      <span onclick="document.getElementById('addConcursoModal').style.display='none'" 
      class="w3-closebtn">&times;</span>
      <h2>Adicionar concurso</h2>
		<?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span> Lista de concursos', array('action' => 'index'), array('escape' => false, 'class' => 'pull-right')); ?>
    </header>

    <div class="w3-container" style="padding: 30px;">
	    <div id="salvar_exito"></div>
	    <div id="salvar_erro"></div>
		<?php echo $this->Form->create('Concurso', array('url' => array('action' => 'adicionarModal'), 'class' => 'w3-container', 'id' => 'addForm')); ?>
		<?php
			echo $this->Form->input('data_aprovacao', array('label' => 'Data de aprova&ccedil;&atilde;o: '));
			echo $this->Form->input('nome', array('class' => 'w3-input w3-hover-sand w3-border'));
			echo $this->Form->input('data_registo', array('type' => 'hidden'));
		?>
		<div id="salvar_processando" style="display: none;">
			<?php echo $this->Html->image('ajax/ajax-loader.gif', array('alt' => 'Por favor aguarde...')); ?>
		</div>
    </div>

    <footer style="padding: 20px;" class="w3-container w3-white">
		<button class="w3-large w3-btn w3-green">
			<span class='glyphicon glyphicon-ok'></span>
			Submeter
		</button>
		<?php echo $this->Form->end(); ?>
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
				'update' => '#salvar_exito',
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
									'update' => '#table-body'
								)
							)
			)
		)
	);
?>