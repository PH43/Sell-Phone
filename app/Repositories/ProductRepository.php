<?php

namespace App\Repositories;

use App\Models\category;
use App\Models\product;


class ProductRepository implements ProductRepositoryInterface
{

    public function categoryProduct($category_id, $brand_id)
    {
        return category::with(['brands' => function ($q) use ($brand_id) {
            $q->where('brand_id', $brand_id);
        }])->where('id', $category_id)->get()->toArray();
    }

    public function detailProduct($id)
    {
        return    product::with('image')->where('id', $id)->get()->toArray();
    }

    public function relatedProduct($name, $id)
    {
        $relatedName  =  substr("$name", 0, 3);
        return  $product['related'] = product::with('image')->where('name', 'LIKE', "%{$relatedName}%")->whereNotIn('id', [$id])->take(5)->get()->toArray();
    }

    public function filterProduct($param)
    {


        if (!empty($param['cate'])) {

            $products = product::with('image')->where('category_id', $param['cate']);
        }
        if (!empty($param['brands'])) {
            $brands = explode(',', $param['brands']);
            $products =   $products->whereIn('brand_id', $brands);
        }
        if (!empty($param['colum']) && !empty($param['type'])) {
            $colum =   $param['colum'];
            $type = $param['type'];
            $products =   $products->orderBy("$colum", "$type");
        }
        if (!empty($param['min']) && !empty($param['max'])) {

            $min = $param['min'];

            $max = $param['max'];

            $products =   $products->whereBetween('price',  [$min, $max]);
        }

        $count = $products->count();

        if (!empty($param['page'])) {
            $page = $param['page'];
            $products = $products->offset(
                ($page - 1) * 10
            )->take(10);
        } else {
            $products = $products->offset(0)->take(10);
        }

        $products =  $products->get()->toArray();


        return     $data = [
            'products' => $products,
            'count' => $count
        ];
    }
}
