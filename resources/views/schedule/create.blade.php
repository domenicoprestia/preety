@extends('layouts.app')

@section('content')
   
   <div class="flex  mt-4 ml-14"> 
      <div class="border-t border-r border-l rounded-t border-purple-500 p-1 ml-6 bg-white"><a href="{{route('schedules')}}">Today</a></div>
      <div class="border-t border-r  rounded-t border-purple-500 p-1 bg-white"><a href="{{route('schedulesall')}}">All</a></div>
      <div class="border-t border-r  rounded-t bg-purple-500 p-1"><a href="{{route('schedulescreate')}}">Create</a></div>
   </div>
   <div class="border rounded border-purple-500 mx-20 bg-white">
     <form method="POST" action="{{route('schedulestore')}}" class= "mt-5 mx-5" style="margin-right: 750px;">
     @csrf
     <label for="day">Day</label>
     <select class="w-full border border-purple-500 bg-white rounded px-3 py-2 outline-none" name="day">
    <option class="py-1 " value="Monday">Monday</option>
    <option class="py-1" value="Tuesday">Tuesday</option>
    <option class="py-1" value="Wednesday">Wednesday</option>
    <option class="py-1" value="Thursday">Thursday</option>
    <option class="py-1" value="Friday">Friday</option>
    <option class="py-1" value="Satutday">Satutday</option>
    <option class="py-1" value="Sunday">Sunday</option>
   </select>   
   <div class="flex mt-4">
   <div class="w/1-2 w-20">
   <label for="start_time">Start time</label>
   <select class="w-full border border-purple-500 bg-white rounded px-3 py-2 outline-none" name="start_time">
      @foreach(range(0, 24) as $index)
      @if($index <= 9)
      <option class="py-1" value="0{{$index}}:00, {{$index}}">0{{$index}}</option>
      @else
      <option class="py-1" value="{{$index}}:00, {{$index}}">{{$index}}</option>
      @endif
      @endforeach
   </select>  
   </div>
   <div class="w/1-2 w-20 ml-2">
   <label for="end_time">End time</label>
   <select class="w-full border border-purple-500 bg-white rounded px-3 py-2 outline-none" name="end_time">
   @foreach(range(0, 24) as $index)
      @if($index <= 9)
      <option class="py-1" value="0{{$index}}:00, {{$index}}">0{{$index}}</option>
      @else
      <option class="py-1" value="{{$index}}:00, {{$index}}">{{$index}}</option>
      @endif
      @endforeach
   </select>  
   </div>
   </div>
   <div class="mt-4">
   <label for="type">Garbage type</label>
   <select class="w-full border border-purple-500 bg-white rounded px-3 py-2 outline-none" name="type">
    <option class="py-1" value="Organic">Organic</option>
    <option class="py-1" value="Plastic">Plastic</option>
    <option class="py-1" value="Common">Common</option>
    <option class="py-1" value="Dry">Dry</option>
    <option class="py-1" value="Paper">Paper</option>
    <option class="py-1" value="Metal">Metal</option>
   </select>
   </div>
      <button type="submit" class="border border-purple-500 text-black-500 rounded py-2 px-4 hover:text-purple-500 my-4">Commit</button>
     </form>
   </div>
@endsection