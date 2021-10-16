<?php 

namespace App\Repositories;

use App\Models\product;
use Illuminate\Support\Facades\DB;

class HomeRepository implements HomeRepositoryInterface{

    public function productCategory($id){

     return $product = DB::table('products')
     ->selectRaw('products.*,images.*')
     ->join('images','products.id' ,'=', 'images.imageable_id')
     ->where('products.category_id' ,$id)->orderBy('products.id', 'desc')->take(6)->get()->toArray();

    }
  

    public function topProduct($id,$table){
        return   $product = DB::table($table)
        ->selectRaw('products.*, images.*,count(*) as count, '.$table.'.product_id'  )
        ->join('products','products.id','=',   "$table".'.product_id')
        ->join('images','images.imageable_id', '=' ,'products.id')
        ->where('products.category_id', $id)
        ->groupBy('product_id')
        ->orderBy('count' , 'desc')->take(6)->get()->toArray();
    }
    public function search($search)

    {
        return   product::Where('name', 'LIKE', "%{$search}%")->orWhere('price', 'LIKE', "%{$search}%")
        ->get()->toArray();
    }
}
