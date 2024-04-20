@extends('layouts.app')

@section('title')

index

@endsection

@section('content')

<div class="container bg-dark">
    <div class="row gy-1">
        @foreach ($movies_data as $movie)
        <div id="card-col" class="col-lg-4 col-md-6 col-sm-6 col-12 p-1">
            <div id="card" class="card d-flex flex-column">  
                <img class="card-img-top" src="https://picsum.photos/200/300" alt="picsum">
                <div class="card-footer">
                    <p>id: {{$movie['id']}} | vote: {{$movie['vote']}}</p>
                    <p>title: {{$movie['original_title']}}</p>    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    {{-- "id" => 4
    "title" => "Gravity"
    "original_title" => "Gravity"
    "nationality" => "american/british"
    "date" => "2013-08-28"
    "vote" => 7.8 --}}

@endsection