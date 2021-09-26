<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
  use HasFactory;
  public function brands()
  {
    return $this->belongsToMany(brands::class, 'brands_categories');
  }

  public function products()
  {
    return $this->hasManyThrough(products::class, brands_categories::class);
  }

  public function scopeGetProductCategories($query, $id, $take)
  {
    return $query->find($id)->products->take($take)->toArray();
  }

  public function scopeProductInCategory($query, $colum, $type, $qty, $cate)
  {
  return  $query->with(['products' => function ($q) use ($colum, $type, $qty) {
      $q->orderBy($colum  , $type)->take($qty);
    }])->where('id', $cate)->get()->toArray();

  }

  public function scopeBrandInCategory($query,$id)
  {
  return  $query->with('brands')->find(1)->get()->toArray();
 
  }

  public function scopeProductInBrandInCategory($query,  $colum, $type, $brands, $category)
  {

    $query->with(['brands' => function ($query) use ($brands, $colum, $type) {
      $query->with(['products' => function ($q) use ($colum, $type) {
        $q->orderBy($colum, $type);
      }])->whereIn('brands.id', $brands);
    }])->where('id', $category)->get()->toArray();

    return $query;
  }
}
