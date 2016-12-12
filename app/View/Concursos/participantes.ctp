 <div id="participantesModal" class="w3-modal">
  <div class="w3-modal-content">

    <header class="w3-container w3-purple">
      <span onclick="document.getElementById('participantesModal').style.display='none'"
      class="w3-closebtn">&times;</span>
      <h2> 
        <span style="font-size: 24px;" class="glyphicon glyphicon-user"></span>
        Adi&ccedil;&atilde;o de candidactos</h2>
    </header>

    <div class="w3-container">
      <div class="w3-row">
          <a href="javascript:void(0)" onclick="janelasParticipantes(event, 'cta');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"><strong><span class="glyphicon glyphicon-user"></span> CTAS</strong></div>
          </a>
          <a href="javascript:void(0)" onclick="janelasParticipantes(event, 'CorpoDocente');">
            <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"><strong><span class="glyphicon glyphicon-education"></span> Corpo docente</strong></div>
          </a>
        </div>

        <div id="cta" class="w3-container city main-tab w3-padding">
          <?php include('ctas.ctp'); ?>
        </div>

        <div id="CorpoDocente" class="w3-container city w3-padding">
          <?php include('cds.ctp'); ?>
        </div>
    </div>

    <footer class="w3-container w3-white">
      <!-- <p>Modal Footer</p> -->
    </footer>

  </div>
</div>


<script>
function janelasParticipantes(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-orange", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-orange";
}
</script>