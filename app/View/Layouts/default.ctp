<?php
/**
* @link          http://cakephp.org CakePHP(tm) Project
* @package       app.View.Layouts
* @since         CakePHP(tm) v 0.10.0.1076
*/

$cakeDescription = __d('cake_dev', 'SIGERH-UP');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php echo $this->Html->charset(); ?>
<title>
	<?php echo $cakeDescription ?>:
	<?php echo $this->fetch('title'); ?>
</title>
<?php
  echo $this->Html->meta('icon');
   # Load jsquery libs for ajax and other effects
  echo $this->Html->script('jquery/jquery');
  #Inclusao de bootstrap
  echo $this->Html->css('bootstrap/bootstrap.min');
  #	echo $this->Html->css('cake.generic');
  echo $this->Html->css('material/material.indigo-orange.min');
  	# Funciona quando possuimos uma conexao com a internet
  // echo $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons');
  #Modificacao de alguns aspectos (Modificacao do aspecto default)
  echo $this->Html->css('custom');echo $this->Html->css('custom');
  echo $this->Html->css('w3');
  #Carrega o javascript do framwork da google mdl
  echo $this->Html->script('material/material.min');
  #Carrega o script de bootstrap
  echo $this->Html->script('bootstrap/bootstrap.min');
  echo $this->Html->script('script');

  echo $this->fetch('meta');
  echo $this->fetch('css');
  echo $this->fetch('script');
?>
</head>
<body>
<!-- Navbar -->
<div class="w3-top">
  <ul class="w3-navbar w3-blue w3-theme w3-top w3-left-align w3-large">
    <li class="w3-opennav w3-right w3-hide-large">
      <a class="w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="glyphicon glyphicon-menu-hamburger"></i></a>
    </li>
    <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home'));?>" class="w3-theme-l1" style="font-weight: bolder;">SIGERH</a></li>
    <li class="pull-right w3-hide-medium w3-hide-small">
      <a href="#">
        <?php echo $this->Html->image('perfil_default.png', array('class' => 'w3-hover-blue img-responsive img-circle user-icon')); ?>
      </a>
    </li>
  </ul>
</div>

<!-- Sidenav -->
<nav class="w3-sidenav w3-white w3-center w3-collapse w3-animate-left" style="z-index:3;width:250px;margin-top:51px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-blue w3-hide-large" title="close menu">
    <i class="glyphicon glyphicon-remove"></i>
  </a>
  <h4>
    <b><?php
        echo $this->Html->link(
          $this->Html->image("icon72x72.png", array("alt" => "Image not found")),
          array('controller' => 'pages', 'action' => 'home'),
          array('escape' => false)
        );
      ?></b>
  </h4>
    <?php echo $this->Html->link('<span class="glyphicon glyphicon-home"></span> In&iacute;cio', array('controller' => 'pages', 'action' => 'home'), array('escape' => FALSE, 'class' => 'w3-hover-blue')); ?>
  
    <?php echo $this->Html->link('<span class="glyphicon glyphicon-cog"></span>
    Configura&ccedil;&otilde;es', array('controller' => 'pages', 'action' => 'configuracao'), array('class' => 'w3-hover-blue', 'escape' => FALSE)); ?>

    <?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span> Utilizadores', array('controller' => 'usuarios', 'action' => 'index'), array('class' => 'w3-hover-blue', 'escape' => FALSE)); ?>
  <a href="#"  class="w3-hover-blue">Link</a>
  <a href="#"  class="w3-hover-blue">Link</a>
  <a href="#" class="w3-hover-black">Link</a>
  <a href="#" class="w3-hover-black">Link</a>
  <a href="#" class="w3-hover-black">Link</a>
</nav>

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-margin w3-padding-32">
    <?php echo $this->fetch('content'); ?>    
  </div>

  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>Footer</h4>
    </div>

    <div class="w3-container w3-theme-l1">
      <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  </footer>

<!-- END MAIN -->
</div>
<script type="text/javascript">
  // Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
   <?php echo $this->Session->flash(); ?>

<?php echo $this->Js->writeBuffer(array('cache' => FALSE, 'buffer' => FALSE)); ?>
</body>
</html>
