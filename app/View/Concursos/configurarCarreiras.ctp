<div class="w3-modal" id="config">
	<div class="w3-modal-content w3-white">
		<header class="w3-container w3-blue">
			<span onclick="document.getElementById('config').style.display='none'" class="w3-closebtn">
				&times;
			</span>
			<h4>Adicionar documenta&ccedil;&atilde;o e n&uacute;mero de vagas!</h4>
		</header>
		<div class="w3-container w3-padding w3-light-grey">
			<div id="sucesso"></div>
			<div class="w3-row w3-white w3-border">
				<?php echo $this->Form->create('Carreira', array('controller' => 'carreiras', 'url' => array('action' => 'configurarCarreiras') ,'id' => 'carreiraAddForm', 'class' => 'w3-container'));?>
				<div class="w3-third w3-padding">
					<h3>
						<span class=" w3-large glyphicon glyphicon-file"></span>
						Documentos
					</h3>
					<?php echo $this->Form->input('documentacao_id', array('multiple' => 'checkbox', 'class' => 'w3-check', 'label' => array('text' => 'Documentos necessarios'), 'value' => $documentacaos)); ?>
				</div>
				<div class="w3-third w3-padding">
					<h3>
						<span class=" w3-large glyphicon glyphicon-globe"></span>
						Categorias
					</h3>
					<?php echo $this->Form->input('categoria_id', array('class' => 'w3-input w3-text-black w3-border', 'value' => $categorias)); ?>
					Numero de vagas: <input placeholder="Valor numerico" class="w3-input w3-hover-khaki w3-text-black w3-border">
				</div>
			</div>
			<div id="requesting" style="display:none">
				<?php echo $this->Html->image('ajax/ajax-loader.gif');?>
			</div>
		</div>
		<footer class="w3-container w3-padding w3-light-grey">
			<button class="w3-large w3-green w3-btn pull-right">
				<span class="glyphicon glyphicon-save">
				</span>
				Guardar
			</button>
			<?php echo $this->Form->end();?>
			<button onclick="document.getElementById('config').style.display='none'" class="w3-large w3-blue w3-btn pull-right">
				<span class="glyphicon glyphicon-remove">
				</span>
				Cancelar
			</button>
		</footer>
	</div>
</div>
