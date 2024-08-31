<?php

namespace App\Http\Controllers;

use App\Http\Models\Vendor;
use Illuminate\Http\Request;

class VendorsController extends Controller
{
    public function index(){

        return Vendor::all();
    }

    public function store(Request $request){

        return Vendor::create($request->all());
    }

    public function show($id){

        return Vendor::find($id);

    }

    public function update(Request $request, $id){

        $order = Vendor::find($id);
        $order->update($request->all());
        return $vendor;

    }

    public function destroy($id){

        return Vendor::destroy($id);
    }
}
