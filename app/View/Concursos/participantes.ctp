 <div id="participantesModal<?php echo $carreira_id;?>" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">

    <header class="w3-container w3-blue">
      <span onclick="document.getElementById('participantesModal<?php echo $carreira_id;?>').style.display='none'"
      class="w3-closebtn w3-hover-text-orange">&times;</span>
      <h5> 
        <span class="fa fa-users w3-large"></span>
        Adi&ccedil;&atilde;o de candidatos</h5>
    </header>

    <div class="w3-container w3-light-gray">
      <div class="w3-row">
        <!-- Se quiser voltar ao modelo de seleccao manual com as abas basta remover os if's e elses -->
        <?php $tipo = $concurso['Concurso']['tipo']; ?>
        <?php if ($tipo == 0) { ?>
          <a href="javascript:void(0)" onclick="janelasParticipantes(event, 'cta<?php echo $carreira_id;?>');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"><strong><span class="glyphicon glyphicon-user"></span> CTA</strong></div>
          </a>
          <?php } else { ?>
          <a href="javascript:void(0)" onclick="janelasParticipantes(event, 'CorpoDocente<?php echo $carreira_id;?>');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"><strong><span class="glyphicon glyphicon-education"></span> Corpo docente</strong></div>
          </a>
          <?php } ?>
        </div>
        <?php if ($tipo == 0) { ?>
        <div id="cta<?php echo $carreira_id;?>" style="display: block;" class="w3-container w3-white w3-margin-bottom city main-tab w3-padding">
          <?php include('ctas.ctp'); ?>
        </div>
        <?php } else { ?>
        <!-- colocou-se o atributo style para obrigar que a div seja mostrada independentimente dos resultados -->
        <div id="CorpoDocente<?php echo $carreira_id;?>" style="display: block;" class="w3-container w3-white w3-margin-bottom city w3-padding">
          <?php include('cds.ctp'); ?>
        </div>
        <?php } ?>
    </div>

    <footer class="w3-container w3-white">
      <!-- <p>Modal Footer</p> -->
    </footer>

  </div>
</div>


<script>
// function janelasParticipantes(evt, cityName) {
//   var i, x, tablinks;
//   x = document.getElementsByClassName("city");
//   for (i = 0; i < x.length; i++) {
//      x[i].style.display = "none";
//   }
//   tablinks = document.getElementsByClassName("tablink");
//   for (i = 0; i < x.length; i++) {
//      tablinks[i].className = tablinks[i].className.replace(" w3-border-orange", "");
//   }
//   document.getElementById(cityName).style.display = "block";
//   evt.currentTarget.firstElementChild.className += " w3-border-orange";
// }
</script>