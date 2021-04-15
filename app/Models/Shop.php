<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    use HasFactory;

    protected $fillable = ['name', 'number', 'domain', 'address', 'logo', 'address', 'confirmationToken', 'paper_validate', 'paper_RCCM', 'user_id'
    ];

    public function products() {

        return $this->hasMany('App\Models\Product');
    }

    public function seller() {

        return $this->belongsTo('App\Models\Seller');
    }

    public function user() {

        return $this->belongsTo('App\Models\User');
    }
}
