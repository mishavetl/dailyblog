<?php

namespace DailyBlog\Http\Controllers\Back;

use Illuminate\Http\Request;

use DailyBlog\Http\Requests;
use DailyBlog\Http\Controllers\Controller;

use DailyBlog\Post;

class PostController extends Controller
{
    protected $posts;

    public function __construct(Post $posts)
    {
        $this->posts = $posts;
        parent::__construct();
    }

    public function index()
    {
        $posts = $this->posts->all();

        return view('back.index', compact('posts'));
    }

    public function edit()
    {
        //
    }

    public function destroy()
    {
        //
    }

    public function update()
    {
        //
    }

    public function create()
    {
        //
    }
}
