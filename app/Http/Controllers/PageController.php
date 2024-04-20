<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        //$movies_data = Movie::all();
        //$movies_data = Movie::where('title' , 'Gravity')->get();
        //$movies_data = Movie::where('vote', '<' , '8')->get();
        //$movies_data = Movie::where('vote',  '>' , 9)->orderBy('date' , 'desc')->limit(2)->get();
        //$movies_data = Movie::where('vote',  '>' , 9)->orderBy('date' , 'desc')->paginate(4);
        //$movies_data = Movie::where('vote',  '>' , 9)->first(); only without iterating on it
        //$movies_data = Movie::find(7); finds the seventh element of the object
        $movies_data = Movie::where('vote', '<=' , 9)->orderBy('vote', 'desc')->limit(4)->get();

        //dd($movies_data);

        return view('index', compact('movies_data'));
    }

    public function about()
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contacts');
    }
}