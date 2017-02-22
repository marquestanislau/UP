<div id="confirmacao<?php echo $id; ?>" class="w3-modal">
	<div class="w3-modal-content">
		<header class="w3-container w3-black">
			<span onclick="document.getElementById('confirmacao<?php echo $id; ?>').style.display='none'"
		 class="w3-closebtn">&times;</span>
			<h4>Mensagem de para confirma&ccedil;&atilde;o</h4>	
		</header>
		<div class="w3-container w3-white w3-padding">
			<h1>Deseja proceder com a remo&ccedil&atilde;o?</h1>
		</div>
		<footer class="w3-container w3-white w3-padding">
			<button class="w3-btn w3-large w3-red">
				<span class="glyphicon glyphicon-trash"></span>
				Proceder
			</button>
			<button class="w3-btn w3-large w3-blue">
				<span class="glyphicon glyphicon-remove"></span>
				Cancelar
			</button>
		</footer>
	</div>
</div>