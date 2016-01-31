<?php

namespace DailyBlog\Http\Controllers\Back;

use DailyBlog\Http\Controllers\Controller;

class Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('back');
    }
}
