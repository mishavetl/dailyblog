<?php

namespace DailyBlog\Http\Controllers\Back;

use Illuminate\Http\Request;

use DailyBlog\Http\Requests;

class DashboardController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('back.dashboard');
    }
}
