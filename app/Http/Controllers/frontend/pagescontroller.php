<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use App\CategoryProduct;
use App\Form;
use App\System;
use App\Product;
use App\District;
use App\Order;
use App\OrderItem;
use Mail;

class pagescontroller extends Controller
{
    
    // public function viewblog(){
    // 	return view('frontend.pages.Blog');
    // }
    
    
    public function getOrder(){
    	return view('frontend.pages.oder');
    }
    // public function viewpay(){
    // 	return view('frontend.pages.Pay');
    // }
    // public function viewpro(){
    // 	return view('frontend.pages.pro');
    // }
     public function getCart(){
        return view('frontend.pages.Cart');
    }

    public function getProDetail($id){
        $product_detail = Product::find($id);
        return view('frontend.pages.pro',['product_detail'=>$product_detail]);
    }
    
    public function views(){
           $products = Product::select()->paginate(9);
           return view('frontend.pages.category',compact('products'));
       }

    public function viewproducts($id = null){
          
           $category = CategoryProduct::find($id);
           if($category){
               $products = $category->products_public()->paginate(9);
               return view('frontend.pages.category',compact('products'));
               
               //dd($products);

           }else{
               return redirect('view.category');
           }
       }
// fillter1
    public function viewfilterpro1(Request $req){
        $data1= $req->psaph;
        echo $data1;
            if($data1 ==='gia1'){
                $viewtt = Product::orderBy('price','asc')->get();
            }
            else{
                $viewtt = Product::orderBy('price','desc')->get();
            }
            return view ('frontend.ajax.ajaxtuan-html',compact('viewtt'));
    }   
    public function dangkyUudai(Request $req){
        $email = $req->email;
        //dd($email);
        $form =  new Form;
        if($req->email){
          $form->text_1 = $req->email;
        } 
        $form->type = "Ưu đãi";
        if($req->email){
        if($form->save()){
            ignore_user_abort(true);
            set_time_limit(30);
            ob_start();
            echo "true";
            header('Connection: close');
            header('Content-Length: '.ob_get_length());
            ob_flush();
            flush();
            try {
                $mail = System::select('email_send','email_form','email_password')->first();
                if ( !empty($mail->email_send) && !empty($mail->email_password) ) {
                    config(['mail.username' => $mail->email_send]);
                    config(['mail.password' => $mail->email_password]);
                    config(['mail.port' => "587"]);
                    config(['mail.host' => "smtp.gmail.com"]);
                    config(['mail.encryption' => "tls"]);
                    $data =  ['email' => $email];

                    if($mail->email_form){
                            Mail::send('frontend.emails.mail-uudai',$data, function($message) use ($mail){
                            $message->from($mail->email_send);
                            $message->to($mail->email_form, 'Admin')->subject('Có Email đăng kí nhận Ưu đãi');
                        });
                    }
                }
            }catch (Exception $e) {       
            }     
        }else{
            echo "false";
        }
    }else{
        echo "false";
    }
    }
    // tìm kiếm sản phẩm 
    public function productSearch(Request $req){
        $key= $req->key;
        $product = Product::where('id',$key)->orWhere('name','like',"%$key%")->orWhere('code_product','like',"$key")->orWhere('short_description','like',"%$key%")->orderBy('id','desc')->limit(3)->get();
        if(sizeof($product)){
             $html_search = view('frontend.ajax.search',['product'=>$product]);
             $view = view('frontend.ajax.search-enter',['product'=>$product]);
             return json_encode(array('status'=>true,'html_search'=>$html_search.'','product'=>$product,'view'=>$view.""));
         }else{
            return json_encode(array('status'=>false,'product'=>$product));
         }  
    }

    // total Product
    //add cart
    public function addCart(Request $req){
        $id = $req->id;
        $num = $req->num;
        $product = Product::find($id);

        $add = array(
            'num'=>$num,'product'=>$product
            );
        $list_pro = Session::get('product');
        $c = 0;
        if($list_pro != null){
            foreach ($list_pro as $key => $value) {
                if($id == $value['product']->id){
                    $c++;
                    $list_pro[$key]['num'] = $num;
                }
            }
        }
        if($c == 0 ){
            Session::push('product',$add);
        }else{
            Session::set('product',$list_pro);
        }

        $list_pro = Session::get('product');
        if(sizeof($product)){
            $total = 0;
            foreach ($list_pro as $key => $item) {
                # code...
                $price = $item['product']->price;
                if($item['product']->price_sale){
                    $price = $item['product']->price_sale;
                }
                $price = $price;
                $total += $price * $item['num'];
            }
            $text = number_format((int)$total,0,'','.')."đ";
            $view = view('frontend.ajax.addCart',['product'=>$product,'num'=>$num,'list_pro'=>$list_pro]);

            return json_encode(array('status'=>true,'product'=>$product,'session'=>$list_pro,'total'=>$text,'html'=>$view.""));
        }
        return json_encode(array('status'=>true,'product'=>null));
    }

     public function totalProduct(Request $req){
         $id = $req->id;
        $num = $req->num;
        $product = Product::find($id);

        $add = array(
            'num'=>$num,'product'=>$product
            );
        $list_pro = Session::get('product');
        $c = 0;
        if($list_pro != null){
            foreach ($list_pro as $key => $value) {
                if($id == $value['product']->id){
                    $c++;
                    $list_pro[$key]['num'] = $num;
                }
            }
        }
        if($c == 0 ){
            Session::push('product',$add);
        }else{
            Session::set('product',$list_pro);
        }

        $list_pro = Session::get('product');

        if(sizeof($product)){
            $total = 0;
            foreach ($list_pro as $key => $item) {
                # code...
                $price = $item['product']->price;
                if($item['product']->price_sale){
                    $price = $item['product']->price_sale;
                }
                $price = $price;
                $total += $price * $item['num'];
            }
            $text = $total;
        return $text;

        }
    }

    public function removeCart(Request $req){
        $id = $req->id;
        $list_pro = Session::get('product');
        if($list_pro !=null){
            foreach ($list_pro as $key => $value) 
            {
                # code...
                if($id == $value['product']->id)
                {
                    unset($list_pro[$key]);
                }
            }
        }
        Session::set('product',$list_pro);
        $total = 0;
        foreach ($list_pro as $key => $item)
        {

            $price = $item['product']->price;
            if($item['product']->price_sale)
            {
                $price = $item['product']->price_sale;
            }
            $price = $price;
            $total += $price * $item['num'];

        }

         $text =$total;
        return $text;
    }

    public function removeShopingCart(Request $req){
        $id = $req->id;
        $list_pro = Session::get('product');
        if($list_pro != null){
            foreach ($list_pro as $key => $value) {
                # code...
                if($id == $value['product']->id){
                    unset($list_pro[$key]);
                }
            }
        }
        Session::set('product',$list_pro);
        $total = 0;
        foreach ($list_pro as $key => $item) {
            # code...
            $price = $item['product']->price;
            if($item['product']->price_sale){
                $price = $item['product']->price_sale;
            }
            $price = $price;
            $total += $price * $item['num'];
        }
        $text = $total;
        return $text;
    }

    public function ajaxProvinceFrontend(Request $req){
        $id = $req->id;
      $district = District::where('provinceid',$id)->orderBy('name','asc')->get();
      $html = view('frontend.ajax.ajax-province-fronted',['district'=>$district]);

      return json_encode(array('status'=>true,'html'=>$html."",'id'=>$id,'district'=>$district));
    }

    public function ajaxListXem(Request $req){
        $id = $req->id;
        $xem_product = Product::find($id);
        $arrxem = ['xem_product'=>$xem_product];
        $list_pro_xem = Session::get('xem_product');
        $c = 0 ;
        if($list_pro_xem != null){
            foreach ($list_pro_xem as $key => $value) {
            if($id == $value['xem_product']->id);
            $c++;
        }
        }
        if($c == 0 ){
            Session::push('xem_product',$arrxem);
        }else{
            Session::set('xem_product',$list_pro_xem);
        }
        $list_pro_xem = Session::get('xem_product');

       if(sizeof($xem_product)){
             $view = view('frontend.ajax.ajax-list-xem',['list_pro_xem'=>$list_pro_xem]);
            return json_encode(['status'=>true,'view'=>$view.""]);
       }else{
          return json_encode(['status'=>false]);
       }
    }

    // ajax order
    public function ajaxOrder(Request $req){
        $list_pro = Session::get('product');
        if($list_pro == null){
           
            return json_encode(array('status'=>false));
        }else{
            $total=0;
            foreach($list_pro as $item){
                $price = $item['product']->price;
                if($item['product']->price_sale){
                    $price = $item['product']->price_sale;
                }
                $price = $price;
                $total += $price * $item['num']; 
            }
            $order = new Order;
            $order->fullname = $req->FirstName;
            $order->phone = $req->phone;
            $order->email = $req->email;
            $order->address = $req->address;
            $order->note = $req->note;
            $order->status = 1;
            $order->total = $total;
            if($order->save()){
                foreach ($list_pro as $key => $item) {
                    $order_item = new OrderItem;
                    $order_item->quantity = $item['num'];
                    $order_item->order_id = $order->id;
                    $order_item->product_id = $item['product']->id;
                    $order_item->price = (int) $item['product']->price;
                    $order_item->price_sale = (int) $item['product']->price_sale;
                    $order_item->save();
                }
                Session::forget('product');
                $view = View('frontend.ajax.Order',['order'=>$order]);
               return json_encode(array('status'=>true,'view'=>$view.""));
            }
            
             
        }
    }
}
