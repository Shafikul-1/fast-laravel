<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function insertData()
    {
        $user = DB::table('users')->updateOrInsert(
            [
                'name' => 'shafikul',
                'email' => 'shafikul@gmail.com'
            ],
            [
                'number' => '01882161359'
            ]
        );

        if ($user) {
            echo "<h3>Insert data successful</h3>";
        } else {
            echo "<h3>Insert not insert</h3>";
        }
    }

    public function updateData()
    {
        // $user = DB::table('users')->where('id', 4)->update([
        //     'name' => 'runjilassss',
        //     'email' => 'runjilassss@gmail.com'
        // ]);
        $user = DB::table('users')->where('id', 6)->increment('number', 4);

        if ($user) {
            echo "<h3>increment data successful</h3>";
        } else {
            echo "<h3>increment not increment</h3>";
        }
        
    }

    public function deleteData (string $id){
        $user = DB::table('users')->where('id', $id)->delete();
        if ($user) {
            echo "<h3>delete data successful</h3>";
        } else {
            echo "<h3>delete not delete</h3>";
        }
    }
}
