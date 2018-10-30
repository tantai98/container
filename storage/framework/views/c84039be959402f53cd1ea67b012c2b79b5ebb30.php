<?php $__env->startSection('css'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('backend/libs/jquery/select2-bootstrap-theme/dist/select2-bootstrap.min.css')); ?>" type="text/css" />
   <link rel="stylesheet" href="<?php echo e(asset('backend/libs/jquery/select2/dist/css/select2.min.css')); ?>" type="text/css" />
<?php $__env->stopSection(); ?>

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
     /* a{
        color:#738CEC;
      }*/
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
    /*.box-body{
      padding-bottom: 40px !important;
    }*/
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
    .status:first-letter {
    text-transform: uppercase;
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
        font-size: 8pt;
        padding-top: 6px;
        padding-bottom: 6px;
        
    }
    .add-attr:hover{
        background-color: #92D050 !important;
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
      .del-order{
        color:#777777;
        font-family: Roboto-Bold;
      }
      .del-order:hover{
        color:#404040;
      }
   </style>
 
 <?php   
  if(isset($id)) {
        $list_orders = App\Order::where('status', $id)->orderby('created_at','desc')->limit(500)->get();
      }else{
        $list_orders = App\Order::where('status', 1)->orwhere('status',2)->orwhere('status',3)->orwhere('status',4)->orwhere('status',5)->orderby('created_at','desc')->limit(500)->get();
      }
  
  ?>

<div class="app-header white box-shadow">
<div class="navbar">
    <div style="float:left;" class="title_form">
        
          <p>Tất cả đơn hàng <?php echo e(isset($id) ? check_status_order($id) :''); ?></p>
        
    </div>
</div>
</div>
 

 <div class="app-body" id="view">
    <div class="padding">
      <div class="box">
        
        <div class="box-body">
          <input id="filter" style="width:calc(100% - 100px); line-height:30px;" placeholder="Tìm kiếm đơn hàng" type="text" class="form-control input-sm inline m-r"/>
          <button class="btn white dropdown-toggle drop-cate" data-toggle="dropdown"></button>
          <div class="dropdown-menu pull-right">
                 <a  class="dropdown-item" href="<?php echo e(route('order.list')); ?>">Tất cả</a>
                 <a  class="dropdown-item" href="<?php echo e(route('order.type', ['id'=>1])); ?>">Đang đợi</a>
                 <a  class="dropdown-item" href="<?php echo e(route('order.type', ['id'=>2])); ?>">Bị hủy</a>
                 <a  class="dropdown-item" href="<?php echo e(route('order.type', ['id'=>3])); ?>">Đang giao hàng</a>
                 <a  class="dropdown-item" href="<?php echo e(route('order.type', ['id'=>4])); ?>">Đã thanh toán</a>
                 <a  class="dropdown-item" href="<?php echo e(route('order.type', ['id'=>5])); ?>">Đã nhận hàng</a>
          </div>
          <button class="number-post"><?php echo e($list_orders->count()); ?> ĐH</button>
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
                      Mã ĐH
                  </th>
                  <th data-toggle="true">
                      Tên Khách Hàng
                  </th>
                  <th data-toggle= "true">
                      Số điện thoại
                  </th>
                  
                  <th>
                      Email
                  </th>
                  <th>
                      Thời gian đặt hàng
                  </th>
                  <th>
                    Tổng số tiền
                  </th>
                   <?php if(session('admin')->can('xu_li_don_hang')): ?>
                  <th>
                    Tình trạng
                  </th>
                  <?php endif; ?>
                  <?php if(session('admin')->can('xem_don_hang') || session('admin')->can('them_don_hang')): ?>
                  <th>
                     Chi tiết 
                  </th>
                  <?php endif; ?>
                  <?php if(session('admin')->can('xoa_don_hang')): ?>
                  <th >
                    Xóa
                  </th>
                  <?php endif; ?>
              </tr>
            </thead>
            <tbody>

              <?php foreach($list_orders as $key => $value): ?>
              <tr>
                  <td><?php echo e($value->id); ?></td>
                  <td><?php echo e($value->fullname); ?></td>
                  <td><?php echo e($value->phone); ?></td>
                 
                  <td>
                      <?php echo e($value->email); ?>

                  </td>
                  <td >
                     <?php echo e($value->created_at); ?>

                  </td>
                  <td><?php echo e(number_format($value->total, 0, '', '.')); ?>đ</td>
                  <td class="status change-status" data-id="<?php echo e($value->id); ?>"><?php echo e(check_status_order($value->status)); ?></td>
                  <?php if(session('admin')->can('xem_don_hang') || session('admin')->can('them_don_hang')): ?>
                  <td><a href="<?php echo e(route('order.show',['id'=>$value->id])); ?>" title="Thông tin chi tiết">Chi tiết</a></td>
                  <?php endif; ?>
                  <?php if(session('admin')->can('xoa_don_hang')): ?>
                  <td><a><span data-id="<?php echo $value->id; ?>" class="close-slide del-order" style="font-size:14px;">×</span></a></td>
                  <?php endif; ?>
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


<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-footer'); ?>
  <script src="<?php echo e(asset('backend/libs/jquery/screenfull/dist/screenfull.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/libs/jquery/footable/dist/footable.all.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/libs/jquery/select2/dist/js/select2.min.js')); ?>"></script>
  <script>
  order = null;
   jQuery(function($){
  $('.table').footable({
    "paging": {
      "enabled": true,
      "size": 7,
    }
  });
});
  // $(document).on('keyup','#search',function(e){

  // });
  
 
  
    function xacnhanxoa(msg){
      if(window.confirm(msg)){
        return true;
      }
      else
        return false;

     };
     
     $(document).ready(function(){
        // $('a[data-page="first"]').text('Đầu tiên');
        $('a[data-page="first"]').remove();
        $('a[data-page="prev"]').text('Trước');
        $('a[data-page="next"]').text('Tiếp');
        // $('a[data-page="last"]').text('Cuối cùng');
        $('a[data-page="last"]').remove();
     });
     $(document).on('click','.del-order',function(){
        
        container = this;
        id = $(this).attr('data-id');
        if(xacnhanxoa('Bạn có muốn xóa đơn hàng này không?')===false){

       }
       else{

        $.ajax({
          headers:{
            'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
          },
          type:'post',
          url:"<?php echo route('order.status'); ?>",
          data:{'id':id},
          cache:false,
          dataType:"json",
          success:function(data){
            console.log(data);
            $(container).parent().parent().parent().remove();
          }
        });
      }
     });
     
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>