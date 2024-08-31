<?php

namespace App\Http\Controllers;

use App\Http\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        return Product::all();
    }

    public function store(Request $request){

        return Product::create($request->all());
    }

    public function show($id){

        return Product::find($id);

    }

    public function update(Request $request, $id){

        $product = Product::find($id);
        $product->update($request->all());
        return $product;

    }

    public function destroy($id){

        return Product::destroy($id);
    }
}
