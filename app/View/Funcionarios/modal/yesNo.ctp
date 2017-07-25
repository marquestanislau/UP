<div class="w3-modal" id="yesNo">
	<div class="w3-modal-content w3-round w3-animate-zoom">
		<header class="w3-container">
			<span class="w3-closebtn" onclick="document.getElementById('yesNo').style.display='none'">&times;</span>
			<h4><i class="fa fa-info-circle"></i> Mensagem do sistema</h4>
		</header>
		<div class="w3-container w3-center w3-padding">
			<h3>Escolha o tipo de cadastro que deseja efectuar!</h3>
			<a href="<?php echo $this->Html->url(array('action' => 'excepcao', 'controller' => 'ctas'));?>" class="w3-button w3-large w3-round w3-green w3-hover-light-green">
				<i class="fa fa-user"></i>
				CTA
			</a>
			<a href="<?php echo $this->Html->url(array('action' => 'excepcao', 'controller' => 'cds'));?>" class="w3-button w3-large w3-round w3-blue w3-hover-light-blue">
				<i class="fa fa-graduation-cap"></i>
				CD
			</a>
		</div>		
		<footer class="w3-container w3-padding">
			
		</footer>
	</div>
</div>