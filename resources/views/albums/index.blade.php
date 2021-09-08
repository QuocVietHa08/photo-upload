@extends('layouts.app')

@section('content')
    <div class="mx-20 my-10 flex ">
    @if(count($albums) > 0)
        @foreach($albums as $item)
        <div class=" p-1 mx-10 w-56  border rounded">
                <div class="grid place-items-center mb-3">
                    <img src="{{"storage/album_covers/" . $item->cover_image}}" alt="{{ $item->cover_image }}"  class="h-24" /> 
                    {{-- <img src="<?php echo asset("storage/app/public/album_covers/".$item->cover_image")?>" alt="{{ $item->cover_image }}"  class="h-24" />  --}}
                </div>
                
                <div>
                     <div>Name: {{ $item->name }}</div>
                     <div>Description: {{ $item->description}}</div>
                     <div class="flex justify-between w-full">
                         <a href="/albums/{{$item->id}}" ><button class="p-1 bg-blue-400 mt-4 rounded mb-4 ml-2">Detail</button></a>
                         <button class="p-1 bg-red-400 mr-2 mt-4 mb-4 rounded">Delete</button>
                    </div>
                </div>  
        </div>
        @endforeach
    </div>
    @else
        <div>There is no album</div>
    @endif
    

@endsection
