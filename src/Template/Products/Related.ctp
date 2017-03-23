<style>
.htsp{
  float:left;
  width:215px;
  padding-top: 20px;
}
</style>

<div class="col-md-12 p-left">
<div class="product-one">
    <h2 class="tilte1">Sản phẩm liên quan</h2>
 <?php foreach($lq as $product): ?>
   <div class="col-md-3 product-left single-left"> 
          <div class="p-one simpleCart_shelfItem">
            <a href="single.html">
                <?= $this->Html->image($product['img'],array('alt'=>'CakePHP','style'=>'height:160px;
                width: 190px;','class'=>'img-rounded'))?>
         
              </a>
            <h4 class="h4name"><?= h($product->name)?></h4>
            <p><a class="item_add" href="#"><i></i> <span class=" item_price"><?= h($product->Price) ?></span></a></p>
            <div class="item_chitiet">
            <?= $this->Html->link('Chi tiết',['action' => '../products/details', $product->id], ['style' => '']) ?>
            </div>
          </div>
        </div>
 <?php endforeach; ?>
</div>
</div>

       

