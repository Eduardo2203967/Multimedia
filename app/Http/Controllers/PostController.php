<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy("name")->get();
        $post = new Post;
        return view('posts.add', compact("categories", "post"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $fields = $request->validated();
        $post = new Post;
        $post->fill($fields);
        $post->user_id = auth()->user()->id;
        $post->category_id = $fields["category"];
        if ($request->hasFile('image')) {
            $img_path = $request->file('image')->store('public/posts_images');
            $post->image = basename($img_path);
        }
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function showPost(Post $post)
    {
        return view('showPost', compact('post'))->with('menuOption', 'P');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy("name")->get();
        return view('posts.edit', compact('categories', 'post'));
    }

    public function posts()
    {
        $posts = Post::orderBy("date", "desc")->paginate('10');
        return view('posts', compact('posts'))->with('menuOption', 'P');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $fields = $request->validated();
        $post->fill($fields);
        if ($request->hasFile('image')) {
            if (!empty($post->image)) {
                Storage::disk('public')->delete('posts_images/' . $post->image);
            }
            $img_path = $request->file('image')->store('public/posts_images');
            $post->image = basename($img_path);
        }
        $post->category_id = $fields['category'];
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (!empty($post->image)) {
            Storage::disk('public')->delete('posts_images/' . $post->image);
        }
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post successfully deleted');
    }
}
