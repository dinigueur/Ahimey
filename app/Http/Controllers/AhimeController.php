<?php

namespace App\Http\Controllers;

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
    	return view('pages/details', compact('product', 'title'));
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

}
