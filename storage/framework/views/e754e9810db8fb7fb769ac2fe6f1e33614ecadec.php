<style>
	#hov>li:hover{
		        border-right: solid 3px #BC0098;
	}
</style>
<div>
	<ul id="hov">
	 <?php foreach($product as $item): ?>
	 <li>
		<a href="#"><img alt="" src="<?php echo e($item->img); ?>"/></a>
		<p><a href="#"><?php echo $item->name; ?></a></p>
		<?php if($item->price_sale): ?>
			<p class="tan-font-RB">
				  <?php echo e(number_format( (int)$item->price_sale,0,'','.')); ?> vnđ 
			</p>
		<?php else: ?>
			<p class="tan-font-RB">
				  <?php echo e(number_format( (int)$item->price,0,'','.')); ?> vnđ    
			</p>
		<?php endif; ?>
		<div style="clear :both"></div>
	</li>
	<?php endforeach; ?>
	</ul>
</div>