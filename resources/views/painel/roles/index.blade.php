@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Roles</h3>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Titulo</th>
      <th>Descrição</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>

  @forelse($roles as $role)
    <tr>
      <td>{{$role->name}}</td>
      <td>{{$role->label}}</td>
      <td><a class="btn btn-info" href="{{url("/painel/roles/$role->id/edit")}}">Editar</a> | <a class="btn btn-warning" href="{{url("/painel/roles/$role->id/permissions")}}">Permissões</a> | <a class="btn btn-danger" href="{{url("/painel/roles/$role->id/delete")}}">Excluir</a></td>
    </tr>
    @empty
    <tr>
    	<td colspan="90"><p>Nenhum resultado</p></td>
    </tr>
    @endforelse
  </tbody>
</table>

</div>
@endsection
