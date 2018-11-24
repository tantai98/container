@extends('frontend.layout')
@section('pages')
<!-- link category -->
<section class="bread-crumb margin-bottom-10 background-headlink">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb margin-top-bot-10 background-headlink">					
                    <li class="home">
                        <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>						
                        <span><i class="fa fa-angle-right"></i></span>
                    </li>
                    <li><strong><span itemprop="title">Danh sách sản phẩm 1</span></strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- link category -->
<div class="w3l-about w3l-news">
	<div class="container">
		<div class="wthree-news-grids col-md-9">
			{!! $products->content !!}
		</div>
		<!-- slide bar -->
		<div class="col-lg-3 col-md-8 col-12">
            <div class="shop_sidebar">
                <div class="sidebar_widget mb-50">
                    <div class="widget_title">
                        <h3>Danh mục sản phẩm</h3>
                    </div>
                    <div class="widget_categories">
                       <ul>
                            <li><a href="#">Danh mục 1<span class="caet_count">(6)</span></a></li>
                            <li><a href="#">Danh mục 2<span class="caet_count">(8)</span></a></li>
                            <li><a href="#">Danh mục 3<span class="caet_count">(7)</span></a></li>
                            <li><a href="#">Danh mục 4<span class="caet_count">(10)</span></a></li>
                            <li><a href="#">Danh mục 5<span class="caet_count">(5)</span></a></li>
                            <li><a href="#">Danh mục 6<span class="caet_count">(12)</span></a></li>
                            <li><a href="#">Danh mục 7<span class="caet_count">(15)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		<!-- slide bar -->
	</div>
</div>
@endsection