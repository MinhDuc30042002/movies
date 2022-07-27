<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movies;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movies = new Movies();
        $genre = new Genre();

        $cate = Genre::all();
        
        $latest_movies = $movies->latest_movies();
        $requested_movies = $movies->requested_movies();
        $top_movies = $movies->top_movies();
        $top_1_movie = $movies->top_1_movie();

        return view('client.home', compact('cate', 'latest_movies', 'requested_movies', 'top_movies', 'top_1_movie'));
    }
}
