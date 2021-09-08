<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{

    public function create(int $albumId){
        return view('photo.create')->with('albumId',$albumId);
    }

    public function store(Request $request){

        $this->validate($request, [
            'title'=> 'required',
            'description'=>'required',
            'photo'=> 'required|image'
        ]);

        $filenameWithExtension = $request->file('photo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
        $extension = $request->file('photo')->getClientOriginalExtension();
        $filenameToStore = $filename . '_' . time() . '.' . $extension;

        $request->file('photo')->store('/public/albums', $filenameToStore);
     

        $photo= new Photo();
        $photo->title= $request->input('title');
        $photo->description = $request->input('description');
        $photo->album_id = $request->input('album_id');
        $photo->photo = $filenameToStore;
        $photo->size = $request->file('photo')->getSize();
        $photo->save();

        return redirect('/albums/'. $request->input('album_id') )->with('success', 'Upload photo successfully');
    }
    public function show($id){
        $album = Album::with('photos')->find($id);
        return view('albums.show')->with('album',$album);
    }
}
