<tr style="font-size:12px;">
    <td>
      Chọn
    </td>
    <td>
      Tên Sản Phẩm
    </td>
    <td>
      Niêm Yết
    </td>
    <td>
      Bán
    </td>
  </tr>
  @foreach($product as $item)
  <tr style="font-size:12px;">
  <td style="width: 5%">
    <label class="ui-check m-a-0">
      <input type="checkbox" class="has-value choose-product" value="{{$item->id}}" >
      <i class="dark-white" ></i>
    </label>
  </td>
  <td>
   {!! $item->name !!}
  </td>
  <td>
   {{number_format( (int)$item->price,0,'','.')}} vnđ  
  </td>
  <td>
   {{number_format( (int)$item->price_sale,0,'','.')}} vnđ  
  </td>
  </tr>
  @endforeach