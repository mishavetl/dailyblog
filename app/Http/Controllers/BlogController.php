<?php

namespace DailyBlog\Http\Controllers;

use Illuminate\Http\Request;

use DailyBlog\Http\Requests;
use DailyBlog\Http\Controllers\Controller;

use DailyBlog\Post;

use Carbon\Carbon;

class BlogController extends Controller
{
    protected $posts;

    public function __construct(Post $posts)
    {
        $this->posts = $posts;
    }

    public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())->paginate(2);

        return view('front/blog', compact('posts'));
    }
}
