<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;
use App\Http\Resources\Genres\GenreCollection;
use App\Http\Resources\Genres\GenreResource;

class GenreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        $this->middleware('role:admin|receptionist');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::all();

        return response()->json([
            'status' => 'success',
            'genres' => new GenreCollection($genres),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGenreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenreRequest $request)
    {
        $genre = Genre::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Collection created successfully',
            'genre' => new GenreResource($genre),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genre = Genre::find($id);

        if (is_null($genre)) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Genre not found'
            ], 404);
        }

        return response()->json([
            'status' => 'succes',
            'genre' => new GenreResource($genre),
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenreRequest  $request
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenreRequest $request, $id)
    {
        $genre = Genre::find($id);

        if (is_null($genre))
            return response()->json([
                'status' => 'fail',
                'message' => 'genre not found',
            ], 404);

        $genre->update($request->all());
        
        return response()->json([
            'status' => 'success',
            'message' => 'genre updated successfully',
            'genre' => new GenreResource($genre),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (is_null($genre))
            return response()->json([
                'status' => 'fail',
                'message' => 'genre not found',
            ], 404);

        $genre->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'genre deleted successfully',
            'genre' => new GenreResource($genre),
        ], 200);
    }
}
