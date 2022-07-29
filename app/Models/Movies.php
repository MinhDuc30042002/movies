<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Movies extends Model
{
    protected $table = 'movies';
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name', 'link_img', 'status', 'director', 'national', 'released', 'timing', 'slug', 'description', 'id_category'
    ];
    public function latest_movies()
    {
        $latest_movies = DB::table('movies')
            ->orderBy('id', 'DESC')
            ->limit(8)
            ->get();
        return $latest_movies;
    }

    public function requested_movies()
    {
        $requested_movies = DB::table('movies')
            ->orderBy('released', 'DESC')
            ->limit(10)
            ->get();
        return $requested_movies;
    }

    public function top_movies()
    {
        $top_movies = DB::table('movies')
            ->orderBy('view', 'DESC')
            ->skip(2)
            ->take(12)
            ->get();
        return $top_movies;
    }

    public function top_1_movie()
    {
        $top_1_movie = DB::table('movies')
            ->orderBy('view', 'DESC')
            ->first();
        return $top_1_movie;
    }

    public function get_movie_by_slug($slug)
    {
        $get_movie_by_slug = DB::table('movies')
            ->where('slug', $slug)
            ->get();
        return $get_movie_by_slug;
    }

    public function search_movies_by_name($name)
    {
        $searched_movies = DB::table('movies')
            ->where('slug', 'like', '%' . $name . '%')
            ->paginate();
        return $searched_movies;
    }
}
