<!DOCTYPE html>
<html>
<head>
<style>
</style>
<div class="col-md-9 single-main-left">
<div class="sngl-top">
					<div class="col-md-5 single-top-left">	
						<div class="flexslider">
							<div class="flex-viewport" style="overflow: hidden; position: relative;margin-top: 46px;">
							<?= $this->Html->image($sp['img'],array('alt'=>'CakePHP','style'=>'height: 388px;
    						width: 244px;'))?>
								</div><ol class="flex-control-nav flex-control-thumbs"></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
<!-- FlexSlider -->
<?= $this->Html->script('jquery.flexslider'); ?>
<?= $this->Html->css('flexslider.css') ?>

	<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
				</div>	
				<div class="col-md-7 single-top-right">
					<div class="details-left-info simpleCart_shelfItem" style="margin-left: 80px;
    					margin-top: 51px;">
						<h3>Accessories Latest</h3>
						<div class="price_single">
						Name  : <?= h($sp->name) ?><br>
						Price : <?= h($sp->Price) ?><br>
						Source: <?= h($sp->source)?><br>
						Number: <?= h($sp->number)?>
						</div>
						<ul class="product-colors">
							<h3>available Colors ::</h3>
							<li><a class="color1" href="#"><span> </span></a></li>
							<li><a class="color2" href="#"><span> </span></a></li>
							<li><a class="color3" href="#"><span> </span></a></li>
							<li><a class="color4" href="#"><span> </span></a></li>
							<li><a class="color5" href="#"><span> </span></a></li>
							<li><a class="color6" href="#"><span> </span></a></li>
							<li><a class="color7" href="#"><span> </span></a></li>
							<li><a class="color8" href="#"><span> </span></a></li>
							<div class="clear"> </div>
						</ul>
						<ul class="size">
							<h3>Length</h3>
							<li><a href="#">7</a></li>
							<li><a href="#">6</a></li>
						</ul>
						<div class="quantity_box">
							<ul class="product-qty">
								<span>Quantity:</span>
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select>
							</ul>
						</div>
					<div class="clearfix"> </div>
				<div class="single-but item_add">
					<input type="submit" value="add to cart">
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>