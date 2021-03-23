<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){

        $search = $request->search;
        // dd('vv');
        return view('pages/search', compact('search'));
    }
}
