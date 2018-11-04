<?php $__env->startSection('css'); ?>
	 <link rel="stylesheet" href="<?php echo e(asset('backend/libs/jquery/select2-bootstrap-theme/dist/select2-bootstrap.min.css')); ?>" type="text/css" />
	 <link rel="stylesheet" href="<?php echo e(asset('backend/libs/jquery/select2/dist/css/select2.min.css')); ?>" type="text/css" />
	 <style type="text/css">
     option:disabled {
        background: #dddddd;
    }
       .select2-container .select2-selection--single{
	    	height: 37px;
	    }
	    .select2-selection__arrow{
	    	height: 35px !important;
	    }
	    .select2-search__field{
	    	display: none;
	    }
	    .select2-search--dropdown{
	    	padding: 0px !important;
	    }
	    .select2{
	    	width: 100% !important;
	    }
	    .select2-selection__rendered{
	    	font-size: 10pt !important;
	    }
   </style>
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/styles/backend.css')); ?>" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form ui-jp="parsley" action="<?php echo e(route('save.cate.products.edit')); ?>" method="post" enctype="multipart/form-data">
<div class="app-header white box-shadow">
<div class="navbar">
    <div style="float:left;" class="title_form">
   		<p>Sửa danh mục sản phẩm</p>
   	</div>
   
   	<div style="float:right;margin-top:10px;">
    	<button type="submit" name="submit"  value="post" class="btn success" style="
		padding-bottom: 8px;padding-top: 8px;font-size: 10pt;margin-right: 8px;font-family: 'Roboto-Bold';
		min-width:100px; background-color:#738CEC">LƯU</button>
    </div>
</div>
 </div>
 
	 <div class="app-body" id="view">
	 	<style type="text/css">
		 	.alert{
		 		margin-top:20px;
		 		margin-bottom: 0px;
		 	}
		 </style>
	 	<div class="padding" style="padding-top:0px !important; padding-bottom:0px;">
	 			<?php echo $__env->make('backend.partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	 	</div>

	 	<div class="padding">
	 	 <div class="row">
		    <div class="col-sm-12">
		      
		        <div class="box">
		        
		          <div class="box-body">
					<div class="row">
							<div class="col-sm-6">
										
										<?php
											$list_categories = App\CategoryProduct::where(['parent_id'=>0])->get();

										?>
										<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
										<input type="hidden" name="id" value="<?php echo e($catId->id); ?>">
					          		    <div class="form-group">
							              <label>Tên danh mục</label>
							              <input type="text" class="form-control" value="<?php echo e($catId->name); ?>" name="cate_name" required >                        
							            </div>
							           
							            <div class="form-group">
							              <label>Mô tả về danh mục nếu có</label>
							              <textarea name="cate_des" class="form-control" rows="5"><?php echo e($catId->description); ?></textarea>                       
							            </div>

							            <div class="form-group">
							            	<?php $space = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"?>
									        <label for="single">Lựa chọn vị trí lưu</label>
									        <select id="single" class="form-control select2" name="cate_parent">
									            <option value="0">Không thuộc danh mục nào</option>
									            <?php foreach($list_categories as $v0): ?>
									            <option <?php if($catId->id == $v0->id): ?> disabled <?php endif; ?>    <?php if($catId->parent_id == $v0->id): ?> selected <?php endif; ?> value="<?php echo e($v0->id); ?>"><?php echo e($v0->name); ?></option>
									            <?php if($v0->subcategory): ?>
									                 <?php foreach($v0->subcategory as $v1): ?>
                                                        <option <?php if($catId->id == $v0->id || $catId->id == $v1->id): ?> disabled <?php endif; ?>  <?php if($catId->parent_id == $v1->id): ?> selected <?php endif; ?> value="<?php echo e($v1->id); ?>"><?php echo e($space); ?><?php echo e($v1->name); ?></option>
                                                         <?php if($v1->subcategory): ?>
											                 <?php foreach($v1->subcategory as $v2): ?>
		                                                        <option 
		                                                        <?php if($catId->id == $v0->id || $catId->id == $v1->id || $catId->id == $v2->id): ?> disabled <?php endif; ?> 
		                                                        <?php if($catId->parent_id == $v2->id): ?> selected <?php endif; ?>
		                                                         value="<?php echo e($v2->id); ?>"><?php echo e($space.$space); ?><?php echo e($v2->name); ?></option>
		                                                        <?php if($v2->subcategory): ?>
													                 <?php foreach($v2->subcategory as $v3): ?>
				                                                        <option <?php if($catId->id == $v0->id || $catId->id == $v1->id || $catId->id == $v2->id || $catId->id == $v3->id): ?> disabled <?php endif; ?> 
				                                                         <?php if($catId->parent_id == $v3->id): ?> selected <?php endif; ?>  value="<?php echo e($v3->id); ?>"><?php echo e($space.$space.$space); ?><?php echo e($v3->name); ?></option>
				                                                        <?php if($v3->subcategory): ?>
															                 <?php foreach($v3->subcategory as $v4): ?>
						                                                        <option disabled <?php if($catId->parent_id == $v4->id): ?> selected <?php endif; ?>  value="<?php echo e($v4->id); ?>"><?php echo e($space.$space.$space.$space); ?><?php echo e($v4->name); ?></option>
						                                                     <?php endforeach; ?>
						                                                 <?php endif; ?>
				                                                     <?php endforeach; ?>
				                                                 <?php endif; ?>
		                                                     <?php endforeach; ?>
		                                                 <?php endif; ?>
                                                     <?php endforeach; ?>
                                                 <?php endif; ?>
									            <?php endforeach; ?>
									        </select>
									    </div>
									
		         				</div>	 
		         				<div class="col-sm-6">
		         					 <div class="form-group">
							              <label style="margin-bottom:5px;">Ảnh mô tả danh mục nếu có</label>
							               <p style="margin:0px;  margin-bottom:10px;line-height:0px">
							             
							               <img  id="img_preview" style="max-height:100px;"  <?php if(strlen($catId->img)): ?> src="<?php echo e(url($catId->img)); ?>" <?php endif; ?> style="width:100%;height:auto" >
							               
							               </p>
							             <label style="padding-top:2px !important;padding-bottom:2px !important;" for="file_img_preview">
									                <a class="btn info">Chèn ảnh</a>
									      </label>
							              <input type="file" class="form-control" style="display:none" id="file_img_preview" name="cate_img">                         
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
  <script>
  	$('#single').select2();
    	function readURL(input) {

	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	            $('#img_preview').attr('src', e.target.result);
	        }
	        reader.readAsDataURL(input.files[0]);
	    }
	}

	$("#file_img_preview").change(function(){
	    readURL(this);
	});

  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>