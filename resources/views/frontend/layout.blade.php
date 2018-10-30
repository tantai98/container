<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>@yield('title')</title>
        <meta name="description" content="H-Code - A premium portfolio template from ThemeZaa">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        @include('frontend.partials.css_js_top')

    </head>
    <body>
       <!-- navigation panel -->
        @include('frontend.partials.main-menu')
        <!--end navigation panel -->

        <!-- head section -->
        @include('frontend.partials.img-big')
        <!-- end head section -->
        
        <!-- MAIN CONTENT -->
        @yield('content')
        <!-- FOOTER -->
        @include('frontend.partials.footer')
        <!-- END OF FOOTER -->
        @include('frontend.partials.popup')
        <!-- javascript libraries / javascript files set #1 --> 
        @include('frontend.partials.js-bottom')
        @yield('js')
         <script>
            $("#t-timsp").on("input", function(){
                var a = $("#t-timsp").val();
                if(a==""){
                    $(".t-box-tim-kiem").css({"opacity":'0','visibility':'hidden'});
                }
                else{
                    $(".t-box-tim-kiem").css({"opacity":'01','visibility':'visible'});
                }
            });
            $(document).click(function (e)
             {
                 // Đối tượng container chứa popup
                 var container = $(".t-box-tim-kiem");
              
                 // Nếu click bên ngoài đối tượng container thì ẩn nó đi
                 if (!container.is(e.target) && container.has(e.target).length === 0)
                 {
                     container.css({"opacity":'0','visibility':'hidden'});
                 }
             });
        </script>
        <script>
                spam = 0;                
                    $(document).on('submit','#d-form-uudai',function(e){
                       container = $(this);
                        e.preventDefault();       
                        if(spam == 0){
                           spam++; 
                            v = $('.d-uudai-email').val();
                            formData = new FormData($("#d-form-uudai")[0]);  
                         $.ajax({
                        headers: {
                                      'X-CSRF-TOKEN':'{{ csrf_token() }}'
                                },
                        type:"post",
                        url:"{{route('email.uudai')}}",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success:function(data){
                            spam = 0
                            console.log(data);
                            if(data == false){

                            }else{
                                spam = 0
                                   $.magnificPopup.open({
                                        items: {
                                            src: '#modal-popup-guithanhcong' 
                                        },
                                        type: 'inline',
                                        blackbg: true,
                                        zoom: {
                                                enabled: true,
                                                duration: 300 
                                              },
                                        mainClass: 'my-mfp-zoom-in',
                                        callbacks: {
                                          beforeOpen: function() {
                                           
                                          }
                                        }
                                    });
                            }
                        }
                    });
                        }
                        spam = 1;

                    });  

                 // tim kiếm sản phẩm
                 
                 $(document).on('keyup','#d-timsp',function(e){
                    value = $(this).val();
                     if($.trim(value)){
                            $.ajax({
                              headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                              },
                              type:"post",
                              url:"{{route('product.search')}}",
                              data:{'key':value},
                              success:function(data){
                                console.log(data);
                                  $(".t-box-tim-kiem").css({"opacity":'01','visibility':'visible'});
                                  $('.t-box-tim-kiem').html(data.html_search);
                                  $('#d-timsp').keypress(function(event){
                                  var keycode = (event.keyCode ? event.keyCode : event.which);
                                  if (keycode == '13') {
                                    // alert('Bạn vừa nhấn phím "enter" trong thẻ input');
                                    $('#tuan').html(data.view);
                                  }
                                });
                              },
                              cache:false,
                              dataType:'json'
                            });
                        }else{
                           $(".t-box-tim-kiem").css({"opacity":'0','visibility':'hidden'});
                        }
                 }); 



                 $(document).on('click','.d-add-cart',function(e){
                    e.preventDefault();
                    id = $(this).attr('data-id');
                    num = $(this).parent().parent().find('.pro-select').find(':selected').val();
                   // console.log(num);
                       $.ajax({
                    headers: {
                          'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    type:"post",
                    url:"{{route('ajax.add.card')}}",
                    data:{'id':id,'num':num},
                    success:function(data){
                         //console.log(data);
                        if(data.status === true){
                            amount = data.total;
                            list_item  = data.session;
                             product  = data.product;
                             id = product.id;
                             $('#name_product_add').text(product.name);
                             $('.t-i-cart').text(list_item.length);
                             $('.amount').text(amount);
                             str = data.html;
                             $('.cart-list li').remove();
                             $('.cart-list').append(str);
                             size = $('.cart-list li').length;
                             $('.top-cart').attr('data-size',size);
                            // console.log(id);

                             $.magnificPopup.open({
                                items: {
                                    src: '#modal-popup-cart' 
                                },
                                type: 'inline',
                                blackbg: true,
                                zoom: {
                                        enabled: true,
                                        duration: 300 
                                      },
                                mainClass: 'my-mfp-zoom-in',
                                callbacks: {
                                  beforeOpen: function() {
                                   
                                  }
                                }
                            });
                             setTimeout(function(){
                                $('#modal-popup-cart').magnificPopup('close');
                            },1500);
                        }
                    },
                    cache:false,
                    dataType: 'json'
                  });
                 }); 

                 $(document).on('click','.remove',function(e){
                    e.preventDefault();
                    container = $(this);
                    id = $(this).attr('data-id');
                    show_cart = '<div class="col-md-12  d-item2" style="display:block">'+
                      '<span style="font-size:11pt;font-family:Roboto Bold; margin-left:324px;">Không có sản phẩm nào trong giỏ hàng của bạn</span>'+
                      '<div style="background-color:#7b1fa2; line-height: 40px; margin-left:382px; border-radius: 4px;margin-top: 12px; width:200px;height:40px;text-align:center;">'+
                        '<a style="color: #fff;font-size: 10pt;font-family:Roboto Bold;text-transform: uppercase; " href="{!! route('view.category') !!}">Tiếp Tục mua hàng</a>'+
                      '</div>'+
                    '</div>';
                    $.ajax({
                    headers: {
                          'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    type:"post",
                    url:"{{route('ajax.remove.cart')}}",
                    data:{'id':id},
                    success:function(data){
                        //console.log(data);
                        $(container).parent().remove();
                        $('.amount').html(data);
                        num = $('.l_cart2').text() - 1;
                        so = $('#d-hover').data('size');
                        $('.class_'+id).remove();
                        $('#total').text((data + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"đ").attr('value',data);
                        transpost = $('.d-district-list').val();
                        if(transpost == null){
                           $('#all-total').text((data + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"đ");
                          }else{
                            if(data == 0){
                              $('.show_cart').html(show_cart);
                            }
                            data1 = parseInt(data) + parseInt(transpost);
                            $('#all-total').text((data1 + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"đ")
                          }
                        // console.log("zkxjc" + $('.l_cart2').text());
                        $('.l_cart2').text(num);
                        $('.top-cart').attr('data-size',num);
                    },
                    cache:false,
                    dataType: 'html'
                  });
                 });  

                 $(document).on('click','.d-list-xem',function(e){
                  e.preventDefault();
                    id = $(this).data('id');
                    link = $(this).attr('href');
                    $.ajax({
                      headers: {
                          'X-CSRF-TOKEN': '{{ csrf_token() }}'
                      },
                      type:"post",
                      url:"{{route('ajax.list.xem')}}",
                      data:{'id':id},
                      success:function(data){
                        console.log(data);
                        if(data.status == true){
                          $('#d-list-xem').html(data.view);
                          window.location = link;
                        }else{
                          $('#d-list-xem').html('');
                        }
                      },
                      cache:false,
                      dataType: 'json'
                    });
                 });
                 
              $('#d-hover').hover(
              function(){
                 $('.cart-content').css({"opacity":"01",'visibility':'visible'});
                 so = $(this).data('size');
                 if(so == 0){
                     $('.cart-content').css({"opacity":"0",'visibility':'hidden'});
                 }
              },
              function(){
                 $('.cart-content').css({"opacity":"0",'visibility':'hidden'});
              });  
            </script>

    </body>
</html>
