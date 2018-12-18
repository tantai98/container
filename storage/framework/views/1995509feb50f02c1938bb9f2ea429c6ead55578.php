<div class="contact" id="contact">
	<div class="w3-contact-top">
		<h3>L</h3>
	</div>
	<div class="w3l-about w3l-team">
		<div class="container">
			<div class="w3ls-heading">
				<h3>LIÊN HỆ</h3>
			</div>
			<div class="agile-contact-grids">
				<div class="col-md-5 address">
					<h4>Thông Tin Liên Hệ</h4>
					<div class="address-row">
						<div class="col-md-2 w3-agile-address-left">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 w3-agile-address-right">
							<h5>Địa chỉ</h5>
							<p>Tòa nhà c5, Khuất Duy Tiến, Hà Nội </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row">
						<div class="col-md-2 w3-agile-address-left">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 w3-agile-address-right">
							<h5>Email</h5>
							<p><a href="mailto:info@example.com"> mail@example.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row">
						<div class="col-md-2 w3-agile-address-left">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-md-10 w3-agile-address-right">
							<h5>Số điện thoại</h5>
							<p>0982 60 1111</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-7 contact-form">
					<form action="#" method="post" id="contact-form">
						<input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />
						<input type="text" name="First Name" placeholder="Họ" required="">
						<input class="email" name="Last Name" type="text" placeholder="Tên" required="">
						<input type="text" name="Number" placeholder="Số điện thoại" required="">
						<input class="email" name="Email" type="email" placeholder="Email" required="">
						<textarea name="Message" placeholder="Lời nhắn" required=""></textarea>
						<input type="submit" value="SUBMIT">
					</form>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
</div>