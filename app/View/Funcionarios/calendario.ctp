<?php
	echo $this->Html->css('fullcalendar.min');
	echo $this->Html->css('fullcalendar.print.min');
	echo $this->Html->script('moment.min');
	echo $this->Html->script('fullcalendar.min');
 ?>
 <script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			defaultDate: '2016-12-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2016-12-12'
				},
				{
					title: 'Long Event',
					start: '2016-12-07',
					end: '2016-12-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-12-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-12-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2016-12-11',
					end: '2016-12-13'
				},
				{
					title: 'Meeting',
					start: '2016-12-12T10:30:00',
					end: '2016-12-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2016-12-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2016-12-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2016-12-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2016-12-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2016-12-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2016-12-28'
				}
			]
		});

	});

</script>
<h5 class="w3-text-grey"><i class="fa fa-calendar"></i> Calendario</h5>
<div class="row w3-text-dark-grey w3-border w3-white w3-padding">
	<div class="col-md-3">
		<h5 class="w3-text-blue">Selecione um calendario</h5>
		<ul class="nav nav-pills nav-stacked">
			<li><a href="#">Calendario da organizacao</a></li>
			<li><a href="#">Calendario da equipe</a></li>
			<li><a href="#">Meu calendario</a></li>
		</ul>
		<p class="w3-text-blue">Filtros para calendario</p>
		Departamento
		<input class="w3-input w3-border w3-tiny">
		Classe
		<input class="w3-input w3-border w3-tiny">
		Categoria
		<input class="w3-input w3-border w3-tiny">
	</div>
	<div class="col-md-8">
		<div id="calendar"></div>
	</div>
</div>
