<div class="col-md-9 w3-white w3-padding w3-border">
  <h6 class="w3-text-blue settings-font-color">
    <span style="font-size: 24px;" class="glyphicon glyphicon-map-marker">

    </span><?php echo  __('Listas das Delega&ccedil;&otilde;es');?>
</h6>
      <button onclick="document.getElementById('delegacaoModalWindow').style.display='block'" class="w3-btn w3-blue pull-right w3-margin-bottom">
        <span class="glyphicon glyphicon-plus"></span>
        Adicionar delega&ccedil;&atilde;o
      </button>
      <table class="table table-striped w3-border w3-border-dark-grey" cellpadding="0" cellspacing="0">
        <thead class="w3-dark-grey" >
          <tr>
            <th><?php echo $this->Paginator->sort('#'); ?></th>
            <th><?php echo $this->Paginator->sort('nome'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody id="table-body" class="w3-tiny">
          <?php include('delegacoes.ctp'); ?>
        </tbody>
   </table>
  <p>
  <?php
  echo $this->Paginator->counter(array(
    'format' => __('<span class="w3-text-blue">P&aacute;gina {:page} de {:pages}, a mostrar {:current} num total de {:count}</span>')
  ));
  ?>  </p>
  <div class="paging">
  <?php
    echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
    echo $this->Paginator->numbers(array('separator' => ''));
    echo $this->Paginator->next(__('Proximo') . ' >', array(), null, array('class' => 'next disabled'));
  ?>
    </div>
</div>
<div class="col-md-3">
  <h5 class="w3-panel w3-border w3-padding">O nosso belo Mo&ccedil;ambique</h5>
  <?php echo $this->Html->image('mapa.png', array('id' => 'mapa', 'class' => 'img img-responsive'));?>
</div>
<?php include('add.ctp'); ?>
