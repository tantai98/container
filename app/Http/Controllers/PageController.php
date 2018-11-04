<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Session;
use Redirect;

use DB;
use App\Menu;


class PageController extends Controller {

   public function index(){dd(1);
      $menu = Menu::getAllMenu();
      dd($menu);
      return view('frontend.pages.home');
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