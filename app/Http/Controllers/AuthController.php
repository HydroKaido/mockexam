<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerLink(){
        return view('Auth.register');
    }
    public function loginLink(){
        return view('Auth.login');
    }
    public function register(Request $request){
        $request -> validate([
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation'=> 'required|'
        ]);
        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
            return redirect('/login');
    }

    public function login(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($credentials)){
            return redirect('/');
        }
    }



    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
    public function createBlog (){
        return view('page.blogcreate');
    }
}
