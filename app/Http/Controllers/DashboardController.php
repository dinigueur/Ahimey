<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){

        $title = 'Index';
        return view('/dashboard/index', compact('title'));
    }
}
