<?php foreach ($delegacaos as $delegacao): ?>
  <tr>
    <td><?php echo h($delegacao['Delegacao']['id']); ?>&nbsp;</td>
    <td><?php echo h($delegacao['Delegacao']['nome']); ?>&nbsp;</td>
    <td class="actions w3-text-grey">
      <?php echo $this->Html->link("<span class='glyphicon glyphicon-edit'></span>
      Editar", array('action' => 'edit', $delegacao['Delegacao']['id']), array('escape' => false));
      ?>
      <?php
      echo $this->Form->postLink("<span class='glyphicon glyphicon-trash'></span>
      Remover", array('action' => 'delete', $delegacao['Delegacao']['id']), array('escape' => false, 'confirm' => __('Are you sure you want to delete #
      %s?', $delegacao['Delegacao']['id'])));
      ?>
    </td>
  </tr>
<?php endforeach; ?>
