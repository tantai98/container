@extends('backend.layouts.default')
@section('css')
<link rel="stylesheet" href="{{ asset('backend/libs/jquery/select2-bootstrap-theme/dist/select2-bootstrap.min.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('backend/libs/jquery/nestable/jquery.nestable.css') }}" type="text/css" />
       <link rel="stylesheet" href="{{ asset('backend/assets/styles/backend.css') }}" type="text/css" />
      <style type="text/css">
       @media (min-width: 991px){
        .title_form{
            margin-left: 10px !important;
            margin-top: 16px;
        }
       
      }
       .dd{
          max-width: none !important;
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
      </style>
@endsection
@section('content')
<div class="app-header white box-shadow">
<div class="navbar">
    
    <div style="float:left;" class="title_form">
      <p>Danh sách phí vận chuyển</p>
    </div>
</div>
 </div>
<div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
    <div class="padding">
       <div class="row  masonry-container" >
          
          <style type="text/css">
            .menu_edit{
              display:inline-block; 
              float:right;
              margin-right: 10px;
              /*color: blue;*/
            }
            .menu_edit i{
              font-size: 13pt !important;
            }
            .menu_name{
              display:inline-block
            }
            .dd-content:hover .change_pos{
              visibility: visible;
            }
            .change_pos{
                width: 30px;
                position: absolute;
                right: -18px;
                top: 0px;
                visibility: hidden;
            }
            .change_pos > div{
              line-height: 10px;
            }
            .change_pos i{
              font-size: 24px !important;
            }
            .change_pos .material-icons{
              line-height: 0;
              height: 10px;
            }
            .up{
              padding-top:10px;
              cursor: pointer;
            }
            .down{
              cursor: pointer;
               padding-bottom:10px;
            }
            .up_1{
              padding-top:10px;
              cursor: pointer;
            }
            .down_1{
              cursor: pointer;
               padding-bottom:10px;
            }
            .d-style{
              width: 520px !important;
            }
            .d-style2{
              width: 360px !important;
              height: 190px !important;
            }
            .d-block9{
              display:block;
            }
            .noselect {
              -webkit-touch-callout: none; /* iOS Safari */
              -webkit-user-select: none;   /* Chrome/Safari/Opera */
              -khtml-user-select: none;    /* Konqueror */
              -moz-user-select: none;      /* Firefox */
              -ms-user-select: none;       /* Internet Explorer/Edge */
              user-select: none;           /* Non-prefixed version, currently
                                              not supported by any browser */
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
      width: auto;
      background-color: #fff;
      border: 1px solid #E7E7E7;
      padding-top: 2px;
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
    .d-selet{
      border:none;color:#a6a6a6;cursor:pointer;
      font-size: 8pt
    }
    .d-selet:hover{
         background-color: #E7E7E7;
             border-radius: 3px;
    }
    .dd-1{
      display: none;
    }
          </style>
            <?php
                      $list_transpost = App\Province::orderby('type', 'asc')->orderby('name', 'asc')->get();
            ?>
            @foreach($list_transpost as $v0)
            <div class="col-sm-6 item" style="margin-bottom:20px">
          
            <div  class="dd">
              <ol class="dd-list dd-list-handle root_ol">
              
                   <li class="dd-item" data-id="{{$v0->id}}">
                    <div class="dd-content box">
                      <!-- <div class="dd-handle">
                        <i class="fa fa-reorder text-muted"></i>
                      </div> -->
                      <div>
                          <a id="d-block"  data-id="{!! $v0->id !!}" style="margin-right:8px;font-size:10pt;font-weight:Roboto Bold;cursor:pointer;">+</a><div class="menu_name">{{$v0->name}}</div>
                          <div class="menu_edit d-abcdf_{!! $v0->id !!}">
                            
                              <div id="d-province-ajax_{!! $v0->id !!}" class="d-price d-abcd_{!! $v0->id !!} @if($v0->status == 0) dd-1 @endif" style="float:left;padding-right:10px; ">{!! number_format((int)$v0->price,0,'','.') !!}đ
                              </div>
                           
                            <div style="float:right";>
                            <select class="d-selet" id="single" data-id="{!! $v0->id !!}" name="label" tabindex="-5" aria-hidden="true">
                              <option @if($v0->status == 0) selected @endif value="0">Giá riêng</option>
                              <option @if($v0->status == 1) selected @endif value="1">Giá chung</option>
                            </select>
                            </div>
                            
                              <a id="d-dat-gia-province" class="d-abc_{!! $v0->id !!} @if($v0->status == 0) dd-1 @endif" data-id="{!! $v0->id !!}" href="">
                                Đặt Giá
                              </a>
                            
                          </div>  
                      </div>
                    </div>    
                </li>
              </ol>
              <!-- //quận huyên -->
              <?php $lis_district = App\District::where('provinceid',$v0->id)->orderBy('type','asc')->orderBy('name','asc')->get(); ?>
              <div id="d-config_{!! $v0->id !!}">
              @if($v0->status == 0)
               @foreach($lis_district as $v1)
                  <ol class="dd-list dd-list-handle child_ol province_{!! $v0->id !!} " style="display:none;margin-left:40px;" >
                    <li class="dd-item" data-id="">
                      <div class="dd-content box">
                        <div>
                            <div class="menu_name">{!! $v1->name !!}</div>
                            <div class="menu_edit">
                            <div id="d-district-ajax_{!! $v1->id !!}" style="float:left;padding-right:100px;">{!! number_format((int)$v1->price,0,'','.') !!}đ</div>
                              <a id="d-dat-gia-district" data-id="{!! $v1->id !!}" href="">
                                Đặt Giá
                              </a>
                            </div>
                        </div>
                      </div>
                    </li>
                  </ol>
               @endforeach
               @else
                 @foreach($lis_district as $v1)
                    <ol class="dd-list dd-list-handle child_ol province_{!! $v0->id !!}" style="display:none;margin-left:40px;" >
                      <li class="dd-item">
                        <div class="dd-content box">
                          <div>
                              <div class="menu_name">{!! $v1->name !!}</div>
                              <div class="menu_edit">
                              <div id="d-district-ajax_{!! $v1->id !!}" class="price_{!! $v0->id !!}" style="float:left;padding-right:100px;">{!! number_format((int)$v0->price,0,'','.') !!}đ</div>
                              </div>
                          </div>
                        </div>
                      </li>
                    </ol>
                 @endforeach
               
               @endif
              </div>
            </div>
          </div>
          
          @endforeach
            
        </div>
    </div>
</div>
<div id="m-a-tab" class="modal fade animate" data-backdrop="true">
  <div class="modal-dialog d-style" id="animate">
    <div class="modal-content">
      <div id="province">
        
      </div>
    </div><!-- /.modal-content -->
  </div>  
</div>
<div id="m-a-tab2" class="modal fade animate" data-backdrop="true">
  <div class="modal-dialog d-style" id="animate2">
     <div class="modal-content">
      <div id="district">
          
      </div>
    </div><!-- /.modal-content --> 
   </div>
</div>
<div id="m-a-tab3" class="modal fade animate" data-backdrop="true">
  <div class="modal-dialog d-style2" id="animate2">
    <div class="modal-content">
      <div>
          <div class="modal-header" style="padding:0px !important; height:62px!important;">
        <h5 class="modal-title"><img src="http://placehold.it/358x62" alt="" style="border-radius:4px;"></h5>
      </div>
      <div class="modal-body p-lg">
            <div><p style="font-size:10pt;margin-top:15px;text-align:center;text-transform: uppercase;  font-family: 'Roboto Regular';color:#000;font-weight:600;">đặt phí thành công</p></div>
      </div>
        
        <div style="clear:both"></div>
     </div>
    </div>
  </div><!-- /.modal-content --> 
</div>
</div>
@endsection
@section('js-footer')
  <script src="{{ asset('backend/libs/jquery/nestable/jquery.nestable.js') }}"></script>

   <script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
   <script src="{{ asset('backend/libs/jquery/select2/dist/js/select2.min.js') }}"></script>
   <script src="http://biostall.com/wp-content/uploads/2010/07/jquery-swapsies.js"></script>
  <script>
    
    $(document).on('change','#single',function(){
      name = $('#d-dat-gia-province').text();
      value = $(this).val();
      id = $(this).data('id');
       if(value == 0){
          $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            type:"post",
            url:"{{route('ajax.giarieng')}}",
            data:{'id':id,'value':value},
            success:function(data){
              // console.log(data);
              $('#d-config_'+id).html(data.html);
              $('.d-abcd_'+id).remove();
              $('.d-abc_'+id).remove();
              load_masonry();
            },
            cache:false,
            dataType: 'json'
          });
       }else{
         $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            type:"post",
            url:"{{route('ajax.giachung')}}",
            data:{'id':id,'value':value},
            success:function(data){
              price = (data.price + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")+"đ";
              content = '<div id="d-province-ajax_'+id+'" class="d-price d-abcd_'+id+'" style="float:left;padding-right:10px;">'+
                price+
              '</div>';
              html = '<a id="d-dat-gia-province" class="d-abc_'+id+'" data-id="'+id+'" href="">'+
                name+
                '</a>';
              // console.log(data);
              $('#d-config_'+id).html(data.html);
              if(data.id == id){
                
                $('.d-abcdf_'+id).append(html);
                $('.d-abcdf_'+id).prepend(content);
              }
              // $('.d-abc_'+id).removeClass('.dd-1');
              load_masonry();
            },
            cache:false,
            dataType: 'json'
          });
       }
     
    });  

  // -----------------
    $(document).on('mouseenter','.m-money',function(){
        value = $(this).find('input').val();
        if(!value){
        $(this).find('.m-tooltip').text("Chưa nhập giá");
        }else{
          value = (value + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
          
          $(this).find('.m-tooltip').text(value+"đ");
        }
      });
      $(document).on('keyup','.m-money input',function(){
        value = $(this).val();
        if(!value){
        $(this).next().text("Chưa nhập giá");

        }else{
          value = parseInt(value);
        value = (value + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
          $(this).next().text(value+"đ");
        }
      });
  
  // $('.d-monny').hover(function() {
   
  //    $('.d-tooltip').css('display','block');
  // }, function() {
    
  //   $('.d-tooltip').css('display','none');
  // });
  
    $(document).on('click','#d-block',function(){
      id = $(this).data('id');
      container = $(this);
      $(".province_"+id).addClass("adksj");
      if( $(".province_"+id).css("display") == "none"){
          $(".province_"+id).css("display","block");
          $(container).text("-");
      }else{
          $(".province_"+id).css("display","none");
          $(container).text("+");
      }
      load_masonry();
    });

  //province
    $(document).on('click','#d-dat-gia-province',function(e){
      e.preventDefault();
      id = $(this).data('id');
      $('#m-a-tab').modal('show');
        $.ajax({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        type:"post",
        url:"{{route('ajax.datgia')}}",
        data:{'id':id},
        success:function(data){
          $('#province').html(data.view);
        },
        cache:false,
        dataType: 'json'
      });
    });
    // district
    $(document).on('click','#d-dat-gia-district',function(e){
      e.preventDefault();
      id = $(this).data('id');
      $('#m-a-tab2').modal('show');
        $.ajax({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        type:"post",
        url:"{{route('ajax.datgia.district')}}",
        data:{'id':id},
        success:function(data){
          $('#district').html(data.view);
        },
        cache:false,
        dataType: 'json'
      });
    });

    $(document).on('click','#add_price_province',function(e){
      e.preventDefault();
      id = $(this).data('id');
      price = $('#d-price-province').val();
        $.ajax({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        type:"post",
        url:"{{route('ajax.price.province')}}",
        data:{'id':id,'price':price},
        success:function(data){
          if(data.status == true){
            $('#d-province-ajax_'+id).text((data.price+ "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"đ");
            $('.price_'+id).text((data.price+ "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"đ");
            $('#m-a-tab').modal('hide');
            $('#m-a-tab3').modal('show');
          }
        },
        cache:false,
        dataType: 'json'
      });
    });
     $(document).on('click','#add_price_district',function(e){
      e.preventDefault();
      id = $(this).data('id');
      price = $('#d-price-district').val();
        $.ajax({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        type:"post",
        url:"{{route('ajax.price.district')}}",
        data:{'id':id,'price':price},
        success:function(data){
          if(data.status == true){
            $('#d-district-ajax_'+id).text((data.price+ "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"đ");

          }
        },
        cache:false,
        dataType: 'json'
      });
    });
   // $('#single').select2();
    // $(document).on('click','.up',function(e){
    //   dd=$(this).parent().parent().parent().parent();
    //   if($(dd).prev().hasClass('dd-item')){
    //     prev = $(dd).prev();
    //     var strDiv1Cont = $(dd).html();
    //     var data_id1 = $(dd).attr('data-id');
        
    //     var strDiv2Cont = $(prev).html();
    //     var data_id2 = $(prev).attr('data-id');

    //     $(dd).html(strDiv2Cont);
    //     $(dd).attr('data-id',data_id2);
    //     $(prev).html(strDiv1Cont);
    //     $(prev).attr('data-id',data_id1);
    //   }
    //   var arr=[];
    //   list = $(dd).parent().children();
    //   $.each(list,function(i,v){
    //     arr.push($(v).attr('data-id'));
    //   });
    //   console.log(arr);
    //   $.ajax({
    //            type: 'post',
    //            url:  "{{ route('menu.orderby') }}",
    //            data: {'arr': arr},
    //            dataType:'json',
    //            success: function(msg){
    //               console.log(msg);
    //            }
    //   });
    // });
    // $(document).on('click','.down',function(e){
    //   dd=$(this).parent().parent().parent().parent();
    //   if($(dd).next().hasClass('dd-item')){
    //     next = $(dd).next();
    //     var strDiv1Cont = $(dd).html();
    //     var data_id1 = $(dd).attr('data-id');
    //     var strDiv2Cont = $(next).html();
    //     var data_id2 = $(next).attr('data-id');
    //     $(dd).html(strDiv2Cont);
    //     $(dd).attr('data-id',data_id2);
    //     $(next).html(strDiv1Cont);
    //     $(next).attr('data-id',data_id1);
    //   }
    //   var arr=[];
    //   list = $(dd).parent().children();
    //   $.each(list,function(i,v){
    //     arr.push($(v).attr('data-id'));
    //   });
    //   console.log(arr);
    //    $.ajax({
    //            type: 'post',
    //            url:  "{{ route('menu.orderby') }}",
    //            data: {'arr': arr,'action':'children'},
    //            dataType:'json',
    //            success: function(msg){
    //               console.log(msg);
    //            }
    //   });
    // });
     // $(document).on('click','.up_1',function(e){
     //    con_1 = $(this).parent().parent().parent().parent().parent().parent().parent();
     //    dd = $(this).parent().parent().parent().parent();
     //    if($(con_1).prev().hasClass('item')){
     //        change = $(con_1).prev(); 
     //        var strDiv1Cont = $(con_1).html();
     //        // var data_id1 = $(dd).attr('data-id');
     //        var strDiv2Cont = $(change).html();
     //        // var data_id2 = $(next).attr('data-id');
     //        $(con_1).html(strDiv2Cont);
     //        // $(dd).attr('data-id',data_id2);
     //        $(change).html(strDiv1Cont);
     //        // $(next).attr('data-id',data_id1);
     //        load_masonry();
     //    }
     // });
     // $(document).on('click','.down_1',function(e){
     //  console.log('đ');
     //    con_1 = $(this).parent().parent().parent().parent().parent().parent().parent();
     //     if($(con_1).next().hasClass('item')){
     //        console.log('d');
     //        change = $(con_1).next(); 
     //        var strDiv1Cont = $(con_1).html();
     //        // var data_id1 = $(dd).attr('data-id');
     //        var strDiv2Cont = $(change).html();
     //        // var data_id2 = $(next).attr('data-id');
     //        $(con_1).html(strDiv2Cont);
     //        // $(dd).attr('data-id',data_id2);
     //        $(change).html(strDiv1Cont);
     //        // $(next).attr('data-id',data_id1);
     //        load_masonry();
     //     }
     // });
     
    $('.dd').nestable({ /* config options */ });

    $('.dd').on('change', function() {
        //console.log($(this).nestable('serialize'));
        //var data = ;
        var datastring = JSON.stringify($(this).nestable('serialize'));
    });
    function load_masonry(){
      var $container = $('.masonry-container');
      $container.masonry({
      columnWidth: '.item',
      itemSelector: '.item'
      });   
    }
    load_masonry();
    
     function xacnhanxoa(msg){
      if(window.confirm(msg)){
        return true;
      }
      else
        return false;
     };
     $(document).on('click','.dd-item > button',function(){
        setTimeout(function(){
          load_masonry();  
        },100);
     });
     
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
    
  </script>

@endsection