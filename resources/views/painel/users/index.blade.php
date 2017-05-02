@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Permissões</h3>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Titulo</th>
      <th>Descrição</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>

  @forelse($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td><a class="btn btn-info" href="{{url("/painel/users/$user->id/edit")}}">Editar</a> | <a class="btn btn-warning" href="{{url("/painel/users/$user->id/roles")}}">Permissão</a> | <a class="btn btn-danger" href="{{url("/painel/users/$user->id/delete")}}">Excluir</a></td>
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
