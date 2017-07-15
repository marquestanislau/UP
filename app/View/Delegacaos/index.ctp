<div class="w3-white">
  <h6 class="w3-text-blue settings-font-color">
    <span class="glyphicon glyphicon-map-marker">

    </span><?php echo  __('Listas das Delega&ccedil;&otilde;es');?>
  </h6>
  <div class="w3-bar w3-light-grey w3-margin-bottom">
      <button onclick="document.getElementById('delegacaoModalWindow').style.display='block'" class="w3-button w3-bar-item">
        <span class="glyphicon glyphicon-plus"></span>
        Adicionar delega&ccedil;&atilde;o
      </button>
      <input type="text" class="w3-bar-item w3-border w3-white" style="width: 30%;" name="">
  </div>
      <table class="table table-striped" cellpadding="0" cellspacing="0">
        <thead class="w3-white w3-text-blue" >
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
<?php include('add.ctp'); ?>
