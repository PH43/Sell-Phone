<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\discountRequest;
use App\Models\brand_category;
use App\Models\category;
use App\Models\discount;
use App\Models\product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
      
        $product = product::create([
        'name' => "$rq->name",
        'price' => $rq->price,
        'quantity' => $rq->qty,
        'description' => "$rq->description",
        'category_id'=> $rq->category_id,
        'brand_id'  =>  $rq->brand_id,
   
        ]);

        $image = $rq->file('image');
 
        $ImageName = time() . '-' . $rq->name . '.' . $image->getClientOriginalExtension();
   
        $product->image()->create([
            'url' => $ImageName,
        ]);
        $image->move(public_path('images/productImages'), $ImageName);
        return response()->json();
    }
    public function discount(){
       $day = Carbon::now()->toDateString();
        
        return view('admin/body/discount', compact('day'));
    }

    public function insertDiscount(Request $rq){
   //  $validated = $rq->validated();
       
        discount::create(
            ['name' => $rq->name,
             'init' => $rq->init,
             'value' => $rq->value,
             'start_date' => $rq->start_date,
             'end_date' => $rq->end_date,
            ]
        );
        return redirect()->route('admin-discount')->with(['success' =>  'Thêm thành công']);

        
        
    }
}
