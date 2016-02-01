<?php

namespace DailyBlog\Http\Controllers\Back;

use Illuminate\Http\Request;

use DailyBlog\Http\Requests;

use DailyBlog\Post;

use Carbon\Carbon;

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
        $posts = $this->posts->paginate(5);

        return view('back.posts.index', compact('posts'));
    }

    public function edit($id)
    {
        $post = $this->posts->findOrFail($id);

        $action = "edit";

        return view('back.posts.form', compact('post', 'action'));
    }

    public function destroy($id)
    {
        $post = $this->posts->findOrFail($id);
        $post->delete();

        return redirect('/back/posts');
    }

    public function update(Requests\PostUpdateRequest $request, $id)
    {
        $post = $this->posts->findOrFail($id);

        $post->title = $request->title;

        $post->url = $request->url;

        $post->body = $request->body;

        if ($request->published_at != "") {
            $time = new Carbon($request->published_at);
            $post->published_at = $time->toDateTimeString();
        } else {
            $post->published_at = null;
        }

        $post->save();

        return redirect('/back/posts')->with('status', 'Saved Post');
    }

    public function store(Requests\PostStoreRequest $request)
    {
        $post = new Post;

        $post->title = $request->title;

        $post->url = $request->url;

        $post->body = $request->body;

        if ($request->published_at != "") {
            $time = new Carbon($request->published_at);
            $post->published_at = $time->toDateTimeString();
        } else {
            $post->published_at = null;
        }

        $post->save();

        return redirect('/back/posts')->with('status', 'Created Post');
    }

    public function create()
    {
        $action = "create";

        $post = new Post;

        return view('back.posts.form', compact('action', 'post'));
    }
}
