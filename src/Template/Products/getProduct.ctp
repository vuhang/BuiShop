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
<h1 style ="color: #6E6E6E; margin-left:38%;"> Sản phẩm theo loại</h1>
<div class="ttrang">
 <?php foreach($sp as $product): ?>
  <div class="htsp">
    <?= $this->Html->image($product['img'],array('alt'=>'CakePHP','style'=>'height:160px;
    width: 190px;'))?>
    <br> 
    <div style="margin-left:20px; with:50px;height:50px">
    <?php echo '<b>'.'Tên sản phẩm:'.'</b>'?>
    <?= $product->name?><br>
    <?php echo '<b>'.'Giá sản phẩm:'.'</b>'?>
    <?= h($product->Price) ?><br>
    <?= $this->Html->link('Chi tiết',['action' => '../products/details', $product->id], ['style' => '']) ?>
   </div>
  </div>
 <?php endforeach; ?>
</div>