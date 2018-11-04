<div class="banner-top">
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div class="w3layouts-banner-top">
						<div class="container">
							<div class="agileits-banner-info">
								<h3>C</h3>
								<h4>Chất Lượng</h4>
							</div>	
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="container">
							<div class="agileits-banner-info1">
								<h3>U</h3>
								<h4>Uy Tín</h4>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top2">
						<div class="container">
							<div class="agileits-banner-info2">
								<h3>N</h3>
								<h4>Nhanh Chóng</h4>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top3">
						<div class="container">
							<div class="agileits-banner-info3">
								<h3>B</h3>
								<h4>Bảo Mật</h4>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<script src="{{ asset('web/js/responsiveslides.min.js') }}"></script>
		<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					  // Slideshow 4
					  $("#slider4").responsiveSlides({
						auto: true,
						pager:true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
					  });
				
					});
		</script>
		<!--banner Slider starts Here-->
	</div>
</div>