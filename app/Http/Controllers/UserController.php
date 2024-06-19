<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function getData()
    {
        $datas = DB::table('users')
            ->join('cities', 'cities.id', '=', 'users.city')
            ->select(DB::raw('count(*) as total_users'), 'cities.city_name')
            // ->count();
            ->groupBy('city_name')
            // ->where('users.name', 'like', 's%')
            // ->having('total_users', '<', '4')        // 👉 *Use Group age* select a new row sql command  add hole setar conditon a having use
            ->havingBetween('total_users', [2, 3])      // 👉 *Use Group age* range add korte caile havingbetween use
            // ->orderBy('users.id')
            // ->cursorPaginate(5);
            ->get();
        return $datas;
        // return view('home', ['data' => $datas]);
    }

    // union
    public function unionData()
    {
        $fast = DB::table('users')
            ->where('age', '>', '30');

        $second = DB::table('latuchers')
            ->union($fast)
            ->where('age', '>', '30')
            ->get();

        return $second;
        // return view('viewfile', ['data' => $second]);
    }

    public function whenData()
    {
        $user = DB::table('users')
            ->when(false, function ($query) {
                $query->where('age', '>', '30');
            }, function ($query) {
                $query->where('age', '<', '30');
            })
            ->get();


        return $user;
        // return view('viewfile', ['data' => $user]);
    }
}
