<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        return view('site.index.index');
    }
}
