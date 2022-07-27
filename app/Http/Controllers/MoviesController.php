<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function latest_movies()
    {
        $movie = new Movies();
        $latest_movie = $movie->latest_movies();
        return view('client.home', compact('latest_movies'));
    }

    public function get_movie_by_slug($slug)
    {
        $movie = new Movies();

        $movie = $movie->get_movie_by_slug($slug);
        $related_to = $movie->latest_movies();
        $cate = Genre::all();
        return view('client.single', compact('slug', 'movie', 'cate', 'related_to'));
    }

    public function search_movies_by_name(Request $request)
    {
        $name_input = $request->input('search');
        $default_name = 'a';
        $name = $name_input == '' ? $default_name : $name_input;

        return redirect('/search/' . $name);
    }

    public function searched_movies($name)
    {
        $movie = new Movies();

        $searched_movies = $movie->search_movies_by_name($name);
        return view(
            'client.search.search',
            [
                'cate' => Genre::all(),
                'keyword' => $name,
                'searched_movies' => $searched_movies
            ]
        );
    }
}
