<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        return dd($request->all());
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

        return redirect('/register');
    }
}
