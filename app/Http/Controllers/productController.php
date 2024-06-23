<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 👉 DB query builder niyon a
        // $allData = DB::table('products')->get();
        $allData = product::orderByDesc('id')->get();

        // 👉 Elecond ORM niyon a 
        // $allData = product::all();
        // $allData = product::find([2, 4, 9], ['name', 'price']);
        // $allData = product::min('price');
        // $allData = product::whereRaw('price<?', [30])->get();
        // return $allData;


        return view('home', compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $request->validated();
        // $datas = $request->validated();

        // DB::table('products')->insert([   //👉 eloquent ORM niyom a kinto QUERY builder ar niyom follow kore
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'description' => $request->description,
        //     'color' => $request->color,
        // ]);

        // $productData = new product();   //👉 eloquent ORM niyom a MODEL diye data insert kora
        // $productData->name = $request->name;
        // $productData->price = $request->price;
        // $productData->description = $request->description;
        // $productData->color = $request->color;
        // $productData->save();

        product::create([  //👉 eloquent ORM niyom a MODEL diye data insert kora  //👉 =>ERROR<= model define { guarded = [] } OR { fillable = [j sob data insert korbo] }
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'color' => $request->color,
        ]);

        return redirect()->route('maintable')->with('msg', 'Data insert Successful');
        // return redirect(route('maintable'));
        // return $datas;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $datas = product::whereRaw("id = $id")->get();  //👉 return json object
        $datas = product::find($id); // 👉 return single object

        // return $datas;
        return view('viewProduct', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = product::find($id);
        return view('edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $request->validated();

        // $productData = new product();   //👉 eloquent ORM niyom a MODEL diye data update kora basic method
        // $productData = product::find($id);
        // $productData->name = $request->name;
        // $productData->price = $request->price;
        // $productData->description = $request->description;
        // $productData->color = $request->color;
        // $productData->save();

        product::where('id', $id)  //👉 eloquent ORM niyom a MODEL diye data update kora Mass Method
            ->update([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'color' => $request->color,
            ]);

        return redirect()->route('maintable')->with('msg', 'Data Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = product::find($id);
        $datas->delete();
        return redirect()->route('maintable')->with('msg', 'Data Delete Successful');
    }
}
