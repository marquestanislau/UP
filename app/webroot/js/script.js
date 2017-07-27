function selecionador(id) {
	// alert('.datepicker'+id);
	$('#datepicker'+id).datepicker({
		startDate:'01/01/1996',
		dateFormat: "yy-mm-dd",
		changeMonth: true,
		changeYear: true
	});
}

function selecionadorPorId(id) {
	// alert('.datepicker'+id);
	$('#'+id).datepicker({
		startDate:'01/01/1996',
		dateFormat: "yy-mm-dd",
		changeMonth: true,
		changeYear: true
	});
}

function displayMessages() {
	var snackbarContainer = document.querySelector('#message');
	// var data = {message: 'Estanislau Samussone Marques'};
	var data = {message: ''};
	snackbarContainer.MaterialSnackbar.showSnackbar(data);
}
// Hardecoded to solve multiple ajax requests: Estanislau Marques
function displayMessagesVer2() {
	var snackbarContainer = document.querySelector('#message');
	var data = {message: 'As carreiras foram alteradas (Adicionadas/Removidas)'};
	// var data = {message: ''};
	snackbarContainer.MaterialSnackbar.showSnackbar(data);
}
// used to clear a form and focus the first field of it
function clearInput(id, foco) {
	// document.getElementById(id).value = '';
	var form = document.getElementById(id);
	var changeFoco = document.getElementById(foco);
	form.reset();
	changeFoco.focus();


}

// Capacidade de troca de div para a proxima na view add concursos

function toConcurso() {
	document.getElementById('delegacao').style.display = 'none';
	document.getElementById('concursos').style.display = 'block';
}

function backToDelegacao() {
	document.getElementById('concursos').style.display = 'none';
	document.getElementById('delegacao').style.display = 'block';
}

function clearInputs(...clazz) {
	todos = document.getElementsByClassName(clazz);
	for (i = 0; i < todos.length; i++) {
		todos[i].value = '';
	}
}