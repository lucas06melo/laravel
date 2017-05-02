<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;

class PainelController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');

	}

    public function index()
    {
    	if (Gate::denies('dashboard'))
        return redirect()->back();
    
    	return view('painel.index.index');
    }
}
