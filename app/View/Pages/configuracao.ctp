 <div class="w3-row">
  <div class="w3-col s4 w3-green w3-center">
    <div class="">
      <header class="w3-container">
        <h3>Tipos de Ingresso</h3>
      </header>
      <div class="w3-container">
        <p><?php echo $this->Html->link("<span class='glyphicon glyphicon-list'></span> Todas formas de ingresso", array('controller' => 'tipoingressos', 'action' => 'index'), array('escape' => false)); ?></p>
        <p><?php echo $this->Html->link("<span class='glyphicon glyphicon-trash'></span> Remover todas formas de ingresso", array('controller' => 'tipoingressos', 'action' => 'add'), array('escape' => false)); ?></p>
      </div>
      <footer class="w3-container">
        <p>Adicione novos m&eacute;todos de ingresso a institui&ccedil;&atilde;o</p>
      </footer>
    </div>
  </div>
  <div class="w3-col s4 w3-dark-grey w3-center">
     <div class="">
      <header class="w3-container">
        <h3>Carreiras</h3 >
      </header>
      <div class="w3-container">
        <p><?php echo $this->Html->link("<span class='glyphicon glyphicon-list'></span> Lista de carreiras", array('controller' => 'carreiras', 'action' => 'index'), array('escape' => false)); ?></p>
      </div>
      <footer class="w3-container">
        <p>Adicione, consulte ou remova as carreiras do sistema</p>
      </footer>
    </div>
  </div>
  <div class="w3-col s4 w3-red w3-center">
      <div class="w3-orange">
      <header class="w3-container">
        <h3>Vagas</h3>
      </header>
      <div class="w3-container">
        <p><?php echo $this->Html->link("<span class='glyphicon glyphicon-list'></span> Todas vagas", array('controller' => 'vagas', 'action' => 'index'), array('escape' => false)); ?></p>
        <p><?php echo $this->Html->link("<span class='glyphicon glyphicon-trash'></span> Remover todas as vagas a carreiras", array('controller' => 'vagas', 'action' => 'add'), array('escape' => false)); ?></p>
      </div>
      <footer class="w3-container">
        <p>Adicione vagas para as carreiras no ambito de abertura de concurso a vagas</p>
      </footer>
    </div>
  </div>
</div>
<div class="w3-row">
  <div class="w3-col s4 w3-red w3-center"><p>s4</p></div>
  <div class="w3-col s4 w3-red w3-center"><p>s4</p></div>
  <div class="w3-col s4 w3-red w3-center"><p>s4</p></div>
</div>

<div class="row">
  <div class=" col-md-12 limit-down">
    <h5 class="settings-font-color">
      <span class="glyphicon glyphicon-cog settings-font-color"></span>
      Configura&ccedil;&otilde;es
    </h5>
    <small class="settings-font-color">
      Esta janela contem links que sao uteis para configuracao inicial dos principais parametros de contratacao de funcionarios e agentes do estado
    </small>
  </div>
</div>

<div class="row">
  
<div class="col-md-1"></div>
<div class="col-md-5 w3-lime">
  <header class="w3-container w3-lime">
    <h3>Categorias para carreiras</h3>
  </header>
  <div class="w3-container">
    <p><?php echo $this->Html->link("<span class='glyphicon glyphicon-list'></span> Listas de categorias", array('controller' => 'categorias', 'action' => 'index'), array('escape' => false)); ?></p>
     <p><?php echo $this->Html->link("<span class='glyphicon glyphicon-trash'></span> Remover todas categorias", array('controller' => 'categorias', 'action' => 'add'), array('escape' => false)); ?></p>
  </div>
  <footer class="w3-container w3-lime">
    <p>Adicione, consulte ou remova as categorias de cada carreira</p>
  </footer>
</div>
</div>
 
<div class="row">
  <div class="col-md-5 w3-brown">
  <header class="w3-container w3-brown">
    <h3>Classes</h3>
  </header>
  <div class="w3-container">
    <p><?php echo $this->Html->link("<span class='glyphicon glyphicon-list'></span> Todas classes", array('controller' => 'clazzes', 'action' => 'index'), array('escape' => false)); ?></p>
  </div>
  <footer class="w3-container w3-brown">
    <p>Adicione, consulte ou remova as classes para carreiras</p>
  </footer>
</div>
<div class="col-md-1"></div>
<div class="col-md-5 w3-black">
  <header class="w3-container w3-black">
    <h3>Sectores</h3>
  </header>
  <div class="w3-container">
    <p><?php echo $this->Html->link("<span class='glyphicon glyphicon-list'></span> Todos sectores", array('controller' => 'sectores', 'action' => 'index'), array('escape' => false)); ?></p>
  </div>
  <footer class="w3-container w3-black">
    <p>Adicione, consulte ou remova os sectores para delega&ccedil;&otilde;es</p>
  </footer>
</div>
</div>

<div class="row">
  <div class="col-md-5 w3-gray">
  <header class="w3-container w3-gray">
    <h3>Escal&otilde;es</h3>
  </header>
  <div class="w3-container">
    <p><?php echo $this->Html->link("<span class='glyphicon glyphicon-list'></span> Todos escal&otilde;es", array('controller' => 'escalaos', 'action' => 'index'), array('escape' => false)); ?></p>
    <p><?php echo $this->Html->link("<span class='glyphicon glyphicon-trash'></span> Remover todos escal&otilde;es", array('controller' => 'escalaos', 'action' => 'index'), array('escape' => false)); ?></p>
  </div>
  <footer class="w3-container w3-gray">
    <p>Adicione, consulte ou remova os escal&otilde;es para categorias e classes</p>
  </footer>
</div>
<div class="col-md-1"></div>
<div class="col-md-5 w3-purple">
  <header class="w3-container w3-purple">
    <h3>Concursos</h3>
  </header>
  <div class="w3-container">
    <p><?php echo $this->Html->link("<span class='glyphicon glyphicon-list'></span> Concursos anteriores", array('controller' => 'concursos', 'action' => 'index'), array('escape' => false)); ?></p>
    <p><?php echo $this->Html->link("<span class='glyphicon glyphicon-trash'></span> Remover todos concursos", array('controller' => 'concursos', 'action' => 'index'), array('escape' => false)); ?></p>
  </div>
  <footer class="w3-container w3-purple">
    <p>Adicione, consulte ou remova os concursos para recrutamento de novos funcion&aacute;rios</p>
  </footer>
</div>
</div>