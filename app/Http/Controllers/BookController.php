<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Resources\Books\BookCollection;
use App\Http\Resources\Books\BookResource;

class BookController extends Controller
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
        $books = Book::all();

        return response()->json([
            'status' => 'success',
            'books' => new BookCollection($books),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
        $book = Book::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Book created successfully',
            'book' => new BookResource($book),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);

        if (is_null($book)) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Book not found'
            ], 404);
        }

        return response()->json([
            'status' => 'succes',
            'book' => new BookResource($book),
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, $id)
    {
        $book = Book::find($id);

        if (is_null($book))
            return response()->json([
                'status' => 'fail',
                'message' => 'Book not found',
            ], 404);

        $book->update($request->all());
        
        return response()->json([
            'status' => 'success',
            'message' => 'Book updated successfully',
            'book' => new BookResource($book),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);

        if (is_null($book))
            return response()->json([
                'status' => 'fail',
                'message' => 'book not found',
            ], 404);

        $book->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'book deleted successfully',
            'book' => new BookResource($book),
        ], 200);

    }
}
