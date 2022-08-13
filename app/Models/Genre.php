<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Genre extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'categories';
    public $timestamps = false;
    protected $fillable = ['category', 'slug'];

    public function get_category_by_slug($slug)
    {
        $category = DB::table('movies')
            ->join('categories', 'movies.id_category', '=', 'categories.id')
            ->where('categories.slug', $slug)
            ->select('movies.*', 'categories.*', 'movies.slug')
            ->paginate(15);

        return $category;
    }
}
