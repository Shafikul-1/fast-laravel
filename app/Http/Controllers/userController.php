<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function vald(UserRequest $req) {
        // $res = $req->validate([
        //     'fname' => 'required',
        //     'lname' => 'required',
        //     'number' => 'required|numeric|size:11',
        //     'email' => 'required|email',
        //     'pass' => 'required|alpha_num',
        //     'country' => 'required',
        // ], [
        //     'country.required' => 'Must be country num added'
        // ]);

        // return $req->all();
        // return $req->only(['fname', 'lname']);
        return $req->except(['fname', 'lname']);
    }
}
