<?php

namespace DailyBlog;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title', 'url', 'body', 'published_at'
    ];

    public function isPublished()
    {
        if ($this->published_at <= Carbon::now()) {
            return false;
        }

        return true;
    }
}
