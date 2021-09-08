<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumsController extends Controller
{
    public function index(){
        // return 123;
        $albums = Album::get();
        // dd($albums);
        return view('albums.index')->with('albums', $albums);
    }

    public function create(){
        return view('albums.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'=> 'required',
            'description'=>'required',
            'cover_image'=> 'required|image'
        ]);

        $filenameWithExtension = $request->file('cover_image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        $filenameToStore = $filename . '_' . time() . '.' . $extension;

        $request->file('cover_image')->storeAs('/public/album_covers', $filenameToStore);
     

        $album = new Album();
        $album->name = $request->input('name');
        $album->description = $request->input('description');
        $album->cover_image = $filenameToStore;
        $album->save();

        return redirect('/public/albums')->with('success', 'Create album successfully');
    }
    public function show($id){
        $album = Album::with('photos')->find($id);
        // dd($album->photos);
        return view('albums.show')->with('album',$album);
    }
}
