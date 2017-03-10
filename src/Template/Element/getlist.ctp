<?php foreach($listdms as $value):?>
 <?= $this->Html->link($value->name,['action' => '../products/getproduct',$value->id]);?>
<?php endforeach;?>