<div class="col-md-11 w3-white w3-border w3-padding">
	<h5 class="w3-text-blue"><i class="fa fa-folder"></i> Entrevistas</h5>
	<a href="#" onclick="document.getElementById('settings').style.display='block'" class="pull-right"><span class="glyphicon glyphicon-cog"></span></a>
	<div id="settings" class="w3-modal">
		<div class="w3-modal-content">
			<header class="w3-container w3-blue">
				<span onclick="document.getElementById('settings').style.display='none'
				" class="w3-closebtn">&times;</span>
				<h6>configuracao para entrevista de emprego</h6>
			</header>
			<div class="w3-container w3-padding">
				<h5>Configuracao de Email</h5>
				<table>
					<tr>
						<td>Nao enviar emails para os Entrevistados (Candidatos)</td>
						<td><input type="checkbox" class="w3-check" name=""></td>
					</tr>
					<tr>
						<td>Nao enviar emails para os Entrevistadores (Funcionarios)</td>
						<td><input type="checkbox" class="w3-check" name=""></td>
					</tr>
				</table>
				<button class="w3-blue w3-btn">Salvar dados</button>
			</div>
			<footer class="w3-container"></footer>
		</div>
	</div>
	<table class="table">
		<thead class="w3-sand w3-text-blue">
			<th>Carreira</th>
			<th>Hora da entrevista</th>
			<th>Data</th>
			<th>Local da entrevista</th>
		</thead>
	</table>
	<div class="row">
		<div class="col-md-6">
			<button onclick="document.getElementById('entrevista').style.display='block'" class="w3-btn w3-blue">Nova entrevista</button>
		</div>
		<div class="col-md-6">
			<input placeholder="Procure aqui" class="w3-input w3-border" type="" name="">
		</div>
		<?php include('entrevista/janela_modal.ctp'); ?>
	</div>
</div>
<button id="demo-show-toast" onclick="displayMessages()" class="mdl-button mdl-js-button mdl-button--raised" type="button">Show Toast</button>
<div id="message" class="mdl-js-snackbar mdl-snackbar w3-green">
  <div class="mdl-snackbar__text"></div>
  <button class="mdl-snackbar__action" type="button"></button>
</div>
<script>
/*(function() {
  'use strict';
  window['counter'] = 0;
  var snackbarContainer = document.querySelector('#demo-toast-example');
  var showToastButton = document.querySelector('#demo-show-toast');
  showToastButton.addEventListener('click', function() {
    'use strict';
    var data = {message: 'Estanislau Samussone Marques adsfjakjfladjfkajdfjaksjfkjasdfjkasfkj # ' + ++counter};
    snackbarContainer.MaterialSnackbar.showSnackbar(data);
  });
}());*/

	/*function displayMessages() {
		var snackbarContainer = document.querySelector('#message');
		var data = {message: 'Estanislau Samussone Marques adsfjakjfladjfkajdfjaksjfkjasdfjkasfkj # '};
		snackbarContainer.MaterialSnackbar.showSnackbar(data);
	}*/
</script>