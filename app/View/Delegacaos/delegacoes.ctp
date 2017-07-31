<?php foreach ($delegacaos as $delegacao): ?>
<?php $id = $delegacao['Delegacao']['id']; ?>
  <tr class="w3-text-grey w3-hover-khaki w3-hover-text-blue">
    <td><?php echo h($delegacao['Delegacao']['id']); ?>&nbsp;</td>
    <td><?php echo h($delegacao['Delegacao']['nome']); ?>&nbsp;</td>
    <td class="actions w3-text-grey">
      <a href="#" class="w3-tag w3-hover-light-grey w3-round w3-tiny w3-green" onclick="document.getElementById('delegacaoModal<?php echo $id;?>').style.display='block'">
        <span class="glyphicon glyphicon-edit"></span>
      </a>
      <?php
      echo $this->Form->postLink("<span class='glyphicon glyphicon-trash'></span>", array('action' => 'delete', $delegacao['Delegacao']['id']), array('class' => 'w3-tag w3-hover-light-grey w3-round w3-red w3-tiny' , 'escape' => false, 'confirm' => __('Are you sure you want to delete #
      %s?', $delegacao['Delegacao']['id'])));
      ?>
    </td>
    <?php include('edit.ctp'); ?>
  </tr>
<?php endforeach; ?>
