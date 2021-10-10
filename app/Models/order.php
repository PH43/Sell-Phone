<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = ['time','message','user_id','payment_method','status'];
    use HasFactory;
    public function order_informations(){
        return $this->hasOne(order_information::class);
    }

    public function order_details(){
        return $this->hasOne(order_details::class);
    }
}
