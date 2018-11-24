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
<form ui-jp="parsley" method="post" action="<?php echo e(route('admin.post.config')); ?>">
<div class="app-header white box-shadow">
<div class="navbar">
    <div style="float:left;" class="title_form">
        <p>Thiết lập thông tin</p>
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
     <?php $system =App\System::first();
           $admin = App\Admins::where('id', '=', 2)->first();
     ?>
    <div class="padding">
    
         <div class="row">
          
            <div class="col-sm-6">
            
                <div class="box">
                  <div class="box-header">
                    <h2>Thông tin cơ bản</h2>
                  </div>
                
                  <div class="box-body">
                        <div class="row">
                         
                             <input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token">
                             <div class="form-group">
                                  <label class="col-sm-2 form-control-label">Domain</label>
                                  <div class="col-sm-10">
                                        <input type="text" placeholder="Tên miền website" class="form-control thong-tin" name="domain" value="<?php echo e(isset($system) ? $system->domain:''); ?>" required=""> 
                                  </div>                       
                            </div>
                            <div class="form-group" >
                                  <label class="col-sm-2 form-control-label">Đại diện</label>
                                  <div class="col-sm-10">
                                       <input type="text"  class="form-control thong-tin"  placeholder="Họ tên" name="full_name" value="<?php echo e(isset($system) ? $system->full_name:''); ?>"> 
                                  </div>                       
                            </div>
                            <div class="form-group">
                                  <label class="col-sm-2 form-control-label ">Email</label>
                                  <div class="col-sm-10">
                                       <input type="email"   placeholder="Email" class="form-control thong-tin" name="email" value="<?php echo e(isset($system) ? $system->email:''); ?>"> 
                                  </div>                       
                            </div>
                            <div class="form-group">
                                  <label class="col-sm-2 form-control-label ">Phone</label>
                                  <div class="col-sm-10">
                                       <input type="text"  placeholder="Số điện thoại" class="form-control thong-tin" name="phone" value="<?php echo e(isset($system) ? $system->phone:''); ?>"> 
                                  </div>                       
                            </div>
                            <div class="form-group">
                                  <label class="col-sm-2 form-control-label ">Địa chỉ</label>
                                  <div class="col-sm-10">
                                       <input type="text" class="form-control thong-tin"  placeholder="Địa chỉ" name="address" value="<?php echo e(isset($system) ? $system->address:''); ?>"> 
                                  </div>                       
                            </div>
                       </div>  
                  </div>
                 
           </div>
             
      </div>
            <div class="col-sm-6">
            
                 <div class="box">
                  <div class="box-header">
                    <h2>Tài khoản hệ thống</h2>
                  </div>
                
                  <div class="box-body">
                        <div class="row">
                         <!--    <div class="form-group" >
                                  <label class="col-sm-2 form-control-label">Tình trạng</label>
                                  <div class="col-sm-10">
                                   <select name="status" class="form-control thong-tin"  >
                                       <option value="0" <?php if(isset($system)&& $system->status ==0 ): ?> selected="" <?php endif; ?> >Đang phát triển</option>
                                       <option value="1" <?php if(isset($system)&& $system->status ==1 ): ?> selected="" <?php endif; ?>>Hoàn thành</option>
                                   </select>
                                  
                                  </div>                       
                            </div> -->
                            <input type="hidden" value="1" name="status"  >
                            <div class="form-group">
                                  <label class="col-sm-2 form-control-label ">Admin</label>
                                  <div class="col-sm-10">
                                       <input type="text"  style="background-color:#F0F0F0;"  class="form-control thong-tin" name="username" value="<?php echo e(isset($admin) ? $admin->username:''); ?>"> 
                                  </div>                       
                            </div>
                            <div class="form-group">
                                  <label class="col-sm-2 form-control-label ">Pass</label>
                                  <div class="col-sm-10">
                                       <input type="text"  class="form-control thong-tin" name="password" > 
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


    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>