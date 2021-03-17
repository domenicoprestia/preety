@extends('layouts.app')
@section('content')

<div class="flex p-4 border  mt-4 rounded-lg mr-20 ml-20">

   <form action="{{$user->path()}}" method="POST" class="w-full" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <div class="mb-6">
         <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>
         <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" value="{{$user->name}}" required>
         @error('name')
         <p class="text-red-500 text-xs mt-2">{{$message}}</p>
         @enderror
      </div>

      <div class="mb-6">
         <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">Username</label>
         <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username" value="{{$user->username}}" required>
         @error('username')
         <p class="text-red-500 text-xs mt-2">{{$message}}</p>
         @enderror
      </div>

      <div class="mb-6">
         <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email Address</label>
         <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{$user->email}}" required>
         @error('email')
         <p class="text-red-500 text-xs mt-2">{{$message}}</p>
         @enderror
      </div>

      <div class="mb-6">
         <button type="submit" class="bg-green-400 text-white rounded py-2 px-4 hover:bg-gren-500">Commit</button>
         <a href="{{$user->path()}}" class="rounded border border-black py-2 px-4 hover:text-purple-500 hover:border-purple-500">Cancel</a>
      </div>
      
   </form>

</div>
@endsection