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
