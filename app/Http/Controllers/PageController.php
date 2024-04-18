<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies_data = Movie::all();

        return view('index', compact('movies_data'));
    }
}