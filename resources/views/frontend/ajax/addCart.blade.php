<?php $asset_dir = asset('')?>
<?php $total = 0;?>
@if($list_pro)
    @foreach($list_pro as $key=>$item)  
        <li id="d-list-cart-ajax" class="classli_{!! $item['product']->id !!}" data-id="{{ $item['product']->id }}">
            <a href="#"><img alt="" src="{{$asset_dir}}{{ $item['product']->img }}"/></a>
            <p><a href="#">{{ $item['product']->name }}</a></p>
             <?php
                $price = $item['product']->price;
                if($item['product']->price_sale) 
                {
                    $price = $item['product']->price_sale;
                }
                $price = $price ;
                $total +=  $price * $item['num'];
            ?>123
            <p class="tan-font-RB">
               
             <span class="amount">{{number_format( (int)$price,0,'','.')}}đ x 
              <span>{{$item['num']}}</span> </span>
              
            </p>
            <span class="pull-right x-search remove" data-id="{{ $item['product']->id }}">×</span>
            <div style="clear :both"></div>
        </li>
     
    @endforeach
@endif