<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;
  

    const TABLE = 'brands';
    protected $table = self::TABLE;
   
    public function categories(){
        return $this->belongsToMany(category::class ,'brands_categories');
      }
      public function products(){
        return $this->hasMany(product::class);
      }

   
}
