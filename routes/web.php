<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class , 'index'])->name('index');


Route::get('/about' , [PageController::class , 'about'])->name('about');

Route::get('/contacts' , [PageController::class , 'contacts'])->name('contacts');