@extends('frontend.layout')
@section('title','Blog')
@section('css')
	<link rel="stylesheet" href="{{asset ('frontend/html/css/blog.css') }}">
@endsection
@section('content')
<!-- blog style-->

    <!-- end-catagory style-->
<!-- end parallax section -->

<!-- phần đường dẫn -->
<section class="t_section_content_products">
    <div class="container d_section_content_pr t_section_content_pr">
        <div class="row">
            <div class="col-md-12">
                <ul class="d_cate_products" style="border-top: 1px solid #d7d7d7 !important;">
                    <li style="color:#c3c3c3"><a href="" style="color:#c3c3c3">Trang chủ</a></li>
                    <li style="color:#d6e9d7">/</li>
                    <li style="color:#c3c3c3"><a href="" style="color:#c3c3c3" href="">Catagories1</a></li>
                    <li style="color:#d6e9d7">/</li>
                    <li>Máy móc thiết bị</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- phần đường dẫn -->
<!--content-->
<div class="content">
	<div class="container">
		<div class="row">
			<!--left sile bar-->
				<div class="col-md-8 left-slide-bar col-xs-12 col-sm-8">
					<p>Lorem ipsum dolor sit amet</p>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
					<div>
						<img style="margin-top: 21px;" src="https://placeholdit.imgix.net/~text?txtsize=40&txt=640%C3%97360&w=640&h=360">
					</div>
					<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </span>
				</div>
			<!--left sile bar-->
			<!--right sile bar-->
			<div class="col-md-4 right-slide-bar col-xs-12 col-sm-4 f4">
				<div class="tan-canle">
					<p>Lorem ipsum</p>
						<ul style="margin-bottom: 22px;">
							<li class="t-blog"><a href="#">Lorem ipsum dolor sit amet</a></li>
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
						</ul>
					<p>Lorem ipsum dolor</p>
						<ul>
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
							<li><a href="#">Lorem ipsum dolor sit amet</a></li>
						</ul>
				</div>
				
			</div><!--right sile bar-->
		</div><!--end row-->
	</div><!--end container-->
</div>
<!--content-->
@endsection
@section('js')
	<script type="text/javascript">
		$('.f4 li').click(function(){
			$(this).parent().parent().find('.t-blog').removeClass('t-blog');
			$(this).addClass('t-blog');
		});
	</script>
@endsection