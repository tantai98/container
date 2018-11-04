<?php $__env->startSection('css'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('backend/libs/jquery/select2-bootstrap-theme/dist/select2-bootstrap.min.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('backend/libs/jquery/select2/dist/css/select2.min.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('summernote/dist/summernote.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('libs/bootstrap-tagsinput/bootstrap-tagsinput.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('backend/assets/styles/backend.css')); ?>" type="text/css" />
   <style type="text/css">
    h2{
          font-family: "Roboto-Bold";
          font-size: 10.5pt !important;
    }
   
      
   </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form ui-jp="parsley" method="post" enctype="multipart/form-data">
<div class="app-header white box-shadow">
<div class="navbar">
    <div style="float:left;" class="title_form">
        <p>Config Thumbnail</p>
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
      .box{
        min-height: 275px;
      }
      .s-img{
        max-width:100%;
        min-width:100px;
        background-color:#F0F0F0;
        border:1px solid #E7E7E7;
        position: relative;

      }
      .s-img img{
        max-height: 100px;
      }
      .s-img span{
          position: absolute;
          top: 35px;
          left: calc(50% - 15px);
      }
      .s-img1{
        max-width:100%;height:40px;min-width:130px;background-color:#F0F0F0;
        border:1px solid #E7E7E7;
        position: relative;

      }
       .s-img1 img{
        max-height: 100px;
      }
      .s-img1 span{
          position: absolute;
          top: 35px;
          left: calc(50% - 15px);
      }
      
      .no-border{
        border: 0px !important;
        background-color: rgba(1,1,1,0);
      }
     </style>
    <div class="padding" style="padding-top:0px !important; padding-bottom:0px;">
        <?php echo $__env->make('backend.partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
     <?php 
      $product = App\Item::where('key_layout','config_thumb_product')->get();
      $post = App\Item::where('key_layout','config_thumb_post')->get();

     ?>

    <div class="padding">
    
         <div class="row">
          
          <div class="col-sm-6">
                <div class="box" style="padding-bottom:37px;">
                  <div class="box-header" style="margin-bottom:0px;">
                    <h2 style="font-family:'Roboto Black';">Sản phẩm</h2>
                  </div>
                  <div class="box-body" style="padding-bottom:2px;">
                          <div class="row">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                              <div class="form-group">
                                  <label class="col-sm-3 form-control-label ">Ảnh Preview</label>
                                  <div class="col-sm-9">
                                       <input type="text"  class="form-control thong-tin" name="a1" <?php if(isset($product[0])): ?> value="<?php echo e($product[0]->value); ?>" <?php endif; ?>> 
                                  </div>                       
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-3 form-control-label ">Ảnh Chi tiết</label>
                                  <div class="col-sm-9">
                                       <input type="text"  class="form-control thong-tin" name="a2"  <?php if(isset($product[1])): ?> value="<?php echo e($product[1]->value); ?>" <?php endif; ?>> 
                                  </div>                       
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-3 form-control-label ">Ảnh Danh mục</label>
                                  <div class="col-sm-9">
                                       <input type="text"  class="form-control thong-tin" name="a3"  <?php if(isset($product[2])): ?> value="<?php echo e($product[2]->value); ?>" <?php endif; ?>> 
                                  </div>                       
                              </div>
                          </div>
                  </div>
                </div>
           </div>
           <div class="col-sm-6">
                <div class="box" style="padding-bottom:37px;">
                  <div class="box-header" style="margin-bottom:0px;">
                    <h2 style="font-family:'Roboto Black';">Bài viết</h2>
                  </div>
                  <div class="box-body" style="padding-bottom:2px;">
                          <div class="row">
                              <div class="form-group">
                                  <label class="col-sm-3 form-control-label ">Ảnh Preview</label>
                                  <div class="col-sm-9">
                                       <input type="text"  class="form-control thong-tin" name="b1" <?php if(isset($post[0])): ?> value="<?php echo e($post[0]->value); ?>" <?php endif; ?>> 
                                  </div>                       
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-3 form-control-label ">Ảnh Chi tiết tiết</label>
                                  <div class="col-sm-9">
                                       <input type="text"  class="form-control thong-tin" name="b2" <?php if(isset($post[1])): ?> value="<?php echo e($post[1]->value); ?>" <?php endif; ?>> 
                                  </div>                       
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-3 form-control-label ">Ảnh Danh mục</label>
                                  <div class="col-sm-9">
                                       <input type="text"  class="form-control thong-tin" name="b3" <?php if(isset($post[2])): ?> value="<?php echo e($post[2]->value); ?>" <?php endif; ?>> 
                                  </div>                       
                              </div>
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

<script>
  
  function reUploadImg(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(input).prev().attr('src', e.target.result);
            $(input).parent().css('background-color','#fff');
            $(input).parent().css('border','0px');
        }

        reader.readAsDataURL(input.files[0]);
    }
  }
</script>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>