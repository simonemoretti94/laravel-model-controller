<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class Film {
    public static function all() //:array
    {
        return Movie::where('vote', '<=' , 9)->orderBy('vote', 'desc')->limit(4)->get();
    }

    public static function filter($id) //:array
    {
        return Movie::where('original_title', $id)->first();
        //return Movie::first(Film::all() , fn($movie) => $movie['original_title'] == $id);


    }
}

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

    public function movie($id)
    {

        //$movies_data = Movie::where('vote', '<=' , 9)->orderBy('vote', 'desc')->limit(4)->get();

        //$film = Arr::first($movies_data , fn($movie) => $movie['original_title'] == $id);

        $film = Film::filter($id);


        return view('/movie' , compact('film'));
    }
}