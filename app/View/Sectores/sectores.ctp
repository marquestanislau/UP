<?php foreach ($sectores as $sectore): ?>
<tr class="w3-hover-khaki w3-hover-text-blue w3-text-grey">
  <!-- <td><?php echo h($sectore['Sectore']['id']); ?>&nbsp;</td> -->
  <td><?php echo h($sectore['Sectore']['designacao']); ?>&nbsp;</td>
  <td>
    <?php echo $this->Html->link($sectore['Delegacao']['nome'], array('controller' => 'delegacaos', 'action' => 'view', $sectore['Delegacao']['id'])); ?>
  </td>
  <td class="actions">
    <?php $id = $sectore['Sectore']['id']; ?>
  <a href="#" class="w3-tag w3-hover-light-grey w3-round w3-green" onclick="document.getElementById('sectoresModalWindow<?php echo $id; ?>').style.display='block'">
    <span class='glyphicon glyphicon-edit'></span>
  </a>
    <?php echo $this->Form->postLink("<span class='glyphicon glyphicon-trash'></span>", array('action' => 'delete', $sectore['Sectore']['id']), array('class' => 'w3-round w3-tag w3-hover-light-grey w3-red', 'escape' => false, 'confirm' => __('Are you sure you want to delete # %s?', $sectore['Sectore']['id']))); ?>
  <!-- <button class="w3-tag w3-round pure-button w3-red" id="apagar" onclick="document.getElementById('confirmacao<?php echo $id; ?>').style.display='block'" ><span class='glyphicon glyphicon-trash'></span></button> -->
  </td>
</tr>
  <?php
    include('edit.ctp');
    include('confirmacao.ctp');
  ?>
<?php endforeach; ?>
