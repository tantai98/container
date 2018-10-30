@extends('frontend.layout')
@section('title','Cart')
@section('css')
	<link rel="stylesheet" href="{{asset ('frontend/html/css/linhhandmade-cart.css')}}" />
@endsection
@section('content')

<style>
	.d-district{
		display: none;
	}
	.d-item2{
		display: none;
	}
	
</style>
	        <!-- phần đường dẫn -->
        <section class="t_section_content_products">
        	<div class="container d_section_content_pr t_section_content_pr">
        		<div class="row">
        			<div class="col-md-12">
        				<ul class="d_cate_products">
        					<li style="color:#c3c3c3"><a href= ""style="color:#c3c3c3">Trang chủ</a></li>
							<li style="color:#d6e9d7">/</li>
        					<li style="color:#c3c3c3"><a href="" style="color:#c3c3c3" href="">Catagories1</a></li>
							<li style="color:#d6e9d7">/</li>
        					<li>Tên Sản phẩm</li>
        				</ul>
        			</div>
        		</div>
        	</div>
        </section>
		<!--Hết phần đường dẫn-->
		<!--Phần nội dung chính-->
		<section class="d-margin-header" style="padding:43px 0px;padding-bottom:0px" >
			<Div class="container">
				<div class="row show_cart">
				<?php $list_pro = Session::get('product');
									$total = 0;
								?>
				@if(sizeof($list_pro)==null)
					<div class="col-md-12  d-item2" style="display:block">
						<span style="font-size:11pt;font-family:Roboto Bold; margin-left:324px;">Không có sản phẩm nào trong giỏ hàng của bạn</span>
						<div style="background-color:#7b1fa2; line-height: 40px; margin-left:382px; border-radius: 4px;margin-top: 12px; width:200px;height:40px;text-align:center;"><a style="color: #fff;font-size: 10pt;font-family:Roboto Bold;text-transform: uppercase; " href="{!! route('view.category') !!}">Tiếp Tục mua hàng</a></div>
					</div>
				@else		
					<div class="col-md-8 d-item1">
						<div>
							<table class="table shop-cart text-center t-table">
								<thead>
									<tr>
										<th class="t-pd-left-big text-left t-pd-left-big-db" style="padding-bottom:16px;">Sản phẩm</th>
										<th class="text-left t-pd-left-big t-pd-left-big-sl" style="padding-bottom:18px;">Số lượng</th>
										<th class="text-left t-pd-left-big xs-display-none" style="padding-bottom:18px;">Thành tiền</th>
										<th></th>
									</tr>
								</thead>
								<tbody class="t-tbody">
								
								@if($list_pro)
								@foreach($list_pro as $key => $item)									
									<tr id="d-list-shopingcart" class="class_{!! $item['product']->id !!} !!}" data-id="{!! $item['product']->id !!}">
										<td class="product-thumbnail t-td-img text-left" style="padding-top: 19px;width:205px">
											<a class="" href="shop-single-product.html"><img style=;"  src="{{ $item['product']->img }}" alt="" ></a>
										</td>
										<td class="t-td-sl text-left">
											<div class="t-padding-10">
											   <div class="t-ten-gia">
													<p>{!! $item['product']->name !!}</p>
													<span>
														<?php 
															$price = $item['product']->price;
															if($item['product']->price_sale)
															{
																$price = $item['product']->price_sale;
															}
															$price = $price;
															$total += $price * $item['num'];
															$num = $item['num'];
														?>
														<span class="amount" data-value="{{$price}}">{{number_format( (int)$price,0,'','.')}}đ</span>
														
												</div>
											   <div class="select-style t-select-style med-input shop-shorting shop-shorting-cart no-border-round d-select" data-id="{{ $item['product']->id }}" style="background-size: 12px 12px">
													<select class="pro-select">
														<option @if($num==1) selected @endif class="q-ft-option" value="1">01</option>
														<option @if($num==2) selected @endif class="q-ft-option" value="2">02</option>
														<option @if($num==3) selected @endif  class="q-ft-option" value="3">03</option>
														<option @if($num==4) selected @endif  class="q-ft-option" value="4">04</option>
														<option @if($num==5) selected @endif  class="q-ft-option" value="5">05</option>
														<option @if($num==6) selected @endif  class="q-ft-option" value="6">06</option>
													</select>
												</div>
											</div>
										</td>
										<td class="product-subtotal text-left t-gia-gio"><span id="d-total">{{ number_format((int)($price*$num),0,'','.') }}đ</span></td>
										<td class="product-remove q-padding-bot-2 text-center" style="vertical-align: 150px; padding-top: 8px;">
												<span id="d-del-cart" data-id="{!! $item['product']->id !!}" style="font-size:15pt;color:#7f7f7f;cursor:pointer;">
												×
												</span>
										</td>
									</tr>
								@endforeach
								@endif
								</tbody>
							</table>
						</Div>
					</div>
					<div class="col-md-4 d-item1">
						<div class="t-cart-form">
							<form id="d-form-cart">
							<input type="hidden" name="_token" value="{!! csrf_token() !!}">
								<div>
									<table>
										<tr>
											<td><span>Tổng tiền</span></td>
											<td class="text-right"><span id='total' value="{!! $total !!}">{{number_format( (int)$total,0,'','.')}}đ</span></td>
										</tr>
									</table>
								</div>
								<div class="t-sel-ct" style="padding-bottom: 15px;">
									<div class="select-style t-select-style med-input shop-shorting shop-shorting-cart no-border-round " id="d-an" style="background-size: 10px 10px" >
										<?php $province = App\Province::orderBy('type','asc')->orderBy('name','asc')->get(); ?>
										<select class="d-list-province" required>
											<option class="q-ft-option" value="0" >Chọn Tỉnh , Thành Phố</option>
											@foreach($province as $item)
												<option class="q-ft-option" value="{!! $item->id !!}" required>{!! $item->name !!}</option>
											@endforeach
										</select>
										

									</div>
									<div class="select-style t-select-style med-input shop-shorting no-border-round d-district" style="background-size: 10px 10px;width:100%;" >
										<select class="d-district-list" required>
												
										</select>
										

									</div>
									<div>
										<table>
											<tr>
												<td><span>Phí vận chuyển</span></td>
												<td class="text-right d-transpost1"></td>
											</tr>
										</table>
									</div>
								</div>
								<div>
									<table>
										<tr class="t-total-cart">
											<td><span>Tổng đơn hàng</span></td>
											<td class="text-right"><span id="all-total">{{ number_format((int)$total,0,'','.') }}đ</span></td>
										</tr>
									</table>
								</div>
								<div class="d-tb" style="color:red; font-family:Roboto Bold;margin-top:10px; "></div>
								<div class="t-btn"><a class="d-click" href="{{ route('get.oder') }}" >Đặt hàng</a></div>
							</form>
						</div>	
					</div>
				@endif
				</div>
				
			</div>
		</section>
		<!--Phần nội dung chính-->
		@endsection
		@section('js')
			<script>
				$(document).on('change','.d-select',function(){
                  money = $(this).parent().children('.t-ten-gia').find('.amount').data('value');
                  num = $(this).children('.pro-select').find(':selected').val();
                  tamp1 =  $(this).parent().parent().next();
                  id = $(this).data('id');
                  transpost = $('.d-district-list').val();
                  $.ajax({
                    headers: {
                          'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    type:"post",
                    url:"{{route('ajax.total.product')}}",
                    data:{'id':id,'num':num},
                    success:function(data){
                        all1=parseFloat(money)*num;
                         all1 = (all1 + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
                        $(tamp1).find('#d-total').text(all1 +" đ");
                        $('#total').attr('value',parseFloat(data)).text((data + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"đ");
                        // -----
                        if(transpost == null){
                        	$('#all-total').text((data + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"đ");
                        }else{
                        	data1 = parseInt(data) + parseInt(transpost);
                        	$('#all-total').text((data1 + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"đ")
                        }
                    },
                    cache:false,
                    dataType: 'html'
                  });
                 });

                  $(document).on('change','.d-list-province',function(){
			          id = $(this).val();
			          container = $(this).parent().next().find('.d-district-list');
			          // console.log(price);
			           $.ajax({
			              headers: {
			                  'X-CSRF-TOKEN': '{{ csrf_token() }}'
			              },
			              type:"post",
			              url:"{{route('ajax.province.fronted')}}",
			              data:{'id':id},
			              success:function(data){
			                // console.log(data);
			                $('.d-district').show();
			                $(container).html(data.html);
			                if(data.id == 0){
			                  $('.d-district').hide();
			                }
			              },
			              cache:false,
			              dataType: 'json'
			            });
			            
			          });
        $(document).on('change','.d-district',function(){
          price = $(this).children('.d-district-list').val();
          price1 = (price + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."); 
          all = $('#total').attr('value');
          transpost = $(this).next().find('.d-transpost1');
          $(transpost).text(price1 + "đ");
            total = parseFloat(price) + parseFloat(all); 
            $('#all-total').text((total + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"đ");
        });

        $(document).on('click','.d-click',function(e){
        	e.preventDefault();
        	link = $(this).attr('href');
        	value = $('.d-list-province').val();
        	value1 = $('.d-district-list').val();
        	 if(value == 0){
        	 	$('.d-tb').text('Xin Vui Lòng Chọn Tỉnh hoặc Thành Phố');	
        	 }else{
        	 	if ( value1 == 0) {
        	 		$('.d-tb').text('Xin Vui Lòng Chọn Quận hoặc Huyện');
        	 	}else{
        	 		window.location = link;
        	 	}	
        	 }
        });

        $(document).on('click','#d-del-cart',function(){
        	id = $(this).data('id');
        	container = $(this).parent().parent();
        	transpost = $('.d-district-list').val();

        	show_cart = '<div class="col-md-12  d-item2" style="display:block">'+
							'<span style="font-size:11pt;font-family:Roboto Bold; margin-left:324px;">Không có sản phẩm nào trong giỏ hàng của bạn</span>'+
							'<div style="background-color:#7b1fa2; line-height: 40px; margin-left:382px; border-radius: 4px;margin-top: 12px; width:200px;height:40px;text-align:center;">'+
								'<a style="color: #fff;font-size: 10pt;font-family:Roboto Bold;text-transform: uppercase; " href="{!! route('view.category') !!}">Tiếp Tục mua hàng</a>'+
							'</div>'+
						'</div>';
        	$.ajax({
				headers: {
					  'X-CSRF-TOKEN': '{{ csrf_token() }}'
				},
				type:"post",
				url:"{{route('ajax.del.cart')}}",
				data:{'id':id},
				success:function(data){
					$(container).remove();
					$('#total').text((data + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"đ").attr('value',data);
					num = $('.l_cart2').text() - 1;
					$('.l_cart2').text(num);
					$('#d-hover').attr('data-size',num);
					id_li = $('#d-list-cart-ajax').data('id');
					$('.classli_'+id).remove();
					if(data == 0){
						$('.show_cart').html(show_cart);
					}
					if(transpost == null){
                    	$('#all-total').text((data + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"đ");
                    }else{
                    	if(data == 0){
                    		$('.show_cart').html(show_cart);
                    	}
                    	data1 = parseInt(data) + parseInt(transpost);
                    	$('#all-total').text((data1 + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"đ")
                    }
				},
				cache:false,
				dataType: 'text'
			});
        });

        // $(document).on('click','.d-click',function(){
        // 	id = $('.d-district-list').find(':selected').data('id');
        // 	href = "{{ route('get.oder') }}?abc="+id;
        // 	link = $(this).css('href',href);
        // 	window.location = link;
        // });
				
			</script>
		@endsection
