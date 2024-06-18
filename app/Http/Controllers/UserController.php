<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function getData () {
        $datas = DB::table('users')->orderBy('id')->cursorPaginate(5);
        return view('home', ['data' => $datas]);
    }
}
