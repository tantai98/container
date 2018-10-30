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