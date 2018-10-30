 
        <?php $__env->startSection('title','Pro'); ?>
        <?php $__env->startSection('css'); ?>
            <link rel="stylesheet" href="<?php echo e(asset('frontend/html/css/linhhandmade-Pro.css')); ?>">
            <link rel="stylesheet" href="<?php echo e(asset('frontend/html/css/duy-edit.css')); ?>">
			<!-- hover by duy -->
	        <link rel="stylesheet" href="<?php echo e(asset('frontend/html/css/d-hover.css')); ?>">
	        <!-- click d-click-form -->
	        <link rel="stylesheet" href="<?php echo e(asset('frontend/html/css/d-click-form.css')); ?>">

        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('frontend.partials.link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        		<section class="t-sec1">
			<div class="container">
				<div class="t-cacvongtron">
					<ul>
						<li><img class="t-bovien" src="http://placehold.it/32x32"/></li>
						<li><img src="http://placehold.it/32x32"/></li>
						<li><img src="http://placehold.it/32x32"/></li>
						<li><img src="http://placehold.it/32x32"/></li>
						<li><img src="http://placehold.it/32x32"/></li>
						<li><img src="http://placehold.it/32x32"/></li>
					</ul>
				</div>
				
				<div class="row t-margin">
					<div class="col-md-4  col-sm-12 col-xs-12 sm-margin-bottom-three t-padding-pro">
						<div class="row">
							<div class="col-md-12 ">
							<div class="">
								<img src="<?php echo e($product_detail->img); ?>" alt="" class="product-imgs"/>
								 <!-- featured products slider -->
								<div id="shop-products" class="owl-carousel products-thumb  owl-theme dark-pagination owl-no-pagination owl-prev-next-simple index-product-featured" style="margin-top:1px">
									<!-- shop item -->
									<?php $product_image = App\ProductImage::where('product_id',$product_detail->id)->get(); ?>
									<?php foreach($product_image as $item): ?>
									<div class="item t-item-slide" style="padding-right:2px;">
										<div class="text-center position-relative overflow-hidden t-home-product">
											<img src="<?php echo e($item->thumb_images); ?>" alt=""/>
										</div>
									</div>
									<?php endforeach; ?>
									<!-- end shop item -->
								</div>
								</div>
								<!-- end featured products slider -->
								
								<p class="t-ten-sp" style="font-size: 11pt; margin-top: 23px !important; margin-bottom: 15px !important;"><?php echo e($product_detail->name); ?></p>
									<p><span>Mã : <?php echo $product_detail->code_product; ?></span></p>
								Giá : <span class="t-pro-gia"><span>
								<?php if($product_detail->price_sale): ?>
									<?php echo number_format((int)$product_detail->price,0,'','.'); ?> đ
								</span><?php echo number_format((int)$product_detail->price_sale,0,'','.'); ?> đ</span>
								<?php else: ?>
									<?php echo number_format((int)$product_detail->price,0,'','.'); ?> đ
								<?php endif; ?>
								<!--Hệ thống 2 nút-->
								<div class ="row t-div-btn">
									<div class="col-md-12 col-sm-9 d-pd-button">
										<div class="row product-div t-dm-share-button">
											<div class="col-md-3 col-sm-2 col-xs-3 xs-no-padding-left no-padding">
												<div style = "padding:0px;"class="select-style t-popup-sl med-input xs-med-input shop-shorting-details no-border-round">
												<!-- product qty -->
													<select class="pro-select t-pro-select" style = "">
														<option value="1">01</option>
														<option value="2">02</option>
														<option value="3">03</option>
														<option value="4">04</option>
														<option value="5">05</option>
														<option value="6">06</option>
													</select>
												<!-- end product qty -->
												</div>
											</div>
											<div class="col-md-9  col-sm-4 col-xs-8 ">
												<a class="highlight-button-dark btn-small no-margin-right no-margin-bottom t-ind-btn d-add-cart" data-id="<?php echo e($product_detail->id); ?>">Thêm vào giỏ</a>
											</div>
										</div>
									</div>
								</div>
								<!--Hết Hệ thống 2 nút-->
								<!--Sản phẩm liên qua-->
								<?php
									$category = $product_detail->getCategory;

									$arr_cate = array();
										foreach($category as $value){
											array_push($arr_cate,$value->id);
										}
									$productss = App\ProductInCategory::wherein('cate_pro_id',$arr_cate)->limit(4)->get();
									$arr_pro = array();
										foreach($productss as $value2){
											array_push($arr_pro,$value2->product_id);
										}
									$product_lienquan = App\Product::wherein('id',$arr_pro)->get();
									
									?>
								<div class="t-splq">
									<p style="font-size: 11pt; font-family: 'Roboto Light'">Sản phẩm liên quan</p>
									<div class="t-hang">
									<?php foreach($product_lienquan as $item): ?>
									<?php if($item->id != $product_detail->id): ?>
										<div class="col-md-6 col-xs-6 no-padding ">
											<img src="<?php echo $item->thumb_images; ?>" />
											<p style="font-size: 9pt"><?php echo $item->name; ?></p>
											<span>
												<?php if($item->price_sale): ?>
												</span><?php echo number_format((int)$item->price_sale,0,'','.'); ?> đ</span>
												<?php else: ?>
													<?php echo number_format((int)$item->price,0,'','.'); ?> đ
												<?php endif; ?>		
											</span>
										</div>
										<?php endif; ?>
									<?php endforeach; ?>
										<div style="clear:both"></div>
									</div>
								</div>
								<!--hết sản phẩm liên quan-->
							</div>
						</div>
                    </div>
					<!--Bắt đầu khung thuộc tính-->
					<div class="col-md-8 col-sm-8 col-xs-12 t-khungthuoctinh">
					<!--THuộc tính 1-->
						<div class="t-tt1 t-tt">
							<p>Thuộc tính 1</p>
							<ul>
								<li>
									<img src="http://placehold.it/80x80"/>
								</li>
								<li>
									<img src="http://placehold.it/80x80"/>
								</li>
								<li>
									<img src="http://placehold.it/80x80"/>
								</li>
								<li>
									<img src="http://placehold.it/80x80"/>
								</li>
								<li>
									<img src="http://placehold.it/80x80"/>
								</li>
								<li>
									<img src="http://placehold.it/80x80"/>
								</li>
								<li>
									<img src="http://placehold.it/80x80"/>
								</li>
								<div style="clear:both"></div>
							</ul>
						</div>
					<!--Hết thuộc tính 1-->
					<!--THuộc tính 2-->
						<div class="t-tt2 t-tt">
							<p>Thuộc tính 2</p>
							<p>Lorem ipsum dolor amet</p>
						</div>
					<!--Hết thuộc tính 2-->
					<!--THuộc tính 3-->
						<div class="t-tt3 t-tt">
							<p>Thuộc tính 3</p>
							<p>Lorem ipsum dolor amet</p>
						</div>
					<!--Hết thuộc tính 3-->
					<!--Tiêu đề mô tả-->
						<div class="t-tt4 t-tt">
							<p>Tiêu đề mô tả</p>
							<p><?php echo $product_detail->short_description; ?></p>
						</div>
					<!--Hết tiêu đề mô tả-->
					<!--Mạng xã hội-->
					
					<div class="t-tt t-soc2">
                        <!-- social media link -->
                        <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
                        <a target="_blank" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                        <a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                        <!-- end social media link -->
                    </div>
					<!--hết Mạng xã hội-->
					<!--Bình luận fb-->
					<div class="t-cmt">						
						<div class="t-comment">
							<div>
								<div><img style="border-radius: 4px !important" src="http://placehold.it/80x80"/></div>
								<div class="t-comment-p">
									<p>Bình luận</p>
									<input placeholder="Nhập nội dung bình luận ..." type="text" class=" popup-with-zoom-anim" href="#modal-popup-binhluan"/>
								</div>
								<div style="clear:both"></div>
							</div>
						</div>
						<!--Phần trả lời comment -->
						<div class="t-comment2">
							<div>
								<div><img style="border-radius: 4px !important" src="http://placehold.it/80x80"/></div>
								<div class="t-comment-p2">
									<div>
										<p class="t-name-tl">Lan nguyễn<a href="">Trả lời</a></p>
										<p class="t-noidung-cmt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo ...</p>
										<span class="t-tg-cmt">14 phút trước</span>
									</div>
									<!--phần trả lời của trả lời comment-->
									<div class="t-tl-cmt">
										<div class="t-tl-cmt-img"><img style="border-radius: 4px !important" src="http://placehold.it/80x80"/></div>
										<div class="t-tl-cmt-p">
											<p class="t-name-tl">Linhhandmade<a class="t-tl-tl">Trả lời</a></p>
											<p class="t-noidung-cmt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ...</p>
											<span class="t-tg-cmt">9 phút trước</span>
										</div>
										<div style="clear:both"></div>
									</div>
									<!--hết phần trả lời của trả lời comment-->
									<!--phần trả lời của trả lời comment-->
									<div class="t-tl-cmt">
										<div class="t-tl-cmt-img"><img style="border-radius: 4px !important" src="http://placehold.it/80x80"/></div>
										<div class="t-tl-cmt-p">
											<p class="t-name-tl">Linhhandmade<a class="t-tl-tl">Trả lời</a></p>
											<p class="t-noidung-cmt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ...</p>
											<span class="t-tg-cmt">9 phút trước</span>
										</div>
										<div style="clear:both"></div>
									</div>
									<!--hết phần trả lời của trả lời comment-->
								</div>
								<div class="duy-them">
									<img class="pull-left" style="border-radius: 4px !important" src="http://placehold.it/80x80"/></div>
									<div class="duy-them-content">
										<p class="t-name-tl">Lan nguyễn<a class="t-tl-tl" href="">Trả lời</a></p>
										<p class="t-noidung-cmt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo ...</p>
										<span class="t-tg-cmt">14 phút trước</span>
										<ul>
											<li></li>
											<li></li>
											<li><i class="fa fa-play" aria-hidden="true"></i></li>
										</ul>
									</div>
								
								<div style="clear:both"></div>
							</div>
						</div>
						<!--hết Phần trả lời comment -->
						
					</div>
					<!--hết Bình luận fb-->
					</div>
					<!--kết thúc khung thuộc tính-->
				</div>
				<!--phần điều hướng -->
				<div class="t-div-pagi" >
					<ul>
						<li><a href="">Trước</a></li>
						<li><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">4</a></li>
						<li>...</li>
						<li><a href="">Sau</a></li>
					</ul>
				</div>
				<!--hết phần điều hướng -->
			</div>
			<!-- popup thêm giỏ hàng thành công -->
			<div id="modal-popup-cart" class="zoom-anim-dialog mfp-hide center-col bg-white modal-popup-main t-popup">
			    <div style="">
			        <h5>Thêm thành công</h5>
			    </div>
			    <div class="t-popup-padding-rp">
			        <div class="row" style="margin:0px !important">
			            <div class="center-col">
			                <p style="margin-left:60px; margin-top:20px;">Sản phẩm : <span style="font-size:9pt; font-weight: Roboto Bold; " id="name_product_add"> </span></p>
			                <p style="margin-left:20px;">Đã được thêm vào giỏ hàng thành công</p>
			            </div>
			        </div>
			</div>
</div>
		</section>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('js'); ?>
        <script>
			$(".t-cacvongtron li").click(function(){
				$(".t-cacvongtron").find(".t-bovien").removeClass("t-bovien");
				$(this).children("img").addClass("t-bovien");
			});
		</script>
	
		<!-- slide -->
		<script>
			$("#shop-products").owlCarousel({
					navigation : true, 
					slideSpeed : 200,
					paginationSpeed : 500,
					items : 3,
					autoPlay:true,
					itemsDesktop : false,
					itemsDesktopSmall : false,
					itemsTablet: false,
					itemsMobile : false,
					navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
					});
		</script>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>