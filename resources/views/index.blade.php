@extends('layouts.app')

@section('title')

index

@endsection

@section('content')

<div class="container bg-dark mb-4">
    <div class="row gy-1 {{count($movies_data) % 2 === 0 ? 'justify-content-evenly' : 'justify-content-center'}}">
        @foreach ($movies_data as $movie)
        <div id="card-col" class="col-lg-3 col-md-4 col-sm-6 col-12 p-1">
            <div id="card" class="card d-flex flex-column">  
                <img class="card-img-top" src="https://picsum.photos/200/300" alt="picsum">
                <div class="card-footer">
                    <p>id: {{$movie['id']}} | vote: {{$movie['vote']}}</p>
                    <p>title: <a class="text-primary" href="/movie/{{$movie['original_title']}}">{{$movie['original_title']}}</a></p>    
                </div>
            </div>
        </div>
        @endforeach

        {{-- <div class="container">
        <ul class="w-50 mx-auto my-2 ms-0">
        @foreach ($movies_data as $movie)
            <li style="text-align: left !important;">
                <a href="/movie/{{$movie['original_title']}}" class="text-primary">
                    <strong class="text-white">{{$movie['id']}} | </strong> {{$movie['original_title']}}
                </a>
            </li>    
        @endforeach
        </ul>
        </div> --}}

    </div>
    <h2 style="color: white;">array length: {{count($movies_data)}}</h2>
</div>
    {{-- "id" => 4
    "title" => "Gravity"
    "original_title" => "Gravity"
    "nationality" => "american/british"
    "date" => "2013-08-28"
    "vote" => 7.8 --}}

@endsection