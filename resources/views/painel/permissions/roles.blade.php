@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Role: {{$permission->name}}</h3>
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
      <td><a class="btn btn-danger" href="{{url("/painel/permissions/$permission->id/permissions/delete")}}">Excluir</a></td>
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
