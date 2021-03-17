@extends('layouts.app')
@section('content')

<div class="lg:flex-1 md:flex-1 lg:mx-20 md:mx-20 lg:mt-5 md:mt-5">
<div class="border border-transparent rounded-lg p-6 bg-gray-100">
<h1 class="font-bold text-4xl">Liked Preets  <i class="fa fa-recycle"></i></h1>
@include('timeline', ['preets' => auth()->user()->likedpreets()])
@endsection