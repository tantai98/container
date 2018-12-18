<?php $__env->startSection('pages'); ?>
<!-- about -->
<?php echo $__env->make('frontend.block.home.about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- //about -->
<!-- services -->
<?php echo $__env->make('frontend.block.home.service', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- //services -->
<!-- work environment -->
<?php echo $__env->make('frontend.block.home.environment', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- //work environment -->
<!-- project -->
<?php echo $__env->make('frontend.block.home.project', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- //project -->
<!-- product -->
<?php echo $__env->make('frontend.block.home.product', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- //product -->
<!-- team -->
<?php echo $__env->make('frontend.block.home.team', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- //team -->
<!-- customer -->
<?php echo $__env->make('frontend.block.home.customer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- //customer -->
<!-- contact -->
<?php echo $__env->make('frontend.block.home.contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- //contact -->

<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        	<div class="tex-center">
        		<span style="font-size: 80px;color: green;">
        			<i class="fa fa-check-circle"></i>
        		</span>
        	</div>
        	<div class="tex-center"><h1>Đăng ký thành công !</h1></div>
        	<div class="tex-center"><p>Cám ơn bạn đã quan tâm đến chúng tôi !</p></div>
        	<div class="tex-center">
        		<p>Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất</p>
	        </div>
	        <div class="tex-center margin-bot-15">
	        	<button id="close" style="text-align: center;width: 65%;background-color: #fff;border: solid 1px green;border-radius: 12px;padding: 7px;"><b style="color: green">Đóng</b></button>
	        </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>