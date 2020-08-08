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
        return view('welcome')->withCategories(Category::all())->withTags(Tag::all())->withPosts(Post::paginate(2));
    }
    /**
     * Display Front home page for blog visitors
     */
    public function single(Post $post) {
        return view('single')->withCategories(Category::all())->withTags(Tag::all())->with('post', $post);
    }
}
