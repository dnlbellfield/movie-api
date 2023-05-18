@extends('layouts/main-layout')

@section('title','Results')

@section('content')
<section class="relative pt-28 pb-36 bg-black overflow-hidden">
  <div class="container mx-auto px-4">
    <p
      class="mb-6 max-w-max mx-auto text-center text-transparent bg-clip-text bg-gradient-cyan2 font-heading text-xs uppercase font-semibold tracking-px">
      HERE'S YOUR RESULTS
    </p>
    <h2 class="mb-20 font-heading font-semibold text-center text-6xl sm:text-7xl text-white">Star Wars
    </h2>
    <div class="flex flex-wrap -m-3"></div> 
    <!-- show poster  -->
    <div class="w-full md:w-/4 xl:w-1/4 p-3">
        <div class="flex flex-col justify-end h-full relative bg-gradient-cyan overflow-hidden rounded-10">
          <img class="mx-auto w-full" src="{{$data['poster']}}" alt="">
        </div>
    </div>
    <div class="w-full md:w-3/4 xl:w-3/4 p-3 text-white">
      <h2 class="text-5xl mb-6 max-w-max mx-auto text-transparent bg-clip-text bg-gradient-cyan2 font-heading text-xs uppercase font-semibold tracking-px">{{$data['title']}}</h2> 
      <div class="md:w-4/12 text-xl text-white">
      <span class="font-bold">Genre: </span>
       @foreach ( $data['genre_names'] as $genre)
      <span> {{$genre}}</span>
      @endforeach
    </div>


  </div>
</section>
@endsection