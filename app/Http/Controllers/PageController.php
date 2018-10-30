<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Session;
use Redirect;
use App\Post;
use DB;
use App\Contact;
use Mail;
use App\Order;
use App\OrderItem;

use App\CategoryProduct;
use App\Category;
use App\Filter;
use App\FilterPrice;
use App\Attribute;
use App\ProductAttribute;
use App\Product;
use App\ContentProduct;
use App\ProductInCategory;
use App\ProductImage;
use App\Form;
use App\System;

use App\Account;
use App\CommentPost;
use App\CommentProduct;

class PageController extends Controller {

   public function index(){
   }
   public function getDanhmuc(){
   }

   public function getBaiViet($id = null, $slug =null){
   }

   public function getSearch(Request $req){
   	
   }
   public function FilterSearch(Request $req){
   		
   }
   public function getDanhmucSanpham($slug =null){
		
   }
   public function Filter(Request $req){
   		
   }


   public function getChitietSanpham($id = null){
   }
   public function getChitietSanphamSlug($id = null, $slug =null){
   		
   }
   public function getGiohang(){
   }
	public function getProductAjax(Request $req){
	}
	public function addCart(Request $req){
	
	}
	public function removeCart(Request $req){
		
	}
	public function orderProduct(Request $req){
		
	}
	public function tuvanSanpham(Request $req){
		
	}
	public function dangkyuudai(Request $req){

	}
	public function addCommentToPost(Request $req){
		 
	}
	public function getAjaxCommentProduct(Request $req){
	
	}
}