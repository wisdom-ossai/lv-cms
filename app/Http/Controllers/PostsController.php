<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostFormRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use App\Tag;

class PostsController extends Controller
{

    /**
     * Contruction to add middlewares
     */
    public function __construct() {
        $this->middleware('hasCategory')->only(['create', 'store', 'edit', 'update']);
    }
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
        return view('posts.create')->withCategories(Category::all())->withTags(Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'img_url' => $request->img_url->store('posts'),
            'category_id' => $request->category_id,
            'published_at' => $request->published_at,
            'user_id' => auth()->user()->id
        ]);

        if($request->tags) {
            $post->tags()->attach($request->tags);
        }

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
        return view('posts.create')->with('post', $post)->withCategories(Category::all())->withTags(Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {

        $data = $request->only([
            'title',
            'description',
            'content',
            'published_at',
            'category_id'
        ]);

        if($request->hasFile('img_url')) {
            $post->removeImage();
            $img = $request->img_url->store('posts');
            $data['img_url'] = $img;
        };


        if ($request->tags) {
            $post->tags()->sync($request->tags);
        }

        $post->update($data);

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
        $post = Post::withTrashed()
                ->where('id', $id)
                ->firstOrFail();
                // dd($post);
        if($post->trashed()) {
            $post->removeImage();
            $post->forceDelete();
            session()->flash('success', 'Post successfully deleted post permanently');
            return redirect(route('trashed.posts'));
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
        return redirect(route('trashed.posts'));
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
