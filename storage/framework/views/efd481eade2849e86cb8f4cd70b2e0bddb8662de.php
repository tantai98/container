<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="<?php echo e(asset('backend/libs/jquery/jquery/dist/jquery.js')); ?>"></script>
<!-- Bootstrap -->
  <script src="<?php echo e(asset('backend/libs/jquery/tether/dist/js/tether.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/libs/jquery/bootstrap/dist/js/bootstrap.js')); ?>"></script>
<!-- core -->
  <script src="<?php echo e(asset('backend/libs/jquery/underscore/underscore-min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/libs/jquery/PACE/pace.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/html/scripts/config.lazyload.js')); ?>"></script>

  <script src="<?php echo e(asset('backend/html/scripts/ui-device.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/html/scripts/ui-form.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/html/scripts/ui-nav.js')); ?>"></script>
  <!-- <script src="<?php echo e(asset('backend/html/scripts/ui-screenfull.js')); ?>"></script> -->
  <script src="<?php echo e(asset('backend/html/scripts/ui-scroll-to.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/html/scripts/ui-toggle-class.js')); ?>"></script>

  <script type="text/javascript">
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
  </script>
  <?php if($message = Session::get('success','error','warning','info')): ?>
    <script>
      $(document).ready(function() {
          $('div.alert').delay(5000).slideUp();
      });
    </script>  
  <?php endif; ?>


  <!-- ajax -->

  <?php echo $__env->yieldContent('js-footer'); ?>
<!-- endbuild -->