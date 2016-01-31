<?php

namespace DailyBlog\Http\Controllers;

use Illuminate\Http\Request;

use DailyBlog\Http\Requests;
use DailyBlog\Http\Controllers\Controller;

use DailyBlog\Post;

use Carbon\Carbon;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())->get();

        return view('front/blog', compact('posts'));
    }
}
