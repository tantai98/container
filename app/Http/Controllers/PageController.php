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
use Carbon\Carbon;

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
      $cate = DB::table('post_category')
         ->select('categories.*',DB::raw('count(post_id) as total'))
         ->leftJoin('categories','categories.id','=','post_category.category_id')
         ->groupBy('category_id')->get();

      $post = DB::table('posts')->where('posts.id',$id)
         ->leftJoin('contents','posts.id','=','contents.post_id')->first();
      return view('frontend.pages.post',compact('post','cate'));
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
      $id = DB::table('category_products')->where('prefix',$slug)->first();
      $products = App\Product::getProductByCategory($id->id);
	  return view('frontend.pages.category',compact('products'));
   }
   public function Filter(Request $req){
   		
   }
   public function getChitietSanphamSlug($id = null, $slug =null){
      $cate = DB::table('category_products')
         ->select('category_products.*',DB::raw('count(product_id) as total'))
         ->join('product_category','category_products.id','=','product_category.cate_pro_id')
         ->groupBy('cate_pro_id')->get();
      $products = App\Product::getProductById($id);
      return view('frontend.pages.product',compact('products','cate'));
   }
   public function ajaxContact(Request $request){
      $data = $request->all();
      DB::table('customers')->insert(
         [
            'name' => $data['First_Name'].$data['Last_Name'], 
            'email' => $data['Email'],
            'phone' => $data['Number'],
            'nameCompany' => $data['Message'],
            'created_at' => Carbon::now(),
         ]
      );

      return response(['status'=>true]);
   }

   public function customerContact() {
      $customer = DB::table('customers')->get();
      return view('backend.customer.listCustomer',compact('customer'));
   }

   public function getPostCategory($slug = null) {
      $idCategorie = App\Post::getIDCate($slug);
      $posts = App\Post::getPostByCategory($idCategorie->id);
      return view('frontend.pages.category_post',compact('posts'));
   }
}