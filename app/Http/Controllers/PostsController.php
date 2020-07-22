<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostFormRequest;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'img_url' => $request->img_url->store('posts')
        ]);

        session()->flash('success', 'Post created successfully');

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.create')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostFormRequest $request, $id)
    {
        Post::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'img_url' => $request->img_url
            ]);

        session()->flash('success', 'Post updated successfully');
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::onlyTrashed()
                ->where('id', $id)
                ->firstOrFail();
                // dd($post);
        if($post) {
            $post->forceDelete();
            session()->flash('success', 'Post successfully deleted post permanently');
            return redirect(route('posts.index'));
        } else {
            Post::where('id', $id)->delete();
            session()->flash('success', 'Post successfully moved to trash');
            return redirect(route('posts.index'));
        }

    }

    /**
     * Restore soft deleted post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function retrieve($id)
    {
        Post::onlyTrashed()->where('id', $id)->restore();
        session()->flash('success', 'Post successfully restored post');
        return redirect(route('posts.index'));
    }

    /**
     * Display listing for trashed posts.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $allTrashed = Post::onlyTrashed()->get();
        return view('posts.index')->with('posts', $allTrashed);
    }
}
