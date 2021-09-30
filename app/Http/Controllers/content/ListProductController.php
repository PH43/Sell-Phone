<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\brand_category;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListProductController extends Controller
{
    public function productCategories(Request $rq)
    {


        //------------------------------
        if ($rq->has('cate') && (!$rq->has('brands'))) {
            $query = category::with(['products' => function ($q) use ($rq) {

                if ($rq->has('colum') && $rq->has('type')) {
                    $q->orderBy("$rq->colum", "$rq->type");
                }
                if ($rq->has('min') && $rq->has('max')) {
                    $q->whereBetween('price', ["$rq->min", "$rq->max"]);
                }

                if ($rq->has('take')) {
                    $q->offset((($rq->take - 1) * 4))->take(4);
                } else {
                    $q->take(4);
                }
            }])->where('id', 1)->withCount('products')->get();
        }

        //------------------------------
        if ($rq->has('cate') && $rq->has('brands')) {

            $brands = explode(',', $rq->get('brands'));

            $query = brand_category::with(['products' => function ($q) use ($rq) {

                if ($rq->has('colum') && $rq->has('type')) {

                    $q->orderBy("$rq->colum", "$rq->type");
                }
                if ($rq->has('min') && $rq->has('max')) {

                    $q->whereBetween('price', ["$rq->min", "$rq->max"]);
                }

                if ($rq->has('take')) {
                    $q->offset((($rq->take - 1) * 4))->take(4);
                } else {
                    $q->take(4);
                }
            }])->whereIn('brand_id', $brands)
                ->where('category_id', $rq->cate)
                ->withCount('products')

                ->get();
        }
        $brandCategory = $query->toArray();
        $sum = $query->sum('products_count');
    

        //------------------------------

        if ($rq->ajax()) {
            $brandCategory['sum'] = $sum;
            return response()->json($brandCategory);
        } else {

            $brands = category::BrandInCategory($rq->cate);

            return view('content/body/listProduct', compact('brandCategory', 'brands', 'sum'));
        }
    }
}
