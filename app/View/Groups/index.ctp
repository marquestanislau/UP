<div class="w3-padding row">
	<h4><i class="fa fa-group"></i> Grupos disponiveis para os utilizadores do sistema</h4>
	<div class="col-md-12">
		<div class="w3-bar w3-margin-bottom w3-round w3-light-gray">
			<button onclick="document.getElementById('addGroupo').style.display='block'" class="w3-button w3-bar-item w3-green"><i class="fa fa-plus"></i> Adicionar grupo</button>
			<a href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'users')) ?>" class="w3-button w3-bar-item"><i class="fa fa-users"></i> Lista de utilizadores</a>
		</div>
		<table class="w3-round table table-striped">
			<tr class="w3-teal">
				<th>Nome do grupo</th>
				<th>Descri&ccedil;&atilde;o</th>
				<th>A&ccedil;c&otilde;es</th>
			</tr>
			<tbody id="table-body">
			<?php include('grupos.ctp'); ?>
			</tbody>
		</table>
	</div>
</div>
<?php include('adicionar.ctp'); ?>