<?php

namespace App\Http\Controllers;

use App\Http\Resources\Author\AuthorCollection;
use App\Http\Resources\Author\AuthorResource;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'status' => 'success',
            'authors' => new AuthorCollection($authors),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:authors,name,'],
        ]);

        $author = Author::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Author created successfully',
            'genre' => new AuthorResource($author),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = Author::find($id);

        if (is_null($author)) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Author not found'
            ], 404);
        }

        return response()->json([
            'status' => 'succes',
            'author' => new AuthorResource($author),
        ], 200);
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
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:authors,name,' . $id],
        ]);

        $author = Author::find($id);

        if (is_null($author))
            return response()->json([
                'status' => 'fail',
                'message' => 'author not found',
            ], 404);

        $author->update($request->all());
        
        return response()->json([
            'status' => 'success',
            'message' => 'author updated successfully',
            'author' => new AuthorResource($author),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = Author::find($id);

        if (is_null($author))
            return response()->json([
                'status' => 'fail',
                'message' => 'author not found',
            ], 404);

        $author->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'genre deleted successfully',
            'genre' => new AuthorResource($author),
        ], 200);
    }
}
