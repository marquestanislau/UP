<a href="" class="list-group-item success">
	<strong>Ultimo utilizador registrado</strong>
</a>
<a href="/sigerh/usuarios/view/<?php echo $ultimoUsuario['Usuario']['id']; ?>" class="list-group-item">
	<h4 class="list-group-item-heading"><span class="glyphicon glyphicon-user"></span> <?php echo $ultimoUsuario['Usuario']['nome']; ?></h4>
	<p class="list-group-item-text"><span class="glyphicon glyphicon-user"></span> Apelido: <?php echo $ultimoUsuario['Usuario']['apelido']; ?></p>
	<p class="list-group-item-text"><span class="glyphicon glyphicon-envelope"></span> E-mail: <?php echo $ultimoUsuario['Usuario']['email']; ?></p>
	<p class="list-group-item-text"><span class="glyphicon glyphicon-phone"></span> Contacto: <?php echo $ultimoUsuario['Usuario']['contacto']; ?></p>
</a>