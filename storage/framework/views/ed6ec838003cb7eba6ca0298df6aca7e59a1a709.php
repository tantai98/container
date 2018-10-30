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
     <?php foreach($list_frame as $item): ?>
        <tr>
            <td><?php echo $item->name; ?></td>
            <td><img src="<?php echo e($item->thumb_images); ?>" style="height:30px"></td>
            
            <td>

              <?php if($item->status == 1): ?>
              <a style="color:#738CEC">Công khai</a>
              <?php endif; ?>
              <?php if($item->status == 0): ?>
              <a  style="">Đang ẩn</a>
              <?php endif; ?>
            </td>
            <td class="action-post"> 
            <a href="<?php echo route('frame.edit.frame',['id'=>$item->id]); ?>">
              Sửa
            </a>
            <a href="#" type="" id="xoa-frame" data-id="<?php echo $item->id; ?>">
              Xóa
              <input type="hidden" name="id" value="<?php echo $item->id; ?>">
            </a>
            
            </td>


         </tr>
       
  <?php endforeach; ?>
</table>
<script>
  $(document).on('click','#xoa-frame',function(e){
    e.preventDefault();
      id = $(this).data('id');
    //console.log(id);
    container = $(this);
    
      $.ajax({
        headers: {
            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
        },
        type:"post",
        url:"<?php echo e(route('frame.delete')); ?>",
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