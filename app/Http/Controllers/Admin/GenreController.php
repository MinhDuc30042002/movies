<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RuleGenre;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre = Genre::all();
        return view('admin.genre.genre', compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.genre.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RuleGenre $request)
    {
        $data = $request->validated();

        Genre::create($data);
        return redirect('/admin/the-loai/them')->with('message', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $category = Genre::where('slug', '=', $slug)->firstOrFail();
        return view('admin.genre.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RuleGenre $request, $slug)
    {
        $data = $request->validated();
        $update_category = Genre::where('slug', '=', $slug)->update(
            [
                'category' => $data['category'],
                'slug' => $data['slug']
            ]
        );
        return redirect('/admin/the-loai/sua/' . $data['slug'])->with('message', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $find_id = Genre::find($id);
        if ($find_id) {
            $toast = 'Bạn đã xóa thành công';
            $find_id->delete();
            return redirect('admin/the-loai')->with('msg', $toast);
        } else {
            $toast = 'Fail';
            return redirect('admin/the-loai');
        }
    }

    public function restore($id)
    {
        $onlySoftDeleted = Genre::onlyTrashed()
            ->findOrFail($id);

        $onlySoftDeleted->restore();
        return redirect()->route('admin.the-loai');
    }
}
