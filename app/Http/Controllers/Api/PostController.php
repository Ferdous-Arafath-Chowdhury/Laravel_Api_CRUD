<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $post = Post::all();
        return $post;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
        // dd($request->all());

        $post = Post::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Post added susscessfully',
            'post' => $post
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, Post $post)
    {
        $post->update($request->all());
    
        return response()->json([
            'status' => true,
            'message' => 'Post Updated successfully',
            'post' => $post
        ], 200);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        

        $post->delete();

        return response()->json([
            'status' => true,
            'message' => 'Post Deleted successfully',
            'post' => $post
        ], 200);
    }
}
