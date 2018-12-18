<div class="gallery" id="gallery">
	<div class="w3-gallery-top">
		<h3>M</h3>
	</div>
	<div class="w3l-about w3l-gallery">
		<div class="container">
			<div class="w3ls-heading">
				<h3>Môi trường làm việc</h3>
			</div>
			<div class="text-center margin-top-15">
				<ul class="menu-in-box">
					<?php foreach($categorieChilds as $categorieChild): ?>
					<li class="change-color-menu">
						<a href="javascript:void(0)" data-id="<?php echo e($categorieChild->id); ?>"><?php echo e($categorieChild->name); ?></a>
					</li>
					<?php endforeach; ?>
				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="gallery-grids" id="post_env">
					<?php foreach($posts as $post): ?>
					<div class="col-md-3 gallery-grid height-env">
						<div class="grid height-100">
							<figure class="effect-apollo">
								<a class="example-image-link" href="<?php echo e(route('frontend.bai-viet.slug',['id'=>$post->id,'slug'=>$post->slug])); ?>" data-lightbox="example-set" data-title="$post->title" target="_blank">
									<img src="<?php echo e(asset($post->img)); ?>" alt="" class="height-100" />
									<figcaption>
									</figcaption>	
								</a>
							</figure>
						</div>
					</div>
					<?php endforeach; ?>
					<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>