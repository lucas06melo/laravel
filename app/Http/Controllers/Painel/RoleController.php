<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use Gate;

class RoleController extends Controller
{
    private $role;

	public function __construct(Role $role)
	{
        $this->middleware('auth');
		$this->role = $role;

	}

    public function index()
    {
    	$roles = $this->role->all();

        if (Gate::denies('post'))
        return redirect()->back();

    	return view('painel.roles.index', compact('roles'));
    }

    public function permissions($id)
    {
        $role = $this->role->find($id);

        //Receber Permissões
        $permissions = $role->permissions()->get();

        return view('painel.roles.permissions', compact('role', 'permissions'));

    }
}
