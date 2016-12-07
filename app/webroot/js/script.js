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
});



