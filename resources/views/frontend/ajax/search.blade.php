<style>
	#hov>li:hover{
		        border-right: solid 3px #BC0098;
	}
</style>
<div>
	<ul id="hov">
	 @foreach($product as $item)
	 <li>
		<a href="#"><img alt="" src="{{ $item->img }}"/></a>
		<p><a href="#">{!! $item->name !!}</a></p>
		@if($item->price_sale)
			<p class="tan-font-RB">
				  {{number_format( (int)$item->price_sale,0,'','.')}} vnđ 
			</p>
		@else
			<p class="tan-font-RB">
				  {{number_format( (int)$item->price,0,'','.')}} vnđ    
			</p>
		@endif
		<div style="clear :both"></div>
	</li>
	@endforeach
	</ul>
</div>