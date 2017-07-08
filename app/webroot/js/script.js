$(document).ready(function() {
	$('#novo').click(
		function() {
			$('#UsuarioAddForm')[0].reset();
			$('#nome').focus();
		}
		);
	$('#catCancelBtn').click(
		function() {
			$('#formAdd')[0].reset();
			$('#nome').focus();
		}
		);

	$('.datepicker').datepicker({
		startDate:'01/01/1996',
		dateFormat: "yy-mm-dd",
		changeMonth: true,
		changeYear: true
	});
});
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
	var data = {message: 'Estanislau Samussone Marques'};
	snackbarContainer.MaterialSnackbar.showSnackbar(data);
}
