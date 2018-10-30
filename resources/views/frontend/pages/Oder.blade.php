 @extends('frontend.layout')
        @section('title','Oder')
        @section('css')
            <link rel="stylesheet" href="{{ asset('frontend/html/css/oder.css') }}">
        @endsection
        @section('content')
        @include('frontend.partials.link')
<div class="content">
    <div class="container">
        <div class="row">
            <div>
                <div class="col-md-8 tan-title">
                    <p>Thông tin Đơn hàng</p>
                    <div>
                        <form id="form_order">
                        <input type="hidden" name="_token" name="{!! csrf_token() !!}">
                            <div class="tan-form">
                                <div>
                                    <input class ="t-form" type="text" name="FirstName" placeholder="Họ tên" >
                                </div>
                                <div>
                                    <input type="text" name="phone" value="" placeholder="Số điện thoại liên hệ" >
                                </div>
                                <div>
                                    <input type="text" name="email" value="" placeholder="Email" >
                                </div>
                                <div>
                                    <textarea name="note" placeholder="Ghi chú thêm..." style="padding-bottom: 0px; padding-top: 6px;"></textarea>
                                </div>
                                <div>
                                    <input style="padding-top: 5px;" type="text" name="address" value="" placeholder="Địa chỉ nhận hàng" >
                                </div>
                            </div>
                            <div>
                                <div class="radio tan-submit">
                                    <label class="tan-label"><input type="radio" class="t-radio" name="optradio" />Tôi đồng ý với điều khoản mua hàng</label>
                                </div>
                                <div class="tan-submit-font">
                                    <input type="submit"  value="Xác nhận"  >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php $list_pro = Session::get('product');
                    $total = 0;
                ?>
                <div class="col-md-4">
                    <div class="tan-dathang">
                        <div class="tan-donhang">Đơn hàng</div>
                        <div class="tan-conten">
                            @if($list_pro)
                                @foreach($list_pro as $item)
                                    <div class="tan-conten-cantop">
                                        <div class="tan-conten-img">
                                            <img width="76px" height="auto" src="{{ asset($item['product']->img) }}" alt="">
                                        </div>
                                        <div class="tan-conten-sanpham">
                                            <p>{!! $item['product']->name !!}</p>
                                             <?php
                                                $price = $item['product']->price;
                                                if($item['product']->price_sale) 
                                                {
                                                    $price = $item['product']->price_sale;
                                                }
                                                $price = $price ;
                                                $total +=  $price * $item['num'];
                                            ?>
                                            <b>  x 
                                                <span> 0{{$item['num']}}</span> </span></b>
                                        </div>
                                        <div style="clear :both"></div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="tan-phivanchuyen">
                            <table> 
                                <tr>
                                    <td>Tổng Tiền</td>
                                    <td>{{number_format( (int)$total,0,'','.')}}đ</td>
                                </tr>
                                <tr>
                                    <td>Phí vận chuyển</td>
                                    <td>12.000đ</td>
                                </tr>
                                <tr>
                                    <td>Tổng Đơn Hàng</td>
                                    <td>15.000đ</td>
                                </tr>
                            </table>
                        </div>
                        <!--Popup thông báo thanh toán-->
        <div id="modal-popup55" class="zoom-anim-dialog mfp-hide center-col bg-white modal-popup-main t-popup t-popup2">
            <div style="padding:0px !important">
            </div>
            <div class="t-popup-padding-rp">
                <div class="row" style="margin:0px !important">
                    <div class="center-col">
                               
                    </div>
                </div>
            </div>
        </div>
        <!--Hết popup thông báo thanh toán-->

                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div><!--end container-->
     
</div><!--end content-->

        @endsection
        @section('js')
	        <script>
	            $('.t-radio').on('click',function(){
	                $(this).parent().toggleClass('dfdf');
	            });
                spam = 0;
                $(document).on('submit','#form_order',function(e){
                    e.preventDefault();
                        if(spam = 0){
                            formData = new FormData($('#form_order')[0]);
                            $.ajax({
                                headers: {
                                              'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                        },
                                type:"post",
                                url:"{{route('ajax.form.order')}}",
                                data: formData,
                                contentType: false,
                                processData: false,
                                dataType:"json",
                                success:function(data){
                                    console.log(data);
                                    // $('.center-col').html(data.view);
                                    // spam =0;
                                   // if(data == true){
                                   //      $("#form_order")[0].reset();
                                   //       $.magnificPopup.open({
                                   //      items: {
                                   //          src: '#modal-popup55' 
                                   //      },
                                   //      type: 'inline',
                                   //      blackbg: true,
                                   //      zoom: {
                                   //              enabled: true,
                                   //              duration: 300 
                                   //            },
                                   //      mainClass: 'my-mfp-zoom-in',
                                   //      callbacks: {
                                   //        beforeOpen: function() {
                                   //        }
                                   //      }
                                   //  });
                                   // }else{

                                   // }
                                },

                            });    
                        }
                        spam = 1;
                });
	        </script>
	    @endsection