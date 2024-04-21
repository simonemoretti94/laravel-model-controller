<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Models\Movie;
use Illuminate\Support\Arr;

Route::get('/', [PageController::class , 'index'])->name('index');


Route::get('/about' , [PageController::class , 'about'])->name('about');

Route::get('/contacts' , [PageController::class , 'contacts'])->name('contacts');

//test

Route::get('/movie/{id}' , function($id){
    //dd($id);
    $movies_data = Movie::where('vote', '<=' , 9)->orderBy('vote', 'desc')->limit(4)->get();

    $film = Arr::first($movies_data , fn($movie) => $movie['id'] == $id);

    //dd($film);

    return view('movie' , compact('film'));
});
