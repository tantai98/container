<?php $__env->startSection('pages'); ?>
<!-- link category -->
<section class="bread-crumb margin-bottom-10 background-headlink">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb margin-top-bot-10 background-headlink">					
                    <li class="home">
                        <a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a>						
                        <span><i class="fa fa-angle-right"></i></span>
                    </li>
                    <li><strong><span itemprop="title">Chi tiết bài viết</span></strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- link category -->
<div class="w3l-about w3l-news">
	<div class="container">
		<div class="wthree-news-grids col-md-9">
            <div><h1><?php echo e($post->title); ?></h1></div>
            <div><?php echo $post->content; ?></div>
		</div>
		<!-- slide bar -->
		<div class="col-lg-3 col-md-8 col-12">
            <div class="shop_sidebar">
                <div class="sidebar_widget mb-50">
                    <div class="widget_title">
                        <h3>Danh mục bài viết</h3>
                    </div>
                    <div class="widget_categories">
                       <ul>
                            <?php foreach($cate as $value): ?>
                            <li><a href="<?php echo e(route('getPostCategory',['slug' => $value->prefix])); ?>"><?php echo e($value->name); ?><span class="caet_count">(<?php echo e($value->total); ?>)</span></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		<!-- slide bar -->
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>