<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        // return dd($request->all());
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function registration(){
        return view('auth.register');
    }
    public function storeRegistration(Request $request){
        // return dd($request->all());
        $user=new User;
        $user-> name= $request->input('name');
        $user-> email= $request->input('email');
        $user-> password= $request->input('password');
        $user -> save();

        return redirect('/login');

    }
}
