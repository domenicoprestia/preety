@extends('layouts.app')

@section('content')
   
   <div class="flex mt-4 ml-20"> 
      <div class="border-t border-r border-l  rounded-t border-b bg-purple-500 p-1 text-black"><a href="{{route('schedules')}}">Today</a></div>
      <div class="border-t border-r  rounded-t  border-purple-500 p-1 bg-white "><a href="{{route('schedulesall')}}">All</a></div>
      <div class="border-t border-r  rounded-t border-purple-500 p-1 bg-white"><a href="{{route('schedulescreate')}}">Create</a></div>
   </div>
   <div class="border rounded bg-white border-purple-500 mx-20">
      @forelse($schedules as $schedule)
      <x-schedule :schedule=$schedule></x-schedule>
      @empty
      <div class="p-10 ">
    <div class="max-w-sm rounded overflow-hidden shadow-lg bg-purple-500 text-white">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Nothing scheduled for today!</div>
      </div>
    </div>
  </div>
      @endforelse
   </div>
@endsection