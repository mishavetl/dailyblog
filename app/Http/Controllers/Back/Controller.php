<?php

namespace DailyBlog\Http\Controllers\Back;

use DailyBlog\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{
    public function __construct()
    {
        $this->middleware('back');
    }
}
