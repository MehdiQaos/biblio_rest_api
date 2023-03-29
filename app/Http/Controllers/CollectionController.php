<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Http\Requests\StoreCollectionRequest;
use App\Http\Requests\UpdateCollectionRequest;
use App\Http\Resources\Collections\CollectionCollection;
use App\Http\Resources\Collections\CollectionResource;

class CollectionController extends Controller
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
        $collections = Collection::all();

        return response()->json([
            'status' => 'success',
            'collections' => new CollectionCollection($collections),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCollectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCollectionRequest $request)
    {
        $collection = Collection::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Collection created successfully',
            'collection' => new CollectionResource($collection),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collection = Collection::find($id);

        if (is_null($collection)) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Collection not found'
            ], 404);
        }

        return response()->json([
            'status' => 'succes',
            'collection' => new CollectionResource($collection),
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCollectionRequest  $request
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCollectionRequest $request, $id)
    {
        $collection = Collection::find($id);

        if (is_null($collection))
            return response()->json([
                'status' => 'fail',
                'message' => 'Collection not found',
            ], 404);

        $collection->update($request->all());
        
        return response()->json([
            'status' => 'success',
            'message' => 'Collection updated successfully',
            'collection' => new CollectionResource($collection),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collection = Collection::find($id);

        if (is_null($collection))
            return response()->json([
                'status' => 'fail',
                'message' => 'collection not found',
            ], 404);

        $collection->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'collection deleted successfully',
            'collection' => new CollectionResource($collection),
        ], 200);
    }
}
