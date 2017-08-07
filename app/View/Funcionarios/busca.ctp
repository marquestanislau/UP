<?php 

	echo $this->Form->create('Funcionario', array('id' => 'funcionarioSearch'));
	
 ?>
 <br>
 <div class="row">
 	<div class="col-md-3 w3-light-grey w3-round">
 		<h4 class="w3-border-bottom w3-center"><i class="fa fa-filter"></i> Filtros</h4>
 		<?php 
 			echo $this->Form->input('concurso_id', array('class' => 'w3-input w3-text-grey w3-round w3-border w3-white w3-margin-bottom'));
 			echo $this->Form->input('carreira_id', array('class' => 'w3-input w3-text-grey w3-round w3-border w3-white w3-margin-bottom'));
 			echo $this->Form->input('categoria_id', array('class' => 'w3-input w3-text-grey w3-round w3-border w3-white w3-margin-bottom'));
 			echo $this->Form->input('delegacao_id', array('class' => 'w3-input w3-text-grey w3-round w3-border w3-white w3-margin-bottom'));
 			echo $this->Form->input('posicao', array('class' => 'w3-input w3-text-grey w3-round w3-border w3-white w3-margin-bottom'));
 		 ?>
 	</div>
 	<div class="col-md-9">
 		<div class="w3-bar w3-round">
	 		<?php 
	 			echo $this->Form->input('nome', array('class' => 'w3-input w3-text-black w3-border w3-border-blue w3-bar-item w3-large', 'label' => false, 'style' => 'width: 80%', 'placeholder' => 'Digite o nome do funcionario'));
	 		 ?>
	 		 <button class="w3-bar-item w3-button w3-border w3-border-blue w3-hover-light-blue w3-blue w3-large" style="width: 20%;">
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