<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display Front home page for blog visitors
     */
    public function index() {
        $latestPosts = Post::latest()->get()->take(4);
        return view('welcome')
        ->withCategories(Category::all())
        ->withTags(Tag::all())
        ->with('posts', Post::searched()->paginate(4))
        ->with('latestPosts', $latestPosts);
    }
    /**
     * Display Front home page for blog visitors
     */
    public function single(Post $post) {
        $latestPosts = Post::latest()->get()->take(4);
        // dd($latestPosts);
        return view('single')
        ->withCategories(Category::all())
        ->withTags(Tag::all())
        ->with('post', $post)
        ->with('latestPosts', $latestPosts);
    }
    /**
     * Display Front Category page for blog visitors
     */
    public function category(Category $category) {
        $latestPosts = Post::latest()->get()->take(4);
        return view('category')
        ->with('category', $category)
        ->withCategories(Category::all())
        ->withTags(Tag::all())
        ->with('posts', $category->posts()->searched()->paginate(4))
        ->with('latestPosts', $latestPosts);
    }
    /**
     * Display Front Tag page for blog visitors
     */
    public function tag(Tag $tag) {
        $latestPosts = Post::latest()->get()->take(4);
        return view('tag')
        ->with('tag', $tag)
        ->withCategories(Category::all())
        ->withTags(Tag::all())
        ->with('posts', $tag->posts()->searched()->paginate(4))
        ->with('latestPosts', $latestPosts);
    }
}
