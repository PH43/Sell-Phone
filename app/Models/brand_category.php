<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand_category extends Model
{
    const TABLE = 'brands_categories';
    protected $table = self::TABLE;
    use HasFactory;

  
   
}
