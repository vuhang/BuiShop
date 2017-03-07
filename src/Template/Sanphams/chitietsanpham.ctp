<!DOCTYPE html>
<html>
<head>
<style>
.htsp{
  float:left;
  width:215px;
  padding-top: 20px;
}
</style>
<h1 style ="color: #6E6E6E; margin-left:38%;"> Chi Tiết Sản Phẩm</h1>
<div class="ttrang">
<div class="htsp">
<?php echo '<b>'.'Hình ảnh sản phẩm:'.'</b>'?><br>
 <?= $this->Html->image($sp['anh'],array('alt'=>'CakePHP','style'=>'height:250px;
    width: 250px;'))?><br>
 <?php echo '<b>'.'Mã sản phẩm:'.'</b>'?>
 <?= h($sp->id)?><br>
 <?php echo '<b>'.'Tên sản phẩm:'.'</b>'?>
 <?= h($sp->name) ?><br>
 <?php echo '<b>'.'Giá sản phẩm:'.'</b>'?>
 <?= h($sp->Price) ?><br>
<?=$this->Form->button('Mua hàng');?>
</div>
</div>