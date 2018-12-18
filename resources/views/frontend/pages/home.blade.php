@extends('frontend.layout')
@section('pages')
<!-- about -->
@include('frontend.block.home.about')
<!-- //about -->
<!-- services -->
@include('frontend.block.home.service')
<!-- //services -->
<!-- work environment -->
@include('frontend.block.home.environment')
<!-- //work environment -->
<!-- project -->
@include('frontend.block.home.project')
<!-- //project -->
<!-- product -->
@include('frontend.block.home.product')
<!-- //product -->
<!-- team -->
@include('frontend.block.home.team')
<!-- //team -->
<!-- customer -->
@include('frontend.block.home.customer')
<!-- //customer -->
<!-- contact -->
@include('frontend.block.home.contact')
<!-- //contact -->

<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        	<div class="tex-center">
        		<span style="font-size: 80px;color: green;">
        			<i class="fa fa-check-circle"></i>
        		</span>
        	</div>
        	<div class="tex-center"><h1>Đăng ký thành công !</h1></div>
        	<div class="tex-center"><p>Cám ơn bạn đã quan tâm đến chúng tôi !</p></div>
        	<div class="tex-center">
        		<p>Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất</p>
	        </div>
	        <div class="tex-center margin-bot-15">
	        	<button id="close" style="text-align: center;width: 65%;background-color: #fff;border: solid 1px green;border-radius: 12px;padding: 7px;"><b style="color: green">Đóng</b></button>
	        </div>
        </div>
    </div>
</div>
@endsection