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
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
<?php
  echo $this->Html->meta('icon');
  #Inclusao de bootstrap
  echo $this->Html->css('bootstrap/bootstrap.min');
  # echo $this->Html->css('cake.generic');
  echo $this->Html->css('material/material.indigo-orange.min');
    # Funciona quando possuimos uma conexao com a internet
  #echo $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons');
  #Modificacao de alguns aspectos (Modificacao do aspecto default)
  echo $this->Html->css('custom');
  echo $this->Html->css('jquery-ui.min');
  echo $this->Html->css('pure-min');
  echo $this->Html->css('w3');
  echo $this->Html->css('font-awesome/css/font-awesome.min');
  #Carrega o javascript do framwork da google mdl
  #Carrega o script de bootstrap
  // echo $this->Html->script('bootstrap/bootstrap.min');
  
   # Load jsquery libs for ajax and other effects
  echo $this->Html->script('jquery/jquery');
  echo $this->Html->script('jquery-ui.min');
  echo $this->Html->script('material/material.min');
  echo $this->Html->script('steps/jq.progress-bar');
  echo $this->Html->script('script_frameworks');
  echo $this->Html->script('script');

  echo $this->fetch('meta');
  echo $this->fetch('css');
  echo $this->fetch('script');
?>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400,700" media="all">
</head>
<body class="w3-white w3-text-gray">
<!-- Navbar -->
<div class="w3-top">
  <ul class="w3-navbar w3-blue w3-theme w3-left-align w3-large">
    <li class="w3-opennav w3-right w3-hide-large">
      <a class="w3-hover-white w3-large" href="javascript:void(0)" onclick="w3_open()"><i class="glyphicon glyphicon-menu-hamburger"></i></a>
    </li>
    <li><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home'));?>" class=" logo w3-theme-l1" style="font-weight: bolder;">SIGERH</a></li>
    <li>
      <a><span class="glyphicon glyphicon-home"></span></a>
    </li>
    <li class="w3-hide-small w3-dropdown-hover">
      <a><span class="glyphicon glyphicon-user"></span></a>
      <div class="w3-dropdown-content w3-card-4 w3-padding w3-text-blue w3-bottombar">
        <h3>Funcion&aacute;rios</h3>
        <table>
          <tr>
            <td><a href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'funcionarios')); ?>"><i class="fa fa-users"></i> Funcion&aacute;rios</a></td>
            <td><a href=""><i class="fa fa-star-o w3-large"></i> Progress&atilde;o</a></td>
          </tr>
          <tr>
            <td><a href="<?php echo $this->Html->url(array('action' => 'transferencia', 'controller' => 'funcionarios')); ?>"><i class="fa fa-refresh"></i> Transfer&ecirc;ncias</a></td>
          </tr>
          <tr>
            <td><a href="#"><i class="fa  fa-info-circle w3-large"></i> Processo disciplinar</a></td>
          </tr>
          <tr>
            <td><a href="#"><i class="fa fa-balance-scale"></i> Avalia&ccedil;&atilde;o de desempenho</a></td>
          </tr>
        </table>
      </div>
    </li>
    <li>
      <a><span class="glyphicon glyphicon-education"></span></a>
    </li>
    <li class="w3-hide-small w3-dropdown-hover">
      <a><span class="glyphicon glyphicon-cog"></span></a>
      <div class="w3-dropdown-content w3-card-4 w3-padding w3-text-blue w3-bottombar">
        <h3 class="w3-text-blue">Configura&ccedil;&otilde;es</h3>
        <table>
          <tr>
            <td><a class="" href="#"><span class="glyphicon glyphicon-list-alt"></span> Tipos de ingresso</a></td>
            <td><a class="" href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'carreiras'));?>"><span class="glyphicon glyphicon-briefcase"></span> Carreiras</a></td>
          </tr>
          <tr>
            <td><a class="" href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'categorias'));?>"><span class="glyphicon glyphicon-tags"></span> Categorias</a></td>
            <td><a class="" href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'delegacaos'));?>"><span class="glyphicon glyphicon-map-marker"></span> Delega&ccedil;&atilde;o</a></td>
          </tr>
          <tr>
            <td><a class="" href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'clazzes'));?>"><span class="fa fa-cube"></span> Classes</a></td>
            <td><a class="" href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'sectores'));?>"><span class="fa fa-industry"></span> Sectores</a></td>
             <td><a class="" href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'escalaos'));?>"><span class="fa fa-cubes"></span> Escal&otilde;es</a></td>
          </tr>
        </table>
      </div>
    </li>
    <li class="w3-hide-small w3-dropdown-hover">
      <a><span class="glyphicon glyphicon-briefcase"></span></a>
      <div class="w3-dropdown-content w3-padding w3-card-4 w3-text-blue w3-bottombar">
        <h3 class="w3-text-blue" >Recrutamento</h3>
        <table>
          <tr>
            <td><a href="<?php echo $this->Html->url(array('action' => 'participantes', 'controller' => 'funcionarios'));?>"><span class="fa fa-users"></span> Participantes</a></td>
            <td><a href="<?php echo $this->Html->url(array('action' => 'index', 'controller' => 'concursos'));?>"><span class="glyphicon glyphicon-book"></span> Concursos</a></td>
          </tr>
          <tr>
           <!--  <td><a href="<?php echo $this->Html->url(array('action' => 'entrevista', 'controller' => 'funcionarios'));?>"><span class="fa fa-comments"></span> Entrevistas de emprego</a></td> -->
          </tr>
        </table>
      </div>
    </li>
    <li>
      <a href="<?php echo $this->Html->url(array('action' => 'calendario', 'controller' => 'funcionarios'));?>"><span class="glyphicon glyphicon-calendar"></span></a>
    </li>
    <li class="pull-right w3-hide-medium w3-hide-small">
      <a href="#">
        <?php echo $this->Html->image('perfil_default.png', array('class' => 'w3-hover-blue img-responsive img-circle user-icon')); ?>
      </a>
    </li>
    <li class="pull-right w3-hide-medium w3-hide-small">
      <a href="#">
        <span class="glyphicon glyphicon-bell"></span>
      </a>
    </li>
  </ul>
</div>

<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main w3-white w3-text-gray w3-container">

  <div class="w3-row">
    <div class="w3-col m1 l1">
      <p></p>
    </div>
    <div class="w3-col m10 l10" style="margin-top: 50px;"><?php echo $this->fetch('content'); ?></div>
    <div class="w3-col m1 l1">
      <p></p>
    </div>
  </div>

  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <!-- <h4>Footer</h4> -->
      <div id="message" class="mdl-js-snackbar mdl-snackbar w3-green">
        <div class="mdl-snackbar__text"></div>
        <button class="mdl-snackbar__action" type="button"></button>
      </div>
    </div>

    <div class="w3-container w3-theme-l1">
      <!-- <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p> -->
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
