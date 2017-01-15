<?php foreach ($sectores as $sectore): ?>
<tr>
  <td><?php echo h($sectore['Sectore']['id']); ?>&nbsp;</td>
  <td><?php echo h($sectore['Sectore']['designacao']); ?>&nbsp;</td>
  <td>
    <?php echo $this->Html->link($sectore['Delegacao']['nome'], array('controller' => 'delegacaos', 'action' => 'view', $sectore['Delegacao']['id'])); ?>
  </td>
  <td class="actions">
    <?php $id = $sectore['Sectore']['id']; ?>
    <?php echo $this->Form->postLink("<span class='glyphicon glyphicon-trash'></span>", array('action' => 'delete', $sectore['Sectore']['id']), array('class' => 'w3-btn w3-red', 'escape' => false, 'confirm' => __('Are you sure you want to delete # %s?', $sectore['Sectore']['id']))); ?>
  <button type="button" class="w3-btn w3-green" onclick="document.getElementById('sectoresModalWindow<?php echo $id; ?>').style.display='block'">
    <span class='glyphicon glyphicon-refresh'></span>
  </button>
  <button class="w3-btn w3-red" id="apagar" onclick="document.getElementById('confirmacao<?php echo $id; ?>').style.display='block'" ><span class='glyphicon glyphicon-trash'></span></button>
  </td>
</tr>
  <?php
    include('edit.ctp');
    include('confirmacao.ctp');
  ?>
<?php endforeach; ?>
