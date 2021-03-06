<?php $__env->startSection('content'); ?>
<style type="text/css">
    .note-editor .note-frame{
        /*border: 1px solid #a9a9a9 !important;*/
      }
      .note-editable{
        /*border: 1px solid #a9a9a9 !important;*/
      }
      .label-info{
        background-color: #5bc0de;
      }
      .bootstrap-tagsinput {
        width: 100%;
        
      }
      .bootstrap-tagsinput input {
        min-height: 2rem;
    }
    .label {
           font-size: 96%;
        }
        input{
          background-color: #F0F0F0 !important;
          font-size: 10pt !important;
          border: 1px solid #E7E7E7 !important;
        }
        textarea{
          background-color: #F0F0F0 !important;
          font-size: 10pt !important;
          border: 1px solid #E7E7E7 !important;
        }
        select{
          font-size: 10pt !important;
        }
        .select2-results__option{
          font-size: 10pt !important;
          padding-left: 14px !important;
        }
        .select2-selection__choice{
          font-size: 10pt !important;
        }
        .select2-dropdown{
          border-radius: 0px !important;
          border-bottom: 1px solid #E7E7E7 !important;
          border-top: 1px solid #E7E7E7 !important;
          border-left: 1px solid #E7E7E7 !important;
          border-right: 1px solid #E7E7E7 !important;
        }
        .bootstrap-tagsinput{
          background-color: #F0F0F0 !important;
        }
        .select2-selection{
          background-color: #F0F0F0 !important;
          color: #D1F5F1;
          border-radius: 0px !important; 
          border: 1px solid #E7E7E7 !important;
        }
        .select2-selection__choice{
          background-color: #0CC2AA !important;
          border: 1px solid #0CC2AA !important;
          color:#D1F5F1 !important;
        }
        .select2-search__field{
          background-color: #F0F0F0 !important;
          border: none !important;
        }
        .select2-selection__choice__remove{
          color:#D1F5F1 !important;
        }
        .select2-selection__rendered{
          padding-top: 5px !important;
          padding-bottom: 5px  !important;
          padding-left: 13px !important;
          border-radius: 0px !important; 
        }
        .select2-results__option--highlighted{
          background-color: #F0F0F0 !important;
          color: #404040 !important;
        }
        .select2-selection__clear{
          color:#BFBFBF !important;
        }
        .select2-search__field::-webkit-input-placeholder {
      color: #404040;
    }
    .select2-search__field::-moz-placeholder {
      color: #404040;
    }
    .select2-search__field:-ms-input-placeholder {
      color: #404040;
    }
    .select2-search__field:-moz-placeholder {
      color: #404040;
    }
    .select2-selection__choice{
      background-color: #ffffff;
      color:#111;
    }
    label{
      font-size: 10pt;
      color: #A6A6A6;
    }
    .nav-item a{
      background-color: #F2F2F2;
      margin-right: 10px;
    }
    .box-header{
      border-bottom: 1px solid #E7E7E7;
    }
    .note-toolbar{
      background-color: #fff;
    }
    .dropdown-toggle::after{
      display: none;
    }
    .note-popover{
      display: none;
    }
    .p-a-sm{
          box-shadow: none !important;
          padding: 0px !important;
    }
    .note-toolbar{
      padding: 0px !important;
    }
.note-editable{
    padding-right: 0px !important;
    padding-left: 0px !important;
}
@media (min-width: 991px){
    .title_form{
        margin-left: 207px;
        margin-top:16px;

    }
}
.title_form{
        margin-top:16px;
        font-size: 14pt;
}
.dd-content{
    padding-top: 15px !important;
    padding-bottom: 15px !important;
}
.dd-item > button{
    height: 41px !important; 
}
.menu_name{
     font-size: 10.5pt;
}
.cate_name{
    font-size: 10.5pt;
}
.cate_edit a{
    background-color: #E7E7E7;
    padding:4px 12px;
    border-radius: 3px;
    color:#A6A6A6;
}
.menu_edit a{
    background-color: #E7E7E7;
    padding:4px 12px;
    border-radius: 3px;
    color:#A6A6A6;
}
.nav-item a{
    font-size: 10pt;
    color:#A6A6A6;
}
.note-editable{
    font-size: 10pt;
}
label[for="file_img_preview"]{
    line-height: 1.3;
}
label[for="file_img_preview"] a{
    padding-top: 4px !important; 
    padding-bottom: 4px !important; 
    min-width: 120px;
}
.alert{
    font-size: 10pt;
}
.title_form p{
    font-family: 'Roboto Black';
}
.nav-link {
    padding-right: 3px;
}
.nav-item span{
    padding-left: 8px;
    cursor: pointer;
}
    h2{
          font-family: "Roboto-Bold";
          font-size: 10.5pt !important;
    }
      @media (min-width: 991px){
        .title_form{
            margin-left: 10px !important;
            margin-top: 16px;
        }
      }
    .number-post{
      width: 80px;
      height: 44px;
      background-color: #fff;
      border: 1px solid #E7E7E7;
      float: left;
      color: #404040;
      font-size: 10pt;
    } 
    #filter{
      float: left;
    } 
    .box-body{
      position: relative;
    }
    .drop-cate{
      position: absolute;
      left: calc(100% - 150px);
      top: 28px;
      width: 20px !important;
      height: 20px !important;
      padding: 7px !important;
      background-color: rgba(1,1,1,0) !important;
      box-shadow:none !important;
    }
    .drop-cate:hover{
      background-color: rgba(1,1,1,0) !important;
      box-shadow:none !important;
    }
    .dropdown-menu{
      left: 16px !important;
      top: 58px !important;
      width: calc(100% - 132px);
      padding-top: 0px !important;
      padding-bottom: 0px !important;
      border-top:0px !important;
      border-top-left-radius: 0px !important;
      border-top-right-radius: 0px !important;
    }
    .dropdown-item{
      padding-top: 10px !important;
      padding-bottom: 10px !important;
      font-size: 10pt !important;
    }
    .dropdown-toggle::after{
      /*display: none !important;*/
      margin-left: -1px !important;
    }
    .pagination{
      float: right;
    }
   
    th{
      font-size: 10pt !important;
      font-family: "Roboto-Bold" !important;
    }
    td{
      font-size: 10pt !important;
    }
    .action-post a{
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 4px;
        padding-bottom: 4px;

    }
    .action-post a:hover{
       background-color: #bfbfbf;
       border-radius: 2px;
    }
    .pagination > li > a {
          padding: 0.4rem 0.75rem !important;
    }
    .footable{
      margin-bottom: 0px !important;
    }
    .dropdown-toggle::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-right: .25rem;
        margin-left: .25rem;
        vertical-align: middle;
        content: "";
        border-top: .3em solid;
        border-right: .3em solid transparent;
        border-left: .3em solid transparent;
            margin-top: -20px;
    }
    .material-icons {
    cursor: pointer;
    }
    .add_attr_tab {
        color: #738CEC;
    }
   </style>
<?php
  $cate =null;
 if(isset($id_cate)) {
    $cate = App\CategoryProduct::where('id',$id_cate)->first();
    
  }
  $list_categories = App\CategoryProduct::where(['parent_id'=>0])->get();
   $space = "&nbsp;&nbsp;&nbsp;&nbsp;"
?>
 <?php if($cate) { 
                  $pro_id = DB::table('product_category')->where('cate_pro_id',$cate->id)->get();
                  $in = array();
                  foreach ($pro_id as $key => $value) {
                    array_push($in,$value->product_id);
                  }
                  $list_san_pham  = App\Product::wherein('products.id',$in)->leftJoin('admins', 'products.create_by', '=', 'admins.id')->leftJoin('admins as tbl_edit', 'products.last_edit_by', '=', 'tbl_edit.id')->select('products.*','admins.username as create_by_u','tbl_edit.username as last_edit_by_u')->orderby('products.created_at','desc')->get();
                }
                else{
                  $list_san_pham  = App\Product::leftJoin('admins', 'products.create_by', '=', 'admins.id')->leftJoin('admins as tbl_edit', 'products.last_edit_by', '=', 'tbl_edit.id')->select('products.*','admins.username as create_by_u','tbl_edit.username as last_edit_by_u')->orderby('products.created_at','desc')->take(1000)->get();
                }
          ?>
<div class="app-header white box-shadow">
<div class="navbar">
    <div style="float:left;" class="title_form">
        <?php if($cate): ?> 
          <p><?php echo e($cate->name); ?></p>
        <?php else: ?>
          <p>Tất cả sản phẩm</p>
        <?php endif; ?>
        
    </div>
</div>
</div>
 

 <div class="app-body" id="view">
    <div class="padding">
      <div class="box">
       
        <div class="box-body">
         <?php echo $__env->make('backend.partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <input id="filter" style="width:calc(100% - 100px); line-height:30px;" placeholder="Tìm kiếm sản phẩm" type="text" class="form-control input-sm inline m-r"/>
          <button class="btn white dropdown-toggle drop-cate" data-toggle="dropdown"></button>
          <div class="dropdown-menu pull-right">
             <a  class="dropdown-item" href="<?php echo e(route('product.list.product')); ?>">Tất cả</a>
            <?php foreach($list_categories as $v0): ?>
              <a  class="dropdown-item" href="<?php echo e(route('cate.products.detail',['id'=>$v0->id])); ?>"><?php echo e($v0->name); ?></a>
              <?php if($v0->subcategory): ?>
                   <?php foreach($v0->subcategory as $v1): ?>
                        <a  class="dropdown-item"  href="<?php echo e(route('cate.products.detail',['id'=>$v1->id])); ?>"><?php echo e($space); ?><?php echo e($v1->name); ?></a>
                        <?php if($v1->subcategory): ?>
                          <?php foreach($v1->subcategory as $v2): ?>
                            <a  class="dropdown-item"  href="<?php echo e(route('cate.products.detail',['id'=>$v2->id])); ?>"><?php echo e($space.$space); ?><?php echo e($v2->name); ?></a>
                                <?php if($v2->subcategory): ?>
                                <?php foreach($v2->subcategory as $v3): ?>
                                  <a  class="dropdown-item" href="<?php echo e(route('cate.products.detail',['id'=>$v3->id])); ?>"><?php echo e($space.$space.$space); ?><?php echo e($v3->name); ?></a>
                                  <?php if($v3->subcategory): ?>
                                     <?php foreach($v3->subcategory as $v4): ?>
                                      <a  class="dropdown-item" href="<?php echo e(route('cate.products.detail',['id'=>$v4->id])); ?>"><?php echo e($space.$space.$space.$space); ?><?php echo e($v4->name); ?></a>
                                     <?php endforeach; ?>
                                 <?php endif; ?>
                                 <?php endforeach; ?>
                             <?php endif; ?>
                             <?php endforeach; ?>
                         <?php endif; ?>
                         <?php endforeach; ?>
                     <?php endif; ?>
              <?php endforeach; ?>
          </div>

          <button class="number-post"><?php echo e(sizeof($list_san_pham)); ?> SP</button>
          <div style="clear:both"></div>
        </div>
        <div class="table-responsive">
        <style type="text/css">
          .edit{
            color:orange;
          }
          .edit i{
            font-size: 15pt !important;
          }
        </style>
         
          <table class="table m-b-none" ui-jp="footable" data-filter="#filter" data-page-size="10">
            <thead>
              <tr>
                  <th data-toggle="true">
                      Tên sản phẩm
                  </th>
                  <th>
                      Ảnh
                  </th>
                  <th style="padding-left:15px;">
                      Frame
                  </th>
                  <th>
                      Trạng thái
                  </th>
                  <th>
                      Nhãn 
                  </th>
                  <th>
                      Điểm/Vote 
                  </th>
                  <th style="padding-left:26px;">
                      Hành động
                  </th>
                  <th>
                      Tạo ngày
                  </th>
                  <th>Cập nhập ngày</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($list_san_pham as $key => $value): ?>
              <tr>
                  <td><?php echo e($value->name); ?></td>
                  <td><img src="<?php echo e($value->img); ?>" style="height:30px"></td>
                  <td class="action-post d-1" style="padding-right:0px;">
                    <i style="color:#738CEC;" class="material-icons md-24 frame-popup " data-id="<?php echo e($value->id); ?>" data-link="<?php echo route('frame.create.frame',['id'=>$value->id]); ?>"></i>
                  </td>
                  <td>

                    <?php if($value->status == 1): ?>
                    <a style="color:#738CEC">Công khai</a>
                    <?php endif; ?>
                    <?php if($value->status == 0): ?>
                    <a  style="">Đang ẩn</a>
                    <?php endif; ?>
                  </td>
                  <td>
                    <?php if($value->label == 1): ?>
                    New
                    <?php endif; ?>
                    <?php if($value->label == 2): ?>
                    Kool
                    <?php endif; ?>
                    <?php if($value->label == 3): ?>
                    Sale
                    <?php endif; ?>
                  </td>
                  <td>
                    <?php echo e($value->rating); ?>/<?php echo e($value->number_rate); ?>

                  </td>
                  <td class="action-post" style="padding-right:0px;">
                    <?php if(session('admin')->can('sua_san_pham')): ?>
                    <a href="<?php echo e(route('product.edit.product',['id'=>$value->id])); ?>">
                    Sửa</a>
                    <?php endif; ?>
                    <?php if(session('admin')->can('xoa_san_pham')): ?>
                    <a href="#" type="submit" id="xoa-sp" data-id="<?php echo e($value->id); ?>">
                    Xóa
                    </a>
                    <?php endif; ?>
                    <?php if($value->status == 1): ?>
                    <a href="<?php echo e(url('san-pham/'.$value->id.'/'.$value->slug)); ?>">Xem</a>
                    <?php endif; ?>
                  </td>
                  <?php $date = new DateTime($value->created_at);?>
                  <td><?php echo e($date->format(' d/m/Y H:i')); ?> bởi 
                  <a href="#" style="color:#738CEC"><?php echo e($value->create_by_u); ?></a></td>
                  <?php $date = new DateTime($value->updated_at);?>
                  <td><?php echo e($date->format(' d/m/Y H:i')); ?> bởi 
                  <a href="#"  style="color:#738CEC"><?php echo e($value->last_edit_by_u); ?></a></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot class="hide-if-no-paging">
              <tr>
                  <td colspan="12" class="text-center">
                      <ul class="pagination"></ul>
                  </td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
</div>
<div id="m-a-a_0" class="modal fade animate" data-backdrop="true">
  <div class="modal-dialog" id="animate">
    <div class="modal-content">
      <form id="config_item" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" style="font-size:10pt;line-height: 25px;padding-left:15px;padding-right:16px;font-family:'Roboto Bold' " id="model-h5">Danh sách Frame <a href="" target="_blank" id="open_new_frame"><i style="float:right; top:0px;color:#738CEC;" class="material-icons md-24 " data-toggle="modal"></i></a></h5>

      </div>
        <div class="modal-body p-lg d-list-frame">
          
              
       </div>
     </form>
    </div><!-- /.modal-content -->
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-footer'); ?>
  <script src="<?php echo e(asset('backend/libs/jquery/screenfull/dist/screenfull.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/libs/jquery/footable/dist/footable.all.min.js')); ?>"></script>
  <script>
  

   jQuery(function($){
  $('.table').footable({
    "paging": {
      "enabled": true,
      "size": 7,
    }
  });
});
   function xacnhanxoa(msg){
      var footable = $('.table').data('footable');
      

      if(window.confirm(msg)){
        return true;
      }
      else
        return false;

     };
     $(document).on('click','#xoa-sp', function(event){
           event.preventDefault();
           if(xacnhanxoa('Bạn có chắc xóa bài viết hiện tại hay không?')===false){

           }
           else{
            id = $(this).attr('data-id');
             $.ajax({
                 type: 'post',
                 url:  '<?php echo e(route('products.del')); ?>',
                 data: {'id': id},
                 dataType:'json',
                 success: function(msg){
                   console.log(msg);
                    if(msg == true){
                      console.log(msg);
                      location.reload();
                    }
                    else{
                      alert('có lỗi xảy ra');
                    }
                 }
             })
           // alert(id);
           }
                     
     });
     $(document).on('click','.frame-popup',function(){
        id = $(this).data('id');
        link = $(this).data('link');
        $("#open_new_frame").attr('href',link);
        // m-a-a_0
        $('#m-a-a_0').modal('show');

        $.ajax({
              headers: {
                  'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
              },
              type:"post",
              url:"<?php echo e(route('ajax.list.frame')); ?>",
              data:{'id':id},
              success:function(data){
                //console.log(data);
                $('.d-list-frame').html(data.html);
                $('.table').footable({
                    "paging": {
                      "enabled": true,
                      "size": 7,
                    }
                  });
              },
              cache:false,
              dataType: 'json'
            });
     });
     $(document).ready(function(){
        // $('a[data-page="first"]').text('Đầu tiên');
        $('a[data-page="first"]').remove();
        $('a[data-page="prev"]').text('Trước');
        $('a[data-page="next"]').text('Tiếp');
        // $('a[data-page="last"]').text('Cuối cùng');
        $('a[data-page="last"]').remove();
     });

     
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>