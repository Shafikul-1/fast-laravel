<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // // Proper way data get. ``with`not white space`` Specific Column
        // $getData = Video::with("post:title,description,id")->get(['title', 'description', 'post_id']);


        // // Get data Specific Column
        // $getData = Video::select(["title","description","id"])->get();


        // // Get data other table Specific Column
        // $getData = Video::with(["post" => function ($query){
        //     $query->select("title", "description", "id");
        // }])->get();


        // // Get data video table and other table Specific Column
        // $getData = Video::with(["post" => function ($query){
        //     $query->select("title", "description", "id");
        // }])->get(['title', 'description', 'post_id']);


        // // Get data video table and other table Specific Column 
        // $getData = Video::select('title', 'description', 'post_id')->with(["post" => function ($query) {
        //     $query->select("title", "description", "id");
        // }])->get();


        // // Get data video table and other table Specific Column with condition Other Table
        // $getData = Video::select('title', 'description', 'post_id')->withWhereHas("post" , function ($query) {
        //     $query->select("title", "description", "id")->where('title', 'LIKE', "A%");
        // })->get();


        // // Get data video table and other MULTI table Specific Column 
        // $getData = Video::select('title', 'description', 'post_id')->with([
        //     "post" => function ($query) 
        //     {
        //         $query->select("title", "description", "id")->where('title', 'LIKE', "A%");
        //     },
        //     // "otherTable" => function ($query) 
        //     // {
        //     //     //...Other condition or column name and get data
        //     // }
        // ])->get();


        // // Model file bola ase kon kon column data get hobe
        // $getData = Video::with("post")->get();


        // // Model file bola ase kon kon table ar data get hobe
        // $getData = Video::select(['title', 'description', 'post_id'])->get();


        // // Model file bola ase kon kon table ar data get hobe jodi Specific table ar data aikhan a fetch na kori tahole bolte hobe `withOut` ja `protected $with ` a table name bola ase
        // $getData = Video::withOut("post")->where('title', 'LIKE', "T%")->get();


        // // `protected $with` jodi thake onek table add kora tahole Specific table ar data jodi cai tahoel `withOnly` Use korte hobe ja model file ar function name
        // $getData = Video::withOnly("post")->get();
        // $getData = Video::withOnly("post")->where('title', 'LIKE', "T%")->get();


        // // age sob data fetch kora hoyce then abar fetch query na likhe `LOAD` method use korte hobe
        $getData = Video::all();
        $getData->load("post");

        return $getData;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Video::create([
            'title' => fake()->paragraph(1),
            'description' => fake()->text(),
            'url' => fake()->url(),
            'post_id' => 4
        ]);
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
