<div class="banner-top">
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div style="background: url(<?php echo e(url($banner[0]->img_1)); ?>) no-repeat 0px 0px;background-size: cover;">
						<div class="container">
							<div class="agileits-banner-info">
								<h3><?php echo e(substr($banner[0]->text_1, 0, 1)); ?></h3>
								<h4><?php echo e($banner[0]->text_1); ?></h4>
							</div>	
						</div>
					</div>
				</li>
				<li>
					<div style="background: url(<?php echo e(url($banner[0]->img_2)); ?>) no-repeat 0px 0px;background-size: cover;">
						<div class="container">
							<div class="agileits-banner-info1">
								<h3><?php echo e(substr($banner[0]->text_2, 0, 1)); ?></h3>
								<h4><?php echo e($banner[0]->text_2); ?></h4>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div style="background: url(<?php echo e(url($banner[0]->img_3)); ?>) no-repeat 0px 0px;background-size: cover;">
						<div class="container">
							<div class="agileits-banner-info2">
								<h3><?php echo e(substr($banner[0]->text_3, 0, 1)); ?></h3>
								<h4><?php echo e($banner[0]->text_3); ?></h4>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<script src="<?php echo e(asset('web/js/responsiveslides.min.js')); ?>"></script>
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