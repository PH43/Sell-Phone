<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand_category extends Model
{
    protected $fillable = ['brand_id','category_id'];
    const TABLE = 'brands_categories';
    protected $table = self::TABLE;
    use HasFactory;

  
   
}
