<nav class="navbar navbar-default nav-border-bottom t-nav" role="navigation">
            <div class="t-nav-container">
                <div class="row">
                     <!-- Tìm kiếm và search khi ở màn hình nhỏ  -->
                    <div class="col-md-2 no-padding-left search-cart-header pull-right t-search-mb">
                        
                        <div class="top-cart">
                            <!-- nav shopping bag -->
                            <a href="#" class="shopping-cart">
                                <i class="fa fa-shopping-cart t-cart-icon"></i>
                                <span class="t-i-cart t-i-cart2 d-so" style="">0</span>
                            </a>
                            <!-- end nav shopping bag -->
                            <!-- shopping bag content -->

                            <div class="cart-content t-cart-content">
                                <ul class="cart-list t-cart-list ">
                                    <li>
                                        <a href="#">
                                            <img alt="" src="http://placehold.it/90x80"/>Leather Craft
                                        </a>
                                        <span class="quantity">1 × <span class="amount">$160</span></span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img alt="" src="http://placehold.it/90x80" />Leather Craft
                                        </a>
                                        <span class="quantity">1 × <span class="amount">$160</span></span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img alt="" src="http://placehold.it/90x80" />Leather Craft
                                        </a>
                                        <span class="quantity">1 × <span class="amount">$160</span></span>
                                    </li>
                                </ul>
                                <p class="buttons t-buttons">
                                    <a href="shop-cart.html" class="">Xem giỏ hàng</a>
                                </p>
                            </div>
                            <!-- end shopping bag content -->
                        </div>
                        <div id="top-search" style="margin-right:25px">
                            <!-- nav search -->
                            <a href="#search-header" class="header-search-form"><img src="<?php echo e(asset('frontend/html/Pic/Searcher.png')); ?>" alt="" class="t-search-button"></a>
                            <!-- end nav search -->
                        </div>
                        <!-- search input-->
                        <form id="search-header" method="post" action="#" name="search-header" class="mfp-hide search-form-result">
                            <div class="search-form position-relative">
                                <button type="submit" class=" close-search search-button"><img src="<?php echo e(asset('frontend/html/Pic/Searcher.png')); ?>" alt="" class="t-search-button"></button>
                                <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                            </div>
                        </form>
                        <!-- end search input -->
                    </div>
                    <!-- end search and cart /khi ở màn hình nhỏ  -->
                    <!-- button #menu-catagory -->
                    <?php echo $__env->yieldContent('menu'); ?>
                    <!-- toggle navigation -->
                    <div class="navbar-header pull-right">
                        <button type="button" class="navbar-toggle t-btn-mn" data-toggle="collapse" data-target=".navbar-collapse"><span
                                class="sr-only">Toggle navigation</span> <span class="d_icon_dropdown_menu fa fa-caret-down"></span></button>
                    </div>
                    <!-- toggle navigation end -->
                    <!-- main menu -->
                    <div class="col-md-12 accordion-menu text-center t-nav-ul">
                        <div class="navbar-collapse collapse">
                            <ul id="accordion" class="nav navbar-nav  panel-group t-panel-group">
                                <!-- menu item -->
                                <li class="dropdown panel">
                                     <a class="popup-with-zoom-anim" href="#modal-popup-tichdiem">Tích điểm</a>
                                </li>
                                <!-- end menu item -->
                                <!-- menu item -->
                                <li class="dropdown panel">
                                    <a class="popup-with-zoom-anim" href="#modal-popup-tracuu">Tra cứu đơn hàng</a>
                                </li>
                                <!-- end menu item -->
                                <!-- menu item -->
                                <li class="dropdown panel">
                                    <a class="popup-with-zoom-anim" href="#modal-popup-vuaxem" style="border-bottom: none !important;">Vừa xem</a>
                                </li>
                                <!-- end menu item -->
                                <!-- menu item tìm kiếm khi ở Decktop-->
                                <li class="dropdown panel t-hide t-li-db top-cart">
                                    <div class="t-timsp">
                                        <form>
                                            <img src="<?php echo e(asset('frontend/html/Pic/Searcher.png')); ?>" width="22px" height="22px" style="padding-right:4px; margin-top:-4px;">
                                            <input  type="text" placeholder="Tìm sản phẩm" id="d-timsp" />
                                        </form>
                                    </div>
                                    <!-- box tìm kiếm-->
                                    <div class="t-box-tim-kiem" visibility="hidden">
                                    
                                    </div>
                                        <!-- end box tìm kiếm-->
                                </li>
                                <!-- end menu item tìm kiếm Decktop -->
                                <!-- item Giỏ hàng khi màn hình Decktop-->
                                <?php
                                 $list_pro = Session::get('product');
                                ?>
                                <li class="t-hide">
                                    <div class="top-cart t-top-cart" id="d-hover" data-size="<?php echo e(sizeof($list_pro)); ?>" >
                                        <!-- nav shopping bag -->
                                        <a href="#" class="shopping-cart">
                                            <i class="fa fa-shopping-cart t-cart-icon"></i>
                                            <span class="t-i-cart l_cart2 " ><?php echo e(sizeof($list_pro)); ?></span>
                                            <div class="subtitle" style="display:inherit">Giỏ hàng</div>
                                        </a>
                                        <!-- end nav shopping bag -->
                                        <!-- shopping bag content -->
                                        <div class="cart-content t-cart-content abc">
                                            <div class="t-box-cart">
                                                <ul class="cart-list">
                                                    <?php $asset_dir = asset('')?>
                                                        <?php $total = 0;?>
                                                        <?php if($list_pro): ?>
                                                            <?php foreach($list_pro as $key=>$item): ?>  
                                                                <li id="d-list-cart-ajax" class="classli_<?php echo $item['product']->id; ?>" data-id="<?php echo e($item['product']->id); ?>" >
                                                                    <a href="#"><img alt="" src="<?php echo e($asset_dir); ?><?php echo e($item['product']->img); ?>"/></a>
                                                                    <p><a href="#"><?php echo e($item['product']->name); ?></a></p>
                                                                     <?php
                                                                        $price = $item['product']->price;
                                                                        if($item['product']->price_sale) 
                                                                        {
                                                                            $price = $item['product']->price_sale;
                                                                        }
                                                                        $price = $price ;
                                                                        $total +=  $price * $item['num'];
                                                                    ?>
                                                                    <p class="tan-font-RB" >
                                                                       
                                                                    <span class="amount"><?php echo e(number_format( (int)$price,0,'','.')); ?>đ x 
                                                                    <span><?php echo e($item['num']); ?></span> </span>
                                                                      
                                                                    </p>
                                                                    <span class="pull-right x-search remove" data-id="<?php echo e($item['product']->id); ?>">×</span>
                                                                    <div style="clear :both"></div>
                                                                </li>
                                                             
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                </ul>
                                            </div>
                                            <p class="buttons t-buttons">
                                                <a href="<?php echo route('get.shoppingcart'); ?>" class="">Xem giỏ hàng</a>
                                            </p>
                                            <div style="clear:both"></div>
                                        </div>
                                        <!-- end shopping bag content -->
                                    </div>
                                </li>
                                <!-- end menu item khi màn hình Decktop-->
                            </ul>
                        </div>
                    </div>
                    <!-- end main menu -->

                            <!--popup vừa xem-->
        <div id="modal-popup-vuaxem" class="zoom-anim-dialog mfp-hide center-col bg-white modal-popup-main t-popup t-popup-vuaxem">
            <div >
                <h5>Vừa xem</h5>
            </div>
             <div class="t-popup-padding-rp">               
                <div class="row" style="margin:0px !important">
                    <div class="center-col">
                        <!-- box vừa xem-->
                        <div class="t-box-vua-xem">
                            <ul id="d-list-xem">
                               <?php
                                 $list_pro_xem = Session::get('xem_product');
                                ?>
                                <?php if($list_pro_xem): ?>
                                    <?php foreach($list_pro_xem as $item): ?>
                                        <li>    
                                            <a href="#"><img alt="" src="<?php echo asset($item['xem_product']->img); ?>"/></a>
                                            <p><a href="#"><?php echo $item['xem_product']->name; ?></a></p>
                                            <p class="tan-font-RB">
                                                
                                                <?php if($item['xem_product']->price_sale): ?>
                                                    <?php echo $item['xem_product']->price_sale; ?>

                                                <?php else: ?>
                                                    <?php echo $item['xem_product']->price; ?>

                                                <?php endif; ?>
                                            </p>
                                            <div style="clear :both"></div>
                                        </li>
                                    <?php endforeach; ?> 
                                <?php endif; ?>
                             </ul>
                        </div>
                        <p class="tan-font-RB" style ="margin:15px 0px"><a href="#" style="color:#7f7f7f">+12 sản phẩm khác</a></p>
                        <!-- end box vừa xem-->
                        <!-- button  -->
                       
                        <!-- end button  -->
                    </div>
                </div>
            </div>
        </div>
        <!--end popup vừa xem-->
                </div>
            </div>
        </nav>