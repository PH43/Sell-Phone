<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
  use HasFactory;


  const TABLE = 'categories';
  protected $table = self::TABLE;
  public function brands()
  {
    return $this->belongsToMany(brand::class, 'brands_categories');
  }

  public function products(){
    return $this->hasMany(product::class);
  }


  //----------------------------------------------------

 



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
