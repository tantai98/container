<?php
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderItem;
use App\Product;

class OrderController extends Controller
{
    public function index()
    {   
        if(session('admin')->can('xem_don_hang') || session('admin')->can('them_don_hang')  || session('admin')->can('xoa_don_hang') ||  session('admin')->can('xu_li_don_hang') ){
            $id=null;
            return view('backend.orders.index',compact('id'));
        }else{
             return redirect()->route('admin.home');
        }
    }
    public function show($id=null)
    {
        if( session('admin')->can('xem_don_hang') || session('admin')->can('them_don_hang') ){
            $order = Order::find($id);
            return view('backend.orders.show', compact('order'));  
        }
        else{
             return redirect()->route('admin.home');
        }
      
    }
    public function list_type($id=null){
        if(  session('admin')->can('xem_don_hang') || session('admin')->can('them_don_hang')  || session('admin')->can('xoa_don_hang') ||  session('admin')->can('xu_li_don_hang') ){
            return view('backend.orders.index', compact('id')); 
        }
        else{
             return redirect()->route('admin.home');
        }

        
    }

    public function status(Request $req)
    {
        $order = Order::find($req->id);
        $order->status = 0;
        $order->save();
        return json_encode(array('status'=>true));

    }
    public function getOrderadd(){
        return view('backend.orders.add');
    }

    public function postOrderadd(Request $req){
        $order = new Order();

        $order->fullname = $req->full_name;
        $order->email = $req->email;
        $order->phone = $req->phone;
        $order->address = $req->address;
        $order->note = $req->note;
        $order->status = 1;
        if($order->save()){
            $size =  sizeof($req->productId);
            $l_p = $req->productId;
            $l_n = $req->productNum;
            if($size > 0){
                $sum = 0; 
                for($i=0 ;$i<$size;$i++){
                    $id_p = $l_p[$i];
                    $num = $l_n[$i];  
                    if((int)$num > 0){
                        $product = Product::find($id_p); 
                        if (sizeof($product)) {
                            //
                            $OrderItem = new OrderItem;
                            $OrderItem->product_id = $product->id;
                            $OrderItem->price = (int)$product->price;
                            $OrderItem->price_sale = (int)$product->price_sale;
                            $OrderItem->order_id = $order->id;
                            $OrderItem->quantity = $num;
                            if( (int)$product->price_sale ){
                              $sum += $num*( (int)$product->price_sale ) ;
                            }else{
                            $sum += $num*( (int)$product->price) ;
                            }
                            $OrderItem->save();
                         }}
                       
                }
                 $order->total = $sum;
                 $order->save();
            }
            return redirect()->route('order.show',['id'=>$order->id])->with('success','Thêm Đơn Hàng Thành Công');  
        }
        return redirect()->route('order.list')->with('success','Thêm Đơn Hàng Thành Công');
    }
    public function infoOrder(Request $req){
        $id = $req->id;
        $order = Order::find($id);
        if(sizeof($order)){
            $view =  view('backend.orders.ajax-info-order',compact('order'));
            return json_encode(array('status'=>true,'order'=>$order,'innertext'=>$view.''));
        }
        return json_encode(array('status'=>false,'order'=>null));
    }
    public function saveOrder(Request $req){
        $id = $req->id;
        $status = $req->status;
        $note_stick = $req->note_stick;
        $order = Order::find($id);
        if(sizeof($order)){
            $order->status = $status;
            $order->note_stick = $note_stick;
            $order->save();
            return json_encode(array('status'=>true,'order'=>$order));
        }
        return json_encode(array('status'=>false));
    }

    public function postOrderSearchadd(Request $req){

        $name = $req->key;

        // find product like $name = nsme
        $products  = Product::where('id',$name)->orWhere('name','like',"%$name%")->orWhere('code_product','like',"%$name%")->limit(15)->get();
        $html_search = view('backend.orders.ajax-list-search',['product'=>$products]);

        return json_encode(array('status'=>true,'product'=>$products,'html_search'=>$html_search.''));

    }
    public function postOrderCheckadd(Request $req){
         $id = $req->id;

    
        $product = Product::find($id);
        if(sizeof($product)){
          $html_check = view('backend.orders.ajax-list-chon',['product'=>$product]);  
           return json_encode(array('status'=>true,'product'=>$product,'html_check'=>$html_check.''));
          }else{
                return json_encode(array('status'=>false));
          }
    }
}
