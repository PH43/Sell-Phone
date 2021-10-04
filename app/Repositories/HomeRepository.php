<?php 

namespace App\Repositories;

use App\Models\product;

class HomeRepository implements HomeRepositoryInterface{

    public function productCategory($id){

     return   product::with('image')->where('category_id', $id)->take(6)->get()->toArray();

    }
    public function search($search)

    {
        return   product::where('name', 'LIKE', "%{$search}%")
        ->orWhere('price', 'LIKE', "%{$search}%")->get();
    }
}
