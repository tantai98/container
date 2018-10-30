@extends('backend.layouts.default')
@section('css')
   <link rel="stylesheet" href="{{ asset('backend/libs/jquery/select2-bootstrap-theme/dist/select2-bootstrap.min.css') }}" type="text/css" />
   <link rel="stylesheet" href="{{ asset('backend/libs/jquery/select2/dist/css/select2.min.css') }}" type="text/css" />
@endsection
@section('content')
<style type="text/css">
   
    @media (min-width: 991px){
    .title_form{
            margin-left: 10px !important;
            margin-top: 16px;

    }
    }
    .title_form{
          margin-top:16px;
          font-size: 14pt;
    }
    /*a{
      color:#738CEC;
    }*/
    .title_form p {
    font-family: 'Roboto Black';
     }
     .m-h-50{
      min-height: 50px;
     }
     .m-t-30{
      min-height: 30px;
     }
    @media print {
       @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
   }
   .customer{
      text-transform: uppercase;
   }
   
   .h-line > div{
    padding-top: 10px;
    border-bottom: 1px solid #E6E6E6;
   }
   .cus-tilte{
    width: 100px;
    display: inline-block;
   }
   .none{
    display: none;
   }
   .img{
        max-width:130px;
        min-width:40px;
        /*background-color:#F0F0F0;*/
        position: relative;
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
      .label {
          padding: 0.35em 0.7em;
      }
      .add-attr{
        background-color: #92D050;
        color: #fff;
        font-size: 8pt;
        padding-top: 6px;
        padding-bottom: 6px;
        min-width: 70px; 
      }
      .add-attr:hover{
          background-color: #92D050 !important;
      }

      .modal-title{
        font-size: 10.5pt;
      }
      .add-attr{
        font-size: 10pt;

      }
      .modal-content{
        border-radius: 0px;
      }
      .label{
        font-size: 9pt;
        font-family: Roboto;
      }
      .change-status{
        cursor: pointer;
      }
      p{
        margin-bottom: 10px;
      }
   </style>
 
 
<div class="app-header white box-shadow">
<div class="navbar">
    <div style="float:left;" class="title_form">
        
          <p>Chi tiết đơn hàng</p>
        
    </div>
</div>
</div>
 
<div class="app-body" id="view">
  <div class="padding">
      <div class="box">  
        <div class="box-body">
          <div class="clearfix">
              <div class="pull-left">
              <?php $system = App\System::select('img_logo')->first() ?>
                  <h4 class="text-right"><img class="img" src="@if($system->img_logo) {{ asset('').$system->img_logo }} @else https://placehold.it/130x40 @endif" alt="Logo Công ty"></h4>
                  
              </div>
              <div class="pull-right">
                  <h4>Hóa đơn <strong>#HD-{{$order->id}}</strong>
                  </h4>
              </div>
          </div>
          <br>
          <div class="row">
              <div class="col-md-12 h-line">
                  <div>
                    <div class="pull-left m-t-30">
                        <p><strong class="cus-tilte">Khách hàng </strong><strong class="customer">{{$order->fullname}}</strong></p>
                       
                    </div>
                    
                     <div class="clearfix"></div>
                  </div>
              </div>
              <div class="col-md-12 h-line">
                  <div>
                    <div class="pull-left m-t-30">
                        <p><strong  class="cus-tilte">Mã đơn hàng</strong>#{{$order->id}}</p>
                       
                    </div>
                    <div class="clearfix"></div>
                  </div>
              </div>

              <div class="col-md-12 h-line">
                  <div>
                    <div class="pull-left m-t-30">
                        <p><strong class="cus-tilte">Số điện thoại</strong>{{$order->phone}}</p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
              </div>

               <div class="col-md-12 h-line">
                  <div>
                    <div class="pull-left m-t-30">
                        <p><strong  class="cus-tilte">Địa chỉ</strong>{{$order->address}}</p>
                       
                    </div>
                    <div class="clearfix"></div>
                  </div>
              </div>
              <div class="col-md-12 h-line">
                  <div>
                    <div class="pull-left m-t-30">
                        <p><strong  class="cus-tilte">Ghi chú</strong>{{$order->note}}</p>
                       
                    </div>
                    <div class="clearfix"></div>
                  </div>
              </div>

              <div class="col-md-12 h-line">
                  <div>
                    <div class="pull-left m-t-30">
                        <p><strong  class="cus-tilte">Email</strong>{{$order->email}}</p>
                       
                    </div>
                    <div class="clearfix"></div>
                  </div>
              </div>
                
              
             
              <div class="col-md-12 h-line">
                  <div>
                    <div class="pull-left m-t-30">
                        <p><strong  class="cus-tilte">Ngày đặt hàng</strong>{{$order->created_at}}</p>
                       
                    </div>
                    <div class="clearfix"></div>
                  </div>
              </div>
             

               <div class="col-md-12 h-line">
                  <div>
                    <div class="pull-left m-t-30">
                        <p> <strong class="cus-tilte">Trạng thái: </strong>
                        @if($order->status == 1)
                        <span class="label stick-show change-status" data-id="{{$order->id}}" style="background-color:#777777">Đang chờ</span></p>
                        @endif
                        @if($order->status == 2)
                        <span class="label stick-show change-status" data-id="{{$order->id}}"  style="background-color:#D9534F">Bị hủy</span></p>
                        @endif
                        @if($order->status == 3)
                        <span class="label stick-show change-status" data-id="{{$order->id}}"  style="background-color:#F0AD4E">Đang giao hàng</span></p>
                        @endif
                        @if($order->status == 4)
                        <span class="label stick-show change-status" data-id="{{$order->id}}"  style="background-color:#5CB85C">Đã thanh toán</span></p>
                        @endif
                        @if($order->status == 5)
                        <span class="label stick-show change-status" data-id="{{$order->id}}"  style="background-color:#337AB7">Đã nhận hàng</span></p>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                  </div>
              </div>
          </div>
          <div class="m-h-50"></div>
          <div class="row">
              <div class="col-md-12">
                  <div class="table-responsive">
                      <table class="table m-t-30">
                          <thead>
                              <tr><th>#</th>
                              <th>Sản phẩm</th>
                              <th>Số lượng</th>
                              <th>Giá niêm yết</th>
                              <th>Giá bán</th>
                              <th style="width:100px">Thành tiền</th>
                          </tr></thead>
                          <tbody>
                              @foreach ($order->getItem as $key => $item)
                                <tr> 
                                  <td>{{$key+1}}</td>
                                  <td>{{$item->getproduct->name}}</td>
                                  <td>{{$item->quantity}}</td>
                                  <td>{{number_format($item->price, 0, '', '.')}}đ</td>
                                  <td>{{number_format($item->price_sale, 0, '', '.')}}đ</td>

                                  <?php if($item->price_sale) $x = $item->price_sale;
                                       else $x = $item->price; 
                                    ?>
                                  <td>{{ number_format($item->quantity * $x, 0, '', '.')}} đ</td>
                              </tr>
                              @endforeach
                              <tr style="background-color: rgba(0, 0, 0, 0) !important;"> 
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    
                                    <td colspan="2">
                                      <div class="col-md-12" style="padding:0px;">
                                          <h5 class="text-right">Tổng: {{number_format($order->total, 0, '', '.')}}đ</h5>
                                      </div>
                                    </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                </div>
            </div>
            
            <div class="hidden-print" style="    background-color: #fff;  min-height: 30px;">
                <div class="pull-right">
                    <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                    
                </div>
            </div>
        </div>   
      </div>  
    </div>
</div>


<div id="m-a-tab" class="modal fade animate" data-backdrop="true">
  <div class="modal-dialog" id="animate">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Thay đổi trạng thái đơn hàng</h5>
      </div>
      <div class="modal-body p-lg" id="info-order">
        
     </div>
    </div><!-- /.modal-content -->
  </div>
</div>

@endsection
@section('js-footer')
  <script src="{{ asset('backend/libs/jquery/screenfull/dist/screenfull.min.js') }}"></script>
  <script src="{{ asset('backend/libs/jquery/footable/dist/footable.all.min.js') }}"></script>
  <script src="{{ asset('backend/libs/jquery/select2/dist/js/select2.min.js') }}"></script>
  <script>
     jQuery(function($){
    $('.table').footable({
      "paging": {
        "enabled": true,
        "size": 7,
      }
    });
  });
   
    @if(session('admin')->can('xu_li_don_hang'))

     $(document).on('click','.change-status',function(){
      order = this;
        $('#info-order').html('');
        id =$(this).attr('data-id');
        $.ajax({
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            type:"post",
            url:"{{route('order.get.info')}}",
            data:{'id':id},
            success:function(data){
              console.log(data);
              $('#info-order').html(data.innertext);
              $('#single').select2();
              $('#m-a-tab').modal('show');
            },
            cache:false,
            dataType:'json'
        });
     });
      $(document).on('submit','#form-edit-order',function(e){
        e.preventDefault();
        form = $("#form-edit-order")[0];
        var formData = new FormData(form);
        $.ajax({
          headers: {
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              },
          type:"post",
          url:"{{route('order.ajax.submit')}}",
          data: formData,
          contentType: false,
          processData: false,
          success:function(data){
              console.log(data);
              order = $('.change-status');
              if(data.status == true){
                if(data.order.status == 1){
                  $(order).text('Đang chờ');
                  $(order).css('background-color','#777777');
                }
                if(data.order.status == 2){
                  $(order).text('Bị hủy');
                  $(order).css('background-color','#D9534F');
                }
                if(data.order.status == 3){
                  $(order).text('Đang giao hàng');
                  $(order).css('background-color','#F0AD4E');
                }
                if(data.order.status == 4){
                  $(order).text('Đã thanh toán');
                  $(order).css('background-color','#5CB85C');
                }
                if(data.order.status == 5){
                  $(order).text('Đã nhận hàng');
                  $(order).css('background-color','#337AB7');
                }
              }
              $('#info-order').html('');
              $('#m-a-tab').modal('hide');
          },
          dataType:"json"
        });

     });

     @endif
  </script>
@endsection