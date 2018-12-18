<div class="news" id="news">
	<div class="w3-news-top">
		<h3>S</h3>
	</div>
	<div class="w3l-about w3l-news">
		<div class="container">
			<div class="w3ls-heading">
				<h3>SẢN PHẨM</h3>
			</div>
			<div class="text-center margin-top-15">
				<ul class="menu-in-box">
					<?php foreach($categoryProducts as $categoryProduct): ?>
					<li class="change-color-menu-product">
						<a href="javascript:void(0)" id-cate="<?php echo e($categoryProduct->id); ?>"><?php echo e($categoryProduct->name); ?></a>
					</li>
					<?php endforeach; ?>
				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree-news-grids" id="post_pro">
				<?php foreach($products as $product): ?>
				<div class="col-md-4 agile-news-right-info">
					<div><img src="<?php echo e(asset($product->img)); ?>" class="with-100 height-img-pro"></div>
					<div class="col-sm-12 agile-news-img-info">
						<h5><a href="<?php echo e(route('frontend.san-pham.slug',['id'=>$product->id,'slug'=>$product->slug])); ?>"><?php echo e($product->name); ?></a></h5>
						<div class="agileits-w3layouts-border"> </div>
						<p><span>Giá bán:</span><?php echo e($product->price); ?> VND</p>
						<h6><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo e($product->created_at); ?></h6>
					</div>
					<div class="clearfix"> </div>
				</div>
				<?php endforeach; ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>