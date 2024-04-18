@extends('layouts.app')

@section('title')

index

@endsection

@section('content')

<div class="container bg-dark">
    <div class="row gy-1">
        @foreach ($movies_data as $movie)
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 p-1">
            <div class="card d-flex flex-column" style="min-height: 160px;">
            <div class="card-header">
            <p>{{$movie['title']}}</p>    
            </div>
            <div class="card-footer">
            <p>{{$movie['original_title']}}</p>    
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection