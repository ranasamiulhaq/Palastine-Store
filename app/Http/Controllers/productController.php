<?php

namespace App\Http\Controllers;

use App\Models\scrapped_data;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        $products = scrapped_data::take(10)->get();
        return view('product', ['products' => $products]);
    }

    public function append($page)
    {
        $perPage = 10;
        $offset = ($page - 1) * $perPage;
        $products = scrapped_data::offset($offset)->limit($perPage)->get(); // Corrected model name
        return response()->json($products);
    }
    public function search(Request $request){
        $query=$request->input("query");
        $products=scrapped_data::where('title', 'like', "%$query%")->get();
        return view('product',compact('products'));


    }
}
