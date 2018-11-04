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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>