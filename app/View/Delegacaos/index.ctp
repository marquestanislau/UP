<h4 class="w3-text-grey">
  <?php echo  __('Listas das Delega&ccedil;&otilde;es');?>
</h4>
<div class="col-md-9 w3-white w3-padding w3-border">
  <h6 class="settings-font-color">
    <span style="font-size: 24px;" class="glyphicon glyphicon-map-marker">

    </span><?php echo  __('Listas das Delega&ccedil;&otilde;es');?>
</h6>
      <button onclick="document.getElementById('delegacaoModalWindow').style.display='block'" class="w3-btn w3-blue pull-right">
        <span class="glyphicon glyphicon-plus"></span>
        Adicionar delega&ccedil;&atilde;o
      </button>
      <table class="table table-striped" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th><?php echo $this->Paginator->sort('#'); ?></th>
            <th><?php echo $this->Paginator->sort('nome'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody id="table-body">
          <?php include('delegacoes.ctp'); ?>
        </tbody>
   </table>
  <p>
  <?php
        echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?>
  </p>
    <div class="paging">
    <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
    </div>
</div>
<?php include('add.ctp'); ?>
