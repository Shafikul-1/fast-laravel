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

    public function deleteStudent(string $id)
    {
        $student = DB::table('students')->where('id', $id)->delete();
        if ($student) {
            return redirect()->route('alluser');
        } else {
            echo "<h3>delete not delete successful</h3>";
        }
    }
}
