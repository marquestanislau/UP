<div id="carreiraModalEditar<?php echo $id;?>" class="w3-modal">
	<div class="w3-modal-content w3-padding w3-round" style="width: 50%;">
		<header class="w3-container w3-text-blue">
			<span onclick="document.getElementById('carreiraModalEditar<?php echo $id;?>').style.display='none'"
				class="w3-closebtn w3-hover-text-orange">&times;</span>
				<h3><?php echo __('Editar dados da Carreira'); ?></h3>
			</header>
			<div class="w3-container w3-padding w3-text-grey">
				<div id="sucessoEditar<?php echo $id;?>"></div>
				<?php echo $this->Form->create('Carreira', array('id' => 'ajaxFormEditar'.$id)); ?>
				<?php
				echo $this->Form->input('id', array('value' => $id));
				echo $this->Form->input('nome', array('class' => 'w3-input w3-large w3-round w3-hover-khaki w3-border', 'value' => $carreira['Carreira']['nome']));
				?>
				<div class="row">
					<div class="col-md-4">
						<?php
						echo $this->Form->input('codigo', array('class' => 'w3-input w3-hover-khaki w3-border w3-round', 'label' => 'C&oacute;digo', 'value' => $carreira['Carreira']['codigo'],'id' => 'codigo'));
						?>
					</div>
					<div class="col-md-4">
						<?php
						echo $this->Form->input('resolucao', array('class' => 'w3-input w3-hover-khaki w3-border w3-round', 'label' => 'Resolu&ccedil;&atilde;o', 'value' => $carreira['Carreira']['resolucao'],'id' => 'resolucao'));
						?>
					</div>
					<div class="col-md-4">
						<?php
						echo $this->Form->input('data', array('class' => 'w3-input w3-text-blue w3-hover-khaki datepicker w3-border w3-round', 'label' => 'Data', 'value' => $carreira['Carreira']['data'],'id' => 'data'.$carreira['Carreira']['id'], 'type' => 'text'));
						?>
						
					</div>
				</div>
				<div class="row w3-light-grey w3-padding w3-margin-top">
					<div class="col-md-3">
						<?php
						echo $this->Form->input('primeiro_numero', array('class' => 'w3-input w3-hover-khaki w3-border w3-round', 'label' => '1º N', 'value' => $carreira['Carreira']['primeiro_numero'],'id' => 'primeiro_numero'));
						?>
					</div>
					<div class="col-md-3">
						<?php
						echo $this->Form->input('segundo_numero', array('class' => 'w3-input w3-hover-khaki w3-border w3-round', 'label' => '2º N', 'value' => $carreira['Carreira']['segundo_numero'],'id' => 'segundo_numero'));
						?>
					</div>
					<div class="col-md-3">
						<?php
						echo $this->Form->input('primeiro_artigo', array('class' => 'w3-input w3-hover-khaki w3-border w3-round', 'label' => '1º Art.', 'value' => $carreira['Carreira']['primeiro_artigo'],'id' => 'primeiro_artigo'));
						?>
					</div>
					<div class="col-md-3">
						<?php
						echo $this->Form->input('segundo_artigo', array('class' => 'w3-input w3-hover-khaki w3-border w3-round', 'label' => '2º Art.', 'value' => $carreira['Carreira']['segundo_artigo'],'id' => 'segundo_artigo'));
						?>
					</div>
				</div>
				<br>
				<label>Carreira para?</label><br>
				<?php 
					$options = array('0' => 'CTA', '1' => 'CD');
					echo $this->Form->radio('tipo',$options, array('legend' => false, 'separator' => '<br>', 'value' => $carreira['Carreira']['tipo'])); ?>
				<div id="processandoEditar<?php echo $id;?>" style="display: none;">
					<?php echo $this->Html->image('ajax/ajax-loader.gif'); ?>
				</div>
			</div>
			<footer class="w3-container w3-padding">
				<button class="w3-button w3-round w3-green w3-large">
					<span class="glyphicon glyphicon-ok"></span>
					Submeter
				</button>
				<?php echo $this->Form->end(); ?>
			</footer>
		</div>
	</div>
	<?php
	$completed = '$("#processandoEditar'.$id.'").attr("style", "display:none")';
	$beforeIt = '$("#processandoEditar'.$id.'").attr("style", "")';

	$success = $this->Js->request(
		array(
			'action' => 'index'
			),
		array(
			'update' => '#corpo',
			'method' => 'post',
			'async' => true,
			'complete' => 'displayMessages()'
			)
		);

	$dados = $this->Js->get('#ajaxFormEditar'.$id)->serializeForm(array('inline' => true, 'isForm' => true));
	$this->Js->get('#ajaxFormEditar'.$id)->event(
		"submit",
		$this->Js->request(
			array(
				'action' => 'adicionarCarreira'
				),
			array(
				'method' => 'post',
				'update' => '#message',
				'complete' => $completed,
				'before' => $beforeIt,
				'data' => $dados,
				'dataExpression' => true,
				'async' => true,
				'success' => $success
				)
			)
		);
		?>
