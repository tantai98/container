@foreach($products as $product)
<div class="col-md-4 agile-news-right-info">
	<div><img src="{{ asset($product->img) }}" class="with-100"></div>
	<div class="col-sm-12 agile-news-img-info">
		<h5><a href="{{ route('frontend.san-pham.slug',['id'=>$product->id,'slug'=>$product->slug]) }}">{{ $product->name }}</a></h5>
		<div class="agileits-w3layouts-border"> </div>
		<p>{{ $product->short_description }}</p>
		<h6><i class="fa fa-calendar" aria-hidden="true"></i> 24th Dec,2016</h6>
	</div>
	<div class="clearfix"> </div>
</div>
@endforeach