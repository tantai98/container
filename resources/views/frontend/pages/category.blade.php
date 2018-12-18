@extends('frontend.layout')
@section('pages')
<!-- link category -->
<section class="bread-crumb margin-bottom-10 background-headlink">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb margin-top-bot-10 background-headlink">					
                    <li class="home">
                        <a itemprop="url" href="{{ route('frontend.trang-chu') }}" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>						
                        <span><i class="fa fa-angle-right"></i></span>
                    </li>
                    <li><strong><span itemprop="title">Danh mục sản phẩm</span></strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- link category -->
<div class="w3l-about w3l-news">
	<div class="container">
		<div class="wthree-news-grids">
            @foreach($products as $product)
            <div class="col-md-4 agile-news-right-info margin-bot-15">
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
            <div class="clearfix"> </div>
        </div>
	</div>
</div>
@endsection