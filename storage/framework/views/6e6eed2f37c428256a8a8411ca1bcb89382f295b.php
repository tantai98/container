<?php $__env->startSection('pages'); ?>
<!-- link category -->
<section class="bread-crumb margin-bottom-10 background-headlink">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb margin-top-bot-10 background-headlink">					
                    <li class="home">
                        <a itemprop="url" href="<?php echo e(route('frontend.trang-chu')); ?>" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>						
                        <span><i class="fa fa-angle-right"></i></span>
                    </li>
                    <li><strong><span itemprop="title">Danh mục bài viết</span></strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- link category -->
<div class="w3l-about w3l-news">
	<div class="container">
		<div class="wthree-news-grids">
            <div class="col-md-8 agile-news-right-info">
                <?php foreach($posts as $value): ?>
                <div class="col-md-12 margin-bot-20 padding-bot-20 cate-post ">
                    <div class="col-sm-6 height-project">
                        <img src="<?php echo e(asset($value->thumb_images)); ?>" class="with-100 height-100">
                    </div>
                    <div class="col-sm-6">
                        <h5 class="title"><a href="<?php echo e(route('frontend.bai-viet.slug',['slug' => $value->slug,'id'=>$value->id])); ?>"><?php echo e($value->title); ?></a></h5>
                        <p class="font-post"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo e($value->created_at); ?></p>
                        <h6><?php echo e($value->description); ?> ...</h6>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>