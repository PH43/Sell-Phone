<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
  use HasFactory;
  protected  $fillable = ['name', 'email', 'star', 'product_id'];
  public function products()
  {
    return $this->belongsTo(product::class);
  }
}
