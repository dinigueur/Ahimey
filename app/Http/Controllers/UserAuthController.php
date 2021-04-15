<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;

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
            'password' => 'required|confirmed|min:8|max:12',
        ]);

        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'confirmationToken' => Str::random(12),
            'password' => Hash::make($request->password),
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

            'email' => 'required|email',
            'password' => 'required|min:8|max:12',
        ]);

        // adeline@1995
        $compte = User::where('email','=', $request->email)->first();
        if($compte){
            $credentials = $request->only('email', 'password');
            if(Auth::attempt($credentials)){

                flashy()->success('Vous êtes bien connecté');
                return redirect(route('dashboard'));
            }
            else{
                flashy()->error('Votre mot de passe est incorrecte');
                return back();
            }
        }
        else{

            flashy()->info('Pas de compte pour ce mail');
            return back();
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('index');
    }
}
