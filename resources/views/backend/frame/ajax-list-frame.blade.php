<table class="table m-b-none" ui-jp="footable" data-filter="#filter" data-page-size="100">
  <thead>
    <tr>
        <th data-toggle="true">
            Tên Frame
        </th>
        <th>
            Ảnh
        </th>
        <th>
            Trạng thái
        </th>
        <th style="padding-left:28px;width: 115px;">
            Hành Động
        </th>
        
    </tr>
  </thead>
   <tbody>
   
 </tbody>
     @foreach($list_frame as $item)
        <tr>
            <td>{!! $item->name !!}</td>
            <td><img src="{{ $item->thumb_images }}" style="height:30px"></td>
            
            <td>

              @if($item->status == 1)
              <a style="color:#738CEC">Công khai</a>
              @endif
              @if($item->status == 0)
              <a  style="">Đang ẩn</a>
              @endif
            </td>
            <td class="action-post"> 
            <a href="{!! route('frame.edit.frame',['id'=>$item->id]) !!}">
              Sửa
            </a>
            <a href="#" type="" id="xoa-frame" data-id="{!! $item->id !!}">
              Xóa
              <input type="hidden" name="id" value="{!! $item->id !!}">
            </a>
            
            </td>


         </tr>
       
  @endforeach
</table>
<script>
  $(document).on('click','#xoa-frame',function(e){
    e.preventDefault();
      id = $(this).data('id');
    //console.log(id);
    container = $(this);
    
      $.ajax({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        type:"post",
        url:"{{route('frame.delete')}}",
        data:{'id':id},
        success:function(data){
          //console.log(data);
          if(data == true){
            // location.reload();
            $(container).parent().parent().remove();
          }else{
             alert('có lỗi xảy ra');
          }
        },
        cache:false,
        dataType: 'json'
    });
  });
</script>