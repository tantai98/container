<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Frame;
use App\Item;
use App\Attribute;
use App\Product;
use App\Tag_Frame;
use App\TagF;
use App\Filter;
use App\ContentProduct;
use App\ProductInCategory;
use App\ProductImage;
use App\FrameImage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
class FrameController extends Controller
{
    public function createFrame($id){
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
          // $frame_attr = Attribute::where('id',$frame->attribute_id)->first();
         return view('backend.frame.frame',compact('product','content','catIds','images','attr','product_tags','frame_attr'));
      }else{
         return redirect()->back();
      }
    	
    }

    public function editFrame($id=null){
        $frame = Frame::find($id);
        if($frame){
        $attr_frame1 = Attribute::where('id',$frame->attribute_id)->first();
        $product_id = Product::where('id',$frame->product_id)->first();
        // content 
        $content  = ContentProduct::where('product_id',$product_id->id)->get();
        // attr 
        $attr = $product_id->getAttributes_2;
        //danh mục
        $cate = ProductInCategory::where('product_id',$product_id->id)->get();
          $catIds = array();
          foreach ($cate as $cat) {
              $catIds[] = $cat->cate_pro_id;
          }
          $attr = $product_id->getAttributes_2;
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
          // TagF
           $tags= array();
          if($frame->getTagFrames !=null){
               foreach ($frame->getTagFrames as  $tag) {
                   $tags[]= $tag->tag;
                };
               $frame_tags = implode(',', $tags);
          }
          else  $frame_tags = '';
          // ảnh dropzone
           $images = FrameImage::where('frame_id',$frame->id)->get();
            return view('backend.frame.edit-frame',['catIds'=>$catIds,'frame'=>$frame,'attr_frame1'=>$attr_frame1,'product_id'=>$product_id,'frame_tags'=>$frame_tags,'images'=>$images,'content'=>$content,'attr'=>$attr]);
        }else{
            return redirect()->back();
        }
    }

    public function editFramepost(Request $req){
        $product = Product::find($req->products);
        $config_img = array('width'=>223,'height'=>181);
        $config_img_detail = array('width'=>223,'height'=>181);
        $frame = Frame::find($req->id_frame);
        // sửa image
        if($frame){
            $frame->name = $product->name;
            $frame->slug = str_slug($product->name);
            if($req->hasFile('frame_img')){
                $file = array('image' => Input::file('frame_img'));
                $rules = array('image' => 'mimes:jpeg,bmp,png');
                $validator = Validator::make($file, $rules);
                if ($validator->fails()) {
                    
                }else{
                    if(File::exists($frame->img)){
                        File::delete($frame->img);
                    }
                    $file = Input::file('frame_img');
                    $file_name = date('d-m-Y').$file->getClientOriginalName();
                    $file->move(public_path().'/assets/frame/',$file_name);
                    $frame->img = '/assets/frame/'.$file_name;
                    $frame->saveThumb($config_img);
                }
            }else{
                $frame->saveThumb($config_img);
            }
        $frame->description = $req->frame_des;
        $frame->code_frame = $req->code_frame;
        $frame->product_id = $product->id;
        $frame->price = $req->price;
        $frame->price_sale = $req->price_sale;
        $frame->label = $req->label;
        $frame->status = $req->submit;
        $frame->last_edit_by = session('admin')->id;
        $submit = $frame->status;
        $frame_attr = $req->attr;
        if($submit == 'post'){
             $frame->status = 1;
        }else{
             $frame->status = 0;
        }
// sửa ảnh dropxzone
        $img_array = array();
        $img_text = $req->img_product;
        $list_images =  explode(",,,", $img_text);
        foreach ($list_images as $key => $value) {
              if($value){
                  $frameimages =  FrameImage::where('img','=', $value)->first();
                  if(!$frameimages){
                    $frameimages = new FrameImage;
                    $frameimages->frame_id = $frame->id;
                    $frameimages->img = $value;
                    $frameimages->group_name  = "Default";
                    $frameimages->type  = "Frame";
                    $frameimages->saveThumb($config_img_detail);
                    $frameimages->save();
                  }else{
                      $frameimages->saveThumb($config_img_detail);
                  }
                  array_push($img_array, $frameimages->id);
              }               
        }

        $imgs_delete = $frame->getImages()->whereNotIn('id', $img_array)->get();
        foreach ($imgs_delete as  $value) {
          File::delete($value);
          $value->delete();
        }
 // sủa attribute_id
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
         // dd($attrr);
         $sdjgs = Frame::where('product_id',$product->id)->get();
          if($frame->attribute_id == $attrr->id){

          }else{
            foreach ($sdjgs as $key => $value) {
                if($attrr->id == $value->attribute_id){
                    return redirect()->back()->with('error','Thuộc Tính Frame này đã tồn tại');
                }
            }
          }
        
        $frame->attribute_id = $attrr->id;
        
        if($frame->save()){
             $list_id= array();
                    if($req->has('seo_tags')){
                        $tags = explode(',', $req->seo_tags);
                        foreach ($tags as  $tag) {
                            $tagsname = TagF::where('tag','=', trim($tag))->first();
                            if($tagsname ==null){
                              $tags_column = new TagF;
                              $tags_column->tag = trim($tag);
                              $tags_column->save();
                              array_push($list_id, $tags_column->id);
                            }
                            else {
                              array_push($list_id, $tagsname->id);
                            }
                        } 
                        $frame->getTagFrames()->sync($list_id);  
                    }
                    if(!$req->seo_tags){
                      Tag_Frame::where('frame_id',$frame->id)->delete();
                    }
        }
        return redirect()->route('product.list.product')->with('success','Sửa Frame Thành Công');    
        }else{
            return redirect()->back();
        }


    }

    public function postFrame(Request $req){
    	// get ID product
    	$id = $req->product_id;
    	$product = Product::find($id);
    	if(!$product){
    		return redirect()->back()->with('error','Có lỗi xảy ra , vui long thử lại');
    	}
    	// get du lieu product 
    	// lấy dữ liệu cần thiết add -=> frame
    	$config_img = array('width'=>223,'height'=>181);
       	$config_img_detail = array('width'=>223,'height'=>181);
    	$frame = new Frame;
    	$frame->name = $product->name;
    	$frame->slug = str_slug($product->name);
    	$frame->description = $req->product_des;
    	$frame->code_frame = $req->frame_code;
    	$frame->product_id = $id;
    	$frame->price = $req->price;
    	$frame->price_sale = $req->price_sale;
    	$frame->label = $req->label;
    	$frame->status = $req->submit;
    	$frame->create_by = session('admin')->id;
    	$submit = $frame->status;
        if($submit == "post"){
            $frame->status  = 1;
        }else{
            $frame->status  = 0;
        } 

        if($req->hasFile('frame_img')){
            $file = array('image'=>Input::file('frame_img'));
            $rules = array('image'=>'mimes:png,jpeg,bmp');
            $validator = Validator::make($file,$rules);

            if($validator->fails()){
                return redirect()->route('frame.create.frame')->with('error','Tên Ảnh chưa đúng định dạng');
            }else{
                $file = Input::file('frame_img');
                $file->move(public_path().'/assets/frame/',date('d-m-Y').'.'.$file->getClientOriginalName());
                $frame->img = '/assets/frame/'.date('d-m-Y').'.'.$file->getClientOriginalName();
                $frame->saveThumb($config_img);
            }
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
        $frame_product = Frame::where('attribute_id',$attrr->id)->get();
        foreach ($frame_product as $key => $value) {
            if($frame->attribute_id == $value->attribute_id){
                return redirect()->back()->with('error','Thuộc Tính Frame này đã tồn tại');
            }else{
                $frame->attribute_id = $attrr->id;
            } 
        }
        $frame->attribute_id = $attrr->id;
    	if($frame->save()){
    		$img_text = $req->img_product;
    		$list_img = explode(',,,',$img_text);
    			foreach($list_img as $item){
    				if($item){
    					$img_frame = new FrameImage;
    					$img_frame->frame_id = $frame->id;
    					$img_frame->img = $item;
    					$img_frame->group_name  = "Default";
	                    $img_frame->type  = "Frame";
	                    $img_frame->saveThumb($config_img_detail);
	                    $img_frame->save();
					}else{

					}
    			}
           if($req->has('seo_tags')){
                      $tags = explode(',', $req->seo_tags);
                      foreach ($tags as  $tag) {
                          $tagsname = TagF::where('tag','=', trim($tag))->first();
                          if($tagsname == null){
                                $tags_column = new TagF;
                                $tags_column->tag= trim($tag);
                                $tags_column->save();
                                $frame->getTagFrames()->attach($tags_column);
                          }
                          else {
                                $frame->getTagFrames()->attach($tagsname);
                          }
                      }
              }    
    			// Gắn với bảng frame
    		
    	}
    	return redirect()->route('product.list.product')->with('success','Thêm Frame Thành Công');
    }
    public function ajaxListFrame(Request $req){
    	$id = $req->id;
    	$list_frame = Frame::where('product_id',$id)->where('status',1)->orderBy('id','desc')->get();
    	$html = view('backend.frame.ajax-list-frame',['list_frame'=>$list_frame]);
    	return json_encode(array('status'=>true,'html'=>$html.""));
    }

    public function del_frame_post(Request $req){

        $frame = Frame::find($req->id);
        $frame->delete();
        echo "true";
    }
}
