@extends('layouts.app')

@section('content')
    <div class="w-full grid border place-items-center pt-10 pb-5 text-align-center">
        <div class="py-1 ">
        <div>Name: {{ $album->name }}</div>
        <div>Description : {{ $album->description}}</div>
        {{-- <img src="/storage/album_covers/{{ $album->cover_image}}" alt="{{ $album->cover_image }}"  class="h-24" />  --}}
        <p class="flex ">
            {{-- <a href="{{ route('photo-create'),$album->id }}" class="p-1 bg-blue-400 rounded mr-5 ">Upload </a> --}}
            <a href="/photo/create/{{$album->id }}" class="p-1 bg-blue-400 rounded mr-5 ">Upload</a>
            <a href="/albums" class="p-1 bg-gray-200 rounded">Go Back</a>
        </p>
        </div>
        </div>
   
    <div>
        <div class="mx-20 my-10 flex ">
               @if(count($album->photos)) 
                    @foreach($album->photos as $item)
                        <div>
                            <div class=" p-1 mx-10 w-56  border rounded">
                                <div class="grid place-items-center mb-3">
                                    <img src="/storage/albums/{{ $item->photo}}" alt="{{ $item->photo}}"  class="h-24" /> 
                                </div>
                                <div>
                                     <div>Name: {{ $item->title }}</div>
                                     <div>Description: {{ $item->description}}</div>
                                </div>  
                            </div>
                        </div>
                    @endforeach
                @else
                    <div>There is no photo in this album</div>
                @endif
            </div>
        </div>
@endsection
