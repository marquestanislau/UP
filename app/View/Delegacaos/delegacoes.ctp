<?php foreach ($delegacaos as $delegacao): ?>
<?php $id = $delegacao['Delegacao']['id']; ?>
  <tr class="w3-text-dark-grey">
    <td><?php echo h($delegacao['Delegacao']['id']); ?>&nbsp;</td>
    <td><?php echo h($delegacao['Delegacao']['nome']); ?>&nbsp;</td>
    <td class="actions w3-text-grey">
      <button class="w3-btn w3-tiny w3-green" onclick="document.getElementById('delegacaoModal<?php echo $id;?>').style.display='block'">
        <span class="glyphicon glyphicon-edit"></span>
      </button>
      <?php
      echo $this->Form->postLink("<span class='glyphicon glyphicon-trash'></span>", array('action' => 'delete', $delegacao['Delegacao']['id']), array('class' => 'w3-btn w3-red w3-tiny' , 'escape' => false, 'confirm' => __('Are you sure you want to delete #
      %s?', $delegacao['Delegacao']['id'])));
      ?>
    </td>
    <?php include('edit.ctp'); ?>
  </tr>
<?php endforeach; ?>
