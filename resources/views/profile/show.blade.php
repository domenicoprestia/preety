@extends('layouts.app')

@section('content')
<div class="lg:flex-1 md:flex-1 lg:mx-20 md:mx-20 lg:mt-5 md:mt-5 ">
   <div class="border border-transparent rounded-lg p-6 bg-gray-100">
      <div class="flex justify-between items-center">
         <div>
            <h2 class="font-bold text-2xl mb-2">{{$user->username}}</h2>
            <p class="text-sm">Started sharing {{$user->created_at->diffForHumans()}}</p>
         </div>

         <div>
            <a href="{{route('profile', $user->username)}}" style="max-width: 200px;"></a>
         </div>

         <div class="flex">
            @if(auth()->user()->id == $user->id)
            <a href="{{$user->path('edit')}}" class="border-gray-700 border rounded-full py-2 px-2 text-black text-xs">Edit Profile</a>
            @endif
            @if(auth()->user()->id != $user->id)
            <x-follow-button :user="$user"></x-follow-button>
            @endif
            </form>
         </div>
      </div>
      <hr class="mt-6">
      
      @include('timeline', ['preets' => $user->preets])
      @endsection