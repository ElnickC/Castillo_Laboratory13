<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', '=', session('loginId'))->first();
        $userData = post::where('user_id', '=', $user->id)->get();
        return view('posts.show', ['userData' => $userData, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pass = session('loginId');
        return view('posts.create',['getId' => $pass]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2',
            'body' => 'required|min:2'
        ]);

        post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => $request->getId
        ]);
        return redirect(route('posts.show'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
    //     return view('posts.show', ['post' => $post]);
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Post $post)
    // {
    //     return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}