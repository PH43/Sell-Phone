<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\discountRequest;
use App\Models\brand;
use App\Models\brand_category;
use App\Models\category;
use App\Models\discount;
use App\Models\order_detail;
use App\Models\product;
use App\Models\rating;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageProductController extends Controller
{

    public function Admin(Request $rq)
    {

        $products =    product::with('image')->where('category_id', 1)
            ->take(6)->orderBy('id', 'desc')->get()->toArray();

        $category = category::with(['brands' => function ($q) use ($rq) {
            if ($rq->has('category')) {
                $q->where('category_id', $rq->category);
            }
        }])->get()->toArray();

        if ($rq->ajax()) {

            return response()->json($category);
        } else {
            return view('admin/body/insertProduct', compact('category', 'products'));
        }
    }
    public function insertProduct(Request $rq)
    {

        $product = product::create([
            'name' => "$rq->name",
            'price' => $rq->price,
            'quantity' => $rq->qty,
            'description' => "$rq->description",
            'category_id' => $rq->category_id,
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
    public function insertBrand(Request $rq)
    {
        $product = brand::where('name', "$rq->brand")->get()->toArray();

        if ($product != '') {
            $brand =   brand::create(['name' => $rq->brand]);
            foreach ($rq->categories as $cate) {
                brand_category::create([
                    'brand_id' => $brand->id,
                    'category_id' => $cate
                ]);
            }
            $message = "insert thành công";
        } else {
            $message = " fails";
        }
        return response()->json($message);
    }
    public function delete($id)
    {
        order_detail::where('product_id', $id)->delete();
        rating::where('product_id', $id)->delete();
        product::find($id)->delete();

        return  redirect()->back();
    }
    public function update(Request $rq)
    {
        $product = product::find($rq->product_id);
        $product->name = $rq->name;
        $product->price = $rq->price;
        $product->quantity = $rq->qty;
        $product->description = $rq->description;
        $product->save();
        return redirect()->back();
    }
}
