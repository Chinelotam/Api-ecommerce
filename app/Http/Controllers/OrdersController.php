<?php

namespace App\Http\Controllers;

use App\Http\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index(){

        return Order::all();
    }

    public function store(Request $request){

        return Order::create($request->all());
    }

    public function show($id){

        return Order::find($id);

    }

    public function update(Request $request, $id){

        $order = Orders::find($id);
        $order->update($request->all());
        return $order;

    }

    public function destroy($id){

        return Order::destroy($id);
    }
}
