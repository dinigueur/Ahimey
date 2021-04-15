<?php
use Illuminate\Support\Facades\DB;
use App\Models\Category;

// function getCategories(){

// 	$categories = Category::all();
  	
//   	return $categories;
// }


function getCategories() {

	$categories = DB::table('products')->join('brands', 'brands.id', '=', 'products.brand_id')
                                      ->join('categories', 'categories.id', '=', 'brands.category_id')
                                      ->groupBy('brands.id', 'categories.name')
                                      ->select('categories.name')
                                      ->distinct()
                                      ->havingRaw("COUNT(*) >= ?", [5])
                                      ->orderBy('categories.name')
                                      ->get();
  	
  	return $categories;
    
}

function getBrands() {

	$brands = DB::table('products')->join('brands', 'brands.id', '=', 'products.brand_id')
                                  ->join('categories', 'categories.id', '=', 'brands.category_id')
                                  ->select(DB::raw("COUNT(*)"), 'brands.name AS brandName', 'categories.name AS categoryName', 'brands.id')
                                  ->groupBy('brands.id', 'brands.name', 'categories.name')
                                  ->havingRaw("COUNT(*) >= ?", [5])
                                  ->orderBy('brands.name')
                                  ->get();

    return $brands;
}