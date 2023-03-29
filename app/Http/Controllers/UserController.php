<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\Users\UserCollection;
use App\Http\Resources\Users\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        $users = User::all();

        return response()->json([
            'status' => 'success',
            'user' => new UserCollection($users),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user = User::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => new UserResource($user),
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
        $user = User::find($id);

        if (is_null($user)) {
            return response()->json([
                'status' => 'fail',
                'message' => 'User not found'
            ], 404);
        }

        return response()->json([
            'status' => 'succes',
            'user' => new UserResource($user),
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);

        if (is_null($user))
            return response()->json([
                'status' => 'fail',
                'message' => 'User not found',
            ], 404);

        $user->update($request->only('name', 'email'));
        
        return response()->json([
            'status' => 'success',
            'message' => 'User updated successfully',
            'user' => new UserResource($user),
        ], 200);
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'currentPassword' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $user = User::find($id);

        if (is_null($user)) {
            return response()->json([
                'status' => 'fail',
                'message' => 'User not found',
            ], 404);
        }
        
        // return response()->json([
        //     'password' => $request->password,
        //     // 'hashed' => Hash::make($request->password),
        // ], 200);
        
        $user->update([
            'password' => Hash::make($request->password),
        ]);
        
        return response()->json([
            'status' => 'success',
            'message' => 'Password updated successfully',
            'user' => new UserResource($user),
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
        $user = User::find($id);

        if (is_null($user))
            return response()->json([
                'status' => 'fail',
                'message' => 'user not found',
            ], 404);

        $user->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'user deleted successfully',
            'user' => new UserResource($user),
        ], 200);
    }
}
