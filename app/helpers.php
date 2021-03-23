<?php
use Illuminate\Support\Facades\DB;
use App\Models\Category;

function getCategories(){

	$categories = Category::all();
  	
  	return $categories;
}
