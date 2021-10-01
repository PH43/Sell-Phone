<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
  use HasFactory;
  protected $table = "categories";
  public function brands()
  {
    return $this->belongsToMany(brand::class, 'brands_categories');
  }

  public function products()
  {
    return $this->hasManyThrough(product::class, brand_category::class);
  }


  //----------------------------------------------------

 

public function scopeproductCategory($query, $id,$take){
   return $query->with(['products' => function ($q) use($take) {
    $q->take($take);
         
    $q->with('image');

}])->where('id',$id)->get()->toArray();
}

  public function scopeBrandCategory($query, $id)
  {
    return  $query->with(['brands'])->find(1);
  }

  public function scopecategoryBrand($query, $brand_id, $category_id)
  {
    return  $query->with(['brands' => function ($q) use ($brand_id) {

      $q->where('brand_id', $brand_id);
    }])->where('id', $category_id)->get()->toArray();
  }
  
  //---------------------------------------------


}
