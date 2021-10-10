<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_information extends Model
{
    protected $fillable = ['customer_name','address','number_phone','email','order_id'];
    use HasFactory;
}
