<?php echo $this->Html->script('filter.js'); ?>
<div id="content" class="row">
	<div class="w3-white w3-padding">
	<h6 class="w3-text-blue"><i class="fa fa-users"></i> Lista de funcion&aacute;rios</h6>
		<div class="w3-bar w3-light-grey">
		  <a href="#" class="w3-bar-item w3-button w3-hover-text-dark-grey"><i class="fa fa-print"></i> Imprimir</a>
		  <a href="#" class="w3-bar-item w3-button w3-hover-text-dark-grey"><i class="fa fa-file"></i> Relat&oacute;rios</a>
		  <input onkeyup="filtro()" style="width: 50%;" id="procurar" class="w3-round w3-white w3-bar-item w3-input w3-border" placeholder="Procure digitando o primeiro nome">
		  <!-- <input type="text" class="w3-bar-item w3-input w3-white w3-border" placeholder="Search.."> -->
		  <!-- <a href="<?php echo $this->Html->url(array('action' => 'excepcao', 'controller' => 'funcionarios'));?>" class="w3-bar-item w3-button w3-green "> -->
		<button onclick="document.getElementById('yesNo').style.display='block'" class="w3-bar-item w3-green">
		    <i class="fa fa-user"></i>	
		    Adicionar funcion&aacute;rio
	    </button>
		</div>
		<table id="tabelaFiltro" class="table table-striped w3-topbar w3-border-light-grey w3-margin-top">
			<thead class="w3-text-blue">
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
	</div>
</div>
<?php include('modal/yesNo.ctp'); ?>