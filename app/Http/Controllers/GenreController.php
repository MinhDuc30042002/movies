<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{

    public function category($slug)
    {
        $genre = new Genre();
        $category_by_slug = $genre->get_category_by_slug($slug);
        $cate = Genre::all();

        return view('client.genre.single', [
            'cate' => $cate,
            'category_by_slug' => $category_by_slug,
            'category' => $category_by_slug['category']
        ]);
    }
}
