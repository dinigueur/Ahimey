<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'feature', 'description', 'slug', 'truePrice','falsePrice', 'mainImage','shop_id', 'brand_id', 'created_at', 'updated_at'];

    public function shop() {

        return $this->belongsTo('App\Models\Shop');
    }

    public function orders() {

        return $this->belongsToMany('App\Models\Orders');
    }

    public function tags() {

        return $this->belongsToMany('App\Models\Tag');
    }

    public function images() {

        return $this->hasMany('App\Models\Image');
    }
}
