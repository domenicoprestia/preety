@extends('layouts.app')
@section('content')
<div class="mx-10">
   <form method="GET" action="{{route('profileshow')}}"class="w-full">
   <input type="search" name="username" class="rounded-lg mt-4 ml-6" placeholder="Search username... ">
   <a href=""><input type="submit" value=""><i class="fa fa-search text-gray-700 hover:text-purple-500 ml-1" ></i></a>
   </form>
    @forelse($profiles as $profile)
      <x-profile :user="$profile"></x-profile>
    @endforeach
</div>
@endsection