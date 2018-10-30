<?php $asset_dir = asset('')?>
<?php $total = 0;?>
<?php if($list_pro): ?>
    <?php foreach($list_pro as $key=>$item): ?>  
        <li id="d-list-cart-ajax" class="classli_<?php echo $item['product']->id; ?>" data-id="<?php echo e($item['product']->id); ?>">
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
            ?>123
            <p class="tan-font-RB">
               
             <span class="amount"><?php echo e(number_format( (int)$price,0,'','.')); ?>đ x 
              <span><?php echo e($item['num']); ?></span> </span>
              
            </p>
            <span class="pull-right x-search remove" data-id="<?php echo e($item['product']->id); ?>">×</span>
            <div style="clear :both"></div>
        </li>
     
    <?php endforeach; ?>
<?php endif; ?>