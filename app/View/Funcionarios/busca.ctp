<?php 

	echo $this->Form->create('Funcionario', array('id' => 'funcionarioSearch'));
	
 ?>
 <br>
 <div class="row">
 	<!-- <div class="col-md-3 w3-light-grey w3-round"> -->
 	<div class="col-md-3 alert alert-info w3-round">
 		<h4 class="w3-border-bottom w3-text-blue w3-center"><i class="fa fa-filter"></i> Filtros</h4>
 		<?php 
 			echo $this->Form->input('posicao', array('class' => 'w3-input w3-text-grey w3-round w3-border w3-white w3-margin-bottom', 'id' => 'posicao', 'label' => 'Posi&ccedil;&atilde;o'));
 			echo $this->Form->input('concurso_id', array('class' => 'w3-input w3-text-grey w3-round w3-border w3-white w3-margin-bottom', 'id' => 'concurso', 'empty' => 'Escolha o concurso'));
 			echo $this->Form->input('carreira_id', array('class' => 'w3-input w3-text-grey w3-round w3-border w3-white w3-margin-bottom', 'id' => 'carreira'));
 			echo $this->Form->input('categoria_id', array('class' => 'w3-input w3-text-grey w3-round w3-border w3-white w3-margin-bottom', 'id' => 'categoria', 'empty' => 'Escolha a categoria'));
 			echo $this->Form->input('delegacao_id', array('class' => 'w3-input w3-text-grey w3-round w3-border w3-white w3-margin-bottom', 'id' => 'delegacao', 'empty' => 'Escolha a delegação'));
 		 ?>
 		 <div id="requesting" class="w3-row-padding" style="display:none;">
 		 	<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
 		 	A processar...
 		 </div>
 	</div>
 	<div class="col-md-9">
 		<div class="w3-bar">
	 		<?php 
	 			echo $this->Form->input('nome', array('class' => 'w3-input w3-hover-sand w3-white w3-text-black w3-border w3-bar-item w3-light-grey', 'label' => false, 'style' => 'width: 80%', 'placeholder' => 'Procure usando o nome'));
	 		 ?>
	 		 <button type="button" id="btnSubmit" class="w3-bar-item w3-green w3-button w3-border-green w3-border w3-hover-light-green w3-hover-text-white" style="width: 20%;">
	 		 	<i class="fa fa-search"></i>
	 		 	Procurar
	 		 </button>
 		</div>
 		 <div id="result">
 		 	<h4>Resultado:</h4>
 		 	<div class="w3-center" style="margin: 20%;">
	 		 	<i class="fa fa-user w3-opacity w3-xxxlarge"></i>
 		 	</div>
 		 </div>
 	</div>
 </div>
 <?php 
	echo $this->Form->end();
  ?>