<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudent(){
        $student = DB::table('students')->get();
        // dd($student);
        // return $student;

        return view('allData', ['data' => $student]);
    }

    public function singleStudent($id){
        $student = DB::table('students')->where('id', $id)->get();
        return view('singleStudent', ['singleUser' => $student]);
        // return $student;
    }
}
