<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
protected $fillable = ['name', 'price', 'quantity', 'description', 'brand_category_id'];

    use HasFactory;
    public function brand_category( ){
        return $this->belongsTo(brand_category::class);

    }
    public function image()
    {
        return $this->morphOne(image::class, 'imageable');
    }


    public function scopeSearchProduct($query, $search){
   $query->where('name' ,'like',"$search")->get();
    }
}
