<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\brand_category;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ManageProductController extends Controller
{
    public function statistical()
    {
        return view('admin/body/body');
    }
    public function showform(Request $rq)
    {
        $category = category::with(['brands' => function ($q) use ($rq) {
            if ($rq->has('category')) {
                $q->where('category_id', $rq->category);
            }
        }])->get()->toArray();

        if ($rq->ajax()) {

            return response()->json($category);
        } else {
            return view('admin/body/insertProduct', compact('category'));
        }
    }
    public function insertProduct(Request $rq)
    {
      
     

        $brandCategory_id =   brand_category::select("id")->where('brand_id', $rq->brand_id)->where('category_id', $rq->category_id)->get()->toArray();
       
     
 
        $product = product::create([
        'name' => "$rq->name",
        'price' => $rq->price,
        'quantity' => $rq->qty,
        'description' => "$rq->description",
        'brand_category_id' => $brandCategory_id[0]['id'],
        ]);

        $image = $rq->file('image');
 
        $ImageName = time() . '-' . $rq->name . '.' . $image->getClientOriginalExtension();
   
        $product->image()->create([
            'url' => $ImageName,
        ]);
        $image->move(public_path('images/productImages'), $ImageName);
        return response()->json();
    }
}
