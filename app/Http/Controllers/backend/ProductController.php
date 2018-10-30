<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Attribute;
use App\Frame;
use App\FrameImage;
use App\ProductAttribute;
use App\Filter;
use App\FilterPrice;
use Redirect;
use App\CategoryProduct;
use App\TabAttribute;
use App\Product;
use App\ContentProduct;
use App\ProductImage;
use App\ProductInCategory;
use App\TagP;
use App\Item;
use App\District;
use App\Transpost;
use App\Province;
use App\Tag_Product;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use DB;
class ProductController extends Controller
{   

    public function transpost(){
      $province = Province::orderBy('type','asc')->orderBy('name','asc')->get();
       return view('backend.transpost.transpost',['province'=>$province]);
    }  
    public function index_post(){
        
        return view('backend.products.list');
    }
    public function create_post(){
        return view('backend.products.add');
    }
    public function createProduct(){
        return view('backend.products.add-product');
    }
    public function createFilter(){
        return view('backend.products.add-filter');
    }
    public function listProduct(){
        return view('backend.products.list');
    }
    // danh sách phí vận chuyển
    public function listTranspost(){
      return view('backend.transpost.list');
    }

    // giá riêng
    public function postgiarieng(Request $req){
      $id = $req->id;
      $value = $req->value;
      $province = Province::find($id);
      $province->status = $value;
      $province->save();

      $district = District::where('provinceid',$province->id)->orderby('name','asc')->get();
      $html = view('backend.transpost.ajax-phi-rieng',['district'=>$district,'province'=>$province]);

      return json_encode(['status'=>true,'html'=>$html."",'province'=>$province]);
    }

    // giá chung
    public function postgiachung(Request $req){
      $id = $req->id;
      $value = $req->value;
      $province = Province::find($id);
      $province->status = $value;
      $province->save();
      $price = $province->price;
      $district = District::where('provinceid',$province->id)->orderby('name','asc')->get();
      $html = view('backend.transpost.ajax-phi-chung',['district'=>$district,'province'=>$province]);

      return json_encode(['status'=>true,'html'=>$html."",'province'=>$province,'price'=>$price,'id'=>$id]);
    }

    // đặt giá
    public function formdatgiaProvince(Request $req){
      $id = $req->id;
      $province = Province::find($id);
      $view = view('backend.transpost.ajax-gia-province',['province'=>$province]);

      return json_encode(['status'=>true,'view'=>$view.'']);
    }

    // edit giá province
    public function postProvince(Request $req){
      $id = $req->id;
      $price = $req->price;
      $province = Province::find($id);
      if($province){
        $province->price = (int)$price;
        $province->save();
        
         return json_encode(['status'=>true,'price'=>$price]);
      }else{
         return json_encode(['status'=>false]);
      }
    }

    //edit giá district
    public function postDistrict(Request $req){
      $id = $req->id;
      $price = $req->price;
      $district = District::find($id);
      if($district){
        $district->price = (int)$price;
        $district->save();
         return json_encode(['status'=>true,'price'=>$price]);
      }else{
         return json_encode(['status'=>false]);
      }
    }

    // dặt giá đíteict
    public function formdatgiaDistrict(Request $req){
      $id = $req->id;
      $district = District::find($id);
      $view = view('backend.transpost.ajax-gia-district',['district'=>$district]);

      return json_encode(['status'=>true,'view'=>$view.'']);
    }
    // Hiển thị trang sửa 
    public function editProduct($id =null ){
      
      $product = Product::find($id);
      if($product){
          $content  = ContentProduct::where('product_id',$product->id)->get();

          $cate = ProductInCategory::where('product_id',$product->id)->get();
          $catIds = array();
          foreach ($cate as $cat) {
              $catIds[] = $cat->cate_pro_id;
          }
          $attr = $product->getAttributes_2;
          $size = sizeof($attr);
          for($i = 0 ; $i< $size ; $i++){
            if($i == $size - 1){
            }else{
              if( $attr[$i]->name ==  $attr[$i+1]->name){
                $attr[$i+1]->value = $attr[$i]->value.', '.$attr[$i+1]->value;
                unset($attr[$i]);
              }
            }
          }
          $tags= array();
          if($product->getPostTag !=null){
               foreach ($product->getPostTag as  $tag) {
                   $tags[]= $tag->tag;
                };
               $product_tags= implode(',', $tags);
          }
          else  $product_tags='';

          $images = ProductImage::where('product_id',$product->id)->get();
          $frame = Frame::where('product_id',$product->id)->first();
          $frame_attr = Attribute::where('id',$frame->attribute_id)->first();
         return view('backend.products.edit-product',compact('product','content','catIds','images','attr','product_tags','frame_attr'));
      }else{
         return redirect()->back();
      }

      
    }
    // Tạo sản phẩm
    public function formProduct(Request $req){
       $config_img = array('width'=>223,'height'=>181);
       $config_img_detail = array('width'=>223,'height'=>181);
       $product_config = Item::where('key_layout','config_thumb_product')->get();
       if($product_config){
          if(isset($product_config[0])){
            $w_h = explode('x',$product_config[0]->value);
            $w = 0;
            $h = 0;
            if(isset($w_h[0])) $w = (int) $w_h[0];
            if(isset($w_h[1])) $h = (int) $w_h[1];
            if($w >0 && $h> 0)  $config_img = array('width'=>$w,'height'=>$h);

          }
          if(isset($product_config[1])){
             $w_h = explode('x',$product_config[1]->value);
            $w = 0;
            $h = 0;
            if(isset($w_h[0])) $w = (int) $w_h[0];
            if(isset($w_h[1])) $h = (int) $w_h[1];
            if($w >0 && $h > 0)  $config_img_detail = array('width'=>$w,'height'=>$h);
          }
       }

       $product = new Product();
       $submit = $req->submit;
       $product_name = $req->product_name;
       $product_des = $req->product_des;
       $price = $req->price;
       $price_sale = $req->price_sale;

       $price =  (int) $price;
       $price_sale =  (int) $price_sale;
       $product_code = $req->product_code;
       $sku = $req->sku;
       $label = $req->label;
       $img_product = $req->img_product;
       $choose_cate = $req->choose_cate;
       $post_name = $req->post_name;
       $post_content = $req->post_content;
       $tab_list = $req->tab_list;
       $attrbute_k = $req->attrbute_k;
       $attrbute_v = $req->attrbute_v;
       $attrbute_frame = $req->attrbute_frame;
       if(!$attrbute_v )  $attrbute_v = array();
       if(!$attrbute_k )  $attrbute_k = array();
       // Bắt đầu tạo sản phẩm
       
        $product->name  = $product_name;
        $product->slug  =str_slug($product_name, '-');
        $product->sku  = 0;
        $product->short_description  = $product_des;
        $product->price  = $price;
        $product->price_sale  = $price_sale;
        $product->code_product  = $product_code;
        $product->label  = $label;

        if($submit == "post"){
            $product->status  = 1;
        }else{
            $product->status  = 0;
        } 
        if($req->hasFile('prod_img')){
            $file = array('image' => Input::file('prod_img'));
            $rules = array('image' => 'mimes:jpeg,bmp,png');
            $validator = Validator::make($file, $rules);
            if ($validator->fails()) {
                
            }else{

                $file = Input::file('prod_img');
                $nameimg  =  uniqid().'-'.date('d-m-Y').'-'.str_slug($file->getClientOriginalName()).".".$file->getClientOriginalExtension(); 

                $file->move(public_path().'/assets/product/', $nameimg);
                $product->img = '/assets/product/'.$nameimg;
                $product->saveThumb($config_img);
            }
        }
        $attrr = Attribute::where('name',$req->config_frame)->where('value',$req->attrbute_frame)->where('type',0)->first();
        
        
        // $frame_attribute = Item::where('key_item','config_frame_attribute')->first();
        //   if(!$frame_attribute){
        //       return redirect()->back()->with('error','Chưa chọn thuộc tính làm frame');
        //   }
        //   $attr = Attribute::where('id',$frame_attribute->value)->first();
          // theem famre
          
          // dd($attrr);
          if(!$attrr){
            $atttribute = new Attribute;
            $atttribute->name = $req->config_frame;
            $atttribute->value = $req->attrbute_frame;
            $atttribute->type = 0;
            $atttribute->status = 0;
            $atttribute->avaiable = 0;
            if($atttribute->save()){
              $filter_frame = new Filter;
              $filter_frame->name = $atttribute->name;
              $filter_frame->value = $atttribute->value;
              $filter_frame->status = $atttribute->status;
              $filter_frame->attribute_id = $atttribute->id;
              $filter_frame->save();
            }
            $attrr = $atttribute;
          }
                // Tạo Frame      
        if($product->save()){
              $frame = new Frame;
                  $frame->name = $product->name;
                  $frame->slug = str_slug($product->name);
                  if($req->hasFile('prod_img')){
                        $file = array('image' => Input::file('prod_img'));
                        $rules = array('image' => 'mimes:jpeg,bmp,png');
                        $validator = Validator::make($file, $rules);
                        if ($validator->fails()) {
                            
                        }else{

                            $file = Input::file('prod_img');
                            $nameimg  =  uniqid().'-'.date('d-m-Y').'-'.str_slug($file->getClientOriginalName()).".".$file->getClientOriginalExtension(); 

                            $file->move(public_path().'/assets/product/', $nameimg);
                            $frame->img = '/assets/frame/'.date('d-m-Y').'.'.$file->getClientOriginalName();
                            $frame->saveThumb($config_img);
                        }
                    }
                  $frame->description = $product->short_description;
                  if($product->description){
                    $frame->content = $product->description;
                  }  
                  $frame->price = $product->price;
                  $frame->price_sale = $product->price_sale;
                  $frame->status = $product->status;
                  $frame->code_frame = $product->code_product;
                  if($product->thumb_images) $frame->thumb_images = $product->thumb_images;
                  $frame->attribute_id = $attrr->id;
                  $frame->product_id = $product->id;
                  $frame->create_by = session('admin')->id;
                  $frame->save();
              if($choose_cate){
              
               $product->getCategory()->attach($choose_cate); 
               
              }
              if($req->has('seo_tags')){
                      $tags = explode(',', $req->seo_tags);
                      foreach ($tags as  $tag) {
                          $tagsname = TagP::where('tag','=', trim($tag))->first();
                          if($tagsname == null){
                                $tags_column = new TagP;
                                $tags_column->tag= trim($tag);
                                $tags_column->save();
                                $product->getPostTag()->attach($tags_column);
                          }
                          else {
                                $product->getPostTag()->attach($tagsname);
                          }
                      }
              }


              $frame_attribute = Item::where('key_item','config_frame_attribute')->first();
              if($frame_attribute){
                $attr_frame = Attribute::find($frame_attribute->value);
              }

              
               if($img_product){
                  $list_images =  explode(",,,", $img_product);
                  foreach ($list_images as $key => $value) {
                      $ProductImage  = new ProductImage;
                      $ProductImage->product_id  = $product->id;
                      $ProductImage->img  = $value;
                      $ProductImage->group_name  = "Mặc định";
                      $ProductImage->type  = "Nhóm";
                      $ProductImage->saveThumb($config_img_detail);
                      $ProductImage->save();
                      if($ProductImage->save()){
                        $FrameImage = new FrameImage;
                        $FrameImage->frame_id =$frame->id ;
                        $FrameImage->img =$value ;
                        $FrameImage->group_name ='DefaultProduct' ;
                        $FrameImage->type ='FrameProduct' ;
                        $FrameImage->saveThumb($config_img_detail); 
                        $FrameImage->save(); 
                      }
                  }
              }else{

              }
              if($attrbute_k){
                foreach($attrbute_v as $key => $attr_item){
                    $str_va =  explode(",", $attrbute_v[$key]);
                    $count_frame = 0;
                    foreach($str_va as $str_item){

                      $count_frame ++;
                      $filter_groupp = Attribute::where('type',1)->get();
                      if($attr_frame){
                        if($attr_frame->name == $attrbute_k[$key]){
                          if($count_frame >1) break;
                        }
                      }
                      // duyệt các item trong key
                      $str_item  = trim($str_item);
                      if(strlen($str_item)){
                      // nếu giá trị tồn tại không thì tạo mới
                      $filter_group = Attribute::where('name',$attrbute_k[$key])->where(
                        'type',1)->first();

                      $skjau = Attribute::firstOrNew(['name' => $attrbute_k[$key],
                        'value' => $str_item]);
                        $skjau->type = 0;
                        $skjau->init = $filter_group->init;
                        $skjau->save();
                        $product->getAttributes()->attach($skjau);
                        
                        
                        // Tạo mới filter
                        if(sizeof($filter_group)){
                          if($filter_group->avaiable == 0){
                              $filter = Filter::firstOrNew(['name' => $skjau->name,'value'=>
                                $skjau->value]);
                              $filter->name = $skjau->name;
                              $filter->value = $skjau->value;
                              $filter->type = 0; // kiểu 1
                              $filter->attribute_id = $skjau->id;
                              $filter->save();
                          }
                        }
                      }
                      

                    }
                    
                }
                // Tao filter
              }

              $count = 0;
              for($i= sizeof($post_name)-1 ;$i>=0; $i--){
                        $count ++;
                        $c = new ContentProduct;
                        $c->product_id = $product->id;;
                        $c->name = $post_name[$i];
                        $c->content = $post_content[$i];
                        $c->description = $post_name[$i];
                        $c->rank = $count;
                        $c->save();

                        $attr_l =  explode(",", $tab_list[$i]); 
                        // Duyệt các key attribute
                        foreach ($attrbute_k as $key=> $value) {
                          foreach ($attr_l as $value2) {
                            // nếu key attr của tab có trong danh sách key attribute post
                            if(trim($value) == trim($value2) ){
                                $str_va =  explode(",", $attrbute_v[$key]);
                                foreach ($str_va as $key3 => $value3) {
                                  $x =  Attribute::where('name',trim($value))->where('value',trim($value3))->where('type',0)->first();
                                  if(sizeof($x)){
                                    $check = TabAttribute::firstOrNew(['content_products_id' => $c->id,'attribute_id'=>$x->id]);
                                    $check->save();
                                  }
                                }
                            }
                          }
                        }

              }
          
          return redirect()->route('product.list.product')->with('success','Thêm sản phẩm thành công');
        }
        else{
          return redirect()->back()->with('error','Có lỗi trong việc thêm sản phẩm');
        }
        
 
    }
     // Sửa sản phẩm
    public function formProductEdit(Request $req){
       $config_img = array('width'=>223,'height'=>181);
       $config_img_detail = array('width'=>223,'height'=>181);
       $product_config = Item::where('key_layout','config_thumb_product')->get();
       if($product_config){
          if(isset($product_config[0])){
            $w_h = explode('x',$product_config[0]->value);
            $w = 0;
            $h = 0;
            if(isset($w_h[0])) $w = (int) $w_h[0];
            if(isset($w_h[1])) $h = (int) $w_h[1];
            if($w >0 && $h> 0)  $config_img = array('width'=>$w,'height'=>$h);

          }
          if(isset($product_config[1])){
             $w_h = explode('x',$product_config[1]->value);
            $w = 0;
            $h = 0;
            if(isset($w_h[0])) $w = (int) $w_h[0];
            if(isset($w_h[1])) $h = (int) $w_h[1];
            if($w >0 && $h > 0)  $config_img_detail = array('width'=>$w,'height'=>$h);
          }
       }
       $product = Product::find($req->id);
       
       if($product){

           $submit = $req->submit;
           $product_name = $req->product_name;
           $product_des = $req->product_des;
           $price = $req->price;
           $price_sale = $req->price_sale;
           $price =  (int) $price;
           $price_sale =  (int) $price_sale;
           $product_code = $req->product_code;
           $sku = $req->sku;
           $label = $req->label;
         
           $img_product = $req->img_product;
           $choose_cate = $req->choose_cate;
           $post_name = $req->post_name;
           $post_content = $req->post_content;
           $tab_list = $req->tab_list;

           $attrbute_k = $req->attrbute_k;
           $attrbute_v = $req->attrbute_v;

           if(!$attrbute_k) $attrbute_k =  array();
           if(!$attrbute_k) $attrbute_v =  array();

           // Bắt đầu tạo sản phẩm
            if($req->hasFile('prod_img')){
                $file = array('image' => Input::file('prod_img'));
                $rules = array('image' => 'mimes:jpeg,bmp,png');
                $validator = Validator::make($file, $rules);
                if ($validator->fails()) {
                    
                }else{
                    if(File::exists($product->img)){
                       File::delete($product->img);
                    }
                    $file = Input::file('prod_img');
                    $nameimg  =  uniqid().'-'.date('d-m-Y').'-'.str_slug($file->getClientOriginalName()).".".$file->getClientOriginalExtension(); 

                    $file->move(public_path().'/assets/product/', $nameimg);
                    $product->img = '/assets/product/'.$nameimg;
                    $product->saveThumb($config_img);
                }
            }else{
                $product->saveThumb($config_img);
            }
            $product->name  = $product_name;
            $product->slug  =str_slug($product_name, '-');
            $product->sku  = 0;
            $product->short_description  = $product_des;
            $product->price  = $price;
            $product->price_sale  = $price_sale;
            $product->code_product  = $product_code;
            $product->label  = $label;
            if($submit == "post"){
                $product->status  = 1;
            }else{
                $product->status  = 0;
            }
            $attrr = Attribute::where('name',$req->config_frame)->where('value',$req->attrbute_frame)->where('type',0)->first();
            if(!$attrr){
            $atttribute = new Attribute;
            $atttribute->name = $req->config_frame;
            $atttribute->value = $req->attrbute_frame;
            $atttribute->type = 0;
            $atttribute->status = 0;
            $atttribute->avaiable = 0;
            if($atttribute->save()){
              $filter_frame = new Filter;
              $filter_frame->name = $atttribute->name;
              $filter_frame->value = $atttribute->value;
              $filter_frame->status = $atttribute->status;
              $filter_frame->attribute_id = $atttribute->id;
              $filter_frame->save();
            }
            $attrr = $atttribute;
          } 
            if($product->save()){
                  $frame_product = Frame::where('product_id',$product->id)->first();
                  $frame_product->name = $product->name;
                  $frame_product->slug = str_slug($product->name);
                  $frame_product->img = $product->img;
                  $frame_product->description = $product->short_description;
                  if($product->description){
                    $frame_product->content = $product->description;
                  }  
                  $frame_product->price = $product->price;
                  $frame_product->price_sale = $product->price_sale;
                  $frame_product->status = $product->status;
                  $frame_product->code_frame = $product->code_product;
                  $frame_product->thumb_images = $product->thumb_images;
                  $frame_product->attribute_id = $attrr->id;
                  $frame_product->product_id = $product->id;
                  $frame_product->create_by = session('admin')->id;
                  $frame_product->save();
                    $list_id= array();
                    if($req->has('seo_tags')){
                        $tags = explode(',', $req->seo_tags);
                        foreach ($tags as  $tag) {
                            $tagsname = TagP::where('tag','=', trim($tag))->first();
                            if($tagsname ==null){
                              $tags_column = new TagP;
                              $tags_column->tag = trim($tag);
                              $tags_column->save();
                              array_push($list_id, $tags_column->id);
                            }
                            else {
                              array_push($list_id, $tagsname->id);
                            }
                        } 
                        $product->getPostTag()->sync($list_id);  
                    }
                    if(!$req->seo_tags){
                      Tag_Product::where('product_id',$product->id)->delete();
                    }

                    $content_current  = ContentProduct::where('product_id',$product->id)->get();
                    $cate_current = ProductInCategory::where('product_id',$product->id)->get();
                    $images_current = ProductImage::where('product_id',$product->id)->get();
                
                    $catIds = array();
                    foreach ($cate_current as $cat) {
                        $catIds[] = $cat->cate_pro_id;
                    }
                    if($choose_cate){
                          foreach ($catIds as  $cate) {
                              if(!in_array($cate, $choose_cate)){
                                ProductInCategory::where('cate_pro_id',$cate)->delete();
                              }
                          }
                          foreach($choose_cate as $cate){
                              if(!in_array($cate, $catIds)){
                                $cate_product = new ProductInCategory;
                                $cate_product->product_id = $product->id;
                                $cate_product->cate_pro_id = $cate;
                                $cate_product->save();
                              }
                            }
                    }else{
                          ProductInCategory::where('product_id',$product->id)->delete();
                    }

                    if($attrbute_k){
                      $connect_attr_pro = ProductAttribute::where('product_id',$product->id)->get();
                      $arr_attrID = array();
                      // Lấy ra các id attribute trước
                      foreach($connect_attr_pro as $key =>$value){
                            array_push($arr_attrID, $value->attribute_id);
                      }
                      // Remove các thuộc tính
                      foreach($arr_attrID as $key => $id_attr){
                         // Lấy ra thuộc tính cũ.
                         $attr_obj = Attribute::find($id_attr); //Color: vàng , Color: Cam, Hình:tròn ...
                         if(sizeof($attr_obj)){
                            $name = $attr_obj->name;
                            $value = $attr_obj->value;
                            $c = 0;
                            $c_name = 0;
                            foreach($attrbute_v as $key => $attr_item){
                              // nếu Key = Key
                              if( $attrbute_k[$key] == $name){
                                $c_name ++;
                                $str_va =  explode(",", $attrbute_v[$key]);
                                foreach ($str_va as $str_item) {
                                  // duyệt dừng item trong value : màu sắc vàng,cam,đỏ
                                  $str_item  = trim($str_item);
                                  if(strlen($str_item)){
                                    if( $str_item != $value){
                                        $c++;
                                    }
                                  }
                                }
                              }
                            }
                            if($c_name==0){
                              // không có value nào input lên
                              ProductAttribute::where('product_id',$product->id)->where('attribute_id',$id_attr)->delete();
                            }
                            if($c>0){
                              ProductAttribute::where('product_id',$product->id)->where('attribute_id',$id_attr)->delete();
                            }
                         }
                      }
                      // Add thuộc tính
                      foreach($attrbute_v as $key => $attr_item){
                          $str_va =  explode(",", $attrbute_v[$key]);
                          foreach ($str_va as $str_item) {
                              // duyệt dừng item trong value : màu sắc vàng,cam,đỏ
                              $str_item  = trim($str_item);
                              if(strlen($str_item)){
                                  $skjau = Attribute::where('name',$attrbute_k[$key])
                                        ->where('value',$str_item)->first();
                                  if(sizeof($skjau)) {
                                    // nếu tồn tại thuộc tính này rồi
                                    // kiểm tra nếu bảng liên kết có thì thôi
                                    // chưa thì thêm vào
                                    $check = ProductAttribute::where('product_id',$product->id)->where('attribute_id',$skjau->id)->first();
                                    if(sizeof($check)==0){
                                      $product->getAttributes()->attach($skjau);
                                    }
                                  }else{
                                    // nếu chưa tồn tại thì thêm mới
                                    $filter_group = Attribute::where('name',$attrbute_k[$key])->where(
                                      'type',1)->first();
                                    $attr = new Attribute;
                                    $attr->name  = $attrbute_k[$key];
                                    $attr->value = $str_item;
                                    $attr->init = $filter_group->init;
                                    $attr->type = 0;
                                    $attr->save();
                                    if($attr->save()){
                                       $product->getAttributes()->attach($attr);
                                       // Tạo mới filter
                                     
                                      if(sizeof($filter_group)){
                                        if($filter_group->avaiable == 0){
                                            $filter = $filter = Filter::firstOrNew(['name' => $attr->name,'value'=>$attr->value]);
                                            $filter->name = $attr->name;
                                            $filter->value = $attr->value;
                                            $filter->type = 0;
                                           
                                            $filter->attribute_id = $attr->id;
                                            $filter->save();
                                        }
                                      }
                                    }
                                  }
                              }
                          }
                          // Tao filter
                      }
                    }else{
                        ProductAttribute::where('product_id',$product->id)->delete();
                    }
                    $img_array =array();
                        $list_images =  explode(",,,", $img_product);
                        foreach ($list_images as $key => $value) {
                          if($value){
                              $ProductImage = ProductImage::where('img','=', $value)->first();
                              if(!$ProductImage){
                                 $ProductImage = new ProductImage; 
                                  $ProductImage->product_id  = $product->id;
                                  $ProductImage->img  = $value;
                                  $ProductImage->group_name  = "Mặc định";
                                  $ProductImage->type  = "Nhóm";
                                  $ProductImage->saveThumb($config_img_detail);
                                  $ProductImage->save();
                              }else{
                                  $ProductImage->saveThumb($config_img_detail);
                              }
                              array_push($img_array, $ProductImage->id);
                          }
                            
                        }
                    $imgs_delete= $product->getImages()->whereNotIn('id', $img_array)->get();
                    foreach ($imgs_delete as  $value) {
                      File::delete($value);
                      $value->delete();

                    }
                  
                    $content_id = array();
                    $count = 0; 
                    for($i=0; $i<=sizeof($req->content['id'])-1 ; $i++){

                        $count ++;
                        // Nếu là tạo mới
                        if($req->content['id'][$i]==0){
                            $c = new ContentProduct;
                            $c->name = $req->content['name'][$i];
                            $c->product_id = $product->id;
                            $c->content = $req->content['content'][$i];
                            $c->rank = $count;
                            $c->save(); 
                            array_push($content_id, $c->id);
                            
                            $attr_l =  explode(",", $tab_list[$i]); 
                            // Duyệt các key attribute
                            $tab_attr_id = array();
                            foreach ($attrbute_k as $key=> $value) {
                              foreach ($attr_l as $value2) {
                                if(trim($value) == trim($value2) ){
                                    $str_va =  explode(",", $attrbute_v[$key]);
                                    foreach ($str_va as $key3 => $value3) {
                                      $x =  Attribute::where('name',trim($value))->where('value',trim($value3))->where('type',0)->first();
                                      if(sizeof($x)){
                                        $check = TabAttribute::firstOrNew(['content_products_id' => $c->id,'attribute_id'=>$x->id]);
                                        $check->save();
                                        array_push($tab_attr_id,$check->attribute_id);
                                      }
                                    }
                                }
                              }
                            }
                            TabAttribute::where('content_products_id',$c->id)
                            ->whereNotIn('attribute_id',$tab_attr_id)->delete(); 
                        }
                        else{
                            $c = ContentProduct::find($req->content['id'][$i]);
                            $c->name = $req->content['name'][$i];
                            $c->product_id = $product->id;
                            $c->content = $req->content['content'][$i];
                            $c->rank = $count;
                            $c->save(); 
                            array_push($content_id, $c->id);
                            $attr_l =  explode(",", $tab_list[$i]); 
                            // Duyệt các key attribute
                            $tab_attr_id = array();

                            foreach ($attrbute_k as $key=> $value) {
                              foreach ($attr_l as $value2) {
                                if(trim($value) == trim($value2) ){
                                    $str_va =  explode(",", $attrbute_v[$key]);
                                    foreach ($str_va as $key3 => $value3) {
                                      $x =  Attribute::where('name',trim($value))->where('value',trim($value3))->where('type',0)->first();
                                      if(sizeof($x)){
                                        $check = TabAttribute::firstOrNew(['content_products_id' => $c->id,'attribute_id'=>$x->id]);
                                        $check->save();
                                        array_push($tab_attr_id,$check->attribute_id);
                                      }
                                    }
                                }
                              }
                            }
                            TabAttribute::where('content_products_id',$c->id)->whereNotIn('attribute_id',$tab_attr_id)->delete(); 
                        }
                    }
                    // Xoa cac content khong thuoc
                    $product->contents()->whereNotIn('id',$content_id)->delete(); 
                   
              return redirect()->back()->with('success','Sửa thành công');
            }
            else{
              return redirect()->back()->with('error','Có lỗi trong việc sửa sản phẩm');
            }
        }else{
          return redirect()->back();
        }
    }
    public function del_product_post(Request $req)
    {
      $product = Product::find($req->id);
      if($product->getImages()->count()){
      foreach ($product->getImages() as  $value) {
         File::delete($value->img);
      }
      $product->getImages()->delete();
    }
      File::delete($product->images);
      $product->getCategory()->sync([]);
      $product->delete();
      echo 'true';
    }
   
    
    
    public function del_post(Request $req){
        $post= Post::findOrFail($req->id);
        if($post->getPostCategory->count()){

            $post->getPostCategory()->delete();
        }
        $post->delete();
        echo 'true';
    }
    
    public function attribute_list(){
    	$attribute = Attribute::all();
    	return view('backend.products.attribute' ,compact('attribute'));
    }

    public function attribute_list_post(Request $req){
    	 $attribute = new Attribute;
    	 $attribute->name = $req->name;
    	 if($req->has('min_price') && $req->has('max_price')){
            $attribute->min = $req->min_price;
            $attribute->max = $req->max_price;
    	 }
         if($req->has('min_price') &&  !$req->has('max_price') || !$req->has('min_price') && $req->has('max_price')){
             return redirect()->route('product.attribute.list')->with('error', 'Bạn nhập khoảng giá trị cho bộ lọc chưa đúng');
         }
         if($req->has('value')){
            $check = Attribute::where('value', $req->value)->where('name', $req->name)->get();

            if(count($check) >0){

                return redirect()->route('product.attribute.list')->with('error', 'Thuộc tính đã đã tồn tại');
            }
            $attribute->value = $req->value;
         }
         $attribute->type = $req->type;
         if($attribute->save()){
            
         return redirect()->route('product.attribute.list')->with('success', 'Thêm thuộc tính thành công');
        }
    }
    public function edit_attribute(Request $req){

      $attribute = Attribute::find($req->id); 
      $view = view('backend.ajax.ajax-attribute',compact('attribute'));
      return $view;
    }
    public function update_edit_post(Request $req){
        $attribute = Attribute::find($req->id);
        $attribute->name = $req->name;
        $attribute->type = $req->type;
        if($req->type !=2){
           $attribute->min = ''; 
           $attribute->max = '';
           $attribute->value = $req->value; 
        }
        else{
           $attribute->value = ''; 
           $attribute->min = $req->min_price; 
           $attribute->max = $req->max_price;
        }
         if($attribute->save()){
            
         return redirect()->route('product.attribute.list')->with('success', 'Chỉnh sửa thuộc tính thành công');
        }
    }
    public function del_attribute(Request $req){
        $attribute = Attribute::find($req->id);

         $attribute->delete();
         echo 'true';
        
    }

    public function listCategoryProduct(){
        return view('backend.products.list_category_pro');
    }
    public function createCategoryProduct(){
        return view('backend.products.create_category');
    }
    public function post_create_category_product(Request $req){
         $cate = new CategoryProduct;
        if($req->hasFile('cate_img')){
            $file = array('image' => Input::file('cate_img'));
            $rules = array('image' => 'mimes:jpeg,bmp,png');
            $validator = Validator::make($file, $rules);
            if ($validator->fails()) {
                // send back to the page with the input data and errors
                return Redirect::to('category.product.add')->with(['error'=>'Ảnh tải lên chưa đúng định dạng']);
            }else{
                $file = Input::file('cate_img');
                $file->move(public_path().'/assets/product/category/', $file->getClientOriginalName());
                $cate->img = '/assets/product/category/'.$file->getClientOriginalName();
              
            }
        }
        if($req->cate_des ){
            $cate->description = $req->cate_des;
        }
        if($req->cate_parent ){
            $cate->parent_id = $req->cate_parent;
            // get parent 
        }
        if($req->cate_name ){
            $cate->name = $req->cate_name;
            $cate->prefix = str_slug($req->cate_name,'-');
            $cate->save();
              return Redirect::to(route('category.product.add'))->with(['success'=>'Thêm danh mục thành công']);
        }
        return Redirect::to(route('category.product.add'))->with(['error'=>'Lỗi không xác định']);
    }

    public function edit_product_category($id){
        if($id ==null){
            return Redirect::to('admin.home');
        }else{
            $catId = CategoryProduct::find($id);
            if($catId)  return view('backend.products.edit_category_pro',compact('catId'));
        }
        return Redirect::to('admin.home');
    }

    public function save_edit_category(Request $req){
        $id = $req->id;
         $cate = CategoryProduct::Find($id);
         if(!$cate)  return Redirect::to('admin.home'); 


         if($req->hasFile('cate_img')){
            $file = array('image' => Input::file('cate_img'));
            $rules = array('image' => 'mimes:jpeg,bmp,png');
            $validator = Validator::make($file, $rules);
            if ($validator->fails()) {
                // send back to the page with the input data and errors
                return Redirect::to('cate.products.edit')->with(['error'=>'Ảnh tải lên chưa đúng định dạng']);
            }else{
                $file = Input::file('cate_img');
                $file->move(public_path().'/assets/product/category/', $file->getClientOriginalName());
                $cate->img = '/assets/product/category/'.$file->getClientOriginalName();
            }
        }
        if($req->cate_des ){
            $cate->description = $req->cate_des;
        }
        if($req->cate_parent !=0 ){
            $cate->parent_id = $req->cate_parent;
            // get parent 
        }
        else{
            $cate->parent_id = 0;
        }
    
        if($req->cate_name ){
            $cate->name = $req->cate_name;
            $cate->prefix = str_slug($req->cate_name,'-');
            $cate->save();
              
        }
        return Redirect::to(route('cate.products.edit',['id'=>$id]))->with(['success'=>'Chỉnh sửa thành công']);
    }
    public function del_product_category(Request $req){

         $category =CategoryProduct::find($req->id);
          if($category->editable == 1){
            echo 'false';
            return ;
          } 
        if($category->subcategory->count()){
                    foreach ($category->subcategory as $value) {
                         if($value->getsubcate->count()){
                          
                            $value->getsubcate()->delete();
                         }
                    }
                $category->subcategory()->delete();
             }
         if($category->getsubcate->count()){

            $category->getsubcate()->delete();
         }
         $category->delete();

         echo 'true';
    }
    public function products_in_cate($id_cate = null)
    {
        return view('backend.products.list',compact('id_cate'));
    }
    public function createAttribute(Request $req){
      $name =  $req->name;
      $choose =  $req->type;
      $init = $req->init;
      $obj = Attribute::check($name,1);
      if($obj){
        return json_encode(array('status'=>false,'message'=>"Thuộc tính này đã tồn tại"));
      }else{
        $attr = new Attribute;
        $attr->name = $name;
        $attr->prefix = str_slug($name);
        $attr->type = 1;
        $attr->avaiable = $choose;
        $attr->init = $init;
        $attr->save();
        return json_encode(array('status'=>true,'message'=>"Đã tạo mới thuộc tính"));
      }
      
    }
    public function delAttribute(Request $req){
      $name = $req->name;
      $attr = Attribute::where('name',$name)->delete();
      return json_encode(array('status'=>true,'message'=>"Xóa thành công"));
    }
    public function checkKey(Request $req){
      $key = $req->key;

      $list = Attribute::where('name',$key)->where('type',0)->get();
      return json_encode(array('list'=>$list));
    }
    public function addFilter(Request $req){
      $min = $req->min;
      $max = $req->max;
      $name = $req->name;
      $avaiable = $req->avaiable;
      
      if($name == "price"){
        $filter  = new FilterPrice;
        $filter->name = "price";
        $filter->min = $min;
        $filter->max = $max;
        $filter->type = 1;
        $filter->save();
        return json_encode(array('status'=>true,'item'=>$filter));
      }else{
        $attr_filter = Attribute::where('name',$name)->where('type',1)->first();
        if(sizeof($attr_filter)){
            $filter  = new Filter;
            $filter->name = $name;
            $filter->min = $min;
            $filter->max = $max;
            $filter->type = 1;
            $filter->attribute_id = $attr_filter->id;
            $filter->save();
            return json_encode(array('status'=>true,'item'=>$filter));
        }
      }
      return json_encode(array('status'=>false));
    }
    public function getFilterAjax(Request $req){
      $id = $req->id;
      $filter = Filter::find($id);
      if(sizeof($filter)){
        return json_encode(array('status'=>true,'item'=>$filter));
      }else{
        return json_encode(array('status'=>false,'item'=>null));
      }
    }
    public function saveFilterAjax(Request $req){
        $id = $req->id;
        $config_name = $req->config_name;
        $img = $req->img;
        $filter = Filter::find($id);
        if(sizeof($filter)){
            $filter->config_name = $config_name;
            if($req->hasFile('img')){
                $file = array('image' => Input::file('img'));
                $rules = array('image' => 'mimes:jpeg,bmp,png');
                $validator = Validator::make($file, $rules);
                if ($validator->fails()) {
                    
                }else{
                    $file = Input::file('img');
                    $file->move(public_path().'/assets/product/filter/', str_slug($config_name, '-').'.'.$file->getClientOriginalExtension());
                    $filter->img = '/assets/product/filter/'.str_slug($config_name, '-').'.'.$file->getClientOriginalExtension();
                  
                }
            }
            $filter->save();
            return json_encode(array('status'=>true,'item'=>$filter));
        }else return json_encode(array('status'=>false,'item'=>null));
    }
    public function delFilterAjax(Request $req){
      $id = $req->id;
      $price = $req->price;
      if($price ){
        $filter = FilterPrice::find($id);
      }else{
        $filter = Filter::find($id);
      }
      if(sizeof($filter)){
        if($filter->type == 1){
          $filter->delete();
          return json_encode(array('status'=>true,'message'=>"Xóa thành công"));
        }else{
          return json_encode(array('status'=>false,'message'=>"Không thể xóa thuộc tính này"));
        }
      }else{
        return json_encode(array('status'=>false,'message'=>"Lỗi không xác định"));
      } 
    }
    public function changeFilterStatus(Request $req){
      $id=  $req->id;
      $attr = Attribute::find($id);
      if(sizeof($attr)){
        if($attr->status == 0){
          $attr->status = 1;
        }else{
          $attr->status = 0;
        }
        $attr->save();
        return json_encode(array('status'=>true));
      }else{
        return json_encode(array('status'=>false));
      }
    }
    public function getAttrAjax(Request $req){
      $name = $req->name;
      $attr = Attribute::where('name',$name)->where('type',1)->first();
      if(sizeof($attr)){
         return json_encode(array('status'=>true,'attr'=>$attr));
      }else{
        return json_encode(array('status'=>false));
      }
    }
    public function saveAttrAjax(Request $req){
      $id= $req->id;
      $name= $req->name;
      $init= $req->init;
      $attr = Attribute::where('id',$id)->where('type',1)->first();

      if(sizeof($attr)){
          $li_attr = Attribute::where('name',$name)->get();
           $li_filter = Filter::where('name',$name)->get();
           $cur_name = $attr->name;
        DB::beginTransaction();
        try {
            DB::table('attributes')->where('name',$cur_name)->update(array('name'=>$name,'init'=>$init));
            DB::table('filters')->where('name',$cur_name)->update(array('name'=>$name));
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
        $attr = Attribute::where('id',$id)->where('type',1)->first();
        return json_encode(array('status'=>true,'attr'=>$attr));
      }else{
        return json_encode(array('status'=>false));
      }
    }
    // ajax province
    public function ajaxProvince(Request $req){
      $id = $req->id;
      $district = District::where('provinceid',$id)->where('price','=',0)->orderBy('name','asc')->get();
      $html = view('backend.transpost.ajax-province',['district'=>$district]);

      return json_encode(array('status'=>true,'html'=>$html."",'id'=>$id));
    }

    

    
}
