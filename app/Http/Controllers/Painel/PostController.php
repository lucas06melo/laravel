<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Gate;

class PostController extends Controller
{

	private $post;

	public function __construct(Post $post)
	{
		$this->middleware('auth');
		$this->post = $post;

            if (Gate::denies('post'))
            return redirect()->back();
	}

    public function index()
    {
    	$posts = $this->post->all();

    	return view('painel.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('painel.posts.create');
    }

    

}
