<?php

namespace App\Http\Controllers;




use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){

        if(Auth::attempt($request->only('email', 'password'))) {
            return redirect('home');
        }

        return redirect('login')->withError("Login Detaild are not valid ");
    }

    public function register_view(){
        return view('auth.register');
    }

    public function register(Request $request){

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        if(Auth::attempt($request->only('email','password'))) {
            return redirect('home');
        }

        return redirect('register')->withError("Error");

    }

    public function home(){
        return view('home');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return view('auth.login');
    }
}
