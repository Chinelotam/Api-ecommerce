<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

        return User::all();
    }

    public function store(Request $request){

        return User::create($request->all());
    }

    public function show($id){

        return User::find($id);

    }

    public function update(Request $request, $id){

        $user = User::find($id);
        $user->update($request->all());
        return $user;

    }

    public function destroy($id){

        return User::destroy($id);
    }
}
