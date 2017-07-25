<div class="w3-margin-top"></div>
<?php foreach ($clazzes as $clazze) {?>
<div class="w3-button w3-margin w3-xxlarge w3-padding">
	<header>
		<a id="remove<?php echo $clazze['Clazze']['id']; ?>" class="w3-top-align" href="#">
			<i class="fa fa-close"></i>
			<span data-mdl-for="remove<?php echo $clazze['Clazze']['id']; ?>" class="mdl-tooltip">Remover classe <?php echo $clazze['Clazze']['nome']; ?></span>
		</a>
	</header>
	<?php echo $clazze['Clazze']['nome'];  ?>
</div>
<?php } ?>
<button class="w3-button w3-green w3-round w3-large w3-top-align">
	<i class="fa fa-plus"></i>
	Adicionar
</button>