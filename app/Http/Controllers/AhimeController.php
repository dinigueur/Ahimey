<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Shop;

class AhimeController extends Controller
{
    public function index(){

        $products = Product::inRandomOrder()->simplePaginate(8);
        // dd($products);
    	$sliders = Slider::all();
    	$shops = Shop::all();
    	return view('index', compact('sliders','products', 'shops'));
    }

    public function details(Product $product){

    	$title = 'Details Produit';
        $other_products = Product::where('brand_id', $product->brand_id)->get();
    	return view('pages/details', compact('product', 'title', 'other_products'));
    }

    public function create(){

        $categories = Category::all();
        $title = 'créer boutique';
        return view('pages/shop/create', compact('title', 'categories'));
    }

    public function visit(Shop $shop){

        $title = $shop->name;
        return view('pages/shop/visit', compact('title', 'shop'));
    }

    public function wishlist(Brand $brand){

        $products = Product::inRandomOrder()->where('brand_id', $brand->id)->paginate(8);
        $title = $brand->name;

        return view('pages/wishlist', compact('products', 'brand', 'title'));
    }

    public function service(){

        $title = 'Nos services';
        return view("pages/services", compact('title'));
    }

}
