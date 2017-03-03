<?php echo $this->Html->script('filter.js'); ?>
<div id="content" class="row">
	<h4 class="w3-text-grey"><i class="fa fa-users"></i> Lista de funcion&aacute;rios</h4>
	<div class="col-md-10 w3-border w3-white w3-padding">
		<input onkeyup="filtro()" id="procurar" class="pull-right w3-input w3-border w3-animate-input" style="width: 30%" placeholder="Procure digitando o primeiro nome">
		<table id="tabelaFiltro" class="table table-striped">
			<thead>
				<th>Nome</th>
				<th>Apelido</th>
				<th>Contacto</th>
				<th>Sexo</th>
				<th>Data de nascimento</th>
				<th></th>
			</thead>
			<tbody>
				<?php	
					include('apenas_funcionarios.ctp');
				?>	
			</tbody>
		</table>
	</div>
</div>