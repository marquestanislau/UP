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

	$('#employeeForm').showProgress();

	$(window).scroll(function() {     
	    var scroll = $(window).scrollTop();
	    if (scroll > 0) {
	        $("#header").addClass("active");
	    }
	    else {
	        $("#header").removeClass("active");
	    }
	});

	$('#table').DataTable( {
        "scrollY":        "400px",
        "scrollCollapse": true,
        "paging":         false
    } );

});
