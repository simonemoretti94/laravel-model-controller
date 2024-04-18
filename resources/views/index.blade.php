@extends('layouts.app')

@section('title')

index

@endsection

@section('content')

@foreach ($movies_data as $movie)
    <p style="color: black; font-size: 20px;">{{$movie['title']}}</p>    
@endforeach

@endsection