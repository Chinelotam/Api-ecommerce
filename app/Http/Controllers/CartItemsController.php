<?php

namespace App\Http\Controllers;

use App\Http\Models\CartItem;
use Illuminate\Http\Request;

class CartItemsController extends Controller
{
    public function index(){

        return CartItem::all();
    }

    public function store(Request $request){

        return CartItem::create($request->all());
    }

    public function show($id){

        return CartItem::find($id);

    }

    public function update(Request $request, $id){

        $cartitem = User::find($id);
        $cartitem->update($request->all());
        return $cartitem;

    }

    public function destroy($id){

        return CartItem::destroy($id);
    }
}
