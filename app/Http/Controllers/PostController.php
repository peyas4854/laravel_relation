<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('comment')->findOrFail(1);

        return response()->json($posts);

//        return view('post', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     * apply sync/attach/detach method for many to many
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

//        $post = Post::factory()->create();
//
//        $post->tags()->detach(
//            [
//                1 => ['status' => 'active'],
//                2 => ['status' => 'inactive'],
//            ]
//        );
        $post = Post::findOrFail(1);

        $post->comments()->create([
            'user_id' => $post->user_id,
            'body' => 'sdfsdfdsfds',
        ]);


        return $post;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     * Apply sync/attach/detach method for many to many
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        $post->tags()->sync([3]);

        return $post;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
