<?php

namespace App\Http\Controllers;

use App\Http\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index(){

        return Media::all();
    }

    public function store(Request $request){

        return Media::create($request->all());
    }

    public function show($id){

        return Media::find($id);

    }

    public function update(Request $request, $id){

        $media = Media::find($id);
        $media->update($request->all());
        return $media;

    }

    public function destroy($id){

        return Media::destroy($id);
    }
}
