@extends('layouts.admin')

@section('title', 'Permissões')

@section('content')
<div class="container">
    <h3>Permissões</h3>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Titulo</th>
      <th>Descrição</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>

  @forelse($permissions as $permission)
    <tr>
      <td>{{$permission->name}}</td>
      <td>{{$permission->label}}</td>
      <td><a class="btn btn-info" href="{{url("/painel/permissions/$permission->id/edit")}}">Editar</a> | <a class="btn btn-warning" href="{{url("/painel/permissions/$permission->id/roles")}}">Permissão</a> | <a class="btn btn-danger" href="{{url("/painel/permissions/$permission->id/delete")}}">Excluir</a></td>
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
