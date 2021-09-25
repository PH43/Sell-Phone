<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    public function brands(){
        return $this->belongsToMany(brands::class ,'brands_categories');
      }
    
      public function products(){
        return $this->hasManyThrough(products::class , brands_categories::class);
      }
    
}
