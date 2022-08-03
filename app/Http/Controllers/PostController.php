<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    /**
     * Show create view
     * @param Post $post
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(Post $post)
    {
        return view('posts.create', compact('post'));
    }

    /**
     * Store a new post
     * @param Request $request
     * @return Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'slug' => 'required|unique:posts,slug',
        ]);

        $post = $request->user()->posts()->create([
            'title' => $title = $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
        ]);

        return redirect()->route('posts.edit', $post);
    }


    /**
     * Edit a post
     * @param Post $post
     *
     * @return \Illuminate\Contracts\View\Vie
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }


    /**
     * @param Request $request
     * @param Post $post
     *
     * @return Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            // 'slug' => 'required|unique:posts,slug',
            'slug' => [
                'required',
                Rule::unique('posts', 'slug')->ignore($post->id)
            ]

        ]);
        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
        ]);

        return redirect()->route('posts.edit', $post);
    }

    /**
     * Delete a post
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
