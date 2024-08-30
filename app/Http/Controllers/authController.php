<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;

class authController extends Controller
{
    //
    public function register(){
        return view('register');
    }
    public function store(Request $request){
       $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',
       ]);

       $user = User::create($data);

       if($user){
         return redirect()->route('login');
          }
    }

    public function login(Request $request){
        $credentials= $request->validate([
            'email'=>'required|email',
            'password'=> 'required'
        ]);
        if(Auth::attempt($credentials)){
             return redirect()->route('dashboard');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
