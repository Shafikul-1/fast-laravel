<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function getData() {
    //    $user = DB::select("SELECT * FROM users WHERE name LIKE ?", ["d%"]);
    
    //    $user = DB::select("SELECT * FROM users WHERE name LIKE ? AND age < ?", ["d%", 11]);

       $user = DB::select("SELECT * FROM users WHERE id = :id ", ['id' => 8]); // WHERE id = 👉:id  AND  [👉'id' => 8] duel word same requred
       return $user;

    //    return view('viewfile', compact('user'));
    }
}
