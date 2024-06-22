<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function vald(Request $req) {
        $res = $req->validate([
            'fname' => 'required',
            'lname' => 'required',
            'number' => 'required|numeric|size:11',
            'email' => 'required|email',
            'pass' => 'required|alpha_num',
            'country' => 'required',
        ], [
            'country.required' => 'Must be country num added'
        ]);

        return $req;
    }
}
