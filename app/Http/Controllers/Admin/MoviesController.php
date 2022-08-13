<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RuleMovies;
use App\Models\Genre;
use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movies::paginate(10);
        return view('admin.movies.movie', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Genre::all();
        return view('admin.movies.add', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RuleMovies $request)
    {

        $data = $request->validated();
        Movies::create($data);

        return redirect('/admin/phim/them')->with('message', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        //
        $a = $request->validate();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $movie = Movies::where('slug', '=', $slug)->firstOrFail();
        $category = Genre::all();

        $category_of_movie = Genre::where('id', '=' , $movie['id_category'])->firstOrFail();
        return view('admin.movies.edit', compact('movie', 'category', 'category_of_movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RuleMovies $request, $slug)
    {
        $data = $request->except('_token');
        $update_movie = Movies::where('slug', '=', $slug)->update($data);
        return redirect('/admin/phim/sua/' . $data['slug'])->with('message', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detroy_movie = Movies::findOrFail($id);
        $detroy_movie->delete();
        return back()->with('msg', 'Xóa thành công');
    }
}
