<?php $__env->startSection('css'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('backend/libs/jquery/select2-bootstrap-theme/dist/select2-bootstrap.min.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('backend/libs/jquery/select2/dist/css/select2.min.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('summernote/dist/summernote.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('libs/bootstrap-tagsinput/bootstrap-tagsinput.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('backend/assets/styles/backend.css')); ?>" type="text/css" />
   <style type="text/css">
    h2{
          font-family: "Roboto";
          font-size: 10pt !important;
    }
   .box-body {
    padding: 0rem !important;
  }
      
   </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form ui-jp="parsley" method="post" action="<?php echo e(route('admin.config.frame.post')); ?>">
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
<div class="app-header white box-shadow">
<div class="navbar">
    <div style="float:left;" class="title_form">
        <p>Config Frame</p>
      </div>
      <div style="float:right;margin-top:10px;">
     
    <button type="submit" name="submit"  value="post" class="btn success" style="
    padding-bottom: 8px;padding-top: 8px;font-size: 10pt;margin-right: 8px;font-family: 'Roboto-Bold';
    min-width:100px; background-color:#738CEC">Lưu</button>
      </div>
       
    <!-- / navbar collapse -->
</div>
</div>

 
   <div class="app-body" id="view">
     <style type="text/css">
      .alert{
        margin-top:20px;
        margin-bottom: 0px;
      }
      label {
          font-size: 10pt;
          color: #404040;
      }
      .form-control{
        margin-bottom: 15px !important;
        border: 1px solid #E7E7E7 !important; 
       
      }
      .thong-tin{
          background-color: #fff !important;
      }
     </style>
    <div class="padding" style="padding-top:0px !important; padding-bottom:0px;">
        <?php echo $__env->make('backend.partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
     <?php $attribute = App\Attribute::where('type', 1)->get();

     $frame = App\Item::where('key_item', 'config_frame_attribute')->first();
    
     ?>
    <div class="padding">
    
         <div class="row">
          
            <div class="col-sm-6">
            
                <div class="box">
                  <div class="box-header">
                    <h2>Chọn Thuộc Tính Làm Frame</h2>
                  </div>
                
                  <div class="box-body">
                        <div class="table-responsive">
                                <table class="table table-striped b-t">
                                  <tbody>
                                  <?php if(sizeof($attribute)): ?>
                                    <?php foreach($attribute as $item): ?>
                                    <tr>
                                      <td style="width:5%">
                                      	<label class="ui-check m-a-0">
                                      		<input type="radio" name="atrribute_id" class="has-value" value="<?php echo $item->id; ?>" <?php if(isset($frame) ): ?> <?php if($frame->value == $item->id): ?> checked="" <?php endif; ?> <?php endif; ?>  >
                                      	<i class="dark-white" ></i>
                                      	</label>
                                      </td>
                                      <td><?php echo $item->name; ?></td>
                                    </tr>
                                    <?php endforeach; ?>  
                                   <?php endif; ?> 
                                  </tbody>
                                </table>
                              </div>
                  </div>
                 
           </div>
             
      		</div>
     
   </div>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-footer'); ?>
  <script src="<?php echo e(asset('backend/libs/jquery/screenfull/dist/screenfull.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/libs/jquery/select2/dist/js/select2.min.js')); ?>"></script>
 
  <script src="<?php echo e(asset('summernote/dist/summernote.min.js')); ?>"></script>
  <script src="<?php echo e(asset('summernote/dist/lang/summernote-vi-VN.js')); ?>"></script>
  <script src="<?php echo e(asset('libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')); ?>"></script>
	

	

    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>