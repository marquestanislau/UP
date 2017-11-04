<div id="carreiraModal" class="w3-modal">
	<div class="w3-modal-content w3-round w3-animate-zoom" style="width: 50%;">

		<header class="w3-container w3-text-blue"> 
			<span onclick="document.getElementById('carreiraModal').style.display='none'" 
			class="w3-closebtn w3-hover-text-blue">&times;</span>
			<h4>
				<span class="glyphicon glyphicon-briefcase" style="font-size: 24px;"></span> 
				<?php echo __('Adicionar Carreiras'); ?>
			</h4>
		</header>

		<div class="w3-container w3-padding-32">
			<div>
				<div id="sucesso"></div>
				<?php echo $this->Form->create('Carreira', array('url' => array('action' => 'adicionarCarreira'), 'class' => 'w3-container', 'id' => 'addFormCarreira')); ?>
				<?php
				echo $this->Form->input('nome', array('class' => 'w3-input w3-hover-khaki w3-border w3-large w3-round', 'label' => 'Designa&ccedil;&atilde;o da carreira', 'id' => 'nome'));
				?>
				<div class="row">
					<div class="col-md-4">
						<?php
						echo $this->Form->input('codigo', array('class' => 'w3-input w3-hover-khaki w3-border w3-round', 'label' => 'C&oacute;digo', 'id' => 'codigo'));
						?>
					</div>
					<div class="col-md-4">
						<?php
						echo $this->Form->input('resolucao', array('class' => 'w3-input w3-hover-khaki w3-border w3-round', 'label' => 'Resolu&ccedil;&atilde;o', 'id' => 'resolucao'));
						?>
					</div>
					<div class="col-md-4">
						<?php
						echo $this->Form->input('data', array('class' => 'w3-input w3-text-blue w3-hover-khaki datepicker w3-border w3-round', 'label' => 'Data', 'id' => 'data', 'type' => 'text'));
						?>
						
					</div>
				</div>
				<div class="row w3-light-grey w3-padding w3-margin-top">
					<div class="col-md-3">
						<?php
						echo $this->Form->input('primeiro_numero', array('class' => 'w3-input w3-hover-khaki w3-border w3-round', 'label' => '1º N', 'id' => 'primeiro_numero'));
						?>
					</div>
					<div class="col-md-3">
						<?php
						echo $this->Form->input('segundo_numero', array('class' => 'w3-input w3-hover-khaki w3-border w3-round', 'label' => '2º N', 'id' => 'segundo_numero'));
						?>
					</div>
					<div class="col-md-3">
						<?php
						echo $this->Form->input('primeiro_artigo', array('class' => 'w3-input w3-hover-khaki w3-border w3-round', 'label' => '1º Art.', 'id' => 'primeiro_artigo'));
						?>
					</div>
					<div class="col-md-3">
						<?php
						echo $this->Form->input('segundo_artigo', array('class' => 'w3-input w3-hover-khaki w3-border w3-round', 'label' => '2º Art.', 'id' => 'segundo_artigo'));
						?>
					</div>
				</div>
				<br>
				<label>Carreira para?</label><br>
				<?php 
					$options = array('0' => 'CTA', '1' => 'CD');
					echo $this->Form->radio('tipo',$options, array('legend' => false, 'separator' => '<br>')); ?>
				<div id="processando" style="display: none">
					<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
				</div>
			</div>
		</div>

		<footer class="w3-container w3-padding-8 w3-margin-left">
			<button class="w3-button w3-green w3-round"><span class="glyphicon glyphicon-ok"></span> 
				Submeter
			</button>
			<?php echo $this->Form->end(); ?>
			<button class="w3-button w3-round w3-light-grey" onclick="clearInput('addFormCarreira', 'nome');">
				<i class="fa fa-plus"></i>	Novo
			</button>
		</footer>

	</div>
</div>
<?php 
	$data = $this->Js->get('#addFormCarreira')->serializeForm(array('isForm' => true, 'inline' => true));
	$this->Js->get('#addFormCarreira')->event(
		"submit",
		$this->Js->request(
			array('action' => 'adicionarCarreira'),
			array(
				'update' => '#message',
				'data' => $data,
				'before' => '$("#processando").attr("style", "")',
				'complete' => '$("#processando").attr("style", "display:none")',
				'async' => true,
				'dataExpression' => true,
				'method' => 'post',
				'success' => $this->Js->request(
								array(
									'action' => 'index'
								),
								array(
									'update' => '#corpo',
									'method' => 'post',
									'async' => true,
									'complete' => 'displayMessages()'
								)
							)
			)
		)
	);
 ?>
<?php echo $this->Html->script('script'); ?>
