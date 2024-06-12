<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function user(){
        return "<h2>Test Project</h2>";
    }

    public function show( string $name){
        return view('show', compact('name'));
    }
}
