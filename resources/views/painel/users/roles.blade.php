@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Role: {{$user->name}}</h3>
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

  @forelse($roles as $role)
    <tr>
      <th scope="row">{{$role->id}}</th>
      <td>{{$role->name}}</td>
      <td>{{$role->label}}</td>
      <td><a class="btn btn-danger" href="{{url("/painel/users/$user->id/users/delete")}}">Excluir</a></td>
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
