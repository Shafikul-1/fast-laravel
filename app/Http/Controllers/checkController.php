<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class checkController extends Controller
{
    public function login(){
        return view('login');
    }

    public function checking(Request $request){
        // return dd($request);
        $credentials  = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
dd($credentials);
        if(Auth::attempt($credentials)){
            dd('Authentication successful');
            return redirect()->route('index')->with('msg', 'login successful');
        }  else{
            return redirect()->back()->withErrors(['msg' => 'Login failed. Please check your credentials.']);
        }
    } 

}
