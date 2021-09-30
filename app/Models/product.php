<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public function scopeSearchProduct($query, $search){
   $query->where('name' ,'like',"$search")->get();
    }
}
