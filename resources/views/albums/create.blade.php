@extends('layouts.app')


@section('content')
<div><a href="/" class="p-1 ml-20 relative top-5 bg-gray-200 mb-5 rounded mt-5">Go Back</a></div>
<h2 class="pl-20 mt-10 mb-10">Create new Albums</h2>
<div class="grid place-items-center w-full">
<div class="w-2/4">
  <form enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{ route('albums-store') }}">
    @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" placeholder="Enter the name">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
        Description
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="description" id="description" type="text" placeholder="Enter the description" >
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="cover_image">
        Cover Image
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="cover_image" id="cover_image" type="file" >
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
       Create
      </button>
    </div>
  </form>
 </div>
</div>
@endsection
