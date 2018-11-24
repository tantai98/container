<div class="testimonial">
	<div class="w3-testimonial-top">
		<h3>D</h3>
	</div>
	<div class="w3l-about w3l-testimonial">
		<div class="container">
			<div class="w3ls-heading">
				<h3>DỰ ÁN</h3>
			</div>
			<div class="wthree-news-grids">
				<?php foreach($postsProject as $keyPostsProject => $postProject): ?>
				<?php if($keyPostsProject%2 == 0): ?>
				<div class="col-md-12 agile-news-right-info margin-bot-60">
					<div class="col-sm-6 height-project">
						<img src="<?php echo e(asset($postProject->img)); ?>" class="with-100 height-100">
					</div>
					<div class="col-sm-6">
						<h5 class="title"><a href="<?php echo e(route('frontend.bai-viet.slug',['id'=>$postProject->id,'slug'=>$postProject->slug])); ?>"><?php echo e($postProject->title); ?></a></h5>
						<p class="font-post"><?php echo e($postProject->description); ?></p>
						<h6><i class="fa fa-calendar" aria-hidden="true"></i> 24th Dec,2016</h6>
					</div>
					<div class="clearfix"> </div>
				</div>
				<?php else: ?>
				<div class="col-md-12 agile-news-right-info margin-bot-60">
					<div class="col-sm-6">
						<h5 class="title"><a href="<?php echo e(route('frontend.bai-viet.slug',['id'=>$postProject->id,'slug'=>$postProject->slug])); ?>"><?php echo e($postProject->title); ?></a></h5>
						<p class="font-post"><?php echo e($postProject->description); ?></p>
						<h6><i class="fa fa-calendar" aria-hidden="true"></i> 24th Dec,2016</h6>
					</div>
					<div class="col-sm-6 height-project">
						<img src="<?php echo e(asset($postProject->img)); ?>" class="with-100 height-100">
					</div>
					<div class="clearfix"> </div>
				</div>
				<?php endif; ?>
				<?php endforeach; ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>