<ul class="flex border p-2 pl-10">
   <li class="mr-6 {{ Request::is('/') ? 'font-bold' : '' }} ">
    <a class="text-blue-500 hover:text-blue-800" href="{{route('albums-all')}}">Albums</a>
  </li>
  <li class="mr-6 {{ Request::is('albums/create') ? 'font-bold' : '' }} ">
    <a class="text-blue-500 hover:text-blue-800" href="{{ route('albums-create') }}">Create Albums</a>
  </li>
  <li class="mr-6">
    <a class="text-blue-500 hover:text-blue-800" href="#">Photo</a>
  </li>
</ul>
