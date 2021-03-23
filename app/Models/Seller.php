<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = ['identityCard', 'identityNumber', 'selfie', 'identityAddress', 'user_id'];

    public function user() {

        return $this->belongsTo('App\Models\User');
    }

    public function shops() {

        return $this->hasMany('App\Models\Shop');
    }
}
