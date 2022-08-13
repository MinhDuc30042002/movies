<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RuleGenre;
use App\Http\Resources\GenreResource as ApiGenre;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre = Genre::all();

        $response = [
            'status' => true,
            'message' => 'List Category',
            'data' => ApiGenre::collection($genre)
        ];

        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        if ($data->fails()) {
            $response = [
                'status' => true,
                'message' => 'Validate data',
                'data' => $data->errors()
            ];
            return response()->json($response, 200);
        }

        $genre = Genre::create($data);
        $response = [
            'status' => true,
            'message' => 'Store genre successful',
            'data' => new ApiGenre($genre)
        ];
        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genre = Genre::find($id);

        if (is_null($genre)) {
            $response = [
                'status' => false,
                'message' => "Don't have any genre",
                'data' => []
            ];
            return response()->json($response);
        }

        $response = [
            'status' => true,
            'message' => 'Detail Genre ' . $genre->slug,
            'data' => new ApiGenre($genre)
        ];
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'category' => 'required',
            'slug' => 'required | unique:categories'
        ]);
        if ($validator->fails()) {
            $response = [
                'status' => false,
                'message' => "Validate data",
                'data' => $validator->errors()
            ];
            return response()->json($response, 200);
        }
        $genre = Genre::where('id', '=', Genre::find($id))->update($data);
        $response = [
            'status' => false,
            'message' => "Validate data",
            'data' => new ApiGenre($genre)
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (is_null($genre)) {
            $response = [
                'status' => false,
                'message' => "Don't have any genre",
                'data' => []
            ];
            return response()->json($response, 200);
        }
        $genre->delete();

        $response = [
            'status' => true,
            'message' => 'Deleted',
            'data' => []
        ];
        return response()->json($response, 200);
    }
}
