<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'shippingAmount', 'output', 'order_id', 'user_id'];

    public function order() {

        return $this->belongsTo('App\Models\Order');
    }

    public function user() {

        return $this->belongsTo('App\Models\User');
    }
}
