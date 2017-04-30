<div class="row">
	<div class="col-md-11 w3-white w3-border">
	<h6 class="w3-text-grey"><i class="fa fa-refresh"></i> Transferencia</h6>
		<?php echo $this->Form->create('Funcionario');?>
		<h5 class="w3-center w3-text-blue">Adicionar transferencia</h5>
		<div class="w3-row">
		<h5>Informacoes da transferencia</h5>
			<div class="w3-container w3-third">
				<i class="fa fa-user"></i>
				<label class="w3-label">Funcion&aacute;rio</label>
				<?php echo $this->Form->input('funcionario', array('options' => $employees, 'empty' => '-- Escolha o funcionario --', 'class' => 'w3-input w3-border', 'label' => false)); ?>

				<i class="fa fa-calendar"></i>
				<label class="w3-label">Data de transferencia</label>
				<input class="w3-input w3-border datepicker" type="text">
			</div>
		</div>
		<div class="w3-row">
			<h5 class="w3-margin-top w3-text-brown">Transferir para</h5>
			<div class="w3-container w3-third">
				<label class="w3-label">Delega&ccedil;&atilde;o</label>
				<?php echo $this->Form->input('Funcionario.delegacao_id', array('options' => $delegacoes, 'class' => 'w3-input w3-border', 'label' => false, 'empty' => '-------------'));?>

				<label class="w3-label">Departamento</label>
				<input class="w3-input w3-border" type="text">
			</div>
			<h5>Outros detalhes</h5>
			<div class=" w3-container w3-third">
				<label class="w3-label">Descricao</label>
				<textarea class="w3-input w3-border" cols="20"></textarea>
			</div>
		</div>
		<div class="w3-row">
			<div class=" w3-container w3-third w3-margin-top w3-margin-bottom">
				<button class="w3-btn w3-large w3-green">Submeter</button>
			</div>
		</div>
		<?php echo $this->Form->end();?>
	</div>
</div>