<?php

namespace App\Repositories;

use App\Models\category;
use App\Models\product;


class ProductRepository implements ProductRepositoryInterface
{



    public function detailProduct($id)
    {
        return    product::with('image', 'brands', 'categories')->where('id', $id)->get()->toArray();
    }

    public function relatedProduct($name, $id, $category_id)
    {
        $relatedName  =  substr("$name", 0, 3);

        return  $product['related'] = category::with(['products' => function ($q) use ($relatedName, $id) {
            $q->with('image')->where('name', 'like', "%$relatedName%")->whereNotIn('id', [$id])->take(6);
        }])->where('id', $category_id)->get()->toArray();
    }

    public function filterProduct($param)
    {

        $product = product::with('image', 'categories');
        if (!empty($param['search'])) {
            $products = $product->whereRaw('(name like ? or price = ?  
            or exists  
            (select * from `categories` where 
            `products`.`category_id` = `categories`.`id` and `name` like ?))',
                 ["%{$param['search']}%", "{$param['search']}","%{$param['search']}%"]);
        }

        if (!empty($param['cate'])) {

            $products = $product->where('category_id', $param['cate']);
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
        if (empty($param['colum']) && empty($param['type'])) {
            
            $products =   $products->orderBy("id", "desc");
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
                ($page - 1) * 12
            )->take(12);
        } else {
            $products = $products->offset(0)->take(12);
        }

        $products =  $products->get()->toArray();


        return     $data = [
            'products' => $products,
            'count' => $count
        ];
    }
}
