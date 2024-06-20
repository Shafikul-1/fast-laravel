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

    public function insertData() {
        $user = DB::insert("INSERT INTO users (name, email, age, city) VALUE (?, ?, ?, ?)", ['shafikul', 'shafikul@gmail.com', 34, 2]);
        return $user;
    }

    public function updateData() {
        $user = DB::update("UPDATE users SET name = 'Shaifkul Islam Test' WHERE id = ?", [4]);
        return $user;
    }

    public function deleteData() {
        $user = DB::delete("DELETE FROM users WHERE id = ?", [4]);
        return $user;
    }
}
