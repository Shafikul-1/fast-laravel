<?php

namespace App\Http\Controllers;

use App\Models\Json;
use Illuminate\Http\Request;

class JsonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $getData = Json::get();
        // $getData = Json::where('json_data->name', 'Ms. Raina Rosenbaum')->get();
        // $getData = Json::where('json_data->address->city', 'Vidalfort')->get();
        $getData = Json::whereJsonContains('json_data->address->city', 'Vidalfort')->get();
        return $getData;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*
        Insert Json Data
        */
        // $inserData = Json::create([
        //     'json_data' => [
        //         'name' => fake()->name(),
        //         'email' => fake()->email(),
        //         'address' => [
        //             'city' => fake()->city(),
        //             'country' => fake()->country(),
        //             'country_code' => fake()->countryCode(),
        //         ],
        //         'security' => [
        //             'uuid' => fake()->uuid(),
        //             'mac_address' => fake()->macAddress(),
        //             'ip_address' => $_SERVER['REMOTE_ADDR']
        //         ]
        //     ]
        // ]);




        /*
        Update Json Data
        */
        // $updateData = Json::where('json_data->address->city', 'Bangladesh')->update([
        //     'json_data->address->city' => 'India'
        // ]);
        
        
        /*
        Delete Json Data
        */
        $Delete = Json::find(2);
        $Delete->json_data = collect($Delete->json_data)->forget('email');
        $Delete->save();
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
