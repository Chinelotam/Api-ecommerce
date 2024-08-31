<?php

namespace App\Http\Controllers;

use App\Http\Models\Favourite;
use Illuminate\Http\Request;

class FavouritesController extends Controller
{
    public function index(){

        return Favourite::all();
    }

    public function store(Request $request){

        return Favorite::create($request->all());
    }

    public function show($id){

        return Favourite::find($id);

    }

    public function update(Request $request, $id){

        $favourite = Favourite::find($id);
        $favourite->update($request->all());
        return $favourite;

    }

    public function destroy($id){

        return Favourite::destroy($id);
    }
}
