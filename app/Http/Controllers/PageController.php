<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies_data = Movie::all();

        return view('home', compact('movies_data'));
    }
}
// git commit -m "first commit"
// git branch -M main
// git remote add origin https://github.com/simonemoretti94/laravel-model-controller.git
// git push -u origin main