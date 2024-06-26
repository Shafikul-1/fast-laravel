<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserConroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with("company")->with('phoneNumber')->get();
        foreach($users as $key => $value){
            echo "User Name - " . $value->name . "<br>";
            echo "User Email - " . $value->email . "<br>";
            echo "User Number - " . $value->phoneNumber->number . "<br>";
            echo "User Company - " . $value->company->name . "<br>";
            echo "<hr>";
        }
        // echo "User Name - " . $users->name . "<br>";
        // echo "User Email - " . $users->email . "<br>";
        // echo "User Number - " . $users->phoneNumber->number . "<br>";
        // echo "User Company - " . $users->company->name . "<br>";
        // echo "<hr>";

        // return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
