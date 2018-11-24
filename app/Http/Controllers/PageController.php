<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Session;
use Redirect;
use DB;
use App;


class PageController extends Controller {

   public function index(){
      // get infor category moi truong lam viec
      $idCategorie = App\Post::getIDCate('moi-truong-lam-viec');
      $posts =  App\Post::getPostByCategoryParent($idCategorie->id);
      $categorieChilds = App\Post::getCategoryByParentId($idCategorie->id);
      // get infor category moi truong lam viec
      $idCategorieProject = App\Post::getIDCate('du-an');
      $postsProject =  App\Post::getPostByCategoryParent($idCategorieProject->id);
      // get infor category category product
      $categoryProducts = App\CategoryProduct::getCateHome();
      $products = App\Product::getProductHome();

      return view('frontend.pages.home',compact(
         "posts",
         "categorieChilds",
         "postsProject",
         "products",
         "categoryProducts"));
   }
   public function getCategory(Request $request) {
      $posts = DB::table('post_category')
         ->select("posts.id","posts.img","posts.title","posts.slug")
         ->leftJoin('posts','post_category.post_id','=','posts.id')
         ->where('post_category.category_id', $request->get('id'))->get();
      $html = view('frontend.ajax_partial.ajax_env',['posts'=>$posts]);
      return json_encode(array('status'=>true,'html'=>$html.""));
   }

   public function getBaiViet($id = null, $slug =null) {
      
      $post = DB::table('posts')->where('posts.id',$id)
         ->leftJoin('contents','posts.id','=','contents.post_id')->first();
      return view('frontend.pages.post',compact('post'));
   }

   public function getCategoryProductHome(Request $request) {
      $products = App\Product::getProductHomeByCategory($request->get('id'));
      $html = view('frontend.ajax_partial.ajax_pro',['products'=>$products]);
      return json_encode(array('status'=>true,'html'=>$html.""));
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
      // dd($id,$slug);
      $products = App\Product::getProductById($id);
      return view('frontend.pages.product',compact('products'));
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