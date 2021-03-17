@extends('layouts.app')
@section('content')
   <div class="flex mt-4 ml-20"> 
      <div class="border-t border-r border-l  rounded-t border-purple-500 p-1 bg-white"><a href="{{route('schedules')}}">Today</a></div>
      <div class="border-t border-r  rounded-t bg-purple-500 p-1"><a href="{{route('schedulesall')}}">All</a></div>
      <div class="border-t border-r  rounded-t border-purple-500 p-1 bg-white"><a href="{{route('schedulescreate')}}">Create</a></div>
   </div>
   <div class="border rounded border-purple-500 mx-20 bg-white">
      @foreach($schedules as $schedule)
         <x-schedule :schedule=$schedule></x-schedule>
         @endforeach
   </div>
@endsection