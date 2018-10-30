@if($list_pro_xem)
	@foreach($list_pro_xem as $item)
		<li>	
			<a href="#"><img alt="" src="{!! asset($item['xem_product']->img) !!}"/></a>
			<p><a href="#">{!! $item['xem_product']->name !!}</a></p>
			<p class="tan-font-RB">
				
				@if($item['xem_product']->price_sale)
					{!! $item['xem_product']->price_sale !!}
				@else
					{!! $item['xem_product']->price !!}
				@endif
			</p>
			<div style="clear :both"></div>
		</li>
	@endforeach	
@endif