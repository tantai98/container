@foreach($products as $product)
<div class="col-md-4 agile-news-right-info">
	<div><img src="{{ asset($product->img) }}" class="with-100 height-img-pro"></div>
	<div class="col-sm-12 agile-news-img-info">
		<h5><a href="{{ route('frontend.san-pham.slug',['id'=>$product->id,'slug'=>$product->slug]) }}">{{ $product->name }}</a></h5>
		<div class="agileits-w3layouts-border"> </div>
		<p><span>Giá bán:</span>{{ $product->price }} VND</p>
		<h6><i class="fa fa-calendar" aria-hidden="true"></i> {{ $product->created_at }}</h6>
	</div>
	<div class="clearfix"> </div>
</div>
@endforeach