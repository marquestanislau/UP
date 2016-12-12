<div class="w3-modal" id="config">
	<div class="w3-modal-content w3-purple">
		<header class="w3-container w3-orange">
			<span onclick="document.getElementById('config').style.display='none'" class="w3-closebtn">
				&times;
			</span>
			<h4>Adicionar documenta&ccedil;&atilde;o e n&uacute;mero de vagas!</h4>
		</header>
		<div class="w3-container w3-padding">
			<div id="sucesso"></div>
			<div class="w3-row">
				<?php echo $this->Form->create('Carreira', array('id' => 'carreiraAddForm', 'class' => 'w3-container')); ?>
				<div class="w3-third">
					Numero de vagas: <input placeholder="100" class="w3-input w3-hover-khaki w3-text-black">
				</div>
				<div class="w3-third">
					<h3>
						<span class=" w3-large glyphicon glyphicon-file"></span>
						Documentos
					</h3>
					<hr>
				</div>
				<div class="w3-third">
					<h3>
						<span class=" w3-large glyphicon glyphicon-globe"></span>
						Categorias
					</h3>
					<hr>
				</div>
			</div>
			<div id="requesting" style="display:none">
				<?php echo $this->Html->image('ajax/ajax-loader.gif');?>
			</div>
		</div>
		<footer class="w3-container w3-padding">
			<button class="w3-large w3-orange w3-btn">
				<span class="glyphicon glyphicon-save">
				</span>
				Guardar
			</button>
			<?php echo $this->Form->end();?>
			<button onclick="document.getElementById('config').style.display='none'" class="w3-large w3-red w3-btn pull-right">
				<span class="glyphicon glyphicon-remove">
				</span>
				Cancelar
			</button>
		</footer>
	</div>
</div>