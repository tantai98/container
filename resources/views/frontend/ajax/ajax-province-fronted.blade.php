<option class="q-ft-option" value="0" >Chọn Quận , Huyện</option>
@foreach($district as $item)
<option data-price="{!! $item->price !!}"  value="{!! $item->price !!}" data-id = "{!! $item->id !!}" >{!! $item->name !!}
	
</option>

@endforeach