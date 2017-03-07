<?php foreach($type as $value):?>
 <?= $this->Html->link($value->tendm, ['action' => '../sanphams/getsanpham',$value->id_dm]) ?>
<?php endforeach;?>