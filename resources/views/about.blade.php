@extends('layouts.app')

@section('title' , 'about')

@section('content')

<div>
<div class="container" >
    <h2 class="text-center text-white" >Whoops!</h2>
    <p class="text-center text-primary mt-5">
    I apologize for any inconvenience you may have experienced while searching for content on our website. Unfortunately, it seems that the information you were looking for is currently unavailable. We are actively working to rectify this issue and appreciate your patience.

    If there’s anything else we can assist you with, please feel free to reach out. Thank you for your understanding.

    The staff | back here: <a href="{{route('index')}}" class="text-white text-center">Home</a>
    </p>

</div>
</div>

@endsection