<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display Front home page for blog visitors
     */
    public function index() {
        return view('welcome')->withCategories(Category::all())->withTags(Tag::all())->withPosts(Post::all());
    }
}
