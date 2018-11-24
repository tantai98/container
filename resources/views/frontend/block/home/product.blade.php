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
					@foreach($categoryProducts as $categoryProduct)
					<li class="change-color-menu-product">
						<a href="javascript:void(0)" id-cate="{{ $categoryProduct->id }}">{{ $categoryProduct->name }}</a>
					</li>
					@endforeach
				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree-news-grids" id="post_pro">
				@foreach($products as $product)
				<div class="col-md-4 agile-news-right-info">
					<div><img src="{{ asset($product->img) }}" class="with-100 height-img-pro"></div>
					<div class="col-sm-12 agile-news-img-info">
						<h5><a href="{{ route('frontend.san-pham.slug',['id'=>$product->id,'slug'=>$product->slug]) }}">{{ $product->name }}</a></h5>
						<div class="agileits-w3layouts-border"> </div>
						<p>{{ $product->short_description }}</p>
						<h6><i class="fa fa-calendar" aria-hidden="true"></i> 24th Dec,2016</h6>
					</div>
					<div class="clearfix"> </div>
				</div>
				@endforeach
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>