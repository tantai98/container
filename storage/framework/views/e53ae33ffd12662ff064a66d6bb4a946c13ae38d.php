<?php $__env->startSection('css'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('backend/libs/jquery/select2-bootstrap-theme/dist/select2-bootstrap.min.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('backend/libs/jquery/select2/dist/css/select2.min.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('summernote/dist/summernote.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('libs/bootstrap-tagsinput/bootstrap-tagsinput.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('backend/assets/styles/backend.css')); ?>" type="text/css" />
   <style type="text/css">
   .name-attr{
    cursor: pointer;
   }
    h2{
          font-family: "Roboto";
          font-size: 10pt !important;
    }
   .box-body {
    padding: 0rem !important;
  }
      .title_form{
            margin-left: 10px;
      }
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
        padding-top: 6px;
        padding-bottom: 6px;
        
    }
    .add-attr:hover{
        background-color: #92D050 !important;
        color: #fff;
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
    }
    .change-item{
      cursor: default;
    }
    .x-item{
      cursor: pointer;
    }
    .itemfilter_type_0, .itemfilter_type_1{
      position: relative;
    }
    .itemfilter_type_0:hover{
      font-family: "Roboto-Bold";
    }
    .itemfilter_type_1:hover{
      color:#111;
    }
    .itemfilter_type_0 .x-item, .itemfilter_type_1 .x-item{
      display: none;
      position: absolute;
      right: -3px;
      top: 3px;
    }
    .itemfilter_type_0:hover .x-item{
      display: block;
    }
    .itemfilter_type_1:hover .x-item{
      display: block;
    }
    .choose_img_item{
      background-color: #00B0F0 !important;
      font-family: "Roboto";
      font-size: 10pt !important;
    }
    .choose_img_item:hover{
      background-color: #00B0F0 !important;
    }
    .save-item:hover{
          box-shadow: inset 0 -10rem 0px rgba(158, 158, 158, 0.2);
    }
    .save-item{
      text-transform: uppercase;
      font-size: 9pt;
      font-family: "Roboto-Bold";
    }
    #model-preview{
      margin-left: 20px;
    }
    .del_attribute{
      visibility: hidden;
    }
    tr:hover .del_attribute{
      visibility: visible;
    }
   </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="app-header white box-shadow">
<div class="navbar">
    <div style="float:left;" class="title_form">
        <p>Tùy chọn Thuộc tính</p>
      </div>
      <div style="float:right;margin-top:10px;">
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
      .itemfilter{
        display: inline-block;
        margin-left: 10px;
        font-family: "Roboto";
        font-size: 10pt;
      }
      .name-attr{
        font-family: Roboto Bold;
        display:inline-block;
        font-size: 10pt;
      }
      input{
        border:0px !important;
        background-color: rgba(1,1,1,0) !important;
        min-width: 230px;
      }
      #new_attr{
        font-family: "Roboto Bold";
        font-size: 10pt;
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
      }
      #value_attr {
          background-color: #F0F0F0 !important;
          font-size: 10pt !important;
          border: 1px solid #E7E7E7 !important;
      }
      #init_attr{
        background-color: #F0F0F0 !important;
          font-size: 10pt !important;
          border: 1px solid #E7E7E7 !important;
      }
      #e-name{
        background-color: #F0F0F0 !important;
          font-size: 10pt !important;
          border: 1px solid #E7E7E7 !important;
      }
       #e-init{
        background-color: #F0F0F0 !important;
          font-size: 10pt !important;
          border: 1px solid #E7E7E7 !important;
      }
      .input_bg{
        background-color: #F0F0F0 !important;
          font-size: 10pt !important;
          border: 1px solid #E7E7E7 !important;
      }
      .itemfilter{
        padding: 3px 7px;
      }
      .modal-content{
        border: 0px;
      }
      .table-hover tr:hover, .table tr.active, .table td.active, .table th.active {
          background-color: rgba(0, 0, 0, 0.025) !important;
      }
      .table{
        margin-bottom: 0px;
      }
     </style>
    <div class="padding" style="padding-top:0px !important; padding-bottom:0px;">
        <?php echo $__env->make('backend.partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
     <?php $attribute = App\Attribute::where('type',1)->groupby('name')->orderby('created_at')->get();?>
    <div class="padding">
    
         <div class="row">
          
              <div class="col-sm-12">
              
                  <div class="box">
                    <div class="box-header">
                      <h2 style="font-size:10.5pt; font-family: Roboto Bold">Danh sách thuộc tính sản phẩm</h2>
                    </div>
                    
                    <div class="box-body">
                          <div class="table-responsive">
                            <table class="table table-striped b-t">
                              <tbody>
                              <?php if(session('admin')->can('them_thuoc_tinh')): ?>
                                <tr id="add_attribute" data-toggle="modal" data-target="#m-a-a" ui-toggle-class="fade-left-big" ui-target="#animate">
                                  <td style="width: 4%">
                                    <label class="ui-check m-a-0" style="padding-left:5px; font-family:Roboto Bold; font-size:12pt;">
                                      +
                                    </label>
                                  </td>
                                  <td>
                                    <input disabled="" id="new_attr" type="" spellcheck="false" name="" placeholder="Thêm thuộc tính mới cho sản phẩm">

                                  </td>
                                  <td style="width: 4%">
                                  </td>
                                </tr>
                              <?php endif; ?>
                                <tr>
                                  <td style="width: 4%">
                                  <label class="ui-check m-a-0">
                                    <input type="checkbox" <?php if(!session('admin')->can('sua_thuoc_tinh')): ?> disabled <?php endif; ?> checked="" class="has-value filter_group price" >
                                    <i class="dark-white" ></i>
                                  </label>
                                  </td>
                                  <td data-type="1">
                                    <div class="name-attr" >Giá</div>
                                    <?php
                                      $list_filter_1= App\FilterPrice::get();
                                    ?>

                                     <?php $min = 100000000; $max = -100000000;

                                     $min =  DB::table('products')->min('price');
                                     $max =  DB::table('products')->max('price');
                                     if(!$min) $min = 0;
                                     ?>

                                      <div class="itemfilter" style="font-family:'Roboto Bold'">
                                       <?php echo e($min); ?> - <?php echo e($max); ?>

                                      </div>

                                      <!--  Danh sách item filter type 1 -->
                                      <?php foreach($list_filter_1 as $key2 => $value2): ?>
                                      <div class="itemfilter itemfilter_type_1" data-filter="<?php echo e($value2->id); ?>"><span class=""><?php echo e($value2->min); ?> - <?php echo e($value2->max); ?></span>
                                      <span class="x-item price_x">×</span>
                                      </div>
                                      <?php endforeach; ?>

                                    <?php if(session('admin')->can('them_thuoc_tinh')): ?>
                                     <input class="itemfilter inpput-filter price_add" style="width:auto" placeholder="Nhập khoảng giá 100000 - 500000">
                                    <?php endif; ?>  
                                  </td>
                                  <td style="width: 4%">
                                  </td>
                                </tr>
                                <?php foreach($attribute as $key=> $value): ?>
                                <tr>
                                  <td style="width: 4%">
                                  <label class="ui-check m-a-0">
                                    <input type="checkbox" <?php if($value->status ==1 ): ?> checked  <?php endif; ?> name="post[]" class="has-value filter_group" value="<?php echo e($value->id); ?>" <?php if(!session('admin')->can('sua_thuoc_tinh')): ?> disabled <?php endif; ?> >
                                    <i class="dark-white" ></i>
                                  </label>
                                  </td>
                                  <td data-type="<?php echo e($value->avaiable); ?>" data-name="<?php echo e($value->name); ?>">
                                    <div class="name-attr edit" ><?php echo e($value->name); ?></div>
                                    <?php
                                    $list_filter= App\Filter::where('name',$value->name)->where('type',0)->get();
                                    $list_attr= App\Attribute::where('name',$value->name)->where('type',0)->get();
                                    $list_filter_1= App\Filter::where('name',$value->name)->where('type',1)->get();
                                    ?>

                                    <?php if($value->avaiable == 1): ?>
                                      <?php $min = 100000000; $max = -100000000;?>
                                      <?php foreach($list_attr as $key2 => $value2): ?>
                                      <?php 

                                          if($value2->value > $max) $max = $value2->value;
                                          if($value2->value < $min) $min = $value2->value;
                                      ?>
                                      <?php endforeach; ?>
                                      <?php if($max !=-100000000  && $min != 100000000): ?>
                                      <div class="itemfilter" style="font-family:'Roboto Bold'"><?php echo e($min); ?> - <?php echo e($max); ?></div>
                                      <?php endif; ?>
                                      <!--  Danh sách item filter type 1 -->
                                      <?php foreach($list_filter_1 as $key2 => $value2): ?>
                                      <div class="itemfilter itemfilter_type_1" data-filter="<?php echo e($value2->id); ?>"><span class="change-item">
                                      <?php if(strlen($value2->config_name) == 0): ?>
                                      <?php echo e($value2->min); ?> - <?php echo e($value2->max); ?>

                                      <?php else: ?>
                                      <?php echo e($value2->config_name); ?>

                                      <?php endif; ?>
                                      </span>
                                      <span class="x-item">×</span>
                                      </div>
                                      <?php endforeach; ?>
                                      <?php if(session('admin')->can('them_thuoc_tinh')): ?>
                                      <input class="itemfilter inpput-filter" style="width:auto" placeholder="Nhập và enter, ví dụ 100 - 200">
                                      <?php endif; ?>
                                    <?php else: ?>
                                      <!--  Danh sách item filter type 0 -->
                                      <?php foreach($list_filter as $key2 => $value2): ?>
                                      <div class="itemfilter itemfilter_type_0" data-filter="<?php echo e($value2->id); ?>"><span class="change-item">
                                      <?php if(strlen($value2->config_name) == 0): ?>
                                      <?php echo e($value2->value); ?>

                                      <?php else: ?>
                                      <?php echo e($value2->config_name); ?>

                                      <?php endif; ?>
                                      </span><span class="x-item">×</span></div>
                                      <?php endforeach; ?>
                                    <?php endif; ?>
                                  </td>
                                  <td style="width: 4%">
                                    <label class="ui-check m-a-0 del_attribute" data-name="<?php echo e($value->name); ?>" style="padding-left:5px; font-family:Roboto Bold; font-size:12pt;">
                                      <?php if(session('admin')->can('xoa_thuoc_tinh')): ?>  ×   <?php endif; ?>
                                    </label>
                                  </td>
                                </tr>
                                <?php endforeach; ?>
                                  
                              </tbody>
                            </table>
                        </div>
                    </div>
                   
             </div>
        </div>
        </div>
     
   </div>
<!-- .modal -->
<?php if(session('admin')->can('them_thuoc_tinh')): ?>
<div id="m-a-a" class="modal fade animate" data-backdrop="true">
  <div class="modal-dialog" id="animate">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Thêm thuộc tính</h5>
      </div>
      <div class="modal-body p-lg">
        <div class="form-group">
            <label for="list_attribute">Loại thuộc tính</label>
            <select id="list_attribute" class="form-control select2" >
                 <option value="0">Định tính</option>
                 <option value="1">Định lượng</option>
            </select>  
        </div>  
        <div class="form-group">
          <label>Tên thuộc tính</label>
          <input type="text" id="value_attr" class="form-control" name="value" placeholder="ví dụ : Màu sắc, kích thước ...">
        </div>
        <div class="form-group">
          <label>Đơn vị (nếu cần)</label>
          <input type="text" id="init_attr" class="form-control" name="value" placeholder="ví dụ : kg,cm ...">
        </div>
        <a id="add_item" class="btn btn-sm warn pull-left add-attr"  data-dismiss="modal">Tạo</a>
        <div style="clear:both"></div>
     </div>
    </div><!-- /.modal-content -->
  </div>
</div>
<?php endif; ?>
<!-- .modal -->
<?php if(session('admin')->can('sua_thuoc_tinh')): ?>
  <div id="m-a-e" class="modal fade animate" data-backdrop="true">
  <div class="modal-dialog" id="animate">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Chỉnh sửa thuộc tính</h5>
      </div>
      <div class="modal-body p-lg">
        <div class="form-group">
            <label for="list_attribute">Loại thuộc tính</label>
            <select id="list_attribute" class="form-control select2" disabled="" >
                 <option value="0" id="list_attribute_0">Định tính</option>
                 <option value="1" id="list_attribute_1">Định lượng</option>
            </select>
           
        </div>  
        <div class="form-group">
          <label>Tên thuộc tính</label>
          <input id="e-name" type="text" id="value_attr" class="form-control" name="value" placeholder="ví dụ : Màu sắc, kích thước ...">
           <input  id="e-id" type="hidden" class="form-control input_bg" name="id">
        </div>
        <div class="form-group">
          <label>Đơn vị</label>
          <input id="e-init" type="text" id="init_attr" class="form-control" name="value" placeholder="ví dụ : kg,cm ...">
        </div>
        <a id="save_attr" class="btn btn-sm warn  pull-left add-attr"  data-dismiss="modal">Lưu</a>
        <div style="clear:both"></div>
     </div>
    </div><!-- /.modal-content -->
  </div>
</div>
<div id="m-a-a_0" class="modal fade animate" data-backdrop="true">
  <div class="modal-dialog" id="animate">
    <div class="modal-content">
      <form id="config_item" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" style="font-size:10pt;font-family:'Roboto Bold' " id="model-h5">Tùy chỉnh thuộc tính</h5>
      </div>
      <div class="modal-body p-lg">
        
        <div class="form-group">
          <label>Giá trị</label>
          <input  id="model-value" disabled type="text" class="form-control input_bg">
          
        </div>

        <div class="form-group">
          <label>Text hiển thị</label>
          <input  id="model-input" type="text" class="form-control input_bg" name="config_name" placeholder="Ví dụ : Màu vàng, Hàng ngoại, 100cm - 200cm ...">
          <input  id="model-id" type="hidden" class="form-control input_bg" name="id">
        </div>
        <div class="form-group">
          <label>
            <a class="btn btn-sm warn pull-left choose_img_item" >Ảnh đại điện</a>
            <img id="model-preview" style="max-height:30px;">
            <input  id="model-img" type="file" name="img" style="display:none">
          </label>
          <div style="clear:both"></div>
        </div>
        <a id="save_0" class="btn pull-right save-item"  >Hoàn tất</a>
        <div style="clear:both"></div>
     </div>
     </form>
    </div><!-- /.modal-content -->
  </div>
</div>
<?php endif; ?>
<!-- / .modal -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-footer'); ?>
  <script src="<?php echo e(asset('backend/libs/jquery/screenfull/dist/screenfull.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/libs/jquery/select2/dist/js/select2.min.js')); ?>"></script>
 
  <script src="<?php echo e(asset('summernote/dist/summernote.min.js')); ?>"></script>
  <script src="<?php echo e(asset('summernote/dist/lang/summernote-vi-VN.js')); ?>"></script>
  <script src="<?php echo e(asset('libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')); ?>"></script>

  
  <script type="text/javascript">
    change_item = null;
    change_attr = null;
    <?php if(session('admin')->can('sua_thuoc_tinh')): ?>
    $(document).on('click','.name-attr.edit',function(){
      name = $(this).parent().attr('data-name');
      container = this;
      change_attr = this;
      $.ajax({
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type:"post",
            url:"<?php echo e(route('ajax.attr.get')); ?>",
            data:{'name':name},
            success:function(data){

              if(data.status === true){
                $("#e-id").val(data.attr.id);
                $("#e-name").val(data.attr.name);
                $("#e-init").val(data.attr.init);
                if(data.attr.avaiable == 1){
                  $("#list_attribute_0").attr('selected',false);
                  $("#list_attribute_1").attr('selected',true);
                }else{
                  $("#list_attribute_0").attr('selected',true);
                  $("#list_attribute_1").attr('selected',false);
                }
                $("#m-a-e").modal('show');
              }  
            },
            cache:false,
            dataType:'json'
        });     
    });
    <?php endif; ?>
    $(document).on('click','#save_attr',function(){
          var id = $("#e-id").val();
          var name = $("#e-name").val();
          var init = $("#e-init").val();
           $.ajax({
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type:"post",
            url:"<?php echo e(route('ajax.attr.save')); ?>",
            data:{'id':id,'name':name,'init':init},
            success:function(data){
              if(data.status === true){
                $(change_attr).text(data.attr.name);
                $(change_attr).parent().attr('data-name',data.attr.name);
              }  
            },
            cache:false,
            dataType:'json'
        });
    });
    <?php if(session('admin')->can('sua_thuoc_tinh')): ?>
    $(document).on('click','.itemfilter_type_0 .change-item,.itemfilter_type_1 .change-item',function(e){
      change_item = this;
        id = $(this).parent().attr('data-filter');
        $.ajax({
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type:"post",
            url:"<?php echo e(route('ajax.filter.get')); ?>",
            data:{'id':id},
            success:function(data){
              if(data.status === true){
                if(data.item.type == 1 ){
                  $("#model-h5").text('Tinh chỉnh khoảng lọc');
                   $("#model-value").val(data.item.min+ " - " + data.item.max);
                }else{
                  $("#model-h5").text('Tinh chỉnh thuộc tính con');
                  $("#model-value").val(data.item.value);
                }
               
                
                $("#model-input").val(data.item.config_name);
                $("#model-id").val(data.item.id);
                if(data.item.img.length > 0) {
                  $("#model-preview").attr('src',"<?php echo e(asset('')); ?>" + data.item.img);
                }else{
                  $("#model-preview").removeAttr('src');
                }
                $("#m-a-a_0").modal('show');
              }       
            },
            cache:false,
            dataType:'json'
        });
    });
    <?php endif; ?>
     $(document).on('click','.del_attribute',function(e){
        if(xacnhanxoa('Bạn có chắc muốn xóa tất cả Thuộc tính này không?')===false){

       }else{
        name = $(this).attr('data-name');
        container =  this;
        $.ajax({
            headers:{
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type:"post",
            url:"<?php echo e(route('ajax.del.attr')); ?>",
            data:{'name':name},
            success:function(data){
              if(data.status === true){
                $(container).parent().parent().remove();
              }
            },
            cache:false,
            dataType:'json'
        });
       }
        
    });
    
     $(document).on('click','.itemfilter_type_0 .x-item,.itemfilter_type_1 .x-item',function(e){
        id = $(this).parent().attr('data-filter');
        container = this;
        if($(this).hasClass('price_x')){
            $.ajax({
                headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                type:"post",
                url:"<?php echo e(route('ajax.filter.del')); ?>",
                data:{'id':id,"price":1},
                success:function(data){
                  console.log(data);
                  if(data.status === true){
                    $(container).parent().remove();
                  }else{
                      alert(data.message);
                  }   
                },
                cache:false,
                dataType:'json'
            });
        }else{
         
            $.ajax({
                headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                type:"post",
                url:"<?php echo e(route('ajax.filter.del')); ?>",
                data:{'id':id,"price":0},
                success:function(data){
                  console.log(data);
                  if(data.status === true){
                    $(container).parent().remove();
                  }else{
                      alert(data.message);
                  }   
                },
                cache:false,
                dataType:'json'
            });
        }
        
    });
     <?php if(session('admin')->can('sua_thuoc_tinh')): ?>
     $(document).on('change','.filter_group',function(){
        id = $(this).val();
        console.log("change");
         $.ajax({
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type:"post",
            url:"<?php echo e(route('ajax.attr.filter.change')); ?>",
            data:{'id':id},
            success:function(data){
              
            },
            cache:false,
            dataType:'json'
        });
     });
    <?php endif; ?>
    function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#model-preview').attr('src', e.target.result);
              }

              reader.readAsDataURL(input.files[0]);
          }
    }
    $("#model-img").change(function(){
          readURL(this);
    });
    $(document).on('click','#save_0',function(){
        var form = $('#config_item')[0];
        var formData = new FormData(form);
        var name = $('#model-input').val();
        $.ajax({
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type: "post",
            url: "<?php echo e(route('ajax.filter.submit')); ?>",
            data: formData,
            success: function (data) {
                  console.log(data);
                  $(change_item).text(name);
                 $("#m-a-a_0").modal('hide');
            },
            cache: false,
            contentType: false,
            processData: false,
        });
    });
     
    $(document).on('click','td',function(){
      i = $(this).find('input').first();
      if(i){
        $(i).focus();
      }
    });
    $('#list_attribute').select2();
    $(document).on('click','#add_attribute',function(){
      // alert("1");
    });
    $(document).on('click','#add_item',function(){
      // alert("1");
      choose = $("#list_attribute").find(":selected").val();
      value  = $("#value_attr").val();
      init = $("#init_attr").val();
       if(choose == 0){
         text = "Nhập tên cho thuộc tính";
       }else{
         text = "Nhập khoảng và enter để lọc ví dụ : 100 - 200 ";
       }
      if(value.length > 0){
         $.ajax({
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type:"post",
            url:"<?php echo e(route('attr.products.create')); ?>",
            data:{'name':value,'type':choose,'init':init},
            success:function(data){
              if(data.status === true){
                location.reload();
                text = '<tr>'+
                        '<td style="width: 4%">'+
                        '<label class="ui-check m-a-0">'+
                          '<input type="checkbox" name="post[]" class="has-value">'+
                          '<i class="dark-white" ></i>'+
                        '</label>'+
                        '</td>'+
                        '<td >'+
                          '<div class="name-attr" >'+value+'</div>'+
                          '<input class="itemfilter" style="width:auto">'+
                       '</td>'+
                      '</tr>';
                $('tbody').append(text);
              }       
            },
            cache:false,
            dataType:'json'
        });
      }
    });
    $(document).on('keyup','.inpput-filter',function(e){
       container = this;
       text = $(container).parent().find('.name-attr').first().text();
       if($(this).hasClass('price_add') ) text = "price";
       var keyCode = e.keyCode || e.which;
       if (keyCode === 13) { 
         name = $(this).val();
         if(name.length > 0){

            var res = name.split("-");
            if(res[0]==undefined || res[1] == undefined){
              alert("Bộ lọc khoảng không dúng định dạng");
            }else{
              if($.isNumeric(res[0]) && $.isNumeric(res[1])){
                min  = res[0];
                max  = res[1];
                $.ajax({
                    headers: {
                          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type:"post",
                    url:"<?php echo e(route('product.add-filter')); ?>",
                    data:{'avaiable':"1",'min': min,'max':max,'name':text},
                    success:function(data){
                      if(data.status === true){
                         str = '<div class="itemfilter itemfilter_type_1" data-filter="'+data.item.id+'"><span class="change-item">'+data.item.min+' - '+data.item.max+'</span><span class="x-item">×</span></div>'
                          $(container).before(str);
                         $(container).val('');
                      }
                    },
                    cache:false,
                    dataType:'json'
                });
              }else{
                alert("Bộ lọc khoảng phải là số");
              }
            }
            // str = '<div class="itemfilter">'+name+'</div>';
            // $(this).before(str);
            // $(this).val('');
         }
       }
    });
     function xacnhanxoa(msg){
     if(window.confirm(msg)){
          return true;
        }
        else
          return false;
    };
  </script>    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>