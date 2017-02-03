<div class="row">
	<h6 class="w3-text-grey">Transferencia</h6>
	<div class="col-md-11 w3-white w3-border">
		<h5 class="w3-center w3-text-blue">Adicionar transferencia</h5>
		<div class="w3-row">
		<h5>Informacoes da transferencia</h5>
			<div class="w3-container w3-third">
				<i class="fa fa-user"></i>
				<label class="w3-label">Funcion&aacute;rio</label>
				<input class="w3-input" type="text">
				<?php echo $this->Form->input('id', array('value' => $employee)); ?>

				<i class="fa fa-calendar"></i>
				<label class="w3-label datepicker">Data de transferencia</label>
				<input class="w3-input" type="text">
			</div>
		</div>
		<div class="w3-row">
			<h5 class="w3-margin-top w3-text-brown">Transferir para</h5>
			<div class="w3-container w3-third">
				<label class="w3-label">Delega&ccedil;&atilde;o</label>
				<input class="w3-input" type="text">

				<label class="w3-label">Departamento</label>
				<input class="w3-input" type="text">
			</div>
			<h5>Outros detalhes</h5>
			<div class=" w3-container w3-third">
				<label class="w3-label">Descricao</label>
				<textarea class="w3-input" cols="20"></textarea>
			</div>
		</div>
		<div class="w3-row">
			<div class=" w3-container w3-third w3-margin-top w3-margin-bottom">
				<button class="w3-btn w3-large w3-blue">Submeter</button>
			</div>
		</div>
	</div>
</div>