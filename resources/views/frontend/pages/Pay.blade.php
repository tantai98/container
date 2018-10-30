 @extends('frontend.layout')
        @section('title','Pay')
        @section('css')
            <link rel="stylesheet" href="{{ asset('frontend/html/css/linhhandmade-Pay.css') }}">
        @endsection
        @section('content')
        @include('frontend.partials.link')
        		<!--Phần nội dung chính-->
		<section style="padding:50px 0px;padding-bottom:20px; font-size: 10pt;" class="d-section-pdt">
			<div class="container">
				<div class="row">
					<div class="col-md-8 t-khungthuoctinh">
						<div>
							<h4 class="t-namepage">Thanh toán</h4>
							<div class="t-tungmuc">								
								<div class="t-stt"><span>1</span></div>
								<Div class="t-noidung">
									<p>Đơn hàng của bạn chưa được xác nhận. Để xác nhận Đơn hàng này bạn vui lòng thanh toán cho chúng tôi bằng cách chuyển khoản đến một trong các tài khoản sau cùng với nội dung chuyển khoản là <span style="font-family: 'Roboto Bold'; color: #0d0d0d;">Thanh toán Đơn hàng X23FNH</span></p>
									<div>
										<div class="t-img-bank"><img src="http://placehold.it/160x55"/></div>
										<div class="t-tt-cus">
											<p>Nguyễn Thanh Trà</p>
											<p>Số tài khoản : <span>01004567890</span></p>
											<p>Ngân hàng phát triển nông thôn - Chi nhánh Ba Đình - Hà Nội</p>
										</div>
										<div style="clear:both"></div>
									</div>
									<div>
										<div class="t-img-bank"><img src="http://placehold.it/160x55"/></div>
										<div class="t-tt-cus">
											<p>Nguyễn Thanh Trà</p>
											<p>Số tài khoản : <span>01004567890</span></p>
											<p>Ngân hàng phát triển nông thôn - Chi nhánh Ba Đình - Hà Nội</p>
										</div>
										<div style="clear:both"></div>
									</div>
									
								</div>
								<div style="clear:both"></div>
							</div>
							<div class="t-tungmuc t-noidung2">								
								<div class="t-stt"><span>2</span></div>
								<Div class="t-noidung">
									<p>Sau khi chuyển khoản thành công chúng tôi sẽ liên hệ với bạn để xử lý Đơn hàng này. Bạn có thể tìm hiểu thêm về <a href="" style="color:#75005F">Chính sách chuyển hàng</a> của chúng tôi.</p>								
								</div>
								<div style="clear:both"></div>
							</div>
							<div class="t-tungmuc d-noidung3" style="margin-bottom: 57px;">								
								<div class="t-stt"><span>3</span></div>
								<Div class="t-noidung t-tt-email">
									<p>Thông tin về Đơn hàng của bạn đã được gửi về địa chỉ Email <a href="" style="color:#75005F" >nguyenthanhtra@yahoo.com</a></p>
									<p>Tổng giá trị Đơn hàng  <span>200.000đ</span></p>
									<p>Số tiền cần thanh toán  <span>180.000đ</span></p>
									<p>Mã đơn hàng  X23FHN<span>X23FHN</span></p>
								</div>
								<div style="clear:both"></div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="t-lorem">
							<div>
								<h5>Lorem ipsum</h5>
								<p><a href="" class="t-doimau">Lorem ipsum dolor sit amet</a></p>
								<p><a href="">Lorem ipsum dolor</a></p>
								<p><a href="">Lorem ipsum dolor sit amet consecteur</a></p>
							</div>
							<div>
								<h5 style="margin-top: 26px;">Lorem ipsum</h5>
								<p><a href="">Lorem ipsum dolor sit amet</a></p>
								<p><a href="">Lorem ipsum dolor</a></p>
								<p><a href="">Lorem ipsum dolor sit amet consecteur</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--hết Phần nội dung chính-->
        @endsection
        @section('js')
		<script type="text/javascript">
			$('.t-lorem a').click(function(){
				$(this).parent().parent().parent().find('.t-doimau').removeClass('t-doimau');
				$(this).addClass('t-doimau');
			});
		</script>
		@endsection