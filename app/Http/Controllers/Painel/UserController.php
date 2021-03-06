<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Gate;

class UserController extends Controller
{
    private $user;

	public function __construct(User $user)
	{
		$this->middleware('auth');
        $this->user = $user;

	}

    public function index()
    {
    	$users = $this->user->all();

        if (Gate::denies('view_users'))
        return redirect()->back();

    	return view('painel.users.index', compact('users'));
    }

    public function roles($id)
    {
        $user = $this->user->find($id);

        //Receber Usuario
        $roles = $user->roles()->get();

        return view('painel.users.roles', compact('user', 'roles'));

    }
}
