<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Flashy;
use App\Models\User;
use Carbon\Carbon;

class UserAuthController extends Controller
{
    function create(){

        $title = 'Inscription';
        return view('auth.register', compact('title'));
    }

    function register(Request $request){

        // Valider les infos;
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',
            'address' => 'required',
            'password' => 'required|min:8|max:12',
        ]);

        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'confirmationToken' => Str::random(12),
            'password' => bcrypt($request->password),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            //'remember_token' => Str::random(10),
        ]);

        Flashy::success('Vous êtes maintenant membre Ahimey');

        return redirect(route('index'));
    }

    function create2(){

        $title = 'Connexion';
        return view('auth.login', compact('title'));
    }

    function login(Request $request){

        $request->validate([

            'username' => 'required|email',
            'password' => 'required|min:8|max:12',
        ]);

        // dd('bb');
        return redirect()->route('index');
    }
}
