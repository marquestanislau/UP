<?php echo $this->Html->script('filter.js'); ?>
<div id="content" class="row">
	<h4 class="w3-text-grey"><i class="fa fa-users"></i> Lista de funcion&aacute;rios</h4>
	<div class="col-md-10 w3-border w3-white w3-padding">
		<input onkeyup="filtro()" id="procurar" class=" w3-margin-bottom pull-right w3-input w3-border w3-animate-input" style="width: 30%" placeholder="Procure digitando o primeiro nome">
		<table id="tabelaFiltro" class="table table-striped w3-border w3-border-dark-grey">
			<thead class="w3-dark-grey">
				<th>Nome</th>
				<th>Apelido</th>
				<th>Contacto</th>
				<th>Sexo</th>
				<th>Data de nascimento</th>
				<th></th>
			</thead>
			<tbody id="table-body">
				<?php	
					include('apenas_funcionarios.ctp');
				?>	
			</tbody>
		</table>
		<div class="w3-bar w3-light-grey">
		  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-print"></i> Imprimir</a>
		  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-file"></i> Relatorios</a>
		  <a href="#" class="w3-bar-item w3-button">Link 2</a>
		  <input type="text" class="w3-bar-item w3-input w3-white w3-border" placeholder="Search..">
		  <a href="#" class="w3-bar-item w3-button w3-green">Go</a>
		</div
	</div>
</div>