<?php $__env->startSection('css'); ?>
	 <link rel="stylesheet" href="<?php echo e(asset('backend/libs/jquery/select2-bootstrap-theme/dist/select2-bootstrap.min.css')); ?>" type="text/css" />
	 <link rel="stylesheet" href="<?php echo e(asset('backend/libs/jquery/select2/dist/css/select2.min.css')); ?>" type="text/css" />
	 <link rel="stylesheet" href="<?php echo e(asset('summernote/dist/summernote.css')); ?>" type="text/css" />
	
	 <link rel="stylesheet" href="<?php echo e(asset('libs/bootstrap-tagsinput/bootstrap-tagsinput.css')); ?>" type="text/css" />
	 <link rel="stylesheet" href="<?php echo e(asset('backend/assets/styles/backend.css')); ?>" type="text/css" />
	 <link rel="stylesheet" href="<?php echo e(asset('backend/stag/css/stag.css')); ?>" type="text/css" />
	 <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
	 <style type="text/css">
	 	h2{
	 		    font-family: "Roboto-Bold";
	 		    font-size: 10.5pt !important;
	 	}
	 	div#myDropZone {
		    width: 100%;
		    min-height: 100px;
		    background-color: #F0F0F0;
		    border: 1px solid #E7E7E7 !important;
		}
		#DropZone{

		}	
		.dz-message span{
			font-size: 10pt !important;
		}
		.dz-remove{
			font-size: 9pt !important;
		}
		.dz-image{
			border-radius: 0px !important;
		}
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
	    	font-size: 10pt;
	    }
	    .select2-selection__rendered{
	    	font-size: 10pt !important;
	    }
	    .dz-progress{
	    	background-color: rgba(255,255,255,0) !important;
	    }
	     .add-attribute{
	    	position: absolute;
	    	right: 15px;
	    	top: 10px;
	    	color: #738CEC;
	    	cursor: pointer;
	    }
	    .modal-dialog {
		    width: 600px;
		    margin: 70px auto;
		}
		.modal-content{
			border-radius: 0px;
			border: 1px solid #E7E7E7;
		}
		.modal-header {
		    padding: 12px 15px;

		    border-bottom: 1px solid #E7E7E7;
		}
		.modal-title{
			font-size: 10.5pt;
			font-family: "Roboto Bold";
		}
		.add-attr{
		    background-color: #92D050;
		    color: #fff;
		    font-size: 10pt;
		    padding-top: 5px;
		    padding-bottom: 5px;
		    width: 70px;
		}
		.add-attr:hover{
		    background-color: #92D050 !important;
		    color: #fff;
		}
		.modal-content{
	        border: 0px;
	    }
		.attr-item{
			position: relative;
		}
		.list-value{
			position: absolute;
			display: none;
			background-color: #fff;
			border: 1px solid #E7E7E7;
			width: 100%;
			z-index: 99;
			max-height: 150px;
			overflow-y: scroll;
		}
		.list-value div{
			padding: 5px 10px;
		}
		.add_attr_tab{
			color:#738CEC;
		}
		.autocomplete{
			font-family: "Roboto";
			font-size: 9pt;
			padding: 7px 10px;
		}
		.autocomplete:hover{
			background-color: #F0F0F0;
		}
		.attr-item  .bootstrap-tagsinput{
			padding: 4px 10px;
			padding-left: 10px;
		}
		.attr-item  .bootstrap-tagsinput  span[data-role="remove"]{
			color: #bfbfbf !important;
			margin-left: 0px !important;
		}
		.attr-item  .bootstrap-tagsinput  span[data-role="remove"]:hover{
			color: #404040 !important;
		}
		.attr-item  .bootstrap-tagsinput span{
			background-color: rgba(0,0,0,0) !important;
			border:1px solid rgba(0,0,0,0) !important;
			color: #404040 !important;
		}
		.attr-item  .bootstrap-tagsinput .label{
			padding: 2px 0px !important;
		}
		.attr-item  .bootstrap-tagsinput input{
			padding-left: 0px;
			min-height: 1em;
		}
		
		.seo_tags{
			position: relative;
		}
		.seo_tags  .bootstrap-tagsinput{
			padding: 4px 10px;
			padding-left: 10px;
		}
		.seo_tags  .bootstrap-tagsinput  span[data-role="remove"]{
			color: #bfbfbf !important;
			margin-left: 0px !important;
		}
		.seo_tags  .bootstrap-tagsinput  span[data-role="remove"]:hover{
			color: #404040 !important;
		}
		.seo_tags  .bootstrap-tagsinput span{
			background-color: rgba(0,0,0,0) !important;
			border:1px solid rgba(0,0,0,0) !important;
			color: #404040 !important;
		}
		.seo_tags  .bootstrap-tagsinput .label{
			padding: 2px 0px !important;
		}
		.seo_tags  .bootstrap-tagsinput input{
			padding-left: 0px;
			min-height: 1em;
		}
		.material-icons{
			cursor: pointer;
		}
		.m-money{
			position: relative;
		}
		.m-money:hover .m-tooltip{
			display: block;
		}
		.m-tooltip{
			display: none;
		}
		.m-money .m-tooltip{
			position: absolute;
			height: 28px;
			width: auto;
			background-color: #fff;
			border: 1px solid #E7E7E7;
			padding-top: 4px;
			padding-left: 10px;
			padding-right: 10px;
			border-bottom: 0px;
			font-family: "Roboto";
			font-size: 10pt;
			z-index: 9999;
			background-color: black;
			color: #fff;
			border-radius: 6px;
			top: 60px;
		}
		.m-money .m-tooltip:after{    
			content: "";
		    position: absolute;
		    bottom: 100%;
		    left: 50%;
		    margin-left: -5px;
		    border-width: 5px;
		    border-style: solid;
		    border-color: transparent transparent #000 transparent;
		}
	 </style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form ui-jp="parsley" method="post" action="<?php echo e(route('frame.create.frame.post')); ?>" enctype="multipart/form-data" id="form-edit-product">
<div class="app-header white box-shadow">
<div class="navbar">
		<div style="float:left;" class="title_form">
	      <p>Thêm Frame Sản Phẩm <?php echo $product->name; ?></p>
	    </div>
    	<div style="float:right;margin-top:10px;">
		<?php if(session('admin')->can('luu_san_pham')): ?>
    	<button type="submit" name="submit" value="save" class="btn" style="
    	padding-bottom: 8px;padding-top: 8px;font-size: 10pt;margin-right: 10px;font-family: 'Roboto-Bold';
    	min-width:100px; background-color:#F2F2F2">LƯU</button>
		<?php endif; ?>
		<?php if(session('admin')->can('them_san_pham')): ?>
		<button type="submit" name="submit"  value="post" class="btn success" style="
		padding-bottom: 8px;padding-top: 8px;font-size: 10pt;margin-right: 8px;font-family: 'Roboto-Bold';
		min-width:100px; background-color:#738CEC">ĐĂNG</button>
		<?php endif; ?>
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

		 </style>
	 	<div class="padding" style="padding-top:0px !important; padding-bottom:0px;">
	 			<?php echo $__env->make('backend.partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	 	</div>
	   
	 	<div class="padding">
	 	
			 	 <div class="row masonry-container">
			 	 	
				    <div class="col-sm-6 item">
				        <div class="box">
				          <div class="box-header"><h2>Ảnh</h2></div>
				          <div class="box-body">
							<div class="row">
									<div class="col-sm-12">
												<input type="hidden" value="<?php echo e(csrf_token()); ?>" name="_token">
												<input type="hidden" value="<?php echo e($product->id); ?>" name="product_id">
									           <div class="form-group">
									           	  <div>
									           	  	<label tyle="margin-bottom:10px;">
									                <p style="margin-bottom:10px;line-height:0px">Ảnh preview</p>
									               </label>
									              </div>
									              <p style="margin-bottom:10px;line-height:0px">
									               <img id="img_preview" style="max-height:200px;" >
									              </p>
									              <label for="file_img_preview">
									                <a class="btn info">Chèn ảnh</a>
									              </label>
									              <input type="file" style="display:none" class="form-control" name="frame_img"  id="file_img_preview">                    
									            </div>
									            <label tyle="margin-bottom:10px;">
									                <p style="margin-bottom:10px;line-height:0px">Ảnh chi tiết sản phẩm</p>
									            </label>
									            <div class="body-nest" id="DropZone" >
												   <div id="myDropZone" class="dropzone">
												   </div>
												</div>
												<input type="hidden" name="img_product">
									            
									</div>
				         	</div>	 
		                  </div>
				        </div>
				    </div>
				     <!-- Begin Item Thêm thuộc tính -->
				    <div class="col-sm-6 item">
				        <div class="box">
				          <div class="box-header"><h2>Thêm thuộc tính</h2>
				          	
							<!-- .modal -->
							<div id="m-a-a" class="modal fade animate" data-backdrop="true">
							  <div class="modal-dialog" id="animate">
							    <div class="modal-content">
							      <div class="modal-header">
							      	<h5 class="modal-title">Thêm thuộc tính</h5>
							      </div>
							      <div class="modal-body p-lg">
							      		
										<?php $frame = App\Item::where('key_item','config_frame_attribute')->first(); ?>

							      		<?php $attribute = App\Attribute::where('type',1)->groupby('name')->orderby('created_at')->get();
							      			if($frame){
											$attr_frame = App\Attribute::where('id',$frame->value)->first();
										}
										?>
						      		    <div class="table-responsive">
				                                <table class="table b-t">
				                                  <tbody>
				                                  	<?php foreach($attribute as $key => $value): ?>
				                                  	<?php if($value->name != $attr_frame->name): ?>
				                                  		<?php $c=0;?>
				                                  		<?php foreach($attr as $key2 => $value2 ): ?>
				                                  			<?php if($value->name == $value2->name): ?>
				                                  				<?php $c++;?>
				                                  			<?php endif; ?>
				                                  		<?php endforeach; ?>

					                                    <tr>
					                                      <td style="width: 5%">
					                                      <label class="ui-check m-a-0">
					                                      <input type="checkbox" class="add_check" data-id="<?php echo e($value->id); ?>" data-name="<?php echo e($value->name); ?>"
					                                      <?php if($c): ?> checked="" <?php endif; ?> 
					                                      >
					                                      	<i class="dark-white" ></i>
					                                      </label>
					                                      </td>
					                                      <td><?php echo e($value->name); ?></td>
					                                    </tr>
					                                <?php endif; ?>    
				                                    <?php endforeach; ?>
				                                  </tbody>
				                                </table>
				                        </div>
									    <a id="add_item" class="btn btn-sm warn pull-left add-attr"  data-dismiss="modal">Chọn</a>
									    <div style="clear:both"></div>
								   </div>
							    </div><!-- /.modal-content -->
							  </div>
							</div>
							<!-- / .modal -->
				          </div>
				          <div class="box-body">
				          <?php if($attr_frame): ?>
								<p style="font-size:10pt; color:#a6a6a6; font-family: Roboto;opacity: 0.6 ">Thuộc tính : <?php echo $attr_frame->name; ?> là Frame mặc định của sản phẩm bắt buộc phải có </p>
				          	<?php endif; ?>
							<div class="row">
									<div class="col-sm-12" id="atrribute-containner">
											<?php if($attr_frame): ?>
												<div class="row attr-item ">
										        		<div class="col-sm-3" style="padding-left: 11px;">
										        		<label style="margin-top:10px;">
										        		
														  <?php echo $attr_frame->name; ?>

														  <input type="hidden" name="config_frame" value="<?php echo e($attr_frame->name); ?>">
														</label>
										        	</div>
										        	<div class="col-sm-9 d-class" style="padding-left: 12px;padding-right: 13px;">
										        		<div class="form-group attr-item ">
												            <input type="text" placeholder="Thêm <?php echo $attr_frame->name; ?>" class="form-control " name="attrbute_frame" required >
												        </div>
										        	</div>
										        </div>
									        <?php endif; ?>
											
									</div>
				         	</div>	 
		                  </div>
				        </div>
				    </div>
				    <!-- End item -->
					<!-- Begin Item -->
				    <div class="col-sm-6 item">
				        <div class="box">
				          <div class="box-header"><h2>Mô tả chi tiết</h2></div>
				          <div class="box-body">
							<div class="row">
									<div class="col-sm-12">
									   	<ul class="nav nav-sm nav-pills nav-active-primary clearfix" id="list_tab_title">
							           	  <?php foreach($content as $key => $v3): ?>
                                            <?php if($key==0): ?>
										    <li class="nav-item">
										      <a class="nav-link active " id="default_tab" href data-toggle="tab" data-target="#tab_1">Tab 1</a>
										    </li>
                                            <?php else: ?>
										     <li class="nav-item new_tab" id="li_tab<?php echo e($key+1); ?>"><a class="nav-link " href data-toggle="tab" data-target="#tab_<?php echo e($key+1); ?>">Tab <?php echo e($key+1); ?><span tab_id="<?php echo e($key+1); ?>">×</span></a></li>
										    
										     <?php endif; ?>
										   <?php endforeach; ?>
										   <li class="nav-item">
										      <a class="nav-link" href="#" id="add_tab">Thêm tab</a>
										    </li>   
										</ul>
										
										<div class="tab-content" id="list_tab_content"> 
										 <?php foreach($content as $key => $v3): ?>
										    <div class="tab-pane p-v-sm <?php if($key==0): ?> active <?php endif; ?>" id="tab_<?php echo e($key+1); ?>">
										     <input type="hidden" name="content[id][]" value="<?php echo e($v3->id); ?>">
										      <div class="box m-t p-a-sm">
										      	<div class="form-group">
									              <label>Tên thẻ tab</label>
									              <input type="text" class="form-control" data-tab="1" name="content[name][]" value="<?php echo e($v3->name); ?>">
									            </div>
									            <div class="form-group">
									              <!-- <label>Nội dung bài viết</label> -->
									              <textarea  id="editor_<?php echo e($key+1); ?>" class="form-control" rows="5"  data-content="<?php echo e($v3->id); ?>" name="content[content][]"><?php echo e($v3->content); ?></textarea>
									            </div>
									          </div>
									          <div class="attr_container">
									          	<?php $x = $v3->getAttributes_group;?>
									          	<div class="view_des">
									          	<i class="material-icons md-24 add_attr_tab" data-toggle="modal">&#xe147;</i>
									          	<?php if(sizeof($x)): ?>
									          		<span>Đã chọn <?php echo e(sizeof($x)); ?> thuộc tính</span>
									          	<?php else: ?>
									          		<span>Chọn thuộc tính hiển thị trong tab</span>
									          	<?php endif; ?>
									          	
									          	</div>
									          	<?php $v_str="" ; foreach( $x as $it){
									          		$v_str .= $it->name.",";
									          	}?>
									          	<input type="hidden" name="tab_list[]" class="list_attr_valie" value="<?php echo e($v_str); ?>">
									          	<div class="tab_list_attr">
									          	</div>
									          </div>
										    </div>
										
										  <?php endforeach; ?>   
										</div>  
				          			</div>
				        	 </div>	 	
		                  </div>
				        </div>
				     </div>
				    <!-- End Item -->
				     <!-- Begin Item Nhãn -->
				    <div class="col-sm-6 item">
				        <div class="box">
				          <div class="box-header"><h2>Nhãn</h2></div>
				          <div class="box-body">
							<div class="row">
									<div class="col-sm-12" style="">
											<div class="form-group">
							            	<label for="single">Nhãn</label>
									        <select id="single" class="form-control select2" name="label">
									            <option value="0">Không nhãn</option>
									            <option value="1">New</option>
									            <option value="2">Kool</option>
									            <option value="3">Sale</option>
									        </select>
									    </div>	
									</div>
				         	</div>	 
		                  </div>
				        </div>
				    </div>
				    <!-- End item -->
				    <!-- Begin Item -->
				    
				    <!-- End Item -->
				    <!-- Begin Item Thuộc tính -->
				    <div class="col-sm-6 item">
				        <div class="box">
				          <div class="box-header"><h2>Các thuộc tính cơ bản</h2></div>
				          <div class="box-body">
							<div class="row">
								<div class="col-sm-12">
											<div class="form-group">
								              <label>Tên sản phẩm</label>
								              <input type="text" disabled class="form-control" name="product_name" value="<?php echo e($product->name); ?>" autocomplete="off" >                        
								            </div>
								            <div class="form-group">
								              <label>Mã sản phẩm</label>
								              <input type="text" class="form-control" name="frame_code" autocomplete="off" value="<?php echo old('frame_code'); ?>" >
								            </div>
								            <div class="form-group">
								              <label>Mô tả ngắn</label>
								              <textarea name="product_des" class="form-control" rows="5"></textarea>
								            </div>
										    <div class="form-group m-money">
								              <label>Giá niêm yết</label>
								              <input  type="text" class="form-control" name="price"  autocomplete="off" >
								              <div class="m-tooltip"></div>
								            </div>
								             <div class="form-group m-money">
								              <label>Giá bán</label>
								              <input  type="text" class="form-control" name="price_sale"  autocomplete="off" >
								              <div class="m-tooltip"></div>
								            </div>
<!-- 								            <div class="form-group">
								              <label>Số lượng sản phẩm</label>
								              <input type="number"  type="text" class="form-control" name="sku" >
								            </div> -->
								            <div class="form-group seo_tags">
											   <label>Tags : Khi tạo một Tag nhấn "Tab" hoặc "Enter" để kết thúc Tag</label>
										       <input type="text" id="list_tag"  name="seo_tags"  class="form-control" autocomplete="off" >
									        </div>	
								            <div class="form-group">
								                <?php
													$list_categories = App\CategoryProduct::get();
													 $space = "--";
												?>
											        <label for="multiple">Danh mục sản phẩm</label>
											       
											        <select disabled id="multiple" class="form-control select2-multiple" name="choose_cate[]" multiple >
											        	<?php mutiselect ($list_categories , $parent=0, $str='', $catIds) ?>
											        </select>
											</div>
											
												
								</div>
							</div>	 
		                  </div>
				        </div>
				    </div>
				    <!-- End item -->
				   
			 	</div>
	 	 
	 </div>
</form>
<div id="m-a-tab" class="modal fade animate" data-backdrop="true">
  <div class="modal-dialog" id="animate">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">Thêm thuộc tính</h5>
      </div>
      <div class="modal-body p-lg">
      	    <div class="table-responsive">
                    <table class="table b-t">
                      <tbody>
                      	<tr>
                          <td style="width: 5%">
                          <label class="ui-check m-a-0">
                          <input type="checkbox" class="add_check_attr"">
                          	<i class="dark-white" ></i>
                          </label>
                          </td>
                          <td>x</td>
                        </tr>
                      </tbody>
                    </table>
            </div>
           
		    <a id="add_attr_to_tab" class="btn btn-sm warn pull-left add-attr"  data-dismiss="modal">Chọn</a>
		    <div style="clear:both"></div>
	   </div>
    </div><!-- /.modal-content -->
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-footer'); ?>

  <script src="<?php echo e(asset('backend/libs/jquery/screenfull/dist/screenfull.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/libs/jquery/select2/dist/js/select2.min.js')); ?>"></script>
  <script src="<?php echo e(asset('summernote/dist/summernote.min.js')); ?>"></script>
  <script src="<?php echo e(asset('summernote/dist/lang/summernote-vi-VN.js')); ?>"></script>
  <script src="<?php echo e(asset('libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')); ?>"></script>
  <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
  <script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
  <script src="<?php echo e(asset('backend/stag/js/stag.js')); ?>"></script>
   <?php   $font_default = App\Item::where('key_item', 'font_default')->first();

           $font_custom = App\Item::where('key_item', 'font_custom')->first(); ?>
    <script type="text/javascript">
   		submit = 0;
   		$(document).on('mouseenter',"button[type=submit]",function(){
   			submit = 1;
   		});
   		$(document).on('mouseleave',"button[type=submit]",function(){
   			submit = 0;
   		});	
   		$(document).on('submit','#form-edit-product',function(e){
   			if(submit ==0){
   				e.preventDefault();
   			}
		});
   		<?php $list_tag =  App\TagP::get();
   			$l_tag= array();
   			foreach ($list_tag  as $key => $value) {
   					array_push($l_tag,$value->tag);
   			}
   		?>
   		var obj = <?php echo json_encode($l_tag); ?>;
   		$("#list_tag").stag('Thêm tag',obj);
   		i_name = $('.i_name');
   		$.each(i_name,function(i,v){
   			$(v).stag("Thêm " + $(v).prev().val(),[]);
   		});
   		setInterval(function(){
   			load_masonry();
   		},1000);
   		$(document).on('mouseenter','.m-money',function(){
   			value = $(this).find('input').val();
   			if(!value){
				$(this).find('.m-tooltip').text("Chưa nhập giá");
   			}else{
   				value = (value + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
   				
   				$(this).find('.m-tooltip').text(value+" "+"đ");
   			}
   		});
   		$(document).on('keyup','.m-money input',function(){
   			value = $(this).val();
   			if(!value){
				$(this).next().text("Chưa nhập giá");

   			}else{
   				value = parseInt(value);
				value = (value + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
   				$(this).next().text(value+" "+"đ");
   			}
   		});
   </script>
  <script>
  
  	$(document).on('click','#add_item',function(){
  		var list_check = $(".add_check:checked");
  		var list_uncheck = $(".add_check:not(:checked)");
  		$.each(list_check,function(i,v){
  			id = $(v).attr('data-id');
  			text = $(v).attr('data-name');
  			var d = $('.attr-item input[value="'+text+'"]');
  			if(d.length == 0){
	  			content = '<div class="row attr-item ">'+
				        	'<div class="col-sm-3">'+
				        		'<label style="margin-top:10px;">'+text+'</label>'+
				        	'</div>'+
				        	'<div class="col-sm-9">'+
				        		'<div class="form-group attr-item ">'+
				        			'<input type="hidden"  name="attrbute_k[]" value="'+text+'">'+
						            '<input type="text"  class="form-control i_name attr_temp" name="attrbute_v[]" autocomplete="off">'+
						        '</div>'+
				        	'</div>'+
				        '</div>';
		  		$("#atrribute-containner").append(content);
		  		$(".attr_temp").stag('Thêm '+text,['1','2']);
	  			$(".attr_temp").removeClass('attr_temp');
	  		}	  		
  		});
  		$.each(list_uncheck,function(i,v){
  			id = $(v).attr('data-id');
  			text = $(v).attr('data-name');
  			var d = $('.attr-item input[value="'+text+'"]');
  			if(d.length !== 0){
  				$(d).parent().parent().parent().remove();
  			}
  		});
  		load_masonry();
  	});
  
  	$(document).on('focus','.attr-item .stag-input',function(e){
  		input = this;
  		container  = $(this).getStagContainer();
  		var key = $(container).prev().prev().val();
  		if($(input).hasClass('data_avaiable')){
  		}else{
  			$.ajax({
              headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              },
              type:"post",
              url:"<?php echo e(route('check-key.products')); ?>",
              data:{'key':key},
              success:function(data){
              	list = [];
              	$.each(data.list,function(i,v){
              		list.push(v.value);
              	});
              	$(input).addClass('data_avaiable');
              	$(container).stagSuggestList(list);
              },
              cache:false,
              dataType:'json'
          	});
  			
  		}
  	});
  	

  	$('#single').select2();
  	$(".select2-multiple").select2({
      placeholder: "Chọn danh mục "
    });
	$(function() {
		Dropzone.autoDiscover = false;
	    $("div#myDropZone").dropzone({
	    		maxFiles:6,
	    		maxfilesexceeded:function(file){
	    			 this.removeFile(file);
	    		},
		        url : "<?php echo e(route('quan-tri.upload.up-img')); ?>",
	            addRemoveLinks : true,
			    maxFilesize: 5,
			    dictDefaultMessage: 'Ảnh chi tiết sản phẩm',
			    dictResponseError: 'Error uploading file!',
			    headers: {
			        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
			    },
			    error: function (file, response) {
			       load_masonry();
			    },
			    success: function (file, response) {
			        $(file.previewElement).find('.dz-filename span').text(response);
			        var fileupload = $('.dz-filename span');
			  		var t = "";
			  		$.each(fileupload,function(i,v){
			  			if( i== fileupload.length - 1 ){
			  				t += $(v).text();
			  			}else{
			  				t += $(v).text()+ ",,,";
			  			}
			  		});
			  		$("input[name='img_product']").val(t);
			  		load_masonry();
			    },
			    removedfile: function(file) {
				    var _ref;
				    _ref = file.previewElement;
				    if(_ref!= null){
				    	_ref.parentNode.removeChild(file.previewElement);
				    	console.log(1);
				    	setTimeout(function(){
				  			load_masonry();
				  		},200);
				    }
				 }
	    });
	});
  	$(document).on('click',"#add_tab",function(e){
    	e.preventDefault();
    	var c = $("#list_tab_title li").length;
    	if(c>5) return false;
    	
    	if( $("#li_tab2").length == 0  ){
    		c = 2;
    	}else{
    		if( $("#li_tab3").length  == 0 ){
	    			c = 3;
	    	}else{
	    		if( $("#li_tab4").length == 0  ){
		    		c = 4;
		    	}else{
		    		if( $("#li_tab5").length >0  ){
			    		c= 5;
			    	}
		    	}
	    	}
    	}
    	console.log('c = ' +c );    
    	var html = '<li class="nav-item new_tab" id="li_tab'+c+'">'+
    					'<a class="nav-link " href data-toggle="tab" data-target="#tab_'+c+'">Tab '+c+'<span  tab_id="'+c+'" >×</span></a>'
										   + '</li>';
		var content = '<div class="tab-pane p-v-sm" id="tab_'+c+'">'+
					'<div class="box m-t p-a-sm">'+
					'<input type="hidden" name="content[id][]" value="0" />'+
			      	'<div class="form-group">'+
		              '<label>Tên thẻ tab</label>'+
		              '<input  type="text" class="form-control i_name"'+
		               'name="content[name][]" value="Tab '+c+'">'+                        
		            '</div>'+
		            '<div class="form-group">'+
		     '<textarea  id="editor_'+c+'" class="form-control i_content"'+
		  'rows="5" name="content[content][]" ></textarea></div>'+
		             '<div class="attr_container">'+
				          	'<div class="view_des">'+
				          	'<i class="material-icons md-24 add_attr_tab" '+ 'data-toggle="modal">&#xe147;</i>'+
				          	'<span>Chọn thuộc tính hiển thị trong tab</span></div>'+
				          	'<input type="hidden" name="tab_list[]" class="list_attr_valie">'+
				          	'<div class="tab_list_attr">'+
				          	'</div>'+
				          '</div>'+
			      '</div>';
    	$(this).parent().before(html);
    	$("#list_tab_content").append(content);
    	
    	 
	    });
	    $(document).on('click','.nav-link',function(){
	    	load_masonry();
    });
    $('#editor_1').summernote({
   	        lang: "vi-VN",
		    height: (270),
		    fontNames: [<?php echo isset($font_default) ?$font_default->value.',':''; ?><?php echo isset($font_custom) ?$font_custom->value:''; ?>],
			fontNamesIgnoreCheck: [<?php echo isset($font_custom) ?$font_custom->value:''; ?>],
	  
		    popover: {
					  image: [
					    ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
					    ['float', ['floatLeft', 'floatRight', 'floatNone']],
					    ['remove', ['removeMedia']]
					  ],
					  link: [
					    ['link', ['linkDialogShow', 'unlink']]
					  ],
					  air: [
					    ['color', ['color']],
					    ['font', ['bold', 'underline', 'clear']],
					    ['para', ['ul', 'paragraph']],
					    ['table', ['table']],
					    ['insert', ['link', 'picture']]
					  ]
			},
			
			toolbar: [
			    ['style', ['style']],
			    ['font', [ 'italic', 'underline', 'clear']],
			    ['fontname', ['fontname']],
			    ['color', ['color']],
			    ['para', ['ul', 'ol', 'paragraph']],
			    // ['height', ['height']],
			    ['table', ['table']],
			    ['insert', ['link']],
			    ['view', [ 'codeview']],
			    ['help', ['help']]
			  ],
		    callbacks: {
		        onImageUpload: function(image) {
		            uploadImage(image[0],"#editor_1");
		        }
		    }
	});
    $(document).on('click','.nav-link span',function(){
    	id = $(this).attr('tab_id');
    		if(id!=1){
    				$("#tab_"+id).remove();
    				$("#li_tab"+id).remove();
    		};
    	$("#default_tab").click();
    });
	function uploadImage(image,editor) {
		    var data = new FormData();
		    data.append("image", image);
		    $.ajax({

		        url: "<?php echo e(route('quan-tri/dang-anh')); ?>",
		        cache: false,
		        contentType: false,
		        processData: false,
		        data: data,
		        type: "post",
		        success: function(url) {
		        	//console.log(url);
		            var image = $('<img>').attr('src', 'http://' + url);
		            $(editor).summernote("insertNode", image[0]);
		        },
		        error: function(data) {
		            console.log(data);
		        }
		    });
	}
	function readURL(input) {
    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	            $('#img_preview').attr('src', e.target.result);
	            load_masonry();
	        }
	        reader.readAsDataURL(input.files[0]);
	    }
	}

	$("#file_img_preview").change(function(){
	    readURL(this);
	});
	  $(".select2-multiple").select2({
	  placeholder: "Không thuộc danh mục nào",
	  allowClear: true
	});
	
	 $.each($('textarea'),function(i,v){
	 	$(v).attr('spellcheck','false');
	 });
	 	$.each($('input'),function(i,v){
	 	$(v).attr('spellcheck','false');
	 });
	 $.each($('.note-editable'),function(i,v){
	 	$(v).attr('spellcheck','false');
	 });
	 function load_masonry(){
	      var container = $('.masonry-container');
	      container.masonry({
	        columnWidth: '.item',
	        itemSelector: '.item'
	      });   
	  }
	  load_masonry();
	  setTimeout(function(){
			load_masonry();
	  },200);

	  add_attr_tab = null;
  $(document).on('click','.add_attr_tab',function(e){
  	    add_attr_tab =  this;
  		$("#m-a-tab").modal('show');
  		var list_k = $("#atrribute-containner .form-group.attr-item input[name='attrbute_k[]']");
  		var list_v = $("#atrribute-containner .form-group.attr-item input[name='attrbute_v[]']");
  		$("#m-a-tab tbody").html('');
  		list = $(add_attr_tab).parent().next().val();
  		list_str_k  = list.split(",");

  		$.each(list_k,function(i,v){
  			k = $(v).val();
  			v = $(list_v[i]).val();
  			x = 0;
  			for(j=0 ; j< list_str_k.length;j++){
  				if(list_str_k[j] == k){
  					x++;
  				}
  			}
  			if(x == 0){
  				str = '<tr>'+
		              '<td style="width: 5%">'+
		              '<label class="ui-check m-a-0">'+
		              '<input type="checkbox" class="add_check_attr" data-key="'+k+'">'+
		              	'<i class="dark-white" ></i>'+
		              '</label>'+
		              '</td>'+
		              '<td>'+k+'</td>'+
		          '</tr>';
		      }else{
		      	str = '<tr>'+
		              '<td style="width: 5%">'+
		              '<label class="ui-check m-a-0">'+
		              '<input type="checkbox" checked class="add_check_attr" data-key="'+k+'">'+
		              	'<i class="dark-white" ></i>'+
		              '</label>'+
		              '</td>'+
		              '<td>'+k+'</td>'+
		          '</tr>';
		      }
  			
		  	$("#m-a-tab tbody").append(str);
  		});
  		
  });
    
  	$(document).on('click','#add_attr_to_tab',function(){
  		var list_check = $(".add_check_attr:checked");
  		var list_uncheck = $(".add_check_attr:not(:checked)");
  		c = 0;
  		key = "";
  		$.each(list_check,function(i,v){
  			c++;
  			key += $(v).attr('data-key')+",";
  		});
  		if(c != 0){
  			$(add_attr_tab).next().text("Đã chọn " + c + " thuộc tính");
  			$(add_attr_tab).parent().next().val(key);
  		}else{
  			$(add_attr_tab).next().text("Chọn thuộc tính hiển thị trong tab");
  			$(add_attr_tab).parent().next().val('');
  		}
  	});
  	
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>