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

  public function scopeGetProductCategories($query, $id, $take)
  {
    return $query->find($id)->products->take($take)->toArray();
  }

//---------------------------------------------

//---------------------------------------------
  
  public function scopeBrandInCategory($query, $id)
  {
    return  $query->find($id)->brands->toArray();
  }

//---------------------------------------------

  
}
