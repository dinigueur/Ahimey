<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['payment_id', 'amount', 'user_id'];

    public function delivery(){

        return $this->hasOne('App\Models\Delivery');
    }

    public function products() {

        return $this->belongsToMany('App\Models\Product');
    }
}
