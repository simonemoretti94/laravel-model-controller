<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Models\Movie;
use Illuminate\Support\Arr;

Route::get('/', [PageController::class , 'index'])->name('index');


Route::get('/about' , [PageController::class , 'about'])->name('about');

Route::get('/contacts' , [PageController::class , 'contacts'])->name('contacts');

Route::get('/movie/{id}' , [PageController::class, 'movie'])->name('movie');
