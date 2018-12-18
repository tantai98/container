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
                    <li><strong><span itemprop="title">Chi tiết sản phẩm</span></strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- link category -->
<div class="w3l-about w3l-news">
	<div class="container">
		<div class="wthree-news-grids col-md-9">
            <div class="col-md-6">
                <div style="border: solid 1px;box-shadow: 2px 4px 8px 0px;">
                    <img src="<?php echo e(asset($products->img)); ?>" class="with-100">
                </div>
            </div>
            <div class="col-md-6">
                <h4><b><?php echo e($products->name); ?></b></h4>
                <p style=" font-size: 35px;color: #E67300;">
                    <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                </p>
                <p>
                    <span>Mã sản phẩm:</span><strong> CT001</strong>
                </p>
                <p><span>Lượt xem:</span><strong> 540</strong></p>
                <p>Giá bán: <span style="color: red"><?php echo e($products->price); ?></span> VND</p>
                <div class="share-forr">
                    <span class="">Chia sẻ</span>
                    <a class="facebook customer share" href="">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a class="google_plus customer share" href=""><i class="flaticon-social"></i></a>
                    <a class="" href=""><i class="flaticon-social-2"></i></a>
                    <a href=""><i class="flaticon-circle"></i></a>
                </div>
            </div>
            <div class="col-md-12 margin-top-15">
                <h2 style="border-top: 1px solid #ccc" class="padding-top-10">Thông tin chi tiết</h2>
                <?php echo $products->content; ?>

            </div>
		</div>
		<!-- slide bar -->
		<div class="col-lg-3 col-md-3 col-12">
            <div class="shop_sidebar">
                <div class="sidebar_widget mb-50">
                    <div class="widget_title">
                        <h3>Danh mục sản phẩm</h3>
                    </div>
                    <div class="widget_categories">
                       <ul>
                        <?php foreach($cate as $value): ?>
                            <li><a href="<?php echo e(route('getProDetail',['slug' => $value->prefix])); ?>"><?php echo e($value->name); ?><span class="caet_count"> (<?php echo e($value->total); ?>)</span></a></li>
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