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

	$( "#sucesso" ).change(function() {
		alert('lalalu');
	  $( "#sucesso" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );
	});
	$('#sucesso').bind( "contentchange", function(){
				 alert("pppp");// how to capture this event
	 });

});
