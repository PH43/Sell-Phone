<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    protected $table = "brands";
    use HasFactory;
    public function categories(){
        return $this->belongsToMany(categories::class ,'brands_categories');
      }
      public function products(){
        return $this->hasManyThrough(products::class , brands_categories::class);
      }
}
