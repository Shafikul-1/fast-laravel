<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function allUser()
    {
        $allUser = User::all();
        // return $allUser;
        return view('alluser', compact('allUser'));
    }

    public function addeduser(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'role' => 'required|string'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
        ]);
        return redirect()->route('alluser')->with('msg', 'user added successful');
    }

    public function login(){
        return view('login');
    }

    public function adduser(){
        return view('addUser');
    }

    public function checkUser(Request $request): RedirectResponse
    {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($credential)) {
            return redirect()->route('dashboard')->with('msg', 'login successful');
        } else {
            return redirect()->route('login')->with('msg', 'login fai9ed');
        }
    }

    public function singleUser( $id)
    {
        $singleUserData = User::find($id);
        return view('singleUser', compact('singleUserData'));
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        } else{
            return redirect()->route('login')->with('msg', 'login fai9ed');  
        }
    }

    public function deleteUser( $id)
    {
        $del = User::find($id)->delete();
        if ($del) {
            return redirect()->route('alluser')->with('msg', 'User Delete successful');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('alluser')->with('msg', 'Logout successful');
    }
}
