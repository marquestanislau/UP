$(document).ready(function(){
	$('#nome').blur(function() {
		$.post(
			'/sigerh/usuarios/validate_form', 
			{field: $('#nome').attr('id'), value: $('#nome').val()},
			handleNameValidation
		);
	});

	function handleNameValidation(error) {
		if(error.length > 0) {
			if($('#name-notEmpty').length == 0) {
				$('#nome').after('<div id="#name-notEmpty" class="alert alert-warning">' + error + '</div>');
			}
		} else {
			$('#name-notEmpty').remove();
		}
	}
	
	$('#UsuarioApelido').blur(function() {
		$.post(
			'/sigerh/usuarios/validate_form', 
			{field: $('#UsuarioApelido').attr('id'), value: $('#UsuarioApelido').val()},
			handleApelidoValidation
		);
	});

	function handleApelidoValidation(error) {
		if(error.length > 0) {
			if($('#apelido-notEmpty').length == 0) {
				$('#UsuarioApelido').after('<div id="#apelido-notEmpty" class="alert alert-warning">' + error + '</div>');
			}
		} else {
			$('#apelido-notEmpty').remove();
		}
	}
});