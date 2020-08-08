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
        $search = request()->query('search');
        if($search) {
            $posts = Post::query()->where('title', 'LIKE', "%{$search}%")->orWhere('description', 'LIKE', "%{$search}%")->paginate(2);
        } else {
            $posts = Post::paginate(2);
        }
        return view('welcome')->withCategories(Category::all())->withTags(Tag::all())->with('posts', $posts);
    }
    /**
     * Display Front home page for blog visitors
     */
    public function single(Post $post) {
        return view('single')->withCategories(Category::all())->withTags(Tag::all())->with('post', $post);
    }
}
