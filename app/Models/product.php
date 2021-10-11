<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['name', 'price', 'quantity', 'description', 'category_id', 'brand_id'];
    const TABLE = 'products';
    protected $table = self::TABLE;
    use HasFactory;
    public function categories()
    {
        return $this->belongsTo(category::class,'category_id');
    }
    public function brands()
    {
        return $this->belongsTo(brand::class);
    }
    public function comment()
    {
        return $this->hasMany(comment::class);
    }

    public function image()
    {
        return $this->morphOne(image::class, 'imageable');
    }
    public function order_details()
    {

        return $this->hasMany(order_detail::class, 'product_id','id');
    }
    public function ratings()
    {
        return $this->hasMany(rating::class);
    }
}
