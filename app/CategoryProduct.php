<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CategoryProduct extends Model
{
    protected $table= "category_products";
    public function parent(){
    	return $this->belongsTo('App\CategoryProduct', 'parent_id');
    }
     public function fetchAll(){

        $result =Cache::remember('category_show_cache',1, function(){
            
             return $this->get();
        });

       return $result;       
    }
    public function subcategory(){
    	return $this->hasMany('App\CategoryProduct', 'parent_id');
    }
    public function products(){
        return $this->belongsToMany('App\Product', 'product_category', 'cate_pro_id', 'product_id');
    }
    public function products_public(){
        return $this->belongsToMany('App\Product', 'product_category', 'cate_pro_id', 'product_id')->where('status',1)->orderby('created_at','desc');
    }
    public function getsubcate(){

    	return $this->hasMany('App\ProductInCategory', 'cate_pro_id');
    }
    public static function getCateHome() {
        return DB::table("category_products")->orderby("created_at")->limit(6)->get();
    }
}
