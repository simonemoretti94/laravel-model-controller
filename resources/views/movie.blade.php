@extends('layouts.app')

@section('title')
movie
@endsection

@section('content')
<div class="container">
    <h1 class="text-center text-primary mt-5" ><strong class="text-white">{{$film['id']}} |</strong> {{$film['original_title']}}</h1>
    <p> <img class="card-img-top mt-2" src="https://picsum.photos/200/300" alt="picsum" style="max-width: 200px; aspect-ratio: 1 / 1;"></p>
</div>
@endsection