<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Upload::all();
        return view('view', compact('data'));
        // return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,gif,webp,avif,png|max:5000',
            'name' => 'required|string',
            'email' => 'required|email',
            'age' => 'required|numeric'
        ]);
        $file = $request->file('image')->store('image', 'public');
        Upload::create([
            'file_name' => $file,
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email
        ]);

        return redirect()->route('upload.index')->with('msg', 'Upload successful');
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
        $getData = Upload::find($id);
        return view('update', compact('getData'));
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
        $data = Upload::find($id);
        if ($request->hasFile('image')) {
            $deletFilePath = public_path('storage/') . $data->file_name;
            if (file_exists($deletFilePath)) {
                @unlink($deletFilePath);
            }

            $request->validate([
                'image' => 'mimes:jpg,gif,webp,avif,png|max:5000'
            ]);


            $path = $request->image->store('image', 'public');
            $data->update([
                'file_name' => $path
            ]);
        }


        return redirect()->route('upload.index')->with('msg', 'File Update SuccessFul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = Upload::find($id);
        $deleteData->delete();
        // $filePath = public_path('storage/') . $deleteData->file_name; 
        $filePath = public_path("storage/{$deleteData->file_name}");

        // return $filePath;
        if (file_exists($filePath)) {
            @unlink($filePath);
        }
        return redirect()->route('upload.index')->with('msg', 'File Delete SuccessFul');
    }
}
