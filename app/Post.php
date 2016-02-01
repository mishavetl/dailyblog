<?php

namespace DailyBlog;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title', 'url', 'body', 'published_at'
    ];
}
